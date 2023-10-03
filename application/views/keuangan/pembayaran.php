<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <?php $this->load->view('sidebar_keuangan'); ?>
    <main class="flex-1 overflow-x-hidden overflow-y-auto ">
        <div class="container mx-auto px-6 py-8">
            <!-- Table -->
            <div class="bg-white p-6 rounded-lg" style="margin-left: 300px;">
                <a href="<?php echo base_url(
                    'keuangan/tambah_pembayaran'
                ); ?>" class="bg-lime-500 hover:bg-lime-600 text-white font-bold py-2 px-4 rounded">
                    <i class="fa-solid fa-plus"></i>
                </a>
                <!-- Using utilities: -->
                <a href="<?php echo base_url(
                    'keuangan/export'
                ); ?>" class="bg-blue-500 hover:bg-blue-700 text-white ml-2 font-bold py-2 px-4 rounded">
                    <i class="fa-solid fa-file-export"></i>
                </a>

                <!-- Modal toggle -->
                <button data-modal-target="authentication-modal" data-modal-toggle="authentication-modal"
                    class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mt-5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                    type="button">
                    IMPORT
                </button>

                <!-- Main modal -->
                <div id="authentication-modal" tabindex="-1" aria-hidden="true"
                    class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                    <div class="relative w-full max-w-md max-h-full">
                        <!-- Modal content -->
                        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                            <button type="button"
                                class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                data-modal-hide="authentication-modal">
                                <svg class="w-3 h-3" aria-hidden="true" fill="none" viewBox="0 0 14 14">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                </svg>
                                <span class="sr-only">Close modal</span>
                            </button>
                            <div class="px-6 py-6 lg:px-8">
                                <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white">Import Data</h3>
                                <form action="<?= base_url(
                                    'keuangan/import'
                                ) ?>" class="space-y-6" method="post" enctype="multipart/form-data">
                                    <div>
                                        <label for="file"
                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Pilih
                                            File</label>
                                        <input type="file" name="file"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                            required>
                                    </div>
                                    <input type="submit" name="import" value="Import"
                                        class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"></input>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <table class="min-w-full mt-3">
                    <thead>
                        <tr>
                            <th class="text-left border border-black">No</th>
                            <th class="text-left border border-black">Nama Siswa</th>
                            <th class="text-left border border-black">Jenis Pembayaran</th>
                            <th class="text-left border border-black">Total Pembayaran</th>
                            <th class="text-left border border-black">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 0;
                        foreach ($pembayaran as $row):
                            $no++; ?>
                        <tr>
                            <td class="border border-black"><?php echo $no; ?></td>
                            <td class="border border-black"><?php echo nama_siswa(
                                $row->id_siswa
                            ); ?></td>
                            <td class="border border-black"><?php echo $row->jenis_pembayaran; ?></td>
                            <td class="border border-black"><?php echo convRupiah(
                                $row->total_pembayaran
                            ); ?></td>
                            <td class="text-center border border-black">
                                <button onclick="hapus(<?php echo $row->id; ?>)"
                                    class="bg-red-700	 hover:bg-red-900	 text-white font-bold py-2 px-4 rounded">
                                    <i class="fa-solid fa-trash"></i>
                                </button>
                                <a href="<?php echo base_url(
                                    'keuangan/ubah_pembayaran/'
                                ) . $row->id; ?>"
                                    class="bg-yellow-400 hover:bg-yellow-500 text-white font-bold py-2 px-4 rounded">
                                    <i class="fa-solid fa-pen-to-square"></i>
                                </a>
                            </td>
                        </tr>
                        <?php
                        endforeach;
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </main>
    <script>
    function hapus(id) {
        var yes = confirm('Yakin Dex?');
        if (yes == true) {
            window.location.href = "<?php echo base_url(
                'keuangan/hapus_pembayaran/'
            ); ?>" + id;
        }
    }
    </script>
    <script>
    // Fungsi untuk menampilkan modal
    function showModal() {
        var modal = document.getElementById("authentication-modal");
        modal.classList.remove("hidden");
    }

    // Fungsi untuk menyembunyikan modal
    function hideModal() {
        var modal = document.getElementById("authentication-modal");
        modal.classList.add("hidden");
    }

    // Ambil tombol yang memicu modal
    var modalToggleBtn = document.querySelector("[data-modal-toggle='authentication-modal']");

    // Tambahkan event listener ke tombol modal
    modalToggleBtn.addEventListener("click", showModal);

    // Ambil tombol untuk menutup modal
    var closeModalBtn = document.querySelector("[data-modal-hide='authentication-modal']");

    // Tambahkan event listener ke tombol untuk menutup modal
    closeModalBtn.addEventListener("click", hideModal);
    </script>

</body>

</html>
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
    <?php $this->load->view('sidebar'); ?>
    <main class="flex-1 overflow-x-hidden overflow-y-auto ">
        <div class="container mx-auto px-6 py-8">
            <!-- Table -->
            <div class="bg-white p-6 rounded-lg" style="margin-left: 300px;">
                <a href="<?php echo base_url(
                    'admin/tambah_siswa'
                ); ?>" class="bg-lime-500 hover:bg-lime-600 text-white font-bold py-2 px-4 rounded">
                    <i class="fa-solid fa-plus"></i>
                </a>
                <a href="<?php echo base_url(
                    'admin/export'
                ); ?>" class="bg-blue-500 hover:bg-blue-700 ml-2 text-white font-bold py-2 px-4 rounded">
                    <i class="fa-solid fa-file-export"></i>
                </a>
                <table class="min-w-full mt-3">
                    <thead>
                        <tr>
                            <th class="text-left border border-black">No</th>
                            <th class="text-left border border-black">Foto Siswa</th>
                            <th class="text-left border border-black">Nama Siswa</th>
                            <th class="text-left border border-black">NISN</th>
                            <th class="text-left border border-black">Gender</th>
                            <th class="text-left border border-black">Kelas</th>
                            <th class="text-left border border-black">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 0;
                        foreach ($siswa as $row):
                            $no++; ?>
                        <tr>
                            <td class="border border-black"><?php echo $no; ?></td>
                            <td class="border border-black"><img src="<?php echo base_url(
                                'images/siswa/' . $row->foto
                            ); ?>" width="50" alt=""></td>
                            <td class="border border-black"><?php echo $row->nama_siswa; ?></td>
                            <td class="border border-black"><?php echo $row->nisn; ?></td>
                            <td class="border border-black"><?php echo $row->gender; ?></td>
                            <td class="border border-black"><?php echo tampil_full_kelas_byid(
                                $row->id_kelas
                            ); ?></td>
                            <td class="text-center border border-black">
                                <button onclick="hapus(<?php echo $row->id_siswa; ?>)"
                                    class="bg-red-700	 hover:bg-red-900	 text-white font-bold py-2 px-4 rounded">
                                    <i class="fa-solid fa-trash"></i>
                                </button>
                                <a href="<?php echo base_url(
                                    'admin/ubah_siswa/'
                                ) . $row->id_siswa; ?>"
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
                <form class="mt-5" method="post" enctype="multipart/form-data"
                    action="<?php echo base_url('admin/import'); ?>">
                    <input type="file" name="file" />
                    <input type="submit" name="import"
                        class="inline-block rounded bg-red-600 px-4 py-2 text-xs font-medium text-white"
                        value="Import" />

                </form>
            </div>
        </div>
    </main>
    <script>
    function hapus(id) {
        var yes = confirm('Yakin Dex?');
        if (yes == true) {
            window.location.href = "<?php echo base_url(
                'admin/hapus_siswa/'
            ); ?>" + id;
        }
    }
    </script>
</body>

</html>
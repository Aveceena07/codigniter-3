<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    

<nav class="bg-white border-gray-200 dark:bg-gray-900">
  <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
    <a href="https://flowbite.com/" class="flex items-center">
        <img src="https://flowbite.com/docs/images/logo.svg" class="h-8 mr-3" alt="Flowbite Logo" />
        <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Flowbite</span>
    </a>
    <button data-collapse-toggle="navbar-default" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-default" aria-expanded="false">
        <span class="sr-only">Open main menu</span>
        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
        </svg>
    </button>
    <div class="hidden w-full md:block md:w-auto" id="navbar-default">
      <ul class="font-medium flex flex-col p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
        <li>
          <a href="#" class="block py-2 pl-3 pr-4 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 dark:text-white md:dark:text-blue-500" aria-current="page">Home</a>
        </li>
        <li>
          <a href="#" class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">About</a>
        </li>
        <li>
          <a href="#" class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Services</a>
        </li>
        <li>
          <a href="#" class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Pricing</a>
        </li>
        <li>
        <a href="<?php echo base_url(
            'auth/logout'
        ); ?>" class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Logout</a>
        </li>
      </ul>
    </div>
  </div>
</nav>


<aside id="logo-sidebar" class="fixed top-0 left-0 z-40 w-64 h-screen transition-transform -translate-x-full sm:translate-x-0 bg-black" aria-label="Sidebar">
   <div class="h-full px-3 py-4 overflow-y-auto bg-gray-50 dark:bg-gray-800">
      <a href="#" class="flex items-center pl-2.5 mb-5">
         <img src="https://binusasmg.sch.id/ppdb/logobinusa.png" class="h-6 mr-3 sm:h-7" alt="Flowbite Logo" />
         <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white">Bina Nusantara</span>
      </a>
      <ul class="space-y-2 font-medium">
         <li>
            <a href="<?php echo base_url(); ?>admin" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
            <i class="fa-solid fa-chart-line fa-xl"></i>
               <span class="ml-3">Dashboard</span>
            </a>
         </li>
         <li>
            <a href="<?php echo base_url(
                'admin/siswa'
            ); ?>" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
            <i class="fa-solid fa-graduation-cap fa-xl"></i>
               <span class="flex-1 ml-3 whitespace-nowrap">Siswa</span>
            </a>
         </li>
      </ul>
   </div>
</aside>

<main class="flex-1 overflow-x-hidden overflow-y-auto ">
            <div class="container mx-auto px-6 py-8">
                <!-- Table -->
                <div class="bg-white p-6 rounded-lg" style="margin-left: 300px;">
                  <a href="<?php echo base_url(
                      'admin/tambah_siswa'
                  ); ?>"  class="bg-lime-500 hover:bg-lime-600 text-white font-bold py-2 px-4 rounded">
                  <i class="fa-solid fa-plus"></i>
                  </a>
                    <table class="min-w-full mt-3">
                        <thead>
                            <tr>
                                <th class="text-left border border-black">No</th>
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
                                <td class="border border-black"><?php echo $row->nama_siswa; ?></td>
                                <td class="border border-black"><?php echo $row->nisn; ?></td>
                                <td class="border border-black"><?php echo $row->gender; ?></td>
                                <td class="border border-black"><?php echo tampil_full_kelas_byid(
                                    $row->id_kelas
                                ); ?></td>
                                <td class="text-center border border-black">
                                  <button onclick="hapus(<?php echo $row->id_siswa; ?>)" class="bg-red-700	 hover:bg-red-900	 text-white font-bold py-2 px-4 rounded">
                                  <i class="fa-solid fa-trash"></i> 
                                  </button>
                                  <a href="<?php echo base_url(
                                      'admin/ubah_siswa'
                                  ); ?>" class="bg-yellow-400 hover:bg-yellow-500 text-white font-bold py-2 px-4 rounded">
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
            'admin/hapus_siswa/'
        ); ?>" + id;
    }
  }
        </script>
</body>
</html>

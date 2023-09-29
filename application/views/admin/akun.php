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
<?php $this->load->view('sidebar'); ?>

<body>
    <?php foreach ($user as $users): ?>
    <form action="<?php echo base_url(
        'admin/aksi_ubah_akun'
    ); ?>" enctype="multipart/form-data" method="post" class="w-full max-w-lg" style="margin-left: 500px;">
        <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full md:w-1/2 px-3">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
                    Email
                </label>
                <input
                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                    name="email" value="<?php echo $users->email; ?>" id="grid-last-name" type="text" placeholder="">
            </div>
            <div class="w-full md:w-1/2 px-3">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
                    Username
                </label>
                <input
                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                    name="username" value="<?php echo $users->username; ?>" id="grid-last-name" type="text"
                    placeholder="">
            </div>
            <div class="w-full md:w-1/2 mt-5 px-3">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
                    Password Baru
                </label>
                <input
                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                    name="password_baru" id="grid-last-name" type="text" placeholder="">
            </div>
            <div class="w-full md:w-1/2 mt-5 px-3">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
                    Konfirmasi Password
                </label>
                <input
                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                    name="konfirmasi_password" id="grid-last-name" type="text" placeholder="">
            </div>
            <div class="w-full md:w-1/2 mt-5 px-3">
                <label for="kelas" class="form-label">Foto</label>
                <input type="file" class="form-control" id="foto" name="foto">
            </div>

            <div class="w-full mt-5 px-3">
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                    <i class="fa-solid fa-arrow-right"></i>
                </button>
            </div>

            </from>
            <?php endforeach; ?>
</body>

</html>
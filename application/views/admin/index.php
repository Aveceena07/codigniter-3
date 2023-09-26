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
<?php $this->load->view('sidebar'); ?> 
<h1 class="text-5xl font-bold" style="margin-left: 300px;">Dashboard <?php echo $this->session->userdata(
    'username'
); ?></h1>
    <div class="flex space-x-4 p-2 my-5" style="margin-left: 300px;">
        <div class="w-1/4 bg-teal-600 p-4 text-stone-50 rounded-lg shadow-md">
        <p>Jumlah Kelas</p><br>
        <h1 class="text-4xl	font-bold">6</h1>
    </div>
        <div class="w-1/4 bg-teal-600 p-4 text-stone-50	 rounded-lg shadow-md">
            <p>Jumlah Mapel</p>
            <h1 class="text-4xl	font-bold"><?php echo $mapel; ?></h1>
        </div>
        <div class="w-1/4 bg-teal-600 text-stone-50	 p-4 rounded-lg shadow-md">
            <p>Jumlah Siswa</p>
            <h1 class="text-4xl	font-bold"><?php echo $siswa; ?></h1>
        </div>
        <div class="w-1/4 bg-teal-600 text-stone-50	 p-4 rounded-lg shadow-md">
            <p>Jumlah Guru</p>
            <h1 class="text-4xl	font-bold">10</h1>
        </div>
    </div>

</body>
</html>

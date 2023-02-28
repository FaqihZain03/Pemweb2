<!DOCTYPE html>
<html lang="en">
<head>
    <title>Praktikum 2 - Form Handling</title>
    <style>
        body {
            background: #6495ED;
        }
    </style>
</head>
<body>
    <h1>Belajar Form Handling 1</h1>
    <form action="belajar_post.php" method="POST">
        <!-- tipe text -->
        <label for="nama">Nama</label><br>
        <input type="text" name="nama"><br><br>

        <!-- tipe radio -->
        <label for="">Jenis Kelamin</label><br>
        <input type="radio" name="jenis_kelamin" value="laki laki"> <label for="">Laki-Laki</label> 
        <input type="radio" name="jenis_kelamin" value="perempuan"> <label for="">Perempuan</label>
        <br><br>

        <!-- tipe checkbox -->
        <label for="">Hobi</label><br>
        <input type="checkbox" name="hobi" value="berenang"> <span>Berenang</span>
        <input type="checkbox" name="hobi" value="Basket"> <span>Basket</span>
        <input type="checkbox" name="hobi" value="Futsal"> <span>Futsal</span>
        <input type="checkbox" name="hobi" value="badminton"> <span>Badminton</span><br><br>

        <!-- tipe number-->
        <label for="">Umur</label>
        <input type="number" name="umur"><br><br>

        <!-- tipe date -->
        <label for="">Tanggal Lahir</label>
        <input type="date" name="tanggal_lahir"><br><br>

        <!-- dropdown select -->
        <label for="">Prodi</label>
        <select name="prodi" >
            <option value="Teknik Informatika">Teknik Informatika</option>
            <option value="Sistem Informasi">Sistem Informasi</option>
            <option value="Bisnis Digital">Bisnis Digital</option>
        </select><br><br>

        <button type="reset">Reset</button>
        <button type="submit">Kirim</button>
    </form>
</body>
</html>
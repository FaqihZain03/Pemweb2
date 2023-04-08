<?php 
require_once '../../database/dbkoneksi.php';
include_once "../template/head.php";
include_once "../template/navbar.php";
?>
<?php
    $_id = $_GET['id'];
    // select * from produk where id = $_id;
    //$sql = "SELECT a.*,b.nama as jenis FROM produk a
    //INNER JOIN jenis_produk b ON a.jenis_produk_id=b.id WHERE a.id=?";
    $sql = "SELECT * FROM pelanggan WHERE id=?";
    $st = $dbh->prepare($sql);
    $st->execute([$_id]);
    $row = $st->fetch();
    //echo 'NAMA PRODUK ' . $row['nama'];
?>
<div class="container">
    <h2 class="text-center">View Pelanggan</h2>
    <table class="table table-striped">
        <tbody>
            <tr>
                <td>ID</td>
                <td><?=$row['id']?></td>
            </tr>
            <tr>
                <td>Kode Pelanggan</td>
                <td><?=$row['kode']?></td>
            </tr>
            <tr>
                <td>Nama Pelanggan</td>
                <td><?=$row['nama']?></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td><?=$row['jk']?></td>
            </tr>
            <tr>
                <td>Tempat Lahir</td>
                <td><?=$row['tmp_lahir']?></td>
            </tr>
            <tr>
                <td>Tanggal Lahir</td>
                <td><?=$row['tgl_lahir']?></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><?=$row['email']?></td>
            </tr>
            <tr>
                <td>Kartu</td>
                <td><?=$row['kartu_id']?></td>
            </tr>
        </tbody>
    </table>
</div>
<!-- <table class="table table-striped">
    <tbody>
        <tr><td>ID</td><td><?=$row['id']?></td></tr>
        <tr>  <td>Kode</td><td><?=$row['kode']?></td></tr>
        <tr>   <td>Nama Produk</td><td><?=$row['nama']?></td></tr>
        <tr>   <td>Harga Jual</td><td><?=$row['harga_jual']?></td></tr>
        <tr>   <td>Harga Beli</td><td><?=$row['harga_beli']?></td></tr>
        <tr>   <td>Stok</td><td><?=$row['stok']?></td></tr>
        <tr>   <td>Minimum Stok</td><td><?=$row['min_stok']?></td></tr>
        <tr>   <td>Jenis Produk</td><td><?=$row['jenis_produk_id']?></td></tr>
    </tbody>
</table> -->
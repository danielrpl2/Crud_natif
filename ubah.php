<?php
  $id_buku       = $_GET['id_buku'];
  $connect       = new mysqli('localhost','root','','perpustakaan');
  $data       = $connect->query("select * from buku where id_buku ='$id_buku'");
  $tampil     = $data->fetch_assoc();
?>
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="html.css">
  <title></title>
</head>

<body style="background: black;">

<div class="form">
  <div class="form-text">
    <h1>UPDATE DI SINI</h1>
    <p>!!JANGAN DIISI ANE ANE NANTI KENA AZAB!!</p>
  </div>
<form method="POST">
    <div class="main-form">

   <div>
                    <span>ID BUKU</span>
                    <input type="text" name="id_buku" placeholder="ID Buku...." value="<?=$tampil['id_buku']?>">
                </div>
                <div>
                    <span>Judul</span>
                    <input type="text" name="judul" placeholder="Judul...." value="<?=$tampil['judul']?>"> 
                </div>
                 <div>
                    <span>Deskripsi</span>
                   <input type="text" name="deskripsi" placeholder="Deskripsi...." value="<?=$tampil['deskripsi']?>">
                </div>
                 <div>
                    <span>Penulis</span>
                   <input type="text" name="penulis" placeholder="Penulis...." value="<?=$tampil['penulis']?>">
                </div>
                 <div>
                    <span>Penerbit</span>
                   <input type="text" name="penerbit" placeholder="Penerbit...." value="<?=$tampil['penerbit']?>">
                </div>
                 <div>
                    <span>Tahun Terbit</span>
                   <input type="text" name="tehun_terbit" placeholder="Tahun Terbit...." value="<?=$tampil['tehun_terbit']?>">
                </div>
                 <div>
                    <span>Kategori</span>
                    <input type="text" name="kategori" placeholder="Kategori...." value="<?=$tampil['kategori']?>">
                </div>
                <br>
              
 <input class="B" type="submit" name="ubah">
</form>
</div>
</div>
</body>
</html>
<?php

if(isset($_POST['ubah'])){


    $id_buku = $_POST['id_buku'];
  $judul = $_POST['judul'];
  $deskripsi = $_POST['deskripsi'];
  $penulis = $_POST['penulis'];
  $penerbit = $_POST['penerbit'];
  $tehun_terbit = $_POST['tehun_terbit'];
  $kategori = $_POST['kategori'];
  

  $conn = new mysqli('localhost','root','','perpustakaan');
  $sql = "update buku set
      
      id_buku = '$id_buku',
      judul = '$judul',
      deskripsi= '$deskripsi',
      penulis = '$penulis',
      penerbit= '$penerbit',
      tehun_terbit= '$tehun_terbit',
      kategori = '$kategori'
       where id_buku='$id_buku'";
  $conn = $conn->query($sql);
  //setelah memasukan data redirect ke index/tampil data
  echo "<script>window.location.href='dasbor.php'</script>";  
}



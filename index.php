<?php
  session_start();
  $koneksi=new mysqli('localhost','root','','perpustakaan');
?>



<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
<link rel="stylesheet" type="text/css" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
<link rel="stylesheet" type="text/css" href="index.css">

<div class="wrapper">
        <div class="logo">
            <img src="omom.jpeg">
        </div>
        <div class="text-center mt-4 name">
            Om Kumis
        </div>
        <form class="p-3 mt-3" method="POST">
            <div class="form-field d-flex align-items-center">
              
                <input class="form-control" type="text" name="username" placeholder="Username">
            </div>
            <div class="form-field d-flex align-items-center">
               
                <input class="form-control" type="password" name="password" placeholder="Password">
            </div>
             <input class="btn btn-primary" type="submit" name="login" value="Login">
        </form>
        <div class="text-center fs-6">
            <a href="#">Forget password?</a> or <a href="#">Sign up</a>
        </div>
    </div>

<?php
//jika tombol login diklik
if(isset($_POST['login'])){
  $username = $_POST['username'];
  $password = $_POST['password'];
  $cek = $koneksi->query("select * from user where username='$username' and password='$password'")->num_rows;
 $ambil_level = $koneksi->query("select * from user where username='$username' and password='$password'")->fetch_assoc();
    $level = $ambil_level['level'];

    //exit($level);
    //jika cek lebih dari 0 maka arahkan ke index
    //jika cek = 0 munculkan pesan data yg anda masukkan salah
    if($cek>0){
        $_SESSION['login']='OK';
        $_SESSION['level']=$level;
        //exit($_SESSION['login']);
    //exit($_SESSION['login']);
    echo '<script>window.location.href="dasbor.php"</script>';
  }else{
    echo '<script>window.alert("Data yg anda masukkan salah!")</script>';
  }
}

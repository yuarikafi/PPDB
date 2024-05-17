<?php
session_start();
$id=$_SESSION['id'];

include 'koneksi.php';

$username = $_POST['username'];
$password = $_POST['password'];

$id =$_POST['id'];

$login = mysqli_query($koneksi,"SELECT * FROM user where username='$username' and password='$password'");

$cek = mysqli_num_rows($login);

if($cek > 0){

    $data = mysqli_fetch_assoc($login);
$_SESSION['username'] =$data['username'];
$_SESSION['nama'] =$data['nama'];   
$_SESSION['id'] =$data['id'];  
$_SESSION['level'] =$data['level'];     

    if($data['level']=="admin"){
        
        $_SESSION['username'] = $username;
        $_SESSION['level'] = "petugas";

        header("location:admin.php");

    }else if($data['level']=="petugas"){
       
        $_SESSION['username'] = $username;
        $_SESSION['level'] = "petugas";

        header("location:petugas.php");

    }else{
        header("location:index.php?pesan=gagal");
    }
}else{
    header("location:index.php?pesan=gagal");

}

?>
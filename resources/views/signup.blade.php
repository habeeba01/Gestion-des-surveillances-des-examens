<?php
    session_start();
    $con=mysqli_connect('localhost','root','root');
        
    mysqli_select_db($con,'bdpfe');
    
    $cne=$_POST['cne'];
    $pass=$_POST['pass'];
    
    $s="SELECT * FROM etudiant WHERE cne='$cne' && password='$pass'";
    
    $result=mysqli_query($con,$s);
    $num=mysqli_num_rows($result);
    
    if($num==1){
        header('location:main.blade.php');

    }
    
?>


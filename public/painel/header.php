<?php
session_start();

$mailHeader = $_SESSION['mailx'];

if(!isset($_SESSION['mailx'])) {
    header('Location: ../index.php');
}


include 'conexao/conexao.php';

$sql = "select * from usuario where mail = '$mailHeader'";
$search = mysqli_query($conexao,$sql);
$array = mysqli_fetch_array($search);

$id = $array['id'];
$name = $array['name'];
$cnpj = $array['cnpj'];
$tel = $array['tel'];
$nivelUser = $array['id_user_nivel'];




?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Dashboard</title>
    <meta name="description" content="Dashboard | Nura Admin">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Your website">

    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- Bootstrap CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />

    <!-- Font Awesome CSS -->
    <link href="assets/font-awesome/css/all.css" rel="stylesheet" type="text/css" />

    <!-- Custom CSS -->
    <link href="assets/css/style.css" rel="stylesheet" type="text/css" />
  
    <!-- BEGIN CSS for this page -->
    <link rel="stylesheet" type="text/css" href="assets/plugins/chart.js/Chart.min.css" />
    <link rel="stylesheet" type="text/css" href="assets/plugins/datatables/datatables.min.css" />
   
    <!-- END CSS for this page -->
</head>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.12/jquery.mask.min.js"></script>




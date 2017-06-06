<?php

include('controller/ChitietController.php');

$id_user = $_POST['id_user'];
$id_tin = $_POST['id_tin'];
$noidung = $_POST['noidung'];

$controller = new ChitietController();

$controller->postAddComment($id_tin,$id_user,$noidung);
?>
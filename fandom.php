<?php

include_once("models/Template.class.php");
include_once("models/DB.class.php");
include_once("controllers/Fandom.controller.php");

$fandom = new FandomController();

if (isset($_POST['add'])) {
    //memanggil add
    $fandom->add($_POST);
}
//mengecek apakah ada id_hapus, jika ada maka memanggil fungsi delete
else if (!empty($_GET['id_hapus'])) {
    //memanggil add
    $id = $_GET['id_hapus'];
    $fandom->delete($id);
}
else if (isset($_POST['edit'])) {
    //memanggil add 
    $id = $_POST['id_edit'];
    $fandom->edit($id, $_POST);
}
else{
    $fandom->index();
}


<!-- Saya Revana Faliha Salma NIM 2202869 mengerjakan Soal TP3
dalam mata kuliah DPBO untuk keberkahanNya maka saya tidak melakukan 
kecurangan seperti yang telah dispesifikasikan. Aamiin. -->

<?php
include_once("models/Template.class.php");
include_once("models/DB.class.php");
include_once("controllers/Anggota.controller.php");

$anggota = new AnggotaController();

if (isset($_POST['add'])) {
    //memanggil add
    $anggota->add($_POST);
} else if (!empty($_GET['id_hapus'])) {
    //memanggil delete
    $id = $_GET['id_hapus'];
    $anggota->delete($id);
} else if (isset($_POST['edit'])) {
    //memanggil edit
    $id = $_POST['id_edit'];
    $anggota->edit($id, $_POST);
} else{
    $anggota->index();
}

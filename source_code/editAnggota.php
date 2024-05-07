<?php

include('conf.php');
include('models/DB.class.php');
include('models/Anggota.class.php');
include('models/Fandom.class.php');
include('models/Template.class.php');
include('controllers/Anggota.controller.php');

$id = $_GET['id_edit'];
$anggota = new AnggotaController();

$anggota->editForm($id);

?>

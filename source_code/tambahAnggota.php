<?php

include('conf.php');
include('models/DB.class.php');
include('models/Anggota.class.php');
include('models/Fandom.class.php');
include('models/Template.class.php');
include('controllers/Anggota.controller.php');

$anggota = new AnggotaController();

$anggota->createForm();

?>

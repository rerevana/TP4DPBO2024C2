<?php

include('conf.php');
include('models/DB.class.php');
include('models/Fandom.class.php');
include('models/Template.class.php');
include('controllers/Fandom.controller.php');

$id = $_GET['id_edit'];
$fandom = new FandomController();

$fandom->editForm($id);

?>

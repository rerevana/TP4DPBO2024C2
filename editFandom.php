<?php

include('conf.php');
include('models/DB.class.php');
include('models/Fandom.class.php');
include('models/Template.class.php');
include('controllers/Fandom.controller.php');

$id = $_GET['id_edit'];
$fandom = new FandomController();

$fandom->editForm($id);

// $fandom = new Fandom(Conf::$db_host, Conf::$db_user, Conf::$db_pass, Conf::$db_name);
// $fandom->open();

// $data = null;

// if (isset($_GET['id'])) {
//     $id = $_GET['id'];
//     if ($id > 0) {
//         $fandom->getFandomById($id);
//         $row = $fandom->getResult();

//         $data .= '<form action="fandom.php?id=' . $id . '" enctype="multipart/form-data" method="post">
 
//         <br><br><div class="card">
        
//         <div class="card-header bg-primary">
//         <h1 class="text-white text-center">  Edit Fandom </h1>
//         </div><br>

//         <label for="nama" class="form-label">Nama</label>
//         <input type="text" class="form-control" id="nama" name="nama" value="' . $row['nama'] . '" required>
        
//         <button class="btn btn-success" type="submit" name="submit"> Submit </button><br>
//         <a class="btn btn-info" type="submit" name="cancel" href="index.php"> Cancel </a><br>
        
//         </div>
//         </form>';
//     }
// }

// $fandom->close();
// $edit = new Template('templates/form.html');
// $edit->replace('DATA_EDIT_FANDOM', $data);
// $edit->write();
?>

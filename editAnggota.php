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

// $anggota = new Anggota(Conf::$db_host, Conf::$db_user, Conf::$db_pass, Conf::$db_name);
// $anggota->open();

// $fandom = new Fandom(Conf::$db_host, Conf::$db_user, Conf::$db_pass, Conf::$db_name);
// $fandom->open();

// $data = null;

// if (isset($_GET['id'])) {
//     $id = $_GET['id'];
//     if ($id > 0) {
//         $anggota->getAnggotaById($id);
//         $fandom->getFandom();
//         $row = $anggota->getResult();

//         $data .= '<form action="index.php?id=' . $id . '" enctype="multipart/form-data" method="post">
 
//         <br><br><div class="card">
        
//         <div class="card-header bg-primary">
//         <h1 class="text-white text-center">  Edit Anggota </h1>
//         </div><br>

//         <label for="nama" class="form-label">Nama</label>
//         <input type="text" class="form-control" id="nama" name="nama" value="' . $row['nama'] . '" required>
//         <label for="email" class="form-label">Email</label>
//         <input type="text" class="form-control" id="email" name="email" value="' . $row['email'] . '" required>
//         <label for="telp" class="form-label">No Telepon</label>
//         <input type="text" class="form-control" id="telp" name="telp" value="' . $row['telp'] . '" required>
        // <label for="fandom" class="form-label">Fandom</label>
        //             <select class="form-select" id="fandom" name="fandom" required>';
        //             while ($rowFandom = $fandom->getResult()) {
        //                 $data .= '<option value="' . $rowFandom['id'] . '"';
        //                 if($rowFandom['nama'] == $row['nama']){
        //                     $data .= 'selected';
        //                 }
        //                 $data .= '>' . $rowFandom['nama'] . '</option>';
        //             }

        //             $data .= '</select>
//         <label for="join_date" class="form-label">Joining Date</label>
//         <input type="date" class="form-control" id="join_date" name="join_date" value="' . $row['join_Date'] . '" required>
        
//         <button class="btn btn-success" type="submit" name="submit"> Submit </button><br>
//         <a class="btn btn-info" type="submit" name="cancel" href="index.php"> Cancel </a><br>
        
//         </div>
//         </form>';
//     }
// }

// $anggota->close();
// $edit = new Template('templates/form.html');
// $edit->replace('DATA_EDIT_ANGGOTA', $data);
// $edit->write();
?>

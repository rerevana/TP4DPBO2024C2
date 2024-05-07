<?php

  class EditFormView{
    public function render($dataEdit, $penentu, $dataFandom){
      // echo "<pre>";
      // print_r($dataFandom);
      // echo "</pre>";

        $data = null;

        if ($penentu == 'anggota') {
          $data .= '<form action="index.php" method="post">
 
         <br><br><div class="card">
        
         <div class="card-header bg-primary">
         <h1 class="text-white text-center">  Edit Anggota </h1>
        </div><br>
        <input type="hidden" name="id_edit" class="form-control" value="' . $dataEdit['id'] . '"> <br>

         <label for="nama" class="form-label">Nama</label>
        <input type="text" class="form-control" id="nama" name="nama" value="' . $dataEdit['nama'] . '" required><br>
         <label for="email" class="form-label">Email</label>
         <input type="text" class="form-control" id="email" name="email" value="' . $dataEdit['email'] . '" required><br>
         <label for="telp" class="form-label">No Telepon</label>
         <input type="text" class="form-control" id="telp" name="telp" value="' . $dataEdit['telp'] . '" required><br>
         <label for="fandom" class="form-label">Fandom</label>
         <select class="form-select" id="fandom" name="fandom" required>';
         foreach($dataFandom as $val){
          list($id, $nama) = $val;
          $data .= "<option value='".$id."'>".$nama."</option>";
        }
        $data .= '</select><br>
        <label for="join_date" class="form-label">Joining Date</label>
        <input type="date" class="form-control" id="join_date" name="join_date" value="' . $dataEdit['join_date'] . '" required><br>
        
        <button type="submit" name="edit"> Submit </button><br>
        <a type="submit" name="cancel" href="index.php" class="btn btn-info"> Cancel </a><br>
        
        </div>
        </form>';
        }
        else {
          $data .= '<form method="post" action="fandom.php">
           
          <br><br><div class="card">
          
          <div class="card-header bg-primary">
          <h1 class="text-white text-center">  Edit Fandom </h1>
          </div><br>
          <input type="hidden" name="id_edit" class="form-control" value="' . $dataEdit['id'] . '"> <br>
          
          <label> Nama Fandom: </label>
          <input type="text" name="nama" class="form-control" value="' . $dataEdit['nama'] . '"> <br>
          
          <button type="submit" name="edit">Submit</button><br>
          <a href="fandom.php" class="btn btn-info" type="submit" name="cancel">Cancel</a><br>
          
          </div>
          </form>';
        }


      $tpl = new Template("templates/form.html");
      $tpl->replace("DATA_EDIT", $data);
      $tpl->write();
    }
  }
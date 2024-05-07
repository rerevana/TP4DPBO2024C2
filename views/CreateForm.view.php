<?php

  class CreateFormView{
    public function render($penentu, $dataFandom){
      // echo "<pre>";
      // print_r($dataFandom);
      // echo "</pre>";

        $data = null;

        if ($penentu == 'anggota') {
          $data .= '<form method="post" action="index.php">
 
        <br><br><div class="card">

        <div class="card-header bg-primary">
        <h1 class="text-white text-center">  Create New Member </h1>
        </div><br>

        <label> Nama: </label>
        <input type="text" name="nama" class="form-control"> <br>

        <label> Email: </label>
        <input type="email" name="email" class="form-control"> <br>

        <label> No Telp: </label>
        <input type="text" name="telp" class="form-control"> <br>

        <label> Fandom: </label>
        
        <select class="form-select" id="fandom" name="fandom" required>';

            foreach($dataFandom as $val){
              list($id, $nama) = $val;
              $data .= "<option value='".$id."'>".$nama."</option>";
            }
            $data .= '</select><br>

        <label> Tanggal Bergabung: </label>
        <input type="date" name="join_date" class="form-control"> <br>

        <button type="submit" name="add">Submit</button><br>
        <a href="index.php" class="btn btn-info" type="submit" name="cancel">Cancel</a><br>

        </div>
        </form>';
        }
        else {
          $data .= '<form method="post" action="fandom.php">
           
          <br><br><div class="card">
          
          <div class="card-header bg-primary">
          <h1 class="text-white text-center">  Create New Fandom </h1>
          </div><br>
          
          <label> Nama Fandom: </label>
          <input type="text" name="nama" class="form-control"> <br>
          
          <button type="submit" name="add">Submit</button><br>
          <a href="fandom.php" class="btn btn-info" type="submit" name="cancel">Cancel</a><br>
          
          </div>
          </form>';
        }


      $tpl = new Template("templates/form.html");
      $tpl->replace("DATA_TAMBAH", $data);
      $tpl->write();
    }
  }
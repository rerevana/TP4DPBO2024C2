<?php
  class FandomView{
    public function render($data){
      $no = 1;
      $dataFandom = null;
      foreach($data as $val){
        list($id, $nama) = $val;
        $dataFandom .= "<tr>
          <td>" . $no++ . "</td>
          <td>" . $nama . "</td>
          <td>
          <a href='editFandom.php?id_edit=" . $id .  "' class='btn btn-warning''>Edit</a>
          <a href='fandom.php?id_hapus=" . $id . "' class='btn btn-danger''>Hapus</a>
          </td>
          </tr>";
      }

      $tpl = new Template("templates/fandom.html");
      $tpl->replace("DATA_TABEL", $dataFandom);
      $tpl->write();
    }
  }
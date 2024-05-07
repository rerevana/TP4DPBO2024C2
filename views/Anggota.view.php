<?php
class AnggotaView {
  public function render($data){
    $no = 1;
    $dataAnggota = null;
    $dataFandom = null;
    foreach($data['anggota'] as $val){
      list($id, $nama, $email, $telp, $id_fandom, $join_date) = $val;
      $dataAnggota .= "<tr>
        <td>" . $no++ . "</td>
        <td>" . $nama . "</td>
        <td>" . $email . "</td>
        <td>" . $telp . "</td>
        <td>" . $join_date . "</td>
        <td>" . $id_fandom . "</td>";
      
    $dataAnggota .= "
      <td>
        <a href='editAnggota.php?id_edit=" . $id .  "' class='btn btn-warning' '>Edit</a>
        <a href='index.php?id_hapus=" . $id . "' class='btn btn-danger' '>Hapus</a>
      </td>";

      $dataAnggota .= "</tr>";
    }

    foreach($data['fandom'] as $val){
      list($id, $nama) = $val;
      $dataFandom .= "<option value='".$id."'>".$nama."</option>";
    }

    $tpl = new Template("templates/index.html");

    $tpl->replace("OPTION", $dataFandom);
    $tpl->replace("DATA_TABEL", $dataAnggota);
    $tpl->write(); 
  }
}
?>
<?php

class Anggota extends DB
{
    function getAnggota()
    {
        $query = "SELECT * FROM anggota";
        return $this->execute($query);
    }

    function getAnggotaJoin()
    {
        $query = "SELECT * FROM anggota JOIN fandom ON anggota.fandom = fandom.id";
        return $this->execute($query);
    }

    function getAnggotaById($id)
    {
        $query = "SELECT * FROM anggota WHERE id = $id";
        return $this->execute($query);
    }

    function addAnggota($data)
    {
        $nama = $data['nama'];
        $email = $data['email'];
        $telp = $data['telp'];
        $join_date = $data['join_date'];
        $fandom = $data['fandom'];

        $query = " INSERT INTO anggota VALUES ('', '$nama', '$email', '$telp', '$join_date', '$fandom')";

        // Mengeksekusi query
        return $this->execute($query);
    }

    function deleteAnggota($id)
    {
        $query = "DELETE FROM anggota WHERE id = $id";

        // Mengeksekusi query
        return $this->execute($query);

    }

    function updateAnggota($id, $data){
        $nama = $data['nama'];
        $email = $data['email'];
        $telp = $data['telp'];
        $join_date = $data['join_date'];
        $fandom = $data['fandom'];

        $query = "UPDATE anggota SET nama = '$nama', email = '$email', telp = '$telp', join_date = '$join_date', fandom = '$fandom' WHERE id = $id";

        return $this->execute($query);
    }

}

?>
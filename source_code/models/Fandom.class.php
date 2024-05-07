<?php

class Fandom extends DB
{
    function getFandom()
    {
        $query = "SELECT * FROM fandom";
        return $this->execute($query);
    }

    function getFandomById($id)
    {
        $query = "SELECT * FROM fandom where id = $id";
        return $this->execute($query);
    }

    function addFandom($data)
    {
        $nama = $data['nama'];

        $query = "INSERT INTO fandom VALUES ('', '$nama')";

        // Mengeksekusi query
        return $this->execute($query);
    }

    function deleteFandom($id)
    {
        $query = "DELETE FROM fandom WHERE id = $id";

        // Mengeksekusi query
        return $this->execute($query);
    }

    function updateFandom($id, $data){
        $nama = $data['nama'];

        $query = "UPDATE fandom SET nama = '$nama' WHERE id = $id";

        return $this->execute($query);
    }
}

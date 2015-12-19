<?php
  require_once __DIR__ . "/../utility/database/mysql_db.php";

  class modelPengguna extends mysql_db {
    public function insertPengguna($data) {
      $nama       = $data['nama'];
      $username   = $data['username'];
      $password   = $data['password'];
      $email      = $data['email'];
      $keterangan = $data['keterangan'];

      $query       = "INSERT INTO pengguna SET
        nama       = '$nama',
        username   = '$username',
        password   = '$password',
        email      = '$email',
        keterangan = '$keterangan'
      ";

      $result = $this->query($query);
      return $result;
    }

    public function updatePengguna($data) {
      $id         = $data['id'];
      $nama       = $data['nama'];
      $username   = $data['username'];
      $password   = $data['password'];
      $email      = $data['email'];
      $keterangan = $data['keterangan'];

      $query       = "UPDATE pengguna SET
        nama       = '$nama',
        username   = '$username',
        password   = '$password',
        email      = '$email',
        keterangan = '$keterangan'
        WHERE id   = '$id'
      ";
      
      $result = $this->query($query);
      return $result;
    }

    public function deletePengguna($id) {
      $query = "delete from pengguna where id='$id'";
      $result = $this->query($query);
      return $result;
    }

    public function readPengguna($data) {
      $parameter = "";
      $count     = 0;
      foreach ($data as $key => $value) {
        if ($count == 0) {
          $paramater = "where $key='$value'";
        }
        else {
          $paramater.=" AND $key='$value'";
          $count++;
        }
      }
      $query  = "select * from pengguna $paramater";
      $result = $this->query($query);
      $data   = $this->fetch_object($result);
      return $data;
    }

    public function readPenggunaFull($data) {
      $parameter = "";
      $count     = 0;
      foreach ($data as $key => $value) {
        if ($count == 0) {
          $paramater = "where $key='$value'";
        }
        else {
          $paramater.=" AND $key='$value'";
          $count++;
        }
      }
      $query  = "select * from pengguna $paramater";
      $result = $this->query($query);
      $data   = $this->fetch_object($result);
      return $data;
    }
  }

?>

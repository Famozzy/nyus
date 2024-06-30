<?php
namespace App\Models;

use App\Core\Model;

class Penulis extends Model {

  public function get() {
    return $this->db->query('SELECT id, nama FROM penulis')->fetchAll();
  }

  public function post($data) {
    $nama = $data['nama'];

    if (isset($data['id'])) {
      $id = $data['id'];
      $sql = <<<SQL
        UPDATE penulis SET nama = '$nama'
        WHERE id = '$id'
      SQL;
    } else {
      $sql = <<<SQL
        INSERT INTO penulis (nama)
        VALUES ("$nama")
      SQL;
    }

    $this->db->query($sql);
  }

  public function getById($id) {
    $sql = <<<SQL
      SELECT * FROM penulis
      WHERE id = '$id'
    SQL;

    return  $this->db->query($sql)->fetch();
  }

  public function delete($id) {
    $sql = <<<SQL
      DELETE FROM penulis
      WHERE id = '$id'
    SQL;

    $this->db->query($sql);
  }
}
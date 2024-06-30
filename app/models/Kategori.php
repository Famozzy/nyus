<?php
namespace App\Models;

use App\Core\Model;

class Kategori extends Model {

  public function get() {
    return $this->db->query('SELECT id, nama FROM kategori')->fetchAll();
  }

  public function post($data) {
    $nama = $data['nama'];

    if (isset($data['id'])) {
      $id = $data['id'];
      $sql = <<<SQL
        UPDATE kategori SET nama = '$nama'
        WHERE id = '$id'
      SQL;
    } else {
      $sql = <<<SQL
        INSERT INTO kategori (nama)
        VALUES ("$nama")
      SQL;
    }

    $this->db->query($sql);
  }

  public function getById($id) {
    $sql = <<<SQL
      SELECT * FROM kategori
      WHERE id = '$id'
    SQL;

    return  $this->db->query($sql)->fetch();
  }

  public function delete($id) {
    $sql = <<<SQL
      DELETE FROM kategori
      WHERE id = '$id'
    SQL;

    $this->db->query($sql);
  }
}
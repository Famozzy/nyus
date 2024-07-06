<?php
namespace App\Models;

use App\Core\Model;
use App\Lib\Utils;

class Artikel extends Model {
  
  public function get() {
    $sql = <<<SQL
      SELECT a.id, a.judul, a.konten, a.dibuat tgl_dibuat, k.nama kategori, p.nama penulis, a.thumbnail
      FROM artikel a
      JOIN kategori k ON a.id_kategori = k.id
      JOIN penulis p ON a.id_penulis = p.id
      ORDER BY a.dibuat DESC
    SQL;

    return $this->db->query($sql)->fetchAll();
  }

  public function getById($id) {
    $sql = <<<SQL
      SELECT a.id, a.judul, a.konten, a.id_kategori, a.id_penulis, a.thumbnail , k.nama kategori, p.nama penulis, a.dibuat
      FROM artikel a
      JOIN kategori k ON a.id_kategori = k.id
      JOIN penulis p ON a.id_penulis = p.id
      WHERE a.id = '$id'
    SQL;

    return  $this->db->query($sql)->fetch();
  }

  public function post($data) {
    $judul = $data['judul'];
    $konten = $data['konten'];
    $kategori = $data['kategori'];
    $penulis = $data['penulis'];
    $thumbnail = $data['thumbnail'];
    $id = Utils::generateUUID();
    
    if (isset($data['id'])) {
      $id = $data['id'];
      $sql = <<<SQL
        UPDATE artikel
        SET judul = '$judul', konten = '$konten', id_kategori = '$kategori',
            id_penulis = '$penulis', thumbnail = '$thumbnail'
        WHERE id = '$id'
      SQL;
    } else {
      $sql = <<<SQL
        INSERT INTO artikel (id, judul, konten, id_kategori, id_penulis, thumbnail)
        VALUES ("$id", "$judul", "$konten", "$kategori", "$penulis", "$thumbnail")
      SQL;
    }
      
    $this->db->query($sql);
  }

  public function edit($data) {
    $id = $data['id'];
    $judul = $data['judul'];
    $konten = $data['konten'];
    $kategori = $data['kategori'];
    $penulis = $data['penulis'];
    
    $sql = <<<SQL
      UPDATE artikel
      SET judul = '$judul', konten = '$konten', id_kategori = '$kategori', id_penulis = '$penulis'
      WHERE id = '$id'
    SQL;

    $this->db->query($sql);
    header('Location: /dashboard');
  }

  public function delete($id) {
    $sql = <<<SQL
      DELETE FROM artikel
      WHERE id = '$id'
    SQL;

   $this->db->query($sql);
  }

}
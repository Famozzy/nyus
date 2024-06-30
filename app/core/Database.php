<?php
namespace App\Core;

use PDO;
use PDOException;

class Database {
  private const HOST    = "localhost";
  private const USER    = "admin";
  private const PASS    = "rahasia";
  private const DBNAME  = "berita";

  public static function connect() {
    try {
      $conn = new PDO("mysql:host=" . self::HOST . ";dbname=" . self::DBNAME, self::USER, self::PASS);
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      return $conn;
    } catch (PDOException $e) {
      echo "Connection failed: " . $e->getMessage();
    }
  } 
}
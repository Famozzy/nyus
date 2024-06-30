<?php
namespace App\Core;

abstract class Controller {
  public function model($Model) {
    return new $Model;
  }

  public function view($view, $data = []) {
    $filePath = VIEW_PATH . "$view.php";
    if(file_exists($filePath)) {
      render('header');
      require_once $filePath;
      render('footer');
    }
  }

}


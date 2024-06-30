<?php
namespace App\Controllers;

use App\Core\Controller;
use App\Models\Artikel;

class IndexController extends Controller {
  public function index() {
    $articles = $this->model(Artikel::class)->get();
    $this->view('index', ['articles' => $articles]);
  }
}



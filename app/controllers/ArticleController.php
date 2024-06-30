<?php
namespace App\Controllers;

use App\Core\Controller;
use App\Models\Artikel;

class ArticleController extends Controller {
  public function show() {
    $article = $this->model(Artikel::class)->getById($_GET['id']);
    if (empty($article)) header('Location: /404');
    $this->view('article/index', ['article' => $article]);
  }
}
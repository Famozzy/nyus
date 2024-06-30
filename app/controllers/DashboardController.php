<?php
namespace app\controllers;

use App\Core\Controller;
use App\Models\Artikel;
use App\Models\Kategori;
use App\Models\Penulis;

class DashboardController extends Controller {
  public function index() {
    $articles = $this->model(Artikel::class)->get();
    $categories = $this->model(Kategori::class)->get();
    $authors = $this->model(Penulis::class)->get();
    $this->view('dashboard/index', [
      'articles' => $articles,
      'categories' => $categories,
      'authors' => $authors,
    ]);
  }

  public function createArticle() {
    $categories = $this->model(Kategori::class)->get();
    $authors = $this->model(Penulis::class)->get();

    $this->view('dashboard/article-create', [
      'authors'     => $authors,
      'categories'  => $categories,
    ]);
  }

  public function postArticle() {
    $data = [
      'judul'       => $_POST['judul'],
      'konten'      => $_POST['konten'],
      'kategori'    => $_POST['kategori'],
      'penulis'     => $_POST['penulis'],
      'thumbnail'   => null,
    ];

    if (isset($_POST['curr_thumbnail'])) {
      $data['thumbnail'] = $_POST['curr_thumbnail'];
    }
    
    $file = $_FILES['thumbnail'];
    $targetDir = UPLOAD_PATH;
    $extFile = pathinfo($file['name'], PATHINFO_EXTENSION);
    $fileName = md5(time()) . ".$extFile";
    $targetFilePath = $targetDir . $fileName;

    if (isset($_POST['id'])) {
      $data['id'] = $_POST['id'];
    }

    if ($file['size'] > 0) {
      $data['thumbnail'] = $fileName;
      move_uploaded_file($file['tmp_name'], $targetFilePath);
    }

    $this->model(Artikel::class)->post($data);
    header('Location: /dashboard');
  }

  public function editArticle() {
    if (!isset($_GET['id'])) {
      header('Location: /dashboard');
    }

    $articleId = $_GET['id'];
    $article = $this->model(Artikel::class)->getById($articleId);
    $categories = $this->model(Kategori::class)->get();
    $authors = $this->model(Penulis::class)->get();

    $this->view('dashboard/article-edit', [
      'article'     => $article,
      'authors'     => $authors,
      'categories'  => $categories,
    ]);
  }

  public function deleteArticle() {
    if (!isset($_GET['id'])) {
      header('Location: /dashboard');
    }

    $articleId = $_GET['id'];
    $this->model(Artikel::class)->delete($articleId);
    header('Location: /dashboard');
  }

  public function createCategory() {
    $this->view('dashboard/category-create');
  }

  public function postCategory() {
    $data = [ 'nama' => $_POST['nama'] ];

    if (isset($_POST['id'])) {
      $data['id'] = $_POST['id'];
    }

    $this->model(Kategori::class)->post($data);
    header('Location: /dashboard');
  }

  public function editCategory() {
    if (!isset($_GET['id'])) {
      header('Location: /dashboard');
    }

    $categoryId = $_GET['id'];
    $category = $this->model(Kategori::class)->getById($categoryId);

    $this->view('dashboard/category-edit', [
      'category' => $category,
    ]);
  }

  public function deleteCategory() {
    if (!isset($_GET['id'])) {
      header('Location: /dashboard');
    }

    $categoryId = $_GET['id'];
    $this->model(Kategori::class)->delete($categoryId);
    header('Location: /dashboard');
  }

  public function createAuthor() {
    $this->view('dashboard/author-create');
  }

  public function postAuthor() {
    $data = [
      'nama' => $_POST['nama'],
    ];

    if (isset($_POST['id'])) {
      $data['id'] = $_POST['id'];
    }

    $this->model(Penulis::class)->post($data);
    header('Location: /dashboard');
  }

  public function editAuthor() {
    if (!isset($_GET['id'])) {
      header('Location: /dashboard');
    }

    $authorId = $_GET['id'];
    $author = $this->model(Penulis::class)->getById($authorId);

    $this->view('dashboard/author-edit', [
      'author' => $author,
    ]);
  }

  public function deleteAuthor() {
    if (!isset($_GET['id'])) {
      header('Location: /dashboard');
    }

    $authorId = $_GET['id'];
    $this->model(Penulis::class)->delete($authorId);
    header('Location: /dashboard');
  }
}

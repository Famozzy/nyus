<?php
namespace App\Controllers;

use App\Core\Controller;

class AuthController extends Controller {
  public function login() {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      $username = $_POST['username'];
      $password = $_POST['password'];

      if ($username === ADMIN_USERNAME && $password === ADMIN_PASSWORD) {
        $_SESSION['login'] = true;
        header('Location: /dashboard');
        return;
      }
    }

    // jika sudah login, redirect ke dashboard
    if (isset($_SESSION['login'])) {
      header('Location: /dashboard');
      return;
    }

    $this->view('auth/login');
  }

  public function logout() {
    session_destroy();
    header('Location: /login');
  }
}

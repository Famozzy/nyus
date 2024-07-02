<?php
require_once './_autoload.php';

session_start();

use App\Core\Router;
use App\Controllers\IndexController;
use App\Controllers\DashboardController;
use App\Controllers\ArticleController;
use App\Controllers\AuthController;

const ADMIN_USERNAME = 'admin';
const ADMIN_PASSWORD = '123';

const VIEW_PATH = './app/views/';
const PARTIAL_PATH = VIEW_PATH . '/_partials/';
const UPLOAD_PATH = './img/uploads/';

function render($file) {
  include_once PARTIAL_PATH . "/$file.php";
}

Router::add('GET','/', [IndexController::class, 'index']);
Router::add('GET','/article', [ArticleController::class, 'show']);
Router::add('GET','/dashboard', [DashboardController::class, 'index']);

Router::add('GET','/login', [AuthController::class, 'login']);
Router::add('POST','/login', [AuthController::class, 'login']);
Router::add('GET','/logout', [AuthController::class, 'logout']);

Router::add('GET','/dashboard/article/create', [DashboardController::class, 'createArticle']);
Router::add('POST','/dashboard/article/create', [DashboardController::class, 'postArticle']);
Router::add('GET','/dashboard/article/edit', [DashboardController::class, 'editArticle']);
Router::add('POST','/dashboard/article/edit', [DashboardController::class, 'postArticle']);
Router::add('GET','/dashboard/article/delete', [DashboardController::class, 'deleteArticle']);

Router::add('GET','/dashboard/category/create', [DashboardController::class, 'createCategory']);
Router::add('POST','/dashboard/category/create', [DashboardController::class, 'postCategory']);
Router::add('GET','/dashboard/category/edit', [DashboardController::class, 'editCategory']);
Router::add('POST','/dashboard/category/edit', [DashboardController::class, 'postCategory']);
Router::add('GET','/dashboard/category/delete', [DashboardController::class, 'deleteCategory']);

Router::add('GET','/dashboard/author/create', [DashboardController::class, 'createAuthor']);
Router::add('POST','/dashboard/author/create', [DashboardController::class, 'postAuthor']);
Router::add('GET','/dashboard/author/edit', [DashboardController::class, 'editAuthor']);
Router::add('POST','/dashboard/author/edit', [DashboardController::class, 'postAuthor']);
Router::add('GET','/dashboard/author/delete', [DashboardController::class, 'deleteAuthor']);

Router::run();
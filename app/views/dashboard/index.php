<?php
use App\Lib\Utils;

$articles = $data['articles'];
$categories = $data['categories'];
$authors = $data['authors'];

$counts = [
  0 => [
    'title' => 'Artikel',
    'value' => count($articles)
  ],
  1 => [
    'title' => 'Kategori',
    'value' => count($categories)
  ],
  2 => [
    'title' => 'Penulis',
    'value' => count($authors)
  ]
];

render('dashboard-navbar'); ?>
<main class="container mt-5">
  <section class="row">
    <?php foreach($counts as $count): ?> 
    <div class="col-4">
      <div class="card shadow-sm mb-3">
        <div class="card-body">
          <h4 class="card-title fw-medium"><?= $count["title"]  ?></h4>
          <p class="fw-light"><span class="display-5 fw-medium"><?= $count["value"] ?></span> data</p>
        </div>
      </div>
    </div>
    <?php endforeach; ?>
  </section>
  <section class="my-4 p-3 rounded-2 shadow-sm border">
    <a href="/dashboard/article/create" class="btn btn-outline-dark px-4">
      Tambah Artikel
      <i class="bi bi-pencil-square"></i>
    </a>
    <a href="/dashboard/category/create" class="btn btn-outline-dark px-4">
      Tambah Kategori
      <i class="bi bi-pencil-square"></i>
    </a>
    <a href="/dashboard/author/create" class="btn btn-outline-dark px-4">
      Tambah Penulis
      <i class="bi bi-pencil-square"></i>
    </a>
  </section>
  <section class="table-responsive my-2 shadow rounded-2 px-3 py-4 border">
    <h3 id="artikel" class="border-bottom mt-1">Daftar Artikel</h3>
    <table class="table">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">id</th>
          <th scope="col">Judul</th>
          <th scope="col">Konten</th>
          <th scope="col">Thumbnail</th>
          <th scope="col">tgl Dibuat</th>
          <th scope="col">Kategori</th>
          <th scope="col">Penulis</th>
          <th scope="col">Aksi</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $i = 1;
        foreach ($articles as $article): ?>
        <tr>
          <th scope="row"><?= $i ?></th>
          <td><?= $article['id'] ?></td>
          <td><?= $article['judul'] ?></td>
          <td>
            <a class="text-primary fw-light" href="/article?id=<?= $article['id'] ?>">
              lihat konten
            </a>
          </td>
          <td>
            <a class="text-primary fw-light" href="<?= UPLOAD_PATH . $article['thumbnail'] ?>" target="_blank">
              lihat preview
            </a>
          </td>
          <td><?= Utils::formatDate($article['tgl_dibuat']) ?></td>
          <td><?= $article['kategori'] ?></td>
          <td><?= $article['penulis'] ?></td>
          <td>
            <a href="/dashboard/article/edit?id=<?= $article['id'] ?>" class="btn btn-warning btn-sm">
              <i class="bi bi-pencil-square"></i>
            </a>
            <a href="/dashboard/article/delete?id=<?= $article['id'] ?>" class="btn btn-danger btn-sm">
              <i class="bi bi-trash"></i>
            </a>
          </td>
        </tr>
        <?php
        $i++;
        endforeach; ?>
      </tbody>
    </table>
  </section>
  <section class="mt-4 mb-5">
    <div class="d-flex gap-4">
      <!-- table kategori -->
      <div class="w-100 table-responsive my-2 shadow rounded-2 px-3 py-4 border">
        <h3 class="border-bottom mt-1">Daftar Kategori</h3>
        <table class="table">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">id</th>
              <th scope="col">Nama</th>
              <th scope="col">Aksi</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $i = 1;
            foreach ($categories as $category): ?>
            <tr>
              <th scope="row"><?= $i ?></th>
              <td><?= $category['id'] ?></td>
              <td><?= $category['nama'] ?></td>
              <td>
                <a href="/dashboard/category/edit?id=<?= $category['id'] ?>" class="btn btn-warning btn-sm">
                  <i class="bi bi-pencil-square"></i>
                </a>
                <a href="/dashboard/category/delete?id=<?= $category['id'] ?>" class="btn btn-danger btn-sm">
                  <i class="bi bi-trash"></i>
                </a>
              </td>
            </tr>
            <?php
            $i++;
            endforeach; ?>
          </tbody>
        </table>
      </div>
      <!--  table penulis -->
      <div class="w-100 table-responsive my-2 shadow rounded-2 px-3 py-4 border">
        <h3 class="border-bottom mt-3">Daftar Penulis</h3>
        <table class="table">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">id</th>
              <th scope="col">Nama</th>
              <th scope="col">Aksi</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $i = 1;
            foreach ($authors as $author): ?>
            <tr>
              <th scope="row"><?= $i ?></th>
              <td><?= $author['id'] ?></td>
              <td><?= $author['nama'] ?></td>
              <td>
                <a href="/dashboard/author/edit?id=<?= $author['id'] ?>" class="btn btn-warning btn-sm">
                  <i class="bi bi-pencil-square"></i>
                </a>
                <a href="/dashboard/author/delete?id=<?= $author['id'] ?>" class="btn btn-danger btn-sm">
                  <i class="bi bi-trash"></i>
                </a>
              </td>
            </tr>
            <?php
            $i++;
            endforeach; ?>
          </tbody>
        </table>
      </div>
    </div>
  </section>
</main>
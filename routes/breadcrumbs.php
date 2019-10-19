<?php

//home
Breadcrumbs::for('admin.dashboard', function ($trail) {
    $trail->push('Beranda', route('admin.dashboard'));
});

//Author index
Breadcrumbs::for('admin.author.index', function ($trail) {
    $trail->push('Beranda', route('admin.dashboard'));
    $trail->push('Penulis', route('admin.author.index'));
});

//Author add
Breadcrumbs::for('admin.author.create', function ($trail) {
    $trail->push('Beranda', route('admin.dashboard'));
    $trail->push('Penulis', route('admin.author.index'));
    $trail->push('Tambah Penulis', route('admin.author.create'));
});

//Author edit
Breadcrumbs::for('admin.author.edit', function ($trail, $author) {
    $trail->push('Beranda', route('admin.dashboard'));
    $trail->push('Penulis', route('admin.author.index'));
    $trail->push('Edit Penulis', route('admin.author.edit', $author));
});

//Book index
Breadcrumbs::for('admin.book.index', function ($trail) {
    $trail->push('Beranda', route('admin.dashboard'));
    $trail->push('Daftar Buku', route('admin.book.index'));
});

//Book add
Breadcrumbs::for('admin.book.create', function ($trail) {
    $trail->push('Beranda', route('admin.dashboard'));
    $trail->push('Daftar Buku', route('admin.book.index'));
    $trail->push('Tambah Data Buku', route('admin.book.create'));
});

//Book edit
Breadcrumbs::for('admin.book.edit', function ($trail) {
    $trail->push('Beranda', route('admin.dashboard'));
    $trail->push('Daftar Buku', route('admin.book.index'));
    $trail->push('Edit Data Buku', route('admin.book.edit'));
});




//Ijin index
Breadcrumbs::for('admin.ijin.index', function ($trail) {
    $trail->push('Beranda', route('admin.dashboard'));
    $trail->push('Perijinan', route('admin.ijin.index'));
});

<?php

// Home Admin
Breadcrumbs::for('admin.dashboard', function ($trail) {
    $trail->push('Beranda', route('admin.dashboard'));
});

//Home User
Breadcrumbs::for('home', function ($trail) {
    $trail->push('Beranda', route('home'));
});

// Author Index
Breadcrumbs::for('admin.author.index', function ($trail) {
    $trail->push('Beranda', route('admin.dashboard'));
    $trail->push('Beranda', route('admin.author.index'));
});

// Author create
Breadcrumbs::for('admin.author.create', function ($trail) {
    $trail->push('Beranda', route('admin.dashboard'));
    $trail->push('Beranda', route('admin.author.index'));
    $trail->push('Tambah Penulis', route('admin.author.create'));
});

// Author Edit
Breadcrumbs::for('admin.author.edit', function ($trail, $author) {
    $trail->push('Beranda', route('admin.dashboard'));
    $trail->push('Tambah Penulis', route('admin.author.create'));
    $trail->push('Edit Penulis', route('admin.author.edit', $author));
});

// Book Index
Breadcrumbs::for('admin.book.index', function ($trail) {
    $trail->push('Beranda', route('admin.dashboard'));
    $trail->push('Buku', route('admin.book.index'));
});

// Book create
Breadcrumbs::for('admin.book.create', function ($trail) {
    $trail->push('Beranda', route('admin.dashboard'));
    $trail->push('Buku', route('admin.book.index'));
    $trail->push('Tambah buku', route('admin.book.create'));
});

// Book Edit
Breadcrumbs::for('admin.book.edit', function ($trail, $book) {
    $trail->push('Beranda', route('admin.dashboard'));
    $trail->push('Buku', route('admin.book.create'));
    $trail->push('Edit buku', route('admin.book.edit', $book));
});

// Borrow Index
Breadcrumbs::for('admin.borrow.index', function ($trail) {
    $trail->push('Beranda', route('admin.dashboard'));
    $trail->push('Peminjaman', route('admin.borrow.index'));
});

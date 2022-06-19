<?= $this->extend('layouts/template') ?>

<?= $this->section('content'); ?>

<h1>THIS IS DETAIL OF <?= $detail_produk['nama_instansi'] ?></h1>

<h2>Ini Kategori : <?= $dataKategori['nama_kategori'] ?></h2>
<h2>Ini Sub : <?= $dataSubKategori['nama_subkategori'] ?></h2>

<h2>INI RANGE HARGA</h2>
<h3>Rp <?= $detail_produk['harga_min'] ?> - Rp <?= $detail_produk['harga_max'] ?> </h3>



<?= $this->endsection(); ?>
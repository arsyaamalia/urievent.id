<?= $this->extend('layouts/template') ?>
<?= $this->section('content'); ?>
<style>
    .row.categories>.col {
        height: 100px;
        border: 1px solid black;
    }
</style>

<div class="container">
    <!-- Iklan Box -->
    <!-- ini bisa pake fitur  slider di  bootstrap-->
    <div class="row  p-4 bg-light">
        <div class="col-4 m-2 text-center text-white " style="background-color: #0F3460 ;">
            <h6>Ads Media Partner, Ads Sponsorship, Ads Vendor, Ads Venue</h6>
        </div>
        <div class="col-2 text-center text-white" style="background-color: #0F3460 ;">
            <!-- rectangle?? -->
            <h4>This Is Rectangle</h4>
        </div>
    </div>

    <!-- Categories box -->
    <div class="mt-4">
        <div class="row">
            <div class="col">
                <h2>Hello, User! Choose a Category below! </h2>
                <!-- nanti user diganti $username_user -->
            </div>
        </div>
        <div class="row categories pb-3">
            <div class="col">
                <img src="" alt="">
                <h5>Media Partner</h5>
            </div>
            <div class="col">
                <img src="" alt="">
                <h5>Sponsorship</h5>
            </div>
            <div class="col">
                <img src="" alt="">
                <h5>Vendor</h5>
            </div>
            <div class="col">
                <img src="" alt="">
                <h5>Venue</h5>
            </div>
        </div>
    </div>
    <!-- end of Categories box -->

    <!-- Recomendations -->
    <h3>Recomendations</h3>
    <div class="col d-flex flex-wrap">

        <?php
        foreach ($daftar_produk as $produk) : ?>
            <div class="row-3 m-4 p-1 border border-dark">
                <div><?= $produk['id_layanan'] ?></div>
                <div><img src="/img/<?= $produk['picture_poster'] ?>" alt=""></div>
                <h4><?= $produk['nama_layanan'] ?></h4>
                <h6><?= $produk['harga_min'] ?> - <?= $produk['harga_max'] ?></h6>
            </div>
        <?php endforeach; ?>
    </div>
    <!-- end of Recomendations -->

    <button>see more</button>
</div>
<?= $this->endsection(); ?>
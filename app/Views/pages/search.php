<?= $this->extend('layouts/template') ?>

<?= $this->section('content'); ?>
<div class="search-container">

    <div class="search-form">
        <form action="">
            <input type="search" value="<?= $cari ?>">
        </form>
    </div>

    <div class="search-box">
        <?php foreach ($daftar_produk as $produk) :
        ?>
            <div class="search-hover">
                <a href="search-button">
                    <div class="search-item">
                        <div class="search-grup">
                            <div class="search-circle"><img src="/img/<?= $produk['picture_poster'] ?>" alt=""></div>
                            <h4><?= $produk['nama_instansi'] ?> </h4>
                        </div>
                        <h3>Rp <?= number_format($produk['harga_min'], '0', '', '.'); ?></h3>
                    </div>
                </a>
            </div>

        <?php endforeach; ?>
    </div>
</div>

<?= $this->endsection(); ?>
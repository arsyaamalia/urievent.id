<?= $this->extend('layouts/template') ?>

<?= $this->section('content'); ?>
<div class="search-container">

    <div class="search-form">
        <form action="search" method="GET">
            <input name="cari" type="search" value="<?= $cari ?>">
        </form>
    </div>

    <div class="product-box">
        <?php foreach ($daftar_produk as $produk) :
        ?>
            <div class="product-hover">
                <a href="/detail/index/<?= $produk['id_layanan']; ?>/<?= $produk['id_kategori']; ?>/<?= $produk['id_subkategori']; ?>">
                    <div class="product-item">
                        <div class="product-grup">
                            <div class="item-circle"><img src="/img/picture_poster_layanan/<?= $produk['picture_poster'] ?>" alt="" id="product-image"></div>
                            <h4><?= $produk['nama_instansi'] ?> </h4>
                        </div>
                        <h3>Rp <?= number_format($produk['harga_min'], '0', '', '.'); ?></h3>
                    </div>
                </a>
            </div>

        <?php endforeach; ?>
    </div>
    <!-- <div>  //$pager->links('daftar_produk', 'urievent_pagination'); ?> -->
</div>
</div>

<?= $this->endsection(); ?>
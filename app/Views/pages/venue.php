<?= $this->extend('layouts/template') ?>

<?= $this->section('content'); ?>

<div class="batas-body">
    <div class="sponsor-search">
        <div class="boxContainer">
            <table class="table-search">
                <tr>
                    <td>
                        <input type="text" placeholder="search" class="search-input">
                    </td>
                    <td>
                        <a href="#"><img src="/searchIcon.svg" alt="" class="input-img"></a>
                    </td>
                </tr>
            </table>
        </div>

    </div>

    <div class="body-urievent">

        <div class="recommendation-container">
            <h2>Medpart</h2>

            <div class="product-box">
                <?php
                foreach ($daftar_produk as $produk) : ?>
                    <div class="product-hover">
                        <a href="/detail/index/<?= $produk['id_layanan']; ?>/<?= $produk['id_kategori']; ?>/<?= $produk['id_subkategori']; ?>">
                            <div class="product-item">
                                <div class="product-grup">
                                    <div class="item-circle"><img src="/img/<?= $produk['picture_poster'] ?>" alt="" id="product-image"></div>
                                    <h4><?= $produk['nama_instansi'] ?></h4>
                                </div>
                                <h3>Rp <?= number_format($produk['harga_min'], '0', '', '.'); ?></h3>
                            </div>
                        </a>
                    </div>
                <?php endforeach; ?>
            </div>
            <div class="seeall-button">
                <a href="see-more-recom">
                    <div class="see-all">
                        <h4>See More</h4>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>

<?= $this->endsection(); ?>
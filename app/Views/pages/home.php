<?= $this->extend('layouts/template') ?>


<?= $this->section('content'); ?>

<div class="ads-container">
    <div class="ads-box">
        <div class="big-ads" id="ads">
            <div class="ads-text">Ads Media Partner, Ads Sponsorship, Ads Vendor, Ads Venue</div>
            <div class="circle-slide">
                <div class="circle" id="active-circle"></div>
                <div class="circle"></div>
                <div class="circle"></div>
                <div class="circle"></div>
                <div class="circle"></div>
            </div>
        </div>
        <div class="small-ads" id="ads"></div>
    </div>
</div>

<div class="batas-body">
    <div class="body-urievent">
        <div class="categories-container">
            <h2>Hello <?= session()->get('username_user'); ?> Choose a Category below!</h2>
            <div class="categories-box">
                <div class="hover">
                    <a href="/pages/medpart">
                        <div class="categories-item">
                            <div class="category-circle">
                                <img src="../ICON/medpart.png" alt="medpart">
                            </div>
                            <h4>Media Partner</h4>
                        </div>
                    </a>
                </div>
                <div class="hover">
                    <a href="/pages/sponsorship">
                        <div class="categories-item">
                            <div class="category-circle">
                                <img src="../ICON/sponsorship.png" alt="sponsorship">
                            </div>
                            <h4>Sponsorship</h4>
                        </div>
                    </a>
                </div>
                <div class="hover">
                    <a href="/pages/vendor">
                        <div class="categories-item">
                            <div class="category-circle">
                                <img src="../ICON/vendor.png" alt="vendor">
                            </div>
                            <h4>Vendor</h4>
                        </div>
                    </a>
                </div>
                <div class="hover">
                    <a href="/pages/venue">
                        <div class="categories-item">
                            <div class="category-circle">
                                <img src="../ICON/venue.png" alt="venue">
                            </div>
                            <h4>Venue</h4>
                        </div>
                    </a>
                </div>
            </div>
        </div>

        <div class="recommendation-container">
            <h2>Recommendations</h2>

            <div class="recommendation-box">
                <?php
                foreach ($daftar_produk as $produk) : ?>
                    <div class="recom-hover">
                        <a href="/detail/index/<?= $produk['id_layanan']; ?>/<?= $produk['id_kategori']; ?>/<?= $produk['id_subkategori']; ?>">
                            <div class="recom-item">
                                <div class="recom-grup">
                                    <!-- <div class="item-circle" style="background-size: cover; background-image: url('/img/picture_poster_layanan/$produk['picture_poster'] ') ;"> -->
                                    <div class="item-circle" style="overflow: hidden;">
                                        <img src="/img/picture_poster_layanan/<?= $produk['picture_poster'] ?>" alt="" style="object-fit: cover; width: auto; height: 100%;">
                                    </div>
                                    <h4><?= $produk['nama_instansi'] ?></h4>
                                </div>
                                <h3>Rp <?= number_format($produk['harga_min'], '0', '', '.'); ?></h3>
                            </div>
                        </a>
                    </div>
                <?php endforeach; ?>
            </div>

            <div> <?= $pager->links('daftar_produk', 'urievent_pagination'); ?>
            </div>

            <!-- <div class="seeall-button">
                <a href="see-more-recom">
                    <div class="see-all">
                        <h4>See More</h4>
                    </div>
                </a>
            </div> -->
        </div>
    </div>
</div>

<?= $this->endsection(); ?>
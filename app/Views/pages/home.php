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
            <h2>Hello User! Choose a Category below!</h2>
            <div class="categories-box">
                <div class="hover">
                    <a href="medpart.html">
                        <div class="categories-item">
                            <div class="category-circle">
                                <img src="../ICON/medpart.png" alt="medpart">
                            </div>
                            <h4>Media Partner</h4>
                        </div>
                    </a>
                </div>
                <div class="hover">
                    <a href="sponsor.html">
                        <div class="categories-item">
                            <div class="category-circle">
                                <img src="../ICON/sponsorship.png" alt="sponsorship">
                            </div>
                            <h4>Sponsorship</h4>
                        </div>
                    </a>
                </div>
                <div class="hover">
                    <a href="vendor.html">
                        <div class="categories-item">
                            <div class="category-circle">
                                <img src="../ICON/vendor.png" alt="vendor">
                            </div>
                            <h4>Vendor</h4>
                        </div>
                    </a>
                </div>
                <div class="hover">
                    <a href="venue.html">
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
                <?php if (!isset($_GET["see-more"])) : ?>
                    <?php $i = 0 ?>
                    <?php for ($i = 0; $i < 15; $i++) :
                    ?>

                        <div class="recom-hover">
                            <a href="/detail/detail">
                                <div class="recom-item">
                                    <div class="recom-grup">
                                        <div class="item-circle"><img src="/img/<?= $daftar_produk[$i]['picture_poster'] ?>" alt=""></div>
                                        <h4><?= $daftar_produk[$i]['nama_instansi'] ?></h4>
                                    </div>
                                    <h3>Rp <?= $daftar_produk[$i]['harga_min'] ?></h3>
                                </div>
                            </a>
                        </div>
                    <?php endfor; ?>
                <?php endif; ?>

                <?php if (isset($_GET["see-more"])) : ?>
                    <?php foreach ($daftar_produk as $produk) : ?>
                        <div class="recom-hover">
                            <a href="/detail/detail">
                                <div class="recom-item">
                                    <div class="recom-grup">
                                        <div class="item-circle"><img src="/img/<?= $produk['picture_poster'] ?>" alt=""></div>
                                        <h4><?= $produk['nama_instansi'] ?></h4>
                                    </div>
                                    <h3>Rp <?= $produk['harga_min'] ?></h3>
                                </div>
                            </a>
                        </div>
                    <?php endforeach; ?>
                <?php endif; ?>

            </div>
            <form action="">
                <div class="seeall-button">
                    <button name="see-more">
                        <div class="see-all">
                            <h4>See More</h4>
                        </div>
                    </button>
                </div>
            </form>

        </div>
    </div>
</div>

<?= $this->endsection(); ?>
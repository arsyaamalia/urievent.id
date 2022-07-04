<?= $this->extend('layouts/template') ?>

<?= $this->section('content'); ?>

<hr class="hr-service">

<div class="uriprofile-container">

    <div class="profile-container">
        <div class="profile-photo">
            <img src="/img/foto_user/<?= session()->get('foto_user'); ?>" class=" photo-user">
        </div>
        <div class="name-edit">
            <div class="profile-name">
                <h1><?= session()->get('nama_user'); ?></h1>
            </div>
            <div class="edit-button">
                <a href="/sign/editProfile"><button type="button">Edit Profile</button></a>
            </div>
        </div>
    </div>

    <div class="service-container">
        <div class="service-slide">
            <div class="slide-background">
                <div class="slide-draft">
                    <button class="draft1" onclick="overlayDraft()" style="display: none;">Draft</button>
                    <button class="draft2">Draft</button>
                </div>
                <div class="slide-active">
                    <button class="active1" onclick="overlayActive()">Active</button>
                    <button class="active2" style="display: none;">Active</button>
                </div>
            </div>
        </div>
        <div class="service-menu">
            <div class="menu-draft">
                <h2>Draft</h2>
                <div class="product-box">
                    <!-- draft box ini dalemnya buat looping service item yg draft -->
                    <?php foreach ($daftar_produk_draft as $produkDraft) : ?>

                        <div class="product-hover">
                            <!-- link to detail-pribadi -->
                            <a href="/detail/detailpribadi/<?= $produkDraft['id_layanan']; ?>/<?= $produkDraft['id_kategori']; ?>/<?= $produkDraft['id_subkategori']; ?>">
                                <div class="product-item">
                                    <div class="product-grup">
                                        <div class="item-circle" style="overflow: hidden;">
                                            <img src="/img/picture_poster_layanan/<?= $produkDraft['picture_poster'] ?>" style="object-fit: cover; width: auto; height: 100%;">
                                        </div>
                                        <h4><?= $produkDraft['nama_instansi'] ?></h4>
                                    </div>
                                    <h3>Rp <?= number_format($produkDraft['harga_min'], '0', '', '.'); ?></h3>
                                </div>
                            </a>
                        </div>
                    <?php endforeach; ?>

                </div>
            </div>


            <div class="menu-active" style="display: none;">
                <h2>Active</h2>
                <div class="product-box">
                    <?php foreach ($daftar_produk_active as $produkActive) : ?>
                        <div class="product-hover">
                            <a href="/detail/detailpribadi/<?= $produkActive['id_layanan']; ?>/<?= $produkActive['id_kategori']; ?>/<?= $produkActive['id_subkategori']; ?>">
                                <div class="product-item">
                                    <div class="product-grup">
                                        <div class="item-circle" style="overflow: hidden;">
                                            <img src="/img/picture_poster_layanan/<?= $produkActive['picture_poster'] ?>" style="object-fit: cover; width: auto; height: 100%;">
                                        </div>
                                        <h4><?= $produkActive['nama_instansi'] ?></h4>
                                    </div>
                                    <h3>Rp <?= number_format($produkActive['harga_min'], '0', '', '.'); ?></h3>
                                </div>
                            </a>
                        </div>
                    <?php endforeach; ?>
                    <!-- active box ini dalemnya buat looping service item yg active -->
                </div>
            </div>
        </div>
    </div>

</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="<?= base_url('/js/jquery-3.6.0.min.js') ?>"></script>
<script src="<?= base_url('/js/script.js') ?>"></script>

<?= $this->endsection(); ?>
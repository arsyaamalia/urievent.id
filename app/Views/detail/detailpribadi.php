<?= $this->extend('layouts/template') ?>

<?= $this->section('content'); ?>

<div class="detail-pribadi-container">
    <div class="detail-pribadi-back"></div>
    <div class="detail-pribadi-grup">
        <div class="detail-pribadi-box">
            <h2><a href="/pages/uriservice">＜<?= $detail['nama_instansi'] ?></a></h2>
            <div class="detail-item">
                <div class="detail-picture">
                    <img src="/img/picture_poster_layanan/<?= $detail['picture_poster'] ?>" class="img-logo" />
                </div>
                <div class="detail-data">
                    <div class="detail-jenis">
                        <div class="kategori">
                            <h6><?= $dataKategori['nama_kategori'] ?></h6>
                        </div>
                        <div class="subkategori">
                            <h6><?= $dataSubKategori['nama_subkategori'] ?></h6>
                        </div>
                    </div>
                    <div class="detail-nama">
                        <h4><?= $detail['nama_instansi'] ?></h4>
                    </div>
                    <div class="detail-harga">
                        <h3>Rp <?= number_format($detail['harga_min'], '0', '', '.'); ?> - Rp <?= number_format($detail['harga_max'], '0', '', '.') ?></h3>
                    </div>
                    <div class="detail-contact">
                        <div class="contact-email">
                            <h6><?= $detail['email_instansi'] ?></h6>
                        </div>
                        <div class="contact-socmed">
                            <div class="socmed-wa-box">
                                <a href="https://wa.me/62/<?= $detail['whatsapp'] ?>">
                                    <div class="socmed-wa">
                                        <img src="/icon/whatsapp.png" class="img-wa" />
                                    </div>
                                </a>
                            </div>
                            <div class="socmed-ig-box">
                                <a href="https://instagram.com/<?= $detail['instagram'] ?>">
                                    <div class="socmed-ig">
                                        <img src="/icon/instagram.png" class="img-ig" />
                                    </div>
                                </a>
                            </div>
                            <!-- BELUM ADA FITUR -->
                            <div class="socmed-chat-box">
                                <a href="/urichat">
                                    <div class="socmed-chat">
                                        <img src="/icon/message.png" class="img-msg" />
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="detail-action">
                        <div class="action-button">
                            <div class="edit-box">
                                <a href="/editlayanan/index">
                                    <div class="edit-service">
                                        <p>Edit</p>
                                    </div>
                                </a>
                            </div>
                            <div class="delete-box">
                                <a href="#">
                                    <div class="delete-service">
                                        <p>Delete</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="detail-keterangan">
            <div class="keterangan-container">
                <h4><?= $dataKategori['nama_kategori'] ?> Detail</h4>
                <div class="about">
                    <div class="keterangan-list">
                        <h6>About</h6>
                        <p><?= $detail['deskripsi'] ?></p>
                    </div>
                    <div class="keterangan-line-box">
                        <hr class="keterangan-line" />
                    </div>
                </div>

                <div class="step-before">
                    <div class="keterangan-list">
                        <h6>Steps to Purchase</h6>
                        <ul>
                            <?php foreach ($detail['step_before'] as $step_before) : ?>
                                <li>
                                    <p><?= $step_before ?></p>
                                </li>
                        </ul>
                    </div>
                    <div class="keterangan-line-box">
                    <?php endforeach; ?>

                    <hr class="keterangan-line" />
                    </div>
                </div>


                <div class="step-after">
                    <div class="keterangan-list">
                        <h6>Steps after Purchase</h6>
                        <ul>
                            <?php foreach ($detail['step_after'] as $step_after) : ?>
                                <li>
                                    <p><?= $step_after ?></p>

                                </li>
                        </ul>
                    </div>
                    <div class="keterangan-line-box">
                    <?php endforeach; ?>
                    <hr class="keterangan-line" />
                    </div>
                </div>

                <div class="value">
                    <div class="keterangan-list">
                        <h6>Eligibility</h6>
                        <ul>
                            <?php foreach ($detail['value'] as $value) : ?>
                                <li>
                                    <p><?= $value ?></p>
                                </li>
                        </ul>
                    </div>
                    <div class="keterangan-line-box">
                    <?php endforeach; ?>
                    <hr class="keterangan-line" />
                    </div>
                </div>
            </div>

            <div class="package-container">
                <h4>Available Packages</h4>

                <?php foreach ($detail['paket'] as $paket) : ?>
                    <div class="package-box">
                        <div class="package-box-left">
                            <hr>
                        </div>
                        <div class="package-box-right">
                            <div class="package-name">
                                <h6><?= $paket['nama_paket'] ?></h6>
                            </div>
                            <div class="package-description">
                                <p><?= $paket['deskripsi_paket'] ?></p>
                            </div>
                            <div class="package-prize" style="margin: 0;">
                                <h6 style="margin: 0;">Rp <?= number_format($paket['harga_paket'], '0', '', '.'); ?></h6>
                            </div>
                            <!-- <div class="package-quantitiy">
                            <div class="number-input">
                            <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()" ></button>
                            <input class="quantity" min="0" name="quantity" value="1" type="number" readonly>
                            <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="plus"></button>
                            </div>
                        </div> -->
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="<?= base_url('/js/jquery-3.6.0.min.js') ?>"></script>
<script src="<?= base_url('/js/script.js') ?>"></script>

<?= $this->endsection(); ?>
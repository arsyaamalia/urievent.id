<?= $this->extend('layouts/template') ?>

<?= $this->section('content'); ?>

<hr class="hr-service">
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
            <div class="draft-box"> 
            <!-- draft box ini dalemnya buat looping service item yg draft -->
                <div class="draft-hover">
                    <a href="#" onclick="overlayDetail()">
                        <div class="draft-item">
                            <div class="draft-grup">
                                <div class="item-circle" style="overflow: hidden;">
                                    <img src="/img/mu.png"style="object-fit: cover; width: auto; height: 100%;">
                                </div>
                                <h4>Company's Name</h4>
                            </div>
                            <h3>Rp25000</h3>
                        </div>
                    </a>
                </div>
                <div class="draft-hover">
                    <a href="#" onclick="overlayDetail()">
                        <div class="draft-item">
                            <div class="draft-grup">
                                <div class="item-circle" style="overflow: hidden;">
                                    <img src="/img/mu.png"style="object-fit: cover; width: auto; height: 100%;">
                                </div>
                                <h4>Company's Name</h4>
                            </div>
                            <h3>Rp25000</h3>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="menu-active" style="display: none;">
            <h2>Active</h2>
            <div class="active-box"> 
            <!-- active box ini dalemnya buat looping service item yg active -->
                <div class="active-hover">
                    <a href="#" onclick="overlayDetail()">
                        <div class="active-item">
                            <div class="active-grup">
                                <div class="item-circle" style="overflow: hidden;">
                                    <img src="/img/logomagangupdate.png"style="object-fit: cover; width: auto; height: 100%;">
                                </div>
                                <h4>Company's Name</h4>
                            </div>
                            <h3>Rp25000</h3>
                        </div>
                    </a>
                </div>
                <div class="active-hover">
                    <a href="#" onclick="overlayDetail()">
                        <div class="active-item">
                            <div class="active-grup">
                                <div class="item-circle" style="overflow: hidden;">
                                    <img src="/img/logomagangupdate.png"style="object-fit: cover; width: auto; height: 100%;">
                                </div>
                                <h4>Company's Name</h4>
                            </div>
                            <h3>Rp25000</h3>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="detail-pribadi-container">
    <div class="detail-pribadi-back"></div>
    <div class="detail-pribadi-grup">
            <div class="detail-pribadi-box">
                <h2><a href="#" onclick="overlayClose()">＜ Magang Update</a></h2>
                <div class="detail-item">
                    <div class="detail-picture">
                        <img src="/img/mu.png" class="img-logo" />
                    </div>
                    <div class="detail-data">
                        <div class="detail-jenis">
                            <div class="kategori">
                                <h6>Media Partner</h6>
                            </div>
                            <div class="subkategori">
                                <h6>Career Development</h6>
                            </div>
                        </div>
                        <div class="detail-nama">
                            <h4>Magang Update</h4>
                        </div>
                        <div class="detail-harga">
                            <h3>Rp25000 - Rp50000</h3>
                        </div>
                        <div class="detail-contact">
                            <div class="contact-email">
                                <h6>magangupdate@gmail.com</h6>
                            </div>
                            <div class="contact-socmed">
                                <div class="socmed-wa-box">
                                    <a href="https://wa.me/62">
                                        <div class="socmed-wa">
                                            <img src="/icon/whatsapp.png" class="img-wa" />
                                        </div>
                                    </a>
                                </div>
                                <div class="socmed-ig-box">
                                    <a href="https://instagram.com/">
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
                            <div class="action-like" id="bg-action-logo">
                                <img src="/icon/love.png" class="img-like" />
                            </div>
                            <div class="action-share" id="bg-action-logo">
                                <img src="/icon/share.png" class="img-share" />
                            </div>
                            <div class="action-save" id="bg-action-logo">
                                <img src="/icon/save.png" class="img-save" />
                            </div>
                            <div class="action-button">
                                <div class="edit-box">
                                    <a href="#">
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
                    <h4>Nama Kategori Detail</h4>
                    <div class="about">
                        <div class="keterangan-list">
                            <h6>About</h6>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Incidunt ea quasi similique modi cum aliquid, ad optio voluptatem corporis quisquam excepturi omnis, assumenda nihil dolore? Distinctio nostrum mollitia eos molestias.</p>
                        </div>
                        <div class="keterangan-line-box">
                            <hr class="keterangan-line" />
                        </div>
                    </div>

                    <div class="step-before">
                        <div class="keterangan-list">
                            <h6>Steps to Purchase</h6>
                            <ul>
                                <li>
                                    <p>Upload poster event yang sudah berlogo company kami</p>
                                    <p>Isi caption atau tambahan lainnya untuk keperluan upload</p>
                                    <p>Kirim bukti transfer</p>
                                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Corrupti, nobis?</p>
                                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Corrupti, nobis?</p>
                                </li>
                            </ul>
                        </div>
                        <div class="keterangan-line-box">
                            <hr class="keterangan-line" />
                        </div>
                    </div>

                    <div class="step-after">
                        <div class="keterangan-list">
                            <h6>Steps after Purchase</h6>
                            <ul>
                                <li>
                                    <p>Join WhatsApp group</p>
                                    <p>Pilih jadwal upload poster saat mengisi formulir</p>
                                    <p>Wait your poster uploaded</p>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus, nam?</p>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam, ipsum.</p>
                                </li>
                            </ul>
                        </div>
                        <div class="keterangan-line-box">
                            <hr class="keterangan-line" />
                        </div>
                    </div>

                    <div class="value">
                        <div class="keterangan-list">
                            <h6>Eligibility</h6>
                            <ul>
                                <li>
                                    <p>Original followers</p>
                                    <p>32.000++ active accounts</p>
                                    <p>Have been a trusted media partner for 5 years</p>
                                </li>
                            </ul>
                        </div>
                        <div class="keterangan-line-box">
                            <hr class="keterangan-line" />
                        </div>
                    </div>
                </div>
                
                <div class="package-container">
                    <h4>Available Packages</h4>
                    <div class="package-box">
                        <div class="package-box-left">
                        <hr>
                        </div>
                        <div class="package-box-right">
                        <div class="package-name">
                            <h6>Paket Bronze</h6>
                        </div>
                        <div class="package-description">
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quidem, adipisci deleniti nihil aliquam fuga a, consequatur, cumque quos deserunt velit corrupti eligendi. Enim, tenetur sit ipsum optio quia quibusdam impedit?</p>
                        </div>
                        <div class="package-prize" style="margin: 0;">
                            <h6 style="margin: 0;">Rp25000</h6>
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
                    <div class="package-box">
                        <div class="package-box-left">
                        <hr>
                        </div>
                        <div class="package-box-right">
                        <div class="package-name">
                            <h6>Paket Bronze</h6>
                        </div>
                        <div class="package-description">
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quidem, adipisci deleniti nihil aliquam fuga a, consequatur, cumque quos deserunt velit corrupti eligendi. Enim, tenetur sit ipsum optio quia quibusdam impedit?</p>
                        </div>
                        <div class="package-prize">
                            <h6>Rp25000</h6>
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
                </div>
            </div>
        </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="<?= base_url('/js/jquery-3.6.0.min.js') ?>"></script>
<script src="<?= base_url('/js/script.js') ?>"></script>

<?= $this->endsection(); ?>
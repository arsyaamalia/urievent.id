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
                    <a href="/detail/draft">
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
                    <a href="/detail/draft">
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
                    <a href="/detail/active">
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
                    <a href="/detail/active">
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

<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="<?= base_url('/js/jquery-3.6.0.min.js') ?>"></script>
<script src="<?= base_url('/js/script.js') ?>"></script>

<?= $this->endsection(); ?>
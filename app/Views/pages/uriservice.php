<?= $this->extend('layouts/template') ?>

<?= $this->section('content'); ?>

<hr>
<div class="service-container">
    <div class="service-slide">
        <div class="slide-background">
            <div class="slide-draft">
                <button class="draft1">
                    <h3>Draft</h3>
                </button>
                <button class="draft2">
                    <h3>Draft</h3>
                </button>
            </div>
            <div class="slide-active">
                <button class="active1">
                    <h3>Active</h3>
                </button>
                <button class="active2">
                    <h3>Active</h3>
                </button>
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
        <div class="menu-active">
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

<?= $this->endsection(); ?>
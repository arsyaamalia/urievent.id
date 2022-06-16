<?= $this->extend('layouts/template') ?>

<?= $this->section('content'); ?>
<div class="search-container">
    
    <div class="search-form">
    <form action="">
            <input type="search">
        </form>
    </div>  

    <div class="search-box">
        <?php
        //foreach ()
        ?>
         <div class="search-hover">
            <a href="search-button">
                <div class="search-item">
                    <div class="search-grup">
                        <div class="search-circle"><img src="/img/<? iniDatabase ?>" alt=""></div>
        <h4>Medpart Name <? ?> </h4>
                    </div>
        <h3>Harga ya zab <? ?></h3>
                </div>
            </a>
        </div>
    </div>
</div>

    <?= $this->endsection(); ?>
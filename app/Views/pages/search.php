<?= $this->extend('layouts/template') ?>

<?= $this->section('content'); ?>
<div class="search-container">
        <form action="">
            <div class="form">
                <input type="search">
            </div>
        </form>

    <div class="search-box">
        <?php
        //foreach ()
        ?>
         <div class="search-hover">
            <a href="search-button">
                <div class="search-item">
                    <div class="search-grup">
                        <div class="search-circle"><img src="/img/<? iniDatabase ?>" alt=""></div>
        <!-- <h4><? iniDatabase ?></h4> -->
                    </div>
        <!-- <h3>Rp <? iniDatabase ?></h3> -->
                </div>
            </a>
        </div>
    </div>
</div>

    <?= $this->endsection(); ?>
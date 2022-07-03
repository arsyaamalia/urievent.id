<?= $this->extend('layouts/template') ?>
<?= $this->section('content'); ?>

<section class="intro" id="intro">
    <div class="intro-container">
        <div class="intro-3dimg">
            <img src="/img/ilustrasi-intro.png" class="img3d">
        </div>
        <div class="intro-text">
            <h1>Website No.1<br>Organisasi & Komunitas Indonesia</h1>
            <p>Cari Media Partner, Sponsorship, Vendor, Venue<br>UriEvent - Your Event’s Needs Here</p>
        </div>
    </div>
</section>
<section class="menu" id="menu">
    <div class="menu-container">
        <h2>Website No.1 Organisasi & Komunitas Indonesia</h2>
        <div class="intro-menu-container">
            <div class="intro-menu-item">
                <div class="menu-item-title">
                    <div class="menu-item-img">
                        <img src="/icon/medpart.png" class="menu-item-icon">
                    </div>
                    <h4>MedPart</h4>
                </div>
                <p>Temukan 2000+ Media Partner untuk dukung eventmu. Kamu bisa upload dan promosi organisasimu juga, lho!</p>
            </div>
            <div class="intro-menu-item">
                <div class="menu-item-title">
                    <div class="menu-item-img">
                        <img src="/icon/sponsorship.png" class="menu-item-icon">
                    </div>
                    <h4>Sponsorship</h4>
                </div>
                <p>Dapatkan 2000+ Sponsor untuk bantu eventmu. Kamu bisa upload dan promosi companymu juga, lho!</p>
            </div>
            <div class="intro-menu-item">
                <div class="menu-item-title">
                    <div class="menu-item-img">
                        <img src="/icon/vendor.png" class="menu-item-icon">
                    </div>
                    <h4>Vendor</h4>
                </div>
                <p>Gunakan 2000+ Vendor untuk seluruh keperluan perlengkapan eventmu. Kamu bisa upload dan promosi vendormu, lho!</p>
            </div>
            <div class="intro-menu-item">
                <div class="menu-item-title">
                    <div class="menu-item-img">
                        <img src="/icon/venue.png" class="menu-item-icon">
                    </div>
                    <h4>Venue</h4>
                </div>
                <p>Gunakan 2000+ Venue sebagai tempat untuk selenggarakan eventmu. Kamu bisa upload venuemu, lho!</p>
            </div>
        </div>
        <a href="/sign"><button type="button" class="start-button">Let’s Get Started</button></a>
    </div>
    <div class="tablet-container">
        <div class="intro-tab-container">
            <img src="/img/tablet-urievent.png" class="tab-img">
        </div>
    </div>
</section> <?= $this->endsection(); ?>
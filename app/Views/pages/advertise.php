<?= $this->extend('layouts/template') ?>

<?= $this->section('content'); ?>

<div class="advertise-back">
<section id="advertise-container">
    <div id="advertise-head">
        <h1 style="margin: 0;">Brand & General<br>Partnership</h1>
        <p id="advertise-text">Platform organisasi dan komunitas terbesar Indonesia. Mulai dari media partner, sponsorship, vendor, dan venue. UriEvent bisa bantu semuanya!</p>
    </div>
    <div id="advertise-form">
        <form action="#">
            <h2>Kolaborasi dengan UriEvent</h2>
            <div class="kolab-nama">
              <label for="institut-nama" class="ad-label">Nama Institusi</label>
              <input type="text" name="institut-nama" id="institut-nama" required tabindex="1" placeholder="Masukkan nama institusi"/>
            </div>
            <div class="kolab-cp">
              <label for="institut-cp" class="ad-label">Nama Lengkap Contact Person</label>
              <input type="text" name="institut-cp" id="institut-cp" required tabindex="2" placeholder="Masukkan nama lengkap contact person"/>
            </div>
            <div class="kolab-nomor">
              <label for="institut-nomor" class="ad-label">Nomor Handphone (Whatsapp)</label>
              <div class="collabse-number">
                <div class="value62">+62</div>
                <hr>
                <input type="number" name="institut-nomor" id="institut-nomor" class="phone-field" required tabindex="3" placeholder="Masukkan nomor handphone (whatsapp) ex: 82223456789"/>
              </div>
            </div>
            <div class="kolab-email">
              <label for="institut-email" class="ad-label">Email</label>
              <input type="email" name="institut-email" id="institut-email" required tabindex="4" placeholder="Masukkan email"/>
            </div>
            <div class="kolab-desc">
              <label for="institut-desc" class="ad-label">Deskripsi kerja sama</label>
              <textarea name="institut-desc" id="institut-desc" required tabindex="5" placeholder="Masukkan deskripsi kerja sama"></textarea>
            </div>
            <div class="kolab-lampiran">
              <label for="institut-lampiran" class="ad-label">Lampiran (opsional)</label>
              <input type="text" name="institut-lampiran" id="institut-lampiran" tabindex="6" placeholder="Masukkan lampiran apabila ada">
            </div>
            <button type="submit" class="submit-form-advertise">Submit Form</button>
        </form>

        <!-- <div class="form">
        <form action="">
            <input type="text">
            <input type="text">
            <input type="text">
        </form>
        </div> -->
    </div>
</section>
</div>

<hr class="hr-white">

<?= $this->endsection(); ?>
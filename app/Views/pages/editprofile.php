<?= $this->extend('layouts/template') ?>

<?= $this->section('content'); ?>

<hr class="hr-service">

<div class="uriprofile-container">

<div class="edit-profile-field">
      <div class="edit-profile-nav">
        <div class="nav-gene">
          <button class="gene1" type="button" onclick="overlayGene()">
            <div class="button-wrap">
              <div class="nav-nomor">
                <h3>1</h3>
              </div>
              <div class="nav-nama">
                <h3>General</h3>
              </div>
            </div>
          </button>
          <button class="gene2" type="button">
            <div class="button-wrap">
              <div class="nav-nomor2">
                <h3>1</h3>
              </div>
              <div class="nav-nama2">
                <h3>General</h3>
              </div>
            </div>
          </button>
        </div>
        <div class="nav-edit-profile">
          <button class="edit1" type="button" onclick="overlayEdit()">
            <div class="button-wrap">
              <div class="nav-nomor">
                <h3>1</h3>
              </div>
              <div class="nav-nama">
                <h3>Edit Profile</h3>
              </div>
            </div>
          </button>
          <button class="edit2" type="button">
            <div class="button-wrap">
              <div class="nav-nomor2">
                <h3>1</h3>
              </div>
              <div class="nav-nama2">
                <h3>Edit Profile</h3>
              </div>
            </div>
          </button>
        </div>
        <div class="nav-password">
          <button class="pass1" type="button" onclick="overlayPass()">
            <div class="button-wrap">
              <div class="nav-nomor">
                <h3>2</h3>
              </div>
              <div class="nav-nama">
                <h3>Password</h3>
              </div>
            </div>
          </button>
          <button class="pass2" type="button">
            <div class="button-wrap">
              <div class="nav-nomor2">
                <h3>2</h3>
              </div>
              <div class="nav-nama2">
                <h3>Password</h3>
              </div>
            </div>
          </button>
        </div>
        <div class="nav-status">
          <button class="status1" type="button" onclick="overlayCheckout()">
            <div class="button-wrap">
              <div class="nav-nomor">
                <h3>4</h3>
              </div>
              <div class="nav-nama">
                <h3>Account Status</h3>
              </div>
            </div>
          </button>
          <button class="status2" type="button">
            <div class="button-wrap">
              <div class="nav-nomor2">
                <h3>4</h3>
              </div>
              <div class="nav-nama2">
                <h3>Account Status</h3>
              </div>
            </div>
          </button>
        </div>
      </div>
      <div class="upload-form">
        <div class="form-gene">
          general
        </div>
        <div class="form-edit-profile">
          edit
        </div>
        <div class="form-password">
          pass
        </div>
        <div class="form-status">
          status
        </div>
      </div>
    </div>

</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="<?= base_url('/js/jquery-3.6.0.min.js') ?>"></script>
<script src="<?= base_url('/js/script.js') ?>"></script>

<?= $this->endsection(); ?>
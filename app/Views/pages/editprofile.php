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
                <h3>2</h3>
              </div>
              <div class="nav-nama">
                <h3>Edit Profile</h3>
              </div>
            </div>
          </button>
          <button class="edit2" type="button">
            <div class="button-wrap">
              <div class="nav-nomor2">
                <h3>2</h3>
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
                <h3>3</h3>
              </div>
              <div class="nav-nama">
                <h3>Password</h3>
              </div>
            </div>
          </button>
          <button class="pass2" type="button">
            <div class="button-wrap">
              <div class="nav-nomor2">
                <h3>3</h3>
              </div>
              <div class="nav-nama2">
                <h3>Password</h3>
              </div>
            </div>
          </button>
        </div>
        <div class="nav-status">
          <button class="status1" type="button" onclick="overlayStatus()">
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
        <hr class="hr-nav-edit">
        <div class="nav-delete">
          <button class="delete1" type="button" onclick="overlayDelete()">
            <div class="button-wrap">
              <div class="nav-nama">
                <h3>Delete Account</h3>
              </div>
            </div>
          </button>
          <button class="delete2" type="button">
            <div class="button-wrap">
              <div class="nav-nama2">
              <h3>Delete Account</h3>
              </div>
            </div>
          </button>
        </div>
      </div>
      <div class="edit-profile-form">
        <div class="form-gene">
          <form action="#">
            <div class="edit-username">
              <!-- ini inputnya sudah keisi username yg lama -->
              <label for="user-username" class="edit-label">Username</label>
              <input type="text" name="user-username" id="user-username" required tabindex="1"/>
            </div>
            <div class="edit-email">
              <!-- ini inputnya sudah keisi email yg lama -->
              <label for="user-email" class="edit-label">Email</label>
              <input type="email" name="user-email" id="user-email" required tabindex="2" />
            </div>
            <button type="submit" class="button-red">Save Changes</button>
          </form>
        </div>
        <div class="form-edit-profile">
          <form action="#">
            <div class="edit-picture">
              <!-- ini fotonya sudah keisi foto yg lama -->
              <img src="/img/foto-arsya.jpg">
              <button type="button" class="button-red">Upload new picture</button>
              <button type="reset" class="button-grey">Delete</button>
            </div>
            <div class="edit-name">
              <!-- ini inputnya sudah keisi name yg lama -->
              <label for="user-name" class="edit-label">Name</label>
              <input type="text" name="user-name" id="user-name" required  tabindex="1"/>
            </div>
            <div class="edit-domisili">
              <!-- ini inputnya sudah keisi domisili yg lama atau
              kl blm ada brati kosong karna user awal cuman login aja blm isi profile-->
              <label for="user-domisili" class="edit-label">Domicile</label>
              <input type="text" name="user-domisili" id="user-domisili" required  tabindex="2"/>
            </div>
            <div class="edit-notelp">
              <!-- ini inputnya sudah keisi notelp yg lama atau
              kl blm ada brati kosong karna user awal cuman login aja blm isi profile-->
              <label for="user-notelp" class="edit-label">Phone Number</label>
              <input type="number" value="+62" name="user-notelp" id="user-notelp" required  tabindex="3"/>
            </div>
            <div class="edit-birth">
              <!-- ini inputnya sudah keisi birth yg lama atau
              kl blm ada brati kosong karna user awal cuman login aja blm isi profile-->
              <label for="user-birth" class="edit-label">Birthday</label>
              <input type="date" name="user-birth" id="user-birth" required  tabindex="4"/>
            </div>
            <button type="submit" class="button-red">Save Profile</button>
          </form>
        </div>
        <div class="form-password">
          <form action="#">
            <div class="edit-oldpassword">
              <!-- ini inputnya kosong semua ya gada isinya-->
              <label for="user-oldpass" class="edit-label">Old Password</label>
              <input type="password" name="user-oldpass" id="user-oldpass" tabindex="1" required>
            </div>
            <div class="edit-newpassword">
              <!-- ini inputnya kosong semua ya gada isinya-->
              <label for="user-newpass" class="edit-label">New Password</label>
              <input type="password" name="user-newpass" id="user-newpass" placeholder="Minimum 6 characters" tabindex="2" required>
            </div>
            <button type="submit" class="button-red">Change</button>
          </form>
        </div>
        <div class="form-status">
          <form action="#">
            <div class="upload-ktp">
              <label for="user-ktp" class="edit-label">Upload KTP Picture</label>
              <div class="drag-area">
                <div class="picture-field">
                  <img src="/icon/picture2.png" class="picture-icon" />
                </div>
                <header>Drag and drop an image</header>
                <span>or</span>
                <button>Browse</button>
                <input type="file" hidden>
              </div>
            </div>
            <div class="ktp-status">
              <label for="user-status" class="edit-label">Status</label>
              <input type="text" name="user-status" id="user-status" value="Verified" readonly tabindex="2"/>
            </div>
            <button type="submit" class="button-red">Confirm</button>
          </form>
        </div>
        <div class="form-delete">
          <form action="#">
            <div class="delete-word">
              <h2>We’re sorry to see you go</h2>
              <p>If you’d like to reduce your email notifications, you can disable them here or if you just want to change your username, you can do that here.<br>Be advised, account deletion is final. There will be no way to restore your account.</p>
            </div>
            <div class="delete-button">
              <button type="button" class="button-red">Nevermind</button>
              <button type="submit" class="button-grey">Delete my account</button>
            </div>
          </form>
        </div>
      </div>
    </div>

</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="<?= base_url('/js/jquery-3.6.0.min.js') ?>"></script>
<script src="<?= base_url('/js/script.js') ?>"></script>

<?= $this->endsection(); ?>
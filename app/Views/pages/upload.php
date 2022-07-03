<?= $this->extend('layouts/template') ?>

<?= $this->section('content'); ?>

<form action="/upload/save" method="POST" enctype="multipart/form-data">
  <hr class="hr-service">
  <div id="upload-container">
    <!-- <div class="review-container">
      <div class="review-picture-box">
        <div class="review-picture">
          <div class="review-picture-item">
            <img src="/icon/picture2.png" class="picture-icon" />
          </div>
          <div class="review-picture-item">
            <p>No logo yet</p>
          </div>
        </div>
      </div>
      <div class="review-form">
        <div class="review-form-item">
          <div class="review-form-item-text">
            <h4>General</h4>
            <p>Service type, logo, category, company details</p>
          </div>
          <div class="review-form-item-edit">
            <img src="/icon/edit.png" class="edit-icon">
          </div>
        </div>
        <div class="review-form-item">
          <div class="review-form-item-text">
            <h4>Details</h4>
            <p>Description, locations</p>
          </div>
          <div class="review-form-item-edit">
            <img src="/icon/edit.png" class="edit-icon">
          </div>
        </div>
        <div class="review-form-item">
          <div class="review-form-item-text">
            <h4>Additional</h4>
            <p>Step before and after checkout, Value, etc</p>
          </div>
          <div class="review-form-item-edit">
            <img src="/icon/edit.png" class="edit-icon">
          </div>
        </div>
        <div class="review-form-item">
          <div class="review-form-item-text">
            <h4>Checkout</h4>
            <p>Package category and checkout form</p>
          </div>
          <div class="review-form-item-edit">
            <img src="/icon/edit.png" class="edit-icon">
          </div>
        </div>
      </div>
    </div> -->
    <h2 id="upload-service-title" style="margin: 0; margin-bottom: 40px;">Upload Service</h2>
    <div class="upload-second-field" style="margin: 0;">
      <div class="upload-tahapan">
        <div class="tahapan-general">
          <button class="general1" type="button" onclick="overlayGeneral()">
            <div class="button-wrap">
              <div class="tahapan-nomor">
                <h3>1</h3>
              </div>
              <div class="tahapan-nama">
                <h3>General</h3>
              </div>
            </div>
          </button>
          <button class="general2" type="button" style="display: block;">
            <div class="button-wrap">
              <div class="tahapan-nomor2">
                <h3>1</h3>
              </div>
              <div class="tahapan-nama2">
                <h3>General</h3>
              </div>
            </div>
          </button>
        </div>
        <div class="tahapan-details">
          <button class="details1" type="button" onclick="overlayDetails()">
            <div class="button-wrap">
              <div class="tahapan-nomor">
                <h3>2</h3>
              </div>
              <div class="tahapan-nama">
                <h3>Details</h3>
              </div>
            </div>
          </button>
          <button class="details2" type="button">
            <div class="button-wrap">
              <div class="tahapan-nomor2">
                <h3>2</h3>
              </div>
              <div class="tahapan-nama2">
                <h3>Details</h3>
              </div>
            </div>
          </button>
        </div>
        <div class="tahapan-additional">
          <button class="additional1" type="button" onclick="overlayAdditional()">
            <div class="button-wrap">
              <div class="tahapan-nomor">
                <h3>3</h3>
              </div>
              <div class="tahapan-nama">
                <h3>Additional</h3>
              </div>
            </div>
          </button>
          <button class="additional2" type="button">
            <div class="button-wrap">
              <div class="tahapan-nomor2">
                <h3>3</h3>
              </div>
              <div class="tahapan-nama2">
                <h3>Additional</h3>
              </div>
            </div>
          </button>
        </div>
        <div class="tahapan-checkout">
          <button class="checkout1" type="button" onclick="overlayCheckout()">
            <div class="button-wrap">
              <div class="tahapan-nomor">
                <h3>4</h3>
              </div>
              <div class="tahapan-nama">
                <h3>Checkout</h3>
              </div>
            </div>
          </button>
          <button class="checkout2" type="button">
            <div class="button-wrap">
              <div class="tahapan-nomor2">
                <h3>4</h3>
              </div>
              <div class="tahapan-nama2">
                <h3>Checkout</h3>
              </div>
            </div>
          </button>
        </div>
      </div>
      <div class="upload-form">
        <div class="form-general">
          <div class="basic-container">
            <h5>Basic Information</h5>
            <fieldset>
              <p class="upload-label" style="text-align: justify;">Instruction: Standard image dimension is multiplication of 5x5 with maximum image size 3 MB. Supports JPEG, JPG, and PNG. Please attach your company's LOGO down here.</p>
              <br>
              <div class="basic-box">
                <div class="picture-input">
                  <div class="drag-area">
                    <div class="picture-field">
                      <img name="layanan-img" src="/icon/picture2.png" class="picture-icon" />
                    </div>
                    <header>Drag and drop an image</header>
                    <!-- <span>or</span> -->
                  </div>
                  <button id="browse">Browse</button>
                  <input type="file" id="layanan-img" name="layanan-img" hidden>
                </div>
                <div class="basic-right-input">
                  <div class="jenis-input">
                    <div class="category-input">
                      <label for="category" class="upload-label">Category</label>
                      <select style="cursor: pointer;" class="category" id="category" name="category" required tabindex="1">
                        <option selected disabled>Select one</option>
                        <?php foreach ($dataKategori as $kategori) : ?>
                          <!-- foreach tabel kategori as kategori -->
                          <option value="<?= $kategori['id_kategori'] ?>"><?= $kategori['nama_kategori'] ?></option>
                        <?php endforeach; ?>
                      </select>
                    </div>
                    <div class="subcategory-input">
                      <label for="subcategory" class="upload-label">Subcategory</label>
                      <select style="cursor: pointer;" id="subcategory" name="subcategory" required tabindex="2">
                        <option selected disabled>Select one</option>
                      </select>
                    </div>
                  </div>
                  <div class="company-name-input">
                    <label for="company-name" class="upload-label">Company's Name</label>
                    <input type="text" name="company-name" id="company-name" placeholder="Input name here" tabindex="3" required />
                  </div>
                  <div class="company-email-input">
                    <div class="upload-email">
                      <label for="company-email" class="upload-label">Company's Email</label>
                      <input type="email" name="company-email" id="company-email" placeholder="Input email here" tabindex="4" required />
                    </div>
                    <div class="upload-confirmemail">
                      <label for="company-conemail" class="upload-label">Confirm Email</label>
                      <input type="email" name="company-conemail" id="company-conemail" placeholder="Retype email here" tabindex="5" required />
                    </div>
                  </div>
                </div>
              </div>
            </fieldset>
          </div>
          <div class="upload-line">
            <hr>
          </div>
          <div class="contact-container" style="margin: 0;">
            <h5>Company's Contact</h5>
            <fieldset>
              <p class="upload-label">Choose at least one of additional contact detail below</p>
              <div class="bungkus">
                <div class="contact-check" style="margin: 0;">
                  <div class="whatsapp-box">
                    <div class="grup-icon-label">
                      <img src="/icon/whatsapp.png" class="contact-check-img">
                      <label for="whatsapp-check" class="upload-label">Whatsapp</label>
                    </div>
                    <input type="checkbox" id="whatsapp-check" name="whatsapp-check" value="whatsapp" required>
                  </div>
                  <div class="instagram-box">
                    <div class="grup-icon-label">
                      <img src="/icon/instagram.png" class="contact-check-img">
                      <label for="instagram-check" class="upload-label">Instagram</label>
                    </div>
                    <input type="checkbox" id="instagram-check" name="instagram-check" value="instagram">
                  </div>
                </div>
                <div class="contact-input" id="contact-input-wa">
                  <label for="whatsapp-input" class="upload-label">Whatsapp Number</label>
                  <div class="collabse-number-whatsapp">
                    <div class="value62-whatsapp">+62</div>
                    <hr>
                    <input style="border-radius: 0 15px 15px 0;" type="number" name="whatsapp-input" id="whatsapp-input" class="phone-field" placeholder="Company's Whatsapp number" required />
                  </div>
                </div>
                <div class="contact-input" id="contact-input-ig">
                  <label for="instagram-input" class="upload-label">Instagram Username</label>
                  <input type="text" name="instagram-input" id="instagram-input" placeholder="Example: urievent.id" />
                </div>
              </div>
            </fieldset>
          </div>
        </div>
        <div class="form-details">
          <div class="desc-container">
            <h5>Company Details</h5>
            <fieldset>
              <p class="upload-label" style="text-align: justify;">
                Describe your company here (e.g. field, type, amount of employee, company purposes, anything to attract more clients)
              </p>
              <div class="desc-input">
                <label for="desc-input" class="upload-label">Company Description</label>
                <textarea name="desc-input" id="desc-input" cols="30" rows="6" placeholder="Describe your company here" required></textarea>
              </div>
              <!-- <div class="location-input">
                <label for="location-input" class="upload-label">Location</label>
                <input type="text" name="location-input" id="location-input" placeholder="Enter Location" required>
              </div>
              <div class="notes-input">
                <label for="notes-input" class="upload-label">Notes (optional)</label>
                <input type="text" name="notes-input" id="notes-input" placeholder="Example: Tower X Ballroom Y">
              </div> -->
            </fieldset>
          </div>
          <div class="upload-line">
            <hr>
          </div>
          <div class="before-container" style="margin: 0;">
            <h5>Steps to Checkout</h5>
            <fieldset>
              <p class="upload-label">Give information about what to prepare prior to your service checkout</p>
              <div class="check-item">
                <input type="checkbox" id="step1before-check" name="stepBefore[]" value="Upload poster event yang sudah berlogo company kami">
                <label for="step1before-check" class="upload-label-thin">Upload poster event yang sudah berlogo company kami</label>
              </div>
              <div class="check-item">
                <input type="checkbox" id="step2before-check" name="stepBefore[]" value="Isi caption atau tambahan lainnya untuk keperluan upload">
                <label for="step2before-check" class="upload-label-thin">Isi caption atau tambahan lainnya untuk keperluan upload</label>
              </div>
              <div class="check-item">
                <input type="checkbox" id="step3before-check" name="stepBefore[]" value="Kirim bukti transfer">
                <label for="step3before-check" class="upload-label-thin">Kirim bukti transfer</label>
              </div>
              <div id="newRow"></div>
              <button id="addRow" type="button" class="btn-info">+ ADD OTHER STEPS</button>
            </fieldset>
          </div>
        </div>
        <div class="form-additional">
          <div class="after-container">
            <h5>Steps after Checkout</h5>
            <fieldset>
              <p class="upload-label">What should your clients do after checkout?</p>
              <div class="check-item">
                <input type="checkbox" id="step1after-check" name="stepAfter[]" value="Join WhatsApp group">
                <label for="step1after-check" class="upload-label-thin">Join WhatsApp group</label>
              </div>
              <div class="check-item">
                <input type="checkbox" id="step2after-check" name="stepAfter[]" value="Pilih jadwal upload poster saat mengisi formulir">
                <label for="step2after-check" class="upload-label-thin">Pilih jadwal upload poster saat mengisi formulir</label>
              </div>
              <div class="check-item">
                <input type="checkbox" id="step3after-check" name="stepAfter[]" value="Wait your poster uploaded">
                <label for="step3after-check" class="upload-label-thin">Wait your poster uploaded</label>
              </div>
              <div id="newRowAfter"></div>
              <button id="addRowAfter" type="button" class="btn-info">+ ADD OTHER STEPS</button>
            </fieldset>
          </div>
          <div class="upload-line">
            <hr>
          </div>
          <div class="value-container">
            <h5>Value</h5>
            <fieldset>
              <p class="upload-label">What is your company’s values to make client use your service?</p>
              <div class="check-item">
                <input type="checkbox" id="value1-check" name="value[]" value="Original followers">
                <label for="value1-check" class="upload-label-thin">Original followers</label>
              </div>
              <div class="check-item">
                <input type="checkbox" id="value2-check" name="value[]" value="32.000++ active accounts">
                <label for="value2-check" class="upload-label-thin">32.000++ active accounts</label>
              </div>
              <div class="check-item">
                <input type="checkbox" id="value3-check" name="value[]" value="Have been a trusted media partner for 5 years">
                <label for="value3-check" class="upload-label-thin">Have been a trusted media partner for 5 years</label>
              </div>
              <div id="newRowValue"></div>
              <button id="addRowValue" type="button" class="btn-info">+ ADD OTHER VALUES</button>
            </fieldset>
          </div>
          <div class="upload-line">
            <hr>
          </div>
          <div class="other-container" style="margin: 0;">
            <h5>Other</h5>
            <fieldset>
              <p class="upload-label" style="text-align: justify;">e.g. Venue Capacity (pax or Person), Venue Type (ballroom, exhibition), Venue Full Address (City, ZIP Code) or other information that your client have to know.</p>
              <label for="other-input" class="upload-label">Additional Description</label>
              <textarea name="other-input" id="other-input" cols="30" rows="6" placeholder="Insert your additional description here"></textarea>
            </fieldset>
          </div>
        </div>
        <div class="form-checkout">
          <div class="package-category-container" style="margin: 0;">
            <h5>Package Category</h5>
            <fieldset>
              <p class="upload-label" style="text-align: justify;">e.g. Media Partner (Bronze, Silver, Gold), Vendor (Sound System, Light System, Stage), Venue (VIP Ballroom, Exhibition Center), etc.</p>

              <!-- untuk mengenali paket keberapa dari sebuah layanan -->
              <?php $banyakdata = 0; ?>
              <div id="banyakdata" style="display: none;"><?= $banyakdata ?></div>

              <label for="package-name" class="upload-label">Package Category Name</label>
              <input type="text" name="package[0][name]" id="package-name" placeholder="Input package category name here (ex: Bronze, Silver, Gold)" required />
              <label for="package-desc" class="upload-label">Package Category Description</label>
              <textarea name="package[0][desc]" id="package-desc" cols="30" rows="6" placeholder="Description of package category. Ex: Bronze Package = 2x Upload Feed" required></textarea>
              <label for="package-prize" class="upload-label">Package Prize (Rp)</label>
              <input type="number" name="package[0][prize]" id=" package-prize" placeholder="25000" required>
              <div id="newRowPackage">
              </div>
              <button id="addRowPackage" type="button" class="btn-info">+ ADD PACKAGE CATEGORY</button>
            </fieldset>
          </div>
          <!-- <div class="upload-line">
            <hr>
          </div>
          <div class="checkout-form-container">
            <h5>Checkout Form</h5>
            <div class="fieldset-form">
              <p class="upload-label" style="text-align: justify;">Your clients are required to give Name, Email and Phone Number. You can ask customized questions for general in this part</p>
              <fieldset id="buildyourform"></fieldset>
              <div class="checkout-form-button">
                <input type="button" value="Preview form" class="add" id="preview" />
                <input type="button" value="Add a field" class="add" id="add" />
              </div>
            </div>
          </div> -->
        </div>
      </div>
    </div>
    <div class="upload-form-button">
      <button class="btn-info" type="submit" name="button_save" value="save_draft">Save as draft</button>
      <button class="btn-info" type="submit" name="button_save" value="save">Submit</button>
    </div>
  </div>
</form>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="<?= base_url('/js/jquery-3.6.0.min.js') ?>"></script>
<script src="<?= base_url('/js/script.js') ?>"></script>
<script>
  $(document).ready(function() {
    $('#category').change(function() {
      var id_kategori = $(this).val();
      // console.log(id_kategori)
      $.ajax({
        type: "post",
        url: "<?= base_url('upload/getDataSubKategori') ?>/" + id_kategori,
        dataType: "JSON",
        success: function(response) {
          $('#subcategory').empty()
          $('#subcategory').append('<option selected disabled>Select one</option>');

          $.each(response, function(i, item) {
            $('#subcategory').append($('<option>', {
              value: item.id_subkategori,
              text: item.nama_subkategori
            }));
            console.log(response);
          });
        }
      })
      // end ajax
    });
  });
</script>
<?= $this->endsection(); ?>
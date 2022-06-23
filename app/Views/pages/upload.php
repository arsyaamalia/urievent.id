<?= $this->extend('layouts/template') ?>

<?= $this->section('content'); ?>

<form action="#">
  <div class="upload-box">
    <div class="upload-container">
      <h2><a href="/index">＜ Upload Service</a></h2>

      <div class="upload-first-field">
        <div class="upload-picture">
          <div class="picture-field">
            <img src="../icon/picture.png" class="picture-icon" />
          </div>
          <div class="picture-desc">
            <p>Drag and drop an image or browse</p>
          </div>
        </div>
        <div class="upload-input">
          <h5>Basic Information</h5>
          <div class="upload-jenis">
            <fieldset>
              <div class="upload-category">
                <label for="category" class="upload-label">Category</label>
                <select id="category" name="category" required tabindex="1">
                  <option selected disabled>Select one</option>
                  <!-- foreach tabel kategori as kategori -->
                  <option value="medpart">Media Partner</option>
                  <option value="sponsor">Sponsorship</option>
                  <option value="vendor">Vendor</option>
                  <option value="venue">Venue</option>
                </select>
              </div>
              <div class="upload-subcategory">
                <label for="subcategory" class="upload-label">Subcategory</label>
                <select id="subcategory" name="subcategory" required tabindex="2">
                  <option selected disabled>Select one</option>
                  <!-- foreach sub where id kategori=xxx -->

                  <option value="database1">Database1</option>
                  <!-- end foreach -->
                  <option value="database2">Database2</option>
                  <option value="database3">Database3</option>
                  <option value="database4">Database4</option>
                </select>
              </div>
            </fieldset>
          </div>
          <div class="upload-name">
            <fieldset>
              <label for="company-name" class="upload-label">Company's Name</label>
              <input type="text" name="company-name" id="company-name" placeholder="Input name here" tabindex="3" required />
            </fieldset>
          </div>
          <div class="upload-your-email">
            <fieldset>
              <div class="upload-email">
                <label for="company-email" class="upload-label">Company's Email</label>
                <input type="email" name="company-email" id="company-email" placeholder="Input email here" tabindex="4" required />
              </div>
              <div class="upload-confirmemail">
                <label for="company-conemail" class="upload-label">Confirm Email</label>
                <input type="email" name="company-conemail" id="company-conemail" placeholder="Retype email here" tabindex="5" required />
              </div>
            </fieldset>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="batas-body">
    <div class="body-urievent">
      <div class="upload-second-field">
        <div class="upload-tahapan">
          <div class="tahapan-general"></div>
          <div class="tahapan-details"></div>
          <div class="tahapan-additional"></div>
          <div class="tahapan-checkout"></div>
        </div>
        <div class="upload-form">
          <div class="form-general">
            <div class="contact-container">
              <h5>Company's Contact</h5>
              <fieldset>
                <div class="contact-check">
                  <div class="whatsapp-box">
                    <div class="grup-icon-label">
                      <img src="../icon/whatsapp.png" class="contact-check-img">
                      <label for="whatsapp-check" class="upload-label">Whatsapp</label>
                    </div>
                    <input type="checkbox" id="whatsapp-check" name="whatsapp-check" value="whatsapp" required>
                  </div>
                  <div class="instagram-box">
                    <div class="grup-icon-label">
                      <img src="../icon/instagram.png" class="contact-check-img">
                      <label for="instagram-check" class="upload-label">Instagram</label>
                    </div>
                    <input type="checkbox" id="instagram-check" name="instagram-check" value="instagram">
                  </div>
                </div>
                <div class="contact-input">
                  <label for="whatsapp-input" class="upload-label">Whatsapp Number</label>
                  <label data-number="+62">
                    <input type="number" name="whatsapp-input" id="whatsapp-input" value="+62" placeholder="Company's Whatsapp number" required />
                    <label>
                </div>
                <div class="contact-input">
                  <label for="instagram-input" class="upload-label">Instagram Username</label>
                  <input type="text" name="instagram-input" id="instagram-input" placeholder="Example: urievent.id" />
                </div>
              </fieldset>
            </div>
          </div>
          <div class="form-details">
            <div class="desc-container">
              <h5>Company Details</h5>
              <fieldset>
                <div class="desc-input">
                  <label for="desc-input" class="upload-label">Company Description</label>
                  <textarea name="desc-input" id="desc-input" cols="30" rows="6" placeholder="Describe your company here (field, type, niche market, etc)" required></textarea>
                </div>
              </fieldset>
            </div>
            <div class="location-container">
              <h5>Company Location</h5>
              <fieldset>
                <div class="location-input">
                  <label for="location-input" class="upload-label">Location</label>
                  <input type="text" name="location-input" id="location-input" placeholder="Enter Location" required>
                </div>
                <div class="notes-input">
                  <label for="notes-input" class="upload-label">Notes (optional)</label>
                  <input type="text" name="notes-input" id="notes-input" placeholder="Example: Tower X Ballroom Y">
                </div>
              </fieldset>
            </div>
            <div class="before-container">
              <h5>Steps to Checkout</h5>
              <fieldset>
                <p class="upload-label">Give information about what to prepare prior to your service checkout</p>
                <input type="checkbox" id="step1-check" name="step1-check" value="step1">
                <label for="step1-check" class="upload-label-thin">Upload poster event yang sudah berlogo company kami</label>
                <br>
                <input type="checkbox" id="step2-check" name="step2-check" value="step2">
                <label for="step2-check" class="upload-label-thin">Isi caption atau tambahan lainnya untuk keperluan upload</label>
                <br>
                <input type="checkbox" id="step3-check" name="step3-check" value="step3">
                <label for="step3-check" class="upload-label-thin">Kirim bukti transfer</label>
                <br>
                <div id="newRow"></div>
                <button id="addRow" type="button" class="btn btn-info">+ ADD OTHER STEPS</button>
              </fieldset>
            </div>
          </div>
          <div class="form-additional">
            <div class="after-container">
              <h5>Steps after Checkout</h5>
              <fieldset>
                <p class="upload-label">What should your clients do after checkout?</p>
                <input type="checkbox" id="step1-check" name="step1-check" value="step1">
                <label for="step1-check" class="upload-label-thin">Join WhatsApp group</label>
                <br>
                <input type="checkbox" id="step2-check" name="step2-check" value="step2">
                <label for="step2-check" class="upload-label-thin">Pilih jadwal upload poster saat mengisi formulir</label>
                <br>
                <input type="checkbox" id="step3-check" name="step3-check" value="step3">
                <label for="step3-check" class="upload-label-thin">Wait your poster uploaded </label>
                <br>
                <div id="newRowAfter"></div>
                <button id="addRowAfter" type="button" class="btn btn-info">+ ADD OTHER STEPS</button>
              </fieldset>
            </div>
            <div class="value-container">
              <h5>Value</h5>
              <fieldset>
                <p class="upload-label">What is your company’s values to make client use your service?</p>
                <input type="checkbox" id="value1-check" name="value1-check" value="value1">
                <label for="value1-check" class="upload-label-thin">Join WhatsApp group</label>
                <br>
                <input type="checkbox" id="value2-check" name="value2-check" value="value2">
                <label for="value2-check" class="upload-label-thin">Pilih jadwal upload poster saat mengisi formulir</label>
                <br>
                <input type="checkbox" id="value3-check" name="value3-check" value="value3">
                <label for="value3-check" class="upload-label-thin">Wait your poster uploaded </label>
                <br>
                <div id="newRowValue"></div>
                <button id="addRowValue" type="button" class="btn btn-info">+ ADD OTHER VALUES</button>
              </fieldset>
            </div>
            <div class="other-container">
              <h5>Other</h5>
              <fieldset>
                <label for="other-input" class="upload-label">Additional Description</label>
                <textarea name="other-input" id="other-input" cols="30" rows="6" placeholder="Pax or Person of your Venue or Vendor, etc."></textarea>
              </fieldset>
            </div>
          </div>
          <div class="form-checkout">
            <div class="package-category-container">
              <h5>Package Category</h5>
              <fieldset>
                <p>e.g. Media Partner (Bronze, Silver, Gold), Vendor (Sound System, Light System, Stage), Venue (VIP Ballroom, Exhibition Center), etc.</p>
                <label for="package-name" class="upload-label">Package Category Name</label>
                <input type="text" name="package-name" id="package-name" placeholder="Input package category name here (ex: Bronze, Silver, Gold)" required />
                <br>
                <label for="package-desc" class="upload-label">Package Category Description</label>
                <textarea name="package-desc" id="package-desc" cols="30" rows="6" placeholder="Description of package category. Ex: Bronze Package = 2x Upload Feed" required></textarea>
                <br>
                <label for="package-prize" class="upload-label">Package Prize (Rp)</label>
                <input type="number" name="package-prize" id="package-prize" placeholder="25000" required>
                <br>
                <div id="newRowPackage"></div>
                <button id="addRowPackage" type="button" class="btn btn-info">+ ADD PACKAGE CATEGORY</button>
              </fieldset>
            </div>
            <div class="checkout-form-container">
              <h5>Checkout Form</h5>
              <div class="fieldset-form">
                <p>Your clients are required to give Name, Email and Phone Number. You can ask customized questions for general in this part</p>
                <fieldset id="buildyourform">
                  <legend>Build your own form!</legend>
                </fieldset>
                <input type="button" value="Preview form" class="add" id="preview" />
                <input type="button" value="Add a field" class="add" id="add" />
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</form>

<?= $this->endsection(); ?>
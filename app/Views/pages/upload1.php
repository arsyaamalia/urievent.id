<?= $this->extend('layouts/template') ?>

<?= $this->section('content'); ?>

<form action="/upload/save">
    <h1>UPLOAD COBA INI</h1>
    <div class="upload-box">
        <div class="review-container">
            <div class="review-picture-box">
                <div class="review-picture">
                    <!-- <div class="review-picture-item">
            <img src="/icon/edit.png" class="edit-icon">
          </div> -->
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
                        <div class="upload-input">
                            <h5>Basic Information</h5>

                            <div class="upload-jenis">
                                <fieldset>
                                    <div class="upload-category">
                                        <label for="category" class="upload-label">Category</label>
                                        <select id="category" name="category" required tabindex="1" name="category">
                                            <option selected disabled>Select one</option>
                                            <?php foreach ($dataKategori as $kategori) : ?>
                                                <!-- foreach tabel kategori as kategori -->
                                                <option value="<?= $kategori['id_kategori'] ?>"><?= $kategori['nama_kategori'] ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                        <div class="batas-body">
                                            <div class="upload-subcategory">
                                                <label for="subcategory" class="upload-label">Subcategory</label>
                                                <select id="subcategory" name="subcategory" required tabindex="2">
                                                    <option selected disabled>Select one</option>

                                                </select>
                                            </div>
                                </fieldset>
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
                </div>
            </div>

            <div class="batas-body">
                <div class="body-urievent">
                    <div class="upload-second-field">
                        <div class="upload-tahapan">
                            <div class="tahapan-general">
                                <button type="button" onclick="overlayGeneral()">
                                    <div class="tahapan-nomor">
                                        <h3>1</h3>
                                    </div>
                                    <div class="tahapan-nama">
                                        <h3>General</h3>
                                    </div>
                                </button>
                            </div>
                            <div class="tahapan-details">
                                <button type="button" onclick="overlayDetails()">
                                    <div class="tahapan-nomor">
                                        <h3>2</h3>
                                    </div>
                                    <div class="tahapan-nama">
                                        <h3>Details</h3>
                                    </div>
                                </button>
                            </div>
                            <div class="tahapan-additional">
                                <button type="button" onclick="overlayAdditional()">
                                    <div class="tahapan-nomor">
                                        <h3>3</h3>
                                    </div>
                                    <div class="tahapan-nama">
                                        <h3>Additional</h3>
                                    </div>
                                </button>
                            </div>
                            <div class="tahapan-checkout">
                                <button type="button" onclick="overlayCheckout()">
                                    <div class="tahapan-nomor">
                                        <h3>4</h3>
                                    </div>
                                    <div class="tahapan-nama">
                                        <h3>Checkout</h3>
                                    </div>
                                </button>
                            </div>
                        </div>
                        <div class="upload-form">
                            <div class="form-general">
                                <div class="basic-container">
                                    <h5>Basic Information</h5>
                                    <fieldset>
                                        <div class="picture-input">
                                            <div class="picture-field">
                                                <img src="../icon/picture.png" class="picture-icon" />
                                            </div>
                                            <div class="picture-desc">
                                                <input type="file" id="custom-file">
                                                <label for="custom-file"></label>
                                                <p>Drag and drop an image or browse</p>
                                            </div>
                                        </div>
                                        <div class="jenis-input">
                                            <div class="category-input">
                                                <label for="category" class="upload-label">Category</label>
                                                <select id="category-input" name="category" required tabindex="1">
                                                    <option selected disabled>Select one</option>
                                                    <?php foreach ($dataKategori as $kategori) : ?>
                                                        <!-- foreach tabel kategori as kategori -->
                                                        <option value="<?= $kategori['nama_kategori'] ?>"><?= $kategori['nama_kategori'] ?></option>
                                                    <?php endforeach; ?>
                                                </select>
                                            </div>
                                            <div class="subcategory-input">
                                                <label for="subcategory" class="upload-label">Subcategory</label>
                                                <select id="subcategory-input" name="subcategory" required tabindex="2">
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
                                    </fieldset>
                                </div>
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

                                    </fieldset>
                                </div>
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


        <button type="submit">Submit</button>
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
                type: "get",
                url: "<?= base_url('upload/getDataSubKategori') ?>/" + id_kategori,
                dataType: "JSON",
                success: function(response) {
                    $.each(response, function(i, item) {
                        $('#subcategory').append($('<option>', {
                            value: item.id_subkategori,
                            text: item.nama_subkategori
                        }));
                    });
                }

            })
            // end ajax
        });
    });
</script>
<?= $this->endsection(); ?>
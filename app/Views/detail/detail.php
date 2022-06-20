<?= $this->extend('layouts/template') ?>

<?= $this->section('content'); ?>

<div class="detail-box">
  <div class="detail-container">
    <h2><a href="/pages">＜<?= $detail_produk['nama_instansi']; ?></a></h2>
    <div class="detail-item">
      <div class="detail-picture">
        <img src="/img/logomagangupdate.png" class="img-logo" />
      </div>

      <div class="detail-data">
        <div class="detail-jenis">
          <div class="kategori">
            <h6><?= $dataKategori['nama_kategori'] ?></h6>
          </div>
          <div class="subkategori">
            <h6><?= $dataSubKategori['nama_subkategori'] ?></h6>
          </div>
        </div>
        <div class="detail-nama">
          <h4><?= $detail_produk['nama_instansi']; ?></h4>
        </div>
        <div class="detail-harga">
          <h3>Rp <?= $detail_produk['harga_min'] ?> - Rp <?= $detail_produk['harga_max'] ?></h3>
        </div>
        <div class="detail-contact">
          <div class="contact-email">
            <h6><?= $detail_produk['email_instansi']; ?></h6>
          </div>
          <div class="contact-socmed">
            <div class="socmed-wa-box">
              <a href="https://wa.me/62<?= $detail_produk['whatsapp']; ?>">
                <div class="socmed-wa">
                  <img src="/icon/whatsapp.png" class="img-wa" />
                </div>
              </a>
            </div>
            <div class="socmed-ig-box">
              <a href="https://instagram.com/<?= $detail_produk['instagram']; ?>">
                <div class="socmed-ig">
                  <img src="/icon/instagram.png" class="img-ig" />
                </div>
              </a>
            </div>
            <!-- BELUM ADA FITUR -->
            <div class="socmed-chat-box">
              <a href="/urichat">
                <div class="socmed-chat">
                  <img src="/icon/message.png" class="img-msg" />
                </div>
              </a>
            </div>
          </div>
        </div>
        <div class="detail-action">
          <div class="action-like" id="bg-action-logo">
            <img src="/icon/love.png" class="img-like" />
          </div>
          <div class="action-share" id="bg-action-logo">
            <img src="/icon/share.png" class="img-share" />
          </div>
          <div class="action-save" id="bg-action-logo">
            <img src="/icon/save.png" class="img-save" />
          </div>
          <div class="action-button">

            <?php if ($detail_produk['id_kategori'] == "CAT002") : ?>
              <div class="submit-box">
                <a href="form.php">
                  <div class="submit">
                    <button type="button" class="button-submit">Submit</button>
                  </div>
                </a>
              </div>
            <?php else : ?>
              <div class="choose-package-box">
                <a href="div-purchase-display-public">
                  <div class="choose-package">
                    <p>Check Out</p>
                  </div>
                </a>
              </div>
            <?php endif; ?>

            <!-- if id_kategori = 001  -->
            <!-- else if id_kategori = 003 -->

          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="batas-body">
  <div class="body-urievent">
    <div class="detail-keterangan">
      <div class="keterangan-container">
        <h4><?= $dataKategori['nama_kategori'] ?> Detail</h4>

        <div class="about">
          <div class="keterangan-list">
            <h6>About</h6>
            <p><?= $detail_produk['deskripsi'] ?></p>
          </div>
          <div class="keterangan-line-box">
            <hr class="keterangan-line" />
          </div>
        </div>

        <div class="step-before">
          <div class="keterangan-list">
            <h6>Steps to Purchase</h6>
            <ul>
              <?php foreach ($detail_produk['step_before'] as $step_before) : ?>

                <li>
                  <p><?= $step_before ?></p>
                </li>
            </ul>
          </div>
          <div class="keterangan-line-box">
          <?php endforeach; ?>
          <hr class="keterangan-line" />
          </div>
        </div>

        <div class="step-after">
          <div class="keterangan-list">
            <h6>Steps after Purchase</h6>
            <ul>
              <?php foreach ($detail_produk['step_after'] as $step_after) : ?>
                <li>
                  <p><?= $step_after ?></p>
                </li>
            </ul>
          </div>
          <div class="keterangan-line-box">
          <?php endforeach; ?>
          <hr class="keterangan-line" />
          </div>
        </div>

        <div class="value">
          <div class="keterangan-list">
            <h6>Eligibility</h6>
            <ul>
              <?php foreach ($detail_produk['value'] as $value) : ?>
                <li>
                  <p><?= $value ?></p>
                </li>
            </ul>
          </div>
          <div class="keterangan-line-box">
          <?php endforeach; ?>
          <hr class="keterangan-line" />
          </div>
        </div>
      </div>


      <div class="package-container">
        <h4>Available Packages</h4>
        <?php foreach ($dataPaket as $paket) : ?>
          <div class="package-box">
            <div class="package-box-left">
              <hr>
            </div>
            <div class="package-box-right">
              <div class="package-name">
                <h6>Paket "<?= $paket['nama_paket'] ?>"</h6>
              </div>
              <div class="package-description">
                <p><?= $paket['deskripsi_paket'] ?></p>
              </div>
              <div class="package-prize">
                <h6>Rp <?= $paket['harga_paket'] ?></h6>
              </div>
              <div class="package-quantitiy">
                <div class="number-input">
                  <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()"></button>
                  <input class="quantity" min="0" name="quantity" value="1" type="number">
                  <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="plus"></button>
                </div>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
        <!-- 

        <div class="package-box">
          <div class="package-box-left">
            <hr>
          </div>
          <div class="package-box-right">
            <div class="package-name">
              <h6>Paket "Nama Paket Disini"</h6>
            </div>
            <div class="package-description">
              <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Pariatur mollitia est dolores accusantium eligendi fugit illum illo dolorsit.</p>
            </div>
            <div class="package-prize">
              <h6>Rp15.000</h6>
            </div>
            <div class="package-quantitiy">
              <div class="number-input">
                <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()"></button>
                <input class="quantity" min="0" name="quantity" value="0" type="number" readonly>
                <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="plus"></button>
              </div>
            </div>
          </div>
        </div>
        <div class="package-box">
          <div class="package-box-left">
            <hr>
          </div>
          <div class="package-box-right">
            <div class="package-name">
              <h6>Paket "Nama Paket Disini"</h6>
            </div>
            <div class="package-description">
              <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Pariatur mollitia est dolores accusantium eligendi fugit illum illo dolorsit.</p>
            </div>
            <div class="package-prize">
              <h6>Rp15.000</h6>
            </div>
            <div class="package-quantitiy">
              <div class="number-input">
                <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()"></button>
                <input class="quantity" min="0" name="quantity" value="0" type="number" readonly>
                <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="plus"></button>
              </div>
            </div>
          </div>
        </div> -->
      </div>
    </div>
    <div class="similar-container">
      <h2>Similar <?= $dataKategori['nama_kategori'] ?></h2>
      <div class="similar-box">

        <?php for ($i = 0; $i < 5; $i++) : ?>
          <div class="similar-hover">


            <a href="/similiar/detail/<?= $daftar_similiar[$i]['id_layanan']; ?>/<?= $similiar[$i]['id_kategori']; ?>/<?= $similiar[$i]['id_subkategori']; ?>">
              <div class="similar-item">
                <div class="similar-grup">
                  <div class="item-circle"></div>

                  </form>
                  <h4><?= $similiar[$i]['nama_instansi']; ?></h4>
                </div>

                <h3>Rp <?= $daftar_similiar[$i]['harga_min'] ?></h3>
              </div>
            </a>
          </div>
        <?php endfor; ?>
        <!-- <div class="similar-hover">
          <a href="similar-button">
            <div class="similar-item">
              <div class="similar-grup">
                <div class="item-circle"></div>
                <h4>Magang Update</h4>
              </div>
              <h3>Rp25.000</h3>
            </div>
          </a>
        </div>
        <div class="similar-hover">
          <a href="similar-button">
            <div class="similar-item">
              <div class="similar-grup">
                <div class="item-circle"></div>
                <h4>Magang Update</h4>
              </div>
              <h3>Rp25.000</h3>
            </div>
          </a>
        </div>
        <div class="similar-hover">
          <a href="similar-button">
            <div class="similar-item">
              <div class="similar-grup">
                <div class="item-circle"></div>
                <h4>Magang Update</h4>
              </div>
              <h3>Rp25.000</h3>
            </div>
          </a>
        </div>
        <div class="similar-hover">
          <a href="similar-button">
            <div class="similar-item">
              <div class="similar-grup">
                <div class="item-circle"></div>
                <h4>Magang Update</h4>
              </div>
              <h3>Rp25.000</h3>
            </div>
          </a>
        </div> -->
      </div>
    </div>
  </div>
</div>

<?= $this->endsection(); ?>
<?= $this->extend('layouts/template') ?>

<?= $this->section('content'); ?>

<div class="detail-box">
  <div class="detail-container">
    <h2><a href="/pages">＜<?= $detail['nama_instansi']; ?></a></h2>
    <div class="detail-item">
      <div class="detail-picture">
        <img src="/img/picture_poster_layanan/<?= $detail['picture_poster'] ?>" class="img-logo" id="product-image" />
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
          <h4><?= $detail['nama_instansi']; ?></h4>
        </div>
        <div class="detail-harga">

          <h3>Rp <?= number_format($detail['harga_min'], '0', '', '.'); ?> - Rp <?= number_format($detail['harga_max'], '0', '', '.') ?></h3>
        </div>
        <div class="detail-contact">
          <div class="contact-email">
            <h6><?= $detail['email_instansi']; ?></h6>
          </div>
          <div class="contact-socmed">
            <div class="socmed-wa-box">
              <a href="https://wa.me/62<?= $detail['whatsapp']; ?>">
                <div class="socmed-wa">
                  <img src="/icon/whatsapp.png" class="img-wa" />
                </div>
              </a>
            </div>
            <div class="socmed-ig-box">
              <a href="https://instagram.com/<?= $detail['instagram']; ?>">
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

            <?php if ($detail['id_kategori'] == "CAT002") : ?>
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
            <p><?= $detail['deskripsi'] ?></p>
          </div>
          <div class="keterangan-line-box">
            <hr class="keterangan-line" />
          </div>
        </div>

        <div class="step-before">
          <div class="keterangan-list">
            <h6>Steps to Purchase</h6>
            <ul>
              <?php foreach ($detail['step_before'] as $step_before) : ?>

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
              <?php foreach ($detail['step_after'] as $step_after) : ?>
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
              <?php foreach ($detail['value'] as $value) : ?>
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
                <h6>Rp <?= number_format($paket['harga_paket'], '0', '', '.'); ?></h6>
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
            <a href="/detail/index/<?= $daftarSimiliar[$i]['id_layanan']; ?>/<?= $daftarSimiliar[$i]['id_kategori']; ?>/<?= $daftarSimiliar[$i]['id_subkategori']; ?>">
              <div class="similar-item">
                <div class="similar-grup">
                  <div class="item-circle">
                    <img src="/img/picture_poster_layanan/<?= $daftarSimiliar[$i]['picture_poster'] ?>" alt="" id="product-image">

                  </div>
                  </form>
                  <h4><?= $daftarSimiliar[$i]['nama_instansi']; ?></h4>
                </div>
                <h3>Rp <?= number_format($daftarSimiliar[$i]['harga_min'], '0', '', '.');; ?></h3>
              </div>
            </a>
          </div>

        <?php endfor; ?>
      </div>
    </div>
  </div>
</div>

<?= $this->endsection(); ?>
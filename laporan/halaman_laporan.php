<?php
require_once "koneksi.php";
require_once "utils.php";
?>
<style>
/* Animasi hover card */
.card {
    transition: transform 0.2s ease, box-shadow 0.2s ease;
}
.card:hover {
    transform: translateY(-4px);
    box-shadow: 0 6px 20px rgba(0, 0, 0, 0.15);
}
.card-title {
    text-align: center;
    font-weight: bold;
}
.card-title i {
    margin-right: 6px;
}
</style>

<main id="main" class="main">

  <section class="section">
    <div class="row g-4">

      <!-- Laporan Surat -->
      <div class="col-lg-4 col-md-6">
        <div class="card border-primary shadow-sm">
          <div class="card-body">
            <form id="form-surat" method="POST" target="_blank">
              <h5 class="card-title text-primary"><i class="bi bi-envelope-paper"></i>Laporan Surat</h5>
              <div class="row mb-3">
                <div class="col-6">
                  <label>Dari</label>
                  <input type="date" value="2000-01-01" name="dari" class="form-control">
                </div>
                <div class="col-6">
                  <label>Sampai</label>
                  <input type="date" value="<?= date("Y-m-d"); ?>" name="sampai" class="form-control">
                </div>
              </div>
              <div class="mb-3">
                <label>Jenis Surat</label>
                <select name="jenis_surat" id="jenis_surat" class="form-control" required>
                  <option value="" selected disabled>Pilih Jenis Surat</option>
                  <option value="masuk">Surat Masuk</option>
                  <option value="keluar">Surat Keluar</option>
                  <option value="disposisi">Surat Disposisi</option>
                </select>
              </div>
              <script>
                document.querySelector("#jenis_surat").addEventListener('change', function() {
                  let form = document.querySelector('#form-surat');
                  if (this.value === 'masuk') form.action = 'laporan/cetak/laporan_surat_masuk.php';
                  if (this.value === 'keluar') form.action = 'laporan/cetak/laporan_surat_keluar.php';
                  if (this.value === 'disposisi') form.action = 'laporan/cetak/laporan_surat_disposisi.php';
                });
              </script>
              <button type="submit" class="btn btn-primary w-100 mt-2"><i class="bi bi-printer"></i> Cetak</button>
            </form>
          </div>
        </div>
      </div>

      <!-- Laporan Arsip -->
      <div class="col-lg-4 col-md-6">
        <div class="card border-success shadow-sm">
          <div class="card-body">
            <form action="laporan/cetak/laporan_arsip.php" method="POST" target="_blank">
              <h5 class="card-title text-success"><i class="bi bi-archive"></i>Laporan Arsip</h5>
              <div class="row mb-3">
                <div class="col-6">
                  <label>Dari</label>
                  <input type="date" value="2000-01-01" name="dari" class="form-control">
                </div>
                <div class="col-6">
                  <label>Sampai</label>
                  <input type="date" value="<?= date("Y-m-d"); ?>" name="sampai" class="form-control">
                </div>
              </div>
              <button class="btn btn-success w-100"><i class="bi bi-printer"></i> Cetak</button>
            </form>
          </div>
        </div>
      </div>

      <!-- Laporan Riwayat Peminjaman -->
      <div class="col-lg-4 col-md-6">
        <div class="card border-warning shadow-sm">
          <div class="card-body">
            <form action="laporan/cetak/laporan_riwayat_peminjaman_inventaris.php" method="POST" target="_blank">
              <h5 class="card-title text-warning"><i class="bi bi-clock-history"></i>Riwayat Peminjaman</h5>
              <div class="row mb-3">
                <div class="col-6">
                  <label>Dari</label>
                  <input type="date" value="2000-01-01" name="dari" class="form-control">
                </div>
                <div class="col-6">
                  <label>Sampai</label>
                  <input type="date" value="<?= date("Y-m-d"); ?>" name="sampai" class="form-control">
                </div>
              </div>
              <?php
              $dataBarang = $mysqli->query("SELECT * FROM tabel_inventaris ORDER BY id_inventaris DESC");
              ?>
              <div class="mb-3">
                <label>Barang Inventaris</label>
                <select name="id_inventaris" id="id_inventaris" class="form-control" required>
                  <option value="" selected disabled>Pilih Barang</option>
                  <?php while ($b = $dataBarang->fetch_assoc()) : ?>
                    <option value="<?= $b['id_inventaris']; ?>"><?= $b['nama']; ?></option>
                  <?php endwhile; ?>
                </select>
                <input type="hidden" name="nama_barang">
              </div>
              <script>
                document.querySelector('#id_inventaris').addEventListener('change', function() {
                  document.querySelector('input[name=nama_barang]').value = this.options[this.selectedIndex].text;
                });
              </script>
              <button class="btn btn-warning w-100"><i class="bi bi-printer"></i> Cetak</button>
            </form>
          </div>
        </div>
      </div>

      <!-- Laporan Peminjaman Inventaris -->
      <div class="col-lg-4 col-md-6">
        <div class="card border-info shadow-sm">
          <div class="card-body">
            <form action="laporan/cetak/laporan_peminjaman_inventaris.php" method="POST" target="_blank">
              <h5 class="card-title text-info"><i class="bi bi-box-seam"></i>Peminjaman Inventaris</h5>
              <div class="row mb-3">
                <div class="col-6">
                  <label>Dari</label>
                  <input type="date" value="2000-01-01" name="dari" class="form-control">
                </div>
                <div class="col-6">
                  <label>Sampai</label>
                  <input type="date" value="<?= date("Y-m-d"); ?>" name="sampai" class="form-control">
                </div>
              </div>
              <button class="btn btn-info w-100"><i class="bi bi-printer"></i> Cetak</button>
            </form>
          </div>
        </div>
      </div>

      <!-- Laporan Inventaris -->
      <div class="col-lg-4 col-md-6">
        <div class="card border-danger shadow-sm">
          <div class="card-body">
            <form action="laporan/cetak/laporan_inventaris.php" target="_blank">
              <h5 class="card-title text-danger"><i class="bi bi-list-check"></i>Laporan Inventaris</h5>
              <button class="btn btn-danger w-100"><i class="bi bi-printer"></i> Cetak</button>
            </form>
          </div>
        </div>
      </div>

      <!-- Laporan Jumlah Inventaris Dipinjam -->
      <div class="col-lg-4 col-md-6">
        <div class="card border-secondary shadow-sm">
          <div class="card-body">
            <form action="laporan/cetak/laporan_jumlah_inventaris_yang_dipinjam.php" method="POST" target="_blank">
              <h5 class="card-title text-secondary"><i class="bi bi-bar-chart"></i>Inventaris Dipinjam</h5>
              <div class="row mb-3">
                <div class="col-6">
                  <label>Dari</label>
                  <input type="date" value="2000-01-01" name="dari" class="form-control">
                </div>
                <div class="col-6">
                  <label>Sampai</label>
                  <input type="date" value="<?= date("Y-m-d"); ?>" name="sampai" class="form-control">
                </div>
              </div>
              <button class="btn btn-secondary w-100"><i class="bi bi-printer"></i> Cetak</button>
            </form>
          </div>
        </div>
      </div>

    </div>
  </section>

</main>

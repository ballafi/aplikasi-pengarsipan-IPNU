<main id="main" class="main">
  <div class="pagetitle d-flex align-items-center">
    <h1>Dashboard</h1>
  </div>

  <section class="section dashboard">
    <div class="row">

      <!-- Full width columns setelah agenda dihapus -->
      <div class="col-lg-12">
        <div class="row">

          <?php require_once "koneksi.php"; ?>
          
          <!-- Surat Masuk Card -->
          <div class="col-xxl-6 col-md-6">
            <div class="card info-card sales-card">
              <div class="card-body">
                <h5 class="card-title">Surat Masuk</h5>
                <div class="d-flex align-items-center">
                  <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="ri-mail-unread-line"></i>
                  </div>
                  <?php
                  $sql = "SELECT COUNT(*) AS surat_masuk FROM tabel_surat_masuk";
                  $result = $mysqli->query($sql);
                  $row = $result->fetch_assoc();
                  $surat_masuk = $row['surat_masuk'];

                  $sql = "SELECT COUNT(*) AS surat_masuk_hari_ini FROM tabel_surat_masuk WHERE tanggal_surat='" . Date("Y-m-d") . "'";
                  $result = $mysqli->query($sql);
                  $row = $result->fetch_assoc();
                  $surat_masuk_hari_ini = $row['surat_masuk_hari_ini'];
                  ?>
                  <div class="ps-3">
                    <h6><?= $surat_masuk; ?> Surat</h6>
                    <span class="text-success small pt-1 fw-bold"><?= $surat_masuk_hari_ini; ?></span> 
                    <span class="text-muted small pt-2 ps-1">Surat Hari ini</span>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Surat Keluar Card -->
          <div class="col-xxl-6 col-md-6">
            <div class="card info-card revenue-card">
              <div class="card-body">
                <h5 class="card-title">Surat Keluar</h5>
                <div class="d-flex align-items-center">
                  <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="ri-mail-send-line"></i>
                  </div>
                  <?php
                  $sql = "SELECT COUNT(*) AS surat_keluar FROM tabel_surat_keluar";
                  $result = $mysqli->query($sql);
                  $row = $result->fetch_assoc();
                  $surat_keluar = $row['surat_keluar'];

                  $sql = "SELECT COUNT(*) AS surat_keluar_hari_ini FROM tabel_surat_keluar WHERE tanggal_surat='" . Date("Y-m-d") . "'";
                  $result = $mysqli->query($sql);
                  $row = $result->fetch_assoc();
                  $surat_keluar_hari_ini = $row['surat_keluar_hari_ini'];
                  ?>
                  <div class="ps-3">
                    <h6><?= $surat_keluar; ?> Surat</h6>
                    <span class="text-success small pt-1 fw-bold"><?= $surat_keluar_hari_ini; ?></span> 
                    <span class="text-muted small pt-2 ps-1">Surat Hari ini</span>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Surat Masuk Terakhir -->
          <div class="col-12">
            <div class="card top-selling">
              <div class="card-body pb-0">
                <h5 class="card-title">Surat Masuk Terakhir</h5>
                <table class="table datatable">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Nomor Surat</th>
                      <th>Tanggal Surat</th>
                      <th>Perihal</th>
                      <th>Sifat Surat</th>
                      <th>Pengirim</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $no = 1;
                    $sql = "SELECT * FROM tabel_surat_masuk ORDER BY id_surat_masuk DESC";
                    $result = $mysqli->query($sql);
                    while ($row = $result->fetch_assoc()) :
                    ?>
                      <tr>
                        <th><?= $no++; ?></th>
                        <td><?= $row['nomor_surat']; ?></td>
                        <td><?= $row['tanggal_surat']; ?></td>
                        <td><?= $row['perihal']; ?></td>
                        <td><?= $row['sifat_surat']; ?></td>
                        <td><?= $row['pengirim']; ?></td>
                      </tr>
                    <?php endwhile; ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

          <!-- Surat Keluar Terakhir -->
          <div class="col-12">
            <div class="card top-selling">
              <div class="card-body pb-0">
                <h5 class="card-title">Surat Keluar Terakhir</h5>
                <table class="table datatable">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Unit Pengolah</th>
                      <th>Nomor Surat</th>
                      <th>Tanggal Surat</th>
                      <th>Jenis Surat</th>
                      <th>Sifat Surat</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $sql = "SELECT * FROM tabel_surat_keluar 
                            LEFT JOIN tabel_ruangan ON tabel_ruangan.id_ruangan = tabel_surat_keluar.id_ruangan
                            LEFT JOIN tabel_kode_surat ON tabel_kode_surat.id_kode_surat = tabel_surat_keluar.id_kode_surat
                            ORDER BY id_surat_keluar DESC";
                    $result = $mysqli->query($sql);
                    while ($row = $result->fetch_assoc()) :
                    ?>
                      <tr>
                        <th><?= $no++; ?></th>
                        <td><?= $row['nama_ruangan']; ?></td>
                        <td><?= $row['nomor_surat']; ?></td>
                        <td><?= $row['tanggal_surat']; ?></td>
                        <td><?= $row['jenis_surat']; ?></td>
                        <td><?= $row['sifat_surat']; ?></td>
                      </tr>
                    <?php endwhile; ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>
      </div>

    </div>
  </section>
</main>

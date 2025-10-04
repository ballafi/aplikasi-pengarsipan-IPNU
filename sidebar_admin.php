<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <!-- Beranda -->
        <li class="nav-item">
            <a class="nav-link" href="index.php">
                <i class="bi bi-grid"></i>
                <span>Beranda</span>
            </a>
        </li>

        <!-- Surat Masuk -->
        <li class="nav-item">
            <a id="surat_masuk" class="nav-link collapsed" data-bs-target="#surat_masuk-nav" data-bs-toggle="collapse" href="#">
                <i class="ri-mail-add-line"></i><span>Surat Masuk</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="surat_masuk-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
                <li>
                    <a id="tampil_surat_masuk" href="?page=surat_masuk&item=tampil_surat_masuk">
                        <i class="bi bi-circle"></i><span>Data Surat Masuk</span>
                    </a>
                </li>
                <li>
                    <a id="tambah_surat_masuk" href="?page=surat_masuk&item=tambah_surat_masuk">
                        <i class="bi bi-circle"></i><span>Tambah Surat Masuk</span>
                    </a>
                </li>
            </ul>
        </li>

        <!-- Surat Keluar -->
          <li class="nav-item">
            <a id="surat_keluar" class="nav-link collapsed" data-bs-target="#surat_keluar-nav" data-bs-toggle="collapse" href="#">
                <i class="ri ri-mail-line"></i><span>Surat Keluar</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="surat_keluar-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
                <li>
                    <a id="tampil_surat_keluar" href="?page=surat_keluar&item=tampil_surat_keluar">
                        <i class="bi bi-circle"></i><span>Data Surat Keluar</span>
                    </a>
                </li>
                <li>
                    <a id="tambah_surat_keluar" href="?page=surat_keluar&item=tambah_surat_keluar">
                        <i class="bi bi-circle"></i><span>Tambah Surat Keluar</span>
                    </a>
                </li>
            </ul>
        </li>
        
        <!-- Surat Disposisi -->
          <li class="nav-item">
            <a id="surat_disposisi" class="nav-link collapsed" data-bs-target="#surat_disposisi-nav" data-bs-toggle="collapse" href="#">
                <i class="ri-mail-add-line"></i><span>Surat Disposisi</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="surat_disposisi-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
                <li>
                    <a id="tampil_surat_disposisi" href="?page=surat_disposisi&item=tampil_surat_disposisi">
                        <i class="bi bi-circle"></i><span>Data Surat Disposisi</span>
                    </a>
                </li>
                <li>
                    <a id="tambah_surat_disposisi" href="?page=surat_disposisi&item=tambah_surat_disposisi">
                        <i class="bi bi-circle"></i><span>Tambah Surat Disposisi</span>
                    </a>
                </li>
            </ul>
        </li>

        <!-- Kode Surat -->
        <li class="nav-item">
            <a id="kode_surat" class="nav-link collapsed" data-bs-target="#kode-surat-nav" data-bs-toggle="collapse" href="#">
                <i class="ri ri-mail-line"></i>
                <span>Kode Surat</span>
                <i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="kode-surat-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
                <li>
                    <a id="tampil_kode_surat" href="index.php?page=kode_surat&item=tampil_kode_surat">
                        <i class="bi bi-circle"></i>
                        <span>Data Kode Surat</span>
                    </a>
                </li>
                <li>
                    <a id="tambah_kode_surat" href="index.php?page=kode_surat&item=tambah_kode_surat">
                        <i class="bi bi-circle"></i>
                        <span>Tambah Kode Surat</span>
                    </a>
                </li>
            </ul>
        </li>

        <!-- User -->
        <li class="nav-item">
            <a id="user" class="nav-link collapsed" data-bs-target="#user-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-people-fill"></i>
                <span>User</span>
                <i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="user-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
                <li>
                    <a id="tampil_user" href="index.php?page=user&item=tampil_user">
                        <i class="bi bi-circle"></i>
                        <span>Data User</span>
                    </a>
                </li>
                <li>
                    <a id="tambah_user" href="index.php?page=user&item=tambah_user">
                        <i class="bi bi-circle"></i>
                        <span>Tambah User</span>
                    </a>
                </li>
            </ul>
        </li>

        <!-- Inventaris -->
        <li class="nav-item">
            <a id="inventaris" class="nav-link collapsed" data-bs-target="#inventaris-nav" data-bs-toggle="collapse" href="#">
                <i class="ri ri-book-2-line"></i>
                <span>Inventaris</span>
                <i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="inventaris-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
                <li>
                    <a id="tampil_inventaris" href="index.php?page=inventaris&item=tampil_inventaris">
                        <i class="bi bi-circle"></i>
                        <span>Data Inventaris</span>
                    </a>
                </li>
                <li>
                    <a id="tampil_peminjaman_inventaris" href="index.php?page=inventaris&item=tampil_peminjaman_inventaris">
                        <i class="bi bi-circle"></i>
                        <span>Data Peminjaman Inventaris</span>
                    </a>
                </li>
                <li>
                    <a id="tambah_inventaris" href="index.php?page=inventaris&item=tambah_inventaris">
                        <i class="bi bi-circle"></i>
                        <span>Tambah Inventaris</span>
                    </a>
                </li>
            </ul>
        </li>

        <!-- Laporan -->
        <li class="nav-item">
            <a id="laporan" class="nav-link collapsed" href="index.php?page=laporan">
                <i class="bi bi-journal-text"></i>
                <span>Laporan</span>
            </a>
        </li>

    </ul>

</aside><!-- End Sidebar -->

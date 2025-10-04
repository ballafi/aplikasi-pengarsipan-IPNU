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

        <!-- Arsip -->
        <li class="nav-item">
            <a id="arsip" class="nav-link collapsed" data-bs-target="#arsip-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-archive"></i><span>Arsip</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="arsip-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
                <li>
                    <a id="tampil_arsip" href="?page=arsip&item=tampil_arsip">
                        <i class="bi bi-circle"></i><span>Data Arsip</span>
                    </a>
                </li>
                <li>
                    <a id="tambah_arsip" href="?page=arsip&item=tambah_arsip">
                        <i class="bi bi-circle"></i><span>Tambah Arsip</span>
                    </a>
                </li>
            </ul>
        </li>

        <!-- Inventaris -->
        <li class="nav-item">
            <a id="inventaris" class="nav-link collapsed" data-bs-target="#inventaris-nav" data-bs-toggle="collapse" href="#">
                <i class="ri-book-2-line"></i><span>Inventaris</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="inventaris-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
                <li>
                    <a id="tampil_inventaris" href="?page=inventaris&item=tampil_inventaris">
                        <i class="bi bi-circle"></i><span>Data Inventaris</span>
                    </a>
                </li>
                <li>
                    <a id="tampil_peminjaman_inventaris" href="?page=inventaris&item=tampil_peminjaman_inventaris">
                        <i class="bi bi-circle"></i><span>Data Peminjaman Inventaris</span>
                    </a>
                </li>
                <li>
                    <a id="tambah_peminjaman_inventaris" href="?page=inventaris&item=tambah_peminjaman_inventaris">
                        <i class="bi bi-circle"></i><span>Tambah Peminjaman Inventaris</span>
                    </a>
                </li>
            </ul>
        </li>

    </ul>

</aside><!-- End Sidebar -->

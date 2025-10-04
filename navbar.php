<header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center w-100 px-3">

        <!-- Toggle Sidebar -->
        <div class="toggle-sidebar-btn me-3" id="sidebarToggle">
            <span></span>
            <span></span>
            <span></span>
        </div>

        <!-- Logo & Judul -->
        <a href="index.php" class="logo d-flex align-items-center text-decoration-none" style="min-width:0;">
              <img src="assets/img/logoipnu.png" alt="Logo IPNU" class="app-logo me-2" style="height:48px;width:48px;">
              <div class="d-flex flex-column justify-content-center flex-grow-1" style="min-width:0;">
                   <span class="app-title text-uppercase fw-bold lh-1 text-truncate" style="font-size: 1.1em; letter-spacing: 1px; color: #212121; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">
                       SISTEM ARSIP
                   </span>
                   <span class="app-subtitle fw-normal text-truncate" style="font-size: 0.95em; color: #388e3c; letter-spacing: 0.5px; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">
                       PAC IPNU KEDUNGWUNI
                   </span>
              </div>
        </a>

        <!-- Menu Profil -->
        <nav class="header-nav ms-auto">
            <ul class="d-flex align-items-center mb-0">
                <li class="nav-item dropdown pe-3">
                    <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
                       <span class="d-none d-md-block dropdown-toggle ps-2"><?= $_SESSION['nama_user']; ?></span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                        <li class="dropdown-header">
                            <h6><?= $_SESSION['nama_user']; ?></h6>
                            <span><?= $_SESSION['status_user']; ?></span>
                        </li>
                        <li><hr class="dropdown-divider"></li>
                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="index.php?page=ganti_password">
                                <i class="bi bi-gear"></i>
                                <span>Ganti Password</span>
                            </a>
                        </li>
                        <li><hr class="dropdown-divider"></li>
                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="index.php?page=keluar">
                                <i class="bi bi-box-arrow-right"></i>
                                <span>Keluar</span>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>

    </div>
</header>

<style>
.header {
    height: 60px;
    background: linear-gradient(90deg, #0099ffff, #388e3c);
    box-shadow: 0 2px 6px rgba(0,0,0,0.15);
}

/* Logo */
.app-logo {
    height: 60px;
    width: 60px;
    border-radius: 50%;
    object-fit: contain;
}

/* Toggle Sidebar */
.toggle-sidebar-btn {
    width: 30px;
    height: 22px;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    cursor: pointer;
    padding: 4px 0;
}
.toggle-sidebar-btn span {
    display: block;
    height: 3px;
    background: white;
    border-radius: 3px;
    transition: all 0.3s ease;
}
.toggle-sidebar-btn.active span:nth-child(1) {
    transform: translateY(9px) rotate(45deg);
}
.toggle-sidebar-btn.active span:nth-child(2) {
    opacity: 0;
}
.toggle-sidebar-btn.active span:nth-child(3) {
    transform: translateY(-9px) rotate(-45deg);
}

/* Profil Menu */
.nav-profile {
    color: white;
    font-weight: 500;
}
.app-title {
    color: #212121;
    font-family: 'Montserrat', 'Futura', Arial, sans-serif;
    font-weight: 700;
    letter-spacing: 1px;
}
.app-subtitle {
    color: #388e3c;
    font-family: 'Montserrat', 'Futura', Arial, sans-serif;
    font-weight: 400;
    font-size: 1em;
    letter-spacing: 0.5px;
}
</style>

<!-- JS -->
<script>
document.getElementById("sidebarToggle").addEventListener("click", function() {
    this.classList.toggle("active");
    document.body.classList.toggle("sidebar-open"); // ganti sesuai class sidebar kamu
});
</script>


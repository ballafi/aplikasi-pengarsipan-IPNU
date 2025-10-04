<?php
// Mulai session hanya jika belum aktif
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

require_once "koneksi.php";


if (isset($_POST['submit'])) {
    $username_user = trim($_POST['username_user']);
    $password_user = trim($_POST['password_user']);

    // Gunakan prepared statement untuk keamanan
    $stmt = $mysqli->prepare("SELECT * FROM tabel_user WHERE username_user = ? AND password_user = ?");
    $stmt->bind_param("ss", $username_user, $password_user);
    $stmt->execute();
    $result = $stmt->get_result();
    $user = $result->fetch_assoc();

if ($user) {
    $_SESSION['nama_user']   = $user['nama_user'];
    $_SESSION['id_user']     = $user['id_user'];
    $_SESSION['status_user'] = $user['status_user'];
    if (isset($_SESSION['status_user']) && $_SESSION['status_user'] === 'admin') {
        header('Location: index.php');
        exit;
    }
        
    } else {
        echo "<script>alert('Username atau Password Salah!');</script>";
    }
}
?>
<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700&display=swap" rel="stylesheet">
<style>
/* Animasi form */
@keyframes fadeZoom {
    0% { opacity: 0; transform: scale(0.95); }
    100% { opacity: 1; transform: scale(1); }
}
.card-animated {
    animation: fadeZoom 0.6s ease-in-out;
}
/* Background gradasi */
body {
    background: linear-gradient(135deg, #4CAF50, #81C784);
    font-family: 'Montserrat', 'Futura', Arial, sans-serif;
}
h4, .fw-bold, .form-label, .btn, p, label, input, button {
    font-family: 'Montserrat', 'Futura', Arial, sans-serif;
}
</style>

<main>
    <div class="container">
        <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-5 col-lg-5 col-md-7">

                        <div class="text-center mb-3 text-white">
                            <img src="assets/img/logoipnu.png" width="90" alt="Logo" class="mb-2">
                            <h4 class="fw-bold">SISTEM PENGARSIPAN DOKUMEN</h4>
                            <p class="text-light">PAC IPNU KECAMATAN KEDUNGWUNI</p>
                        </div>

                        <div class="card shadow-lg border-0 rounded-3 card-animated">
                            <div class="card-body p-4">

                                <form class="row g-3 needs-validation" novalidate method="POST">
                                    <div class="col-12">
                                        <label for="username_user" class="form-label">Username</label>
                                        <input type="text" name="username_user" class="form-control form-control-lg" id="username_user" required autofocus>
                                        <div class="invalid-feedback">Masukkan username.</div>
                                    </div>

                                    <div class="col-12">
                                        <label for="password_user" class="form-label">Password</label>
                                        <input type="password" name="password_user" class="form-control form-control-lg" id="password_user" required>
                                        <div class="invalid-feedback">Masukkan password!</div>
                                    </div>

                                    <div class="col-12 mt-3">
                                        <button class="btn btn-success w-100 py-2 fw-bold" name="submit" type="submit">Login</button>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <p class="mt-3 text-center text-light small">
                            &copy; <?= date("Y") ?> PAC IPNU Kedungwuni
                        </p>

                    </div>
                </div>
            </div>
        </section>
    </div>
</main>

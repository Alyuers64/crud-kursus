<?php
require 'koneksi.php';
require 'fungsi.php';

$id = $_GET["id"];
$rows = query("SELECT * FROM materi WHERE id_materi = '$id'")[0];
if (isset($_POST["submit"])) {
if (ubah_materi($_POST) > 0) {
echo "
<script>
alert('Data berhasil diubah!');
document.location.href = 'index.php';
</script>";
} else {
echo "
<script>
alert('Data gagal diubah!');
document.location.href = 'index.php';
</script>";
}
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="wrappixel" content="Admin">
    <meta name="robots" content="noindex,nofollow">
    <title>CRUD - Kursus</title>

    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicon.png">
    <!-- Bootstrap Core CSS -->
    <link href="../assets/node_modules/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/node_modules/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet">
    <!-- CSS -->
    <!-- chartist CSS -->
    <link href="../assets/node_modules/morrisjs/morris.css" rel="stylesheet">
    <!--c3 CSS -->
    <link href="../assets/node_modules/c3-master/c3.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">
    <!-- Dashboard 1 Page CSS -->
    <link href="css/pages/dashboard1.css" rel="stylesheet">
    <!-- theme colors -->
    <link href="css/colors/default.css" id="theme" rel="stylesheet">

</head>

<body class="fix-header fix-sidebar card-no-border">
    <div class="preloader">
        <div class="loader">
            <div class="loader__figure"></div>
            <p class="loader__label">Admin</p>
        </div>
    </div>

    <div id="main-wrapper">
        <header class="topbar">
            <nav class="navbar top-navbar navbar-expand-md navbar-light">
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.php">
                        <b>

                            <img src="assets/images/logo-icon.png" alt="homepage" class="dark-logo" />
                            <img src="assets/images/logo-light-icon.png" alt="homepage" class="light-logo" />
                        </b>
                        <span>
                            <img src="assets/images/logo-text.png" alt="homepage" class="dark-logo" />
                            <img src="assets/images/logo-light-text.png" class="light-logo" alt="homepage" />

                        </span>
                    </a>
                </div>
                <div class="navbar-collapse">

                    <ul class="navbar-nav me-auto">
                        <li class="nav-item"> <a class="nav-link nav-toggler hidden-md-up waves-effect waves-dark"
                                href="javascript:void(0)"><i class="fa fa-bars"></i></a> </li>

                        <li class="nav-item hidden-xs-down search-box"> <a
                                class="nav-link hidden-sm-down waves-effect waves-dark" href="javascript:void(0)"><i
                                    class="fa fa-search"></i></a>
                            <form class="app-search">
                                <input type="text" class="form-control" placeholder="Search & enter"> <a
                                    class="srh-btn"><i class="fa fa-times"></i></a>
                            </form>
                        </li>
                    </ul>
                    <ul class="navbar-nav my-lg-0">

                        <li class="nav-item dropdown u-pro">
                            <a class="nav-link dropdown-toggle waves-effect waves-dark profile-pic" href="#"
                                id="navbarDropdown" data-bs-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                <i class="fa fa-user-circle-o"></i>
                                <!-- <img src="assets/images/users/user.png" alt="user" class="" />  --><span
                                    class="hidden-md-down">Admin &nbsp;</span> </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown"></ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>

        <aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li> <a class="waves-effect waves-dark" href="index.php" aria-expanded="false"><i
                                    class="fa fa-home"></i><span class="hide-menu">Dashboard</span></a>
                        </li>
                    </ul>
                    <div class="text-center mt-4">
                        <a href="" class="btn waves-effect waves-light btn-info hidden-md-down text-white">Logout</a>
                    </div>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>

        <div class="page-wrapper">

            <div class="container-fluid">

                <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h3 class="text-themecolor">Dashboard</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item active">Materi</li>
                        </ol>
                    </div>
                </div>

                <!-- column -->
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Edit Materi</h4>
                            <form action="" method="post">
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Id Materi</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="id_materi" class="form-control"
                                            value="<?= $rows["id_materi"] ?>" readonly>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Id Kursus</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="id_kursus" class="form-control"
                                            value="<?= $rows["id_kursus"] ?>" readonly>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Judul Materi</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="judul_materi" class="form-control"
                                            placeholder="Masukan Judul Materi" value="<?= $rows["judul_materi"] ?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputPassword3" class="col-sm-2 col-form-label">Deskripsi Materi</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="des_mat" class="form-control"
                                            placeholder="Isi Deskripsi Materi" value="<?= $rows["des_mat"] ?>">
                                        </type=>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputPassword3" class="col-sm-2 col-form-label">Link Materi</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="link_embed" class="form-control"
                                            placeholder="Masukan Link Materi" value="<?= $rows["link_embed"] ?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-10">
                                        <a href="index.php"
                                            onclick=" return confirm ('Batal mengedit data ini?');"><button
                                                type="button" class="btn btn-danger">
                                                <span><i class="fa fa-times"></i> Batal</button></span></a>
                                        <button type="submit" name="submit" class="btn btn-primary"><i
                                                class="fa fa-file"></i> Simpan
                                            Perubahan</button>
                                    </div>
                                </div>
                            </form>


                        </div>

                    </div>
                </div>
            </div>

            <footer class="footer"> © 2023 Admin by <a href="#">Ripaldo Alyura</a> </footer>

        </div>

    </div>

    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <script src="assets/node_modules/jquery/jquery.min.js"></script>
    <!-- Bootstrap popper Core JavaScript -->
    <script src="assets/node_modules/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="js/perfect-scrollbar.jquery.min.js"></script>
    <!--Wave Effects -->
    <script src="js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="js/custom.min.js"></script>
    <!-- ============================================================== -->
    <!-- plugins -->
    <!-- ============================================================== -->
    <!--morris JavaScript -->
    <script src="assets/node_modules/raphael/raphael-min.js"></script>
    <script src="assets/node_modules/morrisjs/morris.min.js"></script>
    <!--c3 JavaScript -->
    <script src="assets/node_modules/d3/d3.min.js"></script>
    <script src="assets/node_modules/c3-master/c3.min.js"></script>
    <!-- Chart JS -->
    <script src="js/dashboard1.js"></script>
</body>

</html>
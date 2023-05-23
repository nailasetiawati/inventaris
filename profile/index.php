<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>Inventaris &mdash; Detail Akun</title>

    <!-- General CSS Files -->
    <link rel="stylesheet" href="../../assets/modules/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../assets/modules/fontawesome/css/all.min.css">

    <!-- CSS Libraries -->
    <link rel="stylesheet" href="../../assets/modules/prism/prism.css">
    <link rel="stylesheet" href="../../assets/modules/datatables/datatables.min.css">
    <link rel="stylesheet" href="../../assets/modules/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="../../assets/modules/datatables/Select-1.2.4/css/select.bootstrap4.min.css">

    <!-- Template CSS -->
    <link rel="stylesheet" href="../../assets/css/style.css">
    <link rel="stylesheet" href="../../assets/css/components.css">
    <!-- Start GA -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-94034622-3');
    </script>
    <!-- /END GA -->
</head>

<body>
    <div id="app">
        <div class="main-wrapper main-wrapper-1">
            <div class="navbar-bg"></div>
            <nav class="navbar navbar-expand-lg main-navbar">
                <form class="form-inline mr-auto">
                    <ul class="navbar-nav mr-3">
                        <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i
                                    class="fas fa-bars"></i></a></li>
                        <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i
                                    class="fas fa-search"></i></a></li>
                    </ul>
                    <div class="search-element">
                        <input class="form-control" type="search" placeholder="Search" aria-label="Search"
                            data-width="250">
                        <button class="btn" type="submit"><i class="fas fa-search"></i></button>
                        <div class="search-backdrop"></div>
                        <div class="search-result">
                        </div>
                    </div>
                </form>
                <ul class="navbar-nav navbar-right">
                    <li class="dropdown"><a href="#" data-toggle="dropdown"
                            class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                            <img alt="image" src="../../assets/img/avatar/avatar-1.png" class="rounded-circle mr-1">
                            <div class="d-sm-none d-lg-inline-block">Hi, Ujang Maman</div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a href="features-profile.html" class="dropdown-item has-icon">
                                <i class="far fa-user"></i> Profile
                            </a>
                            <a href="features-activities.html" class="dropdown-item has-icon">
                                <i class="fas fa-bolt"></i> Activities
                            </a>
                            <a href="features-settings.html" class="dropdown-item has-icon">
                                <i class="fas fa-cog"></i> Settings
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item has-icon text-danger">
                                <i class="fas fa-sign-out-alt"></i> Logout
                            </a>
                        </div>
                    </li>
                </ul>
            </nav>
            <div class="main-sidebar sidebar-style-2">
                <aside id="sidebar-wrapper">
                    <div class="sidebar-brand">
                        <a href="/admin/dashboard/index.php">Inventaris</a>
                    </div>
                    <div class="sidebar-brand sidebar-brand-sm">
                        <a href="/admin/dashboard/index.php">IT</a>
                    </div>
                    <ul class="sidebar-menu">
                        <li class="mb-2"><a class="nav-link" href="/admin/dashboard/index.php"><i
                                    class="fas fa-tachometer-alt"></i> <span>Dashboard</span></a></li>
                        <li class="dropdown mb-2">
                            <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i
                                    class="fas fa-users"></i> <span>Siswa</span></a>
                            <ul class="dropdown-menu">
                                <li><a class="nav-link" href="/admin/class/index.php">Kelola Kelas</a></li>
                                <li><a class="nav-link" href="/admin/student/index.php">Kelola Siswa</a></li>
                            </ul>
                        </li>
                        <li class="dropdown mb-2">
                            <a href="#" class="nav-link has-dropdown"><i class="fas fa-th-large"></i>
                                <span>Barang</span></a>
                            <ul class="dropdown-menu">
                                <li><a class="nav-link" href="/admin/category/index.php">Kelola Kategori</a></li>
                                <li><a class="nav-link" href="/admin/item/index.php">Kelola Barang</a></li>
                            </ul>
                        </li>
                        <li class="mb-2"><a class="nav-link" href="/admin/borrow/index.php"><i class="fas fa-book"></i>
                                <span>Peminjaman</span></a></li>
                        <li class="mb-2"><a class="nav-link" href="/admin/report/index.php"><i class="fas fa-file"></i>
                                <span>Laporan</span></a></li>
                    </ul>
                </aside>
            </div>

            <!-- Main Content -->
            <div class="main-content">
                <section class="section">
                    <div class="section-header">
                        <h1>Detail Akun</h1>
                        <div class="section-header-breadcrumb">
                            <div class="breadcrumb-item active"><a href="/admin/dashboard/index.php">Dashboard</a></div>
                            <div class="breadcrumb-item"><a href="#">Profile</a></div>
                            <div class="breadcrumb-item">Detail Akun</div>
                        </div>
                    </div>

                    <div class="section-body">
                        <h2 class="section-title">Informasi Akun</h2>
                        <p class="section-lead">
                            Berikut adalah data - data yang dimiliki oleh anda.
                        </p>

                        <div class="row">
                            <div class="col-12">
                                <div class="card profile-widget">
                                    <div class="profile-widget-header">
                                        <img alt="image" src="../../assets/img/avatar/avatar-1.png"
                                            class="rounded-circle profile-widget-picture">
                                        <div class="profile-widget-items">
                                            <div class="profile-widget-item">
                                                <div class="profile-widget-item-label">Peminjaman</div>
                                                <div class="profile-widget-item-value">187</div>
                                            </div>
                                            <div class="profile-widget-item">
                                                <div class="profile-widget-item-label">Pengembalian</div>
                                                <div class="profile-widget-item-value">187</div>
                                            </div>
                                            <div class="profile-widget-item">
                                                <div class="profile-widget-item-label">Pengembalian Bermasalah</div>
                                                <div class="profile-widget-item-value">0</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="profile-widget-description pb-0">
                                        <div class="profile-widget-name">Agus Sampoerna <div
                                                class="text-muted d-inline font-weight-normal">
                                                <div class="slash"></div> X - RPL
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-2">
                                                <p>Nis</p>
                                            </div>
                                            <div class="col-1">
                                                <p> : </p>
                                            </div>
                                            <div class="col-6">
                                                <p>202110065</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-2">
                                                <p>Nama Lengkap</p>
                                            </div>
                                            <div class="col-1">
                                                <p> : </p>
                                            </div>
                                            <div class="col-6">
                                                <p>Agus Sampoerna</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-2">
                                                <p>Kelas</p>
                                            </div>
                                            <div class="col-1">
                                                <p> : </p>
                                            </div>
                                            <div class="col-6">
                                                <p>X - RPL</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-2">
                                                <p>Email</p>
                                            </div>
                                            <div class="col-1">
                                                <p> : </p>
                                            </div>
                                            <div class="col-6">
                                                <p>agussampoerna@mail.com</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-2">
                                                <p>No Telepon</p>
                                            </div>
                                            <div class="col-1">
                                                <p> : </p>
                                            </div>
                                            <div class="col-6">
                                                <p>+6283845456789</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-2">
                                                <p>Alamat</p>
                                            </div>
                                            <div class="col-1">
                                                <p> : </p>
                                            </div>
                                            <div class="col-6">
                                                <p>Jl. Jalan Jalan No. 666</p>
                                            </div>
                                        </div>
                                        <div class="float-right">
                                        <a href="/admin/dashboard/index.php" class="btn btn-danger mb-4">Kembali</a>
                                        <a href="/profile/edit.php" class="btn btn-primary mb-4">Edit Data</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <footer class="main-footer">
                <div class="footer-left">
                    Copyright &copy; 2023 Inventaris
                </div>
                <div class="footer-right">

                </div>
            </footer>
        </div>
    </div>

    <!-- General JS Scripts -->
    <script src="../../assets/modules/jquery.min.js"></script>
    <script src="../../assets/modules/popper.js"></script>
    <script src="../../assets/modules/tooltip.js"></script>
    <script src="../../assets/modules/bootstrap/js/bootstrap.min.js"></script>
    <script src="../../assets/modules/nicescroll/jquery.nicescroll.min.js"></script>
    <script src="../../assets/modules/moment.min.js"></script>
    <script src="../../assets/js/stisla.js"></script>

    <!-- JS Libraies -->
    <script src="../../assets/modules/prism/prism.js"></script>
    <script src="../../assets/modules/datatables/datatables.min.js"></script>
    <script src="../../assets/modules/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js"></script>
    <script src="../../assets/modules/datatables/Select-1.2.4/js/dataTables.select.min.js"></script>
    <script src="../../assets/modules/jquery-ui/jquery-ui.min.js"></script>



    <!-- Page Specific JS File -->
    <script src="../../assets/js/page/bootstrap-modal.js"></script>
    <script>
        $(document).ready(function () {
            $('#tbStudent').DataTable();
        });
    </script>


    <!-- Template JS File -->
    <script src="../../assets/js/scripts.js"></script>
    <script src="../../assets/js/custom.js"></script>
</body>

</html>
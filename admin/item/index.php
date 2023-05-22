<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>Inventaris &mdash; Daftar Barang</title>

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
<div class="modal fade" id="modalDelete" tabindex="-1" aria-labelledby="modalDeleteLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalDeleteLabel">Perhatian!</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Apakah anda yakin akan menghapus data ini?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    <button type="button" class="btn btn-danger">Yakin</button>
                </div>
            </div>
        </div>
    </div>
                
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
                                <li><a class="nav-link" href="/admin/student/index.php">Kelola Kelas</a></li>
                                <li><a class="nav-link" href="/admin/student/index.php">Kelola Siswa</a></li>
                            </ul>
                        </li>
                        <li class="dropdown active mb-2">
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
                        <h1>Daftar Barang</h1>
                        <div class="section-header-breadcrumb">
                            <div class="breadcrumb-item active"><a href="/admin/dashboard/index.php">Dashboard</a></div>
                            <div class="breadcrumb-item"><a href="#">Barang</a></div>
                            <div class="breadcrumb-item">Daftar Barang</div>
                        </div>
                    </div>

                    <div class="section-body">
                        <h2 class="section-title">Tabel Data Barang</h2>
                        <p class="section-lead">
                            Berikut adalah data - data barang yang ada pada aplikasi inventaris!
                        </p>

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-striped" id="tbCategory">
                                                <thead>
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <a href="/admin/item/create.php"
                                                                class="btn btn-sm btn-primary mb-2 float-left"><i
                                                                    class="fas fa-plus"></i> Tambah Barang</a>
                                                        </div>
                                                    </div>
                                                    <tr>
                                                        <th class="text-center">
                                                            No
                                                        </th>
                                                        <th class="text-center">Kode Barang</th>
                                                        <th class="text-center">Nama Barang</th>
                                                        <th class="text-center">Kategori Barang</th>
                                                        <th class="text-center">Opsi</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>1</td>
                                                        <td class="text-center">BRG - 001</td>
                                                        <td class="text-center">BENQ U22</td>
                                                        <td class="text-center">Proyektor</td>
                                                        <td class="text-center">
                                                            <a href="/admin/item/detail.php"
                                                                class="btn btn-sm btn-primary" data-toggle="tooltip"
                                                                data-placement="top" title="Detail"><i
                                                                    class="fas fa-eye"></i></a>
                                                            <a href="/admin/item/edit.php"
                                                                class="btn btn-sm btn-warning" data-toggle="tooltip"
                                                                data-placement="top" title="Edit"><i
                                                                    class="fas fa-pencil-alt"></i></a>
                                                            <!-- Button trigger modal -->
                                                            <button type="button" class="btn btn-sm btn-danger"
                                                                data-toggle="modal" data-target="#modalDelete">
                                                                <i class="fas fa-trash"></i>
                                                            </button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>2</td>
                                                        <td class="text-center">BRG - 002</td>
                                                        <td class="text-center">Infocus Xerab</td>
                                                        <td class="text-center">Proyektor</td>
                                                        <td class="text-center">
                                                            <a href="/admin/item/detail.php"
                                                                class="btn btn-sm btn-primary" data-toggle="tooltip"
                                                                data-placement="top" title="Detail"><i
                                                                    class="fas fa-eye"></i></a>
                                                            <a href="/admin/item/edit.php"
                                                                class="btn btn-sm btn-warning" data-toggle="tooltip"
                                                                data-placement="top" title="Edit"><i
                                                                    class="fas fa-pencil-alt"></i></a>
                                                            <!-- Button trigger modal -->
                                                            <button type="button" class="btn btn-sm btn-danger"
                                                                data-toggle="modal" data-target="#modalDelete">
                                                                <i class="fas fa-trash"></i>
                                                            </button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>3</td>
                                                        <td class="text-center">BRG - 003</td>
                                                        <td class="text-center">Pulpen Seukeut</td>
                                                        <td class="text-center">Alat Tulis</td>
                                                        <td class="text-center">
                                                            <a href="/admin/item/detail.php"
                                                                class="btn btn-sm btn-primary" data-toggle="tooltip"
                                                                data-placement="top" title="Detail"><i
                                                                    class="fas fa-eye"></i></a>
                                                            <a href="/admin/item/edit.php"
                                                                class="btn btn-sm btn-warning" data-toggle="tooltip"
                                                                data-placement="top" title="Edit"><i
                                                                    class="fas fa-pencil-alt"></i></a>
                                                            <!-- Button trigger modal -->
                                                            <button type="button" class="btn btn-sm btn-danger"
                                                                data-toggle="modal" data-target="#modalDelete">
                                                                <i class="fas fa-trash"></i>
                                                            </button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>4</td>
                                                        <td class="text-center">BRG - 004</td>
                                                        <td class="text-center">Kabel Peugat</td>
                                                        <td class="text-center">Kabel</td>
                                                        <td class="text-center">
                                                            <a href="/admin/item/detail.php"
                                                                class="btn btn-sm btn-primary" data-toggle="tooltip"
                                                                data-placement="top" title="Detail"><i
                                                                    class="fas fa-eye"></i></a>
                                                            <a href="/admin/item/edit.php"
                                                                class="btn btn-sm btn-warning" data-toggle="tooltip"
                                                                data-placement="top" title="Edit"><i
                                                                    class="fas fa-pencil-alt"></i></a>
                                                            <!-- Button trigger modal -->
                                                            <button type="button" class="btn btn-sm btn-danger"
                                                                data-toggle="modal" data-target="#modalDelete">
                                                                <i class="fas fa-trash"></i>
                                                            </button>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
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
            $('#tbCategory').DataTable();
        });
    </script>


    <!-- Template JS File -->
    <script src="../../assets/js/scripts.js"></script>
    <script src="../../assets/js/custom.js"></script>
</body>

</html>
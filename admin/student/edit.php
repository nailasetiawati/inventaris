<?php
include '../../config.php';
session_start();
if($_SESSION['status'] != 'login')
{
    header('location:/index.php');
}elseif($_SESSION['role'] != 'admin'){
    header('location:/user/home/index.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>Inventaris &mdash; Edit Siswa</title>

    <!-- General CSS Files -->
    <link rel="stylesheet" href="../../assets/modules/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../assets/modules/fontawesome/css/all.min.css">

    <!-- CSS Libraries -->
    <link rel="stylesheet" href="../../assets/modules/datatables/datatables.min.css">
    <link rel="stylesheet" href="../../assets/modules/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="../../assets/modules/select2/dist/css/select2.min.css">

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
                            <?php
                                if($_SESSION['image'] == null){
                                echo '<img alt="image" src="../../assets/img/avatar/avatar-1.png" class="rounded-circle mr-1">';
                                }else{
                                    echo '<img alt="image" src="../../assets/img/student/'.$_SESSION['image'].'" class="rounded-circle mr-1">';
                                }
                            ?>
                            <div class="d-sm-none d-lg-inline-block">Hi, <?php echo $_SESSION['name'] ?></div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a href="/profile/index.php" class="dropdown-item has-icon">
                                <i class="far fa-user"></i> Profile
                            </a>
                            <a href="/profile/edit.php" class="dropdown-item has-icon">
                                <i class="fas fa-cog"></i> Settings
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="../../logout.php" class="dropdown-item has-icon text-danger">
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
                        <li class="dropdown active mb-2">
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
                        <h1>Edit Siswa</h1>
                        <div class="section-header-breadcrumb">
                            <div class="breadcrumb-item active"><a href="/admin/dashboard/index.php">Dashboard</a></div>
                            <div class="breadcrumb-item"><a href="#">Siswa</a></div>
                            <div class="breadcrumb-item">Edit Siswa</div>
                        </div>
                    </div>
                    
                    <?php
                        $id = $_GET['id'];
                        $query = "SELECT * FROM users INNER JOIN classes ON users.class_id = classes.id WHERE nis=$id";
                        $sql = mysqli_query($koneksi, $query);
                        while($data = mysqli_fetch_array($sql)){
                    ?>
                    <div class="section-body">
                        <h2 class="section-title">Form Edit Siswa</h2>
                        <p class="section-lead">
                            Berikut adalah form edit siswa yang ada pada aplikasi inventaris!
                        </p>

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <form action="/admin/student/update.php" method="POST" enctype="multipart/form-data">
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="form-group mb-3">
                                                        <input type="hidden" name="id" value="<?=$data['nis'];?>">
                                                        <label for="nis">Nomor Induk Siswa</label>
                                                        <input type="number" name="nis" id="nis" class="form-control"
                                                            placeholder="Masukkan Nomor Induk Siswa...." value="<?=$data['nis'];?>">
                                                            <?php
                                                            if(isset($_GET['pesan'])){
                                                                $pesan = $_GET['pesan'];
                                                                if($pesan == 'null_nis'){
                                                                    echo '<p class="text-danger small"><b>Kolom nis harus diisi!</b></p>';
                                                                }elseif($pesan == 'string_nis'){
                                                                    echo '<p class="text-danger small"><b>Kolom nis hanya bisa diisi dengan angka!</b></p>';
                                                                }elseif($pesan == 'unique_nis'){
                                                                    echo '<p class="text-danger small"><b>Nis sudah digunakan oleh siswa lain!</b></p>';
                                                                }
                                                            }
                                                            ?>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group mb-3">
                                                        <label for="name">Nama Siswa</label>
                                                        <input type="text" name="name" id="name" class="form-control"
                                                            placeholder="Masukkan Nama Siswa...." value="<?=$data['name'];?>">
                                                            <?php
                                                            if(isset($_GET['pesan'])){
                                                                $pesan = $_GET['pesan'];
                                                                if($pesan == 'null_name'){
                                                                    echo '<p class="text-danger small"><b>Kolom nama harus diisi!</b></p>';
                                                                }
                                                            }
                                                            ?>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group mb-3">
                                                        <label for="selectClass">Kelas</label>
                                                        <select name="class_id" class="form-control select2">
                                                            <option value="<?=$data['class_id'];?>" selected><?=$data['class_name'];?></option>
                                                            <option value="">Silahkan Pilih Kelas....</option>
                                                            <option value="1" selected>X - RPL</option>
                                                            <option value="2">X - MM1</option>
                                                            <option value="3">X - MM2</option>
                                                            <option value="4">XI - RPL</option>
                                                            <option value="5">XI - MM1</option>
                                                            <?php
                                                                $query = "SELECT * FROM classes WHERE id!=10";
                                                                $sql = mysqli_query($koneksi, $query);
                                                                while($data1 = mysqli_fetch_array($sql)){
                                                            ?>
                                                            <option value="<?=$data1['id'];?>"><?=$data1['class_name'];?></option>
                                                            <?php } ?>
                                                        </select>
                                                        <?php
                                                            if(isset($_GET['pesan'])){
                                                                $pesan = $_GET['pesan'];
                                                                if($pesan == 'null_class'){
                                                                    echo '<p class="text-danger small"><b>Kolom kelas harus diisi!</b></p>';
                                                                }
                                                            }
                                                            ?>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group mb-3">
                                                        <label for="email">Email Siswa</label>
                                                        <input type="email" name="email" id="email" class="form-control"
                                                            placeholder="Masukkan Email Siswa...." value="<?=$data['email'];?>">
                                                            <?php
                                                            if(isset($_GET['pesan'])){
                                                                $pesan = $_GET['pesan'];
                                                                if($pesan == 'null_email'){
                                                                    echo '<p class="text-danger small"><b>Kolom email harus diisi!</b></p>';
                                                                }elseif($pesan == 'unique_email'){
                                                                    echo '<p class="text-danger small"><b>Email sudah digunakan siswa lain!</b></p>';
                                                                }
                                                            }
                                                            ?>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group mb-3">
                                                        <label for="password">Password</label>
                                                        <input type="password" name="password" id="password" class="form-control"
                                                            placeholder="Masukkan Password Baru Siswa....">
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group mb-3">
                                                        <label for="phone">No Telepon Siswa</label>
                                                        <input type="text" name="phone_number" id="phone"
                                                            class="form-control"
                                                            placeholder="Masukkan No Telepon Siswa...." value="<?=$data['phone_number'];?>">
                                                            <?php
                                                            if(isset($_GET['pesan'])){
                                                                $pesan = $_GET['pesan'];
                                                                if($pesan == 'null_phone'){
                                                                    echo '<p class="text-danger small"><b>Kolom nomor telepon harus diisi!</b></p>';
                                                                }
                                                            }
                                                            ?>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-group mb-3">
                                                        <label for="address">Alamat Siswa</label>
                                                        <textarea name="address" id="address" class="form-control"
                                                            cols="30" rows="10"
                                                            placeholder="Masukkan Alamat Siswa..."><?=$data['address'];?></textarea>
                                                            <?php
                                                            if(isset($_GET['pesan'])){
                                                                $pesan = $_GET['pesan'];
                                                                if($pesan == 'null_address'){
                                                                    echo '<p class="text-danger small"><b>Kolom alamat harus diisi!</b></p>';
                                                                }
                                                            }
                                                            ?>
                                                    </div>
                                                </div>
                                                <div class="col-6 mx-auto">
                                                    <div class="form-group mb-3 text-center">
                                                        <label for="image" class="col-12">Foto Profile</label>
                                                        <?php
                                                            if($data['image'] == null){
                                                                echo '<img src="/assets/img/avatar/avatar-1.png" class="mb-2 img-fluid img-preview rounded-circle" height="90px" width="90px">';
                                                            }else{
                                                                echo '<img src="../../assets/img/student/'.$data['image'].'" class="mb-2 img-fluid img-preview rounded-circle" height="90px" width="90px">';
                                                            }
                                                        ?>
                                                        <div class="custom-file">
                                                            <input type="file" class="custom-file-input"
                                                                id="image" name="image" onchange="previewImage()">
                                                            <label class="custom-file-label" for="customFile">Choose
                                                                file</label>
                                                                <?php
                                                            if(isset($_GET['pesan'])){
                                                                $pesan = $_GET['pesan'];
                                                                if($pesan == 'extension_failed'){
                                                                    echo '<p class="text-danger small"><b>Foto profile harus berupa gambar!</b></p>';
                                                                }elseif($pesan == 'size_failed'){
                                                                    echo '<p class="text-danger small"><b>Ukuran gambar tidak boleh lebih dari 10MB!</b></p>';
                                                                }
                                                            }
                                                            ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="float-right">
                                                <a href="/admin/student/index.php" class="btn btn-danger">Kembali</a>
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
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

    <script src="../../assets/modules/datatables/datatables.min.js"></script>
    <script src="../../assets/modules/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js"></script>
    <script src="../../assets/modules/datatables/Select-1.2.4/js/dataTables.select.min.js"></script>
    <script src="../../assets/modules/jquery-ui/jquery-ui.min.js"></script>
    <script src="../../assets/modules/select2/dist/js/select2.full.min.js"></script>
    <script src="../../assets/modules/jquery-selectric/jquery.selectric.min.js"></script>


    <!-- Page Specific JS File -->
    <script src="../../assets/js/page/modules-datatables.js"></script>
    <script>
            function previewImage(){
            const image = document.querySelector('#image');
            const imgPreview = document.querySelector('.img-preview');

            const oFReader = new FileReader();
            oFReader.readAsDataURL(image.files[0]);
            
            oFReader.onload = function(oFREvent){
                imgPreview.src = oFREvent.target.result;
            }
        }
</script>


    <!-- Template JS File -->
    <script src="../../assets/js/scripts.js"></script>
    <script src="../../assets/js/custom.js"></script>
</body>

</html>
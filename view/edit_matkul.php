<?php
session_start();

if (!isset($_SESSION['user']) || $_SESSION['user'] !== "login") {
  header("location:form_login.php");
  exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" />
    <style>
        .bg-body-tertiary-x {
            background-color: rgb(119, 32, 107);

        }

        .btn-primary-x {
            background-color: rgb(230, 196, 191);
        }

        .box {
            width: 200px;
            height: 200px;
        }

        .bg-purple {
            background-color: rgb(184, 136, 177);
        }

        .active-x {
            color: var(--bs-nav-pills-link-active-color);
            background-color: #e79de4;
        }

        .d-flex1 {
            float: right;
            background-color: rgb(230, 196, 191);
            border-radius: 6px;
        }

        /* td{
  background-color: rgb(184, 136, 177);
} */
        .bg-sidebar {
            background-color: rgb(184, 136, 177);
            height: max-content;
        }


        .bg-blue {
            background-color: rgb(119, 32, 107);
            height: 50px;
        }

        .close {
            padding-left: 1020px;
        }

        li a:hover {
            background-color: rgb(226, 241, 241)
        }

        /* .card{
      margin: 20px;
    } */
        body {
            background-color: #e2d8e1;
        }

        .img-top {
            float: left;
            align-content: end;
        }

        /* ukuran teks */
        p {
            font-weight: bold;
            font-size: small;
        }

        h3 {
            font-size: 25px;
            font-weight: bold;
        }

        .table {
            background-color: rgb(226, 241, 241);
        }


        .img-close {
            position: absolute;
            bottom: 5px;
            right: 5px;
            cursor: pointer;
        }
    </style>
</head>

<body>
    <nav class="navbar bg-body-tertiary-x">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="AMIKOM.png" alt="Logo" width="170" height="40" class="d-inline-block align-text-top">
            </a>
            <form class="d-flex1" role="search"></form>
            <a href="logout.php"><button class="btn btn-outline-success"
                    type="submit">Logout</button></a>
        </div>
    </nav>
    <main class=" d-flex">
        <div class="d-flex flex-column flex-shrink-0 p-3 bg-purple" style="width: 280px; height: 1000px">
            <center>
                <img src="profil.png" class="rounded-circle" alt="Cinque Terre" style="width: 100px; height: 100px;">
                <h6><?php echo $_SESSION["username"] ?></h6>
                <h7>NIM</h7>
            </center>
            <ul class="nav nav-pills flex-column mb-auto">
            <li>
                <center>
                <a href="view_profil.php"><button type="button" class="btn btn-success">Lihat Profil</button>
                <a href="view_edit_profil.php"> <button type="button" class="btn btn-primary btn-block">Edit Profil</button>
                </a>
                </center>
            </li>
      <br>
                <li class="nav-item">
                    <a href="view_dashboard.php" class="nav-link link-dark">
                        <img src="home.png" width="30" height="30" style="float: left">
                        <svg class="bi me-2" width="16" height="16">
                            <use xlink:href="#home"></use>
                        </svg>
                        <B>Dashboard</B>
                    </a>
                </li>
                <li>
                    <a href="add_rps.php" class="nav-link link-dark">
                        <svg class="bi me-2" width="16" height="16">
                            <use xlink:href="#speedometer2"></use>
                        </svg>
                        <img src="create.png" width="30" height="30" style="float: left">
                        <B>Create RPS</B>
                    </a>
                </li>
                <li>
                    <a href="List1.php" class="nav-link link-dark">
                        <img src="list.png" width="30" height="30" style="float: left">
                        <svg class="bi me-2" width="16" height="16">
                            <use xlink:href="#table"></use>
                        </svg>
                        <B>List</B>
                    </a>
                </li>
                <li>
                    <a href="view_jadwal.php" class="nav-link link-dark">
                        <svg class="bi me-2" width="16" height="16">
                            <use xlink:href="#grid"></use>
                        </svg>
                        <img src="jd-removebg-preview.png" width="30" height="30" style="float: left">
                        <B>Jadwal Kuliah</B>
                    </a>
                </li>
            </ul>
        </div>
        </div>
        <!-- kotak close -->
        <div class="container-fluid">
            <div class="container bg-sidebar mt-2">
                <nav class="navbar bg-blue">
                    <a class="close">
                        <a href="List1.php"><img
                                src="close-removebg-preview.png" width="50px" height="30px"></a>
                    </a>
                </nav>
                <!-- box list -->
                <div class="tab-content">
                    <div id="headerrps" class="container tab-pane active"><br>
                        <div class="container">
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title">Edit Mata Kuliah</h5>
                                </div>
                                <div class="card-body">
                                <?php
							include("connection.php");

							$id_data = $_GET['id_data'];
							$sql = mysqli_query($connect, "SELECT * FROM db_add WHERE id_data='$id_data'");
							while ($db_add= mysqli_fetch_array($sql)) {
							?>
                                    <form action="ctrl_editmk.php" method="POST">
                                    <input name="id_data" value="<?php echo $db_add['id_data']; ?>" hidden />
                                    <div class="my-3">
                                            <label for="text1" class="form-label">Program Studi</label>
                                            <select name="program_studi" class="form-select">
                                                <option selected>-</option>
                                                <option value="Teknik Informatika">Teknik Informatika</option>
                                                <option value="Manajemen Informatika">Manajemen Informatika</option>
                                                <option value="Ilmu Komunikasi">Ilmu Komunikasi</option>
                                                <option value="Sistem Informasi">Sistem Informasi</option>
                                                <option value="Geografi">Geografi</option>
                                                <option value="Hubungan Internasional">Hubungan Internasional</option>
                                                <option value="Kewirausahaan">Kewirausahaan</option>
                                                <option value="Informatika">Informatika</option>
                                            </select>
                                        </div>
                                        <div class="my-3">
                                            <label for="text1" class="form-label">Kode</label>
                                            <input class="form-control" id="text3" type="text" name="kode" value="<?php echo $db_add['kode']; ?>"/>
                                        </div>
                                        <div class="mb-3">
                                            <label for="text3" class="form-label">Mata Kuliah</label>
                                            <input class="form-control" id="text3" type="text" name="mata_kuliah" value="<?php echo $db_add['mata_kuliah']; ?>"/>
                                        </div>
                                        <div class="mb-3">
                                            <label for="sel1">Bobot SKS</label>
                                            <input class="form-control" id="text3" type="text" name="sks" value="<?php echo $db_add['sks']; ?>"/>
                                        </div>
                                        <div class="mb-3">
                                            <label for="text3" class="form-label">Deskripsi</label>
                                            <textarea type="text" class="input form-control" style="height: 125px;"
                                                rows="3" name="deskripsi_matkul"><?php echo $db_add['deskripsi_matkul']; ?></textarea>
                                        </div>
                                        <div class="mb-3">
                                            <label for="semester" class="form-label">Semester</label>
                                            <select name="semester" class="form-select" value="<?php echo $db_add['semester']; ?>">
                                                <option selected>-</option>
                                                <option value="Daring">Ganjil</option>
                                                <option value="Luring">Genap</option>
                                            </select>
                                        </div>
                                        <div class="d-flex justify-content-between">
                                            <div>
                                                <tr>
                                                    <!--bikin tombol daftar-->
                                                    <td colspan="2">
                                                        <input style="background-color: #4169E1;" class="btn btn-sm"
                                                            type="submit" value="Simpan" name="add" />

                                                        <!--bikin tombol kembali-->
                                                    <td></td>
                                                </tr>
                                            </div>
                                        </div>
                                    </form>
                                    <?php
                            }
                            ?>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- tutup box list-->
                </div>
                </nav>
            </div>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
                crossorigin="anonymous"></script>
</body>

</html>
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
  <title>Jadwal Kuliah</title>
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

    .img-close {
      position: absolute;
      bottom: 5px;
      right: 5px;
      cursor: pointer;
    }

    .a-x {
        margin-right: 10px;
    }

    .table-x{
    /* background-color: blueviolet; */
    --bs-table-border-color: var(--bs-border-color);
    width: 100%;
    margin-bottom: 1rem;
    vertical-align: top;
    border-color: var(--bs-table-border-color);
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
    <div class="d-flex flex-column flex-shrink-0 p-3 bg-purple" style="width: 280px; height: 800px;">
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
      <br>
      <div class="container bg-sidebar">
      <div class="row">
        <nav class="navbar bg-blue">
        <h4 class="text-white" style="margin-left: 10px;">Profil</h4>
        </nav>

        <!-- box list --> 
        <br>
        
        <nav class="navbar bg-secondary" style="margin-top: 10px; background-color: #bdbebd;">
        <h5 class="text-white" style="margin-left: 10px;">Data Dosen</h5>
        </nav>

        <div class="col-sm-12 col-md-6">
        <nav style="background-color: #D3D3D3;">
            <br>
        <h5 style="margin-left: 10px;">NIK</h5>
        <p style="margin-left: 10px;">12345678901234567890</p>
        <hr>

        <h5 style="margin-left: 10px;">Nama Lengkap</h5>
        <p style="margin-left: 10px;">Hastari Utama, M.Sc</p>
        <hr>

        <h5 style="margin-left: 10px;">Jenis Kelamin</h5>
        <p style="margin-left: 10px;">Laki - Laki</p>
        <hr>

        <h5 style="margin-left: 10px;">Agama</h5>
        <p style="margin-left: 10px;">Islam</p>
        <br>
        </div>

        <div class="col-sm-12 col-md-6">
        <nav style="background-color: #D3D3D3;">
            <br>
        <h5 style="margin-left: 10px;">Alamat</h5>
        <p style="margin-left: 10px;">Depok, Condong Catur, Sleman, Yogyakarta</p>
        <hr>

        <h5 style="margin-left: 10px;">No Handphone</h5>
        <p style="margin-left: 10px;">0812345678789</p>
        <hr>

        <h5 style="margin-left: 10px;">E-mail</h5>
        <p style="margin-left: 10px;">hastari@dosen.amikom.ac.id</p>
        <hr>

        <h5 style="margin-left: 10px;">Mata Kuliah yang Diampu</h5>
        <p style="margin-left: 10px;">10</p>
       
        <br>
        </div>
        
        </nav>
        </div>
          <!-- tutup box list-->
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
      crossorigin="anonymous"></script>
</body>

</html>
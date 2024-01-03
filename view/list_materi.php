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
    <div class="d-flex flex-column flex-shrink-0 p-3 bg-purple" style="width: 280px; height: 800px;">
      <center>
        <img src="profil.png" class="rounded-circle" alt="Cinque Terre" style="width: 100px; height: 100px;">
        <h6><?php echo $_SESSION["username"] ?></h6>
        <h7>NIM</h7>
      </center>
      <ul class="nav nav-pills flex-column mb-auto">
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
          <a href="view_dashboard.php.php" class="nav-link link-dark">
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
          <a href="List1.php" class="nav-link">
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
        <nav class="navbar bg-blue">
        <a href="List1.php" class="btn btn-light position-absolute top-0 start-0 ms-1 mt-2"><</a>
          <a href="add_materi.php" class="btn btn-light position-absolute top-0 start-0 ms-5 mt-2"><svg xmlns="http://www.w3.org/2000/svg" width="16"
              height="16" fill="currentColor" class="bi bi-plus-lg" viewBox="0 0 16 16">
              <path fill-rule="evenodd"
                d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2Z" />
            </svg></a>
        </nav>
        <br>
        <!-- box list -->
        <table class="table-x table-bordered border border-dark">
          <thead>
            <tr class="text-center text-light">
              <th>No</th>
              <th>Judul Materi</th>
              <th>Indikator</th>
              <th>Deskripsi</th>
              <th>Metode Pembelajaran</th>
              <th>Bobot Nilai%</th>
              <th colspan="3">Action</th>
            </tr>
          </thead>
          <tbody>
            <?php
            include("connection.php");
            $nomor = 1;
            $data = mysqli_query($connect, "SELECT * FROM db_add_mt");
            while ($db_add_mt = mysqli_fetch_array($data)) {
              ?>
              <?php echo "<tr>"; ?>
              <td scope="row">
                <?php echo $nomor++; ?>
              </td>
              <?php
              echo "<td>" . $db_add_mt['judul_materi'] . "</td>";
              echo "<td>" . $db_add_mt['indikator'] . "</td>";
              echo "<td>" . $db_add_mt['deskripsi'] . "</td>";
              echo "<td>" . $db_add_mt['metode_pembelajaran'] . "</td>";
              echo "<td>" . $db_add_mt['Penilaian'] . "</td>";
              echo "<td>"; ?>
              <a class="border btn btn-light" href="edit_materi.php?id_materi=<?php echo $db_add_mt['id_materi']; ?>"><i
                  class="bi bi-pencil-square"></i>
              </a><a class="border btn btn-light" href="delete_mt.php?id_materi=<?php echo $db_add_mt['id_materi']; ?>"><i
                  class="bi bi-trash"></i>
              </a>
              </td>
              </tr>
              <?php
            }
            ?>
          </tbody>
        </table>

          <!-- tutup box list-->
      </div>
      </nav>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
      crossorigin="anonymous"></script>
</body>

</html>
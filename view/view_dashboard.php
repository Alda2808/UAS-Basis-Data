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
  <title>Dashboard</title>
</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
  integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<style>
  body {
   background-color: #e2d8e1;
        }
  .bg-body-tertiary-x {
    background-color: rgb(119, 32, 107)
  }

  .btn-primary-x {
    background-color: rgb(230, 196, 191)
  }

  .box {
    background-color: rgb(208, 183, 205);
    width: 300px;
    height: 750px;
    margin-right: 0px;
  }

  .bg-purple {
    background-color: rgb(184, 136, 177);
    height: 5000px;
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
  .jarak{
    padding-top: 50px;
  }
  .card{
    width: 250px;
    height: 100PX;
    background-color: #b76cb5;
  }
  li a:hover{
      background-color: rgb(226, 241, 241)
    }
</style>

<body>
  
  <nav class="navbar bg-body-tertiary-x">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
        <img src="AMIKOM.png" alt="Logo" width="170" height="40" class="d-inline-block align-text-top">
      </a>
      <form class="d-flex1" role="search"></form>
      <a href="logout.php">
        <button class="btn btn-outline-success" type="submit" href="logout.php">Logout</button>
        </a>
    </div>
  </nav>
  <main class="d-flex flex">
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
      <a href="view_dashboard.php" class="nav-link">
        <img src="home.png" width="30" height="30" style="float: left">
        <svg class="bi me-2" width="16" height="16"><use xlink:href="#home"></use></svg>
        <B>Dashboard</B>
      </a>
    </li>
    <li>
      <a href="add_rps.php" class="nav-link link-dark">
        <svg class="bi me-2" width="16" height="16"><use xlink:href="#speedometer2"></use></svg>
        <img src="create.png" width="30" height="30" style="float: left">
        <B>Create RPS</B>
      </a>
    </li>
    <li>
      <a href="List1.php" class="nav-link link-dark">
        <img src="list.png" width="30" height="30" style="float: left">
        <svg class="bi me-2" width="16" height="16"><use xlink:href="#table"></use></svg>
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
    <center>
    <div class="col-2">
    
      <div class="card border-0 d-flex justify-content-center align-items-center pt-2 mx-5 mt-3">
          <button class="btn btn-light border-0 py-3"
              style="width: 100%; height: 100%;"> Kelas TI </button>
      </div><br>
      <div class="card border-0 d-flex justify-content-center align-items-center pt-2 mx-5 mt-3">
          <button class="btn btn-light border-0 py-3"
              style="width: 100%; height: 100%;"> Kelas TI </button>  
      </div><br>
      <div class="card border-0 d-flex justify-content-center align-items-center pt-2 mx-5 mt-3">
          <button class="btn btn-light border-0 py-3"
              style="width: 100%; height: 100%;"> Kelas TI </button>
         
      </div><br>
      <div class="card border-0 d-flex justify-content-center align-items-center pt-2 mx-5 mt-3">
        <button class="btn btn-light border-0 py-3"
            style="width: 100%; height: 100%;"> Kelas TI </button>
        </div><br>
        <div class="card border-0 d-flex justify-content-center align-items-center pt-2 mx-5 mt-3">
          <button class="btn btn-light border-0 py-3"
              style="width: 100%; height: 100%;"> Kelas TI </button>
         
      </div>
      </center>
    </div>
</div>
</main>
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
            crossorigin="anonymous"></script>
</body>

</html>
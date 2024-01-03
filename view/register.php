<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RPS AMIKOM</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <style>
        .btn :focus{
        background-color: blue;
        }
        
        body{
            background-color: #622398;
        }

        .box{
            background-color: beige;
            padding-top: 50px;
            padding-bottom: 20px;
            width: 350px;
            height: 500px;
            margin: 0;
            margin-left: auto;
            margin-right: 100px;
            margin-top: 0px;
            margin-bottom: 0px;
            border-radius: 25px;
        }

        .foto{
            width: 700px;
            height: 150px;
            margin-left: 100px;
            margin-top: 50%;
        }

        .mb-3{
            margin-left: 25px;
            margin-right: 25px;
        }

        .bg-success-subtle-x {
        background-color: rgb(201, 184, 216)
        }

        .col-sm-12 {
        flex: 0 0 auto;
        width: 100%;
        margin-left: 10%;
        margin-top: 50%;
        }

        .btn-primary-x:hover{
        background-color: rgb(203, 130, 88);
        border-radius: 50px;
        }

        .btn-primary-x{
        background-color: rgb(238, 161, 117);
        border-radius: 50px;
        }
        
        img{
        width: 30px;
        height: 30px;
        }

        .button:focus{
        background-color: aqua;
        }
        
    </style>
</head>
<body>
    <table>
    <tr>
        <td>
        <div class="container-fluid"></div>
        <div class="row">
            <div class="col-7">
            <img class="foto" src="logoasli.png">
            </div>
        </div>
         </td>
     <!-- Column awal -->
     <form action="proses_register.php" method="POST">
        <td>
        <div class="container text-center">
        <div>
            <div class="col-sm-12"> 
                <div class="box">
                    <h2>Register</h2>
                        <div class="mb-3 mt-3">
                        <label for="uname"><b>Name:</b></label>
                        <input type="text" class="form-control" placeholder="Name" name="nama">
                        </div>
                        <div class="mb-3">
                          <label for="email" class="form-label">Username:</label>
                          <input type="text" class="form-control" placeholder="Username" name="username">
                        </div>
                        <div class="mb-3">
                          <label for="pwd" class="form-label">Password:</label>
                          <input type="password" class="form-control" placeholder="Password" name="password">
                        </div>
                        <button type="submit" class="button btn btn-primary-x">
                            <img src="panah.png" alt="panah">
                        </button></a>
                        <div>
                        <span class="psw"><Datag>Have an account?</Datag> <a href="from_login.php">Login here</a></span>
                        </div>
                </div>
            </div>
        </div>
        </div>
        </td>
    </tr>
    </table>
     </from>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>
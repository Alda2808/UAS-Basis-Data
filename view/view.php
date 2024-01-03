<?php
session_start();

if (!isset($_SESSION['user']) || $_SESSION['user'] !== "login") {
    header("location:login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Page View</title>
    <link rel="icon"href="one.png" type="">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="../resources/css/style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.4.0/jspdf.umd.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.3.3/html2canvas.min.js"></script>


    <style>
        /* Set height of the grid so .sidenav can be 100% (adjust if needed) */
        .row.content {
            height: 1500px
        }

        /* Set gray background color and 100% height */
        .sidenav {
            background-color: #f1f1f1;
            height: 100%;
        }

        /* Set black background color, white text and some padding */
        footer {
            background-color: #555;
            color: white;
            padding: 15px;
        }

        /* On small screens, set height to 'auto' for sidenav and grid */
        @media screen and (max-width: 767px) {
            .sidenav {
                height: auto;
                padding: 15px;
            }

            .row.content {
                height: auto;
            }
        }

        th {
            text-align: center;
        }

        .btn-create {
            margin-bottom: 10px;
        }

        .no_doc_rps h6 {
            font-size: 10px;
        }

        .kop td {
            border: 1px solid #bdc3c7;
        }
    </style>
</head>

<body>

    <div class="container">
        <div class="row content">
            <br>
            <div class="container mt-3">
                <br>
                <table class="table-bordered text-center">
                    <tbody>
                        <tr>
                            <td colspan="8" style="border-bottom: 1px #bdc3c7 solid;">
                                <h1>RENCANA PEMBELAJARAN SEMESTER (RPS)</h1>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="8" style="padding: 1px;" class="no_doc_rps">
                                <h6 style="margin:0; padding: 0;">FM-PJM-011/Rev.00/25 Jan 2018</h6>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="8"><img src="logo.png" width="400"></td>
                        </tr>
                        <tr>
                            <td colspan="8">
                                <h3 style="margin:0; padding: 0;">MATA KULIAH : PERANCANGAN WEB 2 (DT170)</h3>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="8">
                                <h3 style="margin:0; padding: 0;">Program Studi: D3 Teknik Informatika</h3>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">No</td>
                            <td colspan="2">Tgl Berlaku</td>
                            <td colspan="1">Tgl Disusun</td>
                            <td colspan="2">Revisi</td>
                        </tr>
                        <tr>
                            <td colspan="2">RPS-DT-00</td>
                            <td colspan="2">2 Juni 2023</td>
                            <td colspan="1">2 April 2023</td>
                            <td colspan="2">0</td>
                        </tr>
                        <td colspan="8"> <br></td>
                        <tr>
                            <td colspan="2"><img
                                    src="https://upload.wikimedia.org/wikipedia/commons/3/3a/Tanda_Tangan_Greg_Moore.png"
                                    alt="" width="100"></td>
                            <td colspan="2"><img
                                    src="https://upload.wikimedia.org/wikipedia/commons/3/3a/Tanda_Tangan_Greg_Moore.png"
                                    alt="" width="100"></td>
                            <td colspan="1"><img
                                    src="https://upload.wikimedia.org/wikipedia/commons/3/3a/Tanda_Tangan_Greg_Moore.png"
                                    alt="" width="100"></td>
                            <td colspan="2"><img
                                    src="https://upload.wikimedia.org/wikipedia/commons/3/3a/Tanda_Tangan_Greg_Moore.png"
                                    alt="" width="100"></td>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">Disetujui oleh
                                <p>Dekan Ilmu Komputer</p>
                            </td>
                            <td colspan="2">Diperiksa oleh
                                <p>Kaprodi D3TI</p>
                            </td>
                            <td colspan="1">Disusun oleh
                                <p>Koordinator MK</p>
                            </td>
                            <td colspan="2">Dikendalikan oleh
                                <p>Sekprodi D3TI</p>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="8">
                                <h2 style="margin:0; padding: 0;">UNIVERSITAS AMIKOM YOGYAKARTA</h1>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="8">
                                <h2 style="margin:0; padding: 0;">YOGYAKARTA</h1>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="8">
                                <h2 style="margin:0; padding: 0;">2023</h1>
                            </td>
                        </tr>
                       
                        <tr>
                            <td colspan="8"><br></td>
                        </tr>
                        <tr>
                            <td colspan="3"><h4>Identitas</h4></td>
                            <td colspan="5"></td>
                        </tr>
                        <tr>
                            <th colspan="2">Mata Kuliah</th>
                            <td colspan="2">PERANCANGAN WEB</td>
                            <td colspan="1"><h5>Semester</h5></td>
                            <td colspan="2">Ganjil (3)</td>
                        </tr>
                        <tr>
                            <th colspan="2">Kode Mata Kuliah</th>
                            <td colspan="2">DT170</td>
                            <td colspan="1"><h5>Bobot SKS</h5></td>
                            <td colspan="2">2 Teori 2 Praktikum</td>
                        </tr>
                        <tr>
                            <th colspan="2">Deskripsi</th>
                            <td colspan="2">Mata kuliah ini bertujuan untuk mengajarkan mahasiswa tentang perancangan web yang efektif dan estetis. Mahasiswa akan belajar tentang prinsip-prinsip desain web, penggunaan alat-alat desain grafis, serta pengembangan situs web yang responsif untuk berbagai perangkat.</td>
                            <td colspan="1"><h5>Dosen Pengampu</h5></td>
                            <td colspan="2">Hastari Utama, M.Kom</td>
                        </tr>
                        <tr>
                            <td colspan="3">
                                <h4>Rencana Pelaksanaan Pembelajaran</h4>
                            </td>
                            <td colspan="8"></td>
                        </tr>
                        <tr>
                            <th width="30px" class="bg-body-secondary" scope="col">No</th>
                            <th width="300px" class="bg-body-secondary">Judul Materi</th>
                            <th width="300px" class="bg-body-secondary">Indikator</th>
                            <th width="300px" class="bg-body-secondary">Deskripsi</th>
                            <th width="300px" class="bg-body-secondary">Metode Pembelajaran</th>
                            <th width="300px" class="bg-body-secondary">Bobot Penilaian(%)</th>
                        </tr>
                        <tr>
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
                                echo "<td>" . $db_add_mt['metode_pembelajaran'] . "</td>"; ?>
                                <td colspan="2">
                                    <?php echo $db_add_mt['Penilaian'] ?>
                                </td>
                            </tr>
                            <?php
                            }
                            ?>
                        </tr>
                    </tbody>
                </table>
                <div class="card">
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <a href="javascript:void(0);" id="printButton" class="btn btn-primary">Cetak</a>

                    </div>
                </div>
                <footer class="footer">
                    <div class="container">
                        <div class="row">
                            <div class="col text-center">&copy; 2023 Alda Mevia 22.01.4935. All rights reserved.
                            </div>
                        </div>
                    </div>
                </footer>
                <script>
document.getElementById("printButton").addEventListener("click", function() {
    window.print();
});
</script>
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
                    integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
                    crossorigin="anonymous"></script>
</body>

</html>
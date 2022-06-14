<!DOCTYPE html>
<html lang="en-US">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>CMS Catty Pet Shop | Coreval List</title>
    <link rel="stylesheet" href="./toruskit-free/dist/css/toruskit.bundle.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/12f0b33110.js" crossorigin="anonymous"></script>
    <meta property="og:title" content="Catty Pet Shop">
    <meta property="og:description" content="Catty Pet Shop is a trusted pet store since 2019 that excel in grooming and training services. We also sell pet products.">
    <meta property="og:image" content="">
    <link rel="stylesheet" href="./styles/style.css" type="text/css">
    <link rel="apple-touch-icon" sizes="57x57" href="./images/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="./images/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="./images/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="./images/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="./images/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="./images/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="./images/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="./images/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="./images/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="./images/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="./images/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./images/favicon/favicon-16x16.png">
    <link rel="icon" href="./images/favicon/favicon-32x32.png">
    <link rel="manifest" href="/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <!-- footer css -->
    <link rel="stylesheet" href="css/sb-admin.css">
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <script>
        function konfirmasi_hapus() {
            if (confirm('Yakin hapus data ?'))
                return true;
            else
                return false;
        }
    </script>
</head>

<body>
    <?php
    session_start();

    // implement later
    // if (empty($_SESSION['isLoggedin']))
    // 	header("location: ../helper/logout.php");

    require_once "../helper/koneksi.php";
    ?>

    <div class="container mt-3">
        <h2>Coreval LIST</h2>
        <a href="../form_tambah_coreval.php"><button type="button" class="btn btn-primary">Tambah </button></a>

        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Source</th>
                    <th>Flag</th>
                    <th>Update</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "";
                $sql = "select * from tb_coreval order by id_coreval";

                $result = mysqli_query($conn, $sql);

                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $id_coreval = $row['id_coreval'];
                        $title_coreval = $row['title_coreval'];
                        $desc_coreval = $row['desc_coreval'];
                        $src_coreval = $row['src_coreval'];
                        $flag = $row['flag_active'];
                ?>

                        <tr>
                            <td><?php echo $id_coreval; ?></td>
                            <td><?php echo $title_coreval; ?></td>
                            <td><?php echo $desc_coreval; ?></td>
                            <td><?php echo $src_coreval; ?></td>
                            <td>
                                <?php if ($flag == 1) : ?>
                                    active
                                <?php else : ?>
                                    not active
                                <?php endif; ?>
                            </td>
                            <td><a href="../form_ubah_coreval.php?id=<?php echo $id_coreval; ?>">Update</a></td>
                            <td><a onClick="return konfirmasi_hapus();" href="../helper/hapus_coreval.php?id=<?php echo $id_coreval; ?>">Delete </a> </td>
                        </tr>
                <?php
                    }
                }
                ?>
            </tbody>
        </table>
    </div>
</body>

</html>
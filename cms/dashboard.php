<!DOCTYPE html>
<html lang="en-US">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>CMS Catty Pet Shop | Dashboard</title>
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
</head>

<body>
    <?php session_start();
    if (!isset($_SESSION['username'])) {
        header("location: index.php");
    }
    ?>

    <div id="wrapper">
        <nav class="navbar navbar-dark bg-dark navbar-fixed-top" role="navigation" style="margin-bottom: 0;">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="dashboard.php">CATTY PETSHOP DASHBOARD</a>
                <button class="btn btn-info" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions">
                    Toggle menu
                    <i class="fa-solid fa-right-long"></i>
                </button>
                <div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="offcanvasWithBothOptions" aria-labelledby="offcanvasWithBothOptionsLabel">
                    <div class="offcanvas-header">
                        <h4 class="offcanvas-title" id="offcanvasWithBothOptionsLabel">CMS Dashboard Menu</h4>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <div class="sidebar-collapse">
                            <ul class="vstack gap-3 nav" id="side-menu">
                                <li>
                                    <a href="dashboard.php"><i class="fa-solid fa-table-columns fa-2xl"></i>&nbsp;&nbsp;Dashboard</a>
                                </li>
                                <li>
                                    <a href="./list/aboutus_list.php" target="frameContent"><i class="fa-solid fa-user fa-2xl"></i>&nbsp;&nbsp;User Member</a>
                                </li>
                                <li>
                                    <a href="./list/video_list.php" target="frameContent"><i class="fa-solid fa-video fa-2xl"></i>&nbsp;&nbsp;Video List</a>
                                </li>
                                <li>
                                    <a href="./list/coreval_list.php" target="frameContent"><i class="fa-solid fa-bullseye fa-2xl"></i>&nbsp;&nbsp;Core Value List</a>
                                </li>
                                <li>
                                    <a href="./list/gallery_list.php" target="frameContent"><i class="fa-solid fa-image fa-2xl"></i>&nbsp;&nbsp;Gallery List</a>
                                </li>
                                <li>
                                    <a href="./list/aboutus_list.php" target="frameContent"><i class="fa-solid fa-address-card fa-2xl"></i>&nbsp;&nbsp;About Us List</a>
                                </li>
                                <li>
                                    <a href="./list/products_list.php" target="frameContent"><i class="fa-solid fa-bag-shopping fa-2xl"></i>&nbsp;&nbsp;Products List</a>
                                </li>
                                <li>
                                    <a href="./list/services_list.php" target="frameContent"><i class="fa-solid fa-bell-concierge fa-2xl"></i>&nbsp;&nbsp;Services List</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.navbar-header -->
            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="btn btn-primary dropdown-toggle bg-primary" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" href="#" aria-expanded="false">
                        Hello, <?php echo $_SESSION['username']; ?>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li>
                            <a href="#" class="text-black">User Profile</a>
                        </li>
                        <li>
                            <a href="#" class="text-black">Change Password</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="./helper/logout.php" class="text-black">Logout</a>
                        </li>
                    </ul> <!-- /.dropdown-user -->
                </li> <!-- /.dropdown -->
            </ul> <!-- /.navbar-top-links -->
        </nav>
    </div>
</body>
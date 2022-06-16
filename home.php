<!DOCTYPE html>
<html lang="en-US">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Catty Pet Shop | Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="./toruskit-free/dist/css/toruskit.bundle.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
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
    <!-- footer css and js -->
    <link rel="stylesheet" href="./styles/footer.css">
    <script defer src="footer.js"></script>
</head>

<body>
    <?php include "cms/helper/koneksi.php"; ?>
    <!-- Navigation bar -->
    <header>
        <section class="navbar">
            <nav class="navbar navbar-expand-lg navbar-light fixed-top">
                <div class="container-fluid">
                    <a class="navbar-brand" href="/">
                        <img class="d-inline-block img-logo" src="./images/logo/pet-shop-icon.svg" alt="Catty Pet Shop logo" title="Catty Pet Shop, your pet wellnes is our priority.">
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="./home.php">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="./about-us.php">About</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="./products.php">Products</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="./services.php">Services</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="#footer">Contact</a>
                            </li>
                        </ul>
                        <div class="d-flex flex-wrap rounded">
                            <a href="./cms/index.php" class="btn btn-master">
                                Login
                            </a>
                        </div>
                    </div>
                </div>
            </nav>
        </section>
    </header>
    <!-- END Navigation Bar -->

    <!-- Hero Section -->
    <main>
        <section class="banner">
            <div class="position-relative has-bg-img">
                <h1 class="typing-effect hero-title text-wrap z-index-1 position-absolute bg-transparent">
                    We look after your pets with our best staffs
                </h1>
                <div class="wrapper">
                    <h3 class="hero-description z-index-1 position-absolute bg-transparent">
                        Your pet stays in a sitter's home or yours, <br>
                        whether you're traveling or just out for the day.
                    </h3>
                </div>
                <video autoplay muted loop>
                    <?php
                    $sSQL = "SELECT * FROM tb_video";
                    $result = mysqli_query($conn, $sSQL);

                    if (mysqli_num_rows($result) > 0) {
                        $row = mysqli_fetch_assoc($result);
                        $file_video = "cms/video/" . trim($row['file_video']);
                    }
                    mysqli_free_result($result);
                    ?>
                    <source src="<?= $file_video; ?>" type="video/mp4">
                    Sorry, your browser does not support video playback.
                    Please upgrade your browser to the latest version immediately.
                    Thank you
                </video>
            </div>
        </section>
        <!-- END Hero Section -->

        <!-- Value Section -->
        <section class="container value-section" id="valueSection">
            <div class="row">
                <p class="h1 text-center">
                    Our Core Value
                </p>
            </div>
            <div class="row">

                <?php
                $sSQL = "SELECT * FROM tb_coreval";
                $result = mysqli_query($conn, $sSQL);
                $i = 0;

                if (mysqli_num_rows($result) > 0) :
                    while ($row = mysqli_fetch_assoc($result)) :
                        $i++;
                        if ($row['flag_active'] != 0) : // Check if active, delete this (and the first endif below) if flag active is not used
                            $title = $row['title_coreval'];
                            $src = $row['src_coreval'];
                            $desc = $row['desc_coreval'];
                ?>
                            <?php if ($i % 2 === 1) : ?>
                                <div class="value-playful d-flex justify-content-start flex-wrap">
                                <?php else : ?>
                                    <div class="value-playful d-flex justify-content-end flex-wrap">
                                    <?php endif ?>
                                    <div>
                                        <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
                                        <?php echo '<lottie-player src="' . $src . '" background="transparent" speed="1" style="width: 250px; height: 250px;" loop autoplay></lottie-player>' ?>
                                    </div>
                                    <div class="col-md-3 align-self-center ms-6">
                                        <h3 class="value-title"><?php echo $title ?></h3>
                                        <p class="value-desc"><?php echo $desc ?></p>
                                    </div>
                                    </div>
                        <?php
                        endif;
                    endwhile;
                endif;
                        ?>

                                </div>
                                <div class="button d-flex justify-content-center">
                                    <button type="button" class="btn rounded-pill btn-lg my-5 btn-master">
                                        <script src="https://cdn.lordicon.com/lusqsztk.js"></script>
                                        <lord-icon src="https://cdn.lordicon.com/cnyeuzxc.json" trigger="loop" style="width:32px;height:32px">
                                        </lord-icon>
                                        Reserve Now
                                    </button>
                                </div>
        </section>
        <!-- END Value Section -->

        <!-- Gallery carousel section -->
        <section class="container gallery-section">
            <div id="gallery-carousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <?php
                    $sSQL = "SELECT * FROM tb_gallery ORDER BY rand()";
                    $result = mysqli_query($conn, $sSQL);
                    $firstRecord = 0;

                    if (mysqli_num_rows($result) > 0) :
                        while ($row = mysqli_fetch_assoc($result)) :
                            $firstRecord++;
                    ?>
                            <?php if ($firstRecord === 1) : ?>
                                <div class="carousel-item active">
                                <?php else : ?>
                                    <div class="carousel-item">
                                    <?php endif; ?>
                                    <img src=<?= $row["img_gallery"] ?> alt="" class="d-block w-100 mx-auto rounded">
                                    </div>
                            <?php
                        endwhile;
                    endif;
                            ?>


                            <!-- <div class="carousel-item">
                        <img src="https://images.unsplash.com/photo-1561037404-61cd46aa615b?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80" alt="Catty raising her hand" class="d-block w-100 mx-auto rounded">
                    </div>
                    <div class="carousel-item">
                        <img src="https://images.unsplash.com/photo-1544568100-847a948585b9?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1074&q=80" alt="Dog with nature view" class="d-block w-100 mx-auto rounded">
                    </div>
                    <div class="carousel-item">
                        <img src="https://images.unsplash.com/photo-1508675801627-066ac4346a61?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1165&q=80" alt="Boy hugging a puppy" class="d-block w-100 mx-auto rounded">
                    </div>
                    <div class="carousel-item">
                        <img src="https://images.unsplash.com/photo-1592237163215-c97b487faeb5?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80" alt="A group of gold fish in an aquarium" class="d-block w-100 mx-auto rounded">
                    </div>
                    <div class="carousel-item">
                        <img src="https://images.unsplash.com/photo-1592194996308-7b43878e84a6?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=687&q=80" alt="Cat raising hand" class="d-block w-100 mx-auto rounded">
                    </div>
                    <div class="carousel-item">
                        <img src="https://images.unsplash.com/photo-1591946614720-90a587da4a36?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=687&q=80" alt="Golden retriever biting a doll with cute pose" class="d-block w-100 mx-auto rounded">
                    </div>
                    <div class="carousel-item">
                        <img src="https://images.unsplash.com/photo-1560743641-3914f2c45636?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=687&q=80" alt="Two dogs running" class="d-block w-100 mx-auto rounded">
                    </div>
                    <div class="carousel-item">
                        <img src="https://images.unsplash.com/photo-1482066490729-6f26115b60dc?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1114&q=80" alt="Cat sleeping" class="d-block w-100 mx-auto rounded">
                    </div>
                    <div class="carousel-item">
                        <img src="https://images.unsplash.com/photo-1452857297128-d9c29adba80b?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1074&q=80" alt="Cute rabbit" class="d-block w-100 mx-auto rounded">
                    </div> -->
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#gallery-carousel" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#gallery-carousel" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                                <h2 class="row d-flex justify-content-around gallery-heading" id="our-gallery">Our Gallery</h2>
                </div>
        </section>
        <footer id="footer">
            <section class="footer">
                <div class="container-fluid p-5">
                    <img src="images/logo/pet-shop-icon.png" width="150px" alt="icon">
                    <div class="footer-body mt-5 d-lg-flex">
                        <div class="footer-text mx-5">
                            <div class="lh-1">
                                <p><b>Contact</b></p>
                                <p>contact@gmail.com</p>
                                <p>1234-5678</p>
                            </div>
                            <div class="lh-1 my-5">
                                <p><b>Open Hours</b></p>
                                <p>Mon - Sat: 10am - 4pm</p>
                                <p>Sun: Closed</p>
                            </div>
                            <div class="lh-1 my-5">
                                <p><b>Location</b></p>
                                <p>Jl. Ancol Barat IV</p>
                                <p>Kota Jkt. Utara</p>
                            </div>
                            <hr class="separator d-block d-lg-none" />
                        </div>

                        <div class="footer-form mx-5">
                            <div class="form-title">
                                <b>Subscribe to our Newsletter:</b>
                            </div>
                            <form class="my-2" id="form">
                                <div class="mb-3">
                                    <label for="input-first-name" class="form-label">Name</label>
                                    <input type="text" class="form-control form-control-sm" id="input-first-name" required>
                                </div>
                                <div class="mb-3">
                                    <label for="input-last-name" class="form-label">Last Name</label>
                                    <input type="text" class="form-control form-control-sm" id="input-last-name" required>
                                </div>
                                <div class="mb-3">
                                    <label for="input-email" class="form-label">Email address</label>
                                    <input type="email" class="form-control form-control-sm" id="input-email" required aria-describedby="emailHelp">
                                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.
                                    </div>
                                </div>
                                <button type="submit" class="btn" id="form-submit-btn">Submit</button>
                            </form>
                            <hr class="separator d-block d-lg-none" />
                        </div>

                        <div class="footer-map mx-5">
                            <p><b>Visit Us:</b></p>
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3967.053538466923!2d106.81152172168647!3d-6.123497291111996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6a1de392f0c16d%3A0x9950e4f41736b48a!2sJl.%20Ancol%20Barat%20IV%2C%20Ancol%2C%20Kec.%20Pademangan%2C%20Kota%20Jkt%20Utara%2C%20Daerah%20Khusus%20Ibukota%20Jakarta!5e0!3m2!1sid!2sid!4v1648718783935!5m2!1sid!2sid" width="300" height="225" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
            </section>
            <section class="copyright">
                <div class="container-fluid text-center">
                    <hr class="mx-5" />
                    <p class="lead">Copyright &copy; 2022 Alpha-byte</p>
                </div>
            </section>
        </footer>
    </main>
</body>

</html>
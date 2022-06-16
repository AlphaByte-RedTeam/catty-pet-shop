<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Catty Pet Shop | Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="./toruskit-free/dist/css/toruskit.bundle.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
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
                                <a class="nav-link" aria-current="page" href="./home.php">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="./about-us.php">About</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="./products.php">Products</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="./services.php">Services</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="#footer">Contact</a>
                            </li>
                        </ul>
                        <div class="d-flex flex-wrap rounded">
                            <a href="#" class="btn btn-master">
                                Register
                            </a>
                        </div>
                    </div>
                </div>
            </nav>
        </section>
    </header>
    <!-- END Navigation Bar -->

    <!-- Main Content -->
    <main>
        <section class="product">
            <div class="container">
                <h2 class="product-category">Product</h2>
                <button class="pre-btn"><img src="images/product/arrow.png" alt=""></button>
                <button class="nxt-btn"><img src="images/product/arrow.png" alt=""></button>
                <div class="product-container">

                    <?php
                    $sSQL = "SELECT * FROM tb_product";
                    $result = mysqli_query($conn, $sSQL);

                    if (mysqli_num_rows($result) > 0) :
                        while ($row = mysqli_fetch_assoc($result)) :
                            if ($row['flag_active'] != 0) : // Check if active, delete this (and the first endif below) if flag active is not used
                                $disc = $row['product_disc'];
                                $image = $row['product_img'];
                                $brand = $row['product_name'];
                                $desc = $row['product_desc'];
                                $price = $row['product_price'];
                    ?>
                                <div class="product-card">
                                    <div class="product-image">
                                        <span class="discount-tag"><?php echo $disc; ?> off</span>
                                        <?php echo '<img src="images/pet-food/' . $image . '" class="product-thumb" alt="">' ?>
                                        <button class="card-btn">add to wishlist</button>
                                    </div>
                                    <div class="product-info">
                                        <h2 class="product-brand"><?php echo $brand; ?></h2>
                                        <p class="product-short-description"><?php echo $desc; ?></p>
                                        <span class="price"><?php echo $price; ?></span><span class="actual-price">$40</span>
                                    </div>
                                </div>
                    <?php
                            endif;
                        endwhile;
                    endif;
                    ?>

                    <!-- <div class="product-card">
                        <div class="product-image">
                            <span class="discount-tag">50% off</span>
                            <img src="images/pet-food/premium-food.jpg" class="product-thumb" alt="">
                            <button class="card-btn">add to wishlist</button>
                        </div>
                        <div class="product-info">
                            <h2 class="product-brand">brand</h2>
                            <p class="product-short-description">Product 1</p>
                            <span class="price">$20</span><span class="actual-price">$40</span>
                        </div>
                    </div>
                    <div class="product-card">
                        <div class="product-image">
                            <span class="discount-tag">50% off</span>
                            <img src="images/pet-food/wet-food.jpg" class="product-thumb" alt="">
                            <button class="card-btn">add to wishlist</button>
                        </div>
                        <div class="product-info">
                            <h2 class="product-brand">brand</h2>
                            <p class="product-short-description">Product 2</p>
                            <span class="price">$20</span><span class="actual-price">$40</span>
                        </div>
                    </div>
                    <div class="product-card">
                        <div class="product-image">
                            <span class="discount-tag">50% off</span>
                            <img src="images/pet-food/dry-food.jpg" class="product-thumb" alt="">
                            <button class="card-btn">add to wishlist</button>
                        </div>
                        <div class="product-info">
                            <h2 class="product-brand">brand</h2>
                            <p class="product-short-description">Product 3</p>
                            <span class="price">$20</span><span class="actual-price">$40</span>
                        </div>
                    </div> -->
                </div>
        </section>
        <script src="script.js"></script>
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
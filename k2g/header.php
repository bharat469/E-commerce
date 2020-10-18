<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>K2G</title>
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <!-- owl craosel -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css ">
    <!-- font Awosome -->
    <script src="https://kit.fontawesome.com/aa1fa45606.js" crossorigin="anonymous"></script>
    <!-- css -->
    <link rel="stylesheet" href="style.css">

    <?php
//require MysQl Connection
include('functions.php')
    ?>
</head>

<body>

    <!-- start header -->
    <header id="header">
        <div class="strip d-flex justify-content-between px-4 py-1 bg-light">
            <p class="font-rale fontsize-12 text-black-50 m-0">

                Garden colony kharar 140301 , phone number-7488976590
            </p>
            <div class="font-rale font-size-14">
                <a href="#" class="px-4x  border-right border-left text-dark">Login</a>
                <a href="cart.php" class="px-3 border-right text-dark">Wishlist</a>
            </div>
        </div>

        <!-- navbar -->
        <nav class="navbar navbar-expand-lg navbar-dark color-second-bg" style="background: #00A5c4;">
            <a class="navbar-brand font-rubik " href="index.php"
                style="font-size: 2rem; border: 2px solid snow;  padding: 12px 12px; border-radius: 12px;"><span style="
                color: #011627">K</span>2<span style="color:#d90429;font-weight:600 ;">G</span></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav m-auto font-rubik">
                    <li class="nav-item active">
                        <a class="nav-link" href="header.php">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#top-sale">On Sale</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#special-price">category</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Products
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Iphone Services
                                <hr>
                            </a>
                            <a class="dropdown-item" href="#">Android Services
                                <hr> </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#blogs">Other Accessories
                                <hr> </a>
                        </div>
                    <li class="nav-item">
                        <a class="nav-link" href="#footer">Contact us</a>
                    </li>
                    </li>

                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0 color-yellow-bg" type="submit">Search</button>
                </form>
                <form action="#" class="font-size-14 font-rale">
                    <a href="cart.php" class="py-2 rounded-pill color-primary-bg">
                        <span class="font-size-16 px-2 text-white"><i class="fas fa-shopping-cart"></i></span>
                        <span class="px-3 py-2 rounded-pill text-dark bg-light "><?php echo count($product->getData('cart')); ?></span>
                    </a>
                </form>
            </div>
        </nav>
        <!-- navbar end -->

    </header>

    <!-- end header -->

    <!-- main site -->
    <main id="main-site">
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Urievent</title>
    <link rel="shortcut icon" type="image/png" href="/favicon.png" />
    <link rel="stylesheet" href="/public/css/index.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-expand-md">
        <div class="container-fluid">
            <a class="navbar-brand text-primary" href="">Urievent</a>

            <!-- buat togle menu bar -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- end of buat togle menu bar -->

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Advertise With Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Program</a>
                    </li>
                    <!-- <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Dropdown
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li> -->
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" input type="hidden" placeholder="Search" aria-label="Search">
                        <!-- logic : if 'button = submit' set input type="search" bisa pake js-->
                        <!-- bahan belajar : https://mdbootstrap.com/docs/standard/forms/search/ -->
                        <button class="btn btn-outline" type="submit">Search <img src="public\searchIcon.svg" alt="searchIcon"></button>
                    </form>
                </ul>

                <ul class="navbar-nav mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Sign In</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Upload</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- INTRO BOX -->
    <div class="bg-light">
        <div class="text-light">
            <p> dad</p>
        </div>
        <div class="mx-5 my-5 bg-light">
            <h2>Website No.1<br>
                Organisasi & Komunitas Indonesia</h2>
            <p>
                Cari Media Partner, Sponsorship, Vendor, Venue <br>
                UriEvent - Your Event’s Needs Here
            </p>
        </div>
        <img src="" alt="">
    </div>
    <!-- END OF INTRO BOX -->

    <!-- WEBSITE INFO -->
    <div>
        <div class="text-center fs-2 mt-4 fw-bolder">
            <p>
                Website No.1 Organisasi & Komunitas Indonesia
            </p>

        </div>
        <div class="p-3 m-2 d-flex justify-content-center">
            <div class="row mx-2">
                <div class="card text-dark bg-light mb-3 mx-3" style="max-width: 18rem;">
                    <div class="card-body">
                        <h4>Medpart</h4>
                        <p class="card-text">Temukan 2000+ Media Partner untuk dukung eventmu. Kamu bisa upload dan promosi organisasimu juga, lho!</p>
                    </div>
                </div>
                <div class="card text-dark bg-light mb-3 mx-3" style="max-width: 18rem;">
                    <div class="card-body">
                        <h4>Sponsorship</h4>
                        <p class="card-text">Temukan 2000+ Media Partner untuk dukung eventmu. Kamu bisa upload dan promosi organisasimu juga, lho!</p>
                    </div>
                </div>
                <div class="card text-dark bg-light mb-3 mx-3" style="max-width: 18rem;">
                    <div class="card-body">
                        <h4>Vendor</h4>
                        <p class="card-text">Temukan 2000+ Media Partner untuk dukung eventmu. Kamu bisa upload dan promosi organisasimu juga, lho!</p>
                    </div>
                </div>
                <div class="card text-dark bg-light mb-3 mx-3" style="max-width: 18rem;">
                    <div class="card-body">
                        <h4>Venue</h4>
                        <p class="card-text">Temukan 2000+ Media Partner untuk dukung eventmu. Kamu bisa upload dan promosi organisasimu juga, lho!</p>
                    </div>
                </div>
            </div>

            <!-- <div class=" bg-light m-2 ">
                <img src="" alt="">
                <h4>MedPart</h4>
                <p>Temukan 2000+ Media Partner untuk dukung eventmu. Kamu bisa upload dan promosi organisasimu juga, lho!</p>
            </div>
            <div class=" bg-light m-2">
                <img src="" alt="">
                <h4>Sponsorship</h4>
                <p>Temukan 2000+ Media Partner untuk dukung eventmu. Kamu bisa upload dan promosi organisasimu juga, lho!</p>
            </div>
            <div class=" bg-light m-2">
                <img src="" alt="">
                <h4>Vendor</h4>
                <p>Temukan 2000+ Media Partner untuk dukung eventmu. Kamu bisa upload dan promosi organisasimu juga, lho!</p>
            </div>
            <div class=" bg-light m-2">
                <img src="" alt="">
                <h4>Venue</h4>
                <p>Temukan 2000+ Media Partner untuk dukung eventmu. Kamu bisa upload dan promosi organisasimu juga, lho!</p>
            </div> -->


        </div>
    </div>

    <!-- END OF WEBSITE INFO -->

    <!-- footer -->
    <footer class="p-3 mb-2 text-white d-flex justify-content-center" style="background-color: #161625;">
        Copyright © 2022 UriEvent. All Rights Reserved
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>
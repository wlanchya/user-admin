<?php include 'config.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="X-UA-Compatible" content="IE=edge">
    <meta name="viewport"content="width=device-width, initial scale=1.0">
    <title>MyApp</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fontawesome/css/all.css">
</head>
<body>
    <div class="container">
        <nav class="navbar navbar-expand-sm navbar-light bg-light">
            <div class="container-fluid">
                <a href="navbar-brand" href="#">MyApp</a>
                <button class="navbar-toggler" type="button" data-bstoggler="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupporttedContent"
                aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSuportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                    </ul>
                    <?php
                        if (!isset($_SESSION['username'])) {
                    ?>
                    <a class="nav-link btn-primary btn-sm dflex justify-content-end" style="color:
                    white;" aria-current="page" href="login.php">Login</a>

                    <?php } else { ?>
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdowntoggle" type="button"
                            id="dropdownMenuButton1"data-bstoggle ="dropdown"aria-expanded="false">
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                <li><a class="dropdown-item" href="admin">Dashboard Admin</a></li>
                                <li><a class="dropdown-item" href="logout.php">Logout</li>
                            </ul>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </nav>

        <style>
            .carousel-item img {
                opacity: 0.5;
                min-height: 550px;
                max-height: 550px;
            }
        </style>
        <div class="row mt-3 justify-content-center">
            <div id="carouselExampleDark" class="caraousel caraousel-dark slide" data-bs-ride="caraousel">
                <div class="caraousel-indicators">
                    <button type="button" data-bs-target="#caraouselExampleDark" data-bs-slide-to="0"
                    class="active"aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#caraouselExampleDark" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#caraouselExampleDark" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
                </div>
                <div class="caraousel-liner">
                    <?php
                    $panggil = $koneksi->query("SELECT * FROM hero limit 3");
                    while ($row = $panggil->fetch_assoc()) {
                        ?>
                    <div class="caraousel-item">
                        <?php if ($row['status'] == 'aktif')
                        {
                            echo'active';
                        }
                        ?>" data-bsinterval ="4000"
                        <img src="assets/omg/<?= $row['gambar']; ?>" class ="d-block w-100" alt="...">
                        <div class="caraousel-caption d-none d-none d-mdblock">
                            <h2><?= $row['judul']; ?></h2>
                            <p><?= $row['subjudul']; ?></p>
                        </div>
                    </div>
                    <?php } ?>
                </div>
                <button class="caraousel-control-prev" type="button" data-bs-target="#caraouselExampleDark"
                data-bs-slide="prev">
                    <span class="caraosel-control-prev-icon" aria-hidden="true"></span>
                    <span clas="visually-hidden">Previous</span>                    
                </button>
                <button class="caraousel-control-next" type="button" data-bs-target="#caraouselExampleDark"
                data-bs-slide="next">
                    <span class="caraousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
</body>
</html>
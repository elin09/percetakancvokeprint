<?php
session_start();

if (!isset($_SESSION["login"])) {
    header("Location: ../auth/index.php");
    exit;
}
?>


<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Oke Print | Dashboard</title>


    <!-- Bootstrap core CSS -->
    <link href="../assets/style/dashboard/bootstrap.min.css" rel="stylesheet">
    </style>


    <!-- Custom styles for this template -->
    <link href="../assets/style/dashboard/dashboard.css" rel="stylesheet">


    <link rel="stylesheet" type="text/css" href="https://unpkg.com/trix@2.0.0/dist/trix.css">
    <script type="text/javascript" src="https://unpkg.com/trix@2.0.0/dist/trix.umd.min.js"></script>
</head>

<style>
    trix-toolbar [data-trix-button-group='file-tools'] {
        display: none
    }
</style>

<body>

    <header class="navbar navbar-dark sticky-top bg-primary flex-md-nowrap p-0 mb-2 shadow">
        <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#">Oke Print</a>
        <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <input class="form-control form-control-primary w-100" type="text" placeholder="Search" aria-label="Search">
        <div class="navbar-nav bg-danger">
            <div class="nav-item text-nowrap">
                <form action="../auth/logout.php" method="post">
                    <button type="submit" class="nav-link px-3 py-3 bg-danger border-0">Logout <span data-feather="log-out"></span>
                    </button>
                </form>
            </div>
        </div>
    </header>


    <div class="container-fluid">
        <div class="row">
            <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
                <div class="position-sticky pt-3">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="../dashboard/index.php">
                                <span data-feather="home"></span>
                                Dashboard
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../dashboard/produk/index.php">
                                <span data-feather="file-text"></span>
                                My Products
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>

            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Welcome Back</h1>
                </div>

            </main>
        </div>
    </div>


    <script src="../assets/js/bootstrap.bundle.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous">
    </script>
    <script src="../assets/js/dashboard.js"></script>
</body>

</html>



<a href="../auth/logout.php">hello</a>
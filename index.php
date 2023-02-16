<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-tofit=no">
    <title>Maxi Car Motorsport</title>
    <link rel="stylesheet" href="./assets/vendors/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/vendors/fontawesome/css/all.min.css">
    <link rel="icon" href="assets/images/logo_car_with_bg.png" />
    <?php include 'connxion.php' ?>
</head>

<body>
    <header>
        <div class="text-center" style="background-color: white;">
            <img src="./assets/images/logo_car_fit.png" class="img-fluid" alt="Logo de la Marque">
        </div>
        <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.html"><strong>Maxi Car</strong></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="#">Véhicules</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="#">Financement</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="#">Contact</a>
                        </li>
                    </ul>
                    <form class="d-flex">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </nav>
    </header>

    <script src="./assets/vendors/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="./assets/vendors/jquery/jquery-3.6.3.js"></script>
    <main>
        
        <div id="carousel_principal" class="carousel carousel-dark slide mh-25" data-bs-ride="false">
            <div class="carousel-indicators" id="carousel-principal-indicators">
                <?php
                    $stmt = $pdo->query('select * from cars');
                    $i = 0;
                    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                        if ($i == 0) {
                            echo '<button type="button" data-bs-target="#carousel_principal" data-bs-slide-to="'.$row['id_car'].'" class="active"
                            aria-current="true" aria-label="Slide '.($row['id_car'] + 1).'"></button>';
                            
                        } else {
                            echo '<button type="button" data-bs-target="#carousel_principal" data-bs-slide-to="'.$row['id_car'].'"
                            aria-label="Slide '.($row['id_car'] + 1).'"></button>';
                        }
                        $i++;
                    }
                ?>
            </div>
            <div class="carousel-inner" id="carousel-principal-inner">
            <?php
                    $stmt = $pdo->query('select * from cars');
                    $i = 0;
                    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                        if ($i == 0) {
                            echo '<div class="carousel-item active">
                                    <a href="#'. $row['id_car'] .'"><img src="'. $row['image1'] .'"class="d-block w-100" alt="..."></a>
                                </div>';
                            
                        } else {
                            echo '<div class="carousel-item">
                                    <a href="#'. $row['id_car'] .'"><img src="'. $row['image1'] .'"class="d-block w-100" alt="..."></a>
                                </div>';
                        }
                        $i++;
                    }
                ?>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carousel_principal" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carousel_principal" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3" id="contentContainer">
        <?php
            $stmt = $pdo->query('select * from cars join brands on brands.id_brand = cars.id_brand');

            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                echo 
                '<div class="card" id="'.$row['id_car'].'">
                    <h5 class="card-header text-center">' . $row['brand_name'] . ' - ' . $row['name'] . '</h5>
                    <div id="carousel' . $row['id_car'] . '" class="carousel carousel-dark slide carousel-fade" data-bs-interval="0">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carousel' . $row['id_car'] . '" data-bs-slide-to="0" class="active"
                                aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carousel' . $row['id_car'] . '" data-bs-slide-to="1"
                                aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carousel' . $row['id_car'] . '" data-bs-slide-to="2"
                                aria-label="Slide 3"></button>
                            <button type="button" data-bs-target="#carousel' . $row['id_car'] . '" data-bs-slide-to="3"
                                aria-label="Slide 4"></button>
                            <button type="button" data-bs-target="#carousel' . $row['id_car'] . '" data-bs-slide-to="4"
                                aria-label="Slide 5"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="' . $row['main_image'] . '" class="d-block w-100 ">
                            </div>
                            <div class="carousel-item">
                                <img src="' . $row['image1'] . '" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="' . $row['image2'] . '" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="' . $row['image3'] . '" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="' . $row['image4'] . '" class="d-block w-100" alt="...">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carousel' . $row['id_car'] . '" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carousel' . $row['id_car'] . '" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                    <div class="card-body row">
                        <a href="https://www.porsche.com/france/models/911/911-gt3-models/911-gt3/" class="btn btn-dark">' . $row['price'] . '€</a>
                    </div>
                </div>';

            }
?>
        </div>
    </main>
    

</body>

</html>
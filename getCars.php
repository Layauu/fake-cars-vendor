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

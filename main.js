$.getJSON("assets/data/cars.json", function (data) {

    var main = document.querySelector('#contentContainer');
    var carousel_indicator = document.querySelector('#carousel-principal-indicators');
    var carousel_inner = document.querySelector('#carousel-principal-inner')
    var buttons = "";
    var items = "";
    for (let i = 0; i < data.cars.length; i++) {
        var card = document.createElement('div');
        card.class = "card";
        card.id = data.cars[i].id;
        card.innerHTML =
            '<h5 class="card-header text-center">' + data.cars[i].brand + ' - ' + data.cars[i].model + '</h5>' +
            '<div id="carousel' + data.cars[i].id + '" class="carousel carousel-dark slide carousel-fade" data-bs-interval="0">' +
            '<div class="carousel-indicators">' +
            '<button type="button" data-bs-target="#carousel' + data.cars[i].id + '" data-bs-slide-to="0" class="active"' +
            'aria-current="true" aria-label="Slide 1"></button>' +
            '<button type="button" data-bs-target="#carousel' + data.cars[i].id + '" data-bs-slide-to="1"' +
            'aria-label="Slide 2"></button>' +
            '<button type="button" data-bs-target="#carousel' + data.cars[i].id + '" data-bs-slide-to="2"' +
            'aria-label="Slide 3"></button>' +
            '<button type="button" data-bs-target="#carousel' + data.cars[i].id + '" data-bs-slide-to="3"' +
            'aria-label="Slide 4"></button>' +
            '<button type="button" data-bs-target="#carousel' + data.cars[i].id + '" data-bs-slide-to="4"' +
            'aria-label="Slide 5"></button>' +
            '</div>' +
            '<div class="carousel-inner">' +
            '<div class="carousel-item active">' +
            '<img src="' + data.cars[i].main_image + '" class="d-block w-100 ">' +
            '</div>' +
            '<div class="carousel-item">' +
            '<img src="' + data.cars[i].image1 + '" class="d-block w-100" alt="...">' +
            '</div>' +
            '<div class="carousel-item">' +
            '<img src="' + data.cars[i].image2 + '" class="d-block w-100" alt="...">' +
            '</div>' +
            '<div class="carousel-item">' +
            '<img src="' + data.cars[i].image3 + '" class="d-block w-100" alt="...">' +
            '</div>' +
            '<div class="carousel-item">' +
            '<img src="' + data.cars[i].image4 + '" class="d-block w-100" alt="...">' +
            '</div>' +
            '</div>' +
            '<button class="carousel-control-prev" type="button" data-bs-target="#carousel' + data.cars[i].id + '" data-bs-slide="prev">' +
            '<span class="carousel-control-prev-icon" aria-hidden="true"></span>' +
            '<span class="visually-hidden">Previous</span>' +
            '</button>' +
            '<button class="carousel-control-next" type="button" data-bs-target="#carousel' + data.cars[i].id + '" data-bs-slide="next">' +
            '<span class="carousel-control-next-icon" aria-hidden="true"></span>' +
            '<span class="visually-hidden">Next</span>' +
            '</button>' +
            '</div>' +
            '<div class="card-body row">' +
            '<a href="https://www.porsche.com/france/models/911/911-gt3-models/911-gt3/" class="btn btn-dark">' + data.cars[i].price + '</a>' +
            '</div>';
        
        main.appendChild(card);
        if (i==0) {
            buttons += '<button type="button" data-bs-target="#carousel_principal" data-bs-slide-to="'+i+'" class="active"' +
            'aria-current="true" aria-label="Slide '+(i+1)+'"></button>';
            items += '<div class="carousel-item active">' +
        '<a href="#'+ data.cars[i].id +'"><img src="'+ data.cars[i].image1 +'"' +
                'class="d-block w-100" alt="..."></a>' +
    '</div>';
            
        } else {
            buttons += '<button type="button" data-bs-target="#carousel_principal" data-bs-slide-to="'+i+'"' +
            'aria-label="Slide '+(i+1)+'"></button>';
            items += '<div class="carousel-item">' +
        '<a href="#'+ data.cars[i].id +'"><img src="'+ data.cars[i].image1 +'"' +
                'class="d-block w-100" alt="..."></a>' +
    '</div>';
        }
        


        /*Carousel principal*/
    }
    carousel_indicator.innerHTML = buttons;
    carousel_inner.innerHTML = items;

});

/*
<div id="carousel_principal" class="carousel carousel-dark slide mh-25" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carousel_principal" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carousel_principal" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carousel_principal" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#carousel_principal" data-bs-slide-to="3"
                    aria-label="Slide 4"></button>
                <button type="button" data-bs-target="#carousel_principal" data-bs-slide-to="4"
                    aria-label="Slide 5"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="assets/images/cars/porsche-911-gt3/img1.png" class="d-block w-100 " alt="...">
                </div>
                <div class="carousel-item">
                    <img src="assets/images/cars/porsche-911-gt3rs/img1.png" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="assets/images/cars/porsche-718-cayman-gt4/img1.png" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="assets/images/cars/porsche-911-gt3/img3.png" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <a href="index.html#cayenne"><img src="assets/images/cars/porsche-cayenne-coupe/img1.png"
                            class="d-block w-100" alt="..."></a>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carousel_principal"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carousel_principal"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        */
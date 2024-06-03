<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/stayl.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>BookHaven</title>
</head>
<body>
    <div class="wrapper">
        <div class="sidebar">
            <h2>BookHaven</h2>
            <ul>
                <li><i class="fa-solid fa-magnifying-glass"></i><button class="btn-popup">Discover</button></li>
                <li><i class="fa-solid fa-book"></i><button class="btn-popup">Top Books</button></li>
                <li><i class="fa-solid fa-question"></i><button class="btn-popup">Genre</button></li>
                <li><i class="fa-solid fa-exclamation"></i><button class="btn-popup">Coming Soon</button></li>
            </ul>
            <div>
                <ul>
                    <li><i class="fa-solid fa-exclamation"></i><button class="btn-popup">Borrowed</button></li>
                    <li><i class="fa-solid fa-exclamation"></i><button class="btn-popup">History</button></li>
                    <li><i class="fa-solid fa-star"></i><button class="btn-popup">My Favorites</button></li>
                </ul>
            </div>
            <div>
                <ul>
                    <li><i class="fa-solid fa-gear"></i><button class="btn-popup">Settings</button></li>
                    <li><i class="fa-solid fa-right-from-bracket"></i><button class="btn-popup" onclick="logout()">Logout</button></li>
                </ul>
            </div>
        </div>
        <div class="main-content">
            <div class="header"> 
                <div class="box">
                    <input type="text" placeholder="Search...">
                    <i class="fa-solid fa-magnifying-glass"></i>       
                </div>
                <div class="profile">
                    <a href="#"><img class="cart" src="images/ebike.png" alt=""><img class="ket" src="images/ket.jpg" alt=""></a>
                </div>
            </div>
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="images/pikchur.png" class="d-block w-100" style="width: 300px;" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Second slide label</h5>
                            <p>Some representative placeholder content for the second slide.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="images/pikchur.png" class="d-block w-100" style="width: 300px;" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Second slide label</h5>
                            <p>Some representative placeholder content for the second slide.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="images/pikchur.png" class="d-block w-100" style="width: 300px;" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Second slide label</h5>
                            <p>Some representative placeholder content for the second slide.</p>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
            <a href="#" class="text-dark"><h2 class="mt-3 ms-5">Trending</h2></a>
            <div class="card_container">
                <div class="card mt-5 ms-5 " style="max-width: 540px;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="images/san.jpg" class="img-fluid rounded-start" style="width: 700px;" alt="...">
                        </div>
                        <div class="col-sm-8">
                            <div class="card-body">
                                <h5 class="card-title">Demon slayer <a href="#"><i id="star" class="bi bi-star-fill"></i></a></h5> 
                                <p class="card-text">A youth begins a quest to fight demons and save his sister after finding his family slaughtered and his sister turned into a demon.</p>
                                <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mt-5 ms-5 " style="max-width: 540px;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="images/juju.jpg" class="img-fluid rounded-start" style="width: 700px;"  alt="...">
                        </div>
                        <div class="col-sm-8">
                            <div class="card-body">
                                <h5 class="card-title">Demon slayer <a href="#"><i id="star2" class="bi bi-star-fill"></i></a></h5> 
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mt-5 ms-5 " style="max-width: 540px;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="images/san.jpg" class="img-fluid rounded-start"style="width: 700px;"  alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Demon slayer <a href="#"><i id="star3" class="bi bi-star-fill"></i></a></h5> 
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    <script>
    document.getElementById("star").addEventListener("click", function() {
    this.classList.toggle("text-warning");
    });
    document.getElementById("star2").addEventListener("click", function() {
    this.classList.toggle("text-warning");
    });
    document.getElementById("star3").addEventListener("click", function() {
    this.classList.toggle("text-warning");
    });
    document.getElementById("star4").addEventListener("click", function() {
    this.classList.toggle("text-warning");
    });
    
    function logout(){
        window.location.href = 'config/BE_dash.php'
    }
    </script>
</body>
<!-- <script src="js/jquery-2.2.3.min.js"></script>
<script src="js/bootstrap.js"></script> -->
</html>

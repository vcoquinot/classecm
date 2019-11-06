<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/classecm.css">
    <script src="https://kit.fontawesome.com/94ce8cff49.js" crossorigin="anonymous"></script>
    <title>Calcul mental</title>
</head>

<body>

    <header class="row justify-content-center">
        <h1>Calcul mental</h1>
    </header>

    <main class="container" style="background-color:white;">
        <section class="menu">
            <!-- First block -->
            <div class="row">
                <article class="col-lg-6">
                    <div class="card lg-4 align-items-center">
                    <h2 class="card-header-title row text-center">Additions</h2>
                    <a data-toggle="collapse" href="#collapse_add" role="button" aria-expanded="false"
                        aria-controls="collapse"><i class="fas fa-plus fa-9x"></i></a>
                        <div class="collapse" id="collapse_add">
                            <div class="card-body justify-content-between align-items-center">
                                <button type="button" class="list-group-item btn btn-primary mb-2"><a href="addition_mentale_chiffres.php">Unités</a></button>
                                <button type="button" class="list-group-item btn btn-primary mb-2"><a href="addition_mentale_10.php">+10</a></button>
                                <button type="button" class="list-group-item btn btn-primary mb-2"><a href="addition_mentale_100.php">+100</a></button>
                                <button type="button" class="list-group-item btn btn-primary mb-2"><a href="addition_mentale_1000.php">+1000</a></button>
                            </div>
                        </div>
                    </div>
                </article>
                <article class="col-lg-6">
                    <div class="card lg-4 align-items-center">
                    <h2 class="card-header-title row text-center">Soustractions</h2>
                    <a data-toggle="collapse" href="#collapse_substract" role="button" aria-expanded="false"
                        aria-controls="collapse"><i class="fas fa-minus fa-9x"></i></a>
                        <div class="collapse" id="collapse_substract">
                            <div class="card-body justify-content-between align-items-center">
                                <a class="btn btn-primary mb-2" href="soustraction_mentale_unites.php">Unités</a>
                                <a class="btn btn-primary mb-2" href="soustraction_mentale_10.php">-10</a></button>
                                <a class="btn btn-primary mb-2" href="soustraction_mentale_100.php">-100</a>
                                <a class="btn btn-primary mb-2" href="soustraction_mentale_1000.php">-1000</a>
                            </div>  
                        </div>
                    </div>
                </article>
            </div>
            <!-- second block -->
            <div class="row">
                <article class="col-lg-6">
                    <div class="card lg-4 align-items-center">
                    <h2 class="card-header-title row text-center">Multiplications</h2>
                    <a data-toggle="collapse" href="#collapse_multiply" role="button" aria-expanded="false"
                    aria-controls="collapse"><i class="fas fa-times fa-9x"></i></a>
                        <div class="collapse" id="collapse_multiply">
                            <div class="card-body justify-content-between align-items-center">
                                <a class="btn btn-primary mb-2" href="multiplication_mentale_unites.php">Tables</a>
                                <a class="btn btn-primary mb-2" href="multiplication_mentale_10.php">x10</a>
                                <a class="btn btn-primary mb-2" href="multiplication_mentale_100.php">x100</a>
                                <a class="btn btn-primary mb-2" href="multiplication_mentale_1000.php">x1000</a>
                            </div>
                        </div>   
                    </div>   
                </article>
                <article class="col-lg-6">
                    <div class="card lg-4 align-items-center">
                        <h2 class="card-header-title row text-center">Divisions</h2>
                        <a data-toggle="collapse" href="#collapse_divide" role="button" aria-expanded="false"
                        aria-controls="collapse"><i class="fas fa-divide fa-9x"></i></a>
                        <div class="collapse" id="collapse_divide">
                        <div class="card-body justify-content-between align-items-center">
                            <a class="btn btn-primary mb-2" href="division_mentale_unites.php">Unités</a>
                            <a class="btn btn-primary mb-2" href="division_mentale_10.php">/10</a>
                            <a class="btn btn-primary mb-2" href="division_mentale_100.php">/100</a>
                            <a class="btn btn-primary mb-2" href="division_mentale_1000.php">/1000</a>
                        </div>
                    </div>
                </article>
            </div>
        </section> 
    </main>
    <!-- JavaScript -->
    <!-- jQuery , Popper.js, Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
    crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
    crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
    crossorigin="anonymous"></script>
  </body>
</html>
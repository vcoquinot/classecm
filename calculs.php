<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/classecm.css">
    <script src="https://kit.fontawesome.com/94ce8cff49.js" crossorigin="anonymous"></script>
    <title>Calculs</title>
</head>

<body>

    <header class="row justify-content-center">
        <h1>Calculs</h1>
    </header>

    <main class="container" style="background-color:white;">
        <section class="menu">
            <!-- First block -->
            <div class="row">
                <article class="col-lg-6">
                    <div class="card lg-4 align-items-center">
                    <h2 class="card-header-title row text-center">Additions</h2>
                    <!-- *****TO DO***** FA COLOR-->
                    <a data-toggle="collapse" href="#collapse_add" role="button" aria-expanded="false"                   
                        aria-controls="collapse"><i class="fas fa-plus fa-9x"></i></a>
                        <div class="collapse" id="collapse_add">
                            <div class="card-body justify-content-between align-items-center">
                                <a href="addition_mentale_chiffres.php" class="list-group-item list-group-item-action  bg-info text-light border border-light">+ 1 à 9</a>
                                <a href="addition_mentale_10.php" class="list-group-item list-group-item-action  bg-info text-light border border-light">+10</a>
                                <a href="addition_mentale_100.php" class="list-group-item list-group-item-action  bg-info text-light border border-light">+100</a>
                                <a href="addition_mentale_1000.php" class="list-group-item list-group-item-action  bg-info text-light border border-light">+1000</a>
                                <a href="addition_posee.php" class="list-group-item list-group-item-action  bg-info text-light border border-light">Addition posée</a>
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
                                <a href="soustraction_mentale_chiffres.php"class="list-group-item list-group-item-action  bg-info text-light border border-light">Unités</a>
                                <a href="soustraction_mentale_10.php" class="list-group-item list-group-item-action  bg-info text-light border border-light" class="list-group-item list-group-item-action  bg-info text-light border border-light">-10</a>
                                <a href="soustraction_mentale_100.php" class="list-group-item list-group-item-action  bg-info text-light border border-light">-100</a>
                                <a href="soustraction_mentale_1000.php" class="list-group-item list-group-item-action  bg-info text-light border border-light">-1000</a>
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
                                <a class="btn btn-primary mb-2" href="multiplication_mentale_chiffres.php">Tables</a>
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
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/classecm.css">
    <script src="https://kit.fontawesome.com/94ce8cff49.js" crossorigin="anonymous"></script>
    <title>Opérations posées</title>
</head>

<body>

    <header class="row justify-content-center">
        <h1>Opérations posées</h1>
    </header>

    <main class="container" style="background-color:white;">
        <section class="menu">
            <!-- First block -->
            <div class="row">
                <article class="col-lg-4">
                    <div class="card lg-3 align-items-center">
                    <h2 class="card-header-title row text-center">Additions</h2>
                    <!-- *****TO DO***** FA COLOR-->
                    <a data-toggle="collapse" href="#collapse_operations_add" role="button" aria-expanded="false"                   
                        aria-controls="collapse"><i class="fas fa-plus fa-9x"></i></a>
                        <div class="collapse" id="collapse_operations_add">
                            <div class="card-body justify-content-between align-items-center">
                                <a class="btn btn-primary mb-2" href="operation_addition.php">trois chiffres</a>
                            </div>
                        </div>
                    </div>
                </article>
                <article class="col-lg-4">
                    <div class="card lg-3 align-items-center">
                    <h2 class="card-header-title row text-center">Soustractions</h2>
                    <a data-toggle="collapse" href="#collapse_operations_substract" role="button" aria-expanded="false"
                        aria-controls="collapse"><i class="fas fa-minus fa-9x"></i></a>
                        <div class="collapse" id="collapse_operations_substract">
                            <div class="card-body justify-content-between align-items-center">
                                <a class="btn btn-primary mb-2" href="operation_soustraction">deux chiffres</a>
                                <a class="btn btn-primary mb-2" href="">trois chiffres</a>
                            </div>  
                        </div>
                    </div>
                </article>
                <article class="col-lg-4">
                    <div class="card lg-3 align-items-center">
                    <h2 class="card-header-title row text-center">Multiplications</h2>
                    <a data-toggle="collapse" href="#collapse_operations_multiply" role="button" aria-expanded="false"
                    aria-controls="collapse"><i class="fas fa-times fa-9x"></i></a>
                        <div class="collapse" id="collapse_operations_multiply">
                            <div class="card-body justify-content-between align-items-center">
                                <a class="btn btn-primary mb-2" ">deux chiffres</a>
                            </div>
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
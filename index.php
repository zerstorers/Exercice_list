<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>


<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>

<body>
    <div class="container">

        <?php
            require('header.php');
        ?>
        <div>

            <h2 class="text-center p-3 bg-dark text-light">Tous les Exercices</h2>
            <p class="p-2 bg-secondary">les Variable</p>
        </div>
        <div class="accordion" id="accordionExample">
        <!--VARIABLE dynamique PHP -->
         <?php
            $i = 0;
            $db = new PDO('mysql:host=localhost;dbname=Exercice_list', "root", "plop");
            $req = $db->query('SELECT * FROM exercice_variable' );
            foreach($req as $row) {
            $i++;
        ?>
            <!--  -->
            <div class="card">
                <div class="card-header" id="heading<?php echo $i ?>">
                    <h2 class="mb-0 text-center">
                        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse<?php echo $i ?>"
                            aria-expanded="true" aria-controls="collapse<?php echo $i ?>">
                            Exercice: <?php echo $row["id_exo"] ?>
                        </button>
                    </h2>
                </div>

                <div id="collapse<?php echo $i ?>" class="collapse" aria-labelledby="heading<?php echo $i ?>" data-parent="#accordionExample">
                    <div class="card-body">
                        <p><span class="text-danger">Consigne: </span><?php echo utf8_encode($row["consigne"]) ?></p>
                        <p><span class="text-primary">Description: </span><?php echo $row["description"] ?></p>
                        <p><span>Code :</span> <code><?php echo $row["code"] ?></code></p>
                        <p><span class="text-danger">Resultat: </span><?php eval($row["code"]) ?></p>
                    </div>
                </div>
            </div>
            <!--  -->
            <?php

                }

            ?>
            <!-- fin VARIABLE dynamique PHP -->
        </div>
        <!-- FIN VARIABLE -->
        <hr>
        <!-- ARRAY -->
        <p class="p-2 bg-secondary">Array</p>
        <div class="accordion" id="accordionExample">
        <!--ARRAY dynamique PHP -->
         <?php
            $i = 100;
            $db = new PDO('mysql:host=localhost;dbname=Exercice_list', "root", "plop");
            $req = $db->query('SELECT * FROM exercice_array' );
            foreach($req as $row) {
            $i++;
        ?>
            <!--  -->
            <div class="card">
                <div class="card-header" id="heading<?php echo $i ?>">
                    <h2 class="mb-0 text-center">
                        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse<?php echo $i ?>"
                            aria-expanded="true" aria-controls="collapse<?php echo $i ?>">
                            Exercice: <?php echo $row["id_array"] ?>
                        </button>
                    </h2>
                </div>

                <div id="collapse<?php echo $i ?>" class="collapse" aria-labelledby="heading<?php echo $i ?>" data-parent="#accordionExample">
                    <div class="card-body">
                        <p><span class="text-danger">Consigne: </span><?php echo utf8_encode($row["consigne"]) ?></p>
                        <p><span class="text-primary">Description: </span><?php echo $row["description"] ?></p>
                        <p><span>Code :</span> <code><?php echo $row["code"] ?></code></p>
                        <p><span class="text-danger">Resultat: </span><?php eval($row["code"]) ?></p>
                    </div>
                </div>
            </div>
            <!--  -->
            <?php

                }

            ?>
            <!-- fin ARRAY dynamique PHP -->
        </div>
            <!-- FIN ARRAY -->
            <hr>
            <!-- LOOP -->
        <p class="p-2 bg-secondary">Loop</p>
        <div class="accordion" id="accordionExample">
        <!--LOOP dynamique PHP -->
         <?php
            $i = 200;
            $db = new PDO('mysql:host=localhost;dbname=Exercice_list', "root", "plop");
            $req = $db->query('SELECT * FROM exercice_loop' );
            foreach($req as $row) {
            $i++;
        ?>
            <!--  -->
            <div class="card">
                <div class="card-header" id="heading<?php echo $i ?>">
                    <h2 class="mb-0 text-center">
                        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse<?php echo $i ?>"
                            aria-expanded="true" aria-controls="collapse<?php echo $i ?>">
                            Exercice: <?php echo $row["id_loop"] ?>
                        </button>
                    </h2>
                </div>

                <div id="collapse<?php echo $i ?>" class="collapse" aria-labelledby="heading<?php echo $i ?>" data-parent="#accordionExample">
                    <div class="card-body">
                        <p><span class="text-danger">Consigne: </span><?php echo utf8_encode($row["consigne"]) ?></p>
                        <p><span class="text-primary">Description: </span><?php echo $row["description"] ?></p>
                        <p><span>Code :</span> <code><?php echo $row["code"] ?></code></p>
                        <p><span class="text-danger">Resultat: </span><?php eval($row["code"]) ?></p>
                    </div>
                </div>
            </div>
            <!--  -->
            <?php

                }

            ?>
            <!-- fin LOOP dynamique PHP -->
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>
</body>

</html>
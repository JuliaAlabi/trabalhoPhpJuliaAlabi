<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Destino</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>

<body>
    <?php
    $arrayImagens = [
        "imagens/img1.jpg",
        "imagens/img2.jpg",
        "imagens/img3.jpg",
        "imagens/img4.jpg",
        "imagens/img5.jpg",
        "imagens/img6.jpg",
        "imagens/img7.jpg"
    ];

    $countImagens = count($arrayImagens);
    ?>

    <div class="container px-5 d-flex justify-content-center align-items-center min-vh-100">
        <div class="border p-5 rounded text-center">
            <h1 class="display-5 fw-bold text-body-emphasis">Album Covers</h1>
            <?php
            for ($j = 1; $j < $countImagens; $j++) {
                $echoImagens = $arrayImagens[$j];

                echo "<img id='image' src='$echoImagens' width='300px' height='250px'>";
            }
            ?>
        </div>
    </div>

    <?php 
    if (isset($_POST['random'])) {

        for ($j = 0; $j < $countImagens; $j++) {

            shuffle($arrayImagens);
            $echoImagens = $arrayImagens[$j];

            echo "<img id='image' src='$echoImagens' width='400px' height='250px'>";
        }
    }

    if (isset($_POST['reverse'])) {

        for ($j = 0; $j < $countImagens; $j++) {

            $arrayReverse=array_reverse($arrayImagens);
            $echoImagens = $arrayReverse[$j];

            echo "<img id='image' src='$echoImagens' width='400px' height='250px'>";
        }
    }

    if (isset($_POST['shift'])) {
        $removerPrimeiro=array_shift($arrayImagens);
       

        echo "Elemento removido: <br><img id='image' src='$removerPrimeiro' width='400px' height='250px'><br>Restante do array: <br>";

        for ($j = 0; $j < ($countImagens-1); $j++) {
            $echoImagens = $arrayImagens[$j];
            echo "<img id='image' src='$echoImagens' width='400px' height='250px'>";
        }
    }

    if (isset($_POST['pop'])) {
        $removerUltimo=array_pop($arrayImagens);
       

        echo "Elemento removido: <br><img id='image' src='$removerUltimo' width='400px' height='250px'><br>Restante do array: <br>";

        for ($j = 0; $j < ($countImagens-1); $j++) {
            $echoImagens = $arrayImagens[$j];
            echo "<img id='image' src='$echoImagens' width='400px' height='250px'>";
        }
    }

    if (isset($_POST['count'])) {
        $countImagens = count($arrayImagens);
        echo" <p class='lead mb-4'>Número de elementos no array: $countImagens</p>";
    }
    ?>


    <form method="POST">
        <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
            <button class="btn btn-outline-secondary btn-lg px-4" id="button" type="submit" name="count">Contar Elementos</button>
            <button class="btn btn-outline-secondary btn-lg px-4" id="button" type="submit" name="reverse">Inverter Ordem Dos Álbuns</button>
            <button class="btn btn-outline-secondary btn-lg px-4" id="button" type="submit" name="random">Randomizar ordem</button>
            <button class="btn btn-outline-secondary btn-lg px-4" id="button" type="submit" name="shift">Remover Primeiro Elemento</button>
            <button class="btn btn-outline-secondary btn-lg px-4" id="button" type="submit" name="pop">Remover Último Elemento</button>
        </div>
    </form>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</html>
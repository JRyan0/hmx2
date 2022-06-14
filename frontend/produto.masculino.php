<!doctype html>
<html lang="en">
    
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/glider-js@1/glider.min.css" rel="stylesheet">
    <link rel="stylesheet" href="node_modules/@glidejs/glide/dist/css/glide.core.min.css">
    <link type="text/css" href="estilo.css" rel="stylesheet"/>
    <title>Hello, world!</title>
</head>

<body>
        <?php
            include_once 'header.php';
        ?>
<main class="container">
 <div class="row">
        <div class="col">
                <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="images/20220401_160452.jpg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Produto</h5>
                    <p class="card-text">Preço</p>
                    <a href="#" class="btn btn-primary">Comprar</a>
                </div>
                </div>
        </div>
    </div>
</main>
<!-- Use any element to open the sidenav -->

        <script>
        function openNav() {
        document.getElementById("mySidenav").style.width = "350px";
        document.getElementById("main").style.marginLeft = "250px";
        document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
        }

        function closeNav() {
        document.getElementById("mySidenav").style.width = "0";
        document.getElementById("main").style.marginLeft= "0";
        document.body.style.backgroundColor = "white";
        }
        </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="scripts.js"></script>
</body>

</html>
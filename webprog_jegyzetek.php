<!-- 
    #Lépések#
    #Backend#
        #BE alap
            1. alap project clone
            2. git mappák törlése
            3. composer install
            4. .env létrehoz
            5. php artisan serve #test
            6. npm install
            7. npm run dev
            8. php artisan migrate #test
            9. push to new repo
        #Ha azt írja migrációkor h nincs ilyen tábla az ab-ban azért mert a create() parancsokat schema createben próbálod futtatni
    #Frontend
        #FE alap
            1. welcome.blade.php loginos részt meghagyni?
            2. bootstrap cdn jquery cdn
                bt css headbe
                bt js </body> elé
        #Csatolmányok
            azt kell feltételezni hogy a public mappában vagyunk css/style.css jó útvonal ha van css mappa
            meta tag tokenhez
        -->

<!-- PHP Jegyzetek -->
<?php

?>
<!-- HTML Jegyzetek -->
<html>

<head>
    <!-- Bootstap cdn -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">

    <!-- Token metaTag -->
    <meta name="csrf-token" content=<?php $token = csrf_token();
                                    echo $token; ?> />
</head>
<!-- JavaScript Jegyzetek -->
<script>
    // Jquery main első sor
    $(function() {
        /* ide jöhet a kód */
        const token = $('meta[name="csrf-token"]').attr("content"); // getting the token
    });
</script>
<script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>

<body>
    <!-- Bootstrap cdn -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
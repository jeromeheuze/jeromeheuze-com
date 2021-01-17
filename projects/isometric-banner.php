<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <title>Project - Isometric Banner</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--[if lt IE 9]>
    <script src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

<style>
    html, body {
        width: 100%;
        height: 100%;
        padding: 0;
        margin: 0;
        font-size: 1rem;
    }
    main {
        width: 100vw;
        height: 100vh;
        background: rgb(199,221,159);
        background: radial-gradient(circle, rgba(199,221,159,1) 0%, rgba(163,196,101,1) 100%);
    }
    h1 {
        margin: 0;
        padding-top: 2rem;
        text-align: center;
    }
    .world {
        position: relative;
        display: block;
        width: 1024px;
        margin: 0 auto;
        z-index: 1;
    }
    .tree_01 {
        position: absolute;
        top: -10px;
        left: 390px;
        z-index: 10;
    }
    .tree_02 {
        position: absolute;
        top: -30px;
        left: 446px;
    }
    .tree_03 {
        position: absolute;
        top: 140px;
        left: 100px;
    }
    .tree_04 {
        position: absolute;
        top: 370px;
        left: 400px;
    }
    .tree_05 {
        position: absolute;
        top: 230px;
        left: 560px;
    }
    .tree_06 {
        position: absolute;
        top: 170px;
        left: 745px;
    }
    .tree_07 {
        position: absolute;
        top: 200px;
        left: 660px;
    }
    .tree_08 {
        position: absolute;
        top: 0;
        left: 325px;
    }
    .pixel240 img {
        width: 240px;
    }
    .ground img {
        width: 100%;
        min-height: 400px;
    }

    /* Portrait and Landscape */
    @media only screen
    and (min-device-width: 768px)
    and (max-device-width: 1200px) {
        .world {
            width: 600px;
            margin: 15vh 0;
        }
    }

    /* Portrait and Landscape */
    @media only screen
    and (max-device-width: 1201px) {
        .world {
            width: 1024px;
        }
    }

    .delay_1 {
        -webkit-animation-duration: 1s;
        animation-duration: 1s;
    }
    .delay_2 {
        -webkit-animation-duration: 1.2s;
        animation-duration: 1.2s;
    }
    .delay_3 {
        -webkit-animation-duration: 1.4s;
        animation-duration: 1.4s;
    }

    .bounceInDown {
        -webkit-animation-name: bounceInDown;
        animation-name: bounceInDown;
        -webkit-animation-fill-mode: both;
        animation-fill-mode: both;
    }
    @-webkit-keyframes bounceInDown {
        0%, 60%, 75%, 90%, 100% {
            -webkit-transition-timing-function: cubic-bezier(0.215, 0.610, 0.355, 1.000);
            transition-timing-function: cubic-bezier(0.215, 0.610, 0.355, 1.000);
        }

        0% {
            opacity: 0;
            -webkit-transform: translate3d(0, -3000px, 0);
            transform: translate3d(0, -3000px, 0);
        }

        60% {
            opacity: 1;
            -webkit-transform: translate3d(0, 25px, 0);
            transform: translate3d(0, 25px, 0);
        }

        75% {
            -webkit-transform: translate3d(0, -10px, 0);
            transform: translate3d(0, -10px, 0);
        }

        90% {
            -webkit-transform: translate3d(0, 5px, 0);
            transform: translate3d(0, 5px, 0);
        }

        100% {
            -webkit-transform: none;
            transform: none;
        }
    }
    @keyframes bounceInDown {
        0%, 60%, 75%, 90%, 100% {
            -webkit-transition-timing-function: cubic-bezier(0.215, 0.610, 0.355, 1.000);
            transition-timing-function: cubic-bezier(0.215, 0.610, 0.355, 1.000);
        }

        0% {
            opacity: 0;
            -webkit-transform: translate3d(0, -3000px, 0);
            transform: translate3d(0, -3000px, 0);
        }

        60% {
            opacity: 1;
            -webkit-transform: translate3d(0, 25px, 0);
            transform: translate3d(0, 25px, 0);
        }

        75% {
            -webkit-transform: translate3d(0, -10px, 0);
            transform: translate3d(0, -10px, 0);
        }

        90% {
            -webkit-transform: translate3d(0, 5px, 0);
            transform: translate3d(0, 5px, 0);
        }

        100% {
            -webkit-transform: none;
            transform: none;
        }
    }
</style>

</head>
<body>
<main>
    <h1>Project - Isometric Banner</h1>
    <div class="world">
        <!-- 8 trees -->
        <!-- 5 rocks -->
        <!-- 4 bushes -->
        <!-- 4 flowers -->
        <div class="pixel240 tree_01 bounceInDown delay_1"><img src="/img/projects/Arbol_1.png" alt=""></div>
        <div class="pixel240 tree_02 bounceInDown delay_2"><img src="/img/projects/Arbol_1.png" alt=""></div>
        <div class="pixel240 tree_03 bounceInDown delay_3"><img src="/img/projects/Arbol_2.png" alt=""></div>
        <div class="pixel240 tree_04 bounceInDown delay_3"><img src="/img/projects/Arbol_2.png" alt=""></div>
        <div class="pixel240 tree_05 bounceInDown delay_2"><img src="/img/projects/Arbol_3.png" alt=""></div>
        <div class="pixel240 tree_06 bounceInDown delay_1"><img src="/img/projects/Arbol_3.png" alt=""></div>
        <div class="pixel240 tree_07 bounceInDown delay_2"><img src="/img/projects/Arbol_4.png" alt=""></div>
        <div class="pixel240 tree_08 bounceInDown delay_3"><img src="/img/projects/Arbol_5.png" alt=""></div>
        <div class="ground"><img src="/img/projects/Terrain.png" alt=""></div>
    </div>
</main>

<footer>
    <p></p>
</footer>
<!-- SCRIPTS -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript">
    $(document).ready(function(){

    });
</script>
</body>
</html>
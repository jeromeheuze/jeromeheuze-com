<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Indie game developer, Front End Developer, Crypto mining and trading enthusiast!">
    <meta name="author" content="Jerome Heuze">

    <title>Jerome Heuze</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.2.1/css/bootstrap.min.css">
    <!-- Custom fonts for this template -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="/css/grayscale.min.css" rel="stylesheet">

    <link rel="apple-touch-icon-precomposed" sizes="57x57" href="apple-touch-icon-57x57.png" />
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="apple-touch-icon-114x114.png" />
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="apple-touch-icon-72x72.png" />
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="apple-touch-icon-144x144.png" />
    <link rel="apple-touch-icon-precomposed" sizes="60x60" href="apple-touch-icon-60x60.png" />
    <link rel="apple-touch-icon-precomposed" sizes="120x120" href="apple-touch-icon-120x120.png" />
    <link rel="apple-touch-icon-precomposed" sizes="76x76" href="apple-touch-icon-76x76.png" />
    <link rel="apple-touch-icon-precomposed" sizes="152x152" href="apple-touch-icon-152x152.png" />
    <link rel="icon" type="image/png" href="favicon-196x196.png" sizes="196x196" />
    <link rel="icon" type="image/png" href="favicon-96x96.png" sizes="96x96" />
    <link rel="icon" type="image/png" href="favicon-32x32.png" sizes="32x32" />
    <link rel="icon" type="image/png" href="favicon-16x16.png" sizes="16x16" />
    <link rel="icon" type="image/png" href="favicon-128.png" sizes="128x128" />
    <meta name="application-name" content="&nbsp;"/>
    <meta name="msapplication-TileColor" content="#FFFFFF" />
    <meta name="msapplication-TileImage" content="mstile-144x144.png" />
    <meta name="msapplication-square70x70logo" content="mstile-70x70.png" />
    <meta name="msapplication-square150x150logo" content="mstile-150x150.png" />
    <meta name="msapplication-square310x310logo" content="mstile-310x310.png" />

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-3533973-49"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-3533973-49');
    </script>



</head>

<body id="page-top">

<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">Jerome Heuze</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menu
            <i class="fa fa-bars" aria-hidden="true"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#projects">Projects</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<?php
$format = " format-jpg";
if( strpos( $_SERVER['HTTP_ACCEPT'], 'image/webp' ) !== false ) {
    // webp is supported!
    $format = " format-webp";
}
?>
<!-- Header -->
<header class="masthead<?=$format;?>">
    <div class="container d-flex h-100 align-items-center">
        <div class="mx-auto text-center">
            <h1 class="mx-auto my-0 text-uppercase">Jerome Heuze</h1>
            <h2 class="text-white mx-auto mt-2 mb-5">Indie game developer, Blender3D enthusiast, Front End Developer, Outdoor man!</h2>
            <a href="https://www.behance.net/jerome-heuze" class="btn btn-secondary">Portfolio</a> <a href="https://www.linkedin.com/in/jeromeheuze/" rel="noreferrer" class="btn btn-primary">Resume</a>
        </div>
    </div>
</header>

<!-- About Section -->
<section id="about" class="about-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <h2 class="text-white mb-4 text-center">About</h2>
                <p class="text-white-50">Indie game developer, Blender3D, Tangent learning advocate, Web Developer, Front End Developer, Crypto mining and trading enthusiast!</p>
                <p class="text-white-50">Jerome Heuze was born and raised in Paris, France. Having moved to the United States as an exchange student in his teens, he attended high school in Michigan then University in California.</p>
                <p class="text-white-50">Following completion of his studies, Jerome went on to work for 10 years as a Software Engineer in several industries. At present he is doing work for sustainability businesses, Crypto currency companies and mobile games developers.</p>
                <p class="text-white-50">An entrepreneur at heart, Jerome is always looking for ways to educate and entertain, but he is also a budding writer, creating video games and creating beautiful scenes in Blender.</p>
                <p class="text-white-50">In his spare time Jerome enjoys wandering around museums, making and collecting games, building websites, electronics, crypto mining and teaching his daughters about creativity, digital technology and science. He also has a keen interest in astronomy, archery and science fiction entertainment.</p>
                <p class="text-white-50">Jerome is looking forward to the day when space tourism becomes a reality and will allow people to travel throughout the solar system. Maybe one day he will take a vacation on Mars, or in Earth’s orbit.</p>
            </div>
        </div>
    </div>
</section>

<!-- Projects Section -->
<section id="projects" class="projects-section bg-light">
    <div class="container">

        <!-- Featured Project Row -->
        <div class="row align-items-center no-gutters mb-4 mb-lg-5">
            <div class="col-xl-6 col-lg-6">
                <img class="img-fluid mb-3 mb-lg-0" src="/img/bg-mashweb.jpg" alt="">
            </div>
            <div class="col-xl-6 col-lg-6">
                <div class="featured-text text-center text-lg-left">
                    <h4>Web Properties</h4>
                    <p class="text-black-50 mb-0">I maintain and own several websites as follows:</p>
                    <ul>
                        <li><a href="https://heuzeproductions.com/" target="_blank">Heuze Productions</a> (Indie Game Studio)</li>
                        <li><a href="https://e2production.com/" target="_blank">E2Production - Virtual businesses in Earth2.io</a></li>
                        <li><a href="https://thesustainabledentist.com/" target="_blank">The Sustainable Dentist</a></li>
                        <li><a href="https://entropiamarket.com/" target="_blank">Entropia Market</a> (Entropia related)</li>
                        <li><a href="https://entropiahub.com/" target="_blank">Entropia Hub</a> (Entropia related)</li>
                    </ul>
                    <h4>Virtual Estates & Digital Investments</h4>
                    <p class="text-black-50 mb-0">I own in-game estates as investment:</p>
                    <ul>
                        <li><a href="https://www.entropiauniverse.com" target="_blank">Entropia Universe</a> – the Sci-Fi MMORPG, Multi-World, Real Cash Economy Experience.</li>
                        <li><a href="https://app.earth2.io/#profile/85c750d8-93f6-4e71-bc53-1b7a509d7a75" target="_blank">Earth 2</a> - 7.5% promo code - e2prod</li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Project 0 Row -->
        <div class="row justify-content-center no-gutters">
            <div class="col-lg-6">
                <a href="https://payhip.com/JeromesDigitalEmporium" target="_blank"><img class="img-fluid" src="img/tm_banners.png" alt=""></a>
            </div>
            <div class="col-lg-6 order-lg-first">
                <div class="bg-black text-center h-100 project">
                    <div class="d-flex h-100">
                        <div class="project-text w-100 my-auto text-center text-lg-right">
                            <h4 class="text-white">Jerome's Digital Emporium</h4>
                            <p class="mb-0 text-white-50">You can check my digital designs on Payhip.</p>
                            <hr class="d-none d-lg-block mb-0 mr-0">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Project One Row -->
        <div class="row justify-content-center no-gutters mb-5 mb-lg-0">
            <div class="col-lg-6">
                <img class="img-fluid" src="img/demo-image-01.jpg" alt="">
            </div>
            <div class="col-lg-6">
                <div class="bg-black text-center h-100 project">
                    <div class="d-flex h-100">
                        <div class="project-text w-100 my-auto text-center text-lg-left">
                            <h4 class="text-white">Indie Video Games Portfolio</h4>
                            <p class="mb-0 text-white-50">My collection of Unity3D projects:</p>
                            <ul>
                                <li><a href="/solar-systems-unity3d/">Solar System - v.2021</a></li>
                                <li><a href="/rolling-voxel-unity3d/">Rolling Voxel</a></li>
                                <li><a href="/box-shooter-unity3d/">Box Shooter</a></li>
                                <li><a href="/superspartanbros-unity3d/">2D Platformer: Super Spartan Bros.</a></li>
                                <li><a href="/underwoods-unity3d/">2D Platformer: Under Woods</a></li>
                            </ul>
                            <hr class="d-none d-lg-block mb-0 ml-0">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Project Two Row -->
        <div class="row justify-content-center no-gutters">
            <div class="col-lg-6">
                <a href="https://unsplash.com/@jeromeheuze" target="_blank"><img class="img-fluid" src="img/demo-image-02.jpg" alt=""></a>
            </div>
            <div class="col-lg-6 order-lg-first">
                <div class="bg-black text-center h-100 project">
                    <div class="d-flex h-100">
                        <div class="project-text w-100 my-auto text-center text-lg-right">
                            <h4 class="text-white">Photography</h4>
                            <p class="mb-0 text-white-50">Download free, beautiful high-quality photos curated by Me.</p>
                            <hr class="d-none d-lg-block mb-0 mr-0">
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<!-- Footer -->
<footer class="bg-black small text-center text-white-50">
    <div class="container">
        Copyright &copy;<?php echo date('Y'); ?> - Jérôme Heuzé
    </div>
</footer>

<!-- Bootstrap core JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.2.1/js/bootstrap.bundle.min.js"></script>

<!-- Plugin JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>

<!-- Custom scripts for this template -->
<script src="/js/init.js"></script>

</body>

</html>

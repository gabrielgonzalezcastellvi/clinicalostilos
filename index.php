<?php
require 'main-files/header.php';
require 'main-files/arrays.php';
$trayectoria = date("Y") - 1991;

?>
<title>Clínica Los Tilos</title>
<meta property="og:title" content="<?php echo BRAND; ?>" />
<meta property="og:description" content="<?php echo DESCRIPCION; ?>" />
<meta property="og:url" content="<?php echo ROOT; ?>" />
<meta name="twitter:title" content="<?php echo BRAND; ?>" />
<meta name="twitter:description" content="<?php echo DESCRIPCION; ?>" />


</head>

<body>
    <?php include('secciones/menu.php'); ?>
    <section id="carousel">

       

        <div>
            <div id="homeSlide" class="carousel flickity-enabled is-draggable" data-flickity="{ &quot;autoPlay&quot;: 2500, &quot;pauseAutoPlayOnHover&quot;: false }" tabindex="0">
                <?php foreach ($carousel as $banner) {
                ?>
                    <div class="carousel-cell flex flexCol" style="background-image:url('<?php echo MULTIMEDIA . $banner[1]; ?>');">
                    </div>
                <?php
                } ?>




            </div>

        </div>


    </section>



    <section id="slogan">
        <h3 class="center-txt"><span class="handwrite trayectoria"><?php echo $trayectoria; ?> años</span> de experiencia avalan nuestro prestigio nacional y regional.</h3>
    </section>

    <section id="serv">

        <div class=""></div>
        <div>
            <h2 class="center-txt">Nuestros Servicios</h2>
            <div class="">
                <p>En <b><?php echo BRAND;?></b> nos especializamos en la atención médica y psicológica a personas que 
                presentan situaciones de crisis que requieren una intervención intensiva y constante.</p>
            </div>
            <div class="flex-team">


            </div>
            <div class="spacer"></div>
            <a href="servicios" class="cta cta-center cta-trans hover-shrink">
            Saber más... <i class="bi bi-arrow-right-circle"></i>
            </a>
        </div>
        </div>

    </section>

    <section id="equipo">
        <h2 class="center-txt">Equipo Multidisciplinario</h2>
        <div class="spacer"></div>
        <div class="flex-team">
            <?php foreach ($equipo as $member) { ?>
                <figure>
                    <img src="<?php echo MULTIMEDIA . $member[2]; ?>" alt="<?php echo $member[1] ?>">
                    <figcaption>
                        <p><?php echo $member[1] ?></p>
                        <p class="tiny"><?php echo $member[0] ?></p>
                    </figcaption>
                </figure>
            <?php } ?>

        </div>
        <div class="spacer"></div>
        <a href="equipo" class="cta cta-center cta-bg hover-shrink">
            Conocer <i class="bi bi-arrow-right-circle"></i>
        </a>
        </div>
    </section>

    <section>
        <div class="serv-highligh relative">
            <p>Brindamos atención para <b>problemas psicológicos y psiquiátricos</b> como depresión, trastornos de ansiedad, trastorno bipolar, esquizofrenia y otras psicosis, trastornos de personalidad, problemas de sueño y perfeccionismo, entre otros.</p>

        </div>
    </section>

    <section id="convenios">
        <h2 class="center-txt">Convenios</h2>
        <?php include 'secciones/convenios.php'; ?>
        <a href="servicios" class="cta cta-center cta-bg hover-shrink">
            Servicios <i class="bi bi-arrow-right-circle"></i>
        </a>
    </section>

    <?php
    include 'secciones/rrss.php';
    include 'secciones/dev.php';
    include 'elementos/totop.php';
    require 'main-files/footer.php'; ?>
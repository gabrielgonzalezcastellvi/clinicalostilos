<?php
require 'main-files/header.php';
require 'main-files/arrays.php';
$trayectoria = date("Y") - 1991;
$title = 'Quiénes Somos';
$h2 = 'Sobre Nosotros';
$url = 'nosotros';
?>
<title><?php echo BRAND . ' | ' . $title; ?></title>
<meta property="og:title" content="<?php echo BRAND; ?>" />
<meta property="og:description" content="<?php echo DESCRIPCION; ?>" />
<meta property="og:url" content="<?php echo ROOT . $url; ?>" />
<meta name="twitter:title" content="<?php echo BRAND . ' | ' . $title; ?>" />
<meta name="twitter:description" content="<?php echo DESCRIPCION; ?>" />


<style>

</style>
</head>

<body>

    <?php include('secciones/menu.php'); ?>
    <section class="portada nosotros relative">
        <?php include 'secciones/portada.php';?>
    </section>
    <main>
        <section>
            <h3><?php echo BRAND; ?></h3>
            <p>Somos una clínica de internación en Salud Mental con <?php echo $trayectoria; ?> años de trayectoria ubicada en la Provincia de Mendoza, Argentina.</p>
            <p>Brindamos tratamientos con internación para consultantes con cuadros agudos correspondientes a diversos trastornos y problemáticas de salud trabajando desde un enfoque integrativo e interdisciplinario.</p>

            <p>En nuestra clínica, nos enfocamos en ofrecer un <b>enfoque multidisciplinario y personalizado</b> para nuestros consultantes, con el objetivo de tratar no solo los síntomas de la patología en sí, sino también los factores desencadenantes y las problemáticas relacionadas.</p>
            <p>También, nos comprometemos a brindar una atención de calidad, respetando los derechos humanos y la dignidad de nuestros pacientes en todo momento y promoviendo una participación activa en sus procesos de recuperación.
                Para ello, contamos con un <a href="equipo" class="lk-light">equipo de profesionales</a> altamente capacitados y comprometidos con la recuperación y el bienestar de nuestros pacientes, priorizando la inclusión social y autonomía.</p>
            <p>Nuestro enfoque integral en salud mental tiene como objetivo ofrecer una atención personalizada y completa buscando garantizar una recuperación efectiva y duradera.</p>
            <a href="contacto" class="cta cta-center cta-bg hover-shrink">
                Solicitar entrevista <i class="bi bi-arrow-right-circle"></i>
            </a>
        </section>
        <div class="spacer"></div>
    </main>
    <section id="slogan" class="serv-highligh relative ">
        <h3 class="center-txt nosotros"><span class="handwrite trayectoria"><?php echo $trayectoria; ?> años</span> de experiencia avalan nuestro prestigio nacional y regional.</h3>
    </section>
    <main>
        <div class="spacer"></div>
        <section>
            <h3>Nuestra Historia...</h3>
            <div class="historia">


                <p><?php echo BRAND; ?> fue fundada en el año 1991 por el Dr. Germán Maravilla y su esposa, Cristina Soler, trabajadora social. Al desempeñarse ambos en diferentes ámbitos sanitarios, identificaron en la población la necesidad de complementar la atención en salud mental brindada en la provincia.</p>
                <p>Así, identificaron que la demanda del abordaje intensivo en salud mental se encontraba sobrepasando los recursos disponibles dificultando el acceso de la misma a todas las personas.</p>
                <p>Además, también notaron que muchos consultantes debían ser enviados a otras ciudades para recibir la atención que requerían, lo que aumentaba el costo emocional y económico para ellos y sus familias.</p>
                <p>Por tanto, sabiendo que la salud mental es un componente clave para el bienestar general y la calidad de vida de las personas y, conociendo la importancia del acceso a una atención de calidad en la propia comunidad, y la importancia de tener acceso a una atención de calidad en la propia comunidad, el Dr. Maravilla y Cristina decidieron hacer algo al respecto. </p>
                    
                <p>Comenzaron a investigar y planificar cómo podrían crear una clínica de internación en salud mental que proporcionara un ambiente seguro y terapéutico para pacientes con cuadros agudos y subagudos.</p>
                <p>Después de varios años de planificación, finalmente pudieron hacer realidad su visión. Comenzaron por encontrar un lugar adecuado para la clínica, que incluyera un ambiente tranquilo y agradable para los pacientes, así como espacio para áreas de terapia y actividades de ocio, generando mayor adhesión al tratamiento y, por consiguiente, mayores resultados terapéuticos.</p>
                <p>Una vez que encontraron la ubicación adecuada, trabajaron arduamente en la apertura y el diseño de la clínica para asegurarse de que cumpliera con los estándares más altos en cuanto a <b>seguridad, comodidad y eficacia terapéutica</b>.</p>
                <p>Además, se aseguraron de contratar al personal adecuado, profesionales de la psiquiatría, psicología, nutrición, personal de enfermería y otros profesionales de la salud mental capacitados y experimentados.</p>
                <p>Finalmente, la <?php echo BRAND; ?> abrió sus puertas y comenzó a recibir pacientes, en ese entonces bajo el nombre de <i>'Clínica Manantial'</i>.</p>
                <p>Desde entonces, la clínica ha ayudado a muchas personas a recuperarse y volver a sus vidas diarias logrando una <b>mejor calidad de vida y desarrollo personal</b>.</p>
                <p>Actualmente, contamos con profesionales que mantienen la responsabilidad y la motivación que le dio vida a este proyecto único en Mendoza. El <a href="equipo" class="lk-light">equipo de <?php echo BRAND; ?></a> continúa trabajando para que la institución continúe brindando ayuda y atención de calidad a la comunidad por muchos años más.</p>
            </div>
        </section>
        <div class="spacer"></div>
        <h3>Instalaciones</h3>
        <?php $cant_fotosClinica = count($fotosClinica); ?>

        <div id="galeria-clinica" class="owl-carousel owl-theme">
            <?php for ($i = 0; $i < $cant_fotosClinica; $i++) { ?>
                <div class="item">
                    <img class="" src="<?php echo MULTIMEDIA . $fotosClinica[$i] ?>" alt="<?php echo $fotosClinica[$i]; ?>">

                </div>
            <?php } ?>


    </main>



    </div>







    <?php
    include 'secciones/rrss.php';
    include 'secciones/dev.php';
    include 'elementos/floatbtn.php';
    include 'elementos/totop.php'; ?>
    <script>
        $(document).ready(function() {
            $('.owl-carousel').owlCarousel({
                loop: true,
                margin: 10,
                responsiveClass: true,
                responsive: {
                    0: {
                        items: 1,
                        nav: true
                    },
                    600: {
                        items: 2,
                        nav: false
                    },
                    1000: {
                        items: 3,
                        nav: true,
                        loop: false,
                        margin: 20
                    }
                }
            })
        })
    </script>
    <?php require 'main-files/footer.php'; ?>
<?php require 'main-files/header.php';
require 'main-files/arrays.php';

$title = 'Servicios';
$h2 = 'Nuestros servicios';
$url = 'servicios';
?>
<title><?php echo BRAND . ' | ' . $title; ?></title>
<meta property="og:title" content="<?php echo BRAND; ?>" />
<meta property="og:description" content="<?php echo DESCRIPCION; ?>" />
<meta property="og:url" content="<?php echo ROOT . $url; ?>" />
<meta name="twitter:title" content="<?php echo BRAND . ' | ' . $title; ?>" />
<meta name="twitter:description" content="<?php echo DESCRIPCION; ?>" />


<style>
    .flexBox {
        padding: 0.7em;

        display: inline-flex;
        align-items: center;
        justify-content: space-between;
    }

    .bg-green {
        background-color: var(--cl-prim);
        color: var(--cl-light);
    }

    .flexBox>div:nth-child(2) {
        padding-left: 1em;
        border-left: solid 2px var(--cl-sec);
    }

    .flexBox ul {
        list-style-type: none;
        line-height: 1.5;
    }

    .flexBox h4 {
        line-height: 1.5;
    }

    .flexBox ul i {
        color: var(--cl-sec);
        font-size: 18px;
    }

    .flip-img-serv {
        max-width: 150px;
        filter: grayscale(100%);
    }
</style>
</head>

<body>
    <?php include('secciones/menu.php'); ?>
    <section class="portada ntros-serv relative">
        <?php include 'secciones/portada.php'; ?>
    </section>
    <main>
        <section>

            <h3>Internación en Salud Mental</h3>
            <p>La internación en salud mental es un tratamiento que se lleva a cabo en un centro de salud especializado, donde se brinda atención médica y psicológica a personas que presentan situaciones de crisis que requieren una intervención intensiva y constante. Su objetivo primordial es la estabilización, recuperación y la reinserción social del paciente.</p>
            <p>Realizamos un abordaje integral y personalizado, que incluye la evaluación clínica, el diagnóstico y la elaboración de un plan de tratamiento que contemple las necesidades y circunstancias individuales de cada paciente contando tanto con su participación activa como con la de su familia durante el proceso de tratamiento.</p>
            <p>La internación en salud mental es considerada una herramienta terapéutica más que busca ser enmarcada dentro de un tratamiento más amplio, por tanto, uno de las principales premisas es lograr que las internaciones sean lo más breves posible, según lo requiera cada caso.</p>
            <div class="spacer"></div>
            <div class="flexBox">
                <h4>¿Qué incluye el servicio de internación?</h4>
                <div>
                    <ul>
                        <li><i class="bi bi-check2-circle"></i> Atención psicológica diaria.</li>
                        <li><i class="bi bi-check2-circle"></i> Tratamiento psiquiátrico y psicofarmacológico.</li>
                        <li><i class="bi bi-check2-circle"></i> Orientación a familiares y allegados.</li>
                        <li><i class="bi bi-check2-circle"></i> Acceso a cuidados intensivos y <b>atención las 24 hs</b> por parte de un equipo especializado de profesionales de la salud, incluyendo psiquiatras, psicólogos, enfermeras y/o trabajadores sociales.</li>
                        <li><i class="bi bi-check2-circle"></i> Ambiente seguro y estructurado que ayuda a estabilizar los síntomas emocionales y físicos de los pacientes. Además, puede proporcionar un respiro temporal para el paciente y su familia, permitiéndoles descansar y recuperarse.</li>
                        <li><i class="bi bi-check2-circle"></i> Enfoque intensivo de tratamiento, lo que puede incluir terapia individual y grupal, medicación y otras intervenciones terapéuticas.</li>
                        <li><i class="bi bi-check2-circle"></i> Psicoeducación y prevención de crisis.</li>
                        <li><i class="bi bi-check2-circle"></i> Contexto de apoyo y contención.</li>
                        <li><i class="bi bi-check2-circle"></i> Regulación de ritmos biológicos básicos (sueño-vigilia y alimentación). </li>
                        <li><i class="bi bi-check2-circle"></i> Talleres grupales recreativos y terapéuticos.</li>
                        <li><i class="bi bi-check2-circle"></i> Acompañamiento y orientación en el proceso de externación y alta, buscando garantizar una adecuada continuidad del tratamiento.</li>

                    </ul>
                </div>
            </div>

            <a href="contacto" class="cta cta-center cta-bg hover-shrink">
                Solicitar entrevista <i class="bi bi-arrow-right-circle"></i>
            </a>
        </section>

    </main>

    <div class="serv-highligh relative">
        <p>Brindamos atención para problemas psicológicos y psiquiátricos como depresión, trastornos de ansiedad, bipolaridad, esquizofrenia y otras psicosis, trastornos de personalidad, problemas de sueño y perfeccionismo, entre otros.</p>
    </div>

    <main>
        <section>

            <div style="margin: 2em 0 3em 0;">
                <h2 class="center-txt">Actividades</h2>
                <div class="spacer"></div>
                <div class="flex-section-parent services">
                    <?php foreach ($actividades as $act) { ?>

                        <div class="flip-card hidden animate__animated">
                            <div class="flip-card-inner">
                                <div class="flip-card-front">
                                    <img src="<?php echo MULTIMEDIA . $act[0]; ?>" class="flip-img-serv" alt="<?php echo $act[1]; ?>">
                                </div>
                                <div class="flip-card-back">
                                    <p><?php echo $act[1]; ?></p>
                                </div>
                            </div>
                        </div>

                    <?php } ?>

                </div>
            </div>

            <div class="flexBox bg-green">
                <h4>¿Cómo se realiza una internación?</h4>
                <div>
                    <p>La internación en salud mental debe ser indicada por un equipo interdisciplinario de profesionales de la salud y decidida de forma conjunta con el paciente y su familia.</p>
                    <p>En <?php echo BRAND; ?> sólo realizamos internaciones voluntarias. </p>
                    <p>A través de una entrevista de admisión previamente programada, evaluamos si esta modalidad de abordaje es la más adecuada para el consultante y su problemática actual.</p>
                </div>

            </div>

            <a href="contacto" class="cta cta-center cta-bg hover-shrink">
                Solicitar entrevista <i class="bi bi-arrow-right-circle"></i>
            </a>
        </section>

    </main>
    <div class="gradientLine"></div>
    <section style="padding: 1.5em 1em;background:white;">
        <h2 class="center-txt">Convenios</h2>
        <?php include 'secciones/convenios.php'; ?>
    </section>

    <?php
    include 'secciones/rrss.php';
    include 'secciones/dev.php';
    include 'elementos/floatbtn.php';
    include 'elementos/totop.php';
    require 'main-files/footer.php'; ?>
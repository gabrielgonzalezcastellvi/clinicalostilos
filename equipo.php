<?php require 'main-files/header.php';
require 'main-files/arrays.php';

$title = 'Equipo Multidisciplinario';
$h2 = 'Nuestro Equipo';
$url = 'equipo';
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
    <section class="portada equipo relative">
        <?php include 'secciones/portada.php';?>
    </section>
    <main>
        <section>
            <h3 class="center-txt">Equipo Médico</h3>
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
        </section>
        <div class="spacer"></div>
        <section>
            <h3 class="center-txt">Equipo Especializado</h3>
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
        </section>
        <div class="spacer"></div>
        <section>
            <h3 class="center-txt">Área administrativa</h3>
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
        </section>

    </main>







    <?php
    include 'secciones/rrss.php';
    include 'secciones/dev.php';
    include 'elementos/floatbtn.php';
    include 'elementos/totop.php';
    require 'main-files/footer.php'; ?>
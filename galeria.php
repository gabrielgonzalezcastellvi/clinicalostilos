<?php require 'main-files/header.php';
require 'main-files/arrays.php';

$title = 'Galería';
$h2 = 'Galería';
$url = 'galeria';
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

    <?php
    include('secciones/menu.php');
    include('secciones/portada.php');
    ?>
    <main>
        <section>
       
<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Blanditiis eligendi tenetur facere quis suscipit in soluta, voluptatibus asperiores quos commodi? Soluta id ea neque quod, facilis aspernatur numquam dolor aliquam.</p>
          
        </section>

    </main>







    <?php
    include 'secciones/rrss.php';
    include 'secciones/dev.php';
    include 'elementos/floatbtn.php';
    include 'elementos/totop.php';
    require 'main-files/footer.php'; ?>
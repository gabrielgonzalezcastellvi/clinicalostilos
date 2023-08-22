<div class="prim-menu">
    <a href="<?php echo ROOT; ?>" class="lk-dark hover-shrink">
        <div class="brand">
            <div><img src="<?php echo MULTIMEDIA . 'los-tilos_icon.png' ?>" alt="<?php echo BRAND; ?>" ></div>
            <div class="marca"><?php echo BRAND; ?></div>
        </div>
    </a>

    <div id="navOptions" class="overlay">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <div class="overlay-content">
            <a href="<?php echo ROOT . 'nosotros.php'; ?>" class="effect-1">Clínica</a>
            <a href="<?php echo ROOT . 'equipo.php'; ?>" class="effect-1">Equipo</a>
            <a href="<?php echo ROOT . 'servicios.php'; ?>" class="effect-1">Servicios</a>
            <a href="<?php echo ROOT . 'contacto.php'; ?>" class="effect-1">Contacto</a>
        </div>
    </div>
    <span class="cta cta-bg" onclick="openNav()"><i class="bi bi-list"></i> Menú</span> <!--&#9776;-->

</div>



<script>
    function openNav() {
        document.getElementById("navOptions").style.width = "100%";
    }

    function closeNav() {
        document.getElementById("navOptions").style.width = "0%";
    }
</script>
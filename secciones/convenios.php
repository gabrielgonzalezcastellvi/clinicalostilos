<div class="flex-section-parent convenios">
    <?php foreach ($convenios as $convenio) { ?>
        <div class="flex-sec-child logo-container">
            <img src="<?php echo MULTIMEDIA . $convenio[1]; ?>" alt="<?php echo $convenio[0]; ?>">
        </div>
    <?php } ?>


</div>
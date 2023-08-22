
<?php

// Muestra toda la información, por defecto INFO_ALL
phpinfo();

echo '<h4><mark>INFO MODULES:</mark></h4>';
// Muestra solamente la información de los módulos.
// phpinfo(8) hace exactamente lo mismo.
phpinfo(INFO_MODULES);

?>

<?php require __DIR__ . '/lib/lib.php'; ?>
<html>
<head>
  <meta http-equiv="Refresh" content="5; url=./locals.php" />
</head>
<body>
  <?php
    $name = $_REQUEST['name'];
    $latitude = $_REQUEST['latitude'];
    $longitude = $_REQUEST['longitude'];
    $locals = removeLocal($latitude, $longitude); ?>
  <p>Local '<?= $name ?>' removido com sucesso. Será redirecionado dentro de 5 segundos.</p>
</body>
</html>

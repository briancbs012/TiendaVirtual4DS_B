<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="<?= media(); ?>/css/styles-error.css">

    <title><?= $data['page_tag'];?></title>
</head>
<body>
    

<div>
    <div id="clouds">
        <div class="cloud x1"></div>
        <div class="cloud x1_5"></div>
        <div class="cloud x2"></div>
        <div class="cloud x3"></div>
        <div class="cloud x4"></div>
        <div class="cloud x5"></div>
    </div>
    <div class='c'>
        <div class='_404'>404</div>
        <hr>
        <div class='_1'>LA PAGINA</div>
        <div class='_2'>NO FUE ENCONTRADA</div>
        <a class='btn' href='<?php echo base_url() ?>'>VOLVER AL INICIO</a>
    </div>
</div>
</body>
</html>
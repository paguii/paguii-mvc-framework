<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php $this->section("titulo"); ?></title>
    
    <link rel="stylesheet" href="public/css/estilo.css">
</head>
<body>
    <div id="topo">        
        <?php $this->section("header"); ?>
    </div>

    <div id="corpo">
        <?php $this->section("conteudo"); ?>
    </div>
</body>
</html>
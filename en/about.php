<?php
$GLOBALS['culture'] = empty($GLOBALS['culture']) ? 'en' : $GLOBALS['culture'];
require_once dirname(__DIR__).'/localisation.req.php';
?>

<link rel="stylesheet" href="../theme1.css">

<body>
    <header>
        <h1><?= local('in_about') ?></h1>
    </header>
</body>
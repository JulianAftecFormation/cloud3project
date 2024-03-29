<?php
$GLOBALS['culture'] = empty($GLOBALS['culture']) ? 'en' : $GLOBALS['culture'];
require_once dirname(__DIR__).'/localisation.req.php';
require_once dirname(__DIR__).'/logme.php';
?>

<title>CLOUD3</title>
<link rel="icon" href="../resource/favicon.ico">
<meta name="description" content="Bienvenue sur le CLOUD3">
<meta charset="UTF-8">

<link rel="stylesheet" href="../theme1.css">
<body>

<form action="upload.php" class="cld__upload" method="post" enctype="multipart/form-data">
	<h2 class="cld__upl_title"><?= local('drop_a_file') ?></h2>
	<div class="cld__upl_input_container">
		<input class="cld__upl_input" type="file" name="fileToUpload" required />
	</div>
	<div class="cld__upl_cmd_container">
		<button class="cld__upl_cmd"><?= local('upload') ?></button>
	</div>
</form><form action="download.php" class="cld__download" method="get">
	<h2 class="cld__dwl_title"><?= local('get_a_file') ?></h2>
	<div class="cld__dwl_input_container">
		<input class="cld__dwl_input" type="text" name="guid" required />
	</div>
	<div class="cld__dwl_cmd_container">
		<button class="cld__dwl_cmd"><?= local('download') ?></button>
	</div>
</form>

<section>
	<div class="onebutton">
		<a href="google.com">test</a>
	</div>
</section>

<footer>
	<div class="supramk4">
		<a href="./about.php"><?= local('about_first') ?></a>
	</div>
</footer>
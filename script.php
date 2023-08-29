<?php
include ( $_SERVER[ 'DOCUMENT_ROOT' ] . '/wp-load.php' );

ini_set("display_errors", "1"); // shows all errors
?>


<html lang="ru">
<head>
	<title>Download</title>
	<meta charset="utf-8" />
</head>
<body>
<?php

if ($_FILES && $_FILES["filename"]["error"]== UPLOAD_ERR_OK)

$folder = '/upload/'; //папка наших загрузок

{
	$file = strval($_FILES["filename"]["tmp_name"]);
    $directory = __DIR__ . $folder . date('Y-m-d H:i:s') . '.jpg';
	move_uploaded_file($file, $directory);
	echo "Файл загружен";
}
?>
<h2>Загрузка файла</h2>
<form method="post" enctype="multipart/form-data">
	Выберите файл: <input type="file" name="filename" size="10" /><br /><br />
	<input type="submit" value="Загрузить" />
</form>
</body>
</html>

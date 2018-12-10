<?php
require_once __DIR__ . '/include.php';
?>

<body>
<br>
<form action="base.php" name="form" method="Post">
	請輸入base64：<input type="text" name="base" size="100">
	<input value="轉換" type="submit" onclick="form.action='base.php';form.submit();"/>
</form>
<?php

function __autoload($className) {
	require $className . '.class.php';
}

$blogs = new BloggsCommsManager();
$blogApp = $blogs->getApptEncode();

echo $blogApp->encoder();
//输出相应的blogApp的编码产品
//Appointment data encode in Bloggscal format
?>

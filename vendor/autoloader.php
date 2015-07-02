<?php 

require_once __DIR__ . DIRECTORY_SEPARATOR . 'phpexcel' . DIRECTORY_SEPARATOR . 'PHPExcel.php';
require_once __DIR__ . DIRECTORY_SEPARATOR . 'phpexcel' . DIRECTORY_SEPARATOR . 
	'PHPExcel' . DIRECTORY_SEPARATOR . 'IOFactory.php';

require_once __DIR__ . DIRECTORY_SEPARATOR . 'phpmailer' . DIRECTORY_SEPARATOR . 'PHPMailerAutoload.php';

require_once __DIR__ . DIRECTORY_SEPARATOR . 'raintpl' . DIRECTORY_SEPARATOR . 
	'library' . DIRECTORY_SEPARATOR . 'Rain' . DIRECTORY_SEPARATOR . 'autoload.php';

require_once 'phar://' . __DIR__ . DIRECTORY_SEPARATOR . 'hxCore.phar' . DIRECTORY_SEPARATOR . 'autoloader.php';

//remember to overload setting before include TCPDF library
//x require_once __DIR__ . DIRECTORY_SEPARATOR . 'tcpdf' . DIRECTORY_SEPARATOR . 'tcpdf.php';

//x require_once __DIR__ . DIRECTORY_SEPARATOR . 'phpjasperxml' . DIRECTORY_SEPARATOR . 'PHPJasperXML.inc.php';

?>
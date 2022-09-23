<?PHP 
require($_SERVER['DOCUMENT_ROOT'].'/config.php');
require($_SERVER['DOCUMENT_ROOT']."/db-connect.php");
require($_SERVER['DOCUMENT_ROOT'].'/bootstrap.php');
require($_SERVER['DOCUMENT_ROOT']."/functions.php");
require($_SERVER['DOCUMENT_ROOT']."/scrapping_functions.php");
echo video_recommend($_GET['topic']);
?>
<?php
$_CONFIG = array(
  'pages'           => 'pages/',  //Folder contain "pages" contents
  'pagesType'       => '.php',    //Extention of file in pages folder to include
  'process'       => 'process/'
);
class Dbconfig {
    protected $serverName;
    protected $userName;
    protected $passCode;
    protected $dbName;
    function __construct() {
        $this -> serverName = 'localhost';
        $this -> userName = 'root';
        $this -> passCode = '';
        $this -> dbName = 'bkp';
    }
}
  $page = @$_REQUEST['page']!=""?$_REQUEST['page']:'index';
  if(!file_exists($_CONFIG['pages'].$page.$_CONFIG['pagesType'])) $page = '404';
  $filePage = $_CONFIG['pages'].$page.$_CONFIG['pagesType'];
?>

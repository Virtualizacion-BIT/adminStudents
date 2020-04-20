<?php
/**
 * Creación de una constante la cual nos guardará la ruta de nuestro proyecto
 */
if ( !defined('ROOT')){
  $root = str_replace('/opt/lampp/htdocs/', '/', __DIR__);
  $root = str_replace('/config', '', $root);
  define("ROOT", 'http://'.$_SERVER['HTTP_HOST'].$root);
}

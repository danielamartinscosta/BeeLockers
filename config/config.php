<?php
//Caminhos absolutos
$dirInt="";

define('DIRPAGE',"http://{$_SERVER['HTTP_HOST']}/{$dirInt}");

$bar=(substr($_SERVER['DOCUMENT_ROOT'],-1)=='/')?"":"/";

//Constante para incluir arquivos

define('DIRREQ',"{$_SERVER['DOCUMENT_ROOT']}{$bar}{$dirInt}");


//declarar variáveis de conexão
$hostname = "localhost";
$username = "root";
$password = "";
$database = "usuarios_ds_noite";

//flag para exibir debug de conexão, mensagem de ok
$flag_exibir = false;
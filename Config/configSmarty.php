<?php
########################### ARQUIVO DE CONFIGURAÇÃO DO SMARTY #####################################

// Definindo constantes para configura Smarty
define ("ROOT_PATH",  dirname(dirname(__FILE__)));
define ("LIB_PATH",  ROOT_PATH  .DIRECTORY_SEPARATOR. "Framework/smarty");
define ("TEMPLATE_PATH", ROOT_PATH .DIRECTORY_SEPARATOR. "Views");

// Incluido class Smaty
include  LIB_PATH ."/Smarty.class.php";
 
// Instânciando o Smarty
$smarty = new Smarty();

// Diretorio Template
$smarty->setTemplateDir(TEMPLATE_PATH);
// Diretorio Compliler
$smarty->setCompileDir(TEMPLATE_PATH ."templates_c");

// Cache
$smarty->caching = FALSE;
$smarty->compile_check = TRUE;

#####################################################################################################

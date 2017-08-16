<?php
############ Definindo constantes do sistema ###################

// Banco de Dados //////////////////////////////////////
define('BANCO', 'feedback_mydb');
define('HOST',  'mysql:host=localhost; dbname='.BANCO);
define('USUARIO', 'root');
define('SENHA', 'root');
////////////////////////////////////////////////////////

// Actions constantes
define("ADDFEEDBACK",          "10");
define("LISTFEEDBACK",         "20");
define("INSERTFEEDBACK",       "30");
define("INSERTSUCESSFEEDBACK", "31");
define("CHECKEDFEEDBACK",      "32");
define("ACTIVEDFEEDBACK",      "33");
define("SHOWFEEDBACK",         "40");
define("SEARCHFEEDBACK",       "50");

/**
 * Classe com Funções Gerais do Sistema
 * @package Config
 * @author Kleiton Souza
 */
class Config {

    ###### Colocar aqui funções globais do banco de dados #########

}

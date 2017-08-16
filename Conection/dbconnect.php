<?php

# Class Config #
require_once 'Config/config.php';

/**
 * Class DB
 * Extends class Config
 * @author Kleiton Azevedo
 * @package Connect
 */
class dbconnect extends config
{

    # var private Connect #

    // User
    private $strUsuario = USUARIO;
    // Host
    private $strHost    = HOST;
    // Password
    private $strSenha   = SENHA;


    ## Funçtion connect db ##
    private function Conexao()
    {

        try
        {
            // SET CHARSET UTF8
            $opcoes = array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES UTF8");

            // new Connect PDO
            $con = new PDO($this->strHost, $this->strUsuario, $this->strSenha , $opcoes);

            // Return  CONNECTIO
            return $con;
        }
        catch (PDOException $e)
        {
            // Error connect
            throw new Exception("Erro na conexão com o banco de dados .:", $e->getMessage());
        }



    }

    ## Função responsável em executar INSERT, UPDATE, DELETE da aplicação ##
    public function RunQuery($strSql)
    {

        // Pegando a conexão com o banco de dados e recenbendo o parametro SQL $strSql
        $stm = $this->Conexao()->prepare($strSql);
        // Executando e retornando os dados
        return $stm->execute();
    }

    ## Função responsável em executar os selects da aplicação ##
    public function RunSelect($strSql)
    {

        // Pegando a conexão como banco de dados e recebendo paramentro SQL $strSql
        $stm = $this->Conexao()->prepare($strSql);
        // Executando query
        $stm->execute();
        // Retornando todos os dados do select
        return $stm->fetchAll(PDO::FETCH_ASSOC);

    }



}

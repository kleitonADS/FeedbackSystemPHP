<?php

// claas ModelFeedback
require_once 'Models/ModelFeedback.php';

/**
 * Class Action
 * Extende Classe ModelFeedback
 * @package Action
 * @author Kleiton Souza
 */
class ActionAddFeedback extends ModelFeedback {

    ############  QUERYS DA ACTION ################

    // Insert
    protected  $strInsert = "INSERT INTO feedback ( nome ,email, desc_feedback, data, status_feedback, check_feedback )VALUES( '%s','%s','%s','%s','%s','%s')";

    // Select all feedbacks
    protected  $strSelect ="SELECT * FROM feedback ";

    // Select all feedbacks with paginaton
    protected  $strSelectP ="SELECT * FROM feedback LIMIT %s offset  %s";

    // Select all feedbacks with paginaton and param
    protected  $strSelectPS ="SELECT * FROM feedback WHERE %s  LIMIT %s offset  %s";

    // Select all feedbacks cheched
    protected  $strSelectCheck ="SELECT * FROM feedback WHERE check_feedback = 0";

    // select all feedbacks uncheched
    protected  $strSelectNoCheck ="SELECT * FROM feedback WHERE check_feedback = 1";

    // select all feedbacks active
    protected  $strSelectActive ="SELECT * FROM feedback WHERE status_feedback = 0";

    // select all feedbacks desatived
    protected  $strSelectNoActive ="SELECT * FROM feedback WHERE status_feedback = 1";

    // select one feedback with id
    protected  $strSelectOne ="SELECT * FROM feedback WHERE idfeedback = %s";

    // select all feedbacks by nome
    protected  $strSelectName ="SELECT * FROM feedback WHERE nome = '%s'";

    // select all feedbacks by email
    protected  $strSelectEmail ="SELECT * FROM feedback WHERE email = '%s'";

    // select all feedbacks by date
    protected  $strSelectDate ="SELECT * FROM feedback WHERE data = '%s'";

    // select all feedbacks param with by name
    protected  $strSelectParamWithName ="SELECT * FROM feedback WHERE %s";

    // Update feedback checked
    protected  $strUpdateChecked = "UPDATE feedback SET check_feedback='%s' WHERE idfeedback = %s";

    // update feedback stautus
    protected  $strUpdateActived = "UPDATE feedback SET status_feedback='%s' WHERE idfeedback = %s";

    // Delete feedback
    protected  $strDeleteFeedback = "DELETE FROM feedback WHERE idfeedback='%s'";

    #################################################


    ########## Functions for execute QUERYS #####################

    ##  INSERT ##
    public function insert($dataFeedback)
    {
        // Datas form
        $name   = $dataFeedback["name"];
        $email  = $dataFeedback["email"];
        $desc   = $dataFeedback["desc_feedback"];
        $date   = date('Y/m/d H:i:s');
        $status = "0"; // FALSE
        $check  = "0"; // FALSE

        $strSql = sprintf($this->strInsert, $name, $email, $desc, $date, $status, $check );
        return $this->RunQuery($strSql);
    }

    ## UPDATE  Check ##
    public function updateChecked($id, $newChecked)
    {
        $strSql = sprintf($this->strUpdateChecked,$newChecked, $id );
        return $this->RunQuery($strSql);
    }

    ## UPDATE  status ##
    public function updateActived($id, $newstatus)
    {
        $strSql = sprintf($this->strUpdateActived,$newstatus, $id );
        return $this->RunQuery($strSql);
    }


    ## DELETE ##
    public function deleteFeedback($idFeedback)
    {
        $strSql = sprintf($this->strDeleteFeedback, $idFeedback);
        return $this->RunQuery($strSql);
    }

    ## SELECT ##
    public function Select()
    {
       $strSql = sprintf($this->strSelect);
       //var_dump($this->RunSelect($strSql));
       return $this->RunSelect($strSql);

    }

    ## SELECT CHECK ##
    public function SelectCheck()
    {
       $strSql = sprintf($this->strSelectCheck);
       return $this->RunSelect($strSql);
    }

    ## SELECT UNCHECK ##
    public function SelectNoCheck()
    {
       $strSql = sprintf($this->strSelectNoCheck);
       return $this->RunSelect($strSql);
    }

    ## SELECT ACTIVE ##
    public function SelectActive()
    {
       $strSql = sprintf($this->strSelectActive);
       return $this->RunSelect($strSql);
    }

    ## SELECT NOT ACTIVE ##
    public function SelectNoActive()
    {
       $strSql = sprintf($this->strSelectNoActive);
       return $this->RunSelect($strSql);
    }


    // SELECT ONE BY ID
    public function SelectOne($idFeedback)
    {
       $strSql = sprintf($this->strSelectOne , $idFeedback);
       return $this->RunSelect($strSql);
    }


    ## SELECT BY NAME ##
    public function SelectName($strNameFeedback)
    {
       $strSql = sprintf($this->strSelectName , $strNameFeedback);
       return $this->RunSelect($strSql);
    }

    ## SELECT EMAIL ##
    public function SelectEmail($strNameFeedback)
    {
       $strSql = sprintf($this->strSelectEmail , $strNameFeedback);
       return $this->RunSelect($strSql);
    }

    ## SELECT DATE ##
    public function SelectDate($strNameFeedback)
    {
       $strSql = sprintf($this->strSelectDate , $strNameFeedback);
       return $this->RunSelect($strSql);
    }

    ## SELECT BY PARAM ##
    public function SelectParam($strParam)

    {

      switch ($strParam ) {
        case 'Check':
          $strSelectParam = $this->strSelectNoCheck;

          break;
        case 'Not Check':
          $strSelectParam = $this->strSelectCheck;
          break;

        case 'Active':
          $strSelectParam = $this->strSelectActive;
            break;

        case 'Disabled':
          $strSelectParam = $this->strSelectActive;
            break;
        default:
          # code...
          break;
      }

       $strSql = sprintf($strSelectParam);
       return $this->RunSelect($strSql);
    }


    ## SELECT BY PARAM AND BY NAME ##
    public function SelectParamWithName($strParam ,$strPesquisa)

    {

      switch ($strParam ) {
        case 'Check':
          $strSelectParam = "nome = '$strPesquisa' AND check_feedback = '1'";
          //var_dump($this->strSelectNoCheck );
          break;
        case 'Not Check':
          $strSelectParam = "nome = '$strPesquisa' AND check_feedback = '0'";
          break;

        case 'Active':
          $strSelectParam = "nome = '$strPesquisa' AND status_feedback = '0'";
            break;

        case 'Disabled':
          $strSelectParam = "nome = '$strPesquisa' AND status_feedback = '1'";
            break;
        default:
          # code...
          break;
      }

       $strSql = sprintf($this->strSelectParamWithName, $strSelectParam );
       return $this->RunSelect($strSql);
    }



    ## PAGINATON ##
    public function paginacao($intLimt=null, $intOffset=null,  $strPesquisa, $param ){

      if($strPesquisa && $param != NULL){

        switch ($param) {

          case 'nome':
            $strSearch = "nome = '$strPesquisa'";
            $strSql = sprintf($this->strSelectPS, $strSearch, $intLimt, $intOffset);
            break;

          case 'Email':
            $strSearch = "email = '$strPesquisa'";
            $strSql = sprintf($this->strSelectPS, $strSearch, $intLimt, $intOffset);
            break;

          case 'Date':

            $Date = explode('/', $strPesquisa);
            $intMonth = $Date[0];
            $intDay = $Date[1];
            $intYear = $Date[2];
            $newDate = "$intYear-$intMonth-$intDay";

            $strSearch = "data = '$newDate'";
            $strSql = sprintf($this->strSelectPS, $strSearch, $intLimt, $intOffset);
            break;

          case 'Check':
            $strSearch = "nome = '$strPesquisa' AND check_feedback = '1'";
            $strSql = sprintf($this->strSelectPS, $strSearch, $intLimt, $intOffset);
          break;

          case 'Not Check':
            $strSearch = "nome = '$strPesquisa' AND check_feedback = '0'";
            $strSql = sprintf($this->strSelectPS, $strSearch, $intLimt, $intOffset);
          break;

          case 'Active':
            $strSearch = "nome = '$strPesquisa' AND status_feedback = '0'";
            $strSql = sprintf($this->strSelectPS, $strSearch, $intLimt, $intOffset);
          break;

          case 'Disabled':
            $strSearch = "nome = '$strPesquisa' AND status_feedback = '1'";
            $strSql = sprintf($this->strSelectPS, $strSearch, $intLimt, $intOffset);
          break;

          default:
            # code...
            break;
        }


      }else{

        if($param != ""){
          switch ($param) {
            case 'Check':
              $strSearch = "check_feedback = '1'";
              $strSql = sprintf($this->strSelectPS, $strSearch, $intLimt, $intOffset);
              break;

            case 'Not Check':
              $strSearch = "check_feedback = '0'";
              $strSql = sprintf($this->strSelectPS, $strSearch, $intLimt, $intOffset);
              break;

            case 'Active':
              $strSearch = "status_feedback = '0'";
              $strSql = sprintf($this->strSelectPS, $strSearch, $intLimt, $intOffset);
              break;

            case 'Disabled':
              $strSearch = "status_feedback = '1'";
              $strSql = sprintf($this->strSelectPS, $strSearch, $intLimt, $intOffset);
              break;

          }
        }else{
          $strSql = sprintf($this->strSelectP, $intLimt, $intOffset , $strPesquisa );
        }

      }

      return $this->RunSelect($strSql);
    }

    ######################################################################################

}

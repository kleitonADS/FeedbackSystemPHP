<?php
// Config framework Smarty
include "Config/configSmarty.php";
// Config var global system and functions global
include "Config/config.php";
// Core FeedBack
require_once 'Core/feedback.php';

/**
 * ControllerFeedback
 * @author Kleiton Azevedo
 **/
class ControllerFeedback
{

  // FUNCTION INDEX SHOW BUTTONS ( ADD NEW feedback ) AND ( LIST ALL feedbacks ) ///////////////
  public function index()
  {
    // New  Object Feedback
    $objFeedback = new feedback();

    // New Smarty
    $smarty = new Smarty();

    // Var ( $strClassW ) class message ( empty )
    $strClassW = " ";
    // Var ( $strMsgSucess ) message ( empty )
    $strMsgSucess = " ";
    // Var ( $strMsgSucess ) Icon message ( empty )
    $strIconMsm = " ";
    // Var ( $strIconMsm ) int total all feedback
    $intTotalFeedback = count($objFeedback->Select());

    // Set datas for Object Smarty
    $smarty->assign("classW" ,$strClassW );
    $smarty->assign("Messagem_add" ,$strMsgSucess);
    $smarty->assign("IconMessagem_add" ,$strIconMsm);
    $smarty->assign("RegistroFeedback" ,$intTotalFeedback );

    // Sending datas for view (index.tpl)
    $smarty->display("./Views/index.tpl");

  }//////////////////////////////////////////////////////////////////////////////////////////////

  // FUNCTION FOR ( ADD NEW FEEDBACK ) ////////////////////////////////////////////////////////
  public function addFeedBack()
  {

    // New Object Feedback
    $objFeedback = new feedback();

    // Var ( $intTotalFeedback ) int total all feedback
    $intTotalFeedback = count($objFeedback->Select());

    // New object Smarty
    $smarty = new Smarty();

    // Set datas for object smarty
    $smarty->assign("classW" ,"");
    $smarty->assign("Messagem_add" ,"");
    $smarty->assign("name" ,"");
    $smarty->assign("email" ,"");
    $smarty->assign("desc" ,"");
    $smarty->assign("RegistroFeedback" ,$intTotalFeedback );

    // Sending datas for view (add_feedback.tpl)
    $smarty->display("./Views/add_feedback.tpl");

  }////////////////////////////////////////////////////////////////////////////////////////////////////


  // FUNCTION FOR LIST ALL FEEDBACKS //////////////////////////////////////////////////////////////////
  public function listFeedBack($intPage=null, $messSucess=null, $strPesquisa=null, $param=null)
  {

    // New Object Feedback
    $objFeedback = new feedback();

    // Var ( $intLimt ) int quatiti lines for page
    $intLimt = 6;
    // Var ( $intOffset )int page
    $intOffset = 0;

    // Var ( $strClassW ) class message
    $strClassW = "alert alert-success";
    // Var ( $strMsgSucess ) message
    $strMsgSucess = '- Registered successfully';
    // Var  ( $strIconMsm ) icon message
    $strIconMsm = "glyphicon glyphicon-ok-circle";
    // Var ( $intTotalName ) int total search by name ( empty )
    $intTotalName= " ";
    // Var ( $strMsearch ) message total by name ( empty )
    $strMsearch = " ";
    // Var ( $strClassW ) class messagem total by name ( empty )
    $strClassW = " ";


    // Check if isset var for search //////// ( Get for method $_GET  pagination ) /////////////////
    if (isset($_GET['tagSearch'] ) ) {

        // Var ( $strPesquisa ) get values input tagsearch
        $strPesquisa = $_GET['tagSearch'];

        // Var ( $param ) get values type search
        $param = $_GET['param'];

        // Var ( $intTotal ) get int total pages for all feedbacks
        $intTotal = ceil( count( $objFeedback->Select( $intLimt, $intOffset ))/$intLimt );

        // Ckeck type param search ////////////////////////////////////
        switch ($param) {

          // Type NOME ###########################
          case 'nome':

            // Var ( $intTotal) get all total pages for search by ( all by that NAME -> $strPesquisa  )
            $intTotal = ceil( count( $objFeedback->SelectName($strPesquisa))/$intLimt) ;

            // Var ( $intTotalName ) get total feedbacks by ( all by that NAME -> $strPesquisa  )
            $intTotalName = count($objFeedback->SelectName($strPesquisa));

            // Var ( $strMsearch ) message total feedbacks find by ( all by that NAME -> $strPesquisa  )
            $strMsearch = " Total found by name : <i> ( $strPesquisa ) </i>   <span class='badge greenb'> $intTotalName </span>";

            // Var ( $strClassW ) class message total feedbacks find by ( all by that NAME -> $strPesquisa )
            $strClassW = "alert alert-success greem";
            break;
          // ########################################

          // Type EMAIL ############################
          case 'Email':

            // Var ( $intTotal ) get all total pages for search by (  all by that EMAIL -> $strPesquisa )
            $intTotal = ceil( count( $objFeedback->SelectEmail($strPesquisa))/$intLimt);

            // Var ( $intTotalName ) get total feedbacks by (  all by that EMAIL -> $strPesquisa )
            $intTotalName = count($objFeedback->SelectEmail($strPesquisa));

            // Var ( $strMsearch ) message total feedbacks find by ( all by that EMAIL -> $strPesquisa )
            $strMsearch = "Total found by email : <i> ( $strPesquisa ) </i>  <span class='badge greenb'> $intTotalName</span>";
            // Var class message total feedbacks find by ( all by that EMAIL -> $strPesquisa )
            $strClassW = "alert alert-success greem";
            break;
          // ########################################

          // Type DATE ########################################
          case 'Date':

            // Var ( $intTotal) get all total pages for search by ( all by that DATE -> $strPesquisa )
            $intTotal = ceil( count( $objFeedback->SelectDate($strPesquisa))/$intLimt);

            $Date = explode('/', $strPesquisa);
            $intMonth = $Date[0];
            $intDay = $Date[1];
            $intYear = $Date[2];
            $newDate = "$intYear-$intMonth-$intDay";

            // Var ( $intTotalName ) get total feedbacks by ( all by that DATE -> $strPesquisa )
            $intTotalName = count($objFeedback->SelectDate($newDate));

            // Var ( $strMsearch ) message total feedbacks find by ( all by that DATE -> $strPesquisa )
            $strMsearch = "Total found by date : <i> ( $strPesquisa ) </i>  <span class='badge greenb'> $intTotalName</span>";

            // Var class message total feedbacks find by ( all by that DATE -> $strPesquisa )
            $strClassW = "alert alert-success greem";
            break;
          // ###################################################

          // Type CHECK ########################################
          case 'Check':



            // Var ( $intTotal) get all total pages for search by ( all feedbacks CHECK -> $param  )
            $intTotal = ceil( count( $objFeedback->SelectParam($param))/$intLimt);

            // Var ( $intTotalName ) get total feedbacks by ( all feedbacks CHECK -> $param  )
            $intTotalParam = count($objFeedback->SelectParam($param));

            // Check $strPesquisa Sending for pagination
            if(empty( $strPesquisa )){
              $nameSearch = " ";
            }else{
              $nameSearch =  " and by name ( <i>$strPesquisa</i> )";
            }
            // Var ( $strMsearch ) message total feedbacks find by ( CHECK -> $strPesquisa )
            $strMsearch = "Total found checked $nameSearch <span class='badge greenb'> $intTotalParam</span>";

            // Var class message total feedbacks find by ( all feedbacks CHECK -> $param  )
            $strClassW = "alert alert-success greem";
            break;
          // ####################################################

          // Type NOT CHECK ########################################
          case 'Not Check':

            // Var ( $intTotal) get all total pages for search by ( all feedbacks NO CHECK ->$param )
            $intTotal = ceil( count( $objFeedback->SelectParam($param))/$intLimt);

            // Var ( $intTotalName ) get total feedbacks by ( all feedbacks NO CHECK ->$param )
            $intTotalParam = count($objFeedback->SelectParam($param));

            // Check $strPesquisa Sending for pagination
            if(empty( $strPesquisa )){
              $nameSearch = " ";
            }else{
              $nameSearch =  " and by name ( <i> $strPesquisa </i>)";
            }

            // Var message total feedbacks find by ( all feedbacks NO CHECK ->$param )
            $strMsearch = "Total found by no checked  $nameSearch <span class='badge grayb'> $intTotalParam</span>";

            // Var class message total feedbacks find by ( all feedbacks NO CHECK ->$param )
            $strClassW = "alert alert-success graym";
            break;
          // ###################################################

          // Type DISABLED ########################################
          case 'Disabled':

            // Var ( $intTotal) get all total pages for search by (  all feedbacks DISABLED ->$param )
            $intTotal = ceil( count( $objFeedback->SelectParam($param))/$intLimt);

            // Var ( $intTotalName ) get total feedbacks by ( all feedbacks  DISABLED ->$param )
            $intTotalParam = count($objFeedback->SelectParam($param));

            // Check $strPesquisa Sending for pagination
            if(empty( $strPesquisa )){
              $nameSearch = " ";
            }else{
              $nameSearch =  " and by name ( <i>$strPesquisa</i> )";
            }

            // Var message total feedbacks find by (DISABLED)
            $strMsearch = "Total found by disabled  $nameSearch <span class='badge redb'> $intTotalParam</span>";

            // Var class message total feedbacks find by DISABLED
            $strClassW = "alert alert-success redm";
            break;
          // ###################################################

          // Type ACTIVE ########################################
          case 'Active':

            // Var ( $intTotal) get all total pages for search by ( all feedbacks ACTIVE ->$param )
            $intTotal = ceil( count( $objFeedback->SelectParam($param))/$intLimt);

            // Var ( $intTotalName ) get total feedbacks by ( all feedbacks ACTIVE ->$param )
            $intTotalParam = count($objFeedback->SelectParam($param));

            // Check $strPesquisa Sending for pagination
            if(empty( $strPesquisa )){
              $nameSearch = " ";
            }else{
              $nameSearch =  " and by name (<i> $strPesquisa </i> )";
            }

            // Var message total feedbacks find by ( all feedbacks ACTIVE ->$param )
            $strMsearch = "Total found by actived $nameSearch <span class='badge orangeb'> $intTotalParam</span>";

            // Var class message total feedbacks find by ( all feedbacks ACTIVE ->$param )
            $strClassW = "alert alert-success bluem";
            break;
          // ###################################################

          default:
            # code...
            break;
        }
        //////////////////////////// End switch ///////////////////////////////////////////


    // NO var for search //////////////////////////////////
    }else {

      // NO var for search but with ($param) //////////////////////////////////
      if($param != "") {

      // Ckeck type param search ////////////////////////////////////
      switch ($param) {

        // Type NOME ###########################
        case 'nome':

            // Var ( $intTotal) get all total pages for search by ( ALL WITH THAT NAME->$strPesquisa )
            $intTotal = ceil( count( $objFeedback->SelectName($strPesquisa))/$intLimt) ;

            // Var message total feedbacks find by ( ALL WITH THAT NAME->$strPesquisa )
            $intTotalName = count($objFeedback->SelectName($strPesquisa));

            // Var message total feedbacks find by NAME
            $strMsearch = "Total found by name <i> ( $strPesquisa )</i> <span class='badge greenb'> $intTotalName</span> ";

            // Var class message total feedbacks find by NAME
            $strClassW = "alert alert-success greem";

          break;
        // ###################################################

        // Type EMAIL ###########################
        case 'Email':

            // Var ( $intTotal) get all total pages for search by ( ALL WITH THAT EMAIL->$strPesquisa )
            $intTotal = ceil( count( $objFeedback->SelectEmail($strPesquisa))/$intLimt) ;

            // Var message total feedbacks find by (ALL WITH THAT EMAIL->$strPesquisa )
            $intTotalName = count($objFeedback->SelectEmail($strPesquisa));

            // Var message total feedbacks find by EMAIL
            $strMsearch = "Total found by email <i> ( $strPesquisa )</i>  <span class='badge greenb'> $intTotalName</span>";

            // Var class message total feedbacks find by EMAIL
            $strClassW = "alert alert-success greem";

          break;
        // ###################################################


        // Type DATE ###########################
        case 'Date':

            // Var ( $intTotal) get all total pages for search by DATE
            $intTotal = ceil( count( $objFeedback->SelectDate($strPesquisa))/$intLimt) ;


            $Date = explode('/', $strPesquisa);
            $intMonth = $Date[0];
            $intDay = $Date[1];
            $intYear = $Date[2];
            $newDate = "$intYear-$intMonth-$intDay";

            $intTotalName = count($objFeedback->SelectDate($newDate));

            // Var message total feedbacks find by (ALL WITH THAT DATE)
            $strMsearch = "Total found by date <i> ( $strPesquisa )</i> <span class='badge greenb'> $intTotalName</span>";

            // Var class message total feedbacks find by (ALL WITH THAT DATE)
            $strClassW = "alert alert-success greem";

          break;
        // ###################################################


        // Type CHECK ###########################
        case 'Check':

           if ($strPesquisa != ""){

             // Var ( $intTotal) get all total pages for search by CHECK
             $intTotal = ceil( count( $objFeedback->SelectParamWithName($param, $strPesquisa ))/$intLimt) ;

             // Var ( $intTotalName ) get total feedbacks by ( ALL CHECK WITH NAME )
             $intTotalParam = count($objFeedback->SelectParamWithName($param, $strPesquisa ));

             // Var message total feedbacks find by CHECKED
             $strMsearch = "Total found by checked and name <i> ( $strPesquisa )</i>  <span class='badge greenb'> $intTotalParam</span>";

            // Var class message total feedbacks find by CHECK
             $strClassW = "alert alert-success greem";

           }else {

             // Var ( $intTotal) get all total pages for search by  all CHECK
             $intTotal = ceil( count( $objFeedback->SelectParam($param))/$intLimt) ;


             $intTotalParam = count($objFeedback->SelectParam($param));

             // Var message total feedbacks find by CHECK ALL
             $strMsearch = "Total found by checked  <span class='badge greenb'> $intTotalParam</span>";

            // Var class message total feedbacks find by ( ALL CHECKED )
             $strClassW = "alert alert-success greem";
           }
          break;
        // ###################################################


        // Type NO CHECK ###########################
        case 'Not Check':

          if ($strPesquisa != ""){

            // Var ( $intTotal) get all total pages for search by ( NO CHECK )
            $intTotal = ceil( count( $objFeedback->SelectParamWithName($param, $strPesquisa ))/$intLimt) ;

            // Var ( $intTotalName ) get total feedbacks by ( ALL NO CHECK WITH NAME )
            $intTotalParam = count($objFeedback->SelectParamWithName($param, $strPesquisa ));

            // Var message total feedbacks find by (NO CHECK)
            $strMsearch = "Total found by no Check and name <i> ( $strPesquisa )</i>   <span class='badge grayb'> $intTotalParam</span>";

            // Var class message total feedbacks find by (NO CHECK)
            $strClassW = "alert alert-success graym";

          }else {

            // Var ( $intTotal) get all total pages for search by NO CHECK
            $intTotal = ceil( count( $objFeedback->SelectParam($param))/$intLimt) ;

            // Var ( $intTotalName ) get total feedbacks by ( ALL ONLY NO CHECK)
            $intTotalParam = count($objFeedback->SelectParam($param));

            // Var message total feedbacks find by (ALL ONLY NO CHECK)
            $strMsearch = "Total found by no Checked  <span class='badge grayb'> $intTotalParam</span>";

            // Var class message total feedbacks find by NO CHECK
            $strClassW = "alert alert-success graym";

          }

          break;
        // ###################################################


        // Type ACTIVE ###########################
        case 'Active':

          if ($strPesquisa != ""){

            // Var ( $intTotal) get all total pages for search by (ACTIVE)
            $intTotal = ceil( count( $objFeedback->SelectParamWithName($param, $strPesquisa ))/$intLimt) ;

            // Var ( $intTotalName ) get total feedbacks by (NO active WITH NAME)
            $intTotalParam = count($objFeedback->SelectParamWithName($param, $strPesquisa ));

            // Var message total feedbacks find by (NO Active)
            $strMsearch = "Total found  by actived and name <i> ( $strPesquisa )</i>  <span class='badge orangeb'> $intTotalParam</span>";

            // Var class message total feedbacks find by (NO active)
            $strClassW = "alert alert-success bluem";

          }else {

            // Var ( $intTotal) get all total pages for search by (ACTIVE)
            $intTotal = ceil( count( $objFeedback->SelectParam($param))/$intLimt) ;

            // Var ( $intTotalName ) get total feedbacks by (ACTIVE)
            $intTotalParam = count($objFeedback->SelectParam($param));

            // Var message total feedbacks find by (ACTIVE)
            $strMsearch = "Total found by actived  <span class='badge orangeb'> $intTotalParam</span> ";

            // Var class message total feedbacks find by (ACTIVE)
            $strClassW = "alert alert-success bluem";

          }

          break;
        // ###################################################

        // Type DISABLED ###########################
        case 'Disabled':

          if ($strPesquisa != ""){

            // Var ( $intTotal) get all total pages for search by disabled
            $intTotal = ceil( count( $objFeedback->SelectParamWithName($param, $strPesquisa ))/$intLimt) ;

            // Var ( $intTotalName ) get total feedbacks by disabled WITH NAME
            $intTotalParam = count($objFeedback->SelectParamWithName($param, $strPesquisa ));

            // Var message total feedbacks find by disabled
            $strMsearch = "Total found by disabled and name <i> ( $strPesquisa )</i>  <span class='badge redb'> $intTotalParam</span>";

            // Var class message total feedbacks find by disabled
            $strClassW = "alert alert-success redm";

          }else {

            // Var ( $intTotal) get all total pages for search by DISABLED
            $intTotal = ceil( count( $objFeedback->SelectParam($param))/$intLimt) ;

            // Var ( $intTotalName ) get total feedbacks by DISABLED
            $intTotalParam = count($objFeedback->SelectParam($param));

            // Var message total feedbacks find by NO CHECK
            $strMsearch = "Total found by disabled <span class='badge redb'> $intTotalParam</span>";

            // Var class message total feedbacks find by DISABLED
            $strClassW = "alert alert-success redm";

          }

          break;
        // ###################################################

        // ###################################################
        default:
          # code...
          break;
        // ###################################################

      } //////////////////////////// End switch ///////////////////////////////////////////


      }else{

        // Return main list All Feedbacks
        $intTotal = ceil( count( $objFeedback->Select( $intLimt, $intOffset ))/$intLimt );

    }



    }

    if (isset($_GET['p'])) {
        $intOffset = $_GET['p'];
    }else{
        $intOffset = $intPage;

    }




    $arrDadoAll = $objFeedback->paginacao($intLimt, $intOffset * 6, $strPesquisa ,$param);

    $intTotalFeedback = count($objFeedback->Select());
    $intTotalFeedbackCheck = count($objFeedback->SelectCheck());
    $intTotalFeedbackNoCheck = count($objFeedback->SelectNoCheck());
    $intTotalFeedbackActive = count($objFeedback->SelectActive());
    $intTotalFeedbackNoActive = count($objFeedback->SelectNoActive());
    $intTotalNext = $intTotal-2;

    $smarty = new Smarty();
    // Todos os dados de Menu
    $smarty->assign("ArrFeedback" ,$arrDadoAll  );


    $smarty->assign("intOffset" ,$intOffset );
    $smarty->assign("quantPage" ,$intTotal );
    $smarty->assign("quantPag" ,$intTotalNext );
    $smarty->assign("TotalCheck" ,$intTotalFeedbackCheck );
    $smarty->assign("NoTotalCheck" ,$intTotalFeedbackNoCheck );
    $smarty->assign("TotalActive" ,$intTotalFeedbackActive );
    $smarty->assign("NoTotalActive" ,$intTotalFeedbackNoActive );
    $smarty->assign("RegistroFeedback" ,$intTotalFeedback );
    $smarty->assign("tagSearch" ,$strPesquisa );
    $smarty->assign("paramSearch" ,$param );
    $smarty->assign("TmessagemSearch" ,$strMsearch  );
    $smarty->assign("ClassSearch" ,$strClassW  );


    $smarty->display("./Views/list_feedback.tpl");


  }


  // Function Index show page index project
  public function insertFeedBack()
  {
    // All values form
    $dadosForm = $_POST;

    if($dadosForm){

      // input forms
      $nameForm  = $_POST['name'];
      $emailForm = $_POST['email'];
      $descForm  = $_POST['desc_feedback'];

      if(empty($nameForm) || empty($emailForm)  || empty($descForm )){

        $strMsgErro = 'All fields are required.';
        $strClassW = 'alert alert-warning';
        $name  = $_POST['name'];
        $email = $_POST['email'];
        $desc  = $_POST['desc_feedback'];


        $smarty = new Smarty();
        $smarty->assign("classW" ,$strClassW );
        $smarty->assign("Messagem_add" ,$strMsgErro);
        $smarty->assign("name" ,$name);
        $smarty->assign("email" ,$email);
        $smarty->assign("desc" ,$desc);


        $smarty->display("./Views/add_feedback.tpl");

        } else {

          $objFeedback = new feedback();
          $checkinsert = $objFeedback->insert($dadosForm);

          if($checkinsert){

            header("location:?action=31");

          }else{

            $strMsgErro = 'Error save feedback.';
            $strClassW = 'alert alert-danger';
            $name  = $_POST['name'];
            $email = $_POST['email'];
            $desc  = $_POST['desc_feedback'];


            $smarty = new Smarty();
            $smarty->assign("classW" ,$strClassW );
            $smarty->assign("Messagem_add" ,$strMsgErro);
            $smarty->assign("name" ,$name);
            $smarty->assign("email" ,$email);
            $smarty->assign("desc" ,$desc);

            $smarty->display("./Views/add_feedback.tpl");

          }

        }

    }else {

      $strMsgErro = 'Error data form.';
      $strClassW = 'alert alert-danger';
      $name  = $_POST['name'];
      $email = $_POST['email'];
      $desc  = $_POST['desc_feedback'];


      $smarty = new Smarty();
      $smarty->assign("classW" ,$strClassW );
      $smarty->assign("Messagem_add" ,$strMsgErro);
      $smarty->assign("name" ,$name);
      $smarty->assign("email" ,$email);
      $smarty->assign("desc" ,$desc);
      $smarty->display("./Views/add_feedback.tpl");

    }

  }




  public function addSucessFeedBack() {

    // New  Object Feedback
    $objFeedback = new feedback();

    // Get total all feedback
    $intTotalFeedback = count($objFeedback->Select());

    // New object Smarty
    $smarty = new Smarty();

    // Var with class alert sucess
    $strClassW = "alert alert-success";
    // Var with message Sucess
    $strMsgSucess = '- Registered successfully';
    // Var with Icon for Message
    $strIconMsm = "glyphicon glyphicon-ok-circle";


    // Set values for  view
    $smarty->assign("classW" ,$strClassW );
    $smarty->assign("Messagem_add" ,$strMsgSucess);
    $smarty->assign("IconMessagem_add" ,$strIconMsm);
    $smarty->assign("RegistroFeedback" ,$intTotalFeedback );

    // send values for view (index.tpl)
    $smarty->display("./Views/index.tpl");
  }


  public function checkedFeedBack() {

    // Get datas with method( $_GET)
    $tagSearch = $_GET["tagSearch"];
    $param = $_GET["param"];
    $intIdFeedback = $_GET['id'];
    $intPage = $_GET['page'];


    // // Meesagem sucess checked feedback
    $messSucess = "Feedback checked";

    // Check ($intPage)
    if ($intPage == "") {
        $intPage = 0;
    }

    // New object feedback
    $objFeedback = new feedback();

    // Get Datas by one feedback with ($intIdFeedback)
    $ArrFeedback = $objFeedback->selectOne( $intIdFeedback );

    // Check status feedback
    $statusCheck = $ArrFeedback[0]['check_feedback'];

    // Check Type status that feedback
    if( $statusCheck == 0){

      // set new  values for feedback
      $intNewCheched = 1;

      // Update new status for feedback
      $booCheck = $objFeedback->updateChecked($intIdFeedback ,$intNewCheched);

      // If updateChecked is ( true )
      if($booCheck){
        //var_dump($messSucess);
        //var_dump($param);
        //var_dump($tagSearch);


        //var_dump ($messSucessNew);//

        // Redirecton for listFeedBack with ($messSucess)
        header("location:?action=20&p=$intPage&Messagem=$messSucess&tagSearch=$tagSearch&param=$param");

      // If updateChecked ( False )
      }else{

        // Mesagem error checked feedback
        $messError = " Error checked feedback ";

        // Redirecton for listFeedBack with ($messError)
        header("location:?action=20&p=$intPage&Messagem=$messError&tagSearch=$tagSearch&param=$param");

      }

    // Status checked =  1
    }else{

      // Var with new status
      $intNewCheched = 0;

      // Set new status for feedback with new status
      $booCheck = $objFeedback->updateChecked($intIdFeedback ,$intNewCheched);

      // If update feedback (true)
      if($booCheck){



        // Mesagem sucess
        $messSucess = "Feedback Unchecked";

        // Redirecton for list feedback with message sucess
        header("location:?action=20&p=$intPage&Messagem=$messSucess&tagSearch=$tagSearch&param=$param");

      // If update feedback (False)
      }else{

        // Mesagem error
        $messError = "Error Unchecked feedback";

        // Redirecton for list feedback with message error
        header("location:?action=20&p=$intPage&Messagem=$messError&tagSearch=$tagSearch&param=$param");

      }
    }

  }

  public function activedFeedBack(){

    // get datas with method( $_GET)
    $intIdFeedback = $_GET['id'];
    $intPage = $_GET['page'];
    $tagSearch = $_GET["tagSearch"];
    $param = $_GET["param"];
    // Messagem if (true)
    $messSucess = "Feedback disabled";

    // Messagem if (false)
    $messError = " Error disabled Feedback";

    // Check var ($intPage)
    if ($intPage == "") {
        $intPage = 0;
    }

    // New object feedback
    $objFeedback = new feedback();

    // Get data one feedback with ($intIdFeedback)
    $ArrFeedback = $objFeedback->selectOne($intIdFeedback);

    // Get status feedback
    $statusActived = $ArrFeedback[0]['status_feedback'];

    // Check status feedback
    if( $statusActived == 0){

      // set new  values for feedback
      $intNewStatus = 1;

      // Update new status for feedback
      $booActived = $objFeedback->updateActived($intIdFeedback ,$intNewStatus);

      // Check if new status updated
      if($booActived){

        // redirecton to listFeedBack with messagem sucess
        header("location:?action=20&p=$intPage&Messagem=$messSucess&tagSearch=$tagSearch&param=$param");


      // Error updated status_feedback
      }else{

        // redirecton to listFeedBack with messagem Error
        header("location:?action=20&p=$intPage&Messagem=$messError&tagSearch=$tagSearch&param=$param");
      }

    // Delete feedback
    }else{

      // Check delete feedback with ($intIdFeedback)
      $booActived = $objFeedback->deleteFeedback( $intIdFeedback );

      // if delete feedback is ( true )
      if( $booActived ){

        // Messagem sucess delete
        $messSucess = "Feedback deleted";

        // Redirecton for list feedback with $messSucess
        header("location:?action=20&p=$intPage&Messagem=$messSucess&tagSearch=$tagSearch&param=$param");

      // if delete feedback ( false )
      }else{

        // Messagem sucess delete
        $messError = "Error delete Feedback";

        // Redirecton for list feedback with $messErroe
        header("location:?action=20&p=$intPage&Messagem=$messError&tagSearch=$tagSearch&param=$param");

      }
    }
  }


  public function showFeedBack(){

    // get vars with method ($_GET)
    $strSearch = $_GET["tagSearch"];
    $strParam = $_GET["param"];
    $intIdFeedback = $_GET['id'];
    $intPageFeedback = $_GET['page'];

    // new object feedback
    $objFeedback = new feedback();

    // Get data one feedback with ($intIdFeedback)
    $ArrFeedback = $objFeedback->selectOne($intIdFeedback);

    // new object framework Smarty
    $smarty = new Smarty();

    // Get datas to show on view
    $smarty->assign("IdFeedback" ,$ArrFeedback[0]["idfeedback"]);
    $smarty->assign("name" ,$ArrFeedback[0]["nome"]);
    $smarty->assign("email" ,$ArrFeedback[0]["email"]);
    $smarty->assign("desc_feedback" ,$ArrFeedback[0]["desc_feedback"]);
    $smarty->assign("data" ,$ArrFeedback[0]["data"]);
    $smarty->assign("status" ,$ArrFeedback[0]["status_feedback"]);
    $smarty->assign("check_feedback" ,$ArrFeedback[0]["check_feedback"]);
    $smarty->assign("page" ,$intPageFeedback);
    $smarty->assign("searchStr" ,$strSearch );
    $smarty->assign("searchparamStr" ,$strParam);

    // sent datas for to the view
    $smarty->display("./Views/show_feedback.tpl");


  }


  public function searchFeedBack(){

    // get vars with  method ($_POST)
    $strPesquisa = $_POST['nameFeedback'];
    $param = $_POST["search_param"];

    // SEARCH WITH input $strPesquisa
    if($strPesquisa != ''){

      // List with $param and $strPesquisa
      $this->listFeedBack($int=null, $page=null, $strPesquisa, $param);


    // SEARCH NO imput ($strPesquisa)
    }else{

      // search with $param
      if($param == 'Check' || $param == 'Not Check' || $param == 'Disabled' || $param == 'Active'){

        // List with ($param) only
        $this->listFeedBack($int=null, $page=null, $strPesquisa, $param);

      // error search with other ($param) need ($strPesquisa)
      }else{

        // Messagem error imput empty
        $messSucess = "Field seach empty";

        // redirention From listFeedBack with messagem
        header("location:?action=20&Messagem=$messSucess");
      }
    }
  }


  public function executar($intAction = 0)
  {
    //  SWITCH ACTIONS
    switch ($intAction) {

      // addFeedBack
      case '10':
        $this->addFeedBack();
        break;

      // listFeedBack
      case '20':
        $this->listFeedBack();
        break;

      // insertFeedBack
      case '30':
        $this->insertFeedBack();
        break;

      // Message addFeedBack
      case '31':
        $this->addSucessFeedBack();
        break;

      // Mark checkedFeedBack
      case '32':
        $this->checkedFeedBack();
        break;

      // Mark activedFeedBack
      case '33':
        $this->activedFeedBack();
        break;

      // Show feedback
      case '40':
        $this->showFeedBack();
        break;

      // SearchFeedBack
      case '50':
        $this->searchFeedBack();
        break;

      // Inde page
      default:
        $this->index();
        break;
    }
  }
}

?>

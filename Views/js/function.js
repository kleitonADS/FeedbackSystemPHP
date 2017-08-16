
$('#myModal').on('hidden.bs.modal', function () {

   var url = location.search
   var strSearch = document.getElementById('searchStr').value;
   var strParam = document.getElementById('searchparamStr').value;
   var intPage = document.getElementById('pageS').value;




  if( url == "?action=20"){
     location.href = "?action=20&p=0";
  }

  if( url == "?action=50&Messagem="){

    var url2 = "?action=20&p="+intPage+"&Messagem=&tagSearch="+strSearch+"&param="+strParam+"";
     location.href = url2;

  }else{
     location.href = url;
   }

 });

 $( function() {
   $( "#datepicker" ).datepicker();
 } );


var itensMenu = document.getElementsByClassName("listMenu");
var titleSearch = document.getElementById('search_concept');
var paramS = document.getElementById('search_param');
var inputTypeS = document.getElementById('inputSearch');
var inputTypeDate = document.getElementById('datepicker');

inputTypeDate.type = 'hidden';


 for (var i = 0; i < itensMenu[0].childElementCount; i++) {


   itensMenu[0].children[i].addEventListener('click', function() {

     itenM = this.children[0].innerText;

     //alert(inputTypeS.type);
     //console.log(inputTypeS.placeholder);

     switch (itenM) {
        case 'Name':

        titleSearch.innerHTML = itenM;
        paramS.value = 'nome';
        inputTypeS.type = 'text';
        inputTypeS.placeholder = 'Search by name';
        inputTypeDate.type = 'hidden';
        inputTypeDate.name = '#';
        inputTypeS.name = 'nameFeedback';

        $('.lName').addClass('active');
        $('.lEmail').removeClass('active');
        $('.lDate').removeClass('active');
        $('.lCheck').removeClass('active');
        $('.lNoCheck').removeClass('active');
        $('.lActive').removeClass('active');
        $('.lDisabled').removeClass('active');



        break;


        case 'Email':
          titleSearch.innerHTML = itenM;
          paramS.value = 'Email';
          inputTypeS.type = 'email';
          inputTypeS.placeholder = 'Search by email';
          inputTypeDate.type = 'hidden';
          inputTypeDate.name = '#';
          inputTypeS.name = 'nameFeedback';

          $('.lName').removeClass('active');
          $('.lEmail').addClass('active');
          $('.lDate').removeClass('active');
          $('.lCheck').removeClass('active');
          $('.lNoCheck').removeClass('active');
          $('.lActive').removeClass('active');
          $('.lDisabled').removeClass('active');

          break;

        case 'Date':
          titleSearch.innerHTML = itenM;
          paramS.value = 'Date';
          inputTypeS.type = 'hidden';
          inputTypeDate.type = 'text';
          inputTypeDate.name = 'nameFeedback';
          inputTypeS.name ='#';

          $('.lName').removeClass('active');
          $('.lEmail').removeClass('active');
          $('.lDate').addClass('active');
          $('.lCheck').removeClass('active');
          $('.lNoCheck').removeClass('active');
          $('.lActive').removeClass('active');
          $('.lDisabled').removeClass('active');
          break;

        case 'Check':
          titleSearch.innerHTML = itenM;
          paramS.value = 'Check';
          inputTypeS.type = 'text';
          inputTypeS.placeholder = 'All checked or and by name';
          inputTypeDate.type = 'hidden';
          inputTypeDate.name = '#';
          inputTypeS.name = 'nameFeedback';

          $('.lName').removeClass('active');
          $('.lEmail').removeClass('active');
          $('.lDate').removeClass('active');
          $('.lCheck').addClass('active');
          $('.lNoCheck').removeClass('active');
          $('.lActive').removeClass('active');
          $('.lDisabled').removeClass('active');
          break;

        case 'Not Check':
          titleSearch.innerHTML = itenM;
          paramS.value = 'Not Check';
          inputTypeS.type = 'text';
          inputTypeS.placeholder = 'All not checked or and by name';
          inputTypeDate.type = 'hidden';
          inputTypeDate.name = '#';
          inputTypeS.name = 'nameFeedback';

          $('.lName').removeClass('active');
          $('.lEmail').removeClass('active');
          $('.lDate').removeClass('active');
          $('.lCheck').removeClass('active');
          $('.lNoCheck').addClass('active');
          $('.lActive').removeClass('active');
          $('.lDisabled').removeClass('active');
          break;

        case 'Disabled':
          titleSearch.innerHTML = itenM;
          paramS.value = 'Disabled';
          inputTypeS.type = 'text';
          inputTypeS.placeholder = 'All disabled or and by name';
          inputTypeDate.type = 'hidden';
          inputTypeDate.name = '#';
          inputTypeS.name = 'nameFeedback';

          $('.lName').removeClass('active');
          $('.lEmail').removeClass('active');
          $('.lDate').removeClass('active');
          $('.lCheck').removeClass('active');
          $('.lNoCheck').removeClass('active');
          $('.lActive').removeClass('active');
          $('.lDisabled').addClass('active');
          break;

        case 'Active':
          titleSearch.innerHTML = itenM;
          paramS.value = 'Active';
          inputTypeS.type = 'text';
          inputTypeS.placeholder = 'All active or and by name';
          inputTypeDate.type = 'hidden';
          inputTypeDate.name = '#';
          inputTypeS.name = 'nameFeedback';

          $('.lName').removeClass('active');
          $('.lEmail').removeClass('active');
          $('.lDate').removeClass('active');
          $('.lCheck').removeClass('active');
          $('.lNoCheck').removeClass('active');
          $('.lActive').addClass('active');
          $('.lDisabled').removeClass('active');
          break;

        default:

      }
    });

 }

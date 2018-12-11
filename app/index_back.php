<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>Temaki ZAP</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link rel="manifest" href="manifest.json">
</head>
<body>
<div class="navbar-fixed">
  <nav class="grey lighten-5" role="navigation">
    <div class="nav-wrapper container"><a id="logo-container" href="#" class="brand-logo"><img src="img/logo.png"></a>
      <ul class="right hide-on-med-and-down">
        <li><a href="#">menu</a></li>
      </ul>

        <ul id="nav-mobile" class="sidenav menu">
          <li><a href="#"><img src="img/logo.png" class="logo-inter"></a></li>
          <li class="menu"><a href="#temaki">Mesas</a></li>
          <li class="menu"><a href="#sushi">Sushi / Cariocas</a></li>
          <li class="menu"><a href="#sunomono">Sunomono</a></li>
          <li class="menu"><a href="#bebidas">Bebidas</a></li>
          <hr>
          <li class="menu"><p>Taxa de entrega R$5,00</p></li>

        </ul>
      <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons" style="color: #d32f2f;">menu</i></a>
    </div>
  </nav>
  </div>

  <form method="post" action="index.php" >
  <div class="row">
    <div class="col s12 m6 divisoria" id="temaki">
      <h5>Temaki</h5>

    </div>

    <div class="col s12 m6" id="temaki">

      <div class="card">
        <div class="card-image waves-effect waves-block waves-light">
          <img class="activator" src="img/menu/salmao.jpg">
        </div>
        <div class="card-content">
          <span class="card-title activator grey-text text-darken-4"> 01 - Temaki de Salmão<i class="material-icons right">more_vert</i></span>
          <p>R$ 15,90</p>
        </div>
        <div class="card-reveal">
          <span class="card-title grey-text text-darken-4">02 - Temaki de Camarão<i class="material-icons right">close</i></span>
          <p>Enrolados com nori em forma de cone , preparando com arroz e recheado com salmão, creem cheese, gergelim e cebolinha.</p>
          <p>R$ 15,90</p>
          <!-- <input placeholder="quantidade" type="number" id="tksalmao" class="validate"> -->
        </div>
      </div>

      <div class="card">
        <div class="card-image waves-effect waves-block waves-light">
          <img class="activator" src="img/menu/camarao.jpg">
        </div>
        <div class="card-content">
          <span class="card-title activator grey-text text-darken-4"> 02 - Temaki Camarão<i class="material-icons right">more_vert</i></span>
          <p>R$ 15,90</p>
        </div>
        <div class="card-reveal">
          <span class="card-title grey-text text-darken-4">02 - Temaki de Camarão<i class="material-icons right">close</i></span>
          <p>Enrolados com nori em forma de cone , preparando com arroz e recheado com camarão, creem cheese, gergelim e cebolinha.</p>
          <p>R$ 15,90</p>
           <!-- <input placeholder="quantidade" id="tkcamarao" type="number" class="validate"> -->
        </div>
      </div>

       <div class="card">
        <div class="card-image waves-effect waves-block waves-light">
          <img class="activator" src="img/menu/kani.jpg">
        </div>
        <div class="card-content">
          <span class="card-title activator grey-text text-darken-4">  03 - Temaki Kani<i class="material-icons right">more_vert</i></span>
          <p>R$ 15,90</p>
        </div>
        <div class="card-reveal">
          <span class="card-title grey-text text-darken-4">03 - Temaki Kani<i class="material-icons right">close</i></span>
          <p>Enrolados com nori em forma de cone , preparando com arroz e recheado com kani, creem cheese, gergelim e cebolinha.</p>
          <p>R$ 15,90</p>
           <!-- <input placeholder="quantidade" id="tkKani" type="number" class="validate"> -->
        </div>
      </div>

       <div class="card">
        <div class="card-image waves-effect waves-block waves-light">
          <img class="activator" src="img/menu/kaniesalmao.jpg">
        </div>
        <div class="card-content">
          <span class="card-title activator grey-text text-darken-4">  04 - Temaki Salmão e Kani<i class="material-icons right">more_vert</i></span>
          <p>R$ 15,90</p>
        </div>
        <div class="card-reveal">
          <span class="card-title grey-text text-darken-4">04 - Temaki Salmão e Kani<i class="material-icons right">close</i></span>
          <p>Enrolados com nori em forma de cone , preparando com arroz e recheado com kani, creem cheese, gergelim e cebolinha.</p>
          <p>R$ 15,90</p>
           <!-- <input placeholder="quantidade" id="tkSalmaoKani" type="number" class="validate"> -->
        </div>
      </div>

        <div class="card">
        <div class="card-image waves-effect waves-block waves-light">
          <img class="activator" src="img/menu/filadelfia.jpg">
        </div>
        <div class="card-content">
          <span class="card-title activator grey-text text-darken-4">  05 - Temaki Filadélfia<i class="material-icons right">more_vert</i></span>
          <p>R$ 15,90</p>
        </div>
        <div class="card-reveal">
          <span class="card-title grey-text text-darken-4"> 05 - Temaki Filadélfia<i class="material-icons right">close</i></span>
          <p>Enrolados com nori em forma de cone , preparando com arroz e recheado com salmão em cubos misturados com cream cheese cebolinha e gergelim.</p>
          <p>R$ 15,90</p>
          <!-- <input placeholder="quantidade" id="tkFiladelfia" type="number" class="validate"> -->
        </div>
      </div>


       <div class="card">
        <div class="card-image waves-effect waves-block waves-light">
          <img class="activator" src="img/menu/hotFila.jpg">
        </div>
        <div class="card-content">
          <span class="card-title activator grey-text text-darken-4">  06 - Temaki hot Filadélfia<i class="material-icons right">more_vert</i></span>
          <p>R$ 15,90</p>
        </div>
        <div class="card-reveal">
          <span class="card-title grey-text text-darken-4"> 06 - Temaki hot Filadélfia<i class="material-icons right">close</i></span>
          <p>Enrolados com nori em forma de cone , preparando com arroz e recheado com rolinhos empanados e fritos de salmão cream cheese e gergelim.</p>
          <p>R$ 15,90</p>
           <!-- <input placeholder="quantidade" id="tkHotFiladelfia" type="number" class="validate"> -->
        </div>
      </div>

       <div class="card">
        <div class="card-image waves-effect waves-block waves-light">
          <img class="activator" src="img/menu/ebiKAni.jpg">
        </div>
        <div class="card-content">
          <span class="card-title activator grey-text text-darken-4"> 07 - Ebi Kani<i class="material-icons right">more_vert</i></span>
          <p>R$ 16,90</p>
        </div>
        <div class="card-reveal">
          <span class="card-title grey-text text-darken-4"> 06 - Temaki hot Filadélfia<i class="material-icons right">close</i></span>
          <p>Enrolados com nori em forma de cone , preparando com arroz e recheado com kani e cream cheese.</p>
          <p>R$ 16,90</p>
           <!-- <input placeholder="quantidade" id="tkEbiKani" type="number" class="validate"> -->
        </div>
      </div>


       <div class="card">
        <div class="card-image waves-effect waves-block waves-light">
          <img class="activator" src="img/menu/ebiKAni.jpg">
        </div>
        <div class="card-content">
          <span class="card-title activator grey-text text-darken-4"> 08 - Ebi Salmão Maki<i class="material-icons right">more_vert</i></span>
          <p>R$ 18,90</p>
        </div>
        <div class="card-reveal">
          <span class="card-title grey-text text-darken-4"> 06 - Temaki hot Filadélfia<i class="material-icons right">close</i></span>
          <p>Enrolados com nori em forma de cone , preparando com arroz e recheado com camarões empandos, salmão fresco em cubos e cream cheese.</p>
          <p>R$ 18,90</p>
           <!-- <input placeholder="quantidade" id="tkEbiSalmaoMaki" type="number" class="validate"> -->
        </div>
      </div>




    </div>

     <div class="col s12 m6 divisoria" id="sushi">
      <h5>Sushi / Carioca</h5>

    </div>


    <div class="col s12 m6" id="sushi">

       <div class="card">
        <div class="card-image waves-effect waves-block waves-light">
          <img class="activator" src="img/menu/sushi.jpg">
        </div>
        <div class="card-content">
          <span class="card-title activator grey-text text-darken-4"> 09 - Filadélfia<i class="material-icons right">more_vert</i></span>
          <p>R$ 24.90</p>
        </div>
        <div class="card-reveal">
          <span class="card-title grey-text text-darken-4">09 - Filadélfia<i class="material-icons right">close</i></span>
          <p>20 unidades.</p>
          <p>R$ 24.90</p>
           <!-- <input placeholder="quantidade" id="filadelfia" type="number" class="validate"> -->
        </div>
      </div>

       <div class="card">
        <div class="card-image waves-effect waves-block waves-light">
          <img class="activator" src="img/menu/uramaki.jpg">
        </div>
        <div class="card-content">
          <span class="card-title activator grey-text text-darken-4"> 10 - Uramaki<i class="material-icons right">more_vert</i></span>
          <p>R$ 29,90</p>
        </div>
        <div class="card-reveal">
          <span class="card-title grey-text text-darken-4">10 - Uramaki<i class="material-icons right">close</i></span>
          <p>20 unidades.</p>
          <p>R$ 29,90</p>
           <!-- <input placeholder="quantidade" id="uramaki" type="number" class="validate"> -->
        </div>
      </div>


       <div class="card">
        <div class="card-image waves-effect waves-block waves-light">
          <img class="activator" src="img/menu/ebimaki.jpg">
        </div>
        <div class="card-content">
          <span class="card-title activator grey-text text-darken-4"> 11 - Ebimaki<i class="material-icons right">more_vert</i></span>
          <p>R$ 24,90</p>
        </div>
        <div class="card-reveal">
          <span class="card-title grey-text text-darken-4">11 - Ebimaki<i class="material-icons right">close</i></span>
          <p>20 unidades.</p>
          <p>R$ 24,90</p>
           <!-- <input placeholder="quantidade" id="ebimaki" type="number" class="validate"> -->
        </div>
      </div>

      <div class="card">
        <div class="card-image waves-effect waves-block waves-light">
          <img class="activator" src="img/menu/nigiri.jpg">
        </div>
        <div class="card-content">
          <span class="card-title activator grey-text text-darken-4"> 12 - Nigiri de Salmão<i class="material-icons right">more_vert</i></span>
          <p>R$ 22,90</p>
        </div>
        <div class="card-reveal">
          <span class="card-title grey-text text-darken-4">12 - Nigiri de Salmão<i class="material-icons right">close</i></span>
          <p>10 Unidades.</p>
          <p>R$ 22,90</p>
           <!-- <input placeholder="quantidade" id="nigiri" type="number" class="validate"> -->
        </div>
      </div>

      <div class="card">
        <div class="card-image waves-effect waves-block waves-light">
          <img class="activator" src="img/menu/carioca.jpg">
        </div>
        <div class="card-content">
          <span class="card-title activator grey-text text-darken-4"> 13 - Cariocas<i class="material-icons right">more_vert</i></span>
          <p></p>
        </div>
        <div class="card-reveal">
          <span class="card-title grey-text text-darken-4">13 - Cariocas<i class="material-icons right">close</i></span>
          <p>10 Unidades.</p>
          <p>R$ 24,90</p>
          <!--  <input placeholder="quantidade" id="carioca1" type="number" class="validate"> -->

           <p>20 Unidades.</p>
          <p>R$ 24,90</p>
          <!--  <input placeholder="quantidade" id="carioca2" type="number" class="validate"> -->


           <p>30 Unidades.</p>
          <p>R$ 42,90</p>
          <!--  <input placeholder="quantidade" id="carioca3" type="number" class="validate"> -->
        </div>
      </div>

      


    </div>

      <div class="col s12 m6 divisoria" id="sunomono">
      <h5>Sunomono</h5>

    </div>


       <div class="col s12 m6">

       <div class="card">
        <div class="card-image waves-effect waves-block waves-light">
          <img class="activator" src="img/menu/sunomono.jpg">
        </div>
        <div class="card-content">
          <span class="card-title activator grey-text text-darken-4">14 - Sunomono de Salmão<i class="material-icons right">more_vert</i></span>
          <p>R$ 20,00</p>
        </div>
        <div class="card-reveal">
          <span class="card-title grey-text text-darken-4">14 - Sunomono de Salmão<i class="material-icons right">close</i></span>
          <p>Salmão cortado em cubos, pepino e gergelim.</p>
          <p>R$ 20,00</p>
            <!--  <input placeholder="quantidade" id="sunomono1" type="number" class="validate"> -->
        </div>
      </div>

       <div class="card">
        <div class="card-image waves-effect waves-block waves-light">
          <img class="activator" src="img/menu/sunomonoMisto.jpg">
        </div>
        <div class="card-content">
          <span class="card-title activator grey-text text-darken-4"> 15 - Sunomono Misto<i class="material-icons right">more_vert</i></span>
          <p>R$ 17,00</p>
        </div>
        <div class="card-reveal">
          <span class="card-title grey-text text-darken-4">15 - Sunomono Misto<i class="material-icons right">close</i></span>
          <p>Salmão cortado em cubos , camarão kani, pepino e gergelim.</p>
          <p>R$ 17,00</p>
           <!--   <input placeholder="quantidade" id="sunomono2" type="number" class="validate"> -->
        </div>
      </div>
      


    </div>

   
     <div class="col s12 m6 divisoria" id="bebidas">
      <h5>Bebidas</h5>

    </div>


    <div class="col s12 m6" >


       <div class="card">
        <div class="card-image waves-effect waves-block waves-light">
          <img class="activator" src="img/menu/cocalata.jpg">
        </div>
        <div class="card-content">
          <span class="card-title activator grey-text text-darken-4">16 - Coca Cola <i class="material-icons right">more_vert</i></span>
          <p>R$ 3,50</p>
        </div>
        <div class="card-reveal">
          <span class="card-title grey-text text-darken-4">16 - Coca Cola<i class="material-icons right">close</i></span>
          
          <p>R$ 3,50</p>
           <!--   <input placeholder="quantidade" id="cocalata" type="number" class="validate"> -->
        </div>
      </div>

       <div class="card">
        <div class="card-image waves-effect waves-block waves-light">
          <img class="activator" src="img/menu/500.jpg">
        </div>
        <div class="card-content">
          <span class="card-title activator grey-text text-darken-4"> 17 - Coca Cola 500ml <i class="material-icons right">more_vert</i></span>
          <p>R$ 6,00</p>
        </div>
        <div class="card-reveal">
          <span class="card-title grey-text text-darken-4"> 17 - Coca Cola 500ml <i class="material-icons right">close</i></span>
        
          <p>R$ 6,00</p>
           <!--   <input placeholder="quantidade" id="coca500" type="number" class="validate"> -->
        </div>
      </div>
      


    </div>



  </div>

  </form>

  

  <footer class="page-footer orange">
    <div class="container">
      <div class="row">
        <div class="col l6 s12">
          <h5 class="white-text">Company Bio</h5>
          <p class="grey-text text-lighten-4">We are a team of college students working on this project like it's our full time job. Any amount would help support and continue development on this project and is greatly appreciated.</p>


        </div>


 <div id="modal1" class="modal bottom-sheet">
    <div class="modal-content">
      
      <table>
        <thead>
          <tr>
              <th>Item</th>
              <th>Quantidade</th>
              <th>Valor</th>
          </tr>
        </thead>

        <tbody>
          <tr>
          <div id="tk1">
            <td>01 - Temaki de Salmão</td>
            <td><div id="quantidadeTk1"></div></td>
            <td><div id="ValorTk1"></div></td>
            </div>
          </tr>
          <tr>
          <div id="tk2">
            <td>02 - Temaki Camarão</td>
            <td><div id="quantidadeTk2"></div></td>
            <td><div id="ValorTk2"></div></td>
            </div>
          </tr>
          <tr>
          <div id="tk3">
            <td>03 - Temaki Kani</td>
            <td><div id="quantidadeTk3"></div></td>
            <td><div id="ValorTk3"></div></td>
            </div>
          </tr>
          <tr>
          <div id="tk4">
            <td>04 - Temaki Salmão e Kani</td>
            <td><div id="quantidadeTk4"></div></td>
            <td><div id="ValorTk4"></div></td>
            </div>
          </tr>
          <tr>
          <div id="tk5">
            <td>05 - Temaki Filadélfia</td>
            <td><div id="quantidadeTk5"></div></td>
            <td><div id="ValorTk5"></div></td>
            </div>
          </tr>
          <tr>
          <div id="tk6">
            <td>06 - Temaki hot Filadélfia</td>
            <td><div id="quantidadeTk6"></div></td>
            <td><div id="ValorTk6"></div></td>
            </div>
          </tr>
           <tr>
          <div id="tk7">
            <td>07 - Ebi Kani</td>
            <td><div id="quantidadeTk7"></div></td>
            <td><div id="ValorTk7"></div></td>
            </div>
          </tr>

           <tr>
          <div id="tk8">
            <td>08 - Ebi Salmão Maki</td>
            <td><div id="quantidadeTk8"></div></td>
            <td><div id="ValorTk8"></div></td>
            </div>
          </tr>

          <tr>
          <div id="tk9">
            <td>Temake de Salmão</td>
            <td><div id="quantidadeTk9"></div></td>
            <td><div id="ValorTk9"></div></td>
            </div>
          </tr>

          <tr>
          <div id="tk10">
            <td>Temake de Salmão</td>
            <td><div id="quantidadeTk10"></div></td>
            <td><div id="ValorTk10"></div></td>
            </div>
          </tr>

           <tr>
          <div id="tk11">
            <td>Temake de Salmão</td>
            <td><div id="quantidadeTk11"></div></td>
            <td><div id="ValorTk11"></div></td>
            </div>
          </tr>

           <tr>
          <div id="tk12">
            <td>Temake de Salmão</td>
            <td><div id="quantidadeTk12"></div></td>
            <td><div id="ValorTk12"></div></td>
            </div>
          </tr>

           <tr>
          <div id="tk13">
            <td>Temake de Salmão</td>
            <td><div id="quantidadeTk13"></div></td>
            <td><div id="ValorTk13"></div></td>
            </div>
          </tr>

          <tr>
          <div id="tk14">
            <td>Temake de Salmão</td>
            <td><div id="quantidadeTk14"></div></td>
            <td><div id="ValorTk14"></div></td>
            </div>
          </tr>

           <tr>
          <div id="tk15">
            <td>Temake de Salmão</td>
            <td><div id="quantidadeTk15"></div></td>
            <td><div id="ValorTk15"></div></td>
            </div>
          </tr>

          <tr>
          <div id="tk16">
            <td>Temake de Salmão</td>
            <td><div id="quantidadeTk16"></div></td>
            <td><div id="ValorTk16"></div></td>
            </div>
          </tr>

            <tr>
          <div id="tk17">
            <td>Temake de Salmão</td>
            <td><div id="quantidadeTk17"></div></td>
            <td><div id="ValorTk17"></div></td>
            </div>
          </tr>

           <tr>
          <div id="tk18">
            <td>Temake de Salmão</td>
            <td><div id="quantidadeTk17"></div></td>
            <td><div id="ValorTk17"></div></td>
            </div>
          </tr>

           <tr>
          <div id="tk19">
            <td>Temake de Salmão</td>
            <td><div id="quantidadeTk17"></div></td>
            <td><div id="ValorTk17"></div></td>
            </div>
          </tr>

         
        </tbody>
      </table>
    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-close waves-effect waves-green btn-flat">Agree</a>
    </div>
  </div>
       
       
      </div>
    </div>
    <div class="footer-copyright">
      <div class="container">
      Made by <a class="orange-text text-lighten-3" href="http://materializecss.com">Materialize</a>
      </div>
    </div>
  </footer>


  
   <!-- <a id="pedido" class="waves-effect waves-light btn modal-trigger" href="#modal1" onclick="pedir()">Pedir</a> -->
   <a id="pedido" class="waves-effect waves-light btn modal-trigger" href="https://api.whatsapp.com/send?phone=5581996610042&text=Ola! Gostaria de Pedir"" >Pedir</a>




  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>
    <script src="js/pedido.js"></script>
  <script type="text/javascript">
    $(document).ready(function(){
    $('.modal').modal();
  });
         
  </script>

  </body>
</html>

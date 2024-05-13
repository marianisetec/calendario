<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Calendário Interativo</title>
	<!-- Fonte de Icones -->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="css/materialize.min.css">

</head>
<body> 
<nav>
    <div class="nav-wrapper">
      <a href="#" class="brand-logo">Bingo</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="https://youtu.be/s9oQRKsROF8?si=Ko5M4-kljlUGoA7F">Capibara</a></li>
        <li><a href="https://www.instagram.com/">Instagram</a></li>
        <li><a href="https://br.pinterest.com/">Pinterest</a></li>
      </ul>
    </div>
  </nav>


  <ul id="slide-out" class="sidenav">
    <li><div class="user-view">
      <div class="background">
        <img src="img/naogrita.png">
      </div>
      <a href="#user"><img class="circle" src="img/naogrita.png"></a>
      <a href="#name"><span class="white-text name">John Doe</span></a>
      <a href="#email"><span class="white-text email">jdandturk@gmail.com</span></a>
    </div></li>
    <li><a href="#!"><i class="material-icons">cloud</i>First Link With Icon</a></li>
    <li><a href="#!">Second Link</a></li>
    <li><div class="divider"></div></li>
    <li><a class="subheader">Subheader</a></li>
    <li><a class="waves-effect" href="#!">Third Link With Waves</a></li>
  </ul>
  
  <a href="#" data-target="slide-out" class="sidenav-trigger"><i class="material-icons">menu</i></a>

  <div class="carousel">
    <a class="carousel-item" href="#one!"><img src="https://stickerly.pstatic.net/sticker_pack/WYGFyLSvhc65PisQOfMtw/ZXDZIO/5/e482ed9f-0f0b-42b3-a0ca-7812f43f4bd1.png"></a>
    <a class="carousel-item" href="#two!"><img src="https://i.redd.it/9pgh13t7zakb1.png"></a>
    <a class="carousel-item" href="#three!"><img src="https://i.redd.it/lgzn9cdan2fa1.jpg"></a>
    <a class="carousel-item" href="#four!"><img src="https://i.pinimg.com/736x/52/c1/96/52c196411c0387a361b19b3fd77eb310.jpg"></a>
    <a class="carousel-item" href="#five!"><img src="https://imgb.ifunny.co/images/fe57047aac81a0198c96cd46639db7e5d662b867099ad5da02bfce79e8db902b_1.jpg"></a>
	
  </div>
      

  

  <div class="container" style="margin-top: 100px;">
<ul id="slide-out" class="sidenav">
  <li><div class="user-view">
	<div class="background">
	  <img src="images/office.jpg">
	</div>
	<a href="#user"><img class="circle" src="images/yuna.jpg"></a>
	<a href="#name"><span class="white-text name">John Doe</span></a>
	<a href="#email"><span class="white-text email">jdandturk@gmail.com</span></a>
  </div></li>
  <li><a href="#!"><i class="material-icons">cloud</i>First Link With Icon</a></li>
  <li><a href="#!">Second Link</a></li>
  <li><div class="divider"></div></li>
  <li><a class="subheader">Subheader</a></li>
  <li><a class="waves-effect" href="#!">Third Link With Waves</a></li>
</ul>



		<div class="row">
			<div class="col s12">
				<form>
					<input type="text" class="datepicker">
				</form>
			</div>
		</div>
		<div class="row">
			<div class="col s12">
				<form>
					<input type="text" class="timepicker">
				</form>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col s4"></div>
			<div class="col s4">
			<a style="margin:center auto" class="waves-effect waves-light btn modal-trigger" href="#modal1">
				Abrir mensagem
			</a>
			<div>
			<div class="col s4"></div>
</div>


  
	

  <!-- Modal Structure -->
  <div id="modal1" class="modal">
    <div class="modal-content">
      <h4>Meus dados</h4>
      <p>Aqui é o corpo da mensagem que estou passando</p>
    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-close waves-effect waves-green btn-flat">
		Fechar
	  </a>
    </div>
  </div>

	<script src="js/jquery.min.js"></script>
	<script src="js/materialize.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$('.datepicker').datepicker({
				format: 'dddd, dd mmm yyyy',
				showClearBtn: true,
				i18n:{
					cancel: 'Cancelar',
					clear: 'Limpar',
					done: 'Ok',
					previusMonth: '<',
					nextMonth: '>',
					months:[
						'Janeiro',
						'Fevereiro',
						'Março',
						'Abril',
						'Maio',
						'Junho',
						'Julho',
						'Agosto',
						'Setembro',
						'Outubro',
						'Novembro',
						'Dezembro'
					],
					monthsShort:[
						'Jan',
						'Fev',
						'Mar',
						'Abr',
						'Mai',
						'Jun',
						'Jul',
						'Ago',
						'Set',
						'Out',
						'Nov',
						'Dez'
					],
					weekdays:[
						'Domingo',
						'Segunda-feira',
						'Terça-feira',
						'Quarta-feira',
						'Quinta-feira',
						'Sexta-feira',
						'Sábado'
					],
					weekdaysShort:[
						'Dom',
						'Seg',
						'Ter',
						'Qua',
						'Qui',
						'Sex',
						'Sab'
					],
					weekdaysAbbrev:['D','S','T','Q','Q','S','S'],
				}
			});
			$('.timepicker').timepicker({
				i18n:{
					cancel: 'Cancelar',
					clear: 'Limpar',
					done: 'Ok',
				},
				twelveHour: false,
			});
		});
	
		$(document).ready(function(){
    $('.sidenav').sidenav();
  });
  
    $(document).ready(function(){
    $('.carousel').carousel();
  });

  $(document).ready(function(){
    $('.modal').modal();
  });
         
 
	</script>
</body>
</html>
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
      <a href="#" class="brand-logo">Logo</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="sass.html">Sass</a></li>
        <li><a href="badges.html">Components</a></li>
        <li><a href="collapsible.html">JavaScript</a></li>
      </ul>
    </div>
  </nav>

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
<a href="#" data-target="slide-out" class="sidenav-trigger"><i class="material-icons">menu</i></a>
	<div class="container" style="margin-top: 100px;">
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
  
	</script>
</body>
</html>
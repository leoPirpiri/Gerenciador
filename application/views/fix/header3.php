<!DOCTYPE html>
<html>
<head>
	<title><?php echo $titulo ?></title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta http-equiv="Cache-control" content="no-cache">
	<meta http-equiv="Expires" content="-1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- stylesheet assets -->
	<link href="<?php echo base_url('assets') ?>/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?php echo base_url('assets') ?>/css/styleChips.css" rel="stylesheet">
	<link href="<?php echo base_url('assets/css/chartist-tooltip.css') ?>" rel="stylesheet">
	<link href="<?php echo base_url('assets') ?>/css/jquery.dynatable.css" rel="stylesheet">
	<link href="<?php echo base_url('assets') ?>/css/font-awesome.css" rel="stylesheet">
	<!-- -->
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo base_url('media/img/favicon.png') ?>">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo base_url('media/img/favicon.png') ?>">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo base_url('media/img/favicon.png') ?>">
    <link rel="apple-touch-icon-precomposed" href="<?php echo base_url('media/img/favicon.png') ?>">
	<!-- JavaScript assets -->
	<script src="<?php echo base_url('assets/js/jquery-3.1.1.min.js') ?>"></script>
	<script defer src="<?php echo base_url('assets/js/bootstrap.min.js') ?>"></script>
	<script defer src="<?php echo base_url('assets/js/chartist-tooltip.js') ?>"></script>
	<script defer src="<?php echo base_url('assets/js/chartist.fill.donut.js') ?>"></script>
	<script defer src="<?php echo base_url('assets/js/loadPages.js') ?>"></script>
	<script defer src="<?php echo base_url('assets/js/jquery.dynatable.js') ?>"></script>
</head>
<body >
	<nav id="nav-horizintal" class="navbar navbar-default">
		<div id="date" class="pull-left"><h1 id="hora" onload="moveRelogio()"> </h1></div>
		<div id="time" class="pull-left"><p id="data" class="text-muted"></p></div>
		<div id="user" class="pull-right">
			<span><img src="<?php echo base_url('assets') ?>/imagens/user_default.png"/></span>
		</div>
		<div id="userName" class="pull-right">
			<li class="dropdown">
				<h5><strong><?php echo $obj['name'] ?></strong></h5>
				<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><p><h6><?php echo $obj['email'] ?><span><i class="fa fa-chevron-down"></i></span></h6></p> </a>
			</li>

		</div>
	</nav>
	<div id="menu" class="navbar navbar-inverse navbar-fixed-left"><div class="navbar-header"></div>
		<div id="logo" class="img img-responsive">
			<img src="<?php echo base_url('assets') ?>/imagens/show-logo-bc.png">
		</div>
		<ul class="nav navbar-nav">

			<ul id="listaMenu" class="nav nav-list accordion">
				<li class="nav-header">
					<a class="link">Cadastros <i id="chevron" class="fa fa-chevron-down"></i></a>
					<ul id="demo" class="submenu">
						<li><a href="#">Clientes</a></li>
						<li><a href="#">Documentações</a></li>
						<li><a href="#">Usuários</a></li>
						<li><a href="#">Veículos</a></li>
						<li><a href="#">Equipamentos</a></li>
						<li><a href="#">Linhas</a></li>
						<li><a href="#">Contratos EPTC</a></li>
						<li><a href="#">Serviços Agendados</a></li>
						<li><a href="#">Instaladores</a></li>
						<li><a href="<?php echo site_url('gerencia_equipamentos') ?>">Logística de equipamentos</a></li>
						<li><a href="#">Representates</a></li>
						<li><a href="#">Comandos</a></li>
					</ul>
				</li>
				<li class="nav-header">
					<a class="link">Financeiro <i id="chevron" class="fa fa-chevron-down"></i></a>
					<ul id="demo" class="submenu">
						<li><a href="#">Lista</a></li>
						<li><a href="#">Baixa Retorno</a></li>
						<li><a href="#">Config. Boleto</a></li>

					</ul>
				</li>
				<li class="nav-header">
					<a class="link">Relatórios <i id="chevron" class="fa fa-chevron-down"></i></a>
					<ul id="demo" class="submenu">
						<li><a href="#">Faturas</a></li>
						<li><a href="#">Envio de Faturas</a></li>
						<li><a href="#">Contas a Pagar</a></li>
						<li><a href="#">Contratos</a></li>
						<li><a href="#">Tempo Logado</a></li>
						<li><a href="#">Envio de SMS</a></li>

					</ul>
				</li>
				<li class="nav-header">
					<a class="link">Suporte <i id="chevron" class="fa fa-chevron-down"></i></a>
					<ul id="demo" class="submenu">
						<li><a href="#">Ordem de Serviço</a></li>
						<li><a href="#">Ticket</a></li>
						<li><a href="#">Desatualizados</a></li>
						<li><a href="#">Cadastro de Veículos</a></li>
					</ul>
				</li>
				<li class="nav-header">
					<a class="link">Configurações <i id="chevron" class="fa fa-chevron-down"></i></a>
					<ul id="demo" class="submenu">
						<li><a href="#">SMS</a></li>
					</ul>
				</li>
				<li class="nav-header">
					<a class="link">Monitoramento <i id="chevron" class="fa fa-chevron-down"></i></a>
					<ul id="demo" class="submenu">
						<li><a href="#">Equipamento Violado</a></li>
						<li><a href="" target="_blank">Gateway</a></li>
					</ul>
				</li>
			</ul>
		</ul>
	</div>
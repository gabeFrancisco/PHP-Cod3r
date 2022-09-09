<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="./css/style.css" type="text/css" rel="stylesheet" />
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300;400;600&display=swap" rel="stylesheet">
	<title>PHP Course</title>
</head>

<body>
	<header>
		<h1><a href="index.php">PHP Course</a></h1>
		<h2>Exercises List</h2>
	</header>
	<main>
		<div class="content">
			<div class="modulos">
				<div class="modulo verde">
					<h3>1 - Básico </h3>
					<ul>
						<li><a href="exercicio.php?dir=basico&file=ola">Olá!</a></li>
						<li><a href="exercicio.php?dir=basico&file=html">Misturando HTML</a></li>
						<li><a href="exercicio.php?dir=basico&file=comentarios">Comentários</a></li>
						<li><a href="exercicio.php?dir=basico&file=desafio">Desafio</a></li>
					</ul>
				</div>
				<div class="modulo vermelho">
					<h3>2 - Tipos de Dados</h3>
					<ul>
						<li><a href="exercicio.php?dir=tipos&file=int">Inteiro</a></li>
						<li><a href="exercicio.php?dir=tipos&file=float">Float</a></li>
						<li><a href="exercicio.php?dir=tipos&file=aritmetica">Operações Aritméticas</a></li>
						<li><a href="exercicio.php?dir=tipos&file=string">String</a></li>
						<li><a href="exercicio.php?dir=tipos&file=boolean">Booleano</a></li>
						<li><a href="exercicio.php?dir=tipos&file=conversao">Conversão</a></li>
					</ul>
				</div>
				<div class="modulo azul">
					<h3>3 - Variáveis</h3>
					<ul>
						<li><a href="exercicio.php?dir=variaveis&file=basico">Básico</a></li>
						<li><a href="exercicio.php?dir=variaveis&file=basico">Init</a></li>
						<li><a href="exercicio.php?dir=variaveis&file=atribuicao">Atribuição</a></li>
						<li><a href="exercicio.php?dir=variaveis&file=interpolacao">Interpolação</a></li>
						<li><a href="exercicio.php?dir=variaveis&file=variaveis_variaveis">Variaveis Variaveis</a></li>
						<li><a href="exercicio.php?dir=variaveis&file=valor_referencia">Valor VS Referência</a></li>
						<li><a href="exercicio.php?dir=variaveis&file=constantes">Constantes</a></li>
					</ul>
				</div>
				<div class="modulo roxo">
					<h3>4 - Estruturas de Controle</h3>
					<ul>
						<li><a href="exercicio.php?dir=controle&file=if_else">If Else</a></li>
						<li><a href="exercicio.php?dir=controle&file=operadores_relacionais">Operadores Relacionais</a></li>
						<li><a href="exercicio.php?dir=controle&file=desafio_operadores_logicos">Desafio Operadores Lógicos</a></li>
						<li><a href="exercicio.php?dir=controle&file=switch">Switch</a></li>
					</ul>
				</div>
				<div class="modulo amarelo">
					<h3>5 - Array</h3>
					<ul>
						<li><a href="exercicio.php?dir=array&file=array1">Básico de Array</a></li>
						<li><a href="exercicio.php?dir=array&file=maps">Maps</a></li>
						<li><a href="exercicio.php?dir=array&file=operacoes">Operações</a></li>
						<li><a href="exercicio.php?dir=array&file=multidimensionais">Arrays Multidimensionais</a></li>
						<li><a href="exercicio.php?dir=array&file=constantes">Arrays Constantes</a></li>
						<li><a href="exercicio.php?dir=array&file=get">$_GET</a></li>
						<li><a href="exercicio.php?dir=array&file=post">$_POST</a></li>
					</ul>
				</div>
				<div class="modulo marrom">
					<h3>6 - Estruturas de Controle #2</h3>
					<ul>
						<li><a href="exercicio.php?dir=controle2&file=for">Laço For</a></li>
						<li><a href="exercicio.php?dir=controle2&file=foreach">Laço Foreach</a></li>
						<li><a href="exercicio.php?dir=controle2&file=break_continue">Break & Continue</a></li>
						<li><a href="exercicio.php?dir=controle2&file=while">Do & Do While</a></li>
					</ul>
				</div>
				<div class="modulo azul-claro">
					<h3>7 - Funções</h3>
					<ul>
						<li><a href="exercicio.php?dir=funcoes&file=funcao">Função & Escopo</a></li>
						<li><a href="exercicio.php?dir=funcoes&file=args_retorno">Argumentos & Retorno</a></li>
						<li><a href="exercicio.php?dir=funcoes&file=usando_tipos">Usando Tipos</a></li>
						<li><a href="exercicio.php?dir=funcoes&file=anonimas">Funções Anônimas</a></li>
						<li><a href="exercicio.php?dir=funcoes&file=closure_callable">Closures & Callables</a></li>
						<li><a href="exercicio.php?dir=funcoes&file=retornando_funcao">Retornando Função</a></li>
						<li><a href="exercicio.php?dir=funcoes&file=map_filter">Map & Filter</a></li>
					</ul>
				</div>
				<div class="modulo verde-claro">
					<h3>8 - Orientação a Objetos</h3>
					<ul>
						<li><a href="exercicio.php?dir=oop&file=classe">Classe</a></li>
						<li><a href="exercicio.php?dir=oop&file=construtor_destrutor">Construtor & Destrutor</a></li>
						<li><a href="exercicio.php?dir=oop&file=heranca">Herança</a></li>
						<li><a href="exercicio.php?dir=oop&file=encapsulamento">Encapsulamento</a></li>
						<li><a href="exercicio.php?dir=oop&file=estatico">Membros Estáticos</a></li>
						<li><a href="exercicio.php?dir=oop&file=interface">Interface</a></li>
						<li><a href="exercicio.php?dir=oop&file=abstrata">Classe Abstrata</a></li>
					</ul>
				</div>
			</div>
		</div>
	</main>
	<footer>
		<h3>Genesis Technology © <?= date('Y') ?></h3>
	</footer>
</body>

</html>
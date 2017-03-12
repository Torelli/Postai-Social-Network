<?php
	date_default_timezone_set('America/Sao_Paulo');
?>
<html>
	<head>
		<title>Postaí | Deixe aqui sua confissão...</title>
		<meta http-equiv="refresh" content="60">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<style>
			body{
				padding:0;
				margin:0;
				border:0;
				background-image:url(imgs/bg.png);
				background-attachment: fixed;
				background-size:5%;
			}
			table{
				border:1px solid black;
				border-collapse: collapse;
			}
			table, th, td {
				border: 1px solid black;
				text-align:center;
			}
			.master{
				width:50%;
				height:auto;
				margin-left:auto;
				margin-right:auto;
				background: rgba(255, 255, 255, 0.6);
				border:2px solid lightgray;
				padding:0.1%;
				border-radius:10px;

			}
			#banner{
				margin-top:5%;
				width:50%;
				height:20%;
				margin-left:auto;
				margin-right:auto;
				background-image:url(imgs/banner.png);
				background-size:contain;
				background-repeat:no-repeat;
			}
			.container,.mensagens{
				font-size:20px;
				width:70%;
				min-height:15%;
				height:auto;
				margin-left:auto;
				margin-right:auto;
				margin-top:5%;
				margin-bottom:3%;
				cursor:text;
				padding:1%;
				border-radius:1px;
				box-shadow: 4px 5px 15px black;
				background-color:#ffff80;
				border-top:10px solid #ffdb4d;
				overflow:hidden; 
				background-image: 
				linear-gradient(90deg, transparent 79px, #abced4 79px, transparent 50px),
				linear-gradient(#eee .1em, transparent .1em);
				background-size: 100% 0.9em;
			}
			.mensagens{
				animation: fadein 2s;
			}
			textarea{
				font-size:20px;
				margin-left:auto;
				margin-right:auto;
				width:100%;
				resize:none;
				border:none;
				outline:none;
				background-color:transparent;
			}
			input[type="submit"]{
				transition:0.5s ease-in-out;
				width:100%;
				height:100%;
				background-color:#4d2600;
				border:none;
				box-shadow: 3px 3px 2px #1a0d00;
				outline:none;
				background: linear-gradient(to bottom right, #4d2600, #1a0d00);
				border-radius:10px;
				color:white;
				cursor:pointer;
			}
			input[type="submit"]:hover{
				transition:0.5s ease-in-out;
				background: linear-gradient(to bottom right,  #663300, #1a0d00);
				box-shadow: 4px 4px 3px #1a0d00;
				padding:5%;
			}
			.data{
				position:absolute;
				width:8%;
				height:auto;
				margin-left:30%;
				margin-top:2%;
				z-index:1;
			}
			.botao{
				padding:0;
				width:10%;
				height:4%;
				margin-left:auto;
				margin-right:auto;
			}
			.msg{
				min-height:10%;
				height:auto;
			}
			.obs{
				color:gray;
				font-size:15px;
				margin-left:15%;
				margin-top:-2%;
				margin-bottom:1%;
			}
			@keyframes fadein{
				from{opacity:0;}
				to{opacity:1;}
			}
			#close{
				margin-top:-4.8%;
				position:fixed;
				width:30px;
				height:30px;
				background-image:url(imgs/close.png);
				margin-left:90%;
				cursor:pointer;
				z-index:6;
			}
			#validacao{
				margin-top:-5%;
				transition:0.5s ease-in-out;
				width:100%;
				height:4%;
				background-color:rgb(62, 52, 54);
				color:white;
				text-align:center;
				line-height:40px;
				font-family:arial;
				font-size:20px;
				opacity:0;
				position: fixed;
				z-index:5;
			}
			#topo{
				transition:0.5s ease-in-out;
				width:5%;
				height:8%;
				background-color:rgb(38, 28, 30);
				position: fixed;
				bottom:0;
				right:8%;
				opacity:0.5;
				cursor:pointer;
				background-image:url(imgs/topo.png);
				background-size:100% 100%;
				background-repeat:no-repeat;
				border-top-left-radius:10%;
				border-top-right-radius:10%;
			}
			#topo:hover{
				transition:0.5s ease-in-out;
				opacity:1;
			}
			#stats{
				transition:0.5s ease-in-out;
				width:2%;
				height:8%;
				background-color:rgb(38, 28, 30);
				position: fixed;
				bottom:45%;
				left:0;
				opacity:0.5;
				cursor:pointer;
				background-image:url(imgs/stats.png);
				background-size:100%;
				background-repeat:no-repeat;
				border-top-right-radius:10%;
				border-bottom-right-radius:10%;
				overflow:hidden;
			}
			#stats:hover{
				transition:0.5s ease-in-out;
				opacity:1;
				width:10%;
				height:20%;
				bottom:40%;
				background-image:none;
				padding:1%;
			}
			hr{
				display:none;
			}
			span{
				color:white;
				display:none;
				font-size:26px;
				text-align:center;
			}
			span#total{
				font-size:40px;
				color:#ffdb4d;
			}
			#stats:hover span, #stats:hover hr{
				display:block;
				z-index:1;
			}
			span.titulo{
				font-size:20;
			}
			#footer{
				width:98%;
				height:2%;
				background-color:rgb(62, 52, 54);
				color:white;
				text-align:center;
				padding:1%;
				bottom:0;
			}
			a:link{
				color:#ffcc00;
				text-decoration:none;
			}
			a:hover{
				text-decoration:underline;
			}
			.error{
				width:20%;
				height:20%;
				background-image:url(imgs/error.png);
				background-size:100%;
				background-repeat:no-repeat;
				margin-left:auto;
				margin-right:auto;
			}
			@media(min-width:768px){
				body{
					font-size:16px;
					background-size:10%;
				}
			}
</style>
	</head>
	<body>
		<div id="close" onclick="fechar()"></div>
		<div id="validacao"></div>
		<a href="postai.php"><div id="banner"></div></a>
		<div class="master">
		<form method="post">
			<div class="container" for="msg">
				<textarea autofocus maxlength="300" rows="5" cols="50" id="msg" name="msg" placeholder="Digite aqui sua confissão..."></textarea>
				<div class="data"><?php
									$hora=date("H:i");
									echo $hora;
								?>
				</div><p><br>
			</div>
			<div class="obs">* As confissões serão apagadas após a meia-noite.</div>
			<div class="botao">
			<input type="submit" value="Postaí!"/>
			</div>
		</form>
			<?php
				$conexao=mysqli_connect("localhost","root","");
				$bd=mysqli_select_db($conexao,"postai");
				if (isset($_POST["msg"])){  
				$msg = $_POST["msg"];
				$msg_html = htmlentities($msg);
				$msg_cespec = mysqli_real_escape_string($conexao, $msg_html);
					if($msg_cespec==""){
						echo "<script type=\"text/javascript\">
								validacao.innerHTML=\"Digite alguma coisa!\";
								validacao.style.opacity=\"1\";
								close.style.opacity=\"1\";
							</script>";
					}
					else{
						$result=mysqli_query($conexao,"insert into mensagem(mensagem) values ('$msg_cespec')") or die ("<h1 align='center'>Algo deu errado.</h1><div class=\"error\"></div><p> ".mysqli_error($conexao));
					}
				}
				$mensagens = mysqli_query($conexao,"Select * from mensagem order by data_msg desc") or die ("<h1 align='center'>Algo deu errado.</h1><div class=\"error\"></div><p> ".mysqli_error($conexao));
				while($linha = mysqli_fetch_array($mensagens)){
					echo "<div class=\"mensagens\"><div class=\"msg\">" . $linha['mensagem'] . "</div><div class=\"data\">" . substr($linha['data_msg'],11,-3) . "</div><p><br></div>";
				}
				$data=date("Y-m-d");
				mysqli_query($conexao,"DELETE FROM mensagem WHERE data_msg < '$data'");
			?>
		</div>
		<a href="#banner"><div id="topo"></div></a>
		<div id="stats">
			<span class="titulo">Estatísticas</span>
			<hr>
			<span><?php
					$total_msg=mysqli_query($conexao,"select count(*) from mensagem") or die ("<h1 align='center'>Algo deu errado.</h1><div class=\"error\"></div><p> ".mysql_error());
					$linha_total=mysqli_fetch_array($total_msg);
					echo "<span id=\"total\">".$linha_total['count(*)']."</span>"." <p>confissões feitas hoje!";
					if ($linha_total['count(*)']<2){
						header("Refresh:0");
						echo "<style>
								#footer{
									position:absolute;
								}
								#topo{
									display:none;
								}
							</style>";
					}
					?>
			</span>
		</div>
		<div id="footer">Copyright © 2016 ZaPush. All rights reserved.</div>
	</body>
</html>
<script type="text/javascript">
	function fechar(){
	 validacao.style.opacity="0";
	 close.style.opacity="0";
}
</script>
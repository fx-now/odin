<?
session_start();
error_reporting(E_ALL);
include("inc/bigboss.php");
include("inc/define.php");

//se há sessions, usa os dados da session
if($_SESSION["login"] != "" and $_SESSION["senha"] != ""){
	$db_usr = $_SESSION["login"];
	$db_psw = $_SESSION["senha"];
}else{
	$db_usr = DB_USR;
	$db_psw = DB_PSW;
}

//conecta
con($db_usr,$db_psw);
db(DB_NAME);

//verifica qual arquivo está sendo acessado
$path = url($_SERVER['REQUEST_URI'],DIR);

//se for página de login, exibe
if($path == "pages/login.php"){
	include($path);
}elseif($path == "pages/sair.php"){ // se for logoff, faz
	logoff("?login");
}else{
	//se não for login ou logoff, verifica se o usuário existe realmente e está logado
	if(is_on() == true){
		include("temas/".TEMA."/header.php");
		include($path);
		include("temas/".TEMA."/footer.php");
	}else{ // se não existe ou não está logado, encaminha para a tela de login
		is_autenticado("?login");
	}
}

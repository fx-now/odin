<?
// classe do sistema odin
class odin {
	// recupera alguma informação do cadastro do usuário
	public function usr($login,$campo){
		$sel = sel("usuarios","usuario = '$login'");
		$r = fetch($sel);
		return $r[$campo];
	}
}

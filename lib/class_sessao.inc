<?php
	/**
	Realiza manipulação de sessões no php
	atributos:
	-id: contém o session_id
	-nvars: tamanho do araay_session
	métodos privados
	setNVars:
	setVar
	métodos públicos:
	__construct
	_vars
	_valor
	*/
	
	class sessao
	{
		
		private $_id;
		private $_nvars;
		
		function __construct($inicia= FALSE, $_vars = NULL)
		{
			if ($inicia == true)
			{
				$this->start();
				if($_vars !== NULL)
				{
					$this->setVars($_vars);
				}	
			}
		}
		
		//
		private function setNVars() 
		{
			$this->_nvars = sizeof($_session); 		
		}
		
		//cria altera uma variável de sessão
		private function setVar($_Var, $_valor) 
		{
			$_SESSION[$_var] = $_valor;
			 	
		}
	   // elimina uma vairável de sessão $var
		private function unSetvar($_var) {
			unset($_SESSION[$_var]);
			$this->setNVars();
		}
		
		// diz o valor da variável de sessão
		private function getVar($_var) {
			if(isset($_SESSION[$_var])) {
		 		return $_SESSION[$_var];
			} else {
				return NULL;
			}
		}
									   
		// Métodos publicos
		
		// inicia sessão
		public function start() {
	   		session_start();
	   		$this->_id = session_id();
			$this->setNVars();
		} 
		
		public function setVars($_var,$_valor="") {
			if(is_array($_var)) {
			 	foreach($_var as $_k=>$_v) {
			    	$this->setVar($_k,$_v);
			 	}
		   	} else {
		   	   	$this->setVar($_var,$_valor);
			}
		}
		// Elimina variáveis de sessão
		public function unSetVars($_var) {
			if(is_array($_var)) {
			 	foreach($_var as $_v) {
			    	$this->unsetVar($_v);
			 	}
		   	} else {
		   	   	$this->unsetVar($_var);
			}
		}
		
		//retorna o valor de variáveis de sessão
		public function getVars($_var) {
			if(is_array($_var)) {
				foreach($_var as $_v) {
				   $_res[] = $this->getVar($v);
				}
			} else {
				$_res = $this->getVar($_var);			 	
			}
			
			return $_res;
		}  
		
		//Retorna o tamanho de   $_SESSION	
		public function getNVars() {
			return $this->_nvars;
		}
		
		//retorna o id da sessão atual
		public function getId() {
			return $this->_id;
		}
		
		public function printAll() {
			foreach($_SESSION as $_k=>$_v) {
			   printf("%s  = %s<br/>",$_k,$_v);
			}
		}
		
		// exclui a sessão 
		public function destroy($_inicia=FALSE) {
			session_unset();
			session_destroy();
			$this->setNVars();
			$this->_id = NULL;
			if($_inicia===TRUE) {
			   $this->start();
			}
		}
		
		
	}

?>
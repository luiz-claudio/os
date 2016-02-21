<?php

 class pagamento {
 	private $id_contrato;
 	private $id_pagamento;
 	private $parcela;
 	private $vencimento;
 	private $status;
 	private $data_pagamento;
 	
 	
 	
 	function setParcela($parcela){
 		$this->parcela = $parcela;
 		
 	}
 	
 	function setVencimento($vencimento){
 		$this->vencimento = $vencimento;
 		
 	}
 	
 	function setStatus($status){
 		$this->status = $status;
 		
 	}
 	 	 	
 	function setForma_de_pagamento($data_pagamento){
 		$this->data_pagamento = $data_pagamento;
 		
 	}
 	
 	function getId_contrato(){
 		return $this->id_contrato;
 	}
 	
 	function getId_pagamento(){
 		return $this->id_pagamento;
 	}
 	
 	function getParcela(){
 		return $this->parcela;
 	}
 	
 	function getVencimento(){
 		return $this->vencimento;
 	}
 	
 	function getStatus(){
 		return $this->status;
 	}
 	 	 	
 	function getDatapagamento(){
 		return $this->data_pagamento;
 	}
 }


?>
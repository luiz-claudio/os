<?php

 class contrato {
 	private $id_contrato;
 	private $id_associado;
 	private $status;
 	private $data_inicio;
 	private $data_final;
 	private $forma_de_pagamento;
 	
 	
 	function setStatus($status){
 		$this->status = $status;
 		
 	}
 	
 	function setData_inicio($data_inicio){
 		$this->data_inicio = $data_inicio;
 		
 	}
 	
 	function setData_final($data_final){
 		$this->data_final = $data_final;
 		
 	}
 	
 	function setForma_de_pagamento($forma_de_pagamento){
 		$this->forma_de_pagamento = $forma_de_pagamento;
 		
 	}
 	
 	function getId_contrato(){
 		return $this->id_contrato;
 	}
 	
 	function getId_associado(){
 		return $this->id_associado;
 	}
 	
 	function getStatus(){
 		return $this->status;
 	}
 	
 	function getData_inicio(){
 		return $this->data_inicio;
 	}
 	
 	function getData_final(){
 		return $this->data_final;
 	}
 	
 	function getForma_de_pagamento(){
 		return $this->forma_de_pagamento;
 	}
 }


?>
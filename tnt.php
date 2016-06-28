<?php 
	
	// forma correta de compor a array de configuração
			
	$cliente = new SoapClient();
	
	$funcao = 'calculaFrete';

	$parametros = array(
		'calculaFrete' =>
			array('in0' => 
				array(
					'cdDivisaoCliente'					=> '',
					'cepDestino' 						=> '',
					'cepOrigem' 						=> '',
					'login' 							=> '',
					'nrIdentifClienteDest' 				=> '',
					'nrIdentifClienteRem' 				=> '',
					'nrInscricaoEstadualDestinatario' 	=> '',
					'nrInscricaoEstadualRemetente' 		=> '',
					'psReal' 							=> '',
					'tpFrete' 							=> '',
					'tpPessoaDestinatario' 				=> '',
					'tpPessoaRemetente' 				=> '',
					'tpServico' 						=> '',
					'tpSituacaoTributariaDestinatario' 	=> '',
					'tpSituacaoTributariaRemetente' 	=> '',
					'vlMercadoria' 						=> ''
				)	
			)
	);	

	$resultado = $cliente->__soapCall($funcao, $parametros);

?>
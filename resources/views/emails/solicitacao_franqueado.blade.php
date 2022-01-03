<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="pt-br">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1"> <!-- So that mobile will display zoomed in -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge"> <!-- enable media queries for windows phone 8 -->
	<meta name="format-detection" content="telephone=no"> <!-- disable auto telephone linking in iOS -->
	<title>Email</title>

	<style type="text/css">
		body {
			margin: 0;
			padding: 0;
			-ms-text-size-adjust: 100%;
			-webkit-text-size-adjust: 100%;
		}

		table {
			border-spacing: 0;
		}

		table td {
			border-collapse: collapse;
		}

		.ExternalClass {
			width: 100%;
		}

		.ExternalClass,
		.ExternalClass p,
		.ExternalClass span,
		.ExternalClass font,
		.ExternalClass td,
		.ExternalClass div {
			line-height: 100%;
		}

		.ReadMsgBody {
			width: 100%;
			background-color: #ebebeb;
		}

		table {
			mso-table-lspace: 0pt;
			mso-table-rspace: 0pt;
		}

		img {
			-ms-interpolation-mode: bicubic;
		}

		.yshortcuts a {
			border-bottom: none !important;
		}

		@media screen and (max-width: 599px) {
			.force-row,
			.container {
				width: 100% !important;
				max-width: 100% !important;
			}
		}
		@media screen and (max-width: 400px) {
			.container-padding {
				padding-left: 12px !important;
				padding-right: 12px !important;
			}
		}
		.ios-footer a {
			color: #aaaaaa !important;
			text-decoration: underline;
		}
	</style>
</head>

<body style="margin:0; padding:0;" bgcolor="#fff" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">

	<!-- 100% background wrapper (grey background) -->
	<table border="0" width="100%" height="100%" cellpadding="0" cellspacing="0" bgcolor="#fff">
		<tr>
			<td align="center" valign="top" bgcolor="#fff" style="background-color: #fff;">

				<br>

				<!-- 600px container (white background) -->
				<table border="0" width="600" cellpadding="0" cellspacing="0" class="container" style="width:600px;max-width:600px">
					<tr>
						<td class="container-padding header" align="left" style="font-family:Helvetica, Arial, sans-serif;font-size:24px;font-weight:bold;padding-bottom:12px;color:#8D6CC9;padding-left:24px;padding-right:24px;text-align:center;">
							<img src="<?= 'http://'.Request::getHttpHost().'/img/logo.png'; ?>" style="width:200px;">
						</td>
					</tr>
					<tr>
						<td class="container-padding content" align="left" style="padding-left:24px;padding-right:24px;padding-top:12px;padding-bottom:12px;background-color:#ffffff">

						    <div class="title" style="font-family:Helvetica, Arial, sans-serif;font-size:14px;font-weight:600;color:#374550;margin-bottom: 20px;margin-top: 10px;">
							Nome: <span style="font-weight: 400"><?= $nome ?></span>
							</div>

						    <div class="title" style="font-family:Helvetica, Arial, sans-serif;font-size:14px;font-weight:600;color:#374550;margin-bottom: 20px;">
							CPF: <span style="font-weight: 400"><?= $cpf ?></span>
							</div>

							 <div class="title" style="font-family:Helvetica, Arial, sans-serif;font-size:14px;font-weight:600;color:#374550;margin-bottom: 20px;">
							RG: <span style="font-weight: 400"><?= $rg ?></span>
							</div>
							 <div class="title" style="font-family:Helvetica, Arial, sans-serif;font-size:14px;font-weight:600;color:#374550;margin-bottom: 20px;">
							Esado civil: <span style="font-weight: 400"><?= $estado_civil ?></span>
							</div>
							 <div class="title" style="font-family:Helvetica, Arial, sans-serif;font-size:14px;font-weight:600;color:#374550;margin-bottom: 20px;">
							Data de nascimento: <span style="font-weight: 400"><?= $data_nascimento ?></span>
							</div>
							 <div class="title" style="font-family:Helvetica, Arial, sans-serif;font-size:14px;font-weight:600;color:#374550;margin-bottom: 20px;">
							Escolariedade: <span style="font-weight: 400"><?= $escolariedade ?></span>
							</div>
							 <div class="title" style="font-family:Helvetica, Arial, sans-serif;font-size:14px;font-weight:600;color:#374550;margin-bottom: 20px;">
							Profissão: <span style="font-weight: 400"><?= $profissao ?></span>
							</div>
							 <div class="title" style="font-family:Helvetica, Arial, sans-serif;font-size:14px;font-weight:600;color:#374550;margin-bottom: 20px;">
							CEP (dados pessoais): <span style="font-weight: 400"><?= $dados_pessoais_cep ?></span>
							</div>
							 <div class="title" style="font-family:Helvetica, Arial, sans-serif;font-size:14px;font-weight:600;color:#374550;margin-bottom: 20px;">
							Logradouro (dados pessoais): <span style="font-weight: 400"><?= $dados_pessoais_logradouro ?></span>
							</div>
							 <div class="title" style="font-family:Helvetica, Arial, sans-serif;font-size:14px;font-weight:600;color:#374550;margin-bottom: 20px;">
							Número (dados pessoais): <span style="font-weight: 400"><?= $dados_pessoais_numero ?></span>
							</div>
							 <div class="title" style="font-family:Helvetica, Arial, sans-serif;font-size:14px;font-weight:600;color:#374550;margin-bottom: 20px;">
							Complemento (dados pessoais): <span style="font-weight: 400"><?= $dados_pessoais_complemento ?></span>
							</div>
							 <div class="title" style="font-family:Helvetica, Arial, sans-serif;font-size:14px;font-weight:600;color:#374550;margin-bottom: 20px;">
							Cidade | UF (dados pessoais): <span style="font-weight: 400"><?= $dados_pessoais_cidade.' | '.dados_pessoais_uf ?></span>
							</div>

							 <div class="title" style="font-family:Helvetica, Arial, sans-serif;font-size:14px;font-weight:600;color:#374550;margin-bottom: 20px;">
							Telefone fixo: <span style="font-weight: 400"><?= $telefone_residencial ?></span>
							</div>

						    <div class="title" style="font-family:Helvetica, Arial, sans-serif;font-size:14px;font-weight:600;color:#374550;margin-bottom: 20px;">
							Celular: <span style="font-weight: 400"><?= $telefone_celular ?></span>
						    </div>
						    <div class="title" style="font-family:Helvetica, Arial, sans-serif;font-size:14px;font-weight:600;color:#374550;margin-bottom: 20px;">
							Histórico profissional: <span style="font-weight: 400"><?= $historico_situacao_atual ?></span>
						    </div>
						    <div class="title" style="font-family:Helvetica, Arial, sans-serif;font-size:14px;font-weight:600;color:#374550;margin-bottom: 20px;">
							Cargo/Função: <span style="font-weight: 400"><?= $historico_cargo_funcao ?></span>
						    </div>
						    <div class="title" style="font-family:Helvetica, Arial, sans-serif;font-size:14px;font-weight:600;color:#374550;margin-bottom: 20px;">
							Tempo serviço: <span style="font-weight: 400"><?= $historico_qto_tempo ?></span>
						    </div>
						    <div class="title" style="font-family:Helvetica, Arial, sans-serif;font-size:14px;font-weight:600;color:#374550;margin-bottom: 20px;">
							Empresa: <span style="font-weight: 400"><?= $historico_empresa ?></span>
						    </div>
						    <div class="title" style="font-family:Helvetica, Arial, sans-serif;font-size:14px;font-weight:600;color:#374550;margin-bottom: 20px;">
							Ramo da atividade: <span style="font-weight: 400"><?= $historico_ramo_atividade ?></span>
						    </div>
						    <div class="title" style="font-family:Helvetica, Arial, sans-serif;font-size:14px;font-weight:600;color:#374550;margin-bottom: 20px;">
							Experiência profissional: <span style="font-weight: 400"><?= $experiencia_profissional ?></span>
						    </div>

						    <div class="title" style="font-family:Helvetica, Arial, sans-serif;font-size:14px;font-weight:600;color:#374550;margin-bottom: 20px;">
							Ramo da atividade: <span style="font-weight: 400"><?= $ramo_atividade ?></span>
						    </div>
						    <div class="title" style="font-family:Helvetica, Arial, sans-serif;font-size:14px;font-weight:600;color:#374550;margin-bottom: 20px;">
							Número de funcionários: <span style="font-weight: 400"><?= $numero_funcionarios ?></span>
						    </div>
						    <div class="title" style="font-family:Helvetica, Arial, sans-serif;font-size:14px;font-weight:600;color:#374550;margin-bottom: 20px;">
							Faturamento anual: <span style="font-weight: 400"><?= $faturamento_anual ?></span>
						    </div>
						    <div class="title" style="font-family:Helvetica, Arial, sans-serif;font-size:14px;font-weight:600;color:#374550;margin-bottom: 20px;">
							Participação acionária: <span style="font-weight: 400"><?= $participacao_acionaria ?></span>
						    </div>
						    <div class="title" style="font-family:Helvetica, Arial, sans-serif;font-size:14px;font-weight:600;color:#374550;margin-bottom: 20px;">
							Está em experiência de exercício? <span style="font-weight: 400"><?= $experiencia_em_exercicio ?></span>
						    </div>
						    <div class="title" style="font-family:Helvetica, Arial, sans-serif;font-size:14px;font-weight:600;color:#374550;margin-bottom: 20px;">
							Data de abertura: <span style="font-weight: 400"><?= $data_abertura ?></span>
						    </div>
						    <div class="title" style="font-family:Helvetica, Arial, sans-serif;font-size:14px;font-weight:600;color:#374550;margin-bottom: 20px;">
							Data de encerramento: <span style="font-weight: 400"><?= $data_encerramento ?></span>
						    </div>
						    <div class="title" style="font-family:Helvetica, Arial, sans-serif;font-size:14px;font-weight:600;color:#374550;margin-bottom: 20px;">
							Motivo desligamento/encerramento: <span style="font-weight: 400"><?= $motivo_encerramento ?></span>
						    </div>

						    <div class="title" style="font-family:Helvetica, Arial, sans-serif;font-size:14px;font-weight:600;color:#374550;margin-bottom: 20px;">
							O que o/a levou a se interessar especificamente por essa franquia? <span style="font-weight: 400"><?= $interesse_pergunta1 ?></span>
						    </div>

						    <div class="title" style="font-family:Helvetica, Arial, sans-serif;font-size:14px;font-weight:600;color:#374550;margin-bottom: 20px;">
							Onde deseja montar a franquia? <span style="font-weight: 400"><?= $franquia_lugar ?></span>
						    </div>
						    <div class="title" style="font-family:Helvetica, Arial, sans-serif;font-size:14px;font-weight:600;color:#374550;margin-bottom: 20px;">
							Já possui ponto comercial? <span style="font-weight: 400"><?= $ponto_comercial ?></span>
						    </div>
						    <div class="title" style="font-family:Helvetica, Arial, sans-serif;font-size:14px;font-weight:600;color:#374550;margin-bottom: 20px;">
							Descreva a localização e características do ponto comercial <span style="font-weight: 400"><?= $ponto_comercial_caracteristicas ?></span>
						    </div>

						    <div class="title" style="font-family:Helvetica, Arial, sans-serif;font-size:14px;font-weight:600;color:#374550;margin-bottom: 20px;">
							Nome/descrição (Referência 1) <span style="font-weight: 400"><?= $referencia_comercial_nome_1 ?></span>
						    </div>

						    <div class="title" style="font-family:Helvetica, Arial, sans-serif;font-size:14px;font-weight:600;color:#374550;margin-bottom: 20px;">
							Telefone (Referência 1) <span style="font-weight: 400"><?= $referencia_comercial_telefone_1 ?></span>
						    </div>
						    

						    <div class="title" style="font-family:Helvetica, Arial, sans-serif;font-size:14px;font-weight:600;color:#374550;margin-bottom: 20px;">
							Nome/descrição (Referência 2) <span style="font-weight: 400"><?= $referencia_comercial_nome_2 ?></span>
						    </div>

						    <div class="title" style="font-family:Helvetica, Arial, sans-serif;font-size:14px;font-weight:600;color:#374550;margin-bottom: 20px;">
							Telefone (Referência 2) <span style="font-weight: 400"><?= $referencia_comercial_telefone_2 ?></span>
						    </div>


						    <div class="title" style="font-family:Helvetica, Arial, sans-serif;font-size:14px;font-weight:600;color:#374550;margin-bottom: 20px;">
							Nome/descrição (Referência 3) <span style="font-weight: 400"><?= $referencia_comercial_nome_3 ?></span>
						    </div>
						    <div class="title" style="font-family:Helvetica, Arial, sans-serif;font-size:14px;font-weight:600;color:#374550;margin-bottom: 20px;">
							Telefone (Referência 3) <span style="font-weight: 400"><?= $referencia_comercial_telefone_3 ?></span>
						    </div>

						    <div class="title" style="font-family:Helvetica, Arial, sans-serif;font-size:14px;font-weight:600;color:#374550;margin-bottom: 20px;">
							Nome (Banco 1) <span style="font-weight: 400"><?= $banco1_nome ?></span>
						    </div>
						    <div class="title" style="font-family:Helvetica, Arial, sans-serif;font-size:14px;font-weight:600;color:#374550;margin-bottom: 20px;">
							Agência (Banco 1) <span style="font-weight: 400"><?= $banco1_agencia ?></span>
						    </div>
						    <div class="title" style="font-family:Helvetica, Arial, sans-serif;font-size:14px;font-weight:600;color:#374550;margin-bottom: 20px;">
							Gerente (Banco 1) <span style="font-weight: 400"><?= $banco1_gerente ?></span>
						    </div>
						    <div class="title" style="font-family:Helvetica, Arial, sans-serif;font-size:14px;font-weight:600;color:#374550;margin-bottom: 20px;">
							Telefone (Banco 1) <span style="font-weight: 400"><?= $banco1_telefone ?></span>
						    </div>

						     <div class="title" style="font-family:Helvetica, Arial, sans-serif;font-size:14px;font-weight:600;color:#374550;margin-bottom: 20px;">
							Nome (Banco 2) <span style="font-weight: 400"><?= $banco2_nome ?></span>
						    </div>
						    <div class="title" style="font-family:Helvetica, Arial, sans-serif;font-size:14px;font-weight:600;color:#374550;margin-bottom: 20px;">
							Agência (Banco 2) <span style="font-weight: 400"><?= $banco2_agencia ?></span>
						    </div>
						    <div class="title" style="font-family:Helvetica, Arial, sans-serif;font-size:14px;font-weight:600;color:#374550;margin-bottom: 20px;">
							Gerente (Banco 2) <span style="font-weight: 400"><?= $banco2_gerente ?></span>
						    </div>
						    <div class="title" style="font-family:Helvetica, Arial, sans-serif;font-size:14px;font-weight:600;color:#374550;margin-bottom: 20px;">
							Telefone (Banco 2) <span style="font-weight: 400"><?= $banco2_telefone ?></span>
						    </div>

						    <div class="title" style="font-family:Helvetica, Arial, sans-serif;font-size:14px;font-weight:600;color:#374550;margin-bottom: 20px;">
							Nome (Banco 3) <span style="font-weight: 400"><?= $banco3_nome ?></span>
						    </div>
						    <div class="title" style="font-family:Helvetica, Arial, sans-serif;font-size:14px;font-weight:600;color:#374550;margin-bottom: 20px;">
							Agência (Banco 3) <span style="font-weight: 400"><?= $banco3_agencia ?></span>
						    </div>
						    <div class="title" style="font-family:Helvetica, Arial, sans-serif;font-size:14px;font-weight:600;color:#374550;margin-bottom: 20px;">
							Gerente (Banco 3) <span style="font-weight: 400"><?= $banco3_gerente ?></span>
						    </div>
						    <div class="title" style="font-family:Helvetica, Arial, sans-serif;font-size:14px;font-weight:600;color:#374550;margin-bottom: 20px;">
							Telefone (Banco 3) <span style="font-weight: 400"><?= $banco3_telefone ?></span>
						    </div>


						    <div class="title" style="font-family:Helvetica, Arial, sans-serif;font-size:14px;font-weight:600;color:#374550;margin-bottom: 20px;">
							Capital própio (R$) <span style="font-weight: 400"><?= $capital_proprio ?></span>
						    </div>
						    <div class="title" style="font-family:Helvetica, Arial, sans-serif;font-size:14px;font-weight:600;color:#374550;margin-bottom: 20px;">
							Empréstimo de terceiros (R$) <span style="font-weight: 400"><?= $emprestimo_de_terceiros ?></span>
						    </div>
						    <div class="title" style="font-family:Helvetica, Arial, sans-serif;font-size:14px;font-weight:600;color:#374550;margin-bottom: 20px;">
							Doações de terceiros (R$) <span style="font-weight: 400"><?= $doacoes_de_terceiros ?></span>
						    </div>
						    <div class="title" style="font-family:Helvetica, Arial, sans-serif;font-size:14px;font-weight:600;color:#374550;margin-bottom: 20px;">
							Outras fontes (R$) <span style="font-weight: 400"><?= $outras_fontes ?></span>
						    </div>	

						     <div class="title" style="font-family:Helvetica, Arial, sans-serif;font-size:14px;font-weight:600;color:#374550;margin-bottom: 20px;">
							Total disponível (R$) <span style="font-weight: 400"><?= $total_disponivel ?></span>
						    </div>
						    <div class="title" style="font-family:Helvetica, Arial, sans-serif;font-size:14px;font-weight:600;color:#374550;margin-bottom: 20px;">
							Resultado financeiro (R$) <span style="font-weight: 400"><?= $resultado_financeiro ?></span>
						    </div>	
						</td>
					</tr>
				</table>
			</td>
		</tr>
	</table>
</body>
</html>
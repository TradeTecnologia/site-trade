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
							Unidade desejada: <span style="font-weight: 400"><?= $unidade_desejada ?></span>
							</div>

						    <div class="title" style="font-family:Helvetica, Arial, sans-serif;font-size:14px;font-weight:600;color:#374550;margin-bottom: 20px;margin-top: 10px;">
							Nome: <span style="font-weight: 400"><?= $nome ?></span>
							</div>

						    <div class="title" style="font-family:Helvetica, Arial, sans-serif;font-size:14px;font-weight:600;color:#374550;margin-bottom: 20px;">
							Email: <span style="font-weight: 400"><?= $email ?></span>
							</div>

						    <div class="title" style="font-family:Helvetica, Arial, sans-serif;font-size:14px;font-weight:600;color:#374550;margin-bottom: 20px;">
							Mensagem: <span style="font-weight: 400"><?= $mensagem ?></span>
						    </div>

						</td>
					</tr>
				</table>
			</td>
		</tr>
	</table>
</body>
</html>
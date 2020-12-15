<?php 
$messagebody = '
<!DOCTYPE html>
<html>

	<head>
		<title></title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<style type="text/css">
@media screen {
	@font-face {
		font-family: "Lato";
		font-style: normal;
		font-weight: 400;
		src: local("Lato Regular"), local("Lato-Regular"), url(https://fonts.gstatic.com/s/lato/v11/qIIYRU-oROkIk8vfvxw6QvesZW2xOQ-xsNqO47m55DA.woff) format("woff");
	}

	@font-face {
		font-family: "Lato";
		font-style: normal;
		font-weight: 700;
		src: local("Lato Bold"), local("Lato-Bold"), url(https://fonts.gstatic.com/s/lato/v11/qdgUG4U09HnJwhYI-uK18wLUuEpTyoUstqEm5AMlJo4.woff) format("woff");
	}

	@font-face {
		font-family: "Lato";
		font-style: italic;
		font-weight: 400;
		src: local("Lato Italic"), local("Lato-Italic"), url(https://fonts.gstatic.com/s/lato/v11/RYyZNoeFgb0l7W3Vu1aSWOvvDin1pK8aKteLpeZ5c0A.woff) format("woff");
	}

	@font-face {
		font-family: "Lato";
		font-style: italic;
		font-weight: 700;
		src: local("Lato Bold Italic"), local("Lato-BoldItalic"), url(https://fonts.gstatic.com/s/lato/v11/HkF_qI1x_noxlxhrhMQYELO3LdcAZYWl9Si6vvxL-qU.woff) format("woff");
	}
}

				/* CLIENT-SPECIFIC STYLES */
				body,
				table,
				td,
				a {
					color: #fff;
					-webkit-text-size-adjust: 100%;
					-ms-text-size-adjust: 100%;
				}

				table,
				td {
					color: #fff;
					mso-table-lspace: 0pt;
					mso-table-rspace: 0pt;
				}

				img {
					-ms-interpolation-mode: bicubic;
				}

				/* RESET STYLES */
				img {
					color: #fff;
					border: 0;
					height: auto;
					line-height: 100%;
					outline: none;
					text-decoration: none;
				}

				table {
					color: #fff;
					border-collapse: collapse !important;
				}

				body {
					color: #fff;
					height: 100% !important;
					margin: 0 !important;
					padding: 0 !important;
					width: 100% !important;
				}

				/* iOS BLUE LINKS */
				a[x-apple-data-detectors] {
					color: inherit !important;
					text-decoration: none !important;
					font-size: inherit !important;
					font-family: inherit !important;
					font-weight: inherit !important;
					line-height: inherit !important;
				}

				/* MOBILE STYLES */
				@media screen and (max-width:600px) {
					h1 {
						font-size: 32px !important;
						line-height: 32px !important;
					}
				}

				/* ANDROID CENTER FIX */
				div[style*="margin: 16px 0;"] {
					margin: 0 !important;
				}
		</style>
	</head>

	<body style="background-color: #5e5e75; margin: 0 !important; padding: 0 !important;">
		<!-- HIDDEN PREHEADER TEXT -->
		<table border="0" cellpadding="0" cellspacing="0" width="100%">
			<!-- LOGO -->
			<tr>
				<td bgcolor="#5e5e75" align="center">
					<table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 600px;">
						<tr>
							<td align="center" valign="top" style="padding: 40px 10px 40px 10px;"> </td>
						</tr>
					</table>
				</td>
			</tr>
			<tr>
				<td bgcolor="#4a4e69" align="center" style="padding: 0px 10px 0px 10px;">
					<table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 600px;">
						<tr>
							<td bgcolor="#22223b" align="center" valign="top" style="color: #fff; padding: 40px 20px 20px 20px; border-radius: 4px 4px 0px 0px; color: #111111; font-family: "Lato", Helvetica, Arial, sans-serif; font-size: 48px; font-weight: 400; letter-spacing: 4px; line-height: 48px;">
								<h1 style="font-size: 48px; color: #fff; font-weight: 400; margin: 2;">Bienvenido!</h1> <img src=" https://img.icons8.com/clouds/100/000000/handshake.png" width="125" height="120" style="display: block; border: 0px;" />
							</td>
						</tr>
					</table>
				</td>
			</tr>
			<tr>
				<td bgcolor="#f4f4f4" align="center" style="padding: 0px 10px 0px 10px;">
					<table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 600px;">
						<tr>
							<td bgcolor="#22223b" align="left" style="padding: 20px 30px 40px 30px; color: #fff; font-family: "Lato", Helvetica, Arial, sans-serif; font-size: 18px; font-weight: 400; line-height: 25px;">
								<p align="center" class="text-center" style="margin: 0;color: #fff;">Estamos encantados de que hayas decidido formar parte de nosotros, pero antes necesitamos confirmar tu cuenta. Presiona el botón debajo.</p>
							</td>
						</tr>
						<tr>
							<td bgcolor="#22223b" align="left">
								<table width="100%" border="0" cellspacing="0" cellpadding="0">
									<tr>
										<td bgcolor="#22223b" align="center" style="padding: 20px 30px 60px 30px;">
											<table border="0" cellspacing="0" cellpadding="0">
												<tr>
												<td align="center" style="border-radius: 3px;" bgcolor="#161627"><a href="http://questcode.tk/confirmMail.php?userid='.$_SESSION["register_id"].'&token='.$_SESSION["token"].'" target="_blank" style="font-size: 20px; font-family: Helvetica, Arial, sans-serif; color: #ffffff; text-decoration: none; color: #ffffff; text-decoration: none; padding: 15px 25px; border-radius: 2px; border: 1px solid #161627; display: inline-block;">Confirmar cuenta</a></td>
												</tr>
											</table>
										</td>
									</tr>
								</table>
							</td>
						</tr> <!-- COPY -->
						<tr>
							<td bgcolor="#22223b" align="left" style="padding: 0px 30px 0px 30px; color: #f5f5f5; font-family: "Lato", Helvetica, Arial, sans-serif; font-size: 18px; font-weight: 400; line-height: 25px;">
								<p align="center" style="margin: 0;color: #f5f5f5;">Si eso no funciona, intenta copiando y pegando el siguiente enlace en tu navegador:</p>
							</td>
						</tr> <!-- COPY -->
						<tr>
							<td bgcolor="#22223b" align="left" style="padding: 20px 30px 20px 30px; color: #f5f5f5; font-family: "Lato", Helvetica, Arial, sans-serif; font-size: 18px; font-weight: 400; line-height: 25px;">
								<p align="center" style="margin: 0;"><a href="http://questcode.tk/confirmMail.php?userid='.$_SESSION["register_id"].'&token='.$_SESSION["token"].'" target="_blank" style="color: #fff;">http://questcode.tk/confirmMail.php?userid='.$_SESSION["register_id"].'&token='.$_SESSION["token"].'</a></p>
							</td>
						</tr>
						<tr>
							<td bgcolor="#22223b" align="left" style="padding: 0px 30px 20px 30px; color: #f5f5f5; font-family: "Lato", Helvetica, Arial, sans-serif; font-size: 18px; font-weight: 400; line-height: 25px;">
								<p align="center" style="margin: 0;color: #f5f5f5;">Si tienes alguna duda puedes contactarnos al siguiente correo: support@questcode.tk</p>
							</td>
						</tr>
						<tr>
							<td bgcolor="#22223b" align="left" style="padding: 0px 30px 40px 30px; border-radius: 0px 0px 4px 4px; color: #f5f5f5; font-family: "Lato", Helvetica, Arial, sans-serif; font-size: 18px; font-weight: 400; line-height: 25px;">
								<p align="center" style="margin: 0;color: #f5f5f5;">Saludos,<br>El equipo de QuestCode!</p>
							</td>
						</tr>
					</table>
				</td>
			</tr>
			<tr>
				<td bgcolor="#f4f4f4" align="center" style="padding: 30px 10px 0px 10px;">
					<table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 600px;">
						<tr>
							<td bgcolor="#161627" align="center" style="color: #fff; padding: 30px 30px 30px 30px; border-radius: 4px 4px 4px 4px; color: #666666; font-family: "Lato", Helvetica, Arial, sans-serif; font-size: 18px; font-weight: 400; line-height: 25px;">
								<h2 style="font-size: 20px; font-weight: 400; color: #fff; margin: 0;">¿Necesitas ayuda?</h2>
								<p style="margin: 0;"><a href="http://questcode.tk" target="_blank" style="color: #fff;">¡Visita nuestra web!</a></p>
							</td>
						</tr>
					</table>
				</td>
			</tr>
			<tr>
			</tr>
		</table>
	</body>

</html>'
?>

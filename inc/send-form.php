<?php

if( $_SERVER['REQUEST_METHOD'] === 'POST' ) {

	$json  = array();
	$name  = trim( $_POST['desafio-nome'] );
	$mail  = trim( $_POST['desafio-email'] );
	$video = trim( $_POST['desafio-video'] );
	$msg   = nl2br( trim( $_POST['desafio-msg'] ) );

	if( !empty($name) && !empty($mail) && !empty($video) ) {
		$message  = '';

		$_send_to = 'abracceclinica@gmail.com';

		$_emails_extras[] = 'remerterapias@gmail.com';
		$_emails_extras[] = 'biaafelix.s@gmail.com';

		$headers  = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		// $headers .= 'To: ' . $_send_to . "\r\n";
		$headers .= 'From: '.$name.' <'.$mail.'>' . "\r\n";
		if(count($_emails_extras) > 0) {
			foreach ($_emails_extras as $_e) {
				$headers .= 'Cc: '.$_e . "\r\n";
			}
		}
		$headers .= 'Cco: fernando@agenciatrend.com.br'."\r\n";
    	$headers .= 'Reply-To:'.$mail . "\r\n";
    	$headers .= 'X-Mailer: PHP/' . phpversion();

		$message .= '<h4>Desafio solidário aceito!</h4>';
		$message .= '<p><strong>Nome: </strong>'.$name.'</p>';
		$message .= '<p><strong>E-mail: </strong>'.$mail.'</p>';
		$message .= '<p><strong>Video: </strong>'.$video.'</p>';
		$message .= '<p><strong>Mensagem: </strong>'.$msg.'</p><br>';

		$message .= '<p><small>E-mail enviado do site <a href="http://desafio.abracce.org.br/">desafio.abracce.org.br</a> </small></p>';

		$sender = mail( $_send_to, "Desafio solidário aceito!", $message, $headers );

		if($sender) {
			$json['alert']   = 'success';
			$json['message'] = 'Desafio enviado com sucesso. Breve entraremos em contato.';
		}
		else {
			$json['alert']   = 'danger';
			$json['message'] = 'Ocorreu o erro no envio do Desafio.';
		}
	}
	else {
		$json['alert']   = 'danger';
		$json['message'] = 'Alguns campos são obrigatórios e não podem ficar vazios.';
	}

	echo json_encode($json);
	die();
	exit(0);

} else {
	header("Location: http://desafio.abracce.org.br/");
	die();
}

header("Location: http://desafio.abracce.org.br/");
exit();
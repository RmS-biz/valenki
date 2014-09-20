<?
	
	if (isset($_GET['action']) && $_GET['action']=='send_form'){
		
		$form_name = "FORM NAME NO SET";
		$email = "EMAIL NO SET";
		$type = "TYPE NO SET";
		$name = "NAME NO SET";
		$tel = "TEL NO SET";
		
		foreach ($_GET as $key => $val) {
			${$key} = $val;
		}
		
		$to  = "zakaz@valenki.info";
		$from  = "noreply@valenki.info" ;		
							
		$subject = $form_name." ".date("Y.m.d H:i:s")." ".$type."\r\n"; 
		
		$emessage = '
		<html>
			<head>
			<title>'.$form_name.'</title>
			</head>
		<body>
			<div style="width: 660px;">';


		foreach ($_GET as $key => $val) {
			${$key} = $val;
		$emessage .= '[  '.$key.'  ] -> [  '.$val.'  ]<br><br>';
		}

		
		$emessage .= '
			</div>
		</body>
		</html>';							
		$headers  = "Content-type: text/html; charset=utf-8 \r\n";
		$headers .= "From: ".$from."\r\n";
							
		if(mail($to, $subject, $emessage, $headers)) echo 'sended to CV <br>';
			else echo "error <br>";
		
		
		
	exit(0);	
		
		
		//send to CRM 
		/*
		$to  = "crm@antiresu.me";
		$from  = $email ;		
							
		$subject_crm = "Заявка ".date("Y.m.d H:i:s")." ".$type."\r\n"; 
		
		$emessage_crm = '
		<html>
			<head>
			<title>'.$form_name.'</title>
			</head>
		<body>
			<div style="width: 660px;">
				'.$email.'<br>'.$type.'
			</div>
		</body>
		</html>';							
		$headers  = "Content-type: text/html; charset=utf-8 \r\n";
		$headers .= "From: ".$from."\r\n";
		
		if(mail($to, $subject_crm, $emessage_crm, $headers)) echo 'sended to CRM';
			else echo "error";
	*/
	
		//send to Client

				$to  = $email;
				$from  =  "Правильное-резюме.онлайн <crm@antiresu.me>";		

				$headers  = "Content-type: text/html; charset=utf-8 \r\n";
				$headers .= "From: ".$from."\r\n";

		//if($type == "free") {
		
									
				$subject_cl = "Подтверждение email для консультации (".date("Y.m.d").") \r\n"; 
				
/*				$emessage_cl = '
				<html>
					<head>
					<title>Правильное Резюме</title>
					</head>
				<body>
					<div style="width: 660px;">
						Добрый день!<br>
						<br>
						Меня зовут Роман, я руководитель сервиса <a href="http://Правильное-Резюме.онлайн?r1=email&r2=welcome">Правильное-Резюме.онлайн</a>.<br>
						<br>
						Наш сервис позволяет проводить экспресс оценку резюме бесплатно.<br>
						<br>
						Просто отправьте свое резюме ответным письмом (вложением или скопируйте) <br>
						и не позднее 24 часов получите экспресс оценку Вашего резюме.<br>
						<br>
						Если Вас, что-то интересует, например:<br>
						1. Почему мало откликов на мое резюме?<br>
						2. Насколько мой опыт и знания подходят желаемой позиции?<br>
						3. Как повысить конкурентоспособность моего резюме?<br>
						4. На какую зарплату можно рассчитывать?<br>
						5. Почему меня не приглашают на собеседования?<br>
						6. Что писать в резюме, чтобы меня наняли в должности руководителя?<br>
						7. Как быстрее найти работу?<br>
						8. Что писать в сопроводительном письме?<br>
						9. Что в моем резюме не привлекательно?<br>
						10. Готово ли мое резюме для отправки работодателю?<br>
						<br>
						или что-то еще - просто опишите свою ситуацию и мы обязательно Вам поможем.	<br>
					<br>
						<br>
						С наилучшими пожеланиями,<br>
						Руководитель сервиса Правильное-Резюме.онлайн<br>
						Роман Петров.<br>
					</div>
				</body>
				</html>';							
*/
				$emessage_cl = '
				<html>
					<head>
					<title>Правильное Резюме</title>
					</head>
				<body>
					<div style="width: 660px;">
						Добрый день!<br>
						<br> 
						Подтвердите, пожалуйста, ваше желание на получение <a href="http://правильное-резюме.онлайн?r1=email&r2=confirm">онлайн консультации от HR-эксперта</a> ответив на это письмо.
						 <br>
						 <br>
						С наилучшими пожеланиями,<br>
						Роман Петров,<br>
						руководитель сервиса <a href="http://правильное-резюме.онлайн?r1=email&r2=confirm">«Правильное-резюме.онлайн»</a><br>
					</div>
				</body>
				</html>';							


		/*	}else {
				$subject_cl = "Заказ экспертизы от ".date("Y.m.d")." \r\n"; 
				
				$emessage_cl = '
				<html>
					<head>
					<title>Заказ экспертизы</title>
					</head>
				<body>
					<div style="width: 660px;">
						Добрый день!<br>
						<br>
						Меня зовут Роман, я эксперт сервиса Правильное-Резюме.онлайн.<br>
						<br>
						Для того, чтобы я мог сделать экспертизу резюме Вам необходимо:<br>
						1. Сделать оплату по ссылке <a href="http://правильное-резюме.онлайн/exp'.$pay[$type].'.php">http://правильное-резюме.онлайн/exp'.$pay[$type].'.php</a><br>
						2. Прислать вложением свое резюме на адрес cv@antiresu.me<br>
						3. Описать задачу, которую нужно нам решить: например - не приглашают на собеседования или как показать свою ценность и запросить большую зарплату<br>
						<br>
						С наилучшими пожеланиями,<br>
						Эксперт сервиса Правильное-Резюме.онлайн<br>
						Роман Петров.<br>
					</div>
				</body>
				</html>';							
				
			
			}
		*/
				if(mail($to, $subject_cl, $emessage_cl, $headers)) echo 'sended to client';
					else echo "error";


	}
			
?>
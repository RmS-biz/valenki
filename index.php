<?
	
			$str_ancor =				'
				<table>
					<tr>
						<td class="lp-lend-title_td">
							<a href="#price" class="dotted">узнать цены <br>и сделать заказ</a>
						</td>
						<td><a href="#price"> <img src="/img/scroll.png"></a></td>
					</tr>
				</table>';
				
	define("LOCAL_DEV", false);
	
	
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta charset="utf-8">
        <meta name="keywords" content="" />
        <meta name="description" content="" />
        <link rel="stylesheet" href="css/style.css" type="text/css" /> 
		<title>Валенки-инфо. Настоящие самовальные валенки</title>

		<link rel="stylesheet" href="css/jquery.fancybox.css?v=2.1.5" media="screen" >
		<script src="js/jquery-1.7.1.min.js"></script>
		<link rel="stylesheet" type="text/css" href="js/tooltipster-master/css/tooltipster.css" />
		<link rel="stylesheet" type="text/css" href="js/tooltipster-master/css/themes/tooltipster-shadow.css" />
		<script type="text/javascript" src="js/tooltipster-master/js/jquery.tooltipster.js"></script>
		<!--<script src="js/jquery.placeholder.js"></script>-->
		<script src="js/jquery.fancybox.pack.js?v=2.1.5"></script>
		<script src="js/common.js"></script>
		<link rel="icon" href="/img/favicon.ico" type="image/x-icon">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=PT+Sans+Narrow:400,700&subset=latin,latin-ext,cyrillic-ext,cyrillic">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lobster&subset=latin,latin-ext,cyrillic,cyrillic-ext">

		  <script type="text/javascript" src="/js/jquery.sticky.js"></script>
		  <script>
		    $(window).load(function(){
		      $("#header").sticky({ topSpacing: 0, className: 'sticky', wrapperClassName: 'my-wrapper' });
		    });
		  </script>		
		
<?if (!LOCAL_DEV) {?>		
		<!-- Facebook Conversion Code for Валенки - лид -->
<script>(function() {
  var _fbq = window._fbq || (window._fbq = []);
  if (!_fbq.loaded) {
    var fbds = document.createElement('script');
    fbds.async = true;
    fbds.src = '//connect.facebook.net/en_US/fbds.js';
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(fbds, s);
    _fbq.loaded = true;
  }
})();
window._fbq = window._fbq || [];
window._fbq.push(['track', '6018637724156', {'value':'0.00','currency':'RUB'}]);
</script>

<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-541b31190ca40731"></script>

<?} // if not LOCAL?>

<link href="css/style2.css" rel="stylesheet" type="text/css">
<!--[if lte IE 7]>
<style type="text/css">
	.countbox{ margin: -7px auto; }
	.countbox-days-text,.countbox-hours-text,.countbox-mins-text,.countbox-secs-text{margin-left: -174px;}
	.countbox-days1 span, .countbox-days2 span, .countbox-hours1 span, .countbox-hours2 span, .countbox-mins1 span, .countbox-mins2 span, .countbox-secs1 span, .countbox-secs2 span {margin: -5px 0 0 -13px;}
</style>
<![endif]-->
<script type="text/javascript">
	function CountBox() {
		dateNow = new Date();
		amount = ((23 - dateNow.getHours())*60*60 + (59 - dateNow.getMinutes())*60 + (60 - dateNow.getSeconds()))*1000;
		delete dateNow;
		if (amount < 0) {
			out = "<div class='countbox-num'><div class='countbox-days1'><span></span>0</div><div class='countbox-days2'><span></span>0</div><div class='countbox-days-text'></div></div>" + 
			"<div class='countbox-space'></div>" +
			"<div class='countbox-num'><div class='countbox-hours1'><span></span>0</div><div class='countbox-hours2'><span></span>0</div><div class='countbox-hours-text'></div></div>" + 
			"<div class='countbox-space'></div>" +
			"<div class='countbox-num'><div class='countbox-mins1'><span></span>0</div><div class='countbox-mins2'><span></span>0</div><div class='countbox-mins-text'></div></div>" + 
			"<div class='countbox-space'></div>" +
			"<div class='countbox-num'><div class='countbox-secs1'><span></span>0</div><div class='countbox-secs2'><span></span>0</div><div class='countbox-secs-text'></div></div>";
			var list = document.getElementsByClassName("countbox");
			for (var i = 0; i < list.length; i++) {
				list[i].innerHTML = out;
			}
			setTimeout("CountBox()", 10000)
		} else {
			days = 0;
			days1 = 0;
			days2 = 0;
			hours = 0;
			hours1 = 0;
			hours2 = 0;
			mins = 0;
			mins1 = 0;
			mins2 = 0;
			secs = 0;
			secs1 = 0;
			secs2 = 0;
			out = "";
			amount = Math.floor(amount / 1e3);
			days = Math.floor(amount / 86400);
			days1 = (days >= 10) ? days.toString().charAt(0) : '0';
			days2 = (days >= 10) ? days.toString().charAt(1) : days.toString().charAt(0);
			amount = amount % 86400;
			hours = Math.floor(amount / 3600);
			hours1 = (hours >= 10) ? hours.toString().charAt(0) : '0';
			hours2 = (hours >= 10) ? hours.toString().charAt(1) : hours.toString().charAt(0);
			amount = amount % 3600;
			mins = Math.floor(amount / 60);
			mins1 = (mins >= 10) ? mins.toString().charAt(0) : '0';
			mins2 = (mins >= 10) ? mins.toString().charAt(1) : mins.toString().charAt(0);
			amount = amount % 60;
			secs = Math.floor(amount);
			secs1 = (secs >= 10) ? secs.toString().charAt(0) : '0';
			secs2 = (secs >= 10) ? secs.toString().charAt(1) : secs.toString().charAt(0);
			out = "<div class='countbox-num'><div class='countbox-days1'><span></span>" + days1 + "</div><div class='countbox-days2'><span></span>" + days2 + "</div><div class='countbox-days-text'></div></div>" + 
			"<div class='countbox-space'></div>" +
			"<div class='countbox-num'><div class='countbox-hours1'><span></span>" + hours1 + "</div><div class='countbox-hours2'><span></span>" + hours2 + "</div><div class='countbox-hours-text'></div></div>" + 
			"<div class='countbox-space'></div>" +
			"<div class='countbox-num'><div class='countbox-mins1'><span></span>" + mins1 + "</div><div class='countbox-mins2'><span></span>" + mins2 + "</div><div class='countbox-mins-text'></div></div>" + 
			"<div class='countbox-space'></div>" +
			"<div class='countbox-num'><div class='countbox-secs1'><span></span>" + secs1 + "</div><div class='countbox-secs2'><span></span>" + secs2 + "</div><div class='countbox-secs-text'></div></div>";
			var list = document.getElementsByClassName("countbox");
			for (var i = 0; i < list.length; i++) {
				list[i].innerHTML = out;
			}
			setTimeout("CountBox()", 1e3)
		}
	}
	window.onload = function () {
		CountBox()
	}
</script>
		
</head>
<body>


<?if (!LOCAL_DEV) {?>		
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&appId=293592064130352&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<noscript><img height="1" width="1" alt="" style="display:none" src="https://www.facebook.com/tr?ev=6018637724156&amp;cd[value]=0.00&amp;cd[currency]=RUB&amp;noscript=1" /></noscript>
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-541b31190ca40731"></script>

<?} // if not LOCAL ?>

<div id="header" style="header">
	<table class="lp-wrapper1">
		<tr class="lp-block1">
			<td class="lp-block1-logo">ВАЛЕНКИ.ИНФО<br /><span>настоящие самовальные валенки (ручной работы)</span></td>
			<td class="lp-block1-phone">тел. <span class="lp-header-color">+7 (985) 1-900-400</span> <span class="lp-header-small">(с 9 до 21, ежедневно)</span><br />электропочта: <span class="lp-header-color">zakaz@valenki.info</span></td>
		</tr>
	</table>
</div>
	<table class="lp-wrapper1">
		<tr class="lp-block2">
			<td colspan="2"><a href="#free" class="dotted_free">Бесплатная примерка в Москве (в пределах МКАД)*</a></td>
		</tr>
		<tr class="lp-block3">
			<td colspan="2">
				<table class="lp-block3-table">
					<tr>
						<td class="lp-block3-left">
							<img src="img/block1-img.jpg" alt="" />
							<p>Настоящие русские валенки. Производство и продажа оптом и в розницу. <br />Заказ по телефону <span>+7 (985) 1-900-400</span>  или электропочте  <span>zakaz@valenki.info</span></p>
						</td>
						<td class="lp-block3-right">
	
<?if(0){?>						
<div id="form2" style="display:none;"  >						
<ul>
									<li><span>Доставка мигом:</span><br />- по Москве в день заказа<br />- по РФ БЕСПЛАТНО (по предоплате)</li>
									<li><span>Собственное производство</span><br />(все размеры в наличии)</li>
									<li><span>100% гарантия качества</span><br />(возврат/обмен в течение 90 дней<br /> без лишних вопросов)</li>
									<li><span>Индивидуальные размеры</span><br />(точно по вашей ноге)</li>
									<li><span>Модные узоры и рисунки</span><br />(выполненные художником)</li>
								</ul>
</div>						
<?}?>						
						
<div id="form1" class="form">
<form onsubmit="return false" id='lead'>
<fieldset>
						<input type="hidden"  name="form_name" value="Бесплатная примерка">

						<div class="form-title">ЗАЯВКА НА ПРИМЕРКУ ВАЛЕНОК</div>
						<input type="text" class="validate" id="name" name="name"  placeholder="Представьтесь" title='Укажите ваше имя'>
						<input type="text" class="validate" id="mobile" name="mobile"  placeholder="Контактный телефон или email" title='Укажите как с вами связаться'>
						<button class="send_button" onclick="yaCounter26187129.reachGoal('get_price'); return true;" rel='lead'>Померить бесплатно</button>
						<div class="form-title">Через 10 минут наш менеджер свяжется с вами для уточнения деталей. <br /><small> * - оплата курьерской доставки с покупкой.</small>
							
						</div>
						
					</fieldset>
</form>

</div>
						</td>
					</tr>
				</table>
			</td>
		</tr>
	</table>
	<table class="lp-wrapper2">
		<tr>
			<td  class="lp-block9-content_right" colspan="3" align="center">
	
				<div class="emag_div"><a href="http://valenki.info" >перейти к покупке в наш интернет магазин</a></div>
			</td>
		</tr>
	</table>
			
	
	
	
	<table class="lp-wrapper2">
		<tr>
			<td></td>
			<td></td>
			<td></td>
		</tr>
		<tr class="lp-lend2-1">
			<td colspan="2" class="lp-lend-title3">Наши любимые клиенты - это ...</td>
			<td class="lp-lend-title7">		<?php print($str_ancor); ?>				
</td>
		</tr>
		<tr class="lp-lend2-2">
			<td class="lp-lend2-content1"><img src="img/block2-img1.png" alt="" /></td>
			<td colspan="2" class="lp-lend2-content2">Бабушки и дедушки <br />
<span>(полуваленки легко снимать и одевать)</span><br />
<img src="img/block2-img2.png" alt="" /></td>
		</tr>
		<tr class="lp-lend2-2">
			<td class="lp-lend2-content1"><img src="img/block2-img3.png" alt="" /></td>
			<td colspan="2" class="lp-lend2-content2">Детишки, особенно грудного возраста <br />
<span>(натуральные валенки греют ножки в коляске в любой мороз)</span><br /><img src="img/block2-img4.png" alt="" /></td>
		</tr>
		<tr class="lp-lend2-2">
			<td class="lp-lend2-content1"><img src="img/block2-img5.png" alt="" /></td>
			<td colspan="2" class="lp-lend2-content2">Любители природы и свежего воздуха<br />
<span>(идеально для частного дома, рыболовов и собаководов)</span><br /><img src="img/block2-img6.png" alt="" /></td>
		</tr>
		<tr class="lp-lend2-2">
			<td class="lp-lend2-content1"><img src="img/block2-img7.png" alt="" /></td>
			<td colspan="2" class="lp-lend2-content2">Толстые люди с проблемами ног <br />
<span>(изготовим валенки по вашим меркам для каждой из ног)</span><br /><img src="img/block2-img8.png" alt="" /></td>
		</tr>
	</table>

	<table class="lp-wrapper2">
		<tr>
			<td></td>
			<td></td>
			<td></td>
		</tr>
		<tr class="lp-lend2-1">
			<td colspan="2" class="lp-lend-title3">Даже Михаил Барщевский в наших валенках!</td>
			<td class="lp-lend-title5">		<?php print($str_ancor); ?>	</td>
		</tr>
		<tr>
			<td class="lp-land-content1"><img src="img/block4-img1.jpg" alt="" /></td>
			<td class="lp-land-content2">Михаил Барщевский<br />
<span>известный адвокат, политик, общественный деятель, <br />
госслужащий, писатель <br /><br />

Валенки с эксклюзивным<br />
рисунком</span></td>
			<td class="lp-land-content3"><img src="img/block4-img2.jpg" alt="" /></td>
		</tr>
	</table>
	
	
	
	
	<a name="price" id="price">
	<table class="lp-wrapper3">
		<tr class="lp-lend2-1">
			<td colspan="2" class="lp-lend-title3">Наши цены</td>
			<td class="emag"><a href="http://valenki.info" >купить валенки в интернет магазине</a></td>
		</tr>

		<tr>

			<td  class="lp-block9-content_right" colspan="3" align="center">
			<h2>У нас самые привлекательные цены! Убедитесь в этом.</h2>

			 <br />
				<table class="table2">
					<tr class="table2-header">
						<td class="table-br">Размер</td>
						<td class="table-br2">Высокие <span>валенки</span></td>
						<td class="table-br2">Короткие <span>валенки</span></td>
						<td class="table-br2">Галоши</td>
					</tr>
					<tr class="table1-line2">    
						<td class="table-content1">детский</td> 
						<td class="table-content2"> от 1 490 руб.</td>
						<td class="table-content2"> - </td>
						<td class="table-content2">290 руб.</td>	
					</tr>
					
					
					<tr class="table2-content4"> 
						<td class="table2-left" >  женский</td>
						<td>от 1 790 руб.</td>
						<td>от 1 590 руб.</td>
						<td>390 руб.</td>				
					</tr>
					
					
					<tr class="table1-line2"> 
						<td class="table2-left">   мужской</td>
						<td class="table-content2">от 1 990 руб.</td>
						<td class="table-content2">от 1 790 руб.</td>
						<td class="table-content2">390 руб.</td>		
					</tr>
					
					
					
					<tr class="table2-content4">	
						<td class="table2-left"> великан</td>
						<td class="table-content2">от 2 390 руб.</td>		
						<td class="table-content2">от 1 990 руб.</td>		
						<td class="table-content2">490 руб.</td>		
					</tr>
				</table>
				
			<h2>Что вы получаете за эту цену?</h2>
				<table>
				<tr class="lp-lend3-2">
					<td class="lp-lend3-content1"><img src="img/block3-img3.png" alt="" /></td>
					<td colspan="2" class="lp-lend3-content2">Доставку в день заказа<span> (согласуйте с менеджером)</span></td>
				</tr>
				<tr class="lp-lend3-2">
					<td class="lp-lend3-content1"><img src="img/block3-img2.png" alt="" /></td>
					<td colspan="2" class="lp-lend3-content2">Бесплатную примерку в Москве <span>(оплачиваете курьерскую доставку с покупкой - убедившись в высоком качестве валенок)</span></td>
				</tr>
				<tr class="lp-lend3-2">
					<td class="lp-lend3-content1"><img src="img/block3-img1.png" alt="" /></td>
					<td colspan="2" class="lp-lend3-content2">90 дней на обмен<span> (вместо 7 дней по Закону,  без лишних вопросов)</span></td>
				</tr>
				<tr class="lp-lend3-2">
					<td class="lp-lend3-content1"><img src="img/block3-img5.png" alt="" /></td>
					<td colspan="2" class="lp-lend3-content2">Персональный подход<span> (Приезжает менеджер, а не курьер. Профессиональная помощь в выборе. <br />
					Привозим несколько размеров на выбор)</span></td>
				</tr>
				<tr class="lp-lend3-2">
					<td class="lp-lend3-content1"><img src="img/block3-img8.png" alt="" /></td>
					<td colspan="2" class="lp-lend3-content2">Самые лучшие валенки <span>(14 лет опыта катания валенок. Эксклюзивные колодки от 90 летнего мастера. Собственное производство в республики Чувашия, 700 км от Москвы. Убедиться в этом просто - сделайте заказ)</span></td>
				</tr>
				</table>
			<a name="free" id="free" />
			<br><br>
			<h2>Но и это еще не все - успейте принять участие в акции!</h2>
			
			<h3 class="alarm">БЕСПЛАТНАЯ ПРИМЕРКА В МОСКВЕ (в пределах МКАД) <br>
			<span>Оставьте заявку сегодня, а воспользоваться можете до Нового Года!</span></h3>
			<div class="countbox"></div>
			</p>
				
					<div id="form2" class="form form_lead">
					<form onsubmit="return false" id='lead2'>
					<fieldset>
											<input type="hidden"  name="form_name" value="Хочу бесплатную доставку">
					
											<div class="form-title_lead">Заявка на бесплатную примерку <span>решение действительно до 1 января 2018 года!</span>
												
												
											</div>
											<input type="text" class="validate" id="name01" name="name01"  placeholder="Представьтесь" title='Укажите ваше имя'>
											<input type="text" class="validate" id="mobile01" name="mobile01"  placeholder="Контактный телефон или email" title='Укажите как с вами связаться'>
											<textarea type="text" id="order01" name="order01" placeholder="Укажите, что вы желаете купить."></textarea>
											<button class="send_button" onclick="yaCounter26187129.reachGoal('lead','get_price'); return true;" rel='lead2'>Хочу бесплатную примерку</button>
											<div class="form-text">Информация ни в коем случае
																			не будет передана третьим лицам. Запрашиваемая информация 
																			необходима исключительно для связи с вами и улучшения нашего
																			сервиса для вашего комфорта. 
																			
																			<br><small>Нажимая кнопку "хочу бесплатную примерку" вы <a href="http://valenki.info/page/soglasie" target="_blank">соглашаетесь с передачей и обработкой</a> ваших персональных данных.</small><br>
																			</div>
											
										</fieldset>
					</form>
					
					</div>
					
					<div class="emag_div"><a href="http://valenki.info" >или купите валенки в нашем интернет магазине</a></div>
			</td>
		</tr>	</table>
		
	<a name="otziv" id="otziv" />
	<table class="lp-wrapper2" border="1">
		<tr>
			<td></td>
			<td></td>
			<td></td>
		</tr>
		<tr class="lp-lend2-1">
			<td colspan="2" class="lp-lend-title3">Отзывы наших клиентов</td>
			<td class="lp-lend-title7">		<?php print($str_ancor); ?>	</td>
		</tr>
		<tr>
			<td colspan="3" class="lp-block9-title"></td>
		</tr>
		<tr>
			<td class="lp-block9-content2"><img src="img/block9-img1.png" alt="" /></td>
			<td colspan="2" class="lp-block9-content">
			
			Я просмотрела много сайтов в поисках качественных 
валенок и очень рада, что не ошиблась в выборе этого, 
такого "теплого" сайта.
			
			<br /><br />
			<a onclick="hide_show(reply001);" class="dotted">Читать полностью</a>
			<div id="reply001" class="b-toggle grey">
			<br />
			Дорогие друзья! Хочу поделиться с вами удовольствием, которое я получила от приобретения валенок и от общения с замечательной Наташей, которая. вовремя их доставила. Я просмотрела много сайтов в поисках качественных валенок и очень рада, что не ошиблась в выборе этого, такого "теплого" сайта. Всем, кто не хочет мерзнуть зимой, рекомендую именно это место. С огромной благодарностью, Ольга Егорова
			</div>			
			
			<br /> <span class="lp-block9-content2">Ольга Егорова, Москва</span>
			</td>
		</tr>
		<tr>
			<td colspan="3" class="lp-block9-title"></td>
		</tr>
		<tr>
			<td class="lp-block9-content2"><img src="img/block9-img2.png" alt="" /></td>
			<td colspan="2" class="lp-block9-content">
			Позвонил, говорю хочу валенки на семью и собственно все... Наталья перезвонила, привезла валенки на выбор и калоши и кучу тепленьких носок... Все во время, все четко... Да и как то даже заботливо.
			
			<br /><br />
			<a onclick="hide_show(reply002);" class="dotted">Читать полностью</a>
			<div id="reply002" class="b-toggle grey">
			<br />
			На улице похолодало и все больше мыслей о предстоящей зиме и пушистом белом снеге у меня в деревне... А не купить ли мне валенки для всей семьи??? Из всех сайтов - Ваш самый привлекательный. Веселый, "легкий" и информативный!  Позвонил, говорю хочу валенки на семью и собственно все... Наталья перезвонила, привезла валенки на выбор и калоши и кучу тепленьких носок... Все во время, все четко... Да и как то даже заботливо. Действительно МОЛОДЦЫ!!! Будем Вас рекомендовать... Спасибо!!!  Сидим на диване сейчас всей семьей в валенках)))) и представляем как в деревне зимой с ребенком крепость строим- в валенках...))), на санках с гор катаемся, гуляем- а ножкам то тепло))))!!! Одним словом - довольны и самой покупкой и качеством сервиса. Еще раз спасибо!
			</div>
			
			<span class="lp-block9-content2"><br />Дмитрий Волков, Москва</span>
			</td>
		</tr>
		<tr>
			<td colspan="3" class="lp-block9-title"></td>
		</tr>
		<tr>
			<td class="lp-block9-content2"><img src="img/block9-img3.png" alt="" /></td>
			<td colspan="2" class="lp-block9-content">
			На следующий день Наталья доставила не только 2 пары на выбор, а приехала на автомобиле, где полон багажник этих полуваленок. Вот это сервис!
			<br /><br />
			<a onclick="hide_show(reply003);" class="dotted">Читать полностью</a>
			<div id="reply003" class="b-toggle grey">
			<br />
			Сегодня купил полуваленки и пока не забылось решил передать вам слова благодарности.<br /><br />

Бабушка живёт в деревне, часто болеет, переохлаждаться нельзя, ноги требуют тепла, поэтому важный момент - это натуральность продукта.<br /><br />

Думал что так просто выбрать, назвал размер и всё. Не так просто это. Хорошо что,в вашем магазине менеджер Наталья работает, с русской душой девушка, с открытым сердцем. Отнеслась ко мне как к покупателю с теплотой и заботой, как сами русские валенки. Видно, что она любит свой продукт и работу. А дело в том, что я сомневался что выберу правильный размер, по тел. бабушку просил померить в сантиметрах ступню и хорошо у вас на сайте есть помощь как правильно валенки замерять. Вооружившись размерами, я позвонил и попросил привести мне на выбор 2 пары 38 и 39 размера серого цвета. Что подойдёт по меркам, то и куплю. Наталья без рассуждений согласилась, что приятно меня порадовало.<br /><br />

На следующий день Наталья доставила не только 2 пары на выбор, а приехала на автомобиле, где полон багажник этих полуваленок. Вот это сервис! Пришлось повыбирать из этого обилия и главное всё обмерить чтоб бабуле нашей подошли, Наталья активно помогала выбрать как профессинал.<br /><br />

А пока она ехала, мы с сестрой созвонились и решили ещё и галоши силиконовые заказать, позвонил Наталье, а она уже в пути, НО удача нас не миновала, она предусмотрительно и галоши возит в багажнике.<br /><br />

Честно скажу те серые которые предназначались, по меркам не подошли, и я выбрал белые. Они ещё лучше смотрятся с прозрачными силиконовыми галошами. Теперь наша бабуля, будет первой бабулей на деревне!!!<br /><br />

Фото приложил, жена мерила, ей понравились, очень мягкие, тёплые. И Мурке нашей тож понравились см. фото. Поэтому, прошу руководство магазина отметить Наталью премией. Желаю Вам и дальше процветания, и нести истинно русское добро и тепло в люди. Молодцы!!!!<br /><br />

С уважением, Сергей Б. </div> <br />

<span  class="lp-block9-content2">Сергей Бычковский, Москва</span>
<br /><br />
<img src="img/block9-img4.jpg" alt="" /></td>
		</tr>
	</table>
	
	
	
	
	
	<table class="lp-wrapper2">
		<tr>
			<td></td>
			<td></td>
			<td></td>
		</tr>
		<tr class="lp-lend2-1">
			<td colspan="2" class="lp-lend-title3">Желаете что-то изысканное?</td>
			<td class="lp-lend-title7">		<?php print($str_ancor); ?>	</td>
		</tr>
		<tr>
			<td class="lp-block6-title"  colspan="3"><span> Заказывайте модные валенки с художественным рисунком. Каждая работа уникальна! <br> 
			Можете выбрать из уже ранее выполняемых работ или предложить свой вариант. <br>
			Поверьте, мы можем воплотить в жизнь любую вашу идею - спрашивайте смелее!</span></td>
		</tr>
		<tr>
			<td class="lp-block8-title" colspan="3">Три снегиря</td>
		</tr>
		<tr class="lp-block8-content">
			<td><img src="img/block8-img1.png" alt="" /></td>
			<td><img src="img/block8-img2.png" alt="" /></td>
			<td><img src="img/block8-img3.png" alt="" /></td>
		</tr>
		<tr>
			<td class="lp-block8-title" colspan="3">Два снегиря</td>
		</tr>
		<tr class="lp-block8-content">
			<td><img src="img/block8-img4.png" alt="" /></td>
			<td><img src="img/block8-img5.png" alt="" /></td>
			<td><img src="img/block8-img6.png" alt="" /></td>
		</tr>
		<tr>
			<td class="lp-block8-title" colspan="3">Золотой</td>
		</tr>
		<tr class="lp-block8-content">
			<td><img src="img/block8-img7.png" alt="" /></td>
			<td><img src="img/block8-img8.png" alt="" /></td>
			<td><img src="img/block8-img9.png" alt="" /></td>
		</tr>
		<tr>
			<td class="lp-block8-title" colspan="3">Орел</td>
		</tr>
		<tr class="lp-block8-content">
			<td><img src="img/block8-img10.png" alt="" /></td>
			<td><img src="img/block8-img11.png" alt="" /></td>
			<td><img src="img/block8-img12.png" alt="" /></td>
		</tr>
		<tr>
			<td class="lp-block8-title" colspan="3">Панда</td>
		</tr>
		<tr class="lp-block8-content">
			<td><img src="img/block8-img13.png" alt="" /></td>
			<td><img src="img/block8-img14.png" alt="" /></td>
			<td><img src="img/block8-img15.png" alt="" /></td>
		</tr>
		<tr>
			<td class="lp-block8-title" colspan="3">Розы</td>
		</tr>
		<tr class="lp-block8-content">
			<td><img src="img/block8-img16.png" alt="" /></td>
			<td><img src="img/block8-img17.png" alt="" /></td>
			<td><img src="img/block8-img18.png" alt="" /></td>
		</tr>
		<tr>
			<td class="lp-block8-title" colspan="3">Сакура</td>
		</tr>
		<tr class="lp-block8-content">
			<td><img src="img/block8-img19.png" alt="" /></td>
			<td><img src="img/block8-img20.png" alt="" /></td>
			<td><img src="img/block8-img21.png" alt="" /></td>
		</tr>
		<tr>
			<td class="lp-block8-title" colspan="3">Японский сад</td>
		</tr>
		<tr class="lp-block8-content">
			<td><img src="img/block8-img22.png" alt="" /></td>
			<td><img src="img/block8-img23.png" alt="" /></td>
			<td><img src="img/block8-img24.png" alt="" /></td>
		</tr>
		<tr>
			<td class="lp-block8-title" colspan="3">Ваша фантазия <span>(нарисуем любую картинку)</span></td>
		</tr>
		<tr class="lp-block8-content">
			<td><img src="img/block8-img25.png" alt="" /></td>
			<td><img src="img/block8-img26.png" alt="" /></td>
			<td><img src="img/block8-img27.png" alt="" /></td>
		</tr>
	</table>


	
	
	
<?	/*	
	<table class="lp-wrapper2">
		<tr class="lp-lend2-1">
			<td colspan="2" class="lp-lend-title3">Почему покупают у нас?</td>
			<td class="lp-lend-title4">
			<?php print($str_ancor); ?>				
			</td>
		</tr>
		<tr class="lp-otstup">
			<td></td>
			<td></td>
			<td></td>
		</tr>
	<tr class="lp-lend3-2">
			<td class="lp-lend3-content1"><img src="img/block3-img5.png" alt="" /></td>
			<td colspan="2" class="lp-lend3-content2">Ручная работа <span>(залог мягкости и износостойкости валенок)</span></td>
		</tr>  */ ?>
<?	/*		<tr class="lp-lend3-2">
			<td class="lp-lend3-content1"><img src="img/block3-img6.png" alt="" /></td>
			<td colspan="2" class="lp-lend3-content2">Натурально<span> (100% шерсть, без применения кислоты)</span></td>
		</tr>*/ ?>
<?	/*		<tr class="lp-lend3-2">
			<td class="lp-lend3-content1"><img src="img/block3-img8.png" alt="" /></td>
			<td colspan="2" class="lp-lend3-content2">Индивидуально<span> (можем сделать любой нестандартный размер)</span></td>
		</tr>
		<tr class="lp-lend3-2">
			<td class="lp-lend3-content1"><img src="img/block3-img9.png" alt="" /></td>
			<td colspan="2" class="lp-lend3-content2">Красиво <span>(нанесение рисунка художником разными технологиями)</span></td>
		</tr>
		<tr class="lp-lend3-2">
			<td class="lp-lend3-content1"><img src="img/block3-img10.png" alt="" /></td>
			<td colspan="2" class="lp-lend3-content2">Множество способов оплаты <span>(Visa, MasterCard, Яндекс.Деньги)</span></td>
		</tr>
	</table>*/ ?>
	
	
	
	
	
	
	
	
	
	
	
	
	<table class="lp-wrapper2">
		<tr>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
		</tr>
		<tr class="lp-lend2-1">
			<td colspan="3" class="lp-lend-title3">Какие валенки вы можете купить?</td>
			<td class="lp-lend-title6">		<?php print($str_ancor); ?>	</td>
		</tr>
		<tr class="lp-otstup">
			<td></td>
			<td></td>
			<td></td>
			<td></td>
		</tr>
		<tr>
			<td class="lp-land-title" colspan="4">Белые, серые, черные и комбинированные</td>
		</tr>
		<tr class="lp-block5-content">
			<td><img src="img/block5-img1.png" alt="" /></td>
			<td><img src="img/block5-img2.png" alt="" /></td>
			<td><img src="img/block5-img3.png" alt="" /></td>
			<td><img src="img/block5-img4.png" alt="" /></td>
		</tr>
		<tr>
			<td class="lp-land-title" colspan="4">Детские, взрослые высокие и полуваленки</td>
		</tr>
		<tr class="lp-block5-content">
			<td colspan="4" class="lp-block5-content2">
				<ul>
					<li><img src="img/block5-img5.png" alt="" /></li>
					<li><img src="img/block5-img6.png" alt="" /></li>
					<li><img src="img/block5-img7.png" alt="" /></li>
				</ul>
			</td>
		</tr>
		<tr>
			<td class="lp-land-title" colspan="4">Силиконовые галоши: черные и прозрачные</td>
		</tr>
		<tr class="lp-block5-content">
			<td colspan="4" class="lp-block5-content2">
				<ul>
					<li><img src="img/block5-img8.png" alt="" /></li>
					<li><img src="img/block5-img9.png" alt="" /></li>
				</ul>
			</td>
		</tr>
		<tr>
			<td class="lp-land-title" colspan="4">Шерстяные тапочки (примеры узоров)</td>
		</tr>
		<tr class="lp-block5-content">
			<td><img src="img/block5-img10.png" alt="" /></td>
			<td><img src="img/block5-img11.png" alt="" /></td>
			<td><img src="img/block5-img12.png" alt="" /></td>
			<td><img src="img/block5-img13.png" alt="" /></td>
		</tr>
		<tr class="lp-block5-content">
			<td><img src="img/block5-img14.png" alt="" /></td>
			<td><img src="img/block5-img15.png" alt="" /></td>
			<td><img src="img/block5-img16.png" alt="" /></td>
			<td><img src="img/block5-img17.png" alt="" /></td>
		</tr>
		<tr>
			<td class="lp-land-title" colspan="4">Шерстяные носки ручной вязки для взрослых и детей</td>
		</tr>
		<tr class="lp-block5-content">
			<td colspan="4" class="lp-block5-content2">
				<ul>
					<li><img src="img/block5-img18.png" alt="" /></li>
					<li><img src="img/block5-img19.png" alt="" /></li>
					<li><img src="img/block5-img20.png" alt="" /></li>
				</ul>
			</td>
		</tr>
	</table>
	<table class="lp-wrapper2">
		<tr>
			<td></td>
			<td></td>
			<td></td>
		</tr>
		<tr class="lp-lend2-1">
			<td class="lp-lend-title3" colspan="2">Желаете валенки с красивым узором?</td>
			<td class="lp-lend-title7">		<?php print($str_ancor); ?>	</td>
		</tr>
		<tr>
			<td class="lp-block6-title" colspan="3">Узоры выполняются красками с термозакреплением <br />
<span>Для заказа валенок с узором, просто сообщите менеджеру номер узора и желаемый цвет <br> (красный, белый, синий, черный)</span></td>
		</tr>
		<tr class="lp-block6-content">
			<td><img src="img/block6-img1.png" alt="" /></td>
			<td><img src="img/block6-img2.png" alt="" /></td>
			<td><img src="img/block6-img3.png" alt="" /></td>
		</tr>
		<tr class="lp-block6-content">
			<td><img src="img/block6-img4.png" alt="" /></td>
			<td><img src="img/block6-img5.png" alt="" /></td>
			<td><img src="img/block6-img6.png" alt="" /></td>
		</tr>
		<tr class="lp-block6-content">
			<td><img src="img/block6-img7.png" alt="" /></td>
			<td><img src="img/block6-img8.png" alt="" /></td>
			<td><img src="img/block6-img9.png" alt="" /></td>
		</tr>
		<tr class="lp-block6-content">
			<td><img src="img/block6-img10.png" alt="" /></td>
			<td><img src="img/block6-img11.png" alt="" /></td>
			<td><img src="img/block6-img12.png" alt="" /></td>
		</tr>
		<tr class="lp-block6-content">
			<td><img src="img/block6-img13.png" alt="" /></td>
			<td><img src="img/block6-img14.png" alt="" /></td>
			<td><img src="img/block6-img15.png" alt="" /></td>
		</tr>
	</table>
	
	
	
	
	
	<table class="lp-wrapper2">
		<tr>
			<td></td>
			<td></td>
			<td></td>
		</tr>
		<tr class="lp-lend2-1">
			<td colspan="2" class="lp-lend-title3">Нам доверяют корпоративные клиенты</td>
			<td class="lp-lend-title7">		<?php print($str_ancor); ?>	</td>
		</tr>
		<tr>
			<td class="lp-block7-title" colspan="3">Land Rover Russia <span>(Москва)</span></td>
		</tr>
		<tr class="lp-block7-content">
			<td><img src="img/block7-img1.png" alt="" /></td>
			<td><img src="img/block7-img2.png" alt="" /></td>
			<td><img src="img/block7-img3.png" alt="" /></td>
		</tr>
		<tr>
			<td class="lp-block7-title" colspan="3">IT Park <span>(Казань)</span></td>
		</tr>
		<tr class="lp-block7-content">
			<td><img src="img/block7-img4.png" alt="" /></td>
			<td><img src="img/block7-img5.png" alt="" /></td>
			<td><img src="img/block7-img6.png" alt="" /></td>
		</tr>
	</table>
	
	
	
	
	
	




	<table class="lp-wrapper2">
		<tr>
			<td></td>
			<td></td>
			<td></td>
		</tr>
		<tr class="lp-lend2-1">
			<td colspan="2" class="lp-lend-title3"><a id="button" onclick="hide_show(indy);" class="dotted">Индивидуальный заказ <span>(раскрыть)</span></a></td>
			<td class="lp-lend-title7">		<?php print($str_ancor); ?>	</td>
		</tr>
	</table>
	<div id="indy" class="b-toggle">
		<table class="lp-wrapper2">
			<tr>
				<td class="lp-block10-title1" colspan="3">Не подходят валенки стандартного размера?<br />
	Изготовим индивидуальные валенки специально для вас.</td>
			</tr>
			<tr>
				<td class="lp-block10-title2" colspan="3">1. Измеряете размер стопы</td>
			</tr>
			<tr>
				<td class="lp-block10-content1" colspan="3"><img src="img/block10-img1.png" alt="" /></td>
			</tr>
			<tr>
				<td class="lp-block10-title2" colspan="3">2. Измеряете объем стопы</td>
			</tr>
			<tr>
				<td class="lp-block10-content2" colspan="3">
					<ul>
						<li><img src="img/block10-img2.jpg" alt="" /></li>
						<li class="lp-block10-content3">Обратите внимание!<br />
														<span>Стоимость валенок индивидуальная</span><br /><br />
														
														<span><span>Валенки изготовленные <br />
														специально для вас <br />
														обмену и возврату <b>не подлежат!</b></span></span></li>
					</ul>
				</td>
			</tr>
			<tr>
				<td class="lp-block10-title2" colspan="3">3. Выберите цвет валенка и подошву <span>(опционально)</span></td>
			</tr>
			<tr>
				<td colspan="3">
					<table class="lp-block10-content4">
						<tr>
							<td>
								<ul>
									<li><img src="img/block10-img3.png" alt="" /><span>белый</span></li>
									<li><img src="img/block10-img4.png" alt="" /><span>серый</span></li>
									<li><img src="img/block10-img5.png" alt="" /><span>черный</span></li>
									<li><img src="img/block10-img6.png" alt="" /><span>комбинированный</span></li>
								</ul>
							</td>
							<td class="lp-block10-content5"><img src="img/block10-img7.jpg" alt="" /></td>
						</tr>
					</table>
				</td>
			</tr>
			<tr>
				<td class="lp-block10-title2" colspan="3">4. Отправьте всю собранную информацию на электропочту</td>
			</tr>
			<tr>
				<td class="lp-block10-title3" colspan="3">zakaz@valenki.info</td>
			</tr>
			<tr class="lp-block10-content6">
				<td><img src="img/block10-img8.png" alt="" /></td>
				<td><img src="img/block10-img9.png" alt="" /></td>
				<td><img src="img/block10-img10.png" alt="" /></td>
			</tr>
			<tr>
				<td class="lp-block10-title4" colspan="3">Пример валенка по индивидуальному размеру + модный рисунок</td>
			</tr>
		</table>
	</div>
	
	
	
	<table class="lp-wrapper1">
		<tr>
			<td></td>
			<td></td>
			<td></td>
		</tr>
		<tr class="lp-lend2-1">
			<td colspan="2" class="lp-lend-title3">Наше производство</td>
			<td class="lp-lend-title7">		<?php print($str_ancor); ?>	</td>
		</tr>
		<tr class="otstup2">
			<td></td>
			<td></td>
			<td></td>
		</tr>
		<tr class="lp-block11-content">
			<td><img src="img/block11-img1.png" alt="" /></td>
			<td><img src="img/block11-img2.png" alt="" /></td>
			<td><img src="img/block11-img3.png" alt="" /></td>
		</tr>
		<tr class="lp-block11-content">
			<td><img src="img/block11-img4.png" alt="" /></td>
			<td><img src="img/block11-img5.png" alt="" /></td>
			<td><img src="img/block11-img6.png" alt="" /></td>
		</tr>
		<tr class="lp-block11-content">
			<td><img src="img/block11-img7.png" alt="" /></td>
			<td><img src="img/block11-img8.png" alt="" /></td>
			<td><img src="img/block11-img9.png" alt="" /></td>
		</tr>
	</table>
	
	
	
	
	<table class="lp-wrapper1">
		<tr>
			<td></td>
			<td></td>
			<td></td>
		</tr>
		<tr class="lp-lend2-1">
			<td colspan="2" class="lp-lend-title3">Способы оплаты</td>
			<td class="lp-lend-title7"><?php print($str_ancor); ?></td>
		</tr>
		<tr class="lp-block12-content">
			<td><img src="img/block12-img1.jpg" alt="" /></td>
			<td class="lp-block12-content1"><img src="img/block12-img2.jpg" alt="" /><br /><br /><br /><br /><br />наложенный платеж<br /> <br /><span>+5% к стоимости товара<br />
         (комиссия Почты России)</span></td>
			<td class="lp-block12-content2"><img src="img/block12-img3.jpg" alt="" /><br />наличными курьеру</td>
		</tr>
	</table>
	<table class="lp-wrapper2">
		<tr>
			<td></td>
			<td></td>
			<td></td>
		</tr>
		<tr class="lp-lend2-1">
			<td colspan="2" class="lp-lend-title3">Способы доставки</td>
			<td class="lp-lend-title7">		<?php print($str_ancor); ?>	</td>
		</tr>
		<tr class="lp-block13-content">
			<td class="lp-block13-content1">по Москве и МО<br />
			<img src="img/block13-img1.jpg" alt="" />
			<br /><p>390 рублей <span>внутри МКАД</span></p>
			<p><span>МО - по договоренности</span></p></td>
			<td class="lp-block13-content2">по России
				<ul>
					<li><img src="img/block13-img2.jpg" alt="" /><p>Бесплатно<br />
<span>(предоплата)</span></p></li>
					<li><img src="img/block13-img3.jpg" alt="" /><p>1 классом<br />
<span>(ускоренная)</span></p></li>
					<li><img src="img/block13-img4.jpg" alt="" /><p>Экспресс<br />
<span>(до двери)</span></p></li>
				</ul>
			</td>
			<td class="lp-block13-content3"><img src="img/block13-img5.jpg" alt="" /></a>
</td>
		</tr>
	</table>
	<table class="lp-wrapper4">
		<tr>
			<td colspan="2"><p class="lp-block14-footer">Остались вопросы?<br /><br />
				<span>1. Позвоните нам:    <b>+7 (985) 1-900-400</b> <br /><br />
				2. Напишите нам:     <b>zakaz@valenki.info</b></span></p>
			</td>
		</tr>
	</table>
	
		<table class="lp-wrapper4">
		<tr>
			<td colspan="2" class="lp-block9-content_right">
				<h2>Наши странички в социальных сетях:</h2>
			</td>
		</tr>

		<tr>
			<td colspan="2">
							<div class="fb-like-box" data-href="https://www.facebook.com/valenki.info" data-colorscheme="light" data-show-faces="true" data-header="true" data-stream="false" data-show-border="true"></div>
							<a href="https://plus.google.com/112783448377541103101" rel="publisher">Google+</a>
			</td>
		</tr>
	</table>
							
	
	<div id="modal_success">
		<div class="success"><noindex>
			<div class="form_title">Заявка принята!</div>	
			<p>Ожидайте, пожалуйста, звонка нашего менеджера на указанный телефон.<br>
<?if(0){?>			<br>
				Если его нет, то проверьте, пожалуйста, вкладку "Спам" или<br>
				напишите письмо на email <a href="mailto:crm@antiresu.me">crm@antiresu.me</a> сами.<br>
<?}?>
				<br>
				Спасибо за интерес к настоящим валенкам!
			</p>
			<button class="close_fancy">Ок</button>
			</noindex>
		</div>
	</div>

<?if (!LOCAL_DEV) {?>		
	
	<!-- Yandex.Metrika counter --><script type="text/javascript">(function (d, w, c) { (w[c] = w[c] || []).push(function() { try { w.yaCounter26187129 = new Ya.Metrika({id:26187129, webvisor:true, clickmap:true, trackLinks:true, accurateTrackBounce:true, trackHash:true}); } catch(e) { } }); var n = d.getElementsByTagName("script")[0], s = d.createElement("script"), f = function () { n.parentNode.insertBefore(s, n); }; s.type = "text/javascript"; s.async = true; s.src = (d.location.protocol == "https:" ? "https:" : "http:") + "//mc.yandex.ru/metrika/watch.js"; if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); } else { f(); } })(document, window, "yandex_metrika_callbacks");</script><noscript><div><img src="//mc.yandex.ru/watch/26187129" style="position:absolute; left:-9999px;" alt="" /></div></noscript><!-- /Yandex.Metrika counter -->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-27300488-2', 'auto');
  ga('send', 'pageview');

</script>

<?} // if not LOCAL?>
</body>
</html>
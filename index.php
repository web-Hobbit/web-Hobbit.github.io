
<!DOCTYPE html>
<html lang="en"> 
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width-device-width, 
  initial-scale-1.0">
  <link rel="stylesheet"  href="/css/style.css">  
  <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
  <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>
  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
</head>
<body style='overflow-x:hidden;'>
 <div class="Header">
    <div class="nav-top">
       <div class="Logo">
          <a href="#" id="logo"><img src="/img/LOGO.png"> <strong>Bellyful</strong></a>
       </div>
      <div class="nav-menu">
         
       	   <div class="header_item"><a href="#menu-title">Меню</a></div>
       	   <div class="header_item"><a href="#reviews-title">Преимущества</a></div>
       	   <div class="header_item"><a href="#reserv-title">Бронь</a></div>
       	   <div class="header_item"><a href="#Team-title">Команда</a></div>
       	   <div class="header_item"><a href="#contacts-title">Контакты</a></div>
        
      </div>
    </div>
 
    <div class="nav-bottom">
       <div class="nb-title">
    	   <h1>Приходите и отведайте уникальные<br>
    	   блюда французской кухни<br></h1><br><br>
    	   <h3>Отличный сервис, живая музыка,<br>приятная атмосфера.</h3>

    	   <button class="Check-menu"><a href="#menu-title">Посмотреть меню</a></button>
       </div>

       <div class="Order-Desk">

           <form class="order-form" id="order-form_1" action="send.php" method="POST">
           	 <p style="color:#FFF; font-size: 20px;">Оформить заявку</p>
          <input type="text" id="name" placeholder="Имя" required>
          <input name="tel" type="tel" id="phone" placeholder="Телефон" required>
          <input type="email" id="email" placeholder="E-mail" required>
          <button type="submit" class="ord-desk" id="submit">Забронировать место </button>
          <img src="loader.gif" id="loader" alt="">
          <div id="result"></div>
        </form>
       </div>
    </div>

</div>

<div class="Menu">
	<p id="menu-title"><strong>Наше меню</strong></p>

	<div class="wrapper">
		<div class="slider">
			<div class="slider__item">
				<img src="/img/m1.png" class="img-slider">
			</div>

			<div class="slider__item">
				<img src="/img/m2.png" class="img-slider">
			</div>

			<div class="slider__item">
				<img src="/img/m3.png" class="img-slider">
			</div>

			<div class="slider__item">
				<img src="/img/m4.png" class="img-slider">
			</div>

			<div class="slider__item">
				<img src="/img/m5.png" class="img-slider">
			</div>

			<div class="slider__item">
				<img src="/img/m6.png" class="img-slider">
			</div>

			<div class="slider__item">
				<img src="/img/m7.png">
			</div>

			<div class="slider__item">
				<img src="/img/m8.png">
			</div>

			<div class="slider__item">
				<img src="/img/m9.png">
			</div>
		</div>
		
	</div>
 

</div>

<div class="MenuLoad">
	<button type="submit" class="Loadbtn">
		<i class="fa fa-download fa-2x" aria-hidden="true"></i>&nbsp;&nbsp;
		<a href="/Menu-bluds.pdf" download>Скачать блюда</a>
	</button>
</div>

<div class="Reviews">
    <p id="reviews-title"><strong>Преимущества</strong></p>
    
    <div class="review_img">
    	<div class="parking">
		  <img src="/img/parking.png">
		</div>

		<div class="service">
		   <img src="/img/room-service.png">
		</div>

		<div class="sale">
		   <img src="/img/sale.png">
		</div>

		<div class="place">
		    <img src="/img/place.png">
		</div>
	</div>
   

    <div class="review_title">
       <div id="parking">
	      <p>Бесплатная парковка</p>
	   </div>

	   <div id="room-service">
	      <p>Высокое<br>качество сервиса</p>
	   </div>

	   <div id="sale">
	      <p>Скидки на 20%<br>с 10ч до 16ч</p>
	   </div>

	   <div id="place">
	      <p>Удобное<br>месторасположение</p>
	   </div>
	</div>

</div>

<div class="reservation">
	<p id="reserv-title"><strong>Забронируте столик</strong></p>
    
    <div class="resrv-desk">
        <form class="reservation-form" id="reservation-form_1" action="send.php" method="POST">
           	 <p style="color:#FFF; font-size: 20px;">Оформить заявку</p>
          <input type="text" id="name" placeholder="Имя" required>
          <input name="tel" type="tel" id="phone" placeholder="Телефон" required>
          <input type="email" id="email" placeholder="E-mail" required>
          <button type="submit" class="res-desk" id="submit">Забронировать место </button>
          <img src="loader.gif" id="loader" alt="">
          <div id="result"></div>
        </form>
    </div>	
</div>

<div class="Team">

    <p id="Team-title"><strong>Наши высококвалифицированные повара</strong></p>

    <div class="team-man">
     
       <div id="TeamMan-1">
	      <img src="/img/t1.jpg" style="border-radius: 50%; height: 180px; width: 180px;">
	   </div>

	   <div id="TeamMan-2">
	      <img src="/img/t2.jpg" style="border-radius: 50%; height: 180px; width: 180px;">
	   </div>
	
  
	   <div id="TeamMan-3">
	      <img src="/img/t3.jpg" style="border-radius: 50%; height: 180px; width: 180px;">
	   </div>

	   <div id="TeamMan-4">
	      <img src="/img/t4.jpg" style="border-radius: 50%; height: 180px; width: 180px;">
	   </div>
	  
	</div>

	<div class="Tm-name">
	 
		<div id="Tm1-name"><p>Ethel Davis</p></div>

		<div id="Tm2-name"><p>Rodney Cooper</p></div>
      
     
		<div id="Tm3-name"><p>Dora Walker</p></div>

		<div id="Tm4-name"><p>Lena Keller</p></div>
	 
	</div>
</div>

<div class="contacts">
     <p id="contacts-title"><strong>Наши контакты</strong></p>

	  <div class="contacts-map" style="overflow:hidden;width:100%;position: relative;"><iframe width="100%" height="480" src="https://maps.google.com/maps?width=100%&amp;height=480&amp;hl=en&amp;q=Moscow%2C%20Russia+(%20Bellyful)&amp;ie=UTF8&amp;t=&amp;z=16&amp;iwloc=B&amp;output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><div style="position: absolute;width: 80%;bottom: 10px;left: 0;right: 0;margin-left: auto;margin-right: auto;color: #000;text-align: center;"><small style="line-height: 1.8;font-size: 2px;background: #fff;">Powered by <a href="https://embedgooglemaps.com/en/">https://embedgooglemaps.com/en/</a> & <a href="https://iamsterdamcard.it">iamsterdamcard</a></small></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style>
	</div><br />
</div>


<footer class="footer">
		
				<div class="time-place">
					<h4 class="text-TimePlace">Время и место</h4>
					<div class="Tm-pl">
					   <p><i class="fa fa-clock-o fa-2x" aria-hidden="true"></i>&nbsp;&nbsp;Работаем с 9 до 2ч ночи</p>
					   <p><i class="fa fa-map-marker fa-2x" aria-hidden="true"></i>&nbsp;&nbsp;Адрес</p>
					</div>
				</div>
		
				<div class="footer-contacts">
					<h4 class="text-Contats">Контакты</h4>
					<div class="FCon">
					   <p><i class="fa fa-phone fa-2x" aria-hidden="true"></i>&nbsp;&nbsp;012-6532-568-9746</p>
					   <p><i class="fa fa-envelope-o fa-2x" aria-hidden="true"></i>&nbsp;&nbsp;Bellyful@gmail.com</p>
					</div>
								
				</div>
							
						
		<div class="Soc-networks">
			<h4 class="text-SocNetworks">Соц-сети</h4>
			<div class="SocNet">
			 <a href="https://vk.com/"><i class="fa fa-vk fa-2x" aria-hidden="true"></i></a>
		     <a href="https://www.facebook.com/"><i class="fa fa-facebook-official fa-2x" aria-hidden="true"></i></a>
		     <a href="https://twitter.com/explore"><i class="fa fa-twitter-square fa-2x" aria-hidden="true"></i></a>		
		     </div>		
		</div>
</footer>	


<script src="https://code.jquery.com/jquery-3.4.1.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript" src="/js/slick.min.js"></script>
<script src="/js/script.js"></script>
<script src="https://use.fontawesome.com/e2515952ee.js"></script>
</body>
</html>

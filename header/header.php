<?php
echo
'<header role="header">
  <div class="navbar fixed-top navbar-dark bg-dark shadow-sm">
    <div class="container d-flex justify-content-between">
      <a href="/index.php">
        <img src="/img/Logo.png">
      </a>
      <div>
        <span style="font-size:30px;color:#CBB885; cursor:pointer" onclick="openNav()">☰ </span>
        <a href="#"><i class="fa fa-shopping-cart fa-2x" aria-hidden="true" style="color:#f7e1aa;"></i></a>
    </div>
  </div>
   
</header>

<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
  
    <nav id="sidebar">
      <div class="container text-center">
        <img src="/img/Logo.png">
      </div>

  <hr>
      
   <ul class="list-unstyled components">
   	   <li><a href="./contacts/contacts.php">Контакты</a></li>
   	   <li><a href="./stocks/stocks.php">Акции</a></li>
   	   <li><a href="./Deliv_Pay/DelivPay.php">Доставка и оплата</a></li>
   	   <li><a href="./combo/combo.php">Комбо наборы</a></li>
        <li>
          <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Каталог</a>
          <ul class="collapse list-unstyled" id="homeSubmenu">
          	<a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Черный чай</a>
               <ul class="collapse list-unstyled" id="pageSubmenu">
                  <li>
                    <a href="./catalog/BlackTeaAdd.php">С добавками</a>
                  </li> 

                  <li>
                    <a href="./catalog/BlackTea.php">Без добавок</a>
                  </li>
               </ul> 
              <li><a href="./catalog/GreenTea.php">Зеленый чай</a></li>
            <li><a href="./catalog/HerbalTea.php">Травяной чай</a></li>
            <li><a href="./catalog/FruitTea.php">Фруктовый чай</a></li>
            <li><a href="./catalog/ThemedTea.php">Тематический чай</a></li>
            <li><a href="./catalog/Puer.php">Пуэр</a></li>
            <li><a href="./catalog/ExoticTea.php">Экзотический</a></li>
            <li><a href="./catalog/Coffee.php">Кофе</a></li>
          </ul> 
        </li>
      </ul>
      <hr>
      <ul class="list-inline mx-2">
           <li class="list-inline-item">
              <a href="https://vk.com/" class="btn-floating btn-fb">
                 <i class="fa fa-vk fa-2x" style="color:#F6E0AA;"></i>
              </a>
            </li>
            <li class="list-inline-item">
               <a href="https://www.instagram.com/" class="btn-floating btn-tw">
                  <i class="fa fa-instagram fa-2x" style="color:#F6E0AA;"></i>
               </a>
            </li>
        </ul>
      <div>
    </nav>';
?>
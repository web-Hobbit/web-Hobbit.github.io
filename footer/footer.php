<?php
echo '<footer class="page-footer font-small stylish-color-dark pt-4">

  <!-- Footer Links -->
  <div class="container text-center text-md-left">
    <div class="row">

      <!-- Grid column -->
      <div class="col-md-4 col-xl-3 mx-auto">

        <!-- Content -->
        <a href="/index.php" class="mt-3 mb-4"><img src="/img/Logo.png"></a>
        <ul class="list-inline mx-5">
           <li class="list-inline-item mt-2">
           	  <a href="https://vk.com/" class="btn-floating btn-fb"><i class="fa fa-vk fa-2x"></i></a>
            </li>
            <li class="list-inline-item">
               <a href="https://www.instagram.com/" class="btn-floating btn-tw">
                  <i class="fa fa-instagram fa-2x"></i>
               </a>
            </li>
        </ul>
         <p id="oferta">Политика конфиденциальности<br>публичная оферта</p>
      </div>
  
      <div class="col-md-2 col-xl-3 mx-auto">
       <div class="foot-conatcs">
        <ul class="list-inline">
          <li>
            <a href="./contacts/contacts.php">Контакты</a>
          </li>
          <li>
            <a href="./stocks/stocks.php">Акции</a>
          </li>
          <li>
            <a href="./Deliv_Pay/DelivPay.php">Доставка и оплата</a>
          </li>
          <li>
            <a href="./combo/combo.php">Комбо наборы</a>
          </li>
        </ul>
        </div>

      </div>
      <!-- Grid column -->


      <!-- Grid column -->
      <div class="col-md-2 col-xl-3 mx-auto">
        <ul class="list-inline">
          <li>
            <a href="./catalog/BlackTea.php">Черный чай</a>
          </li>
          <li>
            <a href="./catalog/GreenTea.php">Зеленый чай</a>
          </li>
          <li>
            <a href="./catalog/Coffee.php">Кофе</a>
          </li>
          <li>
            <a href="./catalog/Puer.php">Пуэр</a>
          </li>
          <li>
            <a href="./catalog/FruitTea.php">Фруктовый чай</a>
          </li>
        </ul>

      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-2 col-xl-3 mx-auto" id="FormBlock">
        <form class="BackCall" id="BackCall_form" name="form">
          <input type="text" name="name" class="UserName" placeholder="Имя" required>
          <input type="text" name="phone" class="UserPhone" placeholder="Телефон" required>
          <button type="submit" class="BackCall-btn">Заказать звонок</button>
        </form>
      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row -->

  </div>
  <!-- Footer Links -->

</footer>';
?>
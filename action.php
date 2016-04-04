<!DOCTYPE html>
<html>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<head><title>Открытый бланк </title>
 <meta name="keywords" content="Быстрая юридическая помощь">
    <meta name="description" content="Открытый бланк юридическая помощь">
    <meta name="author" content="Plutus.inc">


  <link rel="stylesheet" type="text/css" href="./css/reset.css" />
    <link rel="stylesheet" type="text/css" href="./css/style.css" />
    <link href="css/no-theme/jquery-ui-1.10.1.custom.css" rel="stylesheet">
	
	<script type="text/javascript" src="./js/jquery-1.8.3.js"></script>
    <script type="text/javascript" src="./js/jquery-ui-1.10.1.custom.min.js"></script>
    <script type="text/javascript" src="./js/jquery.placeholder.min.js"></script>
    <script type="text/javascript" src="./js/jquery.jcarousel.min.js"></script>
    <script type="text/javascript" src="./js/script.js"></script>
    <link rel="icon" type="image/vnd.microsoft.icon" href="favicon.ico">
    <link rel="shortcut icon" href="favicon.ico">

</head>
<body>
<div id="wrap">

<div id="header">
<div class="header">

<a href="http://открытый-бланк.рф/" class="logo"><img src="./img/logo.png" alt="" align = "left">

</a>

   <div class="text">
            <p>Экономим ваши деньги!</p>
</div>       
</div>
</div>

<div class="order_form2">
<form action="/get.php" method="POST" >
<p>


<?php

?>

<br>
<b>Укажите ваши данные</b>
</p>
<br>
 <label>От:</label>
<input class="right-input"  type="text" name="name" pattern="^[А-Яа-яЁё\s]+$" required  size="30"  placeholder="Иванова Петра Ивановича"  value=""/>
<br>


<label>Город:</label>
<input class="right-input"  type="text" name="city"  required  size="20"  value="Улан-Удэ" placeholder="Улан-Удэ"/>
<br>



<label>Район:</label>
<select class="right-input"  name="area" required>
<option value="Советский">Советский</option>
<option value="Октябрьский">Октябрьский</option>
<option value="Железнодорожный">Железнодорожный</option>
</select>
<br>



<label>Улица:</label>
<input class="right-input" type="text" name="street"  required  size="20"  placeholder="Московская" value=""/>

<br>

<label>Дом квартира:</label>
<input class="right-input"  type="text" name="house"  required  size="20"  placeholder="Дом кв" value=""/>
<br>


<p>
<br>
<label>Ваше заявление:</label>
</p>


<input class="left-input"  type="submit" value="На Русском" >

<input class="right-input"  type="submit" value="На Бурятском" >
</p>
</form>

</div>



   
         
                

     <div id="footer">
        <div class="footer">
         
          <div class="info">
            <div class="tel">
            <span>+7 950-1190-222</span>
            <br>
            <span>+7 902-4567-234</span>
            </div>
            <div class="adr">Республика Бурятия г.Улан-Удэ ул.Ленина д.54</div>
        
          </div>
          Email: Plutus@Plutus.INC
          <p>© 2016.</p>
        </div>
      </div>









</body>
</html>

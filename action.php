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
<b>
<i>
<?php
echo htmlspecialchars($_POST['answer']);
ini_set('display_errors',1);
error_reporting(E_ALL);
?>
</i>
</b>
<br>
<b>Укажите ваши данные</b>
</p>

 <label>От:</label>
<input type="text" name="name" pattern="^[А-Яа-яЁё\s]+$" required  size="30"  placeholder="Иванова Петра Ивановича"  value=""/>
<br>


<label>Город:</label>
<input type="text" name="city"  required  size="20"  value="Улан-Удэ" placeholder="Улан-Удэ"/>
<br>



<label>Район:</label>
<select name="area" required>
<option value="Советский">Советский</option>
<option value="Октябрьский">Октябрьский</option>
<option value="Железнодорожный">Железнодорожный</option>
</select>
<br>



<label>Улица:</label>
<input type="text" name="street"  required  size="20"  placeholder="Московская" value=""/>

<br>

<label>Дом квартира:</label>
<input type="text" name="house"  required  size="20"  placeholder="Дом кв" value=""/>
<br>

<p>
<input type="submit" value="Ваше Заявление">
</p>
</form>

</div>



   
         
                

     <div id="footer">
        <div class="footer">
         
          <div class="info">
            <div class="tel">+7 914 <span>055-88-23</span></div>
            <div class="adr">Республика Бурятия г.Улан-Удэ ул.Ленина д.54</div>
        
          </div>
          Email: Plutus@Plutus.INC
          <p>© 2016.</p>
        </div>
      </div>









</body>
</html>

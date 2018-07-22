<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale = 1.0, 
maximum-scale=1.0, user-scalable=no" /> 
<meta charset="UTF-8">
<title>Insert title here</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style type="text/css">

* {
margin: 0;
padding: 0;
box-sizing: border-box;
}

nav  {
width: 100%;
background-color: #111a30;
}

nav ul li {
background-color: #111a30;
display: inline; 
position: relative;
font-size: 16px;
text-align: center;
line-height: 74px;
float:left;
width:25%;
}

nav ul li a {
text-decoration: none;
text-transform: capitalize;
color: #fff;
font-weight: bold;
}

nav ul li:hover a {
display:inline-block;
color: #fff;
}

nav ul li:hover {
color: #d3d9e2;
}

.container {
max-width: 100% !important;
}

.hide {
display: none;
}

h1 {
font-size: 2em;
color: #e74c3c;  
}

.row h1 {
margin-top: 0;
margin-bottom: .5em;
font-weight: normal;
text-align:center;
}

.row:hover {
box-shadow: 3px 3px 8px hsl(0, 0%, 70%);
}

#paste .row {
padding:20px;
width:350px;
height:500px;
margin-top:30px;
float:left;
margin-left:150px;
}

.row p:nth-child(3) {
font-style: italic;
color: #71706c;
font-size: 0.875em;
font-weight: normal;
line-height: 1.6;
text-align:center;
}

.row p:nth-child(4){
text-align:center;
margin-top:20px;
}

.row p:nth-child(5){
font-size: 1.25em;
font-weight: 700;
color: #020000;
text-align:center;
margin-top:30px;
}

#pages {
position:relative;
top: 100px;
left:300px;
width: 1350px;
height:2000px;
}

#paste ul li{
display: inline-block;
width: 30%;
}

#paste .row img {
width: 70%;
display:block;
margin:auto;
}

#pizza .row img {
width: 70%;
display:block;
margin:auto;
}

#pizza ul li{
display: inline-block;
width: 30%;
}

#pizza .row {
padding:20px;
width:350px;
height:500px;
margin-top:30px;
margin-left:150px;
}

#salata .row img {
width: 70%;
display:block;
float:left;
}

#salata ul li{
display: inline-block;
}

#salata .row {
padding:20px;
width:1200px;
height:400px;
margin-top:30px;
margin-left:150px;
}

#salata .content {
position: relative;
top: 50%;
transform: translateY(-50%);
left:10px;
}

.content p:nth-child(2) {
font-style: italic;
color: #71706c;
font-size: 0.875em;
font-weight: normal;
line-height: 1.6;
text-align:center;
}

.content p:nth-child(3){
text-align:center;
margin-top:20px;
}

.content p:nth-child(4){
font-size: 1.25em;
font-weight: 700;
color: #020000;
text-align:center;
margin-top:30px;
}

#desert .row img {
width: 80%;
display:block;
margin:auto;
}

#desert .row {
padding:20px;
width:400px;
height:450px;
margin-top:30px;
margin-left:230px;
}

#desert ul li{
display: inline-block;
width:40%;
}

#menu {
position: absolute;
left:70px;
top:150px;
width:200px;
}

#menu li {
list-style: none;
background-color: #111a30;
border-top: solid 1px #fff;
text-align: center;
padding:20px;
}

#menu li a {
display: block;
text-decoration: none;
color: #fff;
}

.fundal {
background:#b4c2c6;
}
  
.sticky {
position:fixed; 
top:0;
z-index:10;
width:100%;
}
  
#footer {
height:300px;
background-color: #111a30;
margin-top:50px;
}

article {
top:30px;
position:relative;
margin:0 auto;
box-sizing: border-box;
font-family: 'Open Sans', sans-serif;
color: #fff;
flex: 0 1 18%;
transition: flex-basis 0.2s linear;
}

article h2 {
text-align: center;
font-size: 1.80em;
font-family:Apple Chancery,cursive;
}

article h3 {
text-align: center;
font-size: 1.40em;
}

article p {
text-align: center;
padding:10px;
}

#blocks {
display: flex;
flex-wrap: nowrap;
justify-content: center;
}
    
@media (max-width: 760px) {
.container {
max-width: 100% !important;
}
nav {
width:100%;
}
nav ul li{
line-height: 44px;
font-size: 12px;
width:25%;
}
#menu {
display: table;
position:relative;
left:0;
margin-right: auto;
margin-left: auto;
 top: 100px;
width:50%;
}
#pages {
display: table;
text-align: center;
margin-right: auto;
margin-left: auto;
width:350px;
left:0;
}
#paste ul li {
display: block;
position:relative;
}
#paste .row {
width:350px;
height:450px;
margin-left:0;
}
#pizza ul li {
display: block;
}
#pizza .row {
width:350px;
height:450px;
margin-left:0;
}
#salata ul li{
display: block;
}
#salata .row {
width:350px;
height:450px;
margin-left:0;
}
#salata .row img {
width: 100%;
display:block;
}
#desert .row {
width:350px;
height:350px;
margin-left:0;
}
#desert ul li{
display: block;
}
#footer {
height:390px;
position:relative;
top:150px;
}

}
@media (max-width:  992px) and (min-width: 761px)  {
.container {
max-width: 100% !important;
}
nav {
width:100%;
}
nav ul li{
line-height: 44px;
font-size: 12px;
width:25%;
}
#menu {
display: table;
position:relative;
left:0;
margin-right: auto;
margin-left: auto;
top: 100px;
width:50%;
}
#pages {
display: table;
text-align: center;
margin-right: auto;
margin-left: auto;
width: 800px;
left:0;
}
#paste ul li {
display: block;
}
#paste .row {
width:450px;
height:450px;
}
#pizza .row {
width:450px;
height:450px;
}
#pizza ul li{
display: block;
}

}
</style>
</head>
<body>
 <div class="container">
      <nav>
        <ul>
      	  <li><a href="oferte.php">Oferte</a></li>
      	  <li><a href="index.php">Acasa</a></li>
          <li><a href="despre.php">Despre</a></li>
          <li><a href="contact.php">Contact</a></li>
        </ul>
      </nav>

<ul id="menu" class="menu no-bullet" >
    <li><a id="paste-link" href="#"><h3> Paste </h3> </a></li>
    <li><a id="pizza-link"href="#"><h3> Pizza </h3> </a></li> 
    <li><a id="salata-link"href="#"><h3> Salata </h3> </a></li> 
    <li><a id="desert-link" href="#"><h3> Desert </h3> </a></li>
</ul>

<div id="pages">
    <div id="paste" class="page">
     <ul>
          <li>
        <div class="row">
        	<div class="fundal">
            <img alt="" src="paste/paste1.png" >
            </div>
                <h1> Penne Quattro Formaggi </h1>
                <p> penne, gorgonzola, parmezan, mozzarella, smantana </p>
                <p> 500 g </p>
                <p> 22.00 lei </p>
            </div>
     
            </li>
            
            <li>
              <div class="row">
           <div class="fundal">
            <img alt="" src="paste/paste2.png" >
            </div>
                <h1> Penne Carbonara </h1>
                <p> penne, bacon, ou, smantana </p>
                <p> 500 g </p>
                 <p> 22.00 lei </p>
            </div>
            </li>
            
            <li>
              <div class="row">
            <div class="fundal">
            <img alt="" src="paste/paste3.png" >
            </div>
                <h1> Penne Arabiatta </h1>
                <p> penne, sos rosii, bacon, pepperoncino, usturoi </p>
                <p> 500 g </p>
                 <p> 22.00 lei </p>
            </div>
            </li>
            
             <li>
              <div class="row">
            <div class="fundal">
            <img alt="" src="paste/paste4.png" >
            </div>
                <h1> Penne Tonno </h1>
                <p> penne, sos rosii, ton, usturoi </p>
                <p> 500 g </p>
                 <p> 22.00 lei </p>
            </div>
            </li>
            
             <li>
              <div class="row">
            <div class="fundal">
            <img alt="" src="paste/paste5.png" >
            </div>
                <h1> PENNE MILANEZE </h1>
                <p> penne, sos rosii, sunca praga, bacon, masline, usturoi </p>
                <p> 500 g </p>
                 <p> 22.00 lei </p>
            </div>
            </li>
            
             <li>
              <div class="row">
            <div class="fundal">
            <img alt="" src="paste/paste6.png" >
            </div>
                <h1> PENNE BOLOGNESSE </h1>
                <p> penne, carne vita, sos rosii </p>
                <p> 500 g </p>
                 <p> 22.00 lei </p>
            </div>
            </li>
            
             <li>
              <div class="row">
            <div class="fundal">
            <img alt="" src="paste/paste7.png" >
            </div>
                <h1> PENNE VEGETARIENE </h1>
                <p> penne, sos rosii, ciuperci, masline, ardei gras, ceapa, usturoi </p>
                <p> 500 g </p>
                 <p> 22.00 lei </p>
            </div>
            </li>
            
            <li>
              <div class="row">
            <div class="fundal">
            <img alt="" src="paste/paste8.png" >
            </div>
                <h1> FRUTTI DI MARE </h1>
                <p> penne, fructe de mare, usturoi, rosii, smantana, patrunjel, vin </p>
                <p> 500 g </p>
                 <p> 22.00 lei </p>
            </div>
            </li>
            
             <li>
              <div class="row">
            <div class="fundal">
            <img alt="" src="paste/paste9.png" >
            </div>
                <h1> LASAGNA </h1>
                <p> foi lasagna, smantana, carne vita, sos rosii, mozzarella </p>
                <p> 500 g </p>
                 <p> 22.00 lei </p>
            </div>
            </li>
            
       </ul>
    </div>
    
    
    
    <div id="pizza" class="page hide">
         <ul>
          <li>
        <div class="row">
        	<div class="fundal">
            <img alt="" src="pizza/pizza1.png" >
            </div>
                <h1> Pizza Ibiza </h1>
                <p> sos rosii, sunca praga, bacon, salam uscat, ciuperci, masline, rosii, ardei gras, mozzarella </p>
                <p> 600 g </p>
                <p> 19.50 lei </p>
            </div>
     
            </li>
            
             <li>
        <div class="row">
        	<div class="fundal">
            <img alt="" src="pizza/pizza2.png" >
            </div>
                <h1> Taraneasca </h1>
                <p> sos rosii, sunca praga, bacon, carnati, ciuperci, ardei iute, ardei gras, telemea, mozzarella </p>
                <p> 600 g </p>
                <p> 19.50 lei </p>
            </div>
     
            </li>
    
           
           <li>
        <div class="row">
        	<div class="fundal">
            <img alt="" src="pizza/pizza3.png" >
            </div>
                <h1> Carnivora </h1>
                <p> sos de rosii, sunca praga, bacon, salam uscat, carnati, ou, rosii, mozzarella </p>
                <p> 600 g </p>
                <p> 19.50 lei </p>
            </div>
     
            </li>
            
              
           <li>
        <div class="row">
        	<div class="fundal">
            <img alt="" src="pizza/pizza4.png" >
            </div>
                <h1> Patato </h1>
                <p> sos rosii, sunca praga, bacon, carnati, cartofi, ou, rosii, telemea, mozzarella </p>
                <p> 600 g </p>
                <p> 19.50 lei </p>
            </div>
     
            </li>
            
             <li>
        <div class="row">
        	<div class="fundal">
            <img alt="" src="pizza/pizza5.png" >
            </div>
                <h1> Kebab </h1>
                <p> sos rosii, piept de pui, cartofi, ou, rosii, mozzarella </p>
                <p> 600 g </p>
                <p> 19.50 lei </p>
            </div>
     
            </li>
            
             <li>
        <div class="row">
        	<div class="fundal">
            <img alt="" src="pizza/pizza6.png" >
            </div>
                <h1> Margherita </h1>
                <p> sos rosii, mozzarella </p>
                <p> 400 g </p>
                <p> 15.50 lei </p>
            </div>
     
            </li>
            
               
             <li>
        <div class="row">
        	<div class="fundal">
            <img alt="" src="pizza/pizza7.png" >
            </div>
                <h1> Funghi </h1>
                <p> sos rosii, ciuperci, mozzarella </p>
                <p> 500 g </p>
                <p> 16.50 lei </p>
            </div>
     
            </li>
            
             <li>
              <div class="row">
        	<div class="fundal">
            <img alt="" src="pizza/pizza8.png" >
            </div>
                <h1> Prosciuto </h1>
                <p> sos rosii, sunca praga, mozzarella </p>
                <p> 500 g </p>
                <p> 17 lei </p>
            </div>
     
            </li>
            
             <li>
              <div class="row">
        	<div class="fundal">
            <img alt="" src="pizza/pizza9.png" >
            </div>
                <h1> Prosciuto Crudo</h1>
                <p> sos rosii, prosciutto crudo, mozzarella, parmezan,  </p>
                <p> 500 g </p>
                <p> 20.50 lei </p>
            </div>
     
            </li>
           </ul>
            
    </div>
    
  <div id="salata" class="page hide">
       <ul>
          <li>
        <div class="row">
  
            <img alt="" src="salata/salate1.jpg" >
     		  <div class="content">
                <h1> Salata Ibiza </h1>
                <p> salata iceberg, rosii, castraveti, ardei gras, masline, sunca praga, mozzarella, ou, dressing, focaccia </p>
                <p> 650 g </p>
                <p> 21 lei </p>
              </div>
            </div>

            </li>
            
               <li>
        <div class="row">
  
            <img alt="" src="salata/salate2.jpg" >
     		  <div class="content">
                <h1> Salata Greceasca </h1>
                <p> rosii, castraveti, ardei gras, ceapa, masline, branza feta, oregano, focaccia </p>
                <p> 550 g </p>
                <p> 20 lei </p>
              </div>
            </div>

            </li>
            
             <li>
        <div class="row">
  
            <img alt="" src="salata/salate3.jpg" >
     		  <div class="content">
                <h1> Salata Mediterana </h1>
                <p> salata, ton, ou, castraveti, rosii, ceapa, porumb, lamaie, focaccia </p>
                <p> 550 g </p>
                <p> 20 lei </p>
              </div>
            </div>

            </li>
            
              <li>
        <div class="row">
  
            <img alt="" src="salata/salate4.jpg" >
     		  <div class="content">
                <h1> Salata Caesar's </h1>
                <p> salata iceberg, piept de pui, rosii, parmezan, sos Caesar, focaccia </p>
                <p> 550 g </p>
                <p> 21 lei </p>
              </div>
            </div>

            </li>
         </ul>
   </div>
    <div id="desert" class="page hide">
      <ul>
          <li>
        <div class="row">
  
            <img alt="" src="desert/desert1.png" >
     		  <div class="content">
                <h1> Focaccia cu nutella </h1>
                <p> focaccia, nutella </p>
                <p> 300 g </p>
                <p> 10 lei </p>
              </div>
            </div>

            </li>
            
              <li>
        <div class="row">
  
            <img alt="" src="desert/desert2.png" >
     		  <div class="content">
                <h1> Mini calzone cu nutella </h1>
                <p> focaccia, nutella </p>
                <p> 20 g </p>
                <p> 3 lei </p>
              </div>
            </div>

            </li>
            
             <li>
        <div class="row">
  
            <img alt="" src="desert/desert3.png" >
     		  <div class="content">
                <h1> Pan cake cocos </h1>
                <p> iaurt de cocos,banane, fructe de padure, topping fructe de padure </p>
                <p> 160 g </p>
                <p> 9 lei </p>
              </div>
            </div>

            </li>
            
               <li>
        <div class="row">
  
            <img alt="" src="desert/desert4.png" >
     		  <div class="content">
                <h1> Pan cake gem frisca </h1>
                <p> gem, frisca, topping fructe de padure </p>
                <p> 130 g </p>
                <p> 8 lei </p>
              </div>
            </div>

            </li>
            
             <li>
        <div class="row">
  
            <img alt="" src="desert/desert5.png" >
     		  <div class="content">
                <h1> Pan cake nutella, banane </h1>
                <p> nutella, banane, alune, topping ciocolata </p>
                <p> 140 g </p>
                <p> 8 lei </p>
              </div>
            </div>

            </li>
            
             <li>
        <div class="row">
  
            <img alt="" src="desert/desert6.png" >
     		  <div class="content">
                <h1> Pan cake nutella, frisca </h1>
                <p> nutella, frisca, topping ciocolata </p>
                <p> 150 g </p>
                <p> 8 lei </p>
              </div>
            </div>

            </li>
      </ul>
      </div>
</div>
</div>
  
  <footer id="footer">
  		<section id="blocks">
            <article>
                <h2>Comenzi <i class="fa fa-phone"></i></h2>
                <p> 0735786530 </p>
    			<p>	0726875367 </p>
    			<p>	0747564345 </p>
            </article>
            <article>
                <h2>Program de lucru <i class="fa fa-clock-o"></i></h2>
                <h3>Luni-Vineri</h3>
                <p>10:00 - 15:00</p>
                <p>17:00 - 24:00</p>
                <h3>Weekend</h3>
                <p>10:00 - 24:00</p>
            </article>
            <article>
                <h2>Adresa <i class="fa fa-map-marker"></i></h2>
                <p>Bulevardul Basarabia 67, Craiova, Dolj, Romania</p>
            </article>
        </section>
  </footer>
</body>
<script type="text/javascript">
$(document).ready(function() {
    $("#paste-link").on('click', function() {
        $("#pages .page:not('.hide')").stop().fadeOut('fast', function() {
            $(this).addClass('hide');
            $('#paste').fadeIn('slow').removeClass('hide');
        });
    });
    $("#pizza-link").on('click', function() {
        $("#pages .page:not('.hide')").stop().fadeOut('fast', function() {
            $(this).addClass('hide');
            $('#pizza').fadeIn('slow').removeClass('hide');
        });
    });
    $("#salata-link").on('click', function() {
        $("#pages .page:not('.hide')").stop().fadeOut('fast', function() {
            $(this).addClass('hide');
            $('#salata').fadeIn('slow').removeClass('hide');
        });
    });
    $("#desert-link").on('click', function() {
        $("#pages .page:not('.hide')").stop().fadeOut('fast', function() {
            $(this).addClass('hide');
            $('#desert').fadeIn('slow').removeClass('hide');
        });
    });
    
    
    
    var menu = document.querySelector('nav');
    var origTopCoordinateMenu = menu.offsetTop;


    function scroll () {
      if ($(window).scrollTop() >= origTopCoordinateMenu) {
        $('nav').addClass('sticky');

      } else {
        $('nav').removeClass('sticky');

      }  
      
      
    }

    document.onscroll = scroll;

    });


</script>
</html>
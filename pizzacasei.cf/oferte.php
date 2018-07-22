<!DOCTYPE html>
<html>
<head>
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
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

.container{
width: 100%;
margin-top: 0px;
overflow-x:hidden;
}

.fundal_pizza {
background:url(pizza.jpg) 60% 0 no-repeat fixed;
background-size: cover;
height: 600px;
padding: 0;
}

.fundal_pizza  img {
width: 100%;
display:block;
margin:auto;
}

.fundal_paste {
margin-top:30px;
background:url(paste.png) 10% 0 no-repeat fixed;
background-size: cover;
height: 600px;
padding: 0;
}

.fundal_paste  img {
width: 100%;

display:block;
margin:auto;
}

.fundal_salata {
margin-top:30px;
background:url(salata.jpg) 40% 0 no-repeat fixed;
background-size: cover;
height: 600px;
padding: 0;
}

.fundal_salata  img {
width: 100%;
display:block;
margin:auto;
}

.mesaj_pizza {
position: relative;
top: 20%;
left: 5%;
}

.mesaj_pizza .titlu {
font-size: 2.325em;
font-weight: bold;
color: #282828;
max-width: 200px;
line-height: 0.9;
margin-bottom: 0.5em;
}

.mesaj_pizza .comanda{
font-weight: 300;
font-size: 3em;
color: #adadad;
}

.mesaj_paste {
position: relative;
top: 20%;
left: 5%;

}
.mesaj_paste .titlu {
font-size: 2.325em;
font-weight: bold;
color: #ffffff;
max-width: 200px;
line-height: 0.9;
margin-bottom: 0.5em;
}
.mesaj_paste .comanda{
font-weight: 300;
font-size: 3em;
color: #adadad;
}

.mesaj_salata {
position: relative;
top: 20%;
left: 5%;

}
.mesaj_salata .titlu {
font-size: 2.325em;
font-weight: bold;
color: #282828;
max-width: 200px;
line-height: 0.9;
margin-bottom: 0.5em;
}

.mesaj_salata .comanda{
font-weight: 300;
font-size: 3em;
color: #adadad;
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

.sticky {
position:fixed; 
top:0;
z-index:10;
width:100%;
}

@media (max-width: 760px) {
.fundal_pizza {
width:100%;
height:400px;
}
.mesaj_pizza .comanda {
font-size: 1.7em;
}
.mesaj_pizza .titlu {
font-size: 1.2em;
}
.fundal_paste {
width:100%;
height:400px;
}
.mesaj_paste .comanda {
font-size: 1.7em;
}
.mesaj_paste .titlu {
font-size: 1.2em;
}
.fundal_salata {
width:100%;
height:400px;
}
.mesaj_salata .comanda {
font-size: 1.7em;
}
.mesaj_salata .titlu {
font-size: 1.2em;
}
nav {
width:100%;
}
nav ul li{
  line-height: 44px;
font-size: 12px;
width:25%;
}
article h2 {
  font-size: 1.40em;
}
article h3 {
  font-size: 0.8em;
}
#footer {
  height:390px;
position:relative;
top:150px;
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


<div class="fundal_pizza">
          <div class="mesaj_pizza">
            <h4 class="comanda">COMANDĂ ACUM</h4>
            <h3 class="titlu">5 PIZZA ȘI PRIMEȘTI 1 DIN PARTEA CASEI</h3>
          </div>
          
 </div>
 <div class="fundal_paste">
            <div class="mesaj_paste">
            <h4 class="comanda">COMANDĂ ACUM</h4>
            <h3 class="titlu">3 PORȚII DE PASTE ȘI PRIMEȘTI O DOZĂ 0,33L Coca-Cola/Fanta/Sprite</h3>
          </div>
  </div>
  <div class="fundal_salata">
          <div class="mesaj_salata">
            <h4 class="comanda">COMANDĂ ACUM</h4>
            <h3 class="titlu">4 PORȚII DE SALATE ȘI PRIMEȘTI O DOZĂ 0,50L Bergenbier sau Becks</h3>
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
var menu = document.querySelector('nav');
var origTopCoordinateMenu = menu.offsetTop;


function scroll () {
  if ($(window).scrollTop() >=origTopCoordinateMenu) {
    $('nav').addClass('sticky');

  } else {
    $('nav').removeClass('sticky');

  }   
  
}
</script>
</html>
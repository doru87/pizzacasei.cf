<!DOCTYPE html>
<html>
<head>
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta charset="UTF-8">
<title>Insert title here</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script type="text/javascript" script-name="arizonia" src="http://use.edgefonts.net/arizonia.js"></script>
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

.pages {
width: 1000px;
height:1000px;
position: relative;
top: 100px;
margin: 0 auto;
}

.despre_noi {
width: 800px; 
background: #fff;
margin-bottom: 100px;
margin: 0 auto;
}

#descriere {
padding:30px;
margin:0 auto;
top: 50px;
position: relative;
line-height: 1.4;
font-size: 23px;
text-align: justify;
}

#descriere h2 {
padding:4px 12px;
height:45px;
margin-bottom:45px;
display:inline-block;
}

#despre {
display: table;
margin: 0 auto;
}

#despre {
animation: slide-bottom 1s linear;
}

#descriere p {
animation: slide-right 1s linear;
}

@keyframes slide-bottom {
  0% {
            transform: translateY(-150px);
  }
   33% {
            transform: translateY(-100px);
  }
   66% {
            transform: translateY(-50px);
  }
  100% {
            transform: translateY(0px);
  }
}

@keyframes slide-right {
  0% {
            transform: translateX(-500px);
  }
   33% {
            transform: translateX(-300px);
  }
   66% {
            transform: translateX(-150px);
  }
  100% {
            transform: translateX(0px);
  }
}

.logo {
border: none;
font: normal 59px "arizonia", Helvetica, sans-serif;
color: #21567a;
text-align: center;
text-shadow: 1px 1px 2px rgba(0,0,0,0.5) ;
margin:0 auto;
width: 315px;
top: 50px;
position: relative;
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

@media only screen and (max-width: 760px){

nav {
width:100%;
}
nav ul li{
line-height: 44px;
font-size: 12px;
width:25%;
}
.pages{
display: table;
margin-right: auto;
margin-left: auto;
width: 340px;;
}
.despre_noi {
width:100%;
}
#descriere {
line-height: 1.4;
font-size: 18px;
text-align: justify;
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
      <div class="pages">
      <div class="despre_noi">
      <div class="logo">Pizza Casei</div>
      	<div id ="descriere">
      	  <div id="despre">
      		<h2>Despre Noi</h2>
          </div>
      		Ne bazam pe o echipa de oameni pasionati care reusesc sa transforme un blat delicios subtire si usor crocant cu ingrediente atent selectionate, asezate si proportionate, intr-o pizza autentica astfel incat sa formeze o simfonie a gustului apropiat de perfectiune.

			Pizza Casei livreaza la domiciliu cea mai gustoasa pizza pregatita dupa retete traditionale italienesti, respectand cu strictete cantitatile si calitatea ingredientelor folosite.

			Blatul realizat din aluat fin, copt  in tava este mereu la fel de subtire, crocant si completeaza perfect savoarea ingredientelor.

			Toate produsele noastre pentru livrarile la domiciliu sunt pregatite din momentul lansarii comenzii, ingredientele de baza, blatul copt in tava si sosul fiind preparate in aceeasi zi.

			Ne straduim ca toate comenzile, sa ajunga la dumneavoastra in cel mai scurt timp posibil.
        </div>
      </div>
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
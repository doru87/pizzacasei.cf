<?php
include("db.php");
session_start();
?>

<!DOCTYPE html>
<html>
<head>
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta charset="UTF-8">
<title>Insert title here</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style type="text/css">

* {
margin: 0;
padding: 0;
box-sizing: border-box;
}

nav {
width: 100%;
background-color: #111a30;
}

.container {
max-width: 100% !important;
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

.contact {
width: 610px;
height:760px;
position:relative;
top:150px;
background-color: #fff;
border: 2px solid #7D8182;
margin: 0 auto;
}

.header {
background: url(pizza_contact.jpg);
color: #fff;
padding: 1.5em 2.5em;
background-size: cover;
background-position: center;
background-repeat: no-repeat;
}

h1 {
font-family: 'Lato', sans-serif;
font-weight: 300;
display: inline-block;
font-weight: 100;
font-size: 2.8125em;
border-bottom: 1px solid rgba(255, 255, 255, 0.3);
margin: 0 0 0.1em 0;
padding: 10px;
background-color:#4c5d77;
}

h3 {
font-family: 'Lato', sans-serif;
font-weight: 400;
font-size: 1.25em;
margin: 1em 0 0.4em 0;
}

.pages{
width: 1000px;
height: 1000px;
top: 50px;
margin: 0 auto;
}

form ul {
list-style: none;
}

form ul li {
margin: 0 0 0.25em 0;
display: inline-block;
width: 100%;
}

.first_name {
margin-left:30px;
position:relative;
top:70px;
float: left;
}

.last_name {
margin-right:30px;
position:relative;
top: 30px;
float: right;
}

.email {
margin-left:30px;
position:relative;
top:80px;
float: left;
}

.telephone {
margin-left:30px;
position:relative;
top:125px;
}

form input {
padding: 8px 12px;
border: 1px solid #7D8182;
}

form textarea {
border: 1px solid #7D8182;
}

.message {
margin-left:30px;
position:relative;
top:160px;
}

.message label {
display:block;
}

.submit {
margin: 20px 30px;
position:relative;
top:170px;
}

.informatii {
position: relative;
top: -50px;
border: 2px solid #7D8182;
width: 300px;
height: 340px;
margin: 0 auto;
}

.informatii h2 {
background-color: #4c5d77;
color:#fff;
padding:20px;
text-align:center;
}

.continut {
padding:10px;
}

.telefoane ul li {
list-style:none;
font-size: 1.25em;
font-weight: 300;
color: #575d66;
}

.informatii p {
color: #575d66;
margin-top:20px;
}

#footer {
height:450px;
background-color: #111a30;
}

article {
top:30px;
position:relative;
margin:0 auto;
box-sizing: border-box;
font-family: 'Open Sans', sans-serif;
color: #fff;
flex: 0 1 18%;
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

nav {
width:100%;
}
nav ul li{
line-height: 44px;
font-size: 12px;
width:25%;
}
.pages {
display: table;
margin-right: auto;
margin-left: auto;
width: 360px;
height:600px;
top: -50px;
}
.contact {
width: 80%;
height:530px;
top:50px;
}
.first_name {
position:relative;
top:70px;
}
.last_name {
position: relative;
top: 100px;
}
.email {
position: relative;
top: 130px;
}
.telephone {
position: relative;
top: 160px;
}
.message {
position:relative;
top:190px;
}
.page{
display: table;
margin-right: auto;
margin-left: auto;
width: 300px;
height:400px;
}
form input {
padding:0;
width:60%;
}
.last_name label {
position:relative;
left:30px;
}
input[name=last_name]{
position:relative;
left:30px;
}
form textarea {
width: 230px; 
height: 80px
}
h1 {
font-size: 1em;
}
.informatii {
top:0;
width:80%;
}
.informatii h2 {
font-size: 1em;
}

}
</style>
</head>
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
<div class="contact">
      	  <div class="header">
    		<h1>CONTACTAȚI-NE</h1>
  		  </div>
  		  

    <form action="contact.php" method="POST">
      <ul>
        
        <li>
          <div class="first_name">
            <label for="first_name">Nume<span class="req">*</span></label>
            <input type="text" name="first_name" placeholder="Nume" />
          </div>
        </li>

         <li>
          <div class="last_name">
            <label for="last_name">Prenume<span class="req">*</span></label>
            <input type="text" name="last_name" placeholder="Prenume" />
           </div>
          </li>

           <li>
         <div class="email">
            <label for="email">E-mail<span class="req">*</span></label>
            <input type="text" name="email" placeholder="" />
          </div>
        </li>  
        
        <li>
        <div class="telephone">
            <label for="telephone">Telefon</label>
            <input type="text" name="telephone" placeholder="" />
          </div>
        </li>
        
         <li>
         <div class="message">
         	 <label for="message">Mesaj</label>
          	<textarea cols="62" rows="7" name="message"></textarea>
         </div> 	
        </li>
              
         <li>
         <div class="submit">
         	<input name="submit_button" type="submit" value="Trimite" />
         </div>
        </li>
        </ul>
      </form>

      
 </div>

 <?php 
 global $conexiune;
 if(isset($_POST["submit_button"])){
     
        $nume = $_POST["first_name"];
        $prenume = $_POST["last_name"];
        $email = $_POST["email"];
        $telefon = $_POST["telephone"];
        $mesaj = $_POST["message"];
        
        $query = "insert into contact_clienti(nume,prenume,email,telefon,mesaj) values ('$nume','$prenume','$email','$telefon','$mesaj')";
        $rezervare = mysqli_query($conexiune, $query);
        echo mysqli_error($conexiune);
 }?>
 </div>
       <div class="page">
       <div class="informatii">
       	     <h2>Informatii Contact</h2>
       	 <div class="continut">
       		<p>SC PIZZA CASEI SRL</p>
       		<p>CUI: 43798632 | Nr. Reg: J25/1005/2014</p>
       		<p>Strada Aries Nr 36</p>
          <div class="telefoane">
      	      <h3>Telefoane</h3>
       		<ul>
       		   <li>0735786530</li>
       		   <li>0726875367</li>
       		   <li>0747564345</li>
       		</ul>
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
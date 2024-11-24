<!-- <h1><?php echo $title;?></h1> -->
<!DOCTYPE html>
<html>
<head>
<style>
.francais {
  background-color: white;
  color: black;
  border: 2px solid #3f3f3f;
  border-radius: 25px;
  margin-top:0px;
  margin-left:-40px;
  width:200;
  height:200;
}
.francais:hover {
  background-color: #3f3f3f;
  color: white;
}
.arabe {
  background-color: white;
  color: black;
  border: 2px solid #3f3f3f;
  margin-top:0px;
  margin-left:40px;
  border-radius: 25px;
  width:200;
  height:200;
}
.arabe:hover {
  background-color: #3f3f3f;
  color: white;
}
.english {
  background-color: white;
  color: black;
  border: 2px solid #3f3f3f;
  margin-top:0px;
  margin-left:40px;
  border-radius: 25px;
  width:200;
  height:200;
}
.english:hover {
  background-color: #3f3f3f;
  color: white;
}
.maths {
  background-color: white;
  color: black;
  border: 2px solid #3f3f3f;
  margin-top:20px;
  margin-left:120px;
  border-radius: 25px;
  width:200;
  height:200;
}
.maths:hover {
  background-color: #3f3f3f;
  color: white;
}
.science {
  background-color: white;
  color: black;
  border: 2px solid #3f3f3f;
  margin-top:20px;
  margin-left:40px;
  border-radius: 25px;
  width:200;
  height:200;
}
.science:hover {
  background-color: #3f3f3f;
  color: white;
}
.logo{
  margin-top:-20px;
  margin-left:20px;
}
</style>
</head>
<body>
<a href="index.php?q=listfr">    
<button class="francais" type="button" > 
  <figure  >
    <br><br>
    <img src="french.png" height="200" width="200"/>
    <figcaption>
    
    <font size="+2">Francais</font>
</figcaption>
</figure></button></a>

<a href="index.php?q=listeng"> 
<button class="english" type="button" > 
  <figure>
    <br><br>
    <img src="english.png" height="200" width="200"/>
    <figcaption>   
    <font size="+2"><br>English</font>
</figcaption>
</figure></button></a>

<a href="index.php?q=listar">
<button class="arabe" type="button"> 
  <figure >
  <br>
    <img src="arabe.png" height="200" width="200"/>
    <figcaption>    
    <font size="+2">Arabe</font>
</figcaption>
</figure></button></a>

<a href="index.php?q=listm">
<button class="maths" type="button"> 
  <figure >
  <br>
    <img src="math.png" height="200" width="200"/>
    <figcaption>    
    <font size="+2">Mathématiques</font>
</figcaption>
</figure></button></a>

<a href="index.php?q=lists">
<button class="science" type="button"> 
  <figure >
  <br><br>
    <img src="science.png" height="200" width="200"/>
    <figcaption>    
    <font size="+2">Sciences</font>
</figcaption>
</figure></button></a>
     

</body>
</html>
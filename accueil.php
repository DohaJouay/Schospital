<!DOCTYPE html>
<html>
<head>
<style>
body{
  background:linear-gradient(#E2E9C0, #D7572B);
  background-attachment: fixed;
}

.elevee {
  background-color: white;
  color: black;
  border: 2px solid #3f3f3f;
  margin-top:100px;
  margin-left:200px;
}
.elevee:hover {
  background-color: #3f3f3f;
  color: white;
}
.prof {
  background-color: white;
  color: black;
  border: 2px solid #3f3f3f;
  margin-top:100px;
}
.prof:hover {
  background-color: #3f3f3f;
  color: white;
}
.admin {
  background-color: white;
  color: black;
  border: 2px solid #3f3f3f;
  margin-top:100px;
}
.admin:hover {
  background-color: #3f3f3f;
  color: white;
}
.logo{
  margin-top:20px;
  margin-left:20px;
}
</style>
</head>
<body>
  
    <div class="logo" >
      <img src="logo.png"> 
</div>

<a href="login.php">    
<button class="elevee" type="button" > 
  <figure  >
    <img src="student.png" height="200" width="200">
    <figcaption>
    
    <font size="+2">Espace eleve</font>
</figcaption>
</figure></button></a>

<a href="prof1/login.php"> 
<button class="prof" type="button" > 
  <figure>
    <img src="teacheer.png" height="200" width="200">
    <figcaption>   
    <font size="+2">Espace professeur</font>
</figcaption>
</figure></button></a>

<a href="admin/login.php">
<button class="admin" type="button"> 
  <figure >
    <img src="admin.png" height="200" width="200">
    <figcaption>    
    <font size="+2">Espace admin</font>
</figcaption>
</figure></button></a>

     

</body>
</html>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h1> जय शिवशंकर मिल्क प्रोसेसिंग चिलवडी </h1>
 <hr>
      <h2>INTERFACE</h2> 
 
    <section class="first">
    <div >

<div>
<a href="http://localhost/phplogin/userlogin.php">User login</a>




    <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="http://localhost/phplogin/index.php">Home</a>
          <br>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="http://localhost/phplogin/signupp.php">signup</a>
</nav>

</select>
</div>
<hr>
</section>






    <div id="form">
        <h3>Admin login</h3>
  
    <form name="form" action="login.php" onsubmit="retrun isvalid()" method="POST">
        <label for="">username</label>
        <input type="text" id="user" name="user" >   <br><br>

        <label for="">password</label>
        <input type="password" id="pass" name="pass" ><br>   <br>
        <input type="submit"  id="btn" value="Login" name="submit"/>
    </form>
    </div>

<script>

function=isvalid(
    {
        var user =document.form.value;
        var pass =document.form.value;
        if(user.lenght=="" && pass.lenght=="")
        alert("username and password field is emty")
    return false

    }
    else{
if(user.lenght=="")
alert("username is empty")
return false

    }

    else{
if(pass.lenght=="")
alert("password is empty")
return false

    }
)


    </script>


</body>
</html>
<html>


<head>
    <title>Learning Website</title>
    
    
    <body>
        
    
<link href="/css/registerstyle.css" rel="stylesheet">

<div id="header">
    
<img src="/img/logotopleft.png"id="logotopleft">
<ul>

<li>

<a id="home" href="{{ url('/') }}">Home</a>
<a id="blog" href="{{ url('readpost') }}">Blog</a>
<a id="login" href="{{ url('userlogin') }}">Login</a>
<a id="register" href="{{ url('userrregister') }}">Register</a>

</li>

</ul>

</div>
<hr id="line">



<div id="regform">
<form action="reguser" method="POST">
       @csrf
       <p id="text">Benutzername*</p>
        <input id="name" type="text" name="username"/>
        <span style="color: red">@error('username'){{$message}}@enderror</span>
        <br>
        <p id="textpw">Passwort*</p>
           <input id="name" type="password" name="password"/>
           <br>
           <span style="color: red">@error('password'){{$message}}@enderror</span>
           <br>
           <p id="textem">Email*</p>
           <input id="name" type="text" name="email"/>
           <br>
           <span style="color: red">@error('email'){{$message}}@enderror</span>
           <br>
           <button id="button" type="submit">Register</button>
        <br>
        <p>Dinge mit einem * müssen gegeben sein!</p>
        </form>
</div>


</body>

<footer>

<p>Website made by Lucas Gloede</p>
</footer>


       
    
    
   
      

        
        
        
            
    
    
    
    

    
    
    
</head>




</html>
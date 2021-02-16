<html>

<body>
<link href="/css/contactstyle.css" rel="stylesheet">

<div id="header">
    
<img src="/img/logotopleft.png"id="logotopleft">
<ul>

<li>

<a id="home" href="{{ url('/') }}">Home</a>
<a id="blog" href="{{ url('readpost') }}">Blog</a>
<a id="login" href="{{ url('userlogin') }}">Login</a>
<a id="register" href="{{ url('userrregister') }}">Register</a>
<a id="kontakt" href=" {{url('contact') }}">Contact</a>
 
</li>

</ul>

</div>
<hr id="line">

<div id="writeblock">
<form action="mail" method="POST">
    @csrf
    <p>ihr Name</p>
    <input id="name" type="text" name="name"/>
    <p>Ihre Email</p>
    <input id="from" type="text" name="from"/>
    <p>Ihr grund?</p>
    <input id="subject" type="text" name="subject"/>
    <p>Was wollen Sie uns sagen?</p>
    <input id="content" type="text" name="content"/>
    <button id="button" type="submit">Absenden</button>
</div>

</body>

<footer>

<p>Website made by Lucas Gloede</p>
</footer>

</html>
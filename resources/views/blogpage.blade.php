<html>

<body>
<link href="/css/blogstyle.css" rel="stylesheet">

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


<p id="postttile">Recent posts</p>
<hr id="line">
<div id="recentposts">
<p id="subject">{{$subject}}<p>
<hr id="line2">
<p id="content">{{$content}}</p>
<hr id="line2">
<p id="subject">{{$subject2}}<p>
<hr id="line2">
<p id="content">{{$content2}}</p>
<hr id="line2">
<p id="subject">{{$subject3}}<p>
<hr id="line2">
<p id="content">{{$content3}}</p>
<hr id="line2">
</div>


</body>

<footer>

<p>Website made by Lucas Gloede</p>
</footer>

</html>
<html>

<body>
<link href="/css/style.css" rel="stylesheet">

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
<div id="welcome">
<button id='slidegoright' onclick="goright();"></button>
<script type="text/javascript">

var i = 0;
function goright(){
    
    var getit = document.getElementById('welcome');

    if(i==0) {
        i++;
        getit.style.backgroundImage= "url('/img/desktopwelcome1.jpg')";
    } else if(i==1) {
        i++;
        getit.style.backgroundImage= "url('/img/desktopwelcome2.jpg')";
    } else if(i==2) {
        getit.style.backgroundImage= "url('/img/desktopwelcome.jpg')";
        i = 0;
    }
    
}</script>
</div>

<hr id="line">

<h1 id="sellfont">What is this page?</h1>


<div class="row">
  <div class="column">
      
  
  <p id="overtext">Showing the TenMediaGmbH my progress here</p>
  <hr id="line">
  <p id="undertext">Actully i i really dont know what i should write in here so im just filling gaps with this useless sentences which make absolutly not any sense i mean
      sure i could have used some standart text but well
  </p>


</div>
  <div class="column">
      
  
  <p id="overtext">Learning Laravel with this side</p>
  <hr id="line">
  <p id="undertext">Actully i i really dont know what i should write in here so im just filling gaps with this useless sentences which make absolutly not any sense i mean
      sure i could have used some standart text but well
  </p>


</div>
</div>

</body>

<footer>

<p>Website made by Lucas Gloede</p>
</footer>

</html>
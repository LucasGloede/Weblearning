<html>

<body>
<link href="/css/contactstyle.css" rel="stylesheet">

<div id="header">
    
<img src="/img/logotopleft.png"id="logotopleft">
<ul>

<li>

<a id="home" href="<?php echo e(url('/')); ?>">Home</a>
<a id="blog" href="<?php echo e(url('readpost')); ?>">Blog</a>
<a id="login" href="<?php echo e(url('userlogin')); ?>">Login</a>
<a id="register" href="<?php echo e(url('userrregister')); ?>">Register</a>
<a id="kontakt" href=" <?php echo e(url('contact')); ?>">Contact</a>
 
</li>

</ul>

</div>
<hr id="line">

<div id="writeblock">
<form action="mail" method="POST">
    <?php echo csrf_field(); ?>
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

</html><?php /**PATH C:\xampp\laravellearning\laravalearning\resources\views/contact.blade.php ENDPATH**/ ?>
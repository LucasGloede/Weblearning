<html>

<body>
<link href="/css/blogstyle.css" rel="stylesheet">

<div id="header">
    
<img src="/img/logotopleft.png"id="logotopleft">
<ul>

<li>

<a id="home" href="<?php echo e(url('/')); ?>">Home</a>
<a id="blog" href="<?php echo e(url('readpost')); ?>">Blog</a>
<a id="login" href="<?php echo e(url('userlogin')); ?>">Login</a>
<a id="register" href="<?php echo e(url('userrregister')); ?>">Register</a>

</li>

</ul>

</div>
<hr id="line">


<p id="postttile">Recent posts</p>
<hr id="line">
<div id="recentposts">
<p id="subject"><?php echo e($subject); ?><p>
<hr id="line2">
<p id="content"><?php echo e($content); ?></p>
<hr id="line2">
<p id="subject"><?php echo e($subject2); ?><p>
<hr id="line2">
<p id="content"><?php echo e($content2); ?></p>
<hr id="line2">
<p id="subject"><?php echo e($subject3); ?><p>
<hr id="line2">
<p id="content"><?php echo e($content3); ?></p>
<hr id="line2">
</div>


</body>

<footer>

<p>Website made by Lucas Gloede</p>
</footer>

</html><?php /**PATH C:\xampp\laravellearning\laravalearning\resources\views/blogpage.blade.php ENDPATH**/ ?>
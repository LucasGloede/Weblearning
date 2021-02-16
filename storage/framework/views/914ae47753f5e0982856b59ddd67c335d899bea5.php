<html>


<head>
    <title>Learning Website</title>
    
    
    <body>
        
    
<link href="/css/profilestyle.css" rel="stylesheet">

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



<div id="form">
    <h1>Profile Page</h1>

<p>Profilepicture:</p>
<img src="/img/<?php echo e(session('name')); ?>.png" id="propic">

<form action="uploadpic" method="POST" enctype="multipart/form-data">
<?php echo csrf_field(); ?>
<input name="file" type="file">
<button id="upload">Upload Picture</button>
</form>


<p>Username:</p>
<p><?php echo e(session('name')); ?></p>
<br>
<p>Rank:</p>
<p><?php echo e(session('rank')); ?></p>


</div>


</body>

<footer>

<p>Website made by Lucas Gloede</p>
</footer>


       
    
    
   
      

        
        
        
            
    
    
    
    

    
    
    
</head>




</html><?php /**PATH C:\xampp\laravellearning\laravalearning\resources\views/profile.blade.php ENDPATH**/ ?>
<html>


<head>
    <title>Learning Website</title>
    
    
    <body>
        
    
<link href="/css/loginstyle.css" rel="stylesheet">

<div id="header">
    
<img src="/img/logotopleft.png"id="logotopleft">
<ul>

<li>

<a id="home" href="<?php echo e(url('/')); ?>">Home</a>
<a id="blog" href="<?php echo e(url('readpost')); ?>">Blog</a>
<a id="login" href="<?php echo e(url('userlog')); ?>">Login</a>
<a id="register" href="<?php echo e(url('userreg')); ?>">Register</a>

</li>

</ul>

</div>
<hr id="line">



<div id="loginform">
<form action="logintheuser" method="POST">
       <?php echo csrf_field(); ?>
       <p id="text">Benutzername*</p>
        <input id="name" type="text" name="username"/>
        <span style="color: red"><?php $__errorArgs = ['username'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><?php echo e($message); ?><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>
        <br>
        <p id="textpw">Passwort*</p>
           <input id="name" type="password" name="password"/>
           <br>
           <span style="color: red"><?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><?php echo e($message); ?><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>
           <br>
           <button id="button" type="submit">Login</button>
        <br>
        <p>Dinge mit einem * müssen gegeben sein!</p>
        </form>
</div>


</body>

<footer>

<p>Website made by Lucas Gloede</p>
</footer>


       
    
    
   
      

        
        
        
            
    
    
    
    

    
    
    
</head>




</html><?php /**PATH C:\xampp\laravellearning\laravalearning\resources\views/login.blade.php ENDPATH**/ ?>
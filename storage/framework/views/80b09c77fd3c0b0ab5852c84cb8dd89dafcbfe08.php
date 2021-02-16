

<html>

<body>




<?php if(session('rank') == null): ?>
<?php echo e(header('location: index.blade.php')); ?>

<?php endif; ?>


<?php if(session('rank') == 'admin'): ?>
<form action="blogpost", method="POST">
<?php echo csrf_field(); ?>
<p>The id must be given</p>
<p>1,2,3 are the last posts</p>
<p>dont give the same id's</p>
<textarea name="id"></textarea>
<textarea name="title"></textarea>
<textarea name="content"></textarea>
<button type="submit">Login</button>
</form>

<table border="1">
<tr>
<td>Name</td>
<td>Email</td>
<td>Subject</td>
</tr>

<?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $allreg): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<tr>
<td><?php echo e($allreg['name']); ?></td>
<td><?php echo e($allreg['email']); ?></td>
<td><?php echo e($allreg['subject']); ?></td>
</tr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<br>
<br>
<form action="readmail" method="POST">
    <p>Mail lesen anhand des Benutzernamens</p>
    <?php echo csrf_field(); ?>
    <input id="name" type="text" name="name"/>
    <button id="button" type="submit">Suchen</button>
</form>
<br>
<form action="removemail" method="POST">
<?php echo csrf_field(); ?>
<input id="name" type="text" name="name"/>
<button id="button" type="submit">Löschen</button>
</form>




</table>
<?php endif; ?>
<br>
<br>











</body>

</html>
<?php /**PATH C:\xampp\laravellearning\laravalearning\resources\views/admin.blade.php ENDPATH**/ ?>


<html>

<body>




@if(session('rank') == null)
{{header('location: index.blade.php')}}
@endif


@if(session('rank') == 'admin')
<form action="blogpost", method="POST">
@csrf
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

@foreach($posts as $allreg)
<tr>
<td>{{$allreg['name']}}</td>
<td>{{$allreg['email']}}</td>
<td>{{$allreg['subject']}}</td>
</tr>
@endforeach
<br>
<br>
<form action="readmail" method="POST">
    <p>Mail lesen anhand des Benutzernamens</p>
    @csrf
    <input id="name" type="text" name="name"/>
    <button id="button" type="submit">Suchen</button>
</form>
<br>
<form action="removemail" method="POST">
@csrf
<input id="name" type="text" name="name"/>
<button id="button" type="submit">Löschen</button>
</form>




</table>
@endif
<br>
<br>











</body>

</html>

<html>
<head>
   
</head>
<style>
 
 
</style>
<body>
 
<h1> Laravel Many to Many Example </h1>
<h2> User 1 (John) is playing below Roles
 
@if ($usuario->acesso->count() > 0)
 
  <ul>
 
  @foreach($usuario->acesso as $records)
 
    <li>{{ $records->acesso_nome }}</li>
  @endforeach
 
  </ul>
 
@endif
 
<h2> Role 3 (Reader) is played by below Users
 
@if ($acesso->usuario->count() > 0)
 
  <ul>
 
  @foreach($acesso->usuario as $records)
 
    <li>{{ $records->usuario_nome }}</li>
    <li>{{ $records->usuario_nome }}</li>
 
 
  @endforeach
 
  </ul>
 
@endif
 
</body>
</html>
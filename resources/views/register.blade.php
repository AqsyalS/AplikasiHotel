<html>
<head>
 <title>Registrasi</title>
</head>
<body>

<div class="form">
<span class="welcome">Registrasi</span>
 <form action="/register" method="post">
     @csrf
  <input class="input" type="text" name="username" placeholder="Username"><br>
  <input class="input" type="email" name="email" placeholder="email"><br>
  <input class="input" type="password" name="password" placeholder="Password"><br>
  
  <input class="submit" type="submit" value="Daftar" name="simpan">
  <br><br>
  <a href="/login" class="submit1">Login</a>
<br><br>
<br><br><br>
<br><br>

 </form>
</div>

</body>
</html>

<html>
<head>
 <title>Login</title>
 <style>
  body {
    margin: 0;
    padding: 0;
    background: url(img/Hotel2.jpg);
    background-size: cover;
    background-position: center;
    font-family: sans-serif;
}
  .form {
    width: 400px;
    height: 420px;
    background: rgb(0, 0, 0, 0.5);
    color: #fff;
    top: 50%;
    left: 50%;
    position: absolute;
    transform: translate(-50%, -50%);
    box-sizing: border-box;
    padding: 70px 30px;
    }
  .avatar {
    width: 100px;
    height: 100px;
    border-radius: 50%;
    position: absolute;
    top: -50px;
    left: calc(50% - 50px);
}

  .input {
    padding: 1%;
    color: #000000;
    font-size: 14pt;
    float: left;
    width: 80%;
    margin-bottom: 1%;
    }
  .submit {
    width: 280px;
    outline: none;
    height: 40px;
    padding: 5px 2px;
    border: none;
    background-color:#000000;
    font-size: 20px;
    color: #fff;
}

  .login {
    color: 	#FFFFFF;
    font-size: 20pt;
    font-weight: 900;
    font-family: Centaur;
    }
.submit1{
  padding: 1%;
  color: #FFFFFF;
}

  </style>

</head>
<body>

<div class="form">
<span class="login">Login</span>
<img src="img/profil.jpg" class="avatar">
 <form action="/login" method="post">
     @csrf
  <input class="input" type="email" name="email" placeholder="email"><br>
  <input class="input" type="password" name="password" placeholder="Password"><br>
 
  <input class="submit" type="submit" value="Login" name="login">
 </form>

<a href="/register" class="submit1">Belum punya akun?</a>
</div>

</body>
</html>
{include file="header_login.tpl"}
  <body class="text-center">
    <form class="form-signin" action="enter"  method="post" >
  <h1 class="h3 mb-3 font-weight-normal">Ingresar</h1>
  <label for="email" class="sr-only">Email </label>
  <input type="email" id="email" name= "email" class="form-control" placeholder="Email " required autofocus>
  <label for="password" class="sr-only">Password</label>
  <input type="password" id="password"  name= "password" class="form-control" placeholder="Password" required>
 <button class="btn btn-secondary btn-block" type="submit">Acceder</button>
  <div class="checkbox mb-3">
    <a  href='check_in'>Registrarse</a> </div>
</form>
</body>
</html>

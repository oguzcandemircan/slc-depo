<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>SLC Anlık Sohbet Giriş</title>
    
    
    
    <link rel='stylesheet prefetch' href='http://netdna.bootstrapcdn.com/bootstrap/3.0.2/css/bootstrap.min.css'>

        <link rel="stylesheet" href="{{ URL::asset('assets/css/style.css') }}">

    
    
    {{ HTML::style('css/bootstrap.css') }}
    
  </head>

  <body>

      <div class="wrapper">
    <form class="form-signin">       
      <h2 class="form-signin-heading">Lütfen giriş yapın</h2>
      <input type="text" class="form-control" name="kullaniciAdi" placeholder="Email" required="" autofocus="" />
      <input type="password" class="form-control" name="password" placeholder="Sifre" required=""/>      
      <label class="checkbox">
        <input type="checkbox" value="beniHatırla" id="beniHatırla" name="rememberMe">Beni Hatırla
      </label>
      <button class="btn btn-lg btn-primary btn-block" type="submit" name="Gonder">Giriş</button>   
    </form>
  </div>
    
    
    
    
  </body>
</html>

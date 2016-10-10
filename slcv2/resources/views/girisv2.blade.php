<!DOCTYPE html>
<html>
<head>
	<title>GİRİŞ</title>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
</head>
<body>
<div class="container" style="margin-top:100px;">
<!--Hata -->
@if($errors->any())
<h4>{{$errors->first()}}</h4>
    @endif
<div class="row">
<div class="col-md-2">
<div class="form-group">

{{ Form::open(['route' => 'login','method'=>'GET']) }}



		<p> {{ Form::label('Email', 'Email : ',['class' => 'form-control']) }}
		 {{ Form::text('email',null, ['class' => 'form-control']) }}</p>

    <p>{{ Form::label('kullaniciSifresi', 'Kullanıcı Şifresi: ',['class' => 'form-control']) }}
    {{ Form::password('sifre',['class' => 'form-control']) }}</p>



    <p>{{ Form::submit('Giriş',['class' => 'btn btn-primary']) }}</p>


{{ Form::close() }}
</div>
</div>
</div>
</div>
</h1>
</body>
</html>

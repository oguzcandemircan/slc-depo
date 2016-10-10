<!DOCTYPE html>
<html>
<head>
	<title>GİRİŞ</title>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
</head>
<body>

<!--Hata -->
@if($errors->any())
<h4>{{$errors->first()}}</h4>
@endif
{{ Form::open(['route' => 'login','method'=>'GET']) }}



		<p> {{ Form::label('Email', 'Email : ' ) }}
		 {{ Form::text('email',) }}</p>
{{ Form::button('Hit Me', array('class' => 'btn')) }}

    <p>{{ Form::label('kullaniciSifresi', 'Kullanıcı Şifresi: ') }}
    {{ Form::password('sifre') }}</p>



    <p>{{ Form::submit('Giriş') }}</p>


{{ Form::close() }}


</h1>
</body>
</html>

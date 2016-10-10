<!DOCTYPE html>
<html>
<head>
	<title>Laravel deneme blade</title>
</head>
<body>



{{ Form::open(['route' => 'kayit','method'=>'GET']) }}


   <p> {{ Form::label('kullaniciAdi', 'Kullanıcı Adı: ' ) }}
    {{ Form::text('kullaniciAdi') }}</p>

		<p> {{ Form::label('Email', 'Email : ' ) }}
		 {{ Form::text('email') }}</p>


    <p>{{ Form::label('kullaniciSifresi', 'Kullanıcı Şifresi: ') }}
    {{ Form::password('sifre') }}</p>



    <p>{{ Form::submit('Yeni Kullanıcı') }}</p>


{{ Form::close() }}


</h1>
</body>
</html>

<!DOCTYPE html>
<html>
<head>
	<title>Laravel deneme blade</title>
</head>
<body>
<h3> Deneme blade view</h3>
<h1>


          @foreach($flights as $yazi)
                {{ $yazi->yazi_icerik }}
          @endforeach

	
</h1>
</body>
</html>
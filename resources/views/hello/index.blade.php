<html>
<head>
<title>Hello/Index</title>
<style>
body {
  font-size:16pt;
  color:#999;
}
h1{
  font-size:100pt;
  text-align:right;
  color:#222;
  margin:-40px 0px -50px 0px;
}
</style>
</head>
<body>
  <h1>Blade/Index</h1>
  @if ($msg != '')
  <p>こんにちは、{{$msg}}さん</p>
  @else
  <p>なんかかいてください</p>
  @endif
  <form method="POST" action="/mylala/public/hello">
    {{csrf_field()}}
    <input type="text" name="msg">
    <input type="submit">
  </form>
</body>
</html>

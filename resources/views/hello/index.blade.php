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
  <p>$#064;foreach directive example</p>
  <ol>
    @foreach(data as $item)
    <li>{{$item}}
    @endforeach
    </ol>
  <!-- <form method="POST" action="/mylala/public/hello">
    {{csrf_field()}}
    <input type="text" name="msg">
    <input type="submit">
  </form> -->
</body>
</html>

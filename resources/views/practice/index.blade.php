<html>
<head>
    <title>Hello/Index</title>
	<style>
	body {font-size:16pt; color:#999;}
	h1 {font-size:50pt; text-align:right; color:#f6f6f6;
	    margin:-20px 0px -30px 0px; letter-spacing:-4pt;}
	</style>
</head>
<body>
	<h1>演習問題6</h1>
    <p>{{$msg}}</p>
    <form method="POST" action="/practice">
        {{ csrf_field() }}
        Age
        <input type="text" name="a">
        Sex
        <select name="b" size="5" multiple>
        <option value="male">male</option>
        <option value="female">female</option>
        <input type="submit">
    </form>
</body>
</html>
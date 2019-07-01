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
	<h1>演習問10</h1>
    <p>

        @for($i=1; $i <= 31; $i++)
            {{$i}}&nbsp;
            @if($i % 7 ==0)
                <br/>
            @endif
        @endfor

    </p>
    <!-- <form method="POST" action="/practice">
        {{ csrf_field() }}
        <input type="text" name="a">
        <input type="text" name="b">
        <input type="submit">
    </form> -->
</body>
</html>
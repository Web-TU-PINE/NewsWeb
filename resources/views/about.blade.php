<html>
    <head>
        <meta charset="utf-8">
        <title>about me</title>
    </head>
    <body>
        <h1>เกี่ยวกับเรา</h1>
        <p>
          @foreach($nickname as $name)
            <li>{{$name }}</li>
          @endforeach

        </p>
    </body>

</html>

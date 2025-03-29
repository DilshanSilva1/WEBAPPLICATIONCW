<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Developer registry</title>
    @vite('resources/css/app.css')
</head>
<body>
    <h1>Welcome to Developer Registry</h1>
    <p>Click button below to view list of Developers</p>
    <a href="/developers" class="btn">Find Developers</a>
</body>
</html>
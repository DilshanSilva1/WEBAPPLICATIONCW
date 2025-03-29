<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Developer</title>
    
    @vite('resources/css/app.css')
</head>
<body>
    @if(session('success'))
        <div id="flash" class="p-4 text-center bg-green-50 text-green-500
        font-bold">{{session('success')}}</div>
    @endif
    <header>
        <nav>
            <h1>NIBM Developer Registry</h1>
          

            @guest
                <a href="{{route('show.login')}}" class="btn"> Login</a>
                <a href="{{route('show.register')}}" class="btn">register</a>
            @endguest

            @auth
                    
            
                <span class="border-r-2 pr-2">
                    Hello, {{Auth::user()->name}}
                </span>
                  <a href="{{route('developers.index')}}"> All Developers</a>
                <a href="{{route('developers.create')}}">Add new Developer</a>
                <form action="{{route('logout')}}" method="POST" class="m-0">
                @csrf
                <button type="submit" >Logout</button>
                </form>
            @endauth
        </nav>
    </header>
    <main class="container">

        {{$slot}}
    </main>
</body>
</html>
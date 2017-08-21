<!doctype html>

<html lang="en">
    
    <head> 
    
        <meta charset="UTF-8">
        <title> @yield('title') </title>
        
        <link href="https://fonts.googleapis.com/css?family=Abril+Fatface|Nothing+You+Could+Do" rel="stylesheet">
        <link rel="stylesheet" href="{{ URL::secure('css/main.css') }}" />
        
        @yield('styles')
        
        <body>
            <div class="main">
                @yield('content')
            </div>
        </body>
    
    </head>
    
</html>

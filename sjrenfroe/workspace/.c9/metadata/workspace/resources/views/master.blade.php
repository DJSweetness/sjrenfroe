{"filter":false,"title":"master.blade.php","tooltip":"/resources/views/master.blade.php","undoManager":{"mark":0,"position":0,"stack":[[{"start":{"row":0,"column":0},"end":{"row":23,"column":0},"action":"insert","lines":["<!doctype html>","","<html lang=\"en\">","    ","    <head> ","    ","        <meta charset=\"UTF-8\">","        <title> @yield('title') </title>","        ","        <link href=\"https://fonts.googleapis.com/css?family=Abril+Fatface|Nothing+You+Could+Do\" rel=\"stylesheet\">","        <link rel=\"stylesheet\" href=\"{{ URL::secure('css/main.css') }}\" />","        ","        @yield('styles')","        ","        <body>","            <div class=\"main\">","                @yield('content')","            </div>","        </body>","    ","    </head>","    ","</html>",""],"id":1}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":23,"column":0},"end":{"row":23,"column":0},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1499673461769,"hash":"4cdf53bc9d067ae42be5153e1cd06641665f3d9b"}
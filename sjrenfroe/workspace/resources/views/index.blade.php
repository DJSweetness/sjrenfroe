@extends('layouts.master')

@section('title')
    SJ Renfroe - Navigation By Coffee
@endsection

@section('content')
    <html>
        <head>
            <title>SJ Renfroe</title>
            <link href="https://fonts.googleapis.com/css?family=Abril+Fatface|Nothing+You+Could+Do" rel="stylesheet">
            <link rel="stylesheet" href="{{ URL::secure('css/main.css') }}" />
            <script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>
        </head>
        <body>
            
            <section id="title_screen">
                <div class="container">
                    <div class="content">
                        <div class="title">SJ Renfroe</div>
                        <div class="horizon"></div>
                        <div class="sub_title">Navigation By Coffee</div>
                    </div>
                </div>
            </section>
            
            @if(isset($singleEntry))
                <section id="latest_entry">
                    <div id="single_entry_title">
                        {{ $singleEntry->title }}
                    </div>
                    <div id="single_entry_text">
                        {{ $singleEntry->blog_entry }}
                    </div>
                </section>
            @endif
            
        </body>
    </html>
@endsection
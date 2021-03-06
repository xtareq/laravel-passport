<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{csrf_token()}}">
        <title>Laravel</title>
        
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
    </head>
    <body>
        <div id="app" class="">


            <div class="container">
                <div class="title m-b-md">
                    Laravel
                    <example-component></example-component>
                </div>

            
            </div>
        </div>

        <script src="{{asset('js/app.js')}}"></script>
    </body>
</html>

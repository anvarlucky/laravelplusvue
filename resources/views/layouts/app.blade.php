<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet"  href="{{asset('/assets/css/bootstrap.css')}}">
    <link rel="stylesheet"  href="{{asset('/assets/css/main.css')}}">
    <link rel="stylesheet" href="{{asset('/assets/fonts/font-awesome.min.css')}}">
    <title>Vue</title>
</head>
<body style="background: #FAFDFF">
@yield('content')

<script src="{{asset('/assets/js/jQuery.min.js')}}"></script>
<script src="{{asset('/assets/js/popper.js')}}"></script>
<script src="{{asset('/assets/js/bootstrap.bundle.js')}}"></script>
<script src="{{asset('/assets/js/bootstrap.js')}}"></script>
<script src={{asset("./js/app.js")}}></script>
<script>
    $(document).ready(function () {
        $('.log-out').one('click', function () {
            window.location.pathname='/logout'
        })
    })
</script>
</body>
</html>
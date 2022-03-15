
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{config('app.name')}}: Admin</title>
    <meta name="description" content="description here">
    <meta name="keywords" content="keywords,here">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.min.js" integrity="sha256-XF29CBwU1MWLaGEnsELogU6Y6rcc5nCkhhx89nFMIDQ=" crossorigin="anonymous"></script>

    <style>
        .bg-black-alt  {
            background:#191919;
        }
        .text-black-alt  {
            color:#191919;
        }
        .border-black-alt {
            border-color: #191919;
        }

    </style>

</head>
<body class="bg-black-alt font-sans leading-normal tracking-normal">

@include('components.dashboard.navbar')
@yield('content')
@include('components.dashboard.footer')
</body>
</html>


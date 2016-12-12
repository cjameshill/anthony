<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta id="_token" value="{{ csrf_token() }}">
    <title>ANTHONY CANGELOSI</title>
    <link rel="stylesheet" href="{{ URL::to('css/app.css') }}">
    <script src="https://cdn.rawgit.com/michalsnik/aos/2.0.4/dist/aos.js"></script>
    <script src="/js/app.js"></script>
</head>
<body data-spy="scroll" data-target=".nav__main" data-offset="150">
<svg style="position: absolute; width: 0; height: 0;" width="0" height="0" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
    <defs>
        <symbol id="icon-linkedin" viewBox="0 0 1024 1024">
            <title>linkedin</title>
            <path class="path1" d="M928 0h-832c-52.8 0-96 43.2-96 96v832c0 52.8 43.2 96 96 96h832c52.8 0 96-43.2 96-96v-832c0-52.8-43.2-96-96-96zM384 832h-128v-448h128v448zM320 320c-35.4 0-64-28.6-64-64s28.6-64 64-64c35.4 0 64 28.6 64 64s-28.6 64-64 64zM832 832h-128v-256c0-35.4-28.6-64-64-64s-64 28.6-64 64v256h-128v-448h128v79.4c26.4-36.2 66.8-79.4 112-79.4 79.6 0 144 71.6 144 160v288z"></path>
        </symbol>
    </defs>
</svg>

<div class="wrapper">

    @yield('container')

</div>

<script>
    AOS.init({
        duration: 600,
        disable: 'mobile'
    });

    $('.nav a').click(function(e){
        $('html,body').scrollTo(this.hash, this.hash);
        e.preventDefault();
    });
</script>
</body>
</html>
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
    <script>
        window.App = <?php echo json_encode(['csrfToken' => csrf_token()]); ?>
    </script>

</head>
<body data-spy="scroll" data-target=".nav__main" data-offset="150">
<svg style="position: absolute; width: 0; height: 0;" width="0" height="0" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
    <defs>
        <symbol id="icon-linkedin" viewBox="0 0 1024 1024">
            <title>linkedin</title>
            <path class="path1" d="M928 0h-832c-52.8 0-96 43.2-96 96v832c0 52.8 43.2 96 96 96h832c52.8 0 96-43.2 96-96v-832c0-52.8-43.2-96-96-96zM384 832h-128v-448h128v448zM320 320c-35.4 0-64-28.6-64-64s28.6-64 64-64c35.4 0 64 28.6 64 64s-28.6 64-64 64zM832 832h-128v-256c0-35.4-28.6-64-64-64s-64 28.6-64 64v256h-128v-448h128v79.4c26.4-36.2 66.8-79.4 112-79.4 79.6 0 144 71.6 144 160v288z"></path>
        </symbol>
        <symbol id="scroll-down" viewBox="0 0 76 76">
            <path d="M55.9,33L39,49.9c-0.4,0.4-0.9,0.6-1.4,0.6s-1-0.2-1.4-0.6L20.1,33.8c-0.8-0.8-0.8-2,0-2.8s2-0.8,2.8,0
l14.7,14.7l15.5-15.5c0.8-0.8,2-0.8,2.8,0C56.7,30.9,56.7,32.2,55.9,33z M76,38c0,21-17,38-38,38S0,59,0,38S17,0,38,0S76,17,76,38z
 M72,38C72,19.2,56.8,4,38,4S4,19.2,4,38s15.2,34,34,34S72,56.8,72,38z"/>
        </symbol>
    </defs>
</svg>

<div id="app" class="wrapper">

    @yield('container')

</div>



<script src="/js/app.js"></script>
<script>
    AOS.init({
        duration: 300,
        disable: 'mobile'
    });

    $('.nav a').click(function(e){
        $('html,body').scrollTo(this.hash, this.hash);
        e.preventDefault();
    });
</script>
</body>
</html>
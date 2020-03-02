<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="shortcut icon" href="{{ asset('storage/favicon.png')}}" />

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/scripts.js') }}" defer></script>
    <script src="https://kit.fontawesome.com/694d51d55f.js" crossorigin="anonymous"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/cookieconsent@3/build/cookieconsent.min.css" />
</head>
<body>
    @if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
    @endif
    <div id="app">
        <nav id="nav" class="navbar sticky-top navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="{{ asset('storage/logo.png') }}" alt="logo" height="50px">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Center Of Navbar -->
                    <ul class="navbar-nav ml-auto mr-auto">
                        <!-- Nav links -->
                        <li class="nav-item">
                            <a class="nav-link active" href="#start">{{ __('navigation.Start') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#offer">{{ __('navigation.What we offer') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#reviews">{{ __('navigation.Reviews') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#join">{{ __('navigation.Join us') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#faq">{{ __('navigation.FAQ') }}</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <main>
            @yield('content')
        </main>
        <footer class="mt-5">
            <div class="container pt-4">
                <div class="row">
                    <div class="col-md-5  text-center text-md-left">
                        <img src="{{ asset('storage/logo2.png') }}" alt="logo" height="50px">
                    </div>
                    <div class="col-md-2 text-center d-flex justify-content-around">
                        <a class="fab fa-facebook-f f20 white" href="https://facebook.com"></a>
                        <a class="fab fa-instagram f20 white" href="https://instagram.com"></a>
                        <a class="fab fa-twitter f20 white" href="https://twitter.com"></a>
                    </div>
                    <div class="col-md-5 text-center text-md-right">
                        <a href="mailto:szkolenia@senetic.com">szkolenia@senetic.com</a>
                    </div>
                </div>
                <nav class="row mt-5 navbar sticky-top navbar-expand-md">
                    <ul class="col-md-6 navbar-nav text-center">
                        <li class="nav-item white">©{{ date("Y") }} Senetic SA. All Rights Reserved.</li>
                    </ul>
                    <ul class="col-md-6 navbar-nav text-center d-flex justify-content-end">
                        <li class="nav-item">
                             <a class="nav-link white" href="">{{ __('navigation.Rules') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link white" href="">{{ __('navigation.Privacy policy') }}</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </footer>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/cookieconsent@3/build/cookieconsent.min.js" data-cfasync="false"></script>
    <script>
    window.cookieconsent.initialise({
    "palette": {
        "popup": {
        "background": "#d6d6d6",
        "text": "#222b45"
        },
        "button": {
        "background": "#00aeef",
        "text": "#ffffff"
        }
    },
    "theme": "classic",
    "content": {
        "message": "Ta strona korzysta  z ciasteczek, aby zapewnić usługi na najwyższym poziomie.",
        "dismiss": "Zgoda",
        "link": "Polityka prywatności"
    }
    });
    </script>
</body>
</html>

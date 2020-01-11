<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @stack('meta')
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="Sujit Baniya - Experienced Software Engineer in developing Web Application, as well as building robust RESTful API.">
    <meta name="keyword" property="keyword" content="Sujit Baniya, Developer in Nepal, PHP Developer in Nepal, API Developer, API, Web Developer, RESTful API, Backend Developer, US Medical Coding">
    <meta name="title" property="title" content="Sujit Baniya - Software Engineer, PHP, API Developer, Web Developer">
    <meta name="image" property="image" content="https://sujitbaniya.com/img/profile-lg.jpg">
    <meta name="og:description" property="og:description" content="Sujit Baniya - Experienced Software Engineer in developing Web Application, as well as building robust RESTful API.">
    <meta name="og:keyword" property="og:keyword" content="Sujit Baniya, Developer in Nepal, PHP Developer in Nepal, API Developer, API, Web Developer, RESTful API, Backend Developer, US Medical Coding">
    <meta name="og:title" property="og:title" content="Sujit Baniya - Software Engineer, PHP, API Developer, Web Developer">
    <meta name="og:image" property="og:image" content="https://sujitbaniya.com/img/profile-lg.jpg">
    <meta name="twitter:image" property="twitter:image" content="https://sujitbaniya.com/img/profile-lg.jpg">
    <meta name="twitter:description" property="twitter:description" content="Sujit Baniya - Experienced Software Engineer in developing Web Application, as well as building robust RESTful API.">
    <meta name="twitter:keyword" property="twitter:keyword" content="Sujit Baniya, Developer in Nepal, PHP Developer in Nepal, API Developer, API, Web Developer, RESTful API, Backend Developer, US Medical Coding">
    <meta name="twitter:title" property="twitter:title" content="Sujit Baniya - Software Engineer, PHP, API Developer, Web Developer">
    <!-- Custom fonts for this template -->
    <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i" rel="stylesheet">
    <link rel='stylesheet'  href='https://fonts.googleapis.com/css?family=Poppins:100,100italic,200,200italic,300,300italic,regular,italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic' type='text/css' media='all' />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">

    <title>@yield('title')</title>

    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Karla|Merriweather" rel="stylesheet">

    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.15.10/styles/default.min.css">
    <link href="{{ mix('css/vendor.css') }}" rel="stylesheet">
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    @include('blog.partials.styles')
</head>

<body id="page-top">

<nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="sideNav">
    <a class="navbar-brand js-scroll-trigger" href="/">
        <span class="d-block d-lg-none">Sujit Baniya</span>
        <span class="d-none d-lg-block">
        <img class="img-fluid img-profile rounded-square mx-auto mb-2" src="/img/profile.jpg" alt=""><br>
        <span class="d-lg-block">Sujit Baniya</span>
      </span>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link js-scroll-trigger" href="/#about">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link js-scroll-trigger" href="/#experience">Experience</a>
            </li>
            <li class="nav-item">
                <a class="nav-link js-scroll-trigger" href="/#education">Education</a>
            </li>
            <li class="nav-item">
                <a class="nav-link js-scroll-trigger" href="/#skills">Skills</a>
            </li>
            <li class="nav-item">
                <a class="nav-link js-scroll-trigger" href="/#interests">Interests</a>
            </li>
            <li class="nav-item">
                <a class="nav-link js-scroll-trigger" href="/#contacts">Contacts</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/blog">Blog</a>
            </li>
        </ul>
        <div class="social-icons fa-pull-right">
            <a href="https://www.linkedin.com/in/itsursujit" target="_blank">
                <i class="fab fa-linkedin-in"></i>
            </a>
            <a href="https://github.com/itsursujit" target="_blank">
                <i class="fab fa-github"></i>
            </a>
            <a href="https://facebook.com/sujitpbaniya" target="_blank">
                <i class="fab fa-facebook-f"></i>
            </a>
        </div>
    </div>

</nav>

<div class="container-fluid p-0">
    <section class="resume-section-blog p-3 p-lg-5 d-flex align-items-center" id="blog">
        <div class="w-100">
            <div class="block">
                <div class="row">
                    @yield('content')
                </div>
            </div>
        </div>
    </section>
</div>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-154485883-1"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-154485883-1');
</script>



<script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.15.10/highlight.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/medium-zoom@1.0.4/dist/medium-zoom.min.js"></script>
<script src="{{mix('/js/manifest.js')}}"></script>
<script src="{{mix('/js/vendor.js')}}"></script>
<script src="{{mix('/js/app.js')}}"></script>
@stack('scripts')
</body>
</html>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="author" content="Theme Region">
<meta name="description" content="">

<title>@yield('title')</title>
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script>
  (adsbygoogle = window.adsbygoogle || []).push({
      google_ad_client: "ca-pub-3658405458529686",
      enable_page_level_ads: true
  });
</script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-129780474-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-129780474-1');
</script>

<!-- CSS -->
<link rel="stylesheet" href="{{ asset('main/css/bootstrap.min.css') }}" >
<link rel="stylesheet" href="{{ asset('main/css/font-awesome.min.css') }}">
<link rel="stylesheet" href="{{ asset('main/css/animate.css') }}">
<link rel="stylesheet" href="{{ asset('main/css/owl.carousel.css') }}">  
<link rel="stylesheet" href="{{ asset('main/css/main.css') }}">  
<link rel="stylesheet" href="{{ asset('main/css/responsive.css') }}">
<link rel="stylesheet" href="{{ asset('css/css.css') }}">

<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">

<!-- font -->
<link href='https://fonts.googleapis.com/css?family=Ubuntu:400,500,700,300' rel='stylesheet' type='text/css'>

<!-- favicon icon -->
<link rel="shortcut icon" type="image/x-icon" href="{{ asset('main/images/ico/favicon.ico') }}">

@section('headSection')
@show

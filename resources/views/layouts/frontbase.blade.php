<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <meta name="copyright" content="MACode ID, https://macodeid.com/">

  <title>@yield("title")</title>

  <link rel="stylesheet" href="{{asset('assets')}}/css/maicons.css">

  <link rel="stylesheet" href="{{asset('assets')}}/css/bootstrap.css">

  <link rel="stylesheet" href="{{asset('assets')}}/vendor/owl-carousel/css/owl.carousel.css">

  <link rel="stylesheet" href="{{asset('assets')}}/vendor/animate/animate.css">

  <link rel="stylesheet" href="{{asset('assets')}}/css/theme.css">

</head>
<body>
        @include('home.header')       
        @include('home.body')
        @include('home.footer')
      
      
    </body>
</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>@yield("title")</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('assets')}}/admin/images/favicon.png">
    <link href="{{asset('assets')}}/admin/vendor/jqvmap/css/jqvmap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="{{asset('assets')}}/admin/vendor/chartist/css/chartist.min.css">
    <link href="{{asset('assets')}}/admin/vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
	<link href="{{asset('assets')}}/admin/vendor/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css" rel="stylesheet">
    <link href="{{asset('assets')}}/admin/css/style.css" rel="stylesheet">
	<link href="{{asset('assets')}}https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">

</head>
<body>
        @include('admin.header')       
        @include('admin.sidebar')
        @include('admin.body')
        @include('admin.footer')
</body>
</html>
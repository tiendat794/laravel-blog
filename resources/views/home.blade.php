<!DOCTYPE html>
<html>
	<head>
		<title> @yield('title')</title>
		<!--meta-->
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.2" />
		<meta name="format-detection" content="telephone=no" />
		<meta name="keywords" content="Medic, Medical Center" />
		<meta name="description" content="Responsive Medical Health Template" />
        <!--style-->
        <link href="https://fonts.googleapis.com/css2?family=Roboto:ital@1&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Source Code Pro" rel="stylesheet">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,400,700">
		<link href='//fonts.googleapis.com/css?family=Roboto:300,400,700' rel='stylesheet' type='text/css'>
		<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:300,400,700' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" type="text/css" href="{{asset('style/reset.css')}}">
		<link rel="stylesheet" type="text/css" href="{{asset('style/superfish.css')}}">
		<link rel="stylesheet" type="text/css" href="{{asset('style/prettyPhoto.css')}}">
		<link rel="stylesheet" type="text/css" href="{{asset('style/jquery.qtip.css')}}">
		<link rel="stylesheet" type="text/css" href="{{asset('style/style.css')}}">
		<link rel="stylesheet" type="text/css" href="{{asset('style/menu_styles.css')}}">
		<link rel="stylesheet" type="text/css" href="{{asset('style/animations.css')}}">
		<link rel="stylesheet" type="text/css" href="{{asset('style/responsive.css')}}">
		<link rel="stylesheet" type="text/css" href="{{asset('style/odometer-theme-default.css')}}">
		<!--<link rel="stylesheet" type="text/css" href="style/dark_skin.css">-->
		<!--<link rel="stylesheet" type="text/css" href="style/high_contrast_skin.css">-->
		<link rel="shortcut icon" href="images/favicon.ico">
    </head>

<body>
@include('header')
	
<div class="page">
    <div class="page_layout clearfix">
	
        <div class="row page_margin_top">
            <div class="column column_2_3">
                @yield("content")

            </div>
            @include('rightContent.rightContent')
    </div>
</div>
</div>
@include('footer')
</body>
</html>
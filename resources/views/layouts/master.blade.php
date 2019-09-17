<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Universal</title>
    <link href="/assets/css/blk-design-system-pro.css?v=1.0.0" rel="stylesheet" />
{{--    <link href="https://fonts.googleapis.com/css?family=Pnovaoppins:200,300,400,600,700,800" rel="stylesheet" />--}}
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <link href="/assets/css/nucleo-icons.css" rel="stylesheet" />
    <link href="/assets/css/helper.css" rel="stylesheet" />
</head>
<body class="{{app()->getLocale()=="ar"?"alignment":""}}">
@include("layouts.nav")
@yield("content")
@include("layouts.footer")
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" ></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" ></script>
<script src="/assets/js/blk-design-system-pro.min.js?v=1.0.0" type="text/javascript"></script>
@stack("scripts")
</body>
</html>

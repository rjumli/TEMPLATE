<!DOCTYPE html>
<html data-layout-mode="light" data-sidebar="dark" data-sidebar-image="none" data-layout-style="default" data-layout-position="fixed" data-sidebar-size="sm" data-topbar="light" data-layout-width="fluid" data-layout="vertical" data-preloader="disable" lang="" id="heady">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title inertia>STSIMS</title>
        <meta name="description" content="STSIMS - DOST IX | KRAD">
        <meta name="keywords"content="DOST, SEI, STSIMS, KRAD">
        <meta name="author" content="Krad">
        <meta property="og:title" content="STSIMS - Science and Technology Scholarship Information Management System">
        <meta property="og:description" content="Scholarship Management System">
        <meta property="og:image" content="URL to the template's logo or featured image">
        <meta property="og:url" content="URL to the template's webpage">
        <meta name="twitter:card" content="summary_large_image">
        <link rel="shortcut icon" href="{{ URL::asset('sei.ico') }}">
        <link href="{{ mix('/css/bootstrap.css') }}" rel="stylesheet" />
        <link href="{{ mix('/css/icons.css') }}" rel="stylesheet" />
        <link href="{{ mix('/css/app.css') }}" rel="stylesheet" />
        <script src="{{ mix('/js/manifest.js') }}" defer></script>
        <script src="{{ mix('/js/vendor.js') }}" defer></script>
        <script src="{{ mix('/js/app.js') }}" defer></script>
        @inertiaHead
    </head>
    <body>
        @inertia
    </body>
</html>

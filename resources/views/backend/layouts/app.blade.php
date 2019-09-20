<!doctype html>
<html class="no-js" lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    {{-- <link rel="icon" sizes="16x16" type="image/png" href="{{route('frontend.index')}}/img/favicon_icon/{{settings()->favicon}}"> --}}
    <title>@yield('title', app_name())</title>

    <!-- Meta -->
    <meta name="description" content="@yield('meta_description', 'Default Description')">
    <meta name="author" content="@yield('meta_author', 'Viral Solani')">
    <link href="https://fonts.googleapis.com/css?family=Fira+Sans" rel="stylesheet">
@yield('meta')

<!-- Styles -->
@yield('before-styles')

<!-- Check if the language is set to RTL, so apply the RTL layouts -->
    <!-- Otherwise apply the normal LTR layouts -->
@langRTL
{{ Html::style(getRtlCss(mix('css/backend.css'))) }}
@else
    {{ Html::style(mix('css/backend.css')) }}
@endif
{{ Html::style(mix('css/backend-custom.css')) }}
{{ Html::style(asset('js/backend/ui/1.12.1/themes/base/jquery-ui.css')) }}
@yield('after-styles')

<!-- Html5 Shim and Respond.js IE8 support of Html5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    {{ Html::script('https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js') }}
    {{ Html::script('https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js') }}
    <![endif]-->

    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
    <style>
        .form-group textarea {
            height: 80px;
        }

        .map {
            width: 100%;
            height: 200px;
        }

        #addAddressForm {
            display: none;
        }

        .loader {
            border: 16px solid #f3f3f3; /* Light grey */
            border-top: 16px solid #3498db; /* Blue */
            border-radius: 50%;
            width: 120px;
            height: 120px;
            animation: spin 2s linear infinite;
            position: relative;
            top: 50%;
            left: 50%;
        }

        @keyframes spin {
            0% {
                transform: rotate(0deg);
            }
            100% {
                transform: rotate(360deg);
            }
        }

        .wait-overley {
            position: fixed;
            width: 100%;
            height: 100%;
            left: 0;
            top: 0;
            background: rgba(51, 51, 51, 0.7);
            z-index: 999;
            display: none;
        }
    </style>
</head>
<body class="skin-{{ config('backend.theme') }} {{ config('backend.layout') }}">
<div class="wait-overley">
    <div class="loader"></div>
</div>
<div class="loading" style="display:none"></div>
@include('includes.partials.logged-in-as')

<div class="wrapper" id="app">
@include('backend.includes.header')
@include('backend.includes.sidebar-dynamic')

<!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
        @yield('page-header')
        <!-- Breadcrumbs would render from routes/breadcrumb.php -->
            @if(Breadcrumbs::exists())
                {!! Breadcrumbs::render() !!}
            @endif
        </section>

        <!-- Main content -->
        <section class="content">
            @include('includes.partials.messages')
            @yield('content')
        </section><!-- /.content -->
    </div><!-- /.content-wrapper -->

    @include('backend.includes.footer')
</div><!-- ./wrapper -->

<!-- JavaScripts -->
@yield('before-scripts')
{{ Html::script(mix('js/backend.js')) }}
{{ Html::script(mix('js/backend-custom.js')) }}

@yield('after-scripts')
@yield('address-scripts')
</body>
</html>
<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
    @include('frontend.head')
</head>
<body>
    @include('frontend.preloader')
<div id="main-wrapper">
    @include('frontend.topbar')
    @include('frontend.sidebar-l')
    <div class="page-wrapper">
    @include('frontend.breadcrumb')
        <div class="container-fluid">
{{--    @include('frontend.content')--}}
            <x-alert />
            @include('partials.alerts')
            @yield('content')
        </div>
    @include('frontend.footer')
    </div>
</div>
{{--@include('frontend.sidebar-r')--}}
<div class="chat-windows"></div>
@include('frontend.script')
</body>
</html>

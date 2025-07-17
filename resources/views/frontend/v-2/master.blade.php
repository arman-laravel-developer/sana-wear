<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title') | Sana-Wear</title>
    <link rel="icon" href="{{asset('setting/'.$setting->logo)}}"/>
    <!-- Pavicon ICon -->
    @include('frontend.v-2.includes.style')
    {!! $code->head_script !!}
</head>

<body>
    {!! $code->body_script !!}
    @include('frontend.v-2.includes.header')

    <main>
        <!-- Home Slider -->
        @yield('content-v2')
        <!-- /Footer top -->
    </main>

    <!-- Footer -->
    @include('frontend.v-2.includes.footer')
    <!-- /Footer -->

    <!-- Jquery CDN -->
    @include('frontend.v-2.includes.script')
    @stack('script')
    <a href="https://wa.me/+88{{$setting->phone}}	" target="_blank" class="whatapps-btn-inner">
        <i class="fab fa-whatsapp"></i>
    </a>
</body>

</html>

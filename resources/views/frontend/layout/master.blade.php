<!DOCTYPE html>
<html lang="en">
<head>
    @include('frontend.layout.partials.head')
</head>
<body>
    @include('frontend.layout.partials.navbar')
    @yield('content')
    @include('frontend.layout.partials.footer')
    <div class="rn-progress-parent">
        <svg class="rn-back-circle svg-inner" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>
    @include('frontend.layout.partials.scripts')
</body>
</html>

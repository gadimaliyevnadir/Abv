<!DOCTYPE html>
<html class="no-js" lang="en">

@include('front.layouts.includes.head')

<body>
    <x-navigate-component />
    <x-side-header-component />
    @yield('content')
    <x-footer-component />
    @include('front.layouts.includes.foot')
</body>

</html>

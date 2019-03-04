
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<!-- head -->
@include('frontend.partials.head')
<!-- end head -->
<body>

<!-- header-->
@include('frontend.partials.header')
<!-- end header-->
<div class="sub-banner my-banner3">
</div>
<div class="content">
    <div class="container">
        @include('frontend.partials.sidebar')
        @yield('content')
    </div>
</div>

<!-- newsletter -->
@include('frontend.partials.newsletter')
<!-- //newsletter -->
<!-- footer-->
@include('frontend.partials.footer')
<!-- end footer -->


</body>


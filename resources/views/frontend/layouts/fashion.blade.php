<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<!-- head -->
@include('frontend.partials.head')
<!-- end head -->
<body>

<!-- header-->
@include('frontend.partials.header')
<!-- end header-->

@yield('content')

<!-- newsletter -->
@include('frontend.partials.newsletter')
<!-- //newsletter -->
<!-- footer-->
@include('frontend.partials.footer')
<!-- end footer -->


</body>
</html>
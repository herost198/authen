<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<!-- //head-start -->
    @include('admin.partials.head')
<!-- //head-ends -->



<body class="cbp-spmenu-push">
<div class="main-content">

    {{--navigation--}}
        @include('admin.partials.sidebar')

    {{--end navigation--}}

    {{--header start--}}
        @include('admin.partials.header')
    <!-- //header-ends -->
    <!-- main content start-->
    <div id="page-wrapper">
        <div class="main-page">
            @yield('content')
        </div>
    </div>
    <!--footer-->
        @include('admin.partials.footer')
    <!--//footer-->
</div>

<!-- new added graphs chart js-->
   @include('admin.partials.main-js')

</body>
</html>
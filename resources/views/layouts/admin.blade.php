<!DOCTYPE html>
<html>
<head>
    @include('includes.admin.head')
</head>
<body>
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
        @include('includes.admin.sidebar')

        <div class="layout-page">

        @include('includes.admin.header')


    

        @yield('content')

        @include('includes.admin.footer')
    </div>
    </div>
    </div>

     


</body>
</html>
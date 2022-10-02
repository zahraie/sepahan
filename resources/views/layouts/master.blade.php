<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts.head-tag')
    @yield('head-tag')
</head>
<body>

    @include('layouts.header')

    <main id="main-body-one-col" class="main-body">

    @yield('content')

    </main>


    @include('layouts.footer')



    @include('layouts.script')
    @yield('script')
</body>
</html>

<html>
    <head>
        <title>App Name - @yield('title')</title>
    </head>
    <body>
        @section('sidebar') <!-- section คือ จุดที่สามารถถูกแทนค่าได้ ทับหรือไม่ทับก็ได้ แต่ yield คือทับ -->
            Master Sidebar
        @show

        <div class="container">
            @yield('content')
        </div>
    </body>
<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts.head')
</head>

<body>
    
    @include('layouts.preloader')

    <div class="wrapper">
                          {{-- if else 簡短寫法，看有無設定overlay  若有就傳進去  不然就不傳 --}}
        @include('layouts.header', ['overlay'=>(isset($overlay))? $overlay : null])
		
		@yield('hero')

        <!--body content start-->
        <section class="body-content">

           @yield('content')

        </section>
        <!--body content end-->
        
        @include('layouts.footer')


    </div>

    @include('layouts.js')
    
</body>

</html>

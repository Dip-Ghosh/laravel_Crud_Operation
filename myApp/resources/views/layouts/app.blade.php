<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<!--including head from head file -->
@include('layouts.includes.head');

<body>
    <div id="app">
       <!-- nav bar includings -->
       @include('layouts.includes.nav');
        <main class="py-4">

            <div class="container">
    <div class="row justify-content-center">
        
<div class="col-md-3">
       @if (auth()->user())
        @include('layouts.includes.sidebar');
           
       @endif
</div>

        <div class="col-md-9">
            @yield('content')
        </div>
    </div>
</div>

            
        </main>
    </div>
</body>
</html>

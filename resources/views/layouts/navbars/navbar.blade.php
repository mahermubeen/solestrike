@auth()
    @include('layouts.headers.auth')
@endauth

@guest()
    @include('layouts.headers.guest')
@endguest
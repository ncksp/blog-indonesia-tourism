@guest
@include('layouts.public-navbar')
@else
@include('layouts.'.Auth::user()->getRole().'-navbar')
@endguest

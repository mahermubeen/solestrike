<div id="menu-items" class="menu-items hidden">
    <img id="cross" class="cross" src="{!! asset('img/cross.png') !!}" />
    <a href="/">Home</a>
    <a href="{{ route('shop')}}">Shop</a>
    @if(auth()->check())
        <a href="/checkout/{{ Auth::user()->id }}">Checkout</a>
    @endif
    @if(auth()->check() && auth()->user()->is_admin == 1)
        <a href="/admin">Admin Dashboard</a>
    @endif
    
</div>
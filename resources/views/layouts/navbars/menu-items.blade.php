<div id="menu-items" class="menu-items hidden">
    <img id="cross" class="cross" src="{!! asset('img/cross.png') !!}" />
    <a href="/">Home</a>
    <a href="{{ route('shop')}}">Shop</a>
    <a href="{{ route('checkout')}}">Checkout</a>
    {{-- <a href="/user/cart">Cart</a> --}}
    @if(auth()->check() && auth()->user()->is_admin == 1)
        <a href="/admin">Admin Dashboard</a>
    @else
        {{ redirect()->route('login') }} 
    @endif
    
</div>
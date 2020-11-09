<div id="menu-items" class="menu-items hidden">
    <img id="cross" class="cross" src="../img/cross.png" />
    <a href="/">Home</a>
    <a href="/user/shop">Shop</a>
    {{-- <a href="/user/cart">Cart</a> --}}
    @if(auth()->check() && auth()->user()->is_admin == 1)
        <a href="/admin">Admin Dashboard</a>
    @else
        {{ redirect()->route('login') }} 
    @endif
    
</div>
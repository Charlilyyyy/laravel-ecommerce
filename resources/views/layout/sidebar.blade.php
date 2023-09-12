<div class="sidebar" id="sidebar">
    <!-- <a href="#">k</a> -->
 
    @auth
        <div class="profile">
            <a href="#">Profile</a>
        </div>
        <div class="seller-center">
            <a href="#">Seller center</a>
        </div>
        <div class="logout">
        <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
        </div>


        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
    @endauth
</div>
<div class="sidebar" id="sidebar">
    <!-- <a href="#">k</a> -->
 
    @auth
        <div class="logout">
        <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
        </div>


        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
    @endauth

    <a href="{{ route('dashboard-vendor') }}">Seller center</a>
    <a href="{{ route('member-profile') }}">Profile</a>
</div>
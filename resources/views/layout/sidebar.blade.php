@include('layout.bootstrap')
@vite(['resources/js/app.js'],['resources/css/app.css'])
<div class="sidebar" id="sidebar">
    <!-- <a href="#">k</a> -->
 
    @auth
        <div class="profile">
            <a href="{{ route('dashboard-vendor') }}">Seller center</a>
        </div>
        <div class="seller-center">
            <a href="{{ route('member-profile') }}">Profile</a>
        </div>
        <div class="logout">
        <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
        </div>


        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
        <button class="btn btn-primary">nj</button>
    @endauth

    
    
</div>
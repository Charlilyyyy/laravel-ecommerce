<!DOCTYPE html>
<html>
<head>
    <!-- <link rel="stylesheet" type="text/css" href="styles.css"> -->
</head>
<body>
    <div class="navbar" id="navbar">
        <div class="logo">
            <a href="/"><img src="{{ asset('images/tc.jpeg') }}" alt="Logo"></a>
        </div>
        <div class="nav-content">
            <div class="signin-btn">
                @auth
                    @if(Auth::user()->first_name)
                        <a href="{{ route('dashboard-member') }}">{{ Auth::user()->first_name }} {{ Auth::user()->last_name }}</a>
                    @else
                        <a href="{{ route('dashboard-member') }}">User</a>
                    @endif
                @else
                    <a href="/login">Sign In</a>
                @endauth
            </div>
            <a href="#" id="sidebar-toggle">&#128306</a>
            <!-- <a id="sidebar-toggle" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-lines-fill" viewBox="0 0 16 16">
  <path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-5 6s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zM11 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5zm.5 2.5a.5.5 0 0 0 0 1h4a.5.5 0 0 0 0-1h-4zm2 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1h-2zm0 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1h-2z"/>
</svg></a> -->
        </div>
    </div>

    @include('layout.sidebar')

    <!-- <div class="sidebar" id="sidebar">~
<a href="#">k</a>
</div> -->


    <!-- <script src="script.js"></script> -->
</body>
</html>


<style scoped>
body {
    margin: 0;
    padding: 0;
}

.navbar {
    background-color: #333;
    overflow: hidden;
    position: fixed; /* Stick to the top */
    top: 0;
    width: 100%;
    display: flex;
    align-items: center;
    justify-content: space-between; /* Align items and sidebar toggle */
}

.logo img {
    width: 50px; /* Adjust logo size as needed */
    margin: 10px 20px; /* Adjust margins as needed */
}

.nav-content {
    display: flex;
    align-items: center;
}

.nav-content a {
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

.sidebar {
    background-color: #f5f5f5;
    width: 250px;
    height: 100%;
    position: fixed;
    top: 0;
    right: -250px; /* Initially hidden */
    transition: right 0.3s;
    z-index: 1;
}

.content {
    padding: 100px 20px; /* Add padding to make space below the navbar */
}

.show-sidebar {
    right: 0; /* Show the sidebar */
    box-shadow: -3px 0 5px rgba(0, 0, 0, 0.2); /* Add shadow on open */
}

.signin-btn {
    border: 1px solid blue;
    border-radius: 9px;
    padding: 6px 24px;
    background-color: #679267
}


</style>

<script>
    window.onscroll = function() {
    stickyNavbar();
};

var navbar = document.getElementById("navbar");
var sticky = navbar.offsetTop;

function stickyNavbar() {
    if (window.pageYOffset >= sticky) {
        navbar.classList.add("sticky");
    } else {
        navbar.classList.remove("sticky");
    }
}

document.getElementById("sidebar-toggle").addEventListener("click", function() {
    document.getElementById("sidebar").classList.toggle("show-sidebar");
});

document.addEventListener("click", function(event) {
    if (!event.target.matches("#sidebar") && !event.target.matches("#sidebar-toggle")) {
        document.getElementById("sidebar").classList.remove("show-sidebar");
    }
});



</script>
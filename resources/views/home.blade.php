@include('layout.header')
    <!-- Home
    <a href="/login">Login</a>
    <a href="/signup">Signup</a> -->

    
    <div class="row">
        <div class="col-3"></div>
        <div class="col-6 text-center main-content">
            <h1 class="top100 mt-5">CHARLIE MARKETPLACE</h1>
            <img class="mt-5 top100" src="{{ asset('images/tc.jpeg') }}" alt="Logo">
        </div>
        <div class="col-3"></div>
    </div>

    <style>
        .top100{
            position:relative;
            top:100px
        }

        .main-content img{
            width:300px;
        }
    </style>
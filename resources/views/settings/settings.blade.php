@include('layout.header')

<div class="row settings-page text-center me-5 ms-5" style="position:relative;top:100px">
    @if(session('status') === 'success')
        <div class="alert alert-success">
            {{ session('message') }} <!-- Display the success message -->
        </div>
    @elseif(session('status') === 'failure')
        <div class="alert alert-danger">
            {{ session('message') }} <!-- Display the error message -->
        </div>
    @endif


    <a href="{{ route('forgot-password') }}" class="btn-menu col-3 me-4 ms-4 py-4 btn btn-secondary">
        <p class="btn-menu-content">Forgot Password</p>
    </a>
    <a class="btn-menu col-3 me-4 ms-4 py-4 btn btn-secondary">
        <p class="btn-menu-content">test</p>
    </a>
    <a class="btn-menu col-3 me-4 ms-4 py-4 btn btn-secondary">
        <p class="btn-menu-content">test</p>
    </a>
    <a class="btn-menu col-3 me-4 ms-4 py-4 btn btn-secondary">
        <p class="btn-menu-content">test</p>
    </a>
</div>

<style>
   .btn-menu{
    width:20%;
   }
</style>
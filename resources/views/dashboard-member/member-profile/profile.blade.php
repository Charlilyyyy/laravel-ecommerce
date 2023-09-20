@include('layout.header')


<div class="row" style="position:relative;top:100px">
  <div class="col-3"></div>
  <div class="col-6">
    <div class="text-center">
    <!-- <img src="#"/> -->
      <img src="{{ asset('images/profile2.jpeg') }}" alt="Profile Image">
    </div>
    <div class="profile-info desc-info mt-5">
      <p>Name : {{ $user->first_name }}{{ $user->last_name }}</p>
      <p>Email: {{ $user->email }}</p>
    </div>
    <div class="button-m text-center">
      <button type="button" class="btn btn-primary">Edit profile</button>
    </div>
  </div>
  <div class="col-3"></div>
</div>

<style>
  .desc-info{
    font-size: 1rem;
  }

  .button-m{
    margin-top:100px;
  }

</style>
@include('layout.header')


<div class="row" style="position:relative;top:100px">
  <div class="col-3"></div>
  <div class="col-6">
    <div class="text-center">
    <!-- <img src="#"/> -->
      <!-- <img src="{{ asset('images/profile2.jpeg') }}" alt="Profile Image"> -->
      
      <div class="container">
        <div class="avatar-upload">
          <div class="avatar-edit">
            <input name="profilepic" type='file' id="imageUpload" accept=".png, .jpg, .jpeg" />
            <label for="imageUpload"></label>
          </div>
          <div class="avatar-preview">
            <div id="imagePreview" style="background-image: url('http://i.pravatar.cc/500?img=7');">
            </div>
          </div>
        </div>
      </div>

    </div>
    <div class="profile-info desc-info mt-5 text-center">
      <p>Name : {{ $user->first_name }} {{ $user->last_name }}</p>
      <p>Email: {{ $user->email }}</p>
    </div>
    <div class="button-m text-center">
      <!-- <button type="button" class="btn btn-primary">Edit profile</button> -->
      <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
Edit profile
</button>
    </div>
    <!-- Modal -->
<div class="modal fade mt-5 pt-5" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <form role="form" method="post" action="{{ route('saveEditProfile') }}" class="validation" data-cc-on-file="false" id="edit-profile-form">
  @csrf
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Edit your profile</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="row">
              <label class="col-3" for="first-name">First name: </label>
              <input name="first_name" class="col-8" type="text" placeholder="Please enter your first name"/>
          </div>
          <div class="row mt-4">
              <label class="col-3" for="first-name">Last name: </label>
              <input name="last_name" class="col-8" type="text" placeholder="Please enter your first name"/>
          </div>
          <!-- <div class="row mt-4">
              <label class="col-3" for="first-name">Email: </label>
              <input name="email" class="col-8" type="text" placeholder="Please enter your first name"/>
          </div> -->
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-success">Save changes</button>
        </div>
      </div>
    </div>
  </form>
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


.container {
  max-width: 960px;
  margin: 30px auto;
  padding: 20px;
}
.avatar-upload {
  position: relative;
  max-width: 205px;
  margin: 50px auto;
}
.avatar-upload .avatar-edit {
  position: absolute;
  right: 12px;
  z-index: 1;
  top: 10px;
}
.avatar-upload .avatar-edit input {
  display: none;
}
.avatar-upload .avatar-edit input + label {
  display: inline-block;
  width: 34px;
  height: 34px;
  margin-bottom: 0;
  border-radius: 100%;
  background: #ffffff;
  border: 1px solid transparent;
  box-shadow: 0px 2px 4px 0px rgba(0, 0, 0, 0.12);
  cursor: pointer;
  font-weight: normal;
  transition: all 0.2s ease-in-out;
}
.avatar-upload .avatar-edit input + label:hover {
  background: #f1f1f1;
  border-color: #d6d6d6;
}
.avatar-upload .avatar-edit input + label:after {
  content: "\f040";
  font-family: "FontAwesome";
  color: #757575;
  position: absolute;
  top: 10px;
  left: 0;
  right: 0;
  text-align: center;
  margin: auto;
}
.avatar-upload .avatar-preview {
  width: 192px;
  height: 192px;
  position: relative;
  border-radius: 100%;
  border: 6px solid #f8f8f8;
  box-shadow: 0px 2px 4px 0px rgba(0, 0, 0, 0.1);
}
.avatar-upload .avatar-preview > div {
  width: 100%;
  height: 100%;
  border-radius: 100%;
  background-size: cover;
  background-repeat: no-repeat;
  background-position: center;
}


</style>

<script>
  function readURL(input) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();
    reader.onload = function (e) {
      $("#imagePreview").css(
        "background-image",
        "url(" + e.target.result + ")"
      );
      $("#imagePreview").hide();
      $("#imagePreview").fadeIn(650);
    };
    reader.readAsDataURL(input.files[0]);
  }
}
$("#imageUpload").change(function () {
  readURL(this);
});

</script>
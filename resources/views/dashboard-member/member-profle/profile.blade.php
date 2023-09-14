@include('layout.header')

<!-- Add this link where you want to display the logout link -->
<div class="profile-container">
    <div class="profile-pic center-div">
        <img src="a.png"/>
    </div>
    <!-- {{$user}} -->
    <div class="member-data">
        <p class="mb-2">Name: {{$user->first_name}}{{$user->last_name}}</p>
        <p class="mb-2">Email: {{$user->email}}</p>
        <p class="mb-2">Username: {{$user->username}}</p>
    </div>
    <div class="edit-profile center-div">
        <button type="button">
            Edit Profile
        </button>
    </div>
</div>



<style>
.mb-2{
    margin-bottom:30px;
}

.center-div{
    text-align: center;
}

    .profile-container {
    position: relative;
    top: 100px;
    /* text-align: center; Center the child elements horizontally */
}

.profile-pic{
    
}

.profile-pic img {
    /* display: block; Make the image a block-level element */
    margin: 0 auto; /* Center the image horizontally */
    width: 100%;
}

.member-data{
    margin: 50px 200px;
}

</style>
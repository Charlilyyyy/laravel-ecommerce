@include('layout.header')

<div class="row" style="position:relative;top:100px">
    <div class="col-3"></div>
    <div class="col-6">
        <div class="card">
            <form role="form" method="post" action="{{ route('changed-password') }}" class="validation" data-cc-on-file="false" id="change-password-form">
            @csrf
                <div class="card-header">
                    Change Password
                </div>
                <div class="card-body">
                    <div class="row">
                        <label class="col-3" for="first-name">New Password: </label>
                        <input name="password" class="col-8" type="password" placeholder="Please enter your new password" required/>
                    </div>
                    <div class="row mt-4">
                        <label class="col-3" for="first-name">Confirm Password: </label>
                        <input name="password_confirmation" class="col-8" type="password" placeholder="Please confirm your new password" required/>
                    </div>
                </div>
                <button type="submit" class="btn btn-success">Change password</button>
            </form>
        </div>
    </div>
    <div class="col-3"></div>
</div>


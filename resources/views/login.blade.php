@include('layout.header')


    <!-- <div class="container"> -->
        <div class="left-div">
            <div class="l">
                <p>hnjm</p>
            </div>
        </div>
        <div class="right-div">
            <div class="container">
                <div class="logo">
                    <a href="/"><img src="logo.png" alt="Logo"></a>
                </div>
                <div class="header-w-desc">
                    <h5>Charlie laravel ecommerce solution providing digital solution for your products.</h5>
                    <p>Sign in to your account</p>
                </div>
                <div class="sign-in-form">
                    <form role="form" method="post" action="{{ route('loggedIn') }}" class="validation" data-cc-on-file="false" id="signup-form">
                    @csrf
                        <div class="input-request">
                            <div class="email-input input-text mb-2" style="width:100%">
                                <input type="text" placeholder="Email *" name="email"/>
                            </div>
                            <div class="password-input input-text mb-2">
                                <input type="text" placeholder="Password *" name="password"/>
                            </div>
                        </div>
                        <div class="signin-button">
                            <button type="submit">Sign In</button>
                            <button style="background-color:red; font-size:13px" type="button">Forgot password ?</button>
                        </div>
                    </form>
                </div>
                <div class="other-opt mt-after">
                    <a href="/register" class="create-account"><p>Don't have an account yet? Create acount here</p></a>
                </div>
            </div>
        </div>
        

    <style scoped>
       body {
    margin: 0;
    padding: 0;
    display: flex;
    
}

.mt-after{
    margin-top: 80px
}

.other-opt{
    width: 88%;
    margin-left:22px
}

.create-account{
    display: inline-block;
    /* padding:  20px; */
    /* margin-left:25px */
    border: 1px solid #ccc;
    border-radius: 5px;
    background-color: #708090;
    color: #333;
    text-decoration: none;
    font-weight: bold;
    width:88%
}
.create-account p{
    margin-left:30px
}



.left-div {
    flex: 65;
    background-color: #f2f2f2;
    height: 100vh; 
    /* padding: 20px; */
    /* display: flex;
    align-items: center;
    justify-content: center;
    po */
    /* position: relative;
    top: 100px */
    
}

.l{
    position: relative;
    top: 100px
}

.right-div {
    flex: 35;
    background-color: #ccc;
    height: 100vh;
    padding:3vh /* Full viewport height */
    /* display: flex;
    align-items: center;
    justify-content: center; */
}

.container {
    /* display: flex;
    align-items: center;
    justify-content: center;
    height: 100vh */
    position: relative;
    top: 130px;
    left: 4vh
}

/* .logo{
    position: relative;
    top: 130px;
    left: 5vh
} */
.input-request{
    width:88%;
    /* padding-right:30px */
}

.input-text input{
    width: 100%;
    padding: 20px;
    /* margin-right:50px; */
    border: 1px solid #ccc;
    border-radius: 5px;
    box-sizing: border-box; /* Include padding and border in width calculation */
}

.signin-button{
    width:88%;
}

/* .signin-button button{
    width:100%;
    padding:15px;
    border: 1px solid #ccc;
    border-radius: 5px;
    box-sizing: border-box; 
    color:white;
    background-color: #00CC99;
    font-size:1rem;
} */



.signin-button button {
    width: 100%;
    padding: 15px;
    border: 1px solid #ccc;
    border-radius: 5px;
    box-sizing: border-box;
    color: white;
    background-color: #00CC99;
    font-size: 1rem;
    position: relative; /* Add position relative to the button's container */
}

.signin-button button::after {
    content: '';
    display: block;
    width: 100%;
    height: 1px;
    background-color: #308070;
    position: absolute;
    bottom: -50px; /* Adjust the value to control the distance of the line from the button */
    left: 0;
}


.logo img {
    width: 80px; /* Adjust logo size as needed */
    
}

.mb-2{
    margin-bottom: 1rem;
}

.header-w-desc h5{
    font-size: 1.25rem;
    margin-bottom: 0.5rem!important;
    margin-top: 0;
    font-weight: 500;
    line-height:1.2;
}

.header-w-desc p{
    margin-bottom: 1rem
}

/* .container {
    display: flex;
    position: relative;
    top: 100px;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

.styled-form {
    background-color: white;
    border-radius: 10px;
    padding: 20px;
    box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.1);
    width: 300px;
}

.form-group {
    margin-bottom: 20px;
}

.form-group label {
    display: block;
    font-weight: bold;
    margin-bottom: 5px;
}

.form-group input {
    width: 93%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

button {
    background-color: #333;
    color: white;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
} */

    </style>

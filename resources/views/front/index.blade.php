<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>K</title>
   
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>K</h1>

    <div class="login-wrap">
        <div class="login-html">
            <input id="tab-1" type="radio" name="tab" class="sign-in" checked>
            <label for="tab-1" class="tab">Sign In</label>
            <input id="tab-2" type="radio" name="tab" class="sign-up">
            <label for="tab-2" class="tab">Sign Up</label>
            <div class="login-form">
                
                <!-- Sign In Form -->
                <div class="sign-in-htm">
                    <div class="group">
                        <label for="user-signin" class="label">Username</label>
                        <input id="user-signin" type="text" class="input">
                    </div>
                    <div class="group">
                        <label for="pass-signin" class="label">Password</label>
                        <input id="pass-signin" type="password" class="input">
                    </div>
                    <div class="group">
                        <input id="check-signin" type="checkbox" class="check" checked>
                        <label for="check-signin"><span class="icon"></span> Keep me Signed in</label>
                    </div>
                    <div class="group">
                        <input type="submit" class="button" value="Sign In">
                    </div>
                    <div class="hr"></div>
                    <div class="foot-lnk">
                        <a href="#forgot">Forgot Password?</a>
                    </div>
                </div>
                
                <!-- Sign Up Form -->
                <div class="sign-up-htm">
                    <div class="group">
                        <label for="user-signup" class="label">Username</label>
                        <input id="user-signup" type="text" class="input">
                    </div>
                    <div class="group">
                        <label for="pass-signup" class="label">Password</label>
                        <input id="pass-signup" type="password" class="input">
                    </div>
                    <div class="group">
                        <label for="repeat-pass" class="label">Repeat Password</label>
                        <input id="repeat-pass" type="password" class="input">
                    </div>
                    <div class="group">
                        <label for="email-signup" class="label">Email Address</label>
                        <input id="email-signup" type="text" class="input">
                    </div>
                    <div class="group">
                        <input type="submit" class="button" value="Sign Up">
                    </div>
                    <div class="hr"></div>
                    <div class="foot-lnk">
                        <label for="tab-1">Already Member?</label>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>

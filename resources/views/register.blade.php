<form method="post" action="{{route("post.register")}}">
    @csrf

    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            background-color: rgba(0,0,0,0.4);
        }

        * {
            box-sizing: border-box;
        }

        /* Add padding to containers */
        .container {
            padding: 16px;
            background-color: white;
        }

        /* Full-width input fields */
        input[type=text], input[type=password] {
            width: 100%;
            padding: 15px;
            margin: 5px 0 22px 0;
            display: inline-block;
            border: none;
            background: #f1f1f1;
        }

        input[type=text]:focus, input[type=password]:focus {
            background-color: #ddd;
            outline: none;
        }

        .signin {
            background-color: #f1f1f1;
            text-align: center;
        }

        /* Overwrite default styles of hr */
        hr {
            border: 1px solid #f1f1f1;
            margin-bottom: 25px;
        }

        /* Set a style for the submit button */
        .registerbtn {
            background-color: #4CAF50;
            color: white;
            padding: 16px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 100%;
            opacity: 0.9;
        }

        .registerbtn:hover {
            opacity: 1;
        }

        /* Add a blue text color to links */
        a {
            color: dodgerblue;
        }

        /* Set a grey background color and center the text of the "sign in" section */
        .signin {
            background-color: #f1f1f1;
            text-align: center;
        }
    </style>
    <div class="form-control">
        <h1>Register</h1>
        <p>Please fill in this form to create an account.</p>
        <hr>
        <label ><b>Username</b></label>

        <input type="text" placeholder="Enter User" name="name" class="form-control">

        <label><b>Email</b></label>
        <input type="text" placeholder="Enter Email" name="email" class="form-control">

        <label><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="password" class="form-control">

        <button type="submit" class="registerbtn">Register</button>

        <p>By creating an account you agree to our Terms & Privacy.</p>



        <div class="container signin">
            <p>Already have an account? <a href="login">Login</a>.</p>
        </div>
    </div>
</form>


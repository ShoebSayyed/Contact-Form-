<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            font-family: sans-serif;
            box-sizing: border-box;
        }

        #form::before {
            content: "";
            position: absolute;
            top: 0;
            right: 0;
            background: url('bg.jpeg') no-repeat center center/cover;
            height: 44rem;
            width: 100%;
            z-index: -1;
        }

        .image1 {
            width: 18rem;
            height: 15rem;
            margin-top: -3rem;
            margin-left: 3rem;

        }

        .para1 {
            font-size: 1.5rem;
            font-weight: 500;

        }

        .para2 {
            color: darkgray;
        }

        .left {
            width: 25rem;
            height: 27rem;
            background-color: white;
            border: 5px whitesmoke;
            border-radius: 0.1rem;
            box-shadow: 2rem lightgray;
            margin-left: 25rem;
            margin-top: 9rem;
        }

        .right {
            width: 20rem;
            height: 27rem;
            background-color: #031C41;
            color: rgb(0, 204, 204);
            margin-left: 50rem;
            margin-top: -27rem;
        }

        input {
            background-color: #463D3D;
            color: whitesmoke;
            width: 16rem;
            height: 3rem;
            padding-left: 2rem;
            margin-left: 2rem;
            margin-top: 0.5rem;
            border-radius: 0.5rem;

        }

        .button {
            background-color: rgb(0, 204, 204);
            width: 16rem;
            height: 3rem;
            margin-top: 1rem;
            margin-left: 2rem;
        }

        .para4 {
            color: lightgray;
            font-size: 0.8rem;

        }
    </style>
</head>

<body>
    <form action="Index2.php" method="POST">
        <Section Id="form">
            <div class="container">
                <div class="left">
                    <pre class="para1">

         Get Everything You Need
         For Creating WordPress
                     Websites
                    </pre>
                    <img src="illustration.png" class="image1">
                    <pre class="para2">
                All-in-one Multifunctional Subscribe
           Service Perfect for Launching All Kinds Of 
                            WordPress Projects!
                    </pre>
                </div>
                <div class="right">
                    <pre class="para3">                                                                    X                                                        
        SUBSCRIBE AND GET
         YOUR BONUS!
                </pre>
                    <input type="email" placeholder="Email address" name="email" required>
                    <input type="text" placeholder="First Name" name="firstname" required>
                    <input type="text" placeholder="Last Name" name="lastname" required>
                    <input type="text" placeholder="Address" name="address" required>
                    <button type="submit" class="button">
                        STAY UPDATED
                    </button>
                    <pre class="para4">

               🔒  Your information will never be 
                       shared with any third party.
                    </pre>
                </div>
            </div>
        </Section>
    </form>
</body>

</html>
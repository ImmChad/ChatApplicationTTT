<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In Form</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    
    <div class="wrapper">
        <section class="form login">
            <header>Realtime Chat Apps</header>
            <form action="#">

                <div class="error-txt">This is an error message!</div>
               
                <div class="field input">
                    <label>Email Address</label>
                    <input type="text" placeholder="Enter your email ">
                </div>
                <div class="field input">
                    <label>Password</label>
                    <input type="password" placeholder="Enter your password">
                    <i class="fas fa-eye"></i>
                </div>
                
                <div class="field button">
                    <input type="submit" value="Continue to Chat">
                </div>
            </form>
            <div class="link">Not yet signed up?
                <a href="#">Signup now</a>
            </div>
        </section>
    </div>


    <script src="js/pass-show-hide.js"></script>
</body>
</html>
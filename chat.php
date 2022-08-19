<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat Form</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>

    <div class="wrapper">
        <section class="chat-area">
            <header>
                <a href="#" class="back-icon">
                    <i class="fas fa-arrow-left"></i>
                </a>
                <img src="utthi.png" alt="">
                <div class="details">
                    <span>Ut Thi</span>
                    <p>Active now</p>
                </div>
            </header>
            <div class="chat-box">
                <div class="chat outgoing">
                    <div class="details">
                        <p>Chao Thi, to thich thi tu lau roi.</p>
                    </div>
                </div>
                <div class="chat incoming">
                    <img src="utthi.png" alt="">
                    <div class="details">
                        <p>Hello Tung dep trai, I like u, to thich cau mat roi, cu the yeu mat thoi.</p>
                    </div>
                </div>
            </div>
            <form action="#" class="typing-area">
                <input type="text" placeholder="Type a message here...">
                <button><i class="fa-brands fa-telegram"></i></button>
            </form>

        </section>
    </div>



</body>

</html>
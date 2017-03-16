<html>
<head>
    <link rel="stylesheet" href="CSS/main.css">
</head>
<body>
<div class="container">
    <h3 class="text-center">SendGrid E-mail Tutorial</h3>

    <div class="col-md-4 col-md-offset-4">
        <div class="form-holder">
            <!--Form-->
            <form action="SendGrid-API/send-email.php" method="post">
                <div class="form-group">
                    <input type="text" class="form-control" name="name" placeholder="name">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="email" placeholder="email">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="message" placeholder="message">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>
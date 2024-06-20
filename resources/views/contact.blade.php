<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/contact.css')}}">
    
</head>
<body>
    <div class="Wrapper">
        <h2>CONTACT US</h2>

        <form action="" method="post">
            <div class="form-group">
                <label for="">Full Name</label>
            <input type="text">
            </div>
            <div class="form-group">
                <label for="">Email Addres</label>
            <input type="text">
            </div>
            <div class="form-group">
                <label for="">Message</label>
                <textarea name="" id="" rows="5" placeholder="type your message here..."></textarea>
            <!-- <input type="text"> -->
            </div>

            <div class="form-group">
                <button type="submit" class="submit">Send Message</button>
                <a href="/about" class="read-more">Back</a>
            </div>
        </form>
    </div>
    
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
     <title> Contact</title>
    <style type="text/css">
        body{
            background-image: url("yellow.jpg");
            margin:10px;
            padding: 10px;
            height: 100vh;
            background-size: cover;
            background-position: center;
        }
        .contact-form{
            width: 85%;
            max-width: 600px;
            background-color:darkgrey;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            padding: 30px 40px;
            box-sizing: border-box;
            border-radius:8px;
            text-align: center;
            box-shadow: 0 0 20px blue;
        }
        .contact-form h1{
            margin-top: 0;
            font-weight: 200;

        }
        .txtb {
            border: 1px solid grey;
            margin: 8px 0;
            padding: 12px 18px;
            border-radius: 8px;
        }

        .txtb label{
            display: block;
            text-align: left;
            color:black;
            text-transform: uppercase;
            font-size: 14px;
        }
        .txtb input ,.txttb textarea{
            width: 100%;
            border: none;
            background: none;
            outline: none;
            font-size: 18px;
            margin-top: 6px;
        }
        .submit input{
            padding: 14px 0;
           /* text-transform: uppercase;*/
            cursor: pointer;
            margin-top: 8px;
            width: 100%;
            font-size: 20px;
            letter-spacing: 2px;
            height: 50px;
            color:black ;
            background-color:dimgray;
            font-family: "Calibri";

        }
    </style>
</head>
<body>
    <a href="sonyxart.php">Back</a>
    <form action="action.php" method="post"
    <div class="contact-form">
    <h1>Contact me</h1>
        <div class="txtb">
             <label>Name:</label>
            <input type="text" name="name" value="" placeholder="Enter your name">
         </div>
        <div class="txtb">
          <label>Email:</label>
         <input type="email" name="email" value="" placeholder="Enter your email">
        </div>
        <div class="txtb">
            <label>Message:</label>
             <textarea name="message"></textarea>
        </div>
         <div class="submit">
             <input type="submit" value="Sent">
         </div>
    </div>
    </form>
</body>
</html>



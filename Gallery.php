<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> MY ART</title>
    <style type="text/css">
        * {
            box-sizing: border-box;
        }
        .column {
            float: right;
            width: 33.33%;
            padding: 5px;
        }
        .row: after {
            content: "";
            clear: both;
            display: table;
        }
        body{
            background-image: url("yellow.jpg");
            margin:10px;
            padding: 10px;
            height: 100vh;
            background-size: cover;
            background-position: center;
        }
        .title{
            font-family: "Arial Black";
            color: cornflowerblue;
        }
    </style>
</head>
<body>
    <a href="sonyxart.php">Back</a>
    <div class="row">
        <div class="column">
            <img src="rabbit.JPG" alt="sea" style="width:80%">
            <div class="title">#Follow the white rabbit</div>
        </div>
        <div class="column">
            <img src="picture.jpg" alt="sea" style="width:80%">
            <div class="title">#Whale</div>
        </div>
        <div class="column">
            <img src="picture1.jpg" alt="sea" style="width:80%">
            <div class="title">#Octopus</div>
            <div class="row">
                <img src="jelly.jpg" alt="sea" style="width:80%">
                <div class="title">#Jelly-fish</div>
        </div>
    </div>
</body>
</html>

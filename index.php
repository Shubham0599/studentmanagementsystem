<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body><a class="adminpanel" href="login.php">Admin Panel</a>
    <div class="head">
        <h1>
        SMS
        </h1>

    </div>
    <div class="container">

        <div class="preview">
            <img src="image/bgindex.jpg" alt="img not found"/>

              <form class="form" action="displaystudent.php" method="post">
                <input placeholder="Standard" name="std" type="number"/>
                <input placeholder="Roll No" name="rollno" type="number"/>
                <input class="sub" type="submit" name="submit" value="show info">
              </form>

        </div>
        <div class="student"></div>
    </div>
    <style>
    .head{
      width:100%;
      text-align: center;
    font-size: 30px;
    font-weight: bolder;
    font-family: sans-serif;


    }
    .adminpanel{
      position: absolute;
      right:10px;
    font-size: 16px;
    font-weight:200;
    font-family: sans-serif;

    }
        body{
            background-color: rgb(137, 238, 216);
        }
        .container{
            margin:0 100px;

            background-color: rgb(231, 248, 167);
            box-shadow: blue;
        }
        .preview{
            display:flex;
            justify-content: center;

        }
        img{
            width:50%;
            margin:20px;
            height:500px;;
            border:1px solid blue;
        }
        .form{display:flex;
        width:35%;
        margin:10px;
            flex-direction:column;
            justify-content: center;
            align-items:center;
            background-image: linear-gradient(lightgreen,orange);
        }
        .new{
          height: inherit;
          width:inherit;
        }
        input{

            background: transparent;
            width:300px;
            border: 2px solid blue;
            padding:10px;
            border-radius:30px;
            margin:10px auto;
            outline: none;
        }
        .sub{
            background-color: blue;
            color:white;
            font-weight: 500;
            font-family: cursive;
            align-self:center;
            cursor:pointer;
        }
    </style>

</body>
</html>

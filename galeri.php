<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tas Bloods</title>
    <style>
body {
    background: linear-gradient(to right, #EECAD5, #D1E9F6 );
  font-family: 'Trebuchet MS';
  color: black;
  margin-right: ;
  text-align:center;
  margin: 10px;
  padding: 10px;
}
        header {
            background-color: #e53935;
            color: #fff;
            padding: 10px 0;
            text-align: center;
        }
        .container {
            width: 80%;
            margin: auto;
            overflow: hidden;
        }
        .main-content {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }
        .bag {
            background-color: white;
            border: 1px solid #ddd;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin: 10px;
            padding: 20px;
            flex: 1;
            max-width: 30%;
            text-align: center;
        }
        .bebek {
            background-color: black; 
            text-decoration:none;
            text-align:center;
            border: 1px solid #ddd;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin: 10px;
            padding: 10px;
            flex: 1;
        }
        .bag img {
            max-width: 100%;
            height: auto;
            border-bottom: 1px solid #ddd;
            margin-bottom: 10px;
        }
        .bag h2 {
            font-size: 1.5em;
            margin: 0 0 10px;
        }
        .bag p {
            font-size: 1em;
            color: #555;
        }
        footer {
            background-color: #e53935;
            color: #fff;
            text-align: center;
            padding: 10px 0;
            position: absolute;
            width: 100%;
            bottom: 0;
        }
    </style>
</head>
<body>
<h1 sytle = "text-align: center;">My Gallery</h1>
    <div class="container main-content">
        <div class="bag">
            <img src="zeniki.jpg" alt="">
        </div>
        <div class="bag">
            <img src="zeniki.jpg" alt="">
        </div>
        <div class="bag">
            <img src="zeniki.jpg" alt="">
        </div>
    </div>
    <br>

    <a href="home.php" class="bebek">Kembali Ke Home</a>
</body>
</html>

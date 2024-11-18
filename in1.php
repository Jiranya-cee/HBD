<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HappyBDay</title>
    <style>
        body {
            font-family: 'Serif';
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color:white;
        }
        .container {
            text-align: center;
        }
        button {
            background-color: #FF3399;
            color: white;
            font-size: 30px;
            padding: 10px 20px;
            border: 3px solid pink; 
            border-radius: 20px;
            cursor: pointer;
            transition: background-color 0.3s, border-color 0.3s;
        }
        button:hover {
            border-color: #ff66b2; 
        }  
        img {
            width: 400px;
            margin-bottom: 20px;
            transition: all 0.3s ease;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>ไม่มีไร ถามเฉยๆ 555+ </h1>
        <img id="cute-image" src="น่ารัก2.gif" alt="ภาพที่น่ารัก" />
        <h1>ตัวเองเค้ามีอะไรจะบอกด้วยนะ..</h1>
        <form action="in2.php" method="get">
            <button type="submit">จิ้มตรงนี้สิ</button>
        </form>
    </div>
</body>
</html>


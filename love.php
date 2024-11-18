<!DOCTYPE html>
<html lang="th">
<head>
<link rel="icon" href="หัวใจ.png" type="หัวใจ"> 

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HappyBDay</title>
    <style>
        body {
            font-family: Serif;
            text-align: center;
            margin-top: 50px;
        }

        h1 {
            font-size: 50px;
            margin-bottom: 20px;
        }

        img {
            width: 400px;
            margin-bottom: 20px;
            transition: all 0.3s ease;
        }

        .button-container {
            display: flex;
            justify-content: center;
            gap: 20px;
        }

        .button {
            padding: 15px 25px;
            font-size: 18px;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .button.no {
            background-color: 	#990066;
            color: white;
            font-size: 30px;
            padding: 10px 20px;
            border: 3px solid red; 
            border-radius: 20px; 
            cursor: pointer;
            transition: background-color 0.3s, border-color 0.3s;
        
        }

        .button.yes {
            background-color: #FF69B4;
            color: white;
            font-size: 30px;
            padding: 10px 20px;
            border: 3px solid 	#FF00CC;
            border-radius: 20px; 
            cursor: pointer;
            transition: background-color 0.3s, border-color 0.3s;
        }
        .button.deny {
            background-color:	#990000;
            color: white;
            font-size: 40px;
            padding: 10px 20px;
            border: 3px solid 	red; 
            border-radius: 20px; 
            cursor: pointer;
            transition: background-color 0.3s, border-color 0.3s;
        
        }

        .button:hover {
            opacity: 0.8;
        }
    </style>
    <script>
       
        function changeImageOnHoverNo() {
            document.getElementById('cute-image').src = 'ทุบ.gif';
        }

        function revertImageNo() {
            document.getElementById('cute-image').src = 'น่ารัก2.gif';
        }

        function changeImageOnHoverYes() {
            document.getElementById('cute-image').src = 'รัก.gif';
        }

        function revertImageYes() {
            document.getElementById('cute-image').src = 'น่ารัก2.gif';
        }

    </script>
</head>
<body>
    <h1>ตัวเองรักเค้ามั้ยคะ ?</h1>
    <img id="cute-image" src="น่ารัก2.gif" alt="ภาพที่น่ารัก" />

    <div class="button-container">
        <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $answer = $_POST['answer'];

            if ($answer == 'no') {
                echo '<form action="" method="post">';
                echo '<button class="button deny" type="submit" name="answer" value="deny">รักกกกกกกกกกกกกก!!!!</button>';
                echo '</form>';
            } elseif ($answer == 'yes' || $answer == 'deny') {
                header("Location: in1.php");
                exit;
            }
        } else {
            echo '<form action="" method="post">';
            echo '<button class="button no" type="submit" name="answer" value="no" onmouseover="changeImageOnHoverNo()" onmouseout="revertImageNo()">ไม่</button>';
            echo '</form>';
            echo '<form action="" method="post">';
            echo '<button class="button yes" type="submit" name="answer" value="yes" onmouseover="changeImageOnHoverYes()" onmouseout="revertImageYes()">รักกก</button>';
            echo '</form>';
        }
        ?>
    </div>
</body>
</html>
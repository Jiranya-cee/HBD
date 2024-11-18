<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HappyBDay</title>
    <style>
      body {
            font-family: 'Serif';
            text-align: center;
            margin-top: 10px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 80vh;
            margin: 0;
        }
        h1 {
            opacity: 0;
            transition: opacity 1s;
        }
        h2 {
            font-size: 70px;
            opacity: 0;
            transition: opacity 1s;
        }
        img {
            transition: opacity 1s;
            display: none;
            margin-top: 20px;
            max-width: 100%;
            height: 200px;
        }
    </style>
</head>
<body>
    <h2 id="line1">🇭‌🇦‌🇵‌🇵‌🇾‌ 🇧‌🇮‌🇷‌🇹‌🇭‌🇩‌🇦‌🇾‌ 🇹‌🇴‌ 🇾‌🇴‌🇺‌✨🎉</h2>
    <h1 id="line2">สุขสันต์วันเกิดนะคะที่รัก ขอให้มีความสุขมากๆ</h1> 
    <h1 id="line3">คิดหวังสิ่งใดขอให้สมปรารถนา รวยๆ เฮงๆ ,</h1> 
    <h1 id="line4">อยู่ด้วยกันไปนานๆนะ อิอิ 🇭‌🇦‌🇻‌🇪‌ 🇦‌ 🇬‌🇴‌🇴‌🇩‌ 🇩‌🇦‌🇾‌ 🇳‌🇦‌🩷✨</h1>

    <img id="cute-image" src="เค้ก.gif" alt="ภาพที่น่ารัก" />

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const lines = [
                 document.getElementById("line1"),
                document.getElementById("line2"),
                document.getElementById("line3"),
                document.getElementById("line4")
            ];

  
            lines.forEach((line, index) => {
                setTimeout(() => {
                    line.style.opacity = 1;
                }, index * 2800); 
            });

            setTimeout(() => {
                document.getElementById("cute-image").style.display = 'block';
            }, lines.length * 2800);
        });
    </script>
</body>
</html>

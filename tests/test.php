<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .homme{
            position: relative;
            border: 2px solid;
            width: 100px;
            height: 100px;
            border-radius: 50%;
            background: black;
        }

        .trace{
            margin: auto;
            margin-top:1em;
            width: 50px;
            height: 4px;
            background: red;
        }
    </style>
</head>
<body>
    <div class="homme">
    <p class="trace"></p>
    </div>
</body>
<script>
    let boy = document.querySelector('.homme');
    let dot = document.querySelector('.trace');
    var increaseWidth = 10;
    document.body.addEventListener('keydown',function(e){
        boy.style.transition = "all 0.2s ease-in";
        dot.style.transition = "all 0.2s ease-in";
    
        if(e.key == "ArrowUp"){
            dot.style.transform+="rotate(90deg)"
            boy.style.transform+="translateY(-30px)"
        }

        if(e.key == "ArrowDown"){
            dot.style.transform+="rotate(-90deg)"
            boy.style.transform+="translateY(30px)"
        }
    })
</script>
</html>
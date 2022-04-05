<?php
    $number = rand(1,20);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post" id="form">
    <input type="number" id="text">
    <input type="number" id="box" value="<?= $number ?>" disabled>
    <input type="submit" value="Ok" id="ok">
    <p id="area"></p>
    </form>
</body>
<script src="jquery.js"></script>
<script>
    document.querySelector("#box").style.opacity=1;
    let i = 0
    $(document).ready(function(){
        $('#ok').click(function (e) {
            console.log($('#box').val())
            e.preventDefault();
            if ($('#text').val()<$('#box').val()) {
                alert ("C'est plus");
                i++
                $("#area").html("<p style='color:red'>"+$("#text").val()+"</p>")
            }else if($('#text').val()>$('#box').val()){
                alert ("C'est Moins");
                i++
                $("#area").html("<p style='color:red'>"+$("#text").val()+"</p>")
            }else{
                alert ("Félicitation");
                $("#area").html("<p style='color:green'>"+$("#box").val()+"</p>")
                setTimeout(function() {window.location.reload()},1000)
            }

            if(i>=5){
                alert("PARTIE TERMINEE");
                setTimeout(function() {window.location.reload()},01)
            }
            
        })

    })
</script>
</html>
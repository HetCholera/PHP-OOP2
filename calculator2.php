<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="">
</head>
<body>
    <?php 
      include "calculator.php"; 
    ?>
    <form action="ans.php">
       <div>
           <input type="text" placeholder="enter first value"><br>
           <input type="text" placeholder="enter second value">
       </div>
       <!-- <div>
           <input type="button" name="submit" value="submit">
           <input type="button" name="reset" value="reset"> -->
       <!-- </div> -->
       <div>
           <button onclick="addition()">addition</button>
           <button onclick="subtraction()">subtraction</button>
           <button onclick="multiplication()">multiplication</button>
           <button onclick="division()">division</button>
       </div>
    </form>
</body>
</html>
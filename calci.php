<?php
   require("calculator.php");
?>
<html>
    <head>
        <title>Calculator in php</title>
</head>
    <body>
        <?php
        $num1=10;
        $num2=25;
        $operator="+";
        $calculator=new calculator();
        $calculator->setNum($num1,$num2);
        $calculator->setoperator($operator);
        $calculator->calculate();
       echo $num1." ".$operator." ".$num2."=".$calculator->getoutput();
        ?>
       </body>
</html>
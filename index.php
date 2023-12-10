<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lap 1</title>
</head>
<body>
    <?php
    echo "Welcome to php";
   echo"<br>";
    print "welcome to php";
    $x=5;
    $y="Welcome ";
    $z=True;
    echo $x."<br>".$y."<br>".$z."<br>";
    echo gettype($x)."<br>";
    echo gettype($y)."<br>";
    echo gettype($z)."<br>";
    for($i=0;$i<=15;$i++)
    {
        echo "$i","<br>"; 
    }
    $i=0;
    while($i<16)
    {
        echo "$i"."<br>";
        $i++;
    }
    define ('X','ITI');
    echo "X"."<br>";
    const Y="ITI";
    echo "Y"."<br>";
    $m=5;
    $n=10;
    $result=$n+$m;
    if($result>50)
    {
        echo "Accept"."<br>";
    }
    else
    {
        echo "NOt Accept"."<br>";
    }
    function anyToString($name)
    {
        $z;
        $z=(string)$name;
        echo "<br>";
        return gettype($z);
    }
    echo anyToString(5);

    $A="1000$";
    $B="1200$";
    $C="1400$";
    ?>
  <table border=1>
        <tr>
            <td><?php echo"Salary of MR.A"?></td>
            <td><?php echo $A?></td>
        </tr>
        <tr>
        <td><?php echo"Salary of MR.B"?></td>
            <td><?php echo $B?></td>
        </tr>
        <tr>
        <td><?php echo"Salary of MR.C"?></td>
            <td><?php echo $C?></td>
        </tr>
    </table>
    <?php
    ?>
</body>
</html>
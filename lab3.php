<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lap 4</title>
</head>
<body>
    <?php
    /*****************addshashes****************** */
    $char="Aya ' oraby";
    echo addslashes($char)."<br>";
    /*****************replace************** */
    $vowels = array("a", "e", "i", "o", "u", "A", "E", "I", "O", "U");
    $onlyconsonants = str_replace($vowels, "/", "Hello World I am Aya ");   
    echo $onlyconsonants."<br>";  
    $constant="you should study and work";
    $good=array("study","work");
    $bad=array("play","eat");
    $newconstant=str_replace($good,$bad,$constant);
    echo $newconstant."<br>"; 
    /***************count string************ */
    $text = 'This is a test';
    echo strlen($text)."<br>";
    /**********************wrap string****** */
    $text = "Today is the nice day because we in the winter .";
    $newtext = wordwrap($text, 15, "<br>");
    echo $newtext."<br>";
    /*********upper case first character******* */
    $foo = 'hello world!';
    $foo = ucfirst($foo)."<br>";


    /**********array_unique****** */
    $input = array( "green", "red",  "green", "blue", "red");
    $result = array_unique($input);
    foreach($result as $in)
    {
        echo $in."<br>";
    }
    /************sum an array ************** */
    $arr=[1,2,3,4,5];
    $sum=array_sum($arr);
    echo $sum ."<br>"; 
    /*****************rang array*************/
    $numbers = range(1, 15);
    foreach($numbers as $number)
    {
        echo $number ."<br>";
    }
    /*****************resort array in defferent way every time*************/
    $numbers = range(1, 15);
    shuffle($numbers);
    foreach ($numbers as $number) {
        echo "$number "."<br>";
    }
    /**********************list array**************/
    $info = array('coffee', 'brown', 'caffeine');
    list($drink, $color, $power) = $info;
    echo "$drink is $color and $power makes it special.\n";
    ?>
    <?php 
    function is_required($input){
        if(empty($input)){
            echo "error";
        }else{
            echo $input;
        }
    }
    echo "<br>";
    is_required(htmlspecialchars(strip_tags(trim($_POST['fname']))));

    ?>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']?>">
        <label for=""> First Name</label>
        <input type="text" name="fname">
        <label for=""> Last Name</label>
        <input type="text" name="lname">
        <input type="submit" value="ok">
    </form>

</body>
</html>

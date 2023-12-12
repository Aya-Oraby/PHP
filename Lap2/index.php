<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Lap 2</title>
    </head>
    <body>
    <?php
require_once "header.php";
require_once "nav.php";
?>
       <?php
       /***************Creat array*******************/
       $users=["PHP", "HTML", "CSS", "JavaScript"];
       foreach($users as $user)
       {
           echo $user."<br>";
       }
       echo "<hr>";
       $count=count($users);
       for($i=0;$i<$count;$i++){
       echo $users[$i]."<br>"; 
        }
        /*******************Creat table**********************/
        $info=["Name"=>"Aya","Age"=>"25","Email"=>"ayaoraby2019@gmail.com","Collage"=>"Al-Azher"];
       ?>
       <hr>
       <table border=1>
             <tr>
            <td><?php echo"Name"?></td>
            <td><?php echo $info["Name"]?></td>
            </tr>
            <tr>
                <td><?php echo "Age" ?></td>   <td><?php echo $info["Age"] ?></td>
            </tr>
            <tr>
                <td><?php echo "Email" ?></td>   <td><?php echo $info["Email"] ?></td>
            </tr>
            <tr>
                <td><?php echo "Collage" ?></td>   <td><?php echo $info["Collage"] ?></td>
            </tr>
       </table>
       <?php
       /***********************Creat form*********************/
       ?>
       <hr>
       <form class="row" method="post" action="data.php">
       <div class="mb-3 col-4">
         <label for="">First Name</label>
         <input type="text" name="fname">
       </div>
       <br>
       <div>
         <label for="">Last Name</label>
         <input type="text" name="lname">
       </div>
       <br>
       <div>
         <label for="">Address</label>
         <textarea name="Address" id="" cols="30" rows="10"></textarea>
       </div>
       <br>
       <div>
       <label for="">Country</label>
          <select  id="" name="country">
                <option value="Egypt">Egypt</option>
                <option value="USA">USA</option>
                <option value="KSA">KSA</option>
          </select>
       </div>
       <br>
       <div>
            <label for="">Gender</label>
            <input type="radio" name="gender" value="femal">Femal
            <input type="radio" name="gender" value="Male">Male
       </div>
       <br>
       <div>
            <label for="">Skills</label>
            <input type="checkbox" name="skills">PHP
            <input type="checkbox" name="skills">HTML
            <input type="checkbox" name="skills">CSS
            <input type="checkbox" name="skills">JS
       </div>
       <br>
       <button type="submit" name="submit" value="Submit">Submit</button>
       </form>
       <?php include("footer.php"); ?>
    </body>
</html>
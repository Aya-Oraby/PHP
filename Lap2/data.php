<?php include("header.php"); ?>
<?php
$form=[
    "First Name" => $_POST['fname'],
    "Last Name" => $_POST['lname'],
    "Address" => $_POST['Address'],
    "country" => $_POST['country'],
    "Gender" => $_POST['gender'],
];
foreach($form as $data=>$value)
{
    echo $data.":".$value."<br>";
}
?>
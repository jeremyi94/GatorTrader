<?php
$search_value=$_POST["search"];
$servername= "sfsuse.com";
$username= "sp17g08";
$password= "csc648sp17g08";
$dbname= "sp17g08";
$con=new mysqli($servername,$username,$password,$dbname);
if($con->connect_error){
    echo 'Connection Faild: '.$con->connect_error;
    }else{
        $sql="SELECT * FROM sp17g08 WHERE category LIKE '%$search_value%'";

        $res=$con->query($sql);

        while($row=$res->fetch_assoc()){
            echo 'Category:  '.$row["category"];
            }       

        }
?>


<?php 
$location="localhost";
$username="root";
$password="";
$database_name="ethioelite";

$link_to_database=mysqli_connect($location,$username,$password,$database_name);
$select_department='SELECT * FROM `department`';
$select_department_qurey=mysqli_query($link_to_database,$select_department);

if($select_department_qurey){
    // $data=mysqli_fetch_assoc($select_department_qurey);
    // $data1=mysqli_fetch_assoc($select_department_qurey);
    // echo '<h1 value="">'.$data1["department_id"].'</h1>';
    // print_r($data);
    // print_r($data1["department_id"]);

    echo '<select name="type" id="type">';
    while($data=mysqli_fetch_assoc($select_department_qurey)){
        $v=$data['department_name'];
         echo '<option value="">'.$data['department_name'].'</option>' ;

}
echo " </select>";
}
?>
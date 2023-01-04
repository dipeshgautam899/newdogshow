<?php
include 'database.php';
if(isset($_POST['submit']))
{
    $dogname = $_POST['dogname'];
	$breedname = $_POST['breedname'];
	$age = $_POST['age'];
	$gender = $_POST['gender'];
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$email = $_POST['email'];
	$number = $_POST['number'];
	$left_view = $_FILES['left_view'];
	$right_view = $_FILES['right_view'];	
	$pay_slip = $_FILES['pay_slip'];
	$id = $_POST['reg_num'];	


	$filename = $left_view['name'];
	$filename2 = $right_view['name'];
	$filename3 = $pay_slip['name'];

	$filepath = $left_view['tmp_name'];
	$filepath2 = $right_view['tmp_name'];
	$filepath3 = $pay_slip['tmp_name'];

	$fileerror = $left_view['error'];
	$fileerror2 = $right_view['error'];
	$fileerror3 = $pay_slip['error'];
	
	
	

	if($fileerror == 0){
		$destfile = 'upload/'.$filename;
		$destfile2 = 'upload/'.$filename2;
		$destfile3 = 'upload/'.$filename3;
		
		
		// echo "$destfile";
		move_uploaded_file($filepath,  $destfile);
		move_uploaded_file($filepath2,  $destfile2);
		move_uploaded_file($filepath3,  $destfile3);

		$insertquery = "insert into booking(dogname, breedname, age, gender, firstname, lastname, email, number, left_view, right_view, pay_slip, reg_num) values('$dogname', '$breedname', '$age', '$gender', '$firstname', '$lastname', '$email', '$number', '$destfile', '$destfile2', '$destfile3', '$reg_num')";

		$query = mysqli_query($con, $insertquery);

		if($query){
			echo "Registered Sucessfully";
		}else{
			echo "Not Inserted";
		}
	}
    


	
}
?>


<?php
$con=mysqli_connect('localhost','root','','register');
$var = 0;
$var += 1;
$querymod = ( "SELECT id FROM table WHERE id = (SELECT MAX(id) FROM table) + 1");
$result = mysqli_query( +$querymod);
$row = mysqli_fetch_array($result);
$var += $row['id'];


?>
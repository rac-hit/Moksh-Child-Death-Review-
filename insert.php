<?phpversion
error_reporting(0);
$link = mysqli_connect("localhost", "root", "", "resgister1"); 
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$name = mysqli_real_escape_string($link, $_REQUEST['name']);
$age = mysqli_real_escape_string($link, $_REQUEST['age']);
$disease = mysqli_real_escape_string($link, $_REQUEST['disease']);
$religion = mysqli_real_escape_string($link, $_REQUEST['religion']);
$category = mysqli_real_escape_string($link, $_REQUEST['category']);

// Attempt insert query execution
$sql = "INSERT INTO details (name,age,disease,category,religion) VALUES ('$name','$age','$disease','$category','$religion')"; //form is the name of table
if(mysqli_query($link, $sql))
{
    echo "Records added successfully.";
} else{
    echo "ERROR." . mysqli_error($link);
}
// Close connection
mysqli_close($link);
?>
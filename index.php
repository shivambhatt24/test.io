<?php
include("connection.php");
error_reporting(0);
?>

<html>
<head>
    <title> TEST </title>
    <link rel="stylesheet" href="styles.css">

 
</head>
<body>
    <div>
        <form method="POST">
        <h4 class="text-warning text-center pt-5">Form Registration Page</h4>  
        <label>     
            <input type="text" class="input" name="name" placeholder="Enter Your Full Name"/>  
                <div class="line-box">          
                <div class="line"></div>        
                </div>    
            </label>     
            <label>     
                <input type="text" class="input" name="divorceid" placeholder="Enter State issued Divorceid"/>  
                <div class="line-box">          
                <div class="line"></div>        
                </div>    
        </label>  
        <button type="submit" name="submit">submit</button>  

        </form>

    </div>    
   
</body>
</html>

<?php
if(isset($_POST['submit']))
{
    $name = $_POST['name'];
    $divid = $_POST['divorceid'];

    if($name!='' && $divid!='')
    {
        $query = "INSERT INTO form1 VALUES('$name', '$divid')";
        $data = mysqli_query($conn,$query);    
    }
    header("Location: divorce2.php");
// if($data)
// {
//     echo("data is inserted into Database.");
// }
// else{
//     echo("Failed to insert data into Database.");
// }

}
?>
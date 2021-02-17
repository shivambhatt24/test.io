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
        <label>  <p style="float:left">Enter Your Birthdate   </p>
            <input type="date" class="input" name="date" placeholder="Enter Your Birthdate"/>  
                <div class="line-box">          
                <div class="line"></div>        
                </div>    
            </label>  
            <label>     
            <input type="text" class="input" name="nationaliy" placeholder="Enter Your nationaliy"/>  
                <div class="line-box">          
                <div class="line"></div>        
                </div>    
            </label>  

            <button type="submit" name="submit"> Next</button>
        </form>

    </div>    
   
</body>
</html>

<?php
if(isset($_POST['submit']))
{
    $dob = $_POST['dob'];
    $nationaliy = $_POST['nationaliy'];

    if($dob!='' && $nationaliy!='')
    {
        $query = "INSERT INTO form2 VALUES('$dob', '$nationaliy')";
        $data = mysqli_query($conn,$query);    
    }
    header("Location: divorce3.php");
// if($data)
// {
//     // echo("data is inserted into Database.");
// }
// else{
//     echo("Failed to insert data into Database.");
// }

}
?>
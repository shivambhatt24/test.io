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
        <label style="float:left" for="maritial_status">maritial status: </label> 
           <section>
            <select  class="input" name="maritial status" id="maritial status" required> 
                <option value="" selected="selected" disabled="disabled">-- select one --</option>
                <option value="Single">Single</option>
                <option value="Married">Married</option>
                <option value="Separated">Separated</option>
                <option value="Divorced">Divorced</option>
                <option value="Widowed">Widowed</option>
                <option value="Prefer not to answer">Prefer not to answer</option>

            </select>
                            <div class="line-box">          
                <div class="line"></div> 
               </br>
            </section>

            <label style="float:left" for="highest_education" >highest education:</label>
           
            <select class="input" id="highest education" name="highest education" required>
                <option value="" selected="selected" disabled="disabled">-- select one --</option>
                <option value="No formal education">No formal education</option>
                <option value="Primary education">Primary education</option>
                <option value="Secondary education">Secondary education or high school</option>
                <option value="GED">GED</option>
                <option value="Vocational qualification">Vocational qualification</option>
                <option value="Bachelor's degree">Bachelor's degree</option>
                <option value="Master's degree">Master's degree</option>
                <option value="Doctorate or higher">Doctorate or higher</option> 
            </select>
                <div class="line-box">          
                <div class="line"></div>  
           <br><br>
            <button type="submit" name="submit"> Submit</button>
        </form>

    </div>    
   
</body>
</html>

<?php
if(isset($_POST['submit']))
{
    $ms = $_POST['maritial_status'];
    $he = $_POST['highest_education'];

    // if($ms!='' && $he!='')
    // {
        $query = "INSERT INTO form3 VALUES('$ms', '$he')";
        $data = mysqli_query($conn,$query);    
    // }
    header("Location: divorce4.php");

// if($data)
// {
//     // echo("data is inserted into Database.");
// }
// else{
//     echo("Failed to insert data into Database.");
// }

}
?>
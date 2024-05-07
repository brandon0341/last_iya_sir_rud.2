<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="/EXAM/CSS/acc.css">
</head>
<body>
    <div class="back">
        <a href="/EXAM/PHP/prof.php"><img class="arr" src="/EXAM/PIC/arrow.png" alt=""></a>
    </div>
    <h1>Account Information:</h1><br>                          
    
    <?php  
$conn = new mysqli("localhost", "root", "", "exam");   //connect to database

if($conn->connect_error) {                      //check connection error
    die("Connection failed: ". $conn->connect_error);  
} 

$sql = "SELECT * FROM register";  // Select all columns from the register table
$result = $conn->query($sql);                       //execute SQL query

echo "<table class='account-table' border='1'>\n";                          //start table
echo "\t<tr>\n";                                     //start first row of table (column names)
echo "\t\t<th>Firstname</th>\n";
echo "\t\t<th>Lastname</th>\n";
echo "\t\t<th>Username</th>\n";
echo "\t\t<th>Mobile_No</th>\n";
echo "\t\t<th>Password</th>\n";
echo "\t\t<th>Confirm Password</th>\n";

while ($row = $result->fetch_assoc()) {             //get each row from the result set and store it as an associ
    echo "\t<tr>\n";                                //start a new row
    echo "\t\t<td>{$row['Firstname']}</td>\n";           // Displaying Firstname
    echo "\t\t<td>{$row['Lastname']}</td>\n";           // Displaying Lastname
    echo "\t\t<td>{$row['Username']}</td>\n";           // Displaying Username
    echo "\t\t<td>{$row['Mobile_No']}</td>\n"; // Displaying Mobile No.
    echo "\t\t<td>{$row['Password']}</td>\n"; // Displaying Password
    echo "\t\t<td>{$row['Confirm Password']}</td>\n"; // Displaying Confirm Password
    echo "\t</tr>\n"; // Added closing tag for table row
}
echo "</table>\n";                                                                   //close table

$conn->close();       
?>   

</body>
</html>

<?php 
    $servername = "localhost"; 
    $username = "devansh"; 
    $password = "CF3as7]G7de]eHS!"; 
    $dbname = "test"; 
        
            // Create connection 
    try {
        $conn = new mysqli($servername, $username, $password, $dbname); 
                // Check connection 
        $user = $_POST['user']="LocalHost"; 
        $amount = $_POST['Amount']; 
        $beneficiary = $_POST['Beneficiary']; 
            
        $sql = "INSERT INTO money (sender,amount,reciver) VALUES ('$user','$amount','$beneficiary')"; 
            
        if(mysqli_query($conn, $sql))
        {
            echo "<script>
            function myFunction() {
              location.replace('success.html')
            }
            myFunction()
            </script>";
            echo ("\n$user\n $amount\n $benificiary");
        } 
        else
        {
            echo "ERROR: Hush! Sorry $sql. " 
                    . mysqli_error($conn);
        }
                    
                    // Close connection
        mysqli_close($conn);
    }
    catch(PDOException $e){
        echo "FAILED";
    }

?>
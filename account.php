<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="account.css">
    <script>
        function play(){
            var v=document.getElementById('v1')
            v.play;
        }
        function pause(){
            var vv=document.getElementById('v1')
            vv.pause;
        }
    </script>
</head>

<body>
    <div class="main">
        <video autoplay muted id="v1" class="Hvideo">
            <source src="account/account.mp4" type="video/mp4">
          </video>
          <header id="Header">
            <div class="logo">
                <img src="Mainpage/logo.png" width=100px height=100px>
            </div>
            <div class="heading">
                <h3>TSF BANK</h3>
            </div>
            <ul>
                <li><a href="Main.html">HOME</a></li>
                <li><a href="about.html">ABOUT</a></li>
                <li><a href="Customer.html">CUSTOMERS</a></li>
                <li><a href="http://localhost/Banking%20Site/transaction.php">TRANSACTIONS</a></li>
                <li><a href="http://localhost/Banking%20Site/account.php">MY ACCOUNT</a></li>
                <li><a href="contact.html">CONTACT US</a></li>
            </ul>
            <div class="imglogo">
                <img src="pay/pay_img.jpg" width="350" height="400">
                <div class="centered">
                    <form action="data.php" method="POST">
                        <label class="head1"><h3>Your ID:LocalHost</label><br><br><br>
                        <label class="head2"><h3>IFSC CODE:HDFC5XX03</h3></label>
                        <br><br><br>
                        <label class="color">Balance: $
                        <?php 
                            $servername = "localhost"; 
                            $username = "devansh"; 
                            $password = "CF3as7]G7de]eHS!"; 
                            $dbname = "test"; 
                            $conn = new mysqli($servername, $username, $password, $dbname);
                            // Check connection
                            if ($conn->connect_error) {
                            die("Connection failed: " . $conn->connect_error);
                            }
                                
                            $sql = "SELECT * FROM money";
                            $result = $conn->query($sql);
                            $a=1000000;
                            $a1=0;
                                
                            if ($result->num_rows > 0) {
                                // output data of each row
                        
                                while($row = $result->fetch_assoc()) {
                                    
                                    $a1=$row["amount"]+$a1;
                                }
                            } 
                            
                            $balance = $a-$a1;
                            if($balance<=0)
                            {
                                echo $a;
                            }
                            else
                            {
                                echo $balance;
                            }
                            
                            
                            $conn->close();     
                        ?>
                        </label><br>
                    </form>
                </div>
            </div>
        </header>
    </div>
</body>
</html>
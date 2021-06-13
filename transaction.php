<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="trans.css">
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
            <source src="Transaction/trans.mp4" type="video/mp4">
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
                <li><a href="http://localhost/Banking%20Site/account.php">MY ACCOUNT</a></li>
                <li><a href="contact.html">CONTACT US</a></li>
            </ul>
            <div class="table">
                <table >
                    <tr class="tr">
                    <th>SENDER</th>
                    <th>RECIVER</th>
                    <th>AMOUNT</th>
                    </tr>
                    
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
                        
                        if ($result->num_rows > 0) {
                        // output data of each row
                
                            while($row = $result->fetch_assoc()) {
                                
                                echo "<tr>";
                                echo "<td>" . $row['sender'] . "</td>";
                                echo "<td>" . $row['reciver'] . "</td>";
                                echo "<td>" . $row['amount'] . "</td>";
                                echo "</tr>";
                            }
                        } 
                        else {
                        }
                        $conn->close();
                        
                    ?>
                </table>
            </div>
        </header>
    </div>
</body>
</html>
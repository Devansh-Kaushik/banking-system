<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="pay.css">
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
            <source src="pay/pay.mp4" type="video/mp4">
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
                        <label class="head2"><h3>Amount to <br>Transfer:</h3></label>
                        <input type="number" class="txt1" name="Amount" placeholder="Enter Your Amount"/>
                        <br><br><br>
                        <!--DropDown List-->
                        <label class="head3"><h3>Recipient's <br>Name:</h3></label>
                        <select name="Beneficiary">
                            <option value="" class="select">--Select--</option>
                            <option value="Jhon" class="select">Jhon</option>
                            <option value="Meera" class="select">Meera</option>
                            <option value="Aakash" class="select">Aakash</option>
                            <option value="Aditiya" class="select">Aditiya</option>
                            <option value="Jhon Mehra" class="select">Jhon Mehra</option>
                            <option value="Bob" class="select">Bob</option>
                            <option value="Divya" class="select">Divya</option>
                            <option value="Aditya Gupta" class="select">Aditya Gupta</option>
                            <option value="Rohan" class="select">Rohan</option>
                            <option value="Vidhya" class="select">Vidhya</option>
                            
                        </select>
                        <br><br><br><br>  
                        <input type="submit"  class="btn_sumbit" name="insert" value="TRANSFER MONEY"/>
                    </form>
                </div>
            </div>
        </header>
    </div>
</body>
</html>
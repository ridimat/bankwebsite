<html>

<head>
<style>
   
   h1{
       margin: 0px;
       padding: 0 0 20px;
       text-align: center;
       color: white;
   }
   .loginbox{
       width:320px;
       height:420px;
       background:#303030;
       color:#fff;
       top:50%;
       left: 50%;
       position: absolute;
       transform: translate(-50%,-50%);
       box-sizing: border-box;
       padding: 70px 30px;
   }
   body{
       margin:0;
       padding: 0px;
       background: url(final1.jpg);
       background-position: center;
       font-family: sans-serif;
       background-color: rgb(212, 204, 204);
     }
     .loginbox p{
         margin: 0px;
         padding: 0px;
         font-weight: bold;
     }
     .loginbox input{
         width: 100%;
         margin-bottom: 20px;
     }
     .loginbox input[type="email"],input[type="password"],input[type ="text"],input[type ="tel"]{
         border: none;
         border-bottom: 1px solid #fff;
         background: transparent;
         outline: none;
         height: 40px;
         color:#fff;
         font-size: 16px;
     }
     .loginbox input[type="submit"]
     {
         border: none;
         outline: none;
         height: 40px;
         background: dark grey;
         color:#000;
         font-size: 18px;
         border-radius: 20px;
     }
     .loginbox input[type="submit"]:hover
     {
         cursor: pointer;
         background: #ffc107;
         color: #000;
     }
     .loginbox a{
         text-decoration: none;
         font-size: 12px;
         line-height: 20px;
         color: darkgray;
     }
     .header {
  overflow: hidden;
  background-color: grey;
  padding: 20px 10px;
}

.header a {
  float: right;
  color: black;
  text-align: center;
  padding: 12px;
  text-decoration: none;
  font-size: 18px; 
  line-height: 25px;
  border-radius: 4px;
}

.header a.logo {
  font-size: 25px;
  font-weight: bold;
}

.header a:hover {
  background-color: #ddd;
  color: black;
}

.header a.active {
  background-color: olive green;
  color: white;
}

.header-right {
  float: right;
}

@media screen and (max-width: 500px) {
  .header a {
    float: none;
    display: block;
   /* text-align: left;*/
  }
  
  .header-right {
    float: none;
  }
}
.btn {
  float:left;
  border: none;
  color: white;
  margin-right:500px;
  background-color:transparent;
  cursor: pointer;
}
   </style>
<body>
<div class="header"> 

<nav> <a href="add1.php">Add Customer</a> </nav>
    <nav ><a href="hist.php">Transfer History</a></nav>
    <nav ><a href="home.php" style="float:left;">HOME</a></nav>
</div>
<form method ="post" action="#">
<div class="loginbox">
<?php
$conn=mysqli_connect("localhost","root","","bankmain");
$cid= $_GET['cid'];

$q = "SELECT * FROM customer  where cid=$cid";
$r = mysqli_query($conn,$q);
    while($row = mysqli_fetch_assoc($r)){ ?>
   
        
       
         
          
          
    </table>
    <td style="font-size: 20px;"><b>FROM:</b>
         <br><br><input  style="font-size: 19px;" name ="names" value="<?php echo " ".$row['name']; ?>"></td></tr>
          <td style="font-size: 20px;"><b>TO:</b>
          <br><br> <select style="font-size: 19px;" name="namer" >
  <option  disabled selected>SELECT TO</option>
  <?php
       
       $q = "SELECT name FROM customer where cid!=$cid ";
       $records = mysqli_query($conn,$q);

        while($data = mysqli_fetch_array($records))
        {
            echo "<option style='font-size: 19px;'value='". $data['name'] ."'>" .$data['name'] ."</option>";  // displaying data in option menu
        }	
    ?>  
  </select>
  <br><br><br><b><label >TRANSFER AMOUNT</label></b></td>
  <br><br><td><input type ="tel" name ="amount"  required placeholder="Enter amount "></td>
<br><br><input type="submit" name="insert" value="Submit">

<?php
$conn=mysqli_connect("localhost","root","","bankmain");
if(!$conn){
    echo "error".mysqli_connect_error();
}
else{
if(isset($_POST['insert']))
{
    $namef=$_POST['names'];
    $namet=$_POST['namer'];
    $amount=$_POST['amount'];
    
    $balance= $row['balance'];

    $new=$balance-$amount;
  
   $conn=mysqli_connect("localhost","root","","bankmain");
    $ag="update customer SET balance = $new WHERE name =  trim('$namef')  " ;
    $query_r=mysqli_query($conn,$ag);

   $now="select balance from customer where name=trim('$namet')";
   $quer=mysqli_query($conn,$now);
   while($ro = mysqli_fetch_assoc($quer)){
       $bal=$ro['balance'] ;
   $newt=$bal+$amount;

   $ag="update customer SET balance = $newt WHERE name =  trim('$namet')  " ;
   $query_run=mysqli_query($conn,$ag);
   }
    $q="insert into transact(names,  namer,amount) VALUES ('$namef', '$namet', '$amount')";
    $query_run=mysqli_query($conn,$q);
    echo "<script>
   
      alert('TRANSACTION SUCCESSFUL!');
    
    </script>";
}
}

}         
          
      ?></div>
   </form></body></html>
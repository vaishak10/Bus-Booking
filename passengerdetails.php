<!DOCTYPE html>
<html>
    <head>
        <title>Bus Booking Website</title>
        
        <link href="vehicledetails.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <header>
        <div class="row">
            <div class="logo">
            <img src="bus1.jpeg">
            </div>
        <ul class="main-nav">
            <li class="active"><a> HOME</a></li>
            <li><a> SERVICES</a></li>
            <li><a> ABOUT US</a></li>
            <li><a> CONTACT US</a></li>
            </ul>    
            </div>
            <div class="hero">
                <h1><i>Bus Booking Management</i></h1>
            </div>
        <ul class="sub-nav">
        <li><a href="search.html">Tickets</a>
            <ul>
                <li><a href="">Book tickets</a></li>
                <li><a href="">Cancel tickets</a></li>
                <li><a href="">View ticket</a></li>
            </ul>
        </li>
        <li><a href="vehicledetails.php">Vehicle</a>
            <ul>
                <li><a href="">Add Vehicle</a></li>
                <li><a href="">Remove Vehicle</a></li>
                <li><a href="">Vehicle Details</a></li>
            </ul>
        </li>
                   
        <li><a href="driverdetails.php">Driver details</a></li>
        <li><a href="">Passenger details</a></li>     
        </ul>  
            <table>
 <tr>
  <th>Passenger Name</th> 
  <th>Age</th> 
    <th>Gender</th> 
     <th>Mobile Number</th>
   

 </tr>
        <?php
            $user='root';
    $server='localhost';
    $pass='';
    $noconnect='did not connect';
    $dbname='bus';
  $conn= new mysqli($server,$user,$pass,$dbname);
            
                $sql="SELECT * FROM passengers p,transaction t WHERE p.pid=t.pidfk";
            $result= mysqli_query($conn,$sql);
            $resultcheck= mysqli_num_rows($result);
            if($resultcheck>0)
            {
                while($row=mysqli_fetch_assoc($result))
                {
                    echo "<tr><td>". $row["pname"]."</td><td>". $row["page"]."</td><td>". $row["pgen"]."</td><td>".$row["pnumber"]."</td></tr>";
                }
            echo"</table>";
            }
                else
                {
                 echo "0 result";  
                }

                    
        
            
           ?> 
            </table>

        </header>
    </body>
</html>

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
                <li><a href="bookticket.html">Book tickets</a></li>
                <li><a href="">Cancel tickets</a></li>
                <li><a href="">View ticket</a></li>
            </ul>
        </li>
        <li><a href="">
            
            Vehicle details</a>
        </li>
                    
        <li><a href="driverdetails.php">Driver details</a></li>
        <li><a href="passengerdetails.php">Passenger details</a></li>  
        </ul>  
            <table>
 <tr>
  <th>Bus number</th> 
  <th>Bus type</th> 
  <th>Origin</th>
 <th>Destination</th>
     <th>Via</th>
 <th>Departure</th>
 <th>Arrival</th>  
  <th>number of seats</th>
 <th>fare</th>
 </tr>
        <?php
            $user='root';
    $server='localhost';
    $pass='';
    $noconnect='did not connect';
    $dbname='bus';
  $conn= new mysqli($server,$user,$pass,$dbname);
            
                $sql="SELECT * FROM bus_details B,routes R WHERE B.rid=R.r_id";
            $result= mysqli_query($conn,$sql);
            $resultcheck= mysqli_num_rows($result);
            if($resultcheck>0)
            {
                while($row=mysqli_fetch_assoc($result))
                {
                    echo "<tr><td>". $row["bp_no"]."</td><td>". $row["bustype"]."</td><td>". $row["origin"]."</td><td>". $row["dest"]."</td><td>". $row["via"]."</td><td>". $row["dep_time"]."</td><td>". $row["arr_time"]."</td><td>". $row["noseats"]."</td><td>". $row["fare"]."</td></tr>";
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
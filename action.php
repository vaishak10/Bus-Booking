<html>
<head> 
<title>Bus Booking Webiste</title>
<link href="style555.css" rel="stylesheet" type="text/css">
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
        <li><a>Tickets</a>
        </li>
        <li><a>Vehicle</a>
        </li>
               
        <li><a>Driver details</a></li>
        <li><a>Passenger details</a></li>     
        </ul>
            <br>
            <br>

<?php
global $pids;

  $user='root';
    $server='localhost';
    $pass='';
    $noconnect='did not connect';
    $dbname='bus';
  $con= new mysqli($server,$user,$pass,$dbname);
		
    if(!mysqli_connect($server,$user,$pass)||!mysqli_select_db($con,$dbname))
        die($noconnect);



if((isset($_POST['name'])&&isset($_POST['age'])&&isset($_POST['gender'])&&isset($_POST['number'])&&isset($_POST['seat']))&& !empty($_POST['name'])&&!empty($_POST['age'])&&!empty($_POST['gender'])&&!empty($_POST['number'])&&!empty($_POST['seat']))
    {
        $name=$_POST['name'];
        $age=$_POST['age'];
        $gender=$_POST['gender'];
        $number=$_POST['number'];
        $seatno=$_POST['seat'];
        session_start();
       $bid=$_SESSION['bid'];
       $dojs=$_SESSION['doj'];
    
        $query2="insert into passengers(pname,page,pgen,pnumber,bidfk1) values('".$name."',".$age.",'".$gender."',".$number.",".$bid.")";
        
        if($run2 = mysqli_query($con,$query2))
        {
            ?>
            <html>
            
                <table>
                    <tr>
                        <th>name</th>
                        <th>age</th>
                        <th>gender</th>
                        <th>number</th>
                    </tr>
                    
                        <?php
            
            
                            $query3= "select * from passengers";
                            $run3= mysqli_query($con,$query3);
                            $num = mysqli_num_rows($run3);
                            for($i=1;$i<=$num;$i++)
                            {
                                $row2=mysqli_fetch_assoc($run3);
                    ?>
                                <tr>
                                    <td>
                                        <?php echo $row2['pname'];?>
                                    </td>
                                    <td>
                                        <?php echo $row2['page'];?>
                                    </td>
                                     <td>
                                        <?php echo $row2['pgen'];?>
                                    </td>
                                    <td>
                                        <?php echo $row2['pnumber'];?>
                                    </td>
                                     <?php $pids=$row2['pid'];?>
                    </tr>
                    <?php
                            }
                    ?>
                    
                </table>
            </html>
<?php
        }
        $query4="insert into transaction(doj,bidfk,seatno,pidfk) values('".$dojs."',".$bid.",".$seatno.",".$pids.")";
    if($run4 = mysqli_query($con,$query4))
        {
            ?>
            <html>
            
                <table>
                    <tr>
                        <th>Doj</th>
                        <th>Bus ID</th>
                        <th>passenger id</th>
                        <th>Seat No</th>
                                                
                    
                    </tr>
                    
                        <?php
            
            
                            $query4= "select * from transaction";
                            $run5= mysqli_query($con,$query4);
                            $num1 = mysqli_num_rows($run5);
                            for($i=1;$i<=$num1;$i++)
                            {
                                $row3=mysqli_fetch_assoc($run5);
                    ?>
                                <tr>
                                    <td>
                                        <?php echo $row3['doj'];?>
                                    </td>
                                    <td>
                                        <?php echo $row3['bidfk'];?>
                                    </td>
                                    <td>
                                        <?php echo $row3['seatno'];?>
                                    </td>
                                    
                                     <td>
                                        <?php echo $row3['pidfk'];?>
                                    </td>
                                    
                                </tr>
                    <?php
                                
                            }
            
                    ?>
                    
                </table>
           <br>
            </html>
<?php
        }
    ?>
    <h2><font color="lightblue"><marquee>
        <?php echo "TICKET BOOKED!";?></marquee></font></h2>
<html>
    <br>
  <div>
                    <a href="search.html"><button>Go to home page</button></a>
    </div>
</html>
  <?php      
    }
        else
            echo'failed';
?>
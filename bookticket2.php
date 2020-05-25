<html>
<head> 
<title>Bus Booking Webiste</title>
<link href="style55.css" rel="stylesheet" type="text/css">
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
            <h3><font color="lightblue">Journey Details:</font></h3>


<?php
    require 'connect.php';

 

    if((isset($_POST['org'])&&isset($_POST['destination'])&&isset($_POST['viaa'])&&isset($_POST['dateoj'])&&isset($_POST['dept'])&&isset($_POST['bustp']))&& !empty($_POST['org'])&&!empty($_POST['destination'])&&!empty($_POST['viaa'])&&!empty($_POST['dateoj'])&&!empty($_POST['dept'])&&!empty($_POST['bustp']))
    {
        $origin=$_POST['org'];
        $dest=$_POST['destination'];
        $via=$_POST['viaa'];
        $doj=$_POST['dateoj'];
        $dept=$_POST['dept'];
        $bustp=$_POST['bustp'];
    
        
        $query="select b.bid
         from bus_details b,routes r where b.rid=r.r_id and r.origin='".$origin."' and
       r.dest='".$dest."' and r.via='".$via."' and r.dep_time='".$dept."' and b.bustype= '".$bustp."';";
      
        if($run = mysqli_query($con,$query))
        {
            ?>
               
                <table>
                    <tr>
                        
                        <th>Bus_ID</th>
                        <th>Bus type</th>
                        <th>DOJ</th>  
                    </tr>
                    
                   <?php $row=mysqli_fetch_assoc($run); ?>
                                <tr>
                                        <?php
                                           $bid=$row['bid'];  
                                           ?>
             
                                    <td><?php echo $bid;?></td>
                                    <td><?php echo $bustp; ?></td>
                                    <td><?php echo $doj; ?></td>
                                    <?php
                                      session_start();
                                   
                                     $_SESSION['bid']=$bid;
                                     $_SESSION['doj']=$doj;
                                
                                
                                    
                                     ?>
                                        
                                
                                        
                                        
                                        
                                        
                                
                    </tr>
                     <tr>
                      <td>
                          <br>
                          <br>
                         <p>Number of seats:</p>
                          <?php
                                $r1=("select * from bus_details b ,routes r where      b.rid=r.r_id and b.bid=".$bid.";");
                                $run1 = mysqli_query($con,$r1);
                                  $row1=mysqli_fetch_assoc($run1);
                                     $seats=$row1['noseats'];
                                     echo $seats;
                                
                              ?>
                          </td>
                    </tr>
                      </table>
                          <br>
                          <br>
                          <center>
                              <a href="userdetails.html"><button type="submit" name="submit">Fill passenger details</button></a>
    
 </html>
<?php
        }
      
        
      
    }
        else
            echo'failed';

     
?>
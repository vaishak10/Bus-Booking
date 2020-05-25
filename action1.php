<?php
    require 'connect.php';
    if((isset($_POST['username'])&&isset($_POST['password']))&& !empty($_POST['username'])&&!empty($_POST['password']))
    {
        $user=$_POST['username'];
        $pass=$_POST['password'];
        $query="insert into admin(username,password) values('".$user."','".$pass."')";
        if($run = mysqli_query($con,$query))
        {
            ?>
            <html>
            
                <table>
                    <tr>
                        <th>username</th>
                        <th>password</th>
                            </tr>
                    
                        <?php
                            $query2= "select * from admin";
                            $run2 = mysqli_query($con,$query2);
                            $num = mysqli_num_rows($run2);
                            for($i=1;$i<=$num;$i++)
                            {
                                $row=mysqli_fetch_assoc($run2);
                    ?>
                                <tr>
                                    <td>
                                        <?php echo $row['username'];?>
                                    </td>
                                    <td>
                                        <?php echo $row['password'];?>
                                    </td>
    
                                </tr>
                    <?php
                            }
                    ?>
                    
                </table>
            </html>
<?php
        }
        
        
    }
        else
            echo'failed';
?>
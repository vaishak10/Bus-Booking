<?php
    require 'connect.php';
    if((isset($_POST['pname'])&&isset($_POST['page'])&&isset($_POST['pgender']) && isset($_POST['pnumber']))&&(!empty($_POST['pid'])&&!empty($_POST['cid'])&&!empty($_POST['qty'])))
    {
        $name=$_POST['pname'];
        $age=$_POST['page'];
        $gender=$_POST['pgender'];
        $number=$_POST['pnumber'];
        $query3="insert into passengers(pname,page,pgender,pnumber) values(".$pname.",".page.",".$pgender.",".$p.")";
        if(!mysqli_query($query3)) echo "error";
        $query="select SP from product where pid=$pid ";
        $run=mysqli_query($query);
        $row=mysqli_fetch_assoc($run);
        $SP=$row['SP'];
        $q2="update billing set op=$SP-500 where pid=$pid";
        if(mysqli_query($q2))
            echo "success";
        else
            echo "fail";
        $q2="select op from billing where pid=$pid";
            $run=mysqli_query($q2);
            $row=mysqli_fetch_assoc($run);
            echo 'Offer price : '.$row['op'];
        echo 'Price'.$SP;

    }
    else
        echo 'notset';
?>
        
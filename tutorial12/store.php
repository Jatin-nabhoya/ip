<?php
    session_start();
    include("connect.php");
    $id=isset($_POST['id'])?$_POST['id']:0;
    $mid=isset($_POST['machine_id'])?$_POST['machine_id']:0;
    $pid=isset($_POST['process_id'])?$_POST['process_id']:0;
    $iid=isset($_POST['item_id'])?$_POST['item_id']:0;
    // $iid=$_SESSION['iid'];
    // $mid=$_SESSION['mid'];
    // $pid=$_SESSION['pid'];
    $machine_name=isset($_POST['machine_name'])?$_POST['machine_name']:"";
    $process_name=isset($_POST['process_name'])?$_POST['process_name']:"";
    $item_name=isset($_POST['item_name'])?$_POST['process_name']:"";
    $parametername=isset($_POST['parametername'])?$_POST['parametername']:"";
    $upper_tolerance=isset($_POST['upper_tolerance'])?$_POST['upper_tolerance']:"";
    $lower_tolerance=isset($_POST['lower_tolerance'])?$_POST['lower_tolerance']:"";
    
    $sql="";
    if($id)
    {
        // $sql="update master_view set process_name = '$process_name', machine_name='$machine_name', item_name='$item_name', parametername='$parametername', upper_tolerance='$upper_tolerance', lower_tolerance='$lower_tolerance' where id=$id";
        $sql1="update tbl_ipmp set parametername='$parametername', upper_tolerance='$upper_tolerance', lower_tolerance='$lower_tolerance' where id='$id'";
        $sql2="update tbl_items set item_name='$item_name' where id='$iid'";
        $sql3="update tbl_machine set machine_name='$machine_name' where id='$mid'";
        $sql4="update tbl_process set process_name='$process_name' where id='$pid'";
        
        
        // $result=mysqli_query($conn,$sql1);

    }
    else
    {
        // $sql="insert into master_view (machine_name,process_name,item_name,parametername,lower_tolerance,upper_tolerance) values('$machine_name','$process_name','$item_name','$parametername','$lower_tolerance','$upper_tolerance')";

        $sql1="insert into tbl_ipmp (parametername, lower_tolerance , upper_tolerance) values('$parametername','$lower_tolerance','$upper_tolerance')";
        $sql2="insert into tbl_items (item_name) values('$item_name')";
        $sql3="insert into tbl_machine (machine_name) values('$machine_name')";
        $sql4="insert into tbl_process (process_name) values('$process_name')";

    }
    // $db->query($sql);
    $db->query($sql1);
    $db->query($sql2);
    $db->query($sql3);
    $db->query($sql4);
    if($db->affected_rows)
    {
        $_SESSION['message']="Operation Successful";
    }
    else
    {
        $_SESSION['message']="Operation failed";
    }
    header("location:index.php");
?>
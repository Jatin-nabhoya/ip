<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tutorial 12</title>
    <link href="//fonts.googleapis.com/css2?family=Jost:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link href="//fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
    <section style="margin: 25px;">
        <div class="container">
            <div class="row">
                <?php
                session_start();
                    include("connect.php");
                    $id = isset($_GET['id']) ? $_GET['id'] : 0;
                    // $iid = isset($_GET['iid']) ? $row['t1.id'] : 0;
                    $result1 = $db->query("CREATE OR REPLACE VIEW master_view AS
                            select t1.id,t3.machine_name,t4.process_name,t2.item_name,t1.parametername,t1.item_id,t1.process_id,t1.machine_id,t1.upper_tolerance,t1.lower_tolerance 
                            from tbl_ipmp t1 
                            INNER JOIN tbl_items t2 
                            ON t1.item_id =t2.id  
                            INNER JOIN tbl_machine t3
                            ON t1.machine_id = t3.id
                            INNER JOIN tbl_process t4
                            ON t1.process_id = t4.id where t1.is_delete=0");
                    // $result  = $db->query("SELECT id , machine_name ,description from tbl_machine where id=$id");
                    $result  = $db->query("SELECT * from master_view where id=$id");
                    
                    // $row1 = $result1->fetch_assoc();
                    $row = $result->fetch_assoc();
                    // $_SESSION['iid'] = $row1['t2.id'];
                    // $_SESSION['mid'] = $row1['t3.id'];
                    // $_SESSION['pid'] = $row1['t4.id'];
                ?>

                <h2 class="text-center">Tutorial 12</h2>
                <form method="post" action="store.php">
                    <div class="form-group">
                        <input type="hidden" name="id" value="<?php echo isset($row['id']) ? $row['id'] : 0; ?>" />
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="machine_name">Machine Name:</label>
                        <input type="text" name="machine_name" id="machine_name" value="<?php echo isset($row['machine_name'])?$row['machine_name']:""; ?>" class="form-control" />
                    </div>
                    <div class="form-group mt-3">
                        <label class="form-label" for="description">Process Name:</label>
                        <input type="text" name="description" id="description" value="<?php echo isset($row['process_name'])?$row['process_name']:""; ?>" class="form-control" />
                    </div>
                    <div class="form-group mt-3">
                        <label class="form-label" for="description">item_name:</label>
                        <input type="text" name="description" id="description" value="<?php echo isset($row['item_name'])?$row['item_name']:""; ?>" class="form-control" />
                    </div>
                    <div class="form-group mt-3">
                        <label class="form-label" for="description">Parameter:</label>
                        <input type="text" name="description" id="description" value="<?php echo isset($row['parametername'])?$row['parametername']:""; ?>" class="form-control" />
                    </div>
                    <div class="form-group mt-3">
                        <label class="form-label" for="description">upper_tolerance:</label>
                        <input type="text" name="description" id="description" value="<?php echo isset($row['upper_tolerance'])?$row['upper_tolerance']:""; ?>" class="form-control" />
                    </div>
                    <div class="form-group mt-3">
                        <label class="form-label" for="description">lower_tolerance:</label>
                        <input type="text" name="description" id="description" value="<?php echo isset($row['lower_tolerance'])?$row['lower_tolerance']:""; ?>" class="form-control" />
                    </div>



                    <div class="form-group mt-3">
                        <button class="btn btn-primary" type="submit">Submit</button>
                        <a class="btn btn-danger" href="javascript:history.go(-1)">Cancel</a>
                    </div>
                </form>
            </div>
        </div>
    </section>
</body>

</html>
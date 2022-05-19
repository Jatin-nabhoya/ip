<?php

include "connect.php";

?>

<!doctype html>
<html lang="EN">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Tutorial 12</title>
    <link href="//fonts.googleapis.com/css2?family=Jost:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link href="//fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
    <section style="margin: 25px;">
        <div class="container">
            <div class="row">
                <h2 class="text-center">Tutorial 12</h2>
                <h3>User Data</h3>
                <h3 class="text-center text-success"><?php
                    session_start();
                    echo isset($_SESSION['message']) ? $_SESSION['message'] : "";
                    // id = isset($_GET['id']) ? $_GET['id'] : '';
                    unset($_SESSION['message']);
                    ?></h3>
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <a href="form.php?"class="btn btn-success me-md-2" style="margin-bottom: 25px;">Add new record</a>
                </div>
                <table class="table table-striped">
                    <thead>
                        <tr class="text-center">
                            <th scope="col ">Id</th>
                            <th scope="col ">Machine Name</th>
                            <th scope="col ">Process Name</th>
                            <th scope="col ">Item Name</th>
                            <th scope="col ">Parametername</th>
                            <th scope="col ">Upper_Tolerance</th>
                            <th scope="col ">Lower_Tolerance</th>
                            <th scope="col ">Action</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sql = "select t1.id,t3.machine_name,t4.process_name,t2.item_name,t1.parametername,t1.upper_tolerance,t1.lower_tolerance 
                        from tbl_ipmp t1 
                        INNER JOIN tbl_items t2 
                        ON t1.item_id =t2.id  
                        INNER JOIN tbl_machine t3
                        ON t1.machine_id = t3.id
                        INNER JOIN tbl_process t4
                        ON t1.process_id = t4.id where t1.is_delete=0 order by t1.id desc";
                        $result = $db->query($sql);
                        if ($result->num_rows) {
                            while ($row = $result->fetch_assoc()) {
                        ?>
                                <tr class="text-center pb-2">

                                    <th><?= $row['id'] ?></th>
                                    <td><?= $row['machine_name'] ?></td>
                                    <td><?= $row['process_name'] ?></td>
                                    <td><?= $row['item_name'] ?></td>
                                    <td><?= $row['parametername'] ?></td>
                                    <td><?= $row['lower_tolerance'] ?></td>
                                    <td><?= $row['upper_tolerance'] ?></td>
                                    <td>
                                        <a href="form.php?id=<?= $row['id'] ?>" class="btn btn-primary mb-2" style="text-decoration: none;margin-right: 2px; ">Edit</a>
                                        <a href="delete_user.php?id=<?= $row['id'] ?>" class="btn btn-danger mb-2" style="text-decoration: none; ">Delete</a>
                                    </td>
                                </tr>
                        <?php }
                        } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
</body>

</html>
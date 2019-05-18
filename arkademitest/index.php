<?php
ob_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Batch 10 Kloter 3</title>
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-12 mt-5">
                <form method="POST">
                    <div class="form-group row">
                        <div class="col-2"></div>
                        <div class="col-5">
                            <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="Tambah Programmer">
                        </div>
                        <div class="col-5">
                            <button type="submit" class="btn btn-primary" name="tambahprogrammer">Submit</button>
                        </div>  
                    </div>
                   
                </form>
                <?php
                    if(isset($_POST['tambahprogrammer'])){
                        $name = $_POST['name'];
                        $con    = new mysqli("localhost", "root", "", "arkatest");
                        $query  = $con->query("INSERT INTO users (name) VALUES('$name')");
                        header("Location: http://localhost/arkademitest/");
                    }
                
                ?>
            </div>
            <div class="col mt-5">
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">Nama</th>
                            <th scope="col">Action</th>
                        </tr>
                        <tr>
                            <?php 
                            $con    = new mysqli("localhost", "root", "", "arkatest");
                            $query  = $con->query("SELECT * FROM users");
                            
                            while($row = $query->fetch_array(MYSQLI_ASSOC)){
                            ?>
                            <td class="text-center" >
                                <h5><?=$row['name']?></h5>
                                <?php
                                    $id = $row['id'];
                                    $query2  = $con->query("SELECT skills.name FROM skills WHERE user_id=".$id);        
                                    while($row = $query2->fetch_array(MYSQLI_ASSOC)){
                                        echo $row['name'] . ", ";
                                    }
                                ?>
                            </td>
                            <td>
                                <form method="POST" class="form-inline">
                                    <div class="form-group mb-2">
                                        <input type="hidden" name="user_id" value="<?=$id?>">
                                        <input type="text" name="nameSkill" class="form-control" >
                                    </div>
                                    <div class="form-group mx-sm-3 mb-2">
                                        <button type="submit" class="btn btn-primary mb-2" name="isiSkill">Submit</button>
                                    </div>
                                </form>
                            </td>
                        </tr>
                        <?php } 
                            if(isset($_POST['isiSkill'])){
                                $id = $_POST['user_id'];
                                $name = $_POST['nameSkill'];
                                $query = $con->query("INSERT INTO skills(name,user_id) VALUES ('$name', '$id') ");
                                header("Location: http://localhost/arkademitest/");
                            }
                        
                        ?>
                        
                    </thead>
                </table>
            </div>
        </div>
    </div>
    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
</body>

</html>

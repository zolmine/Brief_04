<!DOCTYPE html>
<html lang="en">
<?php include 'include/meta.php'; 
      require 'actions/connection.php';  
?>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
<title>Dashboard</title>

<body>
    <div class="dash-content">
        <?php include 'include/sidebar.php'; ?>

        <div class="contenuu">
            <div class="contenuu-nav">
                <h2 class="title_list">Dash Board</h2>
                <button class="open-modal" id="adduser1" onclick="document.getElementById('modal1').style.visibility='visible'">Add User</button>
            </div>

            <div class="grid">
                <div class="static staf-stat">
                    <div class="l">
                    <?php 
                        $sqli = "SELECT COUNT(`idstf`) as staff_number FROM staff ";
                        $fetch  = $connection->query($sqli);
                        $row    = $fetch->fetch_assoc();
                        $staff_number = $row['staff_number'];
                        
                    ?>
                        <span><?php echo $staff_number ?></span>
                        <span>Staff</span>
                    </div>
                    <div class="icon">
                        <i class="fa fa-book c-staf"></i>
                    </div>
                </div>
                <div class="static etud-stat">
                    <div class="l">
                    <?php
                        $sqli = "SELECT COUNT(`idstd`) as students_number FROM students";
                        $fetch = $connection->query($sqli);
                        $row    = $fetch->fetch_assoc();
                        $students_number = $row['students_number'];
                    ?>
                        <span><?php echo $students_number ?></span>
                        <span>etudiant</span>
                    </div>
                    <div class="icon">
                        <i class="fa fa-home c-etud"></i>
                    </div>
                </div>
                <div class="static class-stat">
                    <div class="l">
                        <span>4</span>
                        <span>Class</span>
                    </div>
                    <div class="icon">
                        <i class="fa fa-users c-class"></i>
                    </div>
                </div>
                <div class="static campus-stat">
                    <div class="l">
                        <span>1</span>
                        <span>Campus</span>
                    </div>
                    <div class="icon">
                        <i class="fa fa-user c-campus"></i>
                    </div>
                </div>
            </div>
            <div class="filter">

                <div class="filter-search">
                    <input type="text" width="300px" name="search" id="search" placeholder="Search" autocomplete="off"
                        class="">
                    <i class="fa fa-search" id="icon-search"></i>
                </div>

            </div>
            <div class="painel" style="font-weight: 75%;">
                <div class="painel-body">
                    <table class="decoration">
                        <tbody>
                            <tr>
                                <th>Id</th>
                                <th>Nom</th>
                                <th class="hidden">Email</th>
                                <th>Password</th>
                                <th>Class</th>
                                <th>Actions</th>
                            </tr>
                            <?php
                                 $stm = "select * from staff ";
                                 $fetch = $connection->query($stm);
                                while($row = $fetch->fetch_assoc()){

                                 
                            ?>
                            <tr>
                                <td><?php  $idstf = $row['idstf'];
                                echo $idstf;
                                 ?></td>
                                <td><?php $full_name = $row['full_name'];
                                echo $full_name; 
                                ?></td>
                                <td class="hidden"> <?php $email = $row['email'];
                                echo $email; 
                                ?> </td>
                                <td><?php $pass = $row['password'];
                                echo $pass; 
                                ?></td>
                                <td><?php $class = $row['class'];
                                echo $class; 
                                ?></td>
                                <td>
                                    <a href="#"  class="btn btn-red"><i class="fa fa-trash" style="color: red;"></i></a>
                                    <a href="#" onclick="edit('<?php echo $idstf ?>','<?php echo $full_name ?>','<?php echo $email ?>','<?php echo $pass ?>','<?php echo $class ?>')" class="btn btn-orange"><i class="fa fa-edit"
                                            style="color: lightblue;"></i></a>
                                </td>
                            </tr>
                            <?php
                                }
                            ?>
                           
                            
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="modal is-visible" id="modal1">
                <div class="modal-dialog">
                    <form action="actions/crud.php" method="post" class="form">
                        <div class="modal-header">
                            <div class="modal-title">Create New User</div>
                            <button class="close-modal" aria-label="close modal" data-close="" type="button">x</button>
                        </div>
                        <div class="modal-content">
                            <div class="group">
                                <label for="name">Name</label>
                                <input type="text" name="name" id="" placeholder="Name">
                            </div>
                            <div class="group">
                                <label for="email">E-mail</label>
                                <input type="email" name="email" id="" placeholder="Email">
                            </div>
                            <div class="group">
                                <label for="password">Password</label>
                                <input type="password" name="password" id="" placeholder="password">
                            </div>
                            <div class="group">
                                <label for="email">Class</label>
                                <select name="class" id="">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                </select>
                            </div>

                        </div>
                        <div class="modal-footer">
                            <center><button type="submit" name="add" id="adduser2">Add</button></center>
                        </div>
                    </form>
                </div>
            </div>
            
            <div class="modal is-visible" id="modal2">
                <div class="modal-dialog">
                    <form action="actions/crud.php" class="form" method="post">
                        <div class="modal-header">
                            <div class="modal-title">Edite User</div>
                            <button class="close-modal" aria-label="close modal" data-close="" type="button">x</button>
                        </div>
                        <div class="modal-content">
                            <div class="group">
                                <label >Id</label>
                                <input type="text" name="id_edited" id="id_edited" readonly value="" >
                            </div>
                            <div class="group">
                                <label >Name</label>
                                <input type="text" name="name_edited" id="name_edited" value="" >
                            </div>
                            <div class="group">
                                <label >E-mail</label>
                                <input type="email" name="email_edited" value="" id="email_edited" >
                            </div>
                            <div class="group">
                                <label for="pass_edited">Password</label>
                                <input type="password" name="pass_edited" value="" id="pass_edited" placeholder="password">
                            </div>
                            <div class="group">
                                <label for="class_edited">Class</label>
                                <select name="class_edited" id="class_edited">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                </select>
                            </div>
                            

                        </div>
                        <div class="modal-footer">
                            <center><button type="submit" name="edit" id="adduser2">Add</button></center>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>
// If user clicks anywhere outside of the modal, Modal will close



</script>
<script src="js/action.js"></script>

</body>

</html>
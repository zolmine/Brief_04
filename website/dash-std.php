<!DOCTYPE html>
<html lang="en">
<?php include 'include/meta.php'; ?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
<title>Dashboard</title>

<body>
    <div class="dash-content">
        <?php include 'include/sidebar.php'; ?>

        <div class="contenuu">
            <div class="contenuu-nav">
                <h2 class="title_list">Dash Board</h2>
            </div>

            <div class="grid">
                <div class="static staf-stat">
                    <div class="l">
                        <span>10</span>
                        <span>Staff</span>
                    </div>
                    <div class="icon">
                        <i class="fa fa-book c-staf"></i>
                    </div>
                </div>
                <div class="static etud-stat">
                    <div class="l">
                        <span>59</span>
                        <span>etudiant</span>
                    </div>
                    <div class="icon">
                        <i class="fa fa-home c-etud"></i>
                    </div>
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
                                <th>Actions</th>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>Otmane</td>
                                <td class="hidden">otmane@gmail.com</td>
                                <td>
                                   <a href="#" class="btn btn-red open-modal" onclick="document.getElementById('modal1').style.visibility='visible'" ><i class="fa fa-eye" style="color: blue;"></i></a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="modal is-visible" id="modal1">
                <div class="modal-dialog">
                    <form action="" class="form">
                        <div class="modal-header">
                            <div class="modal-title">My Info</div>
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
                                <label for="select">Etudiant</label>
                                <input type="text" name="name" id="" placeholder="Name">
                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>
// If user clicks anywhere outside of the modal, Modal will close

var modal = document.getElementById('modal1');
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.visibility = "hidden";
    }
}
</script>
</body>

</html>
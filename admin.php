<?php
include('includes/header.php');
include('includes/navbar.php');
include_once 'model/UserDB.php';
include_once 'model/User.php';
$dt = new UserDB();
/////////them nhan vien/////////////////////
if (isset($_POST['name'])) {
    $df = new User($_POST['id'], $_POST['name'], $_POST['password'], $_POST['date_of_birth'], $_POST['salary'], $_POST['position'], $_POST['votes'], $_POST['Achievements'], "img/photoemployee/".$_POST['image'], $_POST['email']);
    $dt->addUser($df);
}
//////////////Xóa nhân viên//////////////////
if (isset($_POST['delete_id'])) {
    $idde = $_POST['delete_id'];
    $dt->deleteUser($idde);
}
//////////////Sửa nhân viên////////////////////
if (isset($_POST['name1'])) {
    $dk = new User($_POST['id1'], $_POST['name1'], $_POST['password1'], $_POST['date_of_birth1'], $_POST['salary1'], $_POST['position1'], $_POST['votes1'], $_POST['Achievements1'], $_POST['image1'], $_POST['email1']);
    $dt->editUser($dk);
}
////////////lấy thông tin theo tên/////////

?>


<div class="modal fade" id="addadminprofile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Sửa thông tin nhân viên</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>


            <form action="admin.php" method="POST">

                <div class="modal-body">

                    <div class="form-group">
                        <label> ID </label>
                        <input type="text" name="id1" class="form-control" placeholder="Nhập ID" value="<?php echo $_POST['edit_id']; ?>">
                    </div>
                    <div class="form-group">
                        <label> Tên</label>
                        <input type="text" name="name1" class="form-control" placeholder="Nhập Tên" value="<?php if(isset($_POST['edit_id'])){ echo $dt->getUserById($_POST['edit_id'])->getName(); } ?>" >
                    </div>
                    <div class="form-group">
                        <label> Mật Khẩu</label>
                        <input type="password" name="password1" class="form-control" placeholder="Nhập Mật Khẩu" value="<?php if(isset($_POST['edit_id'])){ echo $dt->getUserById($_POST['edit_id'])->getPassword(); } ?>" >
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" name="email1" class="form-control" placeholder="Nhập Gmail" value="<?php if(isset($_POST['edit_id'])){ echo $dt->getUserById($_POST['edit_id'])->getGmail(); } ?>">
                    </div>
                    <div class="form-group">
                        <label>Ngày Sinh</label>
                        <input type="text" name="date_of_birth1" class="form-control" placeholder="Nhập ngày sinh" value="<?php if(isset($_POST['edit_id'])){ echo $dt->getUserById($_POST['edit_id'])->getDate_of_birth(); } ?>" >
                    </div>
                    <div class="form-group">
                        <label>Chức Vụ</label>
                        <input type="text" name="position1" class="form-control" placeholder="Nhập Chức Vụ" value="<?php if(isset($_POST['edit_id'])){ echo $dt->getUserById($_POST['edit_id'])->getPosition(); } ?>" >
                    </div>
                    <div class="form-group">
                        <label>Lượt Bình Ch�?n</label>
                        <input type="text" name="votes1" class="form-control" placeholder="Nhập Lượt Bình Ch�?n" value="<?php if(isset($_POST['edit_id'])){ echo $dt->getUserById($_POST['edit_id'])->getVotes(); } ?>" >
                    </div>
                    <div class="form-group">
                        <label>Mức Lương</label>
                        <input type="text" name="salary1" class="form-control" placeholder="Nhập Mức Lương" value="<?php if(isset($_POST['edit_id'])){ echo $dt->getUserById($_POST['edit_id'])->getSalary(); } ?>" >
                    </div>
                    <div class="form-group">
                        <label>Thành tích</label>
                        <input type="text" name="Achievements1" class="form-control" placeholder="Nhập Thành tích" value="<?php if(isset($_POST['edit_id'])){ echo $dt->getUserById($_POST['edit_id'])->getAchievements(); } ?>" >
                    </div>
                    <div class="form-group">
                        <label>Link ảnh</label>
                        <input type="text" name="image1" class="form-control" placeholder="Chọn ảnh trong thư mục img" value="<?php if(isset($_POST['edit_id'])){ echo $dt->getUserById($_POST['edit_id'])->getImage(); } ?>" >
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Thoát</button>
                    <button type="submit" name="registerbtn" class="btn btn-primary">Lưu</button>
                </div>
            </form>

        </div>
    </div>
</div>

<div class="modal fade" id="addadminprofile123" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Thêm thông tin nhân viên</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>


            <form action="admin.php" method="POST">

                <div class="modal-body">

                    <div class="form-group">
                        <label> ID </label>
                        <input type="text" name="id" class="form-control" placeholder="Nhập ID" >
                    </div>
                    <div class="form-group">
                        <label> Tên</label>
                        <input type="text" name="name" class="form-control" placeholder="Nhập Tên"  >
                    </div>
                    <div class="form-group">
                        <label> Mật Khẩu</label>
                        <input type="password" name="password" class="form-control" placeholder="Nhập Mật Khẩu">
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" name="email" class="form-control" placeholder="Nhập Gmail">
                    </div>
                    <div class="form-group">
                        <label>Ngày Sinh</label>
                        <input type="text" name="date_of_birth" class="form-control" placeholder="Nhập ngày sinh">
                    </div>
                    <div class="form-group">
                        <label>Chức Vụ</label>
                        <input type="text" name="position" class="form-control" placeholder="Nhập Chức Vụ">
                    </div>
                    <div class="form-group">
                        <label>Lượt Bình Ch�?n</label>
                        <input type="text" name="votes" class="form-control" placeholder="Nhập Lượt Bình Ch�?n">
                    </div>
                    <div class="form-group">
                        <label>Mức Lương</label>
                        <input type="text" name="salary" class="form-control" placeholder="Nhập Mức Lương">
                    </div>
                    <div class="form-group">
                        <label>Thành tích</label>
                        <input type="text" name="Achievements" class="form-control" placeholder="Nhập Thành tích">
                    </div>
                    <div class="form-group">
                        <label>Link ảnh</label>
                        <input type="file" name="image" class="form-control" placeholder="Chọn ảnh trong thư mục img">
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Thoát</button>
                    <button type="submit" name="registerbtn" class="btn btn-primary">Lưu</button>
                </div>
            </form>

        </div>
    </div>
</div>



<div class="container-fluid">

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Hồ Sơ Nhân Viên 
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addadminprofile123">
                    Thêm hồ sơ Nhân Viên 
                </button>
            </h6>
        </div>

        <div class="card-body">

            <div class="table-responsive">

                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th> ID </th>
                            <th> Tên </th>
                            <th>Email </th>
                            <th>Ngày Sinh</th>
                            <th>Chức vụ</th>
                            <th>Mức Lương</th>
                            <th>Lượt bình Ch�?n</th>
                            <th>Thành Tích</th>
                            <th>CHỈNH SỬA </th>
                            <th>XÓA </th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php $gh=[]; if(isset($_POST['search'])){$gh =$dt->getUserByName($_POST['search']); }else {$gh =$dt->getList();} foreach ($gh as $value): ?>
                            <tr>
                                <td><?php echo $value->getId(); ?></td>
                                <td><?php echo $value->getName(); ?></td>
                                <td> <?php echo $value->getGmail(); ?></td>
                                <td> <?php echo $value->getDate_of_birth(); ?> </td>
                                <td> <?php echo $value->getPosition(); ?> </td>
                                <td> <?php echo $value->getSalary(); ?> </td>
                                <td> <?php echo $value->getVotes(); ?> </td>
                                <td> <?php echo $value->getAchievements(); ?> </td>
                                <td>

                                    <form action="admin.php" method="post">
                                        <input type="hidden" name="edit_id" value="<?php echo $value->getId(); ?>">
                                        <button  type="<?php
                                        if (isset($_POST['edit_id'])) {
                                            if ($_POST['edit_id'] == $value->getId()) {
                                                echo 'button';
                                            } else {
                                                echo 'submit';
                                            }
                                        } else {
                                            echo 'submit';
                                        }
                                        ?>" name="edit_btn" class="btn btn-success"  data-toggle="modal" data-target="#addadminprofile"> <?php
                                                 if (isset($_POST['edit_id'])) {
                                                     if ($_POST['edit_id'] == $value->getId()) {
                                                         echo 'Chinh Sua';
                                                     } else {
                                                         echo 'Lay thong tin';
                                                     }
                                                 } else {
                                                     echo 'Lay thong tin';
                                                 }
                                                 ?></button>
                                    </form>
                                </td>
                                <td>
                                    <form action="" method="post">
                                        <input type="hidden" name="delete_id" value="<?php echo $value->getId(); ?>">
                                        <button type="submit" name="delete_btn" class="btn btn-danger"> XÓA</button>
                                    </form>
                                </td>
                            </tr>
                        <?php endforeach; ?>


                    </tbody>
                </table>

            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

<?php
//

include('includes/scripts.php');
include('includes/footer.php');
?>
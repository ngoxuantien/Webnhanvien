<?php
include('includes/header.php');
include('includes/navbar.php');
include_once 'model/CtUserDB.php';
include_once 'model/CtUser.php';
$dt = new CtUserDB();
/////////them nhan vien/////////////////////
if (isset($_POST['name'])) {
    $df = new CtUser($_POST['id'], $_POST['name'], $_POST['language'], $_POST['livein'], $_POST['story'], $_POST['experiance'], $_POST['nationality'], "img/photoemployee/".$_POST['image']);
    $dt->addCtUser($df);
}
//////////////Xóa nhân viên//////////////////
if (isset($_POST['delete_id'])) {
    $idde = $_POST['delete_id'];
    $dt->deleteUser($idde);
}
//////////////Sửa nhân viên////////////////////
if (isset($_POST['name1'])) {
    $dk = new CtUser($_POST['id1'], $_POST['name1'], $_POST['language1'], $_POST['livein1'], $_POST['story1'], $_POST['experiance1'], $_POST['nationality1'], "img/photoemployee/".$_POST['image1']);
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


            <form action="CTuserweb.php" method="POST">

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
                        <label> Ngôn Ngữ</label>
                        <input type="text" name="language1" class="form-control" placeholder="Nhập Ngôn Ngữ" value="<?php if(isset($_POST['edit_id'])){ echo $dt->getUserById($_POST['edit_id'])->getLanguage(); } ?>" >
                    </div>
                    <div class="form-group">
                        <label>Địa Chỉ</label>
                        <input type="text" name="livein1" class="form-control" placeholder="Nhập Nơi ở" value="<?php if(isset($_POST['edit_id'])){ echo $dt->getUserById($_POST['edit_id'])->getLivein(); } ?>">
                    </div>
                    <div class="form-group">
                        <label>Tiểu Sử</label>
                        <input type="text" name="story1" class="form-control" placeholder="Nhập Tiểu Sử" value="<?php if(isset($_POST['edit_id'])){ echo $dt->getUserById($_POST['edit_id'])->getStory(); } ?>" >
                    </div>
                    <div class="form-group">
                        <label>Kinh Nghiệm</label>
                        <input type="text" name="experiance1" class="form-control" placeholder="Nhập Kinh Nghiệm" value="<?php if(isset($_POST['edit_id'])){ echo $dt->getUserById($_POST['edit_id'])->getExperience(); } ?>" >
                    </div>
                    <div class="form-group">
                        <label>Quốc Tịch</label>
                        <input type="text" name="nationality1" class="form-control" placeholder="Nhập Lượt Quốc Tịch" value="<?php if(isset($_POST['edit_id'])){ echo $dt->getUserById($_POST['edit_id'])->getNationality(); } ?>" >
                    </div>
                   
                    <div class="form-group">
                        <label>Link ảnh</label>
                        <input type="text" name="image1" class="form-control" placeholder="Chọn ảnh trong thư mục img" value="<?php if(isset($_POST['edit_id'])){ echo $dt->getUserById($_POST['edit_id'])->getImagebig(); } ?>" >
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


            <form action="CTuserweb.php" method="POST">

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
                        <label> Ngôn Ngữ</label>
                        <input type="text" name="language" class="form-control" placeholder="Nhập Ngôn Ngữ" >
                    </div>
                    <div class="form-group">
                        <label>Địa Chỉ</label>
                        <input type="text" name="livein" class="form-control" placeholder="Nhập Nơi ở" >
                    </div>
                    <div class="form-group">
                        <label>Tiểu Sử</label>
                        <input type="text" name="story" class="form-control" placeholder="Nhập Tiểu Sử" >
                    </div>
                    <div class="form-group">
                        <label>Kinh Nghiệm</label>
                        <input type="text" name="experiance" class="form-control" placeholder="Nhập Kinh Nghiệm" >
                    </div>
                    <div class="form-group">
                        <label>Quốc Tịch</label>
                        <input type="text" name="nationality" class="form-control" placeholder="Nhập Lượt Quốc Tịch"  >
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
            <h6 class="m-0 font-weight-bold text-primary">Hồ Sơ Chi Tiết Nhân Viên 
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
                            <th>Địa Chỉ</th>
                            <th>Quốc Tịch</th>
                            <th>Kinh Nghiệm</th>
                            <th>Ngôn Ngữ</th>
                            <th>CHỈNH SỬA </th>
                            <th>XÓA </th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php $gh=[]; if(isset($_POST['search'])){$gh =$dt->getUserByName($_POST['search']); }else {$gh =$dt->getList();} foreach ($gh as $value): ?>
                            <tr>
                                <td><?php echo $value->getId(); ?></td>
                                <td><?php echo $value->getName(); ?></td>
                                <td> <?php echo $value->getLivein(); ?></td>
                                <td> <?php echo $value->getNationality(); ?> </td>
                                <td> <?php echo $value->getExperience(); ?> </td>
                                <td> <?php echo $value->getLanguage(); ?> </td>
                               
                                <td>

                                    <form action="CTuserweb.php" method="post">
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
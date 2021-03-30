<?php
include('includes/header.php');
include('includes/navbarCalendar.php');
include_once 'model/CalendarDB.php';
include_once 'model/Calendar.php';
$dt = new CalendarDB();
/////////them nhan vien/////////////////////
if (isset($_POST['name'])) {
    $df = new Calendar($_POST['id'], $_POST['name'], $_POST['image'], $_POST['day'], $_POST['time'], $_POST['place'],$_POST['date']);
    $dt->addCalendar($df);
}
//////////////Xóa nhân viên//////////////////
if (isset($_POST['delete_id'])) {
    $idde = $_POST['delete_id'];
    $dt->deleteCalendar($idde);
}
//////////////Sửa nhân viên////////////////////
if (isset($_POST['name1'])) {
    $dk = new Calendar($_POST['id1'], $_POST['name1'], $_POST['image1'], $_POST['day1'], $_POST['time1'], $_POST['place1'],$_POST['date1']);
    $dt->editCalendar($dk);
}
////////////lấy thông tin theo tên/////////

?>


<div class="modal fade" id="addadminprofile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Sửa thông tin lịch làm</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>


            <form action="CalendarLL.php" method="POST">

                <div class="modal-body">

                    <div class="form-group">
                        <label> ID </label>
                        <input type="text" name="id1" class="form-control" placeholder="Nhập ID" value="<?php echo $_POST['edit_id']; ?>">
                    </div>
                    <div class="form-group">
                        <label> Tên</label>
                        <input type="text" name="name1" class="form-control" placeholder="Nhập Tên" value="<?php if(isset($_POST['edit_id'])){ echo $dt->getCalendarById($_POST['edit_id'])->getName(); } ?>" >
                    </div>
                    <div class="form-group">
                        <label> Thứ </label>
                        <input type="text" name="day1" class="form-control" placeholder="Nhập Thứ" value="<?php if(isset($_POST['edit_id'])){ echo $dt->getCalendarById($_POST['edit_id'])->getDay(); } ?>" >
                    </div>
                    <div class="form-group">
                        <label>Thời gianm</label>
                        <input type="text" name="time1" class="form-control" placeholder="Nhập Thời gian" value="<?php if(isset($_POST['edit_id'])){ echo $dt->getCalendarById($_POST['edit_id'])->getTime(); } ?>">
                    </div>
                    <div class="form-group">
                        <label>Phòng</label>
                        <input type="text" name="place1" class="form-control" placeholder="Nhập Phòng" value="<?php if(isset($_POST['edit_id'])){ echo $dt->getCalendarById($_POST['edit_id'])->getPlace(); } ?>" >
                    </div>
                    <div class="form-group">
                        <label>Ngày</label>
                        <input type="text" name="date1" class="form-control" placeholder="Nhập Ngày" value="<?php if(isset($_POST['edit_id'])){ echo $dt->getCalendarById($_POST['edit_id'])->getDate(); } ?>" >
                    </div>
                  
                    <div class="form-group">
                        <label>Link ảnh</label>
                        <input type="text" name="image1" class="form-control" placeholder="Chọn ảnh trong thư mục img" value="<?php if(isset($_POST['edit_id'])){ echo $dt->getCalendarById($_POST['edit_id'])->getImage(); } ?>" >
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


            <form action="CalendarLL.php" method="POST">

                <div class="modal-body">

                <div class="form-group">
                        <label> ID </label>
                        <input type="text" name="id" class="form-control" placeholder="Nhập ID" >
                    </div>
                    <div class="form-group">
                        <label> Tên</label>
                        <input type="text" name="name" class="form-control" placeholder="Nhập Tên" >
                    </div>
                    <div class="form-group">
                        <label> Thứ </label>
                        <input type="text" name="day" class="form-control" placeholder="Nhập Thứ" >
                    </div>
                    <div class="form-group">
                        <label>Thời gianm</label>
                        <input type="text" name="time" class="form-control" placeholder="Nhập Thời gian" >
                    </div>
                    <div class="form-group">
                        <label>Phòng</label>
                        <input type="text" name="place" class="form-control" placeholder="Nhập Phòng" >
                    </div>
                    <div class="form-group">
                        <label>Ngày</label>
                        <input type="text" name="date" class="form-control" placeholder="Nhập Ngày" >
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
            <h6 class="m-0 font-weight-bold text-primary">Danh sách lịch nhân viên 
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addadminprofile123">
                   Thêm lịch nhân viên
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
                            <th>Địa điểm</th>
                            <th>Thời gian</th>
                           
                            <th>Ngày</th>
                            <th>CHỈNH SỬA </th>
                            <th>XÓA </th>
                            

                        </tr>
                    </thead>
                    <tbody>
                        <?php $gh=[]; if(isset($_POST['search'])){$gh =$dt->getCalendarByName($_POST['search']); }else {$gh =$dt->getList();} foreach ($gh as $value): ?>
                            <tr>
                                <td><?php echo $value->getId(); ?></td>
                                <td><?php echo $value->getName(); ?></td>
                                     <td> <?php echo $value->getPlace(); ?> </td>
                                <td> <?php echo $value->getTime(); ?></td>
                           
                                <td> <?php echo $value->getDate(); ?> </td>
                               
                                <td>

                                    <form action="CalendarLL.php" method="post">
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
include('includes/scripts.php');
include('includes/footer.php');
?>
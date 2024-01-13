<?php require(APPPATH.'views/layouts/Website/header.php'); ?>
<div class="row">
    <div class="col-lg-12 p-r-0 title-margin-right">
        <div class="page-header">
            <div class="page-title">
                <h1>Quản Lý Thông Tin Cá Nhân</h1>
            </div>
        </div>
    </div>
</div>

<div class="row">

    <div class="col-lg-12">
        <div class="card alert">
            <div class="card-body">
                <div class="basic-form">
                    <form method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <label>Họ Tên: </label>
                            <?php if(isset($detail[0]['HoTen']) && !empty($detail[0]['HoTen'])){ ?>
                                <input type="text" class="form-control" placeholder="Họ Tên *" name="hoten" value="<?php echo $detail[0]['HoTen']; ?>">
                            <?php }else{ ?>
                                <input type="text" class="form-control" placeholder="Họ Tên *" name="hoten">
                            <?php } ?>
                        </div>
                        <div class="form-group">
                            <label>Tên Đăng Nhập: </label>
                            <?php if(isset($detail[0]['TaiKhoan']) && !empty($detail[0]['TaiKhoan'])){ ?>
                                <input type="text" class="form-control" placeholder="Tên Đăng Nhập *" name="taikhoan" value="<?php echo $detail[0]['TaiKhoan']; ?>" disabled>
                            <?php }else{ ?>
                                <input type="text" class="form-control" placeholder="Tên Đăng Nhập *" name="taikhoan" disabled>
                            <?php } ?>
                        </div>
                        <div class="form-group">
                            <label>Số Điện Thoại: </label>
                            <?php if(isset($detail[0]['SoDienThoai']) && !empty($detail[0]['SoDienThoai'])){ ?>
                                <input type="text" class="form-control" placeholder="Số Điện Thoại *" name="sodienthoai" value="<?php echo $detail[0]['SoDienThoai']; ?>">
                            <?php }else{ ?>
                                <input type="text" class="form-control" placeholder="Số Điện Thoại *" name="sodienthoai">
                            <?php } ?>
                        </div>
                        <div class="form-group">
                            <label>Email: </label>
                            <?php if(isset($detail[0]['Email']) && !empty($detail[0]['Email'])){ ?>
                                <input type="text" class="form-control" name="email" placeholder="Email *" name="email" value="<?php echo $detail[0]['Email']; ?>">
                            <?php }else{ ?>
                                <input type="text" class="form-control" name="email" placeholder="Email *" name="email">
                            <?php } ?>
                        </div>
                        <div class="form-group">
                            <label>Mật Khẩu Mới: </label>
                            <input type="password" class="form-control" placeholder="Nhập Mật Khẩu Mới *" name="matkhau">
                        </div>
                        <div class="form-group">
                            <label>Nhập Lại Mật Khẩu: </label>
                            <input type="password" class="form-control" placeholder="Nhập Lại Mật Khẩu *" name="matkhau2">
                        </div>
                        <div>
                        	<button type="submit" class="btn btn-primary">Cập Nhật Cá Nhân</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>
<?php require(APPPATH.'views/layouts/Website/footer.php'); ?>
<style type="text/css">
	.form-control[disabled], .form-control[readonly], fieldset[disabled] .form-control {
	    background-color: white;
	    opacity: 1;
	}
</style>

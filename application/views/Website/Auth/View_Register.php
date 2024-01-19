<?php require(APPPATH.'views/layouts/Website/header.php'); ?>

<div class="row">
    <div class="col-lg-12">
        <div class="row">
            <div class="col-lg-12">
                <div class="page-header">
                    <div class="page-title">
                        <h1>Đăng Ký Tài Khoản</h1>
                    </div>
                </div>
                <div class="card alert">
                    <div class="card-body">
                        <div class="login-content m-0">
                            <div class="login-form">
                                <h4>ĐĂNG KÝ - TÀI KHOẢN</h4>
                                <form method="POST">
                                    <div class="form-group">
                                        <label>Họ Tên</label>
                                        <input type="text" class="form-control" placeholder="Nhập họ tên *" name="hoten">
                                    </div>
                                    <div class="form-group">
                                        <label>Số Điện Thoại</label>
                                        <input type="text" class="form-control" placeholder="Nhập số điện thoại *" name="sodienthoai">
                                    </div>
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="text" class="form-control" placeholder="Nhập email *" name="email">
                                    </div>
                                    <div class="form-group">
                                        <label>Tài khoản</label>
                                        <input type="text" class="form-control" placeholder="Nhập tài khoản *" name="taikhoan">
                                    </div>
                                    <div class="form-group">
                                        <label>Mật khẩu</label>
                                        <input type="password" class="form-control" placeholder="Nhập mật khẩu *" name="matkhau">
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-flat m-b-10 m-t-30">Đăng Ký</button>
                                    <a href="<?php echo base_url('dang-nhap/') ?>" class="btn btn-muted" style="color: blueviolet;">ĐĂNG NHẬP TÀI KHOẢN?</a>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>



<?php require(APPPATH.'views/layouts/Website/footer.php'); ?>

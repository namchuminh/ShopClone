<?php require(APPPATH.'views/layouts/Website/header.php'); ?>

<div class="row">
    <div class="col-lg-12">
        <div class="row">
            <div class="col-lg-12">
                <div class="page-header">
                    <div class="page-title">
                        <h1>Khôi Phục Mật Khẩu</h1>
                    </div>
                </div>
                <div class="card alert">
                    <div class="card-body">
                        <div class="login-content m-0">
                            <div class="login-form">
                                <h4>Quên Mật Khẩu - Khách Hàng</h4>
                                <form method="POST">
                                    <div class="form-group">
                                        <label>Email Đăng Ký</label>
                                        <input type="text" class="form-control" placeholder="Nhập email của tài khoản *" name="email">
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-flat m-b-10 m-t-30">Lấy Mật Khẩu</button>
                                    <a href="<?php echo base_url('dang-nhap/') ?>" class="btn btn-muted" style="color: blueviolet;">Đăng Nhập Tài Khoản?</a>
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

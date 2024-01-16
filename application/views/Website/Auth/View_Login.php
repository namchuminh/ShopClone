<?php require(APPPATH.'views/layouts/Website/header.php'); ?>

<div class="row">
    <div class="col-lg-12">
        <div class="row">
            <div class="col-lg-12">
                <div class="page-header">
                    <div class="page-title">
                        <h1>Đăng Nhập Hệ Thống</h1>
                    </div>
                </div>
                <div class="card alert">
                    <div class="card-body">
                        <div class="login-content m-0">
                            <div class="login-form">
                                <h4>ĐĂNG NHẬP - KHÁCH HÀNG</h4>
                                <form method="POST">
                                    <div class="form-group">
                                        <label>Tài khoản</label>
                                        <input type="text" class="form-control" placeholder="Nhập tài khoản *" name="taikhoan">
                                    </div>
                                    <div class="form-group">
                                        <label>Mật khẩu</label>
                                        <input type="password" class="form-control" placeholder="Nhập mật khẩu *" name="matkhau">
                                    </div>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox"> Nhớ mật khẩu
                                        </label>
                                        <label class="pull-right">
                                            <a href="<?php echo base_url('quen-mat-khau/') ?>">Quên mật khẩu?</a>
                                        </label>
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-flat m-b-10 m-t-30">Đăng Nhập</button>
                                    <a href="<?php echo base_url('dang-ky/') ?>" class="btn btn-muted" style="color: blueviolet;">Đăng Ký TÀI KHOẢN?</a>
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

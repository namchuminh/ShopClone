<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?php echo $title; ?></title>

    <!-- ================= Favicon ================== -->
    <!-- Standard -->
    <link rel="shortcut icon" href="http://placehold.it/64.png/000/fff">
    <!-- Retina iPad Touch Icon-->
    <link rel="apple-touch-icon" sizes="144x144" href="http://placehold.it/144.png/000/fff">
    <!-- Retina iPhone Touch Icon-->
    <link rel="apple-touch-icon" sizes="114x114" href="http://placehold.it/114.png/000/fff">
    <!-- Standard iPad Touch Icon-->
    <link rel="apple-touch-icon" sizes="72x72" href="http://placehold.it/72.png/000/fff">
    <!-- Standard iPhone Touch Icon-->
    <link rel="apple-touch-icon" sizes="57x57" href="http://placehold.it/57.png/000/fff">

    <!-- Styles -->
    <link href="<?php echo base_url('public/admin/'); ?>css/lib/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo base_url('public/admin/'); ?>css/lib/themify-icons.css" rel="stylesheet">
    <link href="<?php echo base_url('public/admin/'); ?>css/lib/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url('public/admin/'); ?>css/lib/unix.css" rel="stylesheet">
    <link href="<?php echo base_url('public/admin/'); ?>css/style.css" rel="stylesheet">

</head>

<body class="bg-default">

    <div class="unix-login">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-lg-offset-3">
                    <div class="login-content">
                        <div class="login-form">
                            <h4>QUÊN MẬT KHẨU?</h4>
                            <form method="POST">
                                <div class="form-group">
                                    <label>Nhập Email Quản Trị</label>
                                    <input type="text" class="form-control" placeholder="Nhập email quản trị *" name="email">
                                </div>
                                <a style="color: blueviolet;" href="<?php echo base_url('admin/dang-nhap/') ?>">Thử Đăng Nhập Lại?</a>
                                <button type="submit" class="btn btn-primary btn-flat m-b-30 m-t-30">Đặt Lại Mật Khẩu</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="toast-top-right"></div>
</body>

</html>
<script src="<?php echo base_url('public/admin/'); ?>js/lib/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<?php if(isset($error) && !empty($error)){ ?>
    <script>
        $(document).ready(function(){
            toastr.options = {
                closeButton: true,
                progressBar: true,
                positionClass: 'toast-top-right', // Vị trí hiển thị
                timeOut: 5000 // Thời gian tự động đóng
            };
            toastr.error('<?php echo $error; ?>', 'Lỗi Đăng Nhập');
        });
    </script>
<?php } ?>

<?php if(isset($_SESSION['error']) && !empty($_SESSION['error'])){ ?>
    <script>
        $(document).ready(function(){
            toastr.options = {
                closeButton: true,
                progressBar: true,
                positionClass: 'toast-top-right', // Vị trí hiển thị
                timeOut: 5000 // Thời gian tự động đóng
            };
            toastr.error('<?php echo $_SESSION['error']; ?>', 'Thất Bại');
        });
    </script>
    <?php unset($_SESSION['error']); ?>
<?php } ?>

<?php if(isset($_SESSION['success']) && !empty($_SESSION['success'])){ ?>
    <script>
        $(document).ready(function(){
            toastr.options = {
                closeButton: true,
                progressBar: true,
                positionClass: 'toast-top-right', // Vị trí hiển thị
                timeOut: 5000 // Thời gian tự động đóng
            };
            toastr.success('<?php echo $_SESSION['success']; ?>', 'Thành Công');
        });
    </script>
    <?php unset($_SESSION['success']); ?>
<?php } ?>
<?php require(APPPATH.'views/'.'layouts/header.php'); ?>
<div class="row">
    <div class="col-lg-8 p-r-0 title-margin-right">
        <div class="page-header">
            <div class="page-title">
                <h1>Quản Lý Khuyến Mãi</h1>
            </div>
        </div>
    </div>
    <!-- /# column -->
    <div class="col-lg-4 p-l-0 title-margin-left">
        <div class="page-header">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li><a href="<?php echo base_url('admin/'); ?>">Trang Chủ</a></li>
                    <li><a href="<?php echo base_url('admin/khuyen-mai/'); ?>">Khuyến Mãi</a></li>
                    <li class="active">Sửa Khuyến Mãi</li>
                </ol>
            </div>
        </div>
    </div>
    <!-- /# column -->
</div>

<div class="row">

    <div class="col-lg-12">
        <div class="card alert">
            <div class="card-header">
                <h4>Nhập Thông Tin Khuyến Mãi</h4>
                <div class="card-header-right-icon">
                    <ul>
                        <li class="card-close" data-dismiss="alert"><i class="ti-close"></i></li>
                    </ul>
                </div>
            </div>
            <br>
            <div class="card-body">
                <div class="basic-form">
                    <form method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <label>Số Tiền Nạp 1 Lúc Tối Thiểu</label>
                            <input type="number" class="form-control" placeholder="Số Tiền Nạp Tổi Thiểu *" name="naptoithieu" value="<?php echo $detail[0]['NapToiThieu'] ?>">
                        </div>
                        <div class="form-group">
                            <label>Chiết Khấu Khuyến Mãi Khi Đủ Mốc</label>
                            <input type="number" class="form-control" placeholder="Chiết Khấu Khuyến Mãi (%) *" name="phantramkhuyenmai" value="<?php echo $detail[0]['PhanTramKhuyenMai'] ?>">
                        </div>
                        <br>
                        <div>
                            <a class="btn btn-default" href="<?php echo base_url('admin/khuyen-mai/'); ?>">Quay Lại</a>
                            <button type="submit" class="btn btn-primary">Sửa Khuyến Mãi</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>

<?php require(APPPATH.'views/'.'layouts/footer.php'); ?>

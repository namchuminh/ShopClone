<?php require(APPPATH.'views/'.'layouts/header.php'); ?>
<div class="row">
    <div class="col-lg-8 p-r-0 title-margin-right">
        <div class="page-header">
            <div class="page-title">
                <h1>Quản Lý Sản Phẩm</h1>
            </div>
        </div>
    </div>
    <!-- /# column -->
    <div class="col-lg-4 p-l-0 title-margin-left">
        <div class="page-header">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li><a href="<?php echo base_url('admin/'); ?>">Trang Chủ</a></li>
                    <li><a href="<?php echo base_url('admin/san-pham/'); ?>">Sản Phẩm</a></li>
                    <li class="active">Xóa Clone</li>
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
                <h4>Nhập Danh Sách Clone</h4>
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
                            <label>Tên Sản Phẩm</label>
                            <input type="text" class="form-control" placeholder="Tên Sản Phẩm *" value="<?php echo $detail[0]['TenSanPham']; ?>" disabled>
                        </div>
                        <div class="form-group">
                            <label>Chuyên Mục</label>
                            <input type="text" class="form-control" placeholder="Tên Chuyên Mục *" value="<?php echo $detail[0]['TenChuyenMuc']; ?>" disabled>
                        </div>
                        <div class="form-group">
                            <label>Dach Sách Tài Khoản Cần Xóa</label>
                            <textarea class="form-control" rows="12" name="danhsach" placeholder="1 dòng 1 tài khoản"></textarea>
                        </div>
                        <br>
                        <div>
                        	<a class="btn btn-default" href="<?php echo base_url('admin/san-pham/'); ?>">Quay Lại</a>
                        	<button type="submit" class="btn btn-primary">Xóa Clone</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>

<?php require(APPPATH.'views/'.'layouts/footer.php'); ?>



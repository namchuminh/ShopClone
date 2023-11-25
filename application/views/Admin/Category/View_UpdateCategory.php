<?php require(APPPATH.'views/'.'layouts/header.php'); ?>

<div class="row">
    <div class="col-lg-8 p-r-0 title-margin-right">
        <div class="page-header">
            <div class="page-title">
                <h1>Quản Lý Chuyên Mục</h1>
            </div>
        </div>
    </div>
    <!-- /# column -->
    <div class="col-lg-4 p-l-0 title-margin-left">
        <div class="page-header">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li><a href="<?php echo base_url('admin/'); ?>">Trang Chủ</a></li>
                    <li><a href="<?php echo base_url('admin/chuyen-muc/'); ?>">Chuyên Mục</a></li>
                    <li class="active">Sửa Chuyên Mục</li>
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
                <h4>Nhập Thông Tin Chuyên Mục</h4>
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
                            <label>Tên Chuyên Mục</label>
                            <input type="text" class="form-control" placeholder="Tên Chuyên Mục *" name="tenchuyenmuc" value="<?php echo $detail[0]['TenChuyenMuc']; ?>">
                        </div>
                        <div class="form-group">
                            <label>Hình Ảnh</label>
                            <input type="file" class="form-control" name="hinhanh" placeholder="Hình Ảnh *" value="<?php echo $detail[0]['HinhAnh']; ?>">
                        </div>
                        <div class="form-group">
                            <label>Trạng Thái</label>
                            <select class="form-control" name="trangthai">
                            	<?php if($detail[0]['TrangThai'] == 0){ ?>
                            		<option value="1">Hiển Thị</option>
									<option value="0" selected>Không Hiển Thị</option>
                            	<?php }else{ ?>
                            		<option value="1" selected>Hiển Thị</option>
									<option value="0">Không Hiển Thị</option>
                            	<?php } ?>
							</select>
                        </div>
                        <br>
                        <div>
                        	<a class="btn btn-default" href="<?php echo base_url('admin/chuyen-muc/'); ?>">Quay Lại</a>
                        	<button type="submit" class="btn btn-primary">Sửa Chuyên Mục</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>



<?php require(APPPATH.'views/'.'layouts/footer.php'); ?>

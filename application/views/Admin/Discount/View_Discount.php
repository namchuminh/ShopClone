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
                    <li class="active">Khuyến Mãi</li>
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
	            <div class="card-header-right-icon">
	                <ul>
	                    <li class="card-close" data-dismiss="alert"><i class="ti-close"></i></li>
	                </ul>
	            </div>
	        </div>
	        <div class="card-body">
	            <div class="table-responsive">
	                <table class="table">
	                    <thead>
	                        <tr>
	                            <th>#</th>
	                            <th>Nạp Tối Thiểu</th>
	                            <th>Giá Trị Khuyến Mãi (%)</th>
	                            <th>Ngày Tạo</th>
	                            <th style="text-align: left;">Hành Động</th>
	                        </tr>
	                    </thead>
	                    <tbody>

	                    	<?php foreach ($list as $key => $value): ?>
	                    		<tr>
		                            <th scope="row"><?php echo $key + 1; ?></th>
		                            <td>
		                            	<span class="badge badge-primary"><?php echo number_format($value['NapToiThieu']); ?> vnd</span>
		                            </td>
		                            <td>
		                            	<span class="badge badge-warning"><?php echo $value['PhanTramKhuyenMai']; ?>%</span>
		                            </td>
		                            <td>
		                            	<span class="badge badge-dark"><?php echo $value['ThoiGian']; ?></span>
		                            </td>
		                            <td>
		                            	<a class="btn btn-primary" href="<?php echo base_url('admin/khuyen-mai/sua/'.$value['MaKhuyenMai'].'/'); ?>">Cập Nhật</a>
		                            	<a href="<?php echo base_url('admin/khuyen-mai/xoa/'.$value['MaKhuyenMai'].'/'); ?>" class="btn btn-danger" href="">Xóa</a>
		                            </td>
		                        </tr>
	                    	<?php endforeach ?>
	                        
	                    </tbody>
	                </table>
	            </div>
	        </div>
	    </div>
	</div>
</div>

<?php require(APPPATH.'views/'.'layouts/footer.php'); ?>


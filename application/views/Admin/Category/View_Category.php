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
                    <li class="active">Chuyên Mục</li>
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
	            <br>
	            <br>
	            <form action="<?php echo base_url('admin/chuyen-muc/tim-kiem/'); ?>" method="POST">
                	<div class="form-group row">
                		<div class="col-md-4">
                			<input type="text" class="form-control input-focus" placeholder="Tên chuyên mục *" name="tenchuyenmuc">
                		</div>
                        <div class="col-md-4">
                			<select class="form-control input-focus" name="trangthai">
                				<option value="" hidden>Trạng Thái</option>
								<option value="1">Hiển Thị</option>
								<option value="0">Không Hiển Thị</option>
							</select>
                		</div>
                		<div class="col-md-4">
                			<button type="submit" class="btn btn-primary" style="width: 100%; height: 100%;">Tìm Kiếm</button>
                		</div>
                    </div>
                </form>	
	        </div>
	        <div class="card-body">
	            <div class="table-responsive">
	                <table class="table">
	                    <thead>
	                        <tr>
	                            <th>#</th>
	                            <th>Hình Ảnh</th>
	                            <th>Tên Chuyên Mục</th>
	                            <th>Trạng Thái</th>
	                            <th style="text-align: left;">Hành Động</th>
	                        </tr>
	                    </thead>
	                    <tbody>

	                    	<?php foreach ($list as $key => $value): ?>
	                    		<tr>
		                            <th scope="row"><?php echo $key + 1; ?></th>
		                            <td>
		                            	<img src="<?php echo $value['HinhAnh']; ?>" height="65" width="65">
		                            </td>
		                            <td>
		                            	<strong>
		                            		<?php echo $value['TenChuyenMuc']; ?>
		                            	</strong>
		                            </td>
		                            <td>
		                            	<?php if($value['TrangThai'] == 1){ ?>
		                            		<span class="badge badge-success">Hiển Thị</span>
		                            	<?php }else{ ?>
		                            		<span class="badge badge-secondary">Không Hiển Thị</span>
		                            	<?php } ?>
		                            </td>
		                            <td style="float: left;">
		                            	<a class="btn btn-primary" href="<?php echo base_url('admin/chuyen-muc/sua/'.$value['MaChuyenMuc'].'/'); ?>">Cập Nhật</a>
		                            	<a href="<?php echo base_url('admin/chuyen-muc/xoa/'.$value['MaChuyenMuc'].'/'); ?>" class="btn btn-danger" href="">Xóa</a>
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


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
                    <li class="active">Sản Phẩm</li>
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
	            <form action="<?php echo base_url('admin/san-pham/tim-kiem/'); ?>" method="POST">
                	<div class="form-group row">
                		<div class="col-md-4">
                			<input type="text" class="form-control input-focus" placeholder="Tên Sản Phẩm *" name="tensanpham">
                		</div>
                        <div class="col-md-4">
                			<select class="form-control input-focus" name="machuyenmuc">
                				<option value="" hidden>Chuyên Mục</option>
                				<?php foreach ($category as $key => $value): ?>
                					<option value="<?php echo $value['MaChuyenMuc']; ?>"><?php echo $value['TenChuyenMuc']; ?></option>
                				<?php endforeach ?>
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
	                            <th>Tên Sản Phẩm</th>
	                            <th>Giá Bán</th>
	                            <th>Chuyên Mục</th>
	                            <th>Trạng Thái</th>
	                            <th>Đã Bán</th>
	                            <th>Nhập Clone</th>
	                            <th>Xóa Clone</th>
	                            <th style="text-align: left;">Hành Động</th>
	                        </tr>
	                    </thead>
	                    <tbody>

	                    	<?php foreach ($list as $key => $value): ?>
	                    		<tr>
		                            <th scope="row"><?php echo $key + 1; ?></th>
		                            <td>
		                            	<strong><?php echo $value['TenSanPham']; ?></strong>
		                            </td>
		                            <td>
		                            	<span class="badge badge-danger"><?php echo $value['GiaBan']; ?></span>
		                            </td>
		                            <td>
		                            	<span class="badge badge-dark"><?php echo $value['TenChuyenMuc']; ?></span>
		                            </td>
		                            <td>
		                            	<?php if($value['TrangThai'] == 1){ ?>
		                            		<span class="badge badge-success">Hiển Thị</span>
		                            	<?php }else{ ?>
		                            		<span class="badge badge-secondary">Không Hiển Thị</span>
		                            	<?php } ?>
		                            </td>
		                            <td>
		                            	<span class="badge badge-warning"><?php echo $value['DaBan']; ?></span>
		                            </td>
		                            <td>
		                            	<a class="btn btn-info" href="<?php echo base_url('admin/san-pham/'.$value['MaSanPham'].'/nhap-clone/'); ?>">Thêm Clone</a>
		                            </td>
		                            <td>
		                            	<a class="btn btn-danger" href="<?php echo base_url('admin/san-pham/'.$value['MaSanPham'].'/xoa-clone/'); ?>">Xóa Clone</a>
		                            </td>
		                            <td style="float: left;">
		                            	<a class="btn btn-primary" href="<?php echo base_url('admin/san-pham/sua/'.$value['MaSanPham'].'/'); ?>">Cập Nhật</a>
		                            	<a href="<?php echo base_url('admin/san-pham/xoa/'.$value['MaSanPham'].'/'); ?>" class="btn btn-danger" href="">Xóa</a>
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


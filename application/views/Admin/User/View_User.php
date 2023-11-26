<?php require(APPPATH.'views/'.'layouts/header.php'); ?>

<div class="row">
    <div class="col-lg-8 p-r-0 title-margin-right">
        <div class="page-header">
            <div class="page-title">
                <h1>Quản Lý Người Dùng</h1>
            </div>
        </div>
    </div>
    <!-- /# column -->
    <div class="col-lg-4 p-l-0 title-margin-left">
        <div class="page-header">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li><a href="<?php echo base_url('admin/'); ?>">Trang Chủ</a></li>
                    <li class="active">Người Dùng</li>
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
	            <form action="<?php echo base_url('admin/nguoi-dung/tim-kiem/'); ?>" method="POST">
                	<div class="form-group row">
                		<div class="col-md-4">
                			<input type="text" class="form-control input-focus" placeholder="Tên Người Dùng (username) *" name="tennguoidung">
                		</div>
                        <div class="col-md-4">
                			<select class="form-control input-focus" name="trangthai">
                				<option value="" hidden>Trạng Thái</option>
                				<option value="1">Sử Dụng</option>
                				<option value="0">Bị Chặn</option>
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
	                            <th>Thông Tin Người Dùng</th>
	                            <th>Ví Tiền</th>
	                            <th>Ngày Tham Gia</th>
	                            <th>Trạng Thái</th>
	                            <th style="text-align: left;">Hành Động</th>
	                        </tr>
	                    </thead>
	                    <tbody>

	                    	<?php foreach ($list as $key => $value): ?>
	                    		<tr>
		                            <th scope="row"><?php echo $key + 1; ?></th>
		                            <td>
		                            	<ul>
		                            		<li>Họ tên: <strong><?php echo $value['HoTen']; ?></strong></li>
		                            		<li>Tên đăng nhập: <strong><?php echo $value['TaiKhoan']; ?></strong></li>
		                            		<li>Số điện thoại: <strong><?php echo $value['SoDienThoai']; ?></strong></li>
		                            		<li>Email: <strong><?php echo $value['Email']; ?></strong></li>
		                            		<li>Phân quyền: <strong><?php echo $value['PhanQuyen'] == 0 ? "Khách Hàng" : "Quản Trị Viên"; ?></strong></li>
		                            	</ul>
		                            </td>
		                            <td>
		                            	<ul>
		                            		<li>Số dư khả dụng: <strong><?php echo number_format($value['SoDuKhaDung']); ?> đ</strong></li>
		                            		<li>Đã sử dụng: <strong><?php echo number_format($value['DaSuDung']); ?> đ</strong></li>
		                            		<li>Tổng nạp: <strong><?php echo number_format($value['TongNap']); ?> đ</strong></li>
		                            	</ul>
		                            </td>
		                            <td>
		                            	<span class="badge badge-dark"><?php echo $value['NgayThamGia']; ?></span>
		                            </td>
		                            <td>
		                            	<?php if($value['TrangThai'] == 1){ ?>
		                            		<span class="badge badge-success">Sử Dụng</span>
		                            	<?php }else{ ?>
		                            		<span class="badge badge-secondary">Bị Chặn</span>
		                            	<?php } ?>
		                            </td>
		                            <td>
		                            	<a class="btn btn-primary" href="<?php echo base_url('admin/nguoi-dung/sua/'.$value['MaNguoiDung'].'/'); ?>">Cập Nhật</a>
		                            	<?php if($value['TrangThai'] == 1){ ?>
		                            		<a href="<?php echo base_url('admin/nguoi-dung/trang-thai/'.$value['MaNguoiDung'].'/'); ?>" class="btn btn-danger" href="">Chặn User</a>
		                            	<?php }else{ ?>
		                            		<a href="<?php echo base_url('admin/nguoi-dung/trang-thai/'.$value['MaNguoiDung'].'/'); ?>" class="btn btn-warning" href="">Bỏ Chặn</a>
		                            	<?php } ?>
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


<?php require(APPPATH.'views/layouts/Website/header.php'); ?>

<div class="row">
    <div class="col-lg-12">
    	<div class="row">
    		<div class="col-lg-12">
	    		<div class="page-header">
		            <div class="page-title">
		                <h1>Danh sách đã mua</h1>
		            </div>
		        </div>
		        <div class="card alert">
		            <div class="card-body">
		                <div class="table-responsive">
		                    <table class="table table-bordered">
		                        <thead>
		                            <tr>
		                                <th>#</th>
		                                <th>Mã Giao Dịch</th>
		                                <th>Tên Sản Phẩm</th>
		                                <th>Số Lượng</th>
		                                <th>Thanh Toán</th>
		                                <th>Loại Sản Phẩm</th>
		                                <th>Thời Gian</th>
		                                <th>Thao Tác</th>
		                            </tr>
		                        </thead>
		                        <tbody>
		                        	<?php foreach ($list as $key => $value): ?>
		                        		<tr>
			                                <th scope="row"><?php echo $key + 1; ?></th>
			                                <td><b><?php echo $value['MaGiaoDich']; ?></b></td>
			                                <td>
			                                	<?php if(count($this->Model_Product->getById($value['MaSanPham'])) <= 0){ ?>
			                                		Sản phẩm bị Admin ẩn
			                                	<?php }else{ ?>
			                                		<a class="color-primary" href="<?php echo base_url('san-pham/'.$value['MaSanPham'].'/'); ?>">
			                                			<?php echo $this->Model_Product->getById($value['MaSanPham'])[0]['TenSanPham']; ?>
			                                		</a>
			                                	<?php } ?>
			                                </td>
			                                <td>
			                                	<span class="badge badge-primary">
			                                		<?php echo $value['SoLuong']; ?> tài khoản
			                                	</span>
			                                </td>
			                                <td>
			                                	<span class="badge badge-danger">
			                                		<?php echo number_format($value['ThanhToan']); ?> VND
			                                	</span>
			                            	</td>
			                                <td>
			                                	<?php if(count($this->Model_Category->getById($value['MaChuyenMuc'])) <= 0){ ?>
			                                		<span class="badge badge-dark">
			                                			Chuyên mục bị Admin ẩn
			                                		</span>
			                                	<?php }else{ ?>
				                                	<a class="color-white" href="<?php echo base_url('chuyen-muc/'.$value['MaChuyenMuc'].'/'); ?>">
				                                		<span class="badge badge-dark">
				                                			<?php echo $this->Model_Category->getById($value['MaChuyenMuc'])[0]['TenChuyenMuc']; ?>
				                                		</span>
				                                	</a>
			                                	<?php } ?>
			                                </td>
			                                <td>
			                                	<span class="badge badge-dark">
			                                		<?php echo $value['ThoiGian']; ?>
			                                	</span>
			                                </td>
			                                <td>
			                                	<a class="btn btn-primary w-100" href="<?php echo base_url('don-mua/'.$value['MaGiaoDich'].'/') ?>">Xem Ngay</a>
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
    </div>
</div>

<?php require(APPPATH.'views/layouts/Website/footer.php'); ?>

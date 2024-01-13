<?php require(APPPATH.'views/layouts/Website/header.php'); ?>

<div class="row">
    <div class="col-lg-8">
		<?php if(count($product) >= 1){ ?>
	    	<div class="row">
	    		<div class="col-lg-12">
		    		<div class="page-header">
			            <div class="page-title">
			                <h1><?php echo $categoryProduct[0]['TenChuyenMuc']; ?></h1>
			            </div>
			        </div>
			        <div class="card alert">
			            <div class="card-body">
			                <div class="table-responsive">
			                    <table class="table table-bordered">
			                        <thead>
			                            <tr>
			                                <th>#</th>
			                                <th>Tên Sản Phẩm</th>
			                                <th>Quốc Gia</th>
			                                <th>Mua Tối Thiểu</th>
			                                <th>Hiện Có</th>
			                                <th>Đã Bán</th>
			                                <th>Đơn Giá</th>
			                                <th>Thao Tác</th>
			                            </tr>
			                        </thead>
			                        <tbody>
			                        	<?php foreach ($productCategory as $key => $value): ?>
			                        		<tr>
				                                <th scope="row"><?php echo $key + 1; ?></th>
				                                <td><?php echo $value['TenSanPham']; ?></td>
				                                <td>
				                                	<?php 
				                                		if(count($this->Model_Product->getNation($value['MaQuocGia'])) >= 1){
				                                			echo $this->Model_Product->getNation($value['MaQuocGia'])[0]['TenQuocGia'];
				                                		}else{
				                                			echo "Không xác định!";
				                                		}
				                                	?>
				                                		
				                                </td>
				                                <td>
				                                	<span class="badge badge-danger">
				                                		<?php echo $value['MuaToiThieu']; ?> tài khoản / 1 lần
				                                	</span>
				                                </td>
				                                <td>
				                                	<span class="badge badge-primary">
				                                		<?php echo $this->Model_Product->getNumberProduct($value['MaSanPham']); ?> tài khoản
				                                	</span>
				                            	</td>
				                                <td>
				                                	<span class="badge badge-warning">
				                                		<?php echo $value['DaBan']; ?> tài khoản
				                                	</span>
				                                </td>
				                                <td class="color-primary"><?php echo number_format($value['GiaBan']); ?>đ / 1 tài khoản</td>
				                                <td>
				                                	<?php if($this->Model_Product->getNumberProduct($value['MaSanPham']) >= $value['MuaToiThieu']){ ?>
				                                		<a href="<?php echo base_url('san-pham/'.$value['MaSanPham'].'/') ?>" class="btn btn-primary">Mua Ngay</a>
				                                	<?php }else{ ?>
				                                		<a href="<?php echo base_url('san-pham/'.$value['MaSanPham'].'/') ?>" class="btn btn-success">Hết Hàng</a>
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
	    <?php } ?>
    </div>
    <!-- /# column -->
    <div class="col-lg-4">
       <div class="page-header">
            <div class="page-title">
                <h1>Giao Dịch Gần Đây</h1>
            </div>
        </div>
    </div>
    <!-- /# column -->
</div>

<?php require(APPPATH.'views/layouts/Website/footer.php'); ?>

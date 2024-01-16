<?php require(APPPATH.'views/layouts/Website/header.php'); ?>

<div class="row">
    <div class="col-lg-12">
    	<div class="row">
    		<div class="col-lg-12">
	    		<div class="page-header">
		            <div class="page-title">
		                <h1>Lịch Sử Nạp Thẻ</h1>
		            </div>
		        </div>
		        <div class="card alert">
		            <div class="card-body">
		                <div class="table-responsive">
		                    <table class="table table-bordered">
		                        <thead>
		                            <tr>
		                                <th>#</th>
		                                <th>Mã Thẻ</th>
		                                <th>Seri Thẻ</th>
		                                <th>Loại Thẻ</th>
		                                <th>Mệnh Giá</th>
		                                <th>Thời Gian</th>
		                                <th>Trạng Thái</th>
		                            </tr>
		                        </thead>
		                        <tbody>
		                        	<?php foreach ($listCard as $key => $value): ?>
		                        		<tr>
			                                <th scope="row"><?php echo $key + 1; ?></th>
			                                <td class="color-primary">
			                                	<b><?php echo $value['MaThe']; ?></b>
			                                </td>
			                                <td class="color-primary">
			                                	<b><?php echo $value['SeriThe']; ?></b>
			                                </td>
			                                <td>
			                                	<span class="badge badge-warning">
			                                		<?php echo $value['LoaiThe']; ?>
			                                	</span>
			                                </td>
			                                <td>
			                                	<span class="badge badge-danger">
			                                		<?php echo number_format($value['MenhGia']); ?> VND
			                                	</span>
			                            	</td>
			                            	<td>
			                                	<span class="badge badge-dark">
			                                		<?php echo $value['ThoiGian']; ?>
			                                	</span>
			                            	</td>
			                                <td>
			                                	<?php if($value['TrangThai'] == 0){ ?>
			                                		<span class="badge badge-success">
				                                		Đang xử lý
				                                	</span>
			                                	<?php }else if($value['TrangThai'] == 1){ ?>
			                                		<span class="badge badge-primary">
				                                		Thành công
				                                	</span>
			                                	<?php }else{ ?>
			                                		<span class="badge badge-danger">
				                                		Thất bại
				                                	</span>
			                                	<?php } ?>
			                                </td>
			                            </tr>
		                        	<?php endforeach ?>
		                        </tbody>
		                    </table>
		                    <?php if(count($listCard) <= 0){ ?>
		                    	<br>
	                        	<p class="text-center">Bạn chưa thực hiện giao dịch nạp thẻ!</p>
	                        <?php } ?>
		                </div>
		            </div>
		        </div>
    		</div>
    	</div>

    	<div class="row">
    		<div class="col-lg-12">
	    		<div class="page-header">
		            <div class="page-title">
		                <h1>Lịch Sử Chuyển Khoản</h1>
		            </div>
		        </div>
		        <div class="card alert">
		            <div class="card-body">
		                <div class="table-responsive">
		                    <table class="table table-bordered">
		                        <thead>
		                            <tr>
		                                <th>#</th>
		                                <th>Ngân Hàng</th>
		                                <th>Loại Thẻ</th>
		                                <th>Số Tiền</th>
		                                <th>Nội Dung</th>
		                                <th>Thời Gian</th>
		                                <th>Trạng Thái</th>
		                            </tr>
		                        </thead>
		                        <tbody>
		                        	<?php foreach ($listBank as $key => $value): ?>
		                        		<tr>
			                                <th scope="row"><?php echo $key + 1; ?></th>
			                                <td class="color-primary">
			                                	<b><?php echo $value['NganHang']; ?></b>
			                                </td>
			                                <td class="color-primary">
			                                	<b><?php echo $value['LoaiThe']; ?></b>
			                                </td>
			                                <td>
			                                	<span class="badge badge-danger">
			                                		<?php echo number_format($value['SoTien']); ?> VND
			                                	</span>
			                            	</td>
			                            	<td>
			                                	<?php echo $value['NoiDung']; ?>
			                            	</td>
			                            	<td>
			                                	<span class="badge badge-dark">
			                                		<?php echo $value['ThoiGian']; ?>
			                                	</span>
			                            	</td>
			                                <td>
			                                	<?php if($value['TrangThai'] == "Thành công"){ ?>
			                                		<span class="badge badge-primary">
				                                		Thành công
				                                	</span>
			                                	<?php }else{ ?>
			                                		<span class="badge badge-danger">
				                                		Thất bại
				                                	</span>
			                                	<?php } ?>
			                                </td>
			                            </tr>
		                        	<?php endforeach ?>
		                        </tbody>
		                    </table>
		                    <?php if(count($listBank) <= 0){ ?>
		                    	<br>
	                        	<p class="text-center">Bạn chưa thực hiện giao dịch chuyển khoản!</p>
	                        <?php } ?>
		                </div>
		            </div>
		        </div>
    		</div>
    	</div>
    </div>
</div>

<?php require(APPPATH.'views/layouts/Website/footer.php'); ?>

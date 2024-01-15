<?php require(APPPATH.'views/layouts/Website/header.php'); ?>

<div class="row">
    <div class="col-lg-9">
    	<div class="row">
    		<div class="col-lg-12">
	    		<div class="page-header">
		            <div class="page-title">
		                <h1>Nạp Tiền Bằng Ngân Hàng</h1>
		            </div>
		        </div>
		        <div class="card alert">
		            <div class="card-body">
		                <div class="basic-form">
		                	<form method="POST">
		                		<?php if(count($configBank) <= 0 || empty($configBank[0]['Id']) || empty($configBank[0]['IdKey']) || ($configBank[0]['TrangThai'] <= 0)){ ?>
		                			<div class="form-group">
			                            <label>Số Tiền Nạp</label>
			                            <input type="number" class="form-control" placeholder="Số Tiền Nạp *" name="amount" disabled>
			                        </div>
			                        <div class="form-group">
			                            <label>Ngân Hàng Thanh Toán</label>
			                            <select class="form-control" name="vnp_BankCode" disabled>
								            <option value="" hidden="">Chọn Ngân Hàng</option>
								        </select>
			                        </div>
			                        <div class="form-group">
			                            <label>Nội Dung Thanh Toán</label>
			                            <textarea class="form-control" name="content" disabled><?php echo $_SESSION['fullname']; ?> nạp tiền vào tài khoản!</textarea>
			                        </div>
			                        <button type="submit" class="btn btn-primary" disabled>Chức Năng Nạp Tiền Ngân Hàng Đang Tắt</button>
		                		<?php }else{ ?>
		                			<div class="form-group">
			                            <label>Số Tiền Nạp</label>
			                            <input type="number" class="form-control" placeholder="Số Tiền Nạp Tối Thiểu 10000 VND *" name="amount">
			                        </div>
			                        <div class="form-group">
			                            <label>Ngân Hàng Thanh Toán</label>
			                            <select class="form-control" name="bank_code">
								            <option value="" hidden="">Chọn Ngân Hàng</option>
										    <option value="NCB"> Ngân Hàng NCB</option>
										    <option value="AGRIBANK"> Ngân Hàng Agribank</option>
										    <option value="SCB"> Ngân Hàng SCB</option>
										    <option value="SACOMBANK">Ngân Hàng SacomBank</option>
										    <option value="EXIMBANK"> Ngân Hàng EximBank</option>
										    <option value="MSBANK"> Ngân Hàng MSBANK</option>
										    <option value="NAMABANK"> Ngân Hàng NamABank</option>
										    <option value="VNMART"> Vi Điện Tử VnMart</option>
										    <option value="VIETINBANK">Ngân Hàng Vietinbank</option>
										    <option value="VIETCOMBANK"> Ngân Hàng VCB</option>
										    <option value="HDBANK">Ngân Hàng HDBank</option>
										    <option value="DONGABANK"> Ngân Hàng Đông A</option>
										    <option value="TPBANK"> Ngân Hàng TPBank</option>
										    <option value="OJB"> Ngân Hàng OceanBank</option>
										    <option value="BIDV"> Ngân Hàng BIDV</option>
										    <option value="TECHCOMBANK"> Ngân Hàng Techcombank</option>
										    <option value="VPBANK"> Ngân Hàng VPBank</option>
										    <option value="MBBANK"> Ngân Hàng MBBank</option>
										    <option value="ACB"> Ngân Hàng ACB</option>
										    <option value="OCB"> Ngân Hàng OCB</option>
										    <option value="IVB"> Ngân Hàng IVB</option>
										    <option value="VISA"> Thanh toán qua VISA/MASTER</option>
								        </select>
			                        </div>
			                        <div class="form-group">
			                            <label>Nội Dung Thanh Toán</label>
			                            <textarea class="form-control" name="content"><?php echo $_SESSION['fullname']; ?> nạp tiền vào tài khoản!</textarea>
			                        </div>
			                        <button type="submit" class="btn btn-primary">Nạp Tiền</button>
		                		<?php } ?>
		                	</form>
		                </div>
		            </div>
		        </div>
    		</div>
    	</div>
    	<?php if(count($configSale) >= 1){ ?>
	       	<div class="row">
	    		<div class="col-lg-12">
	    			<div class="page-header">
			            <div class="page-title">
			                <h1>Khuyến Mãi</h1>
			            </div>
			        </div>
			        <div class="card alert">
			            <div class="card-body">
			                <div class="table-responsive">
			                    <table class="table">
			                        <thead>
			                            <tr>
			                                <th>Nạp Tối Thiểu</th>
			                                <th>Khuyến Mãi (%)</th>
			                            </tr>
			                        </thead>
			                        <tbody>
			                        	<?php foreach ($configSale as $key => $value): ?>
			                        		<tr>
				                                <th>
				                                	<span class="badge badge-primary">
				                                		<?php echo number_format($value['NapToiThieu']); ?> VND
				                                	</span>
				                                </th>
				                                <td>
				                                	<span class="badge badge-danger">
				                                		<?php echo $value['PhanTramKhuyenMai']; ?>%
				                                	</span>
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
    <div class="col-lg-3">
    	<div class="row">
    		<div class="col-lg-12">
    			<div class="page-header">
		            <div class="page-title">
		                <h1>Lưu Ý Thanh Toán</h1>
		            </div>
		        </div>
		        <div class="card alert">
		            <div class="card-body">
		                <?php if(isset($configBank[0]['LuuY']) && !empty($configBank[0]['LuuY'])){ ?>
		            		<?php echo $configBank[0]['LuuY']; ?>
		            	<?php } ?>
		            </div>
		        </div>
    		</div>
    	</div>
    	
    </div>
    <!-- /# column -->
</div>

<?php require(APPPATH.'views/layouts/Website/footer.php'); ?>
<style type="text/css">
	.form-control[disabled], .form-control[readonly], fieldset[disabled] .form-control {
	    background-color: white;
	    opacity: 1;
	}

	.card-body li{
	    list-style: unset;
	}

	.card-body ul{
	    list-style: unset;
	}

	.card-body p{
		font-size: 14px;
		line-height: 30px;
		font-weight: 500;
	}

	.card-body ul{
		font-size: 14px;
		line-height: 30px;
		font-weight: 500;
	}

	.card-body li{
		font-size: 14px;
		line-height: 30px;
		font-weight: 500;
	}
	.form-control{
		font-family: system-ui, sans-serif;
	}
</style>
<script>
    tinymce.init({
        selector: '#chinhsach',
        readonly: true, 
        menubar: false,
        toolbar: false,
        statusbar: false,
        plugins: [],
    });
</script>
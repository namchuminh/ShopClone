<?php require(APPPATH.'views/layouts/Website/header.php'); ?>

<div class="row">
    <div class="col-lg-9">
    	<div class="row">
    		<div class="col-lg-12">
	    		<div class="page-header">
		            <div class="page-title">
		                <h1>Nạp Tiền Bằng Thẻ Cào</h1>
		            </div>
		        </div>
		        <div class="card alert">
		            <div class="card-body">
		                <div class="basic-form">
		                	<form method="POST">
		                		<?php if(count($configCard) <= 0 || empty($configCard[0]['Id']) || empty($configCard[0]['IdKey']) || ($configCard[0]['TrangThai'] <= 0)){ ?>
		                			<div class="form-group">
			                            <label>Mã Thẻ</label>
			                            <input type="text" class="form-control" placeholder="Mã Thẻ *" name="mathe" disabled>
			                        </div>
			                        <div class="form-group">
			                            <label>Mã Seri</label>
			                            <input type="text" class="form-control" placeholder="Mã Seri Thẻ *" name="seri" disabled>
			                        </div>
			                        <div class="form-group">
			                            <label>Loại Thẻ</label>
			                            <select class="form-control" name="type" disabled>
								            <option value="VIETTEL">VIETTEL</option>
								            <option value="MOBIFONE">MOBIFONE</option>
								            <option value="VINAPHONE">VINAPHONE</option>
								        </select>
			                        </div>
			                        <div class="form-group">
			                            <label>Mệnh Giá</label>
			                            <select class="form-control" name="amount" disabled>
			                            	<option value="10000">10.000 VND</option>
			                            	<option value="20000">20.000 VND</option>
								            <option value="50000">50.000 VND</option>
								            <option value="100000">100.000 VND</option>
								            <option value="200000">200.000 VND</option>
								            <option value="500000">500.000 VND</option>
								        </select>
			                        </div>
			                        <button type="submit" class="btn btn-primary" disabled>Chức Năng Nạp Thẻ Đang Tắt</button>
		                		<?php }else{ ?>
		                			<div class="form-group">
			                            <label>Mã Thẻ</label>
			                            <input type="text" class="form-control" placeholder="Mã Thẻ *" name="mathe">
			                        </div>
			                        <div class="form-group">
			                            <label>Mã Seri</label>
			                            <input type="text" class="form-control" placeholder="Mã Seri Thẻ *" name="seri">
			                        </div>
			                        <div class="form-group">
			                            <label>Loại Thẻ</label>
			                            <select class="form-control" name="type">
								            <option value="VIETTEL">VIETTEL</option>
								            <option value="MOBIFONE">MOBIFONE</option>
								            <option value="VINAPHONE">VINAPHONE</option>
								        </select>
			                        </div>
			                        <div class="form-group">
			                            <label>Mệnh Giá</label>
			                            <select class="form-control" name="amount">
			                            	<option value="10000">10.000 VND</option>
			                            	<option value="20000">20.000 VND</option>
								            <option value="50000">50.000 VND</option>
								            <option value="100000">100.000 VND</option>
								            <option value="200000">200.000 VND</option>
								            <option value="500000">500.000 VND</option>
								        </select>
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
		                <h1>Lưu Ý Nạp Thẻ</h1>
		            </div>
		        </div>
		        <div class="card alert">
		            <div class="card-body">
		                <?php if(isset($configCard[0]['LuuY']) && !empty($configCard[0]['LuuY'])){ ?>
		            		<?php echo $configCard[0]['LuuY']; ?>
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
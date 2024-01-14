<?php require(APPPATH.'views/layouts/Website/header.php'); ?>

<div class="row">
    <div class="col-lg-9">
    	<div class="row">
    		<div class="col-lg-12">
	    		<div class="page-header">
		            <div class="page-title">
		                <h1>Top Thành Viên</h1>
		            </div>
		        </div>
		        <div class="card alert">
		            <div class="card-body">
		                <div class="table-responsive">
		                    <table class="table table-bordered">
		                        <thead>
		                            <tr>
		                                <th>Xếp Hạng</th>
		                                <th>Thành Viên</th>
		                                <th>Tổng Tiền Nạp</th>
		                                <th>Ngày Tham Gia</th>
		                            </tr>
		                        </thead>
		                        <tbody>
		                        	<?php foreach ($userPay as $key => $value): ?>
		                        		<tr>
			                                <th scope="row">
			                                	<span class="badge badge-warning">
			                                		Top #<?php echo $key + 1; ?>
			                                	</span>	
			                                </th>
			                                <td>
			                                	<span class="badge badge-primary">
			                                		<?php echo $value['TaiKhoan']; ?>
			                                	</span>
			                                </td>

			                                <td>
			                                	<span class="badge badge-danger">
			                                		<?php echo number_format($value['TongNap']); ?> VND
			                                	</span>
			                                </td>
			                                <td>
			                                	<span class="badge badge-dark">
			                                		<?php echo $value['NgayThamGia']; ?>
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
    </div>
    <!-- /# column -->
    <div class="col-lg-3">
       <div class="page-header">
            <div class="page-title">
                <h1>Giao Dịch Gần Đây</h1>
            </div>
        </div>
        <div class="card alert">
            <div class="card-body">
                <ul class="timeline">
                    <?php foreach ($history as $key => $value): ?>
                        <li>
                            <div class="timeline-badge"><i class="ti-timer"></i></div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h5 class="timeline-title"><?php echo $value['TaiKhoan']." - ".$value['HanhDong'];  ?></h5>
                                </div>
                                <div class="timeline-body">
                                    <p>
                                        <?php 
                                            $yourDateTime = new DateTime($value['ThoiGian']);

                                            $currentDateTime = new DateTime();
                                            $interval = $currentDateTime->diff($yourDateTime);

                                            if ($interval->y > 0) {
                                                echo $interval->y . " năm trước";
                                            } elseif ($interval->m > 0) {
                                                echo $interval->m . " tháng trước";
                                            } elseif ($interval->d > 0) {
                                                echo $interval->d . " ngày trước";
                                            } elseif ($interval->h > 0) {
                                                echo $interval->h . " giờ trước";
                                            } elseif ($interval->i > 0) {
                                                echo $interval->i . " phút trước";
                                            } else {
                                                echo "Vừa xong";
                                            }
                                        ?>
                                    </p>
                                </div>
                            </div>
                        </li>
                    <?php endforeach ?>
                </ul>
            </div>
        </div>
    </div>
    <!-- /# column -->
</div>

<?php require(APPPATH.'views/layouts/Website/footer.php'); ?>
<input type="hidden" class="thoigian" value="<?php echo $history[0]['ThoiGian']; ?>">
<script type="text/javascript">
    function fetchData() {
        $.ajax({
            url: '<?php echo base_url('don-mua-realtime/'); ?>',  // Đường dẫn tới phương thức xử lý AJAX trong controller
            type: 'GET',
            dataType: 'json',
            success: function(data) {
                var thoigian = $('.thoigian').val();
                if(!data || (thoigian == data.ThoiGian)){

                }else{
                    $(".timeline li:last").remove();
                    $(".timeline").prepend('<li> <div class="timeline-badge"><i class="ti-timer"></i></div> <div class="timeline-panel"> <div class="timeline-heading"> <h5 class="timeline-title">'+ data.TaiKhoan + ' - ' + data.HanhDong +'</h5> </div> <div class="timeline-body"> <p>Vừa xong</p> </div> </div> </li>');
                    $('.thoigian').val(data.ThoiGian);
                }
                
            },
            complete: function() {
                setTimeout(fetchData, 15000); 
            }
        });
    }

    $(document).ready(function(){
        fetchData();
    });
</script>
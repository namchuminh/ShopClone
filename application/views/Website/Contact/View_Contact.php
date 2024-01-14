<?php require(APPPATH.'views/layouts/Website/header.php'); ?>

<div class="row">
    <div class="col-lg-9">
    	<div class="row">
    		<div class="col-lg-12">
	    		<div class="page-header">
		            <div class="page-title">
		                <h1>Thông Tin Liên Hệ</h1>
		            </div>
		        </div>
		        <div class="card alert">
		            <div class="card-body">
		                <div class="custom-tab user-profile-tab">
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane active" id="1" style="padding-top: 0px;">
                                    <div class="contact-information">
                                        <h4>THÔNG TIN LIÊN HỆ</h4>
                                        <div class="phone-content">
                                            <span class="contact-title">Điện thoại:</span>
                                            <span class="phone-number"><a href="tel: <?php echo $config[0]['SoDienThoai']; ?>"><?php echo $config[0]['SoDienThoai']; ?></a></span>
                                        </div>
                                        <div class="address-content">
                                            <span class="contact-title">Email:</span>
                                            <span class="mail-address"><a href = "mailto: <?php echo $config[0]['Email']; ?>"><?php echo $config[0]['Email']; ?></a></span>
                                        </div>
                                        <div class="email-content">
                                            <span class="contact-title">Zalo:</span>
                                            <span class="contact-email"><a href="<?php echo $config[0]['Zalo']; ?>"><?php echo $config[0]['Zalo']; ?></a></span>
                                        </div>
                                        <div class="skype-content">
                                            <span class="contact-title">Facebook:</span>
                                            <span class="contact-skype"><a href="<?php echo $config[0]['Facebook']; ?>"><?php echo $config[0]['Facebook']; ?></a></span>
                                        </div>
                                        <div class="website-content">
                                            <span class="contact-title">Website:</span>
                                            <span class="contact-website"><?php echo $config[0]['TenWebsite']; ?></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
		            </div>
		        </div>
    		</div>
    	</div>
    	<div class="row">
    		<div class="col-lg-12">
	    		<div class="page-header">
		            <div class="page-title">
		                <h1>Hướng Dẫn Sử Dụng</h1>
		            </div>
		        </div>
		        <div class="card alert">
		            <div class="card-body">
		            	<?php if(isset($config[0]['HuongDan']) && !empty($config[0]['HuongDan'])){ ?>
		            		<?php $video_id = explode("v=", parse_url($config[0]['HuongDan'], PHP_URL_QUERY)); ?>
		                	<iframe width="100%" height="600" src="https://www.youtube.com/embed/<?php echo end($video_id); ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
		                <?php } ?>
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
<?php require(APPPATH.'views/layouts/Website/footer.php'); ?>

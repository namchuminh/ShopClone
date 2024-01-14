<?php require(APPPATH.'views/'.'layouts/header.php'); ?>
<div class="row">
    <div class="col-lg-8 p-r-0 title-margin-right">
        <div class="page-header">
            <div class="page-title">
                <h1>Cài Đặt Hệ Thống</h1>
            </div>
        </div>
    </div>
    <!-- /# column -->
    <div class="col-lg-4 p-l-0 title-margin-left">
        <div class="page-header">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li><a href="<?php echo base_url('admin/'); ?>">Trang Chủ</a></li>
                    <li><a href="<?php echo base_url('admin/cai-dat/'); ?>">Cài Đặt</a></li>
                </ol>
            </div>
        </div>
    </div>
    <!-- /# column -->
</div>

<div class="row">
    <form method="POST" enctype="multipart/form-data">
        <div class="col-lg-12">
            <div class="card alert">
                <div class="card-header">
                    <h4>Thông Tin Website</h4>
                    <div class="card-header-right-icon">
                        <ul>
                            <li class="card-close" data-dismiss="alert"><i class="ti-close"></i></li>
                        </ul>
                    </div>
                </div>
                <div class="card-body">
                    <div class="basic-form">
                        <div class="form-group">
                            <label>Tên Website: </label>
                            <?php if(isset($detail[0]['TenWebsite']) && !empty($detail[0]['TenWebsite'])){ ?>
                                <input type="text" class="form-control" placeholder="Tên Website *" name="tenwebsite" value="<?php echo $detail[0]['TenWebsite']; ?>">
                            <?php }else{ ?>
                                <input type="text" class="form-control" placeholder="Tên Website *" name="tenwebsite">
                            <?php } ?>
                        </div>
                        <div class="form-group">
                            <label>Mô Tả Website: </label>
                            <?php if(isset($detail[0]['MoTaWebsite']) && !empty($detail[0]['MoTaWebsite'])){ ?>
                                <input type="text" class="form-control" placeholder="Mô Tả Website *" name="motawebsite" value="<?php echo $detail[0]['MoTaWebsite']; ?>">
                            <?php }else{ ?>
                                <input type="text" class="form-control" placeholder="Mô Tả Website *" name="motawebsite">
                            <?php } ?>
                        </div>
                        <div class="form-group">
                            <label>Từ Khóa: </label>
                            <?php if(isset($detail[0]['TuKhoa']) && !empty($detail[0]['TuKhoa'])){ ?>
                                <input type="text" class="form-control" placeholder="Từ Khóa Website Cách Bởi Dấu ," name="tukhoa" value="<?php echo $detail[0]['TuKhoa']; ?>">
                            <?php }else{ ?>
                                <input type="text" class="form-control" placeholder="Từ Khóa Website Cách Bởi Dấu ," name="tukhoa">
                            <?php } ?>
                        </div>

                        <div class="form-group">
                            <label>Logo Website: </label>
                            <input type="file" class="form-control" name="logowebsite">
                        </div>

                        <div class="form-group">
                            <label>Favicon website: </label>
                            <input type="file" class="form-control"  name="faviconwebsite">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-12">
            <div class="card alert">
                <div class="card-header">
                    <h4>Gửi Mail <a href="https://www.youtube.com/watch?v=0CmFfGhZ44M" style="color: blueviolet;" target="_blank">(Xem Hướng Dẫn)</a></h4>
                    <div class="card-header-right-icon">
                        <ul>
                            <li class="card-close" data-dismiss="alert"><i class="ti-close"></i></li>
                        </ul>
                    </div>
                </div>
                <div class="card-body">
                    <div class="basic-form">
                        <div class="form-group">
                            <label>Tài Khoản Gmail: </label>
                            <?php if(isset($detail[0]['TaiKhoanGmail']) && !empty($detail[0]['TaiKhoanGmail'])){ ?>
                                <input type="text" class="form-control" placeholder="Tài Khoản Gmail *" name="taikhoangmail" value="<?php echo $detail[0]['TaiKhoanGmail']; ?>">
                            <?php }else{ ?>
                                <input type="text" class="form-control" placeholder="Tài Khoản Gmail *" name="taikhoangmail">
                            <?php } ?>
                        </div>
                        <div class="form-group">
                            <label>Mật Khẩu Ứng Dụng Gửi Gmail: </label>
                            <?php if(isset($detail[0]['MatKhauGmail']) && !empty($detail[0]['MatKhauGmail'])){ ?>
                                <input type="text" class="form-control" placeholder="Mật Khẩu Ứng Dụng Gửi Gmail *" name="matkhaugmail" value="<?php echo $detail[0]['MatKhauGmail']; ?>">
                            <?php }else{ ?>
                                <input type="text" class="form-control" placeholder="Mật Khẩu Ứng Dụng Gửi Gmail *" name="matkhaugmail">
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-12">
            <div class="card alert">
                <div class="card-header">
                    <h4>Thông Tin Liên Hệ</h4>
                    <div class="card-header-right-icon">
                        <ul>
                            <li class="card-close" data-dismiss="alert"><i class="ti-close"></i></li>
                        </ul>
                    </div>
                </div>
                <div class="card-body">
                    <div class="basic-form">
                        <div class="form-group">
                            <label>Số Điện Thoại: </label>
                            <?php if(isset($detail[0]['SoDienThoai']) && !empty($detail[0]['SoDienThoai'])){ ?>
                                <input type="text" class="form-control" placeholder="Số Điện Thoại *" name="sodienthoai" value="<?php echo $detail[0]['SoDienThoai']; ?>">
                            <?php }else{ ?>
                                <input type="text" class="form-control" placeholder="Số Điện Thoại *" name="sodienthoai">
                            <?php } ?>
                        </div>
                        <div class="form-group">
                            <label>Email: </label>
                            <?php if(isset($detail[0]['Email']) && !empty($detail[0]['Email'])){ ?>
                                <input type="text" class="form-control" placeholder="Email *" name="email" value="<?php echo $detail[0]['Email']; ?>">
                            <?php }else{ ?>
                                <input type="text" class="form-control" placeholder="Email *" name="email">
                            <?php } ?>
                        </div>
                        <div class="form-group">
                            <label>Đường Dẫn Facebook / Message: </label>
                            <?php if(isset($detail[0]['Facebook']) && !empty($detail[0]['Facebook'])){ ?>
                                <input type="text" class="form-control" placeholder="Đường Dẫn Facebook / Message *" name="facebook" value="<?php echo $detail[0]['Facebook']; ?>">
                            <?php }else{ ?>
                                <input type="text" class="form-control" placeholder="Đường Dẫn Facebook / Message *" name="facebook">
                            <?php } ?>
                        </div>
                        <div class="form-group">
                            <label>Đường Dẫn Zalo: </label>
                            <?php if(isset($detail[0]['Zalo']) && !empty($detail[0]['Zalo'])){ ?>
                                <input type="text" class="form-control" placeholder="Đường Dẫn Zalo *" name="zalo" value="<?php echo $detail[0]['Zalo']; ?>">
                            <?php }else{ ?>
                                <input type="text" class="form-control" placeholder="Đường Dẫn Zalo *" name="zalo">
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-12">
            <div class="card alert">
                <div class="card-header">
                    <h4>Video Hướng Dẫn (Youtube)</a></h4>
                    <div class="card-header-right-icon">
                        <ul>
                            <li class="card-close" data-dismiss="alert"><i class="ti-close"></i></li>
                        </ul>
                    </div>
                </div>
                <div class="card-body">
                    <div class="basic-form">
                        <div class="form-group">
                            <label>Đường Dẫn Video: </label>
                            <?php if(isset($detail[0]['HuongDan']) && !empty($detail[0]['HuongDan'])){ ?>
                                <input type="text" class="form-control" placeholder="Url Video Youtube *" name="huongdan" value="<?php echo $detail[0]['HuongDan']; ?>">
                            <?php }else{ ?>
                                <input type="text" class="form-control" placeholder="Url Video Youtube *" name="huongdan">
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-12">
            <div class="card alert">
                <div class="card-header">
                    <h4>Chính Sách</a></h4>
                    <div class="card-header-right-icon">
                        <ul>
                            <li class="card-close" data-dismiss="alert"><i class="ti-close"></i></li>
                        </ul>
                    </div>
                </div>
                <div class="card-body">
                    <div class="basic-form">
                        <div class="form-group">
                            <label>Nội Dung Chính Sách: </label>
                            <?php if(isset($detail[0]['ChinhSach']) && !empty($detail[0]['ChinhSach'])){ ?>
                                <textarea class="form-control editor" name="chinhsach">
                                    <?php echo $detail[0]['ChinhSach']; ?>
                                </textarea>
                            <?php }else{ ?>
                                <textarea class="form-control editor" name="chinhsach"></textarea>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-12">
            <div class="card alert">
                <div class="card-header">
                    <button type="submit" class="btn btn-primary">Lưu Cài Đặt</button>
                </div>
            </div>
        </div>

    </form>
</div>

<?php require(APPPATH.'views/'.'layouts/footer.php'); ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/6.8.0/tinymce.min.js" referrerpolicy="origin"></script>
<script>
  tinymce.init({
    selector: 'textarea.editor',  // chọn các textarea muốn biến thành trình soạn thảo
    plugins: 'advlist autolink lists link image charmap print preview anchor',
    toolbar: 'undo redo | formatselect | bold italic strikethrough forecolor backcolor | link image | alignleft aligncenter alignright alignjustify | outdent indent | bullist numlist | removeformat | code',    
    menubar: false,
    height: 500
  });
</script>


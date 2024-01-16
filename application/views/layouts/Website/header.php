<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?php echo $config[0]['TenWebsite']; ?> - <?php echo $title; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo $config[0]['MoTaWebsite']; ?>">
    <meta name="keywords" content="<?php echo $config[0]['TuKhoa']; ?>">
    <!-- ================= Favicon ================== -->
    <!-- Standard -->
    <link rel="shortcut icon" href="<?php echo $config[0]['FaviconWebsite']; ?>">
    <!-- Retina iPad Touch Icon-->
    <link rel="apple-touch-icon" sizes="144x144" href="<?php echo $config[0]['FaviconWebsite']; ?>">
    <!-- Retina iPhone Touch Icon-->
    <link rel="apple-touch-icon" sizes="114x114" href="<?php echo $config[0]['FaviconWebsite']; ?>">
    <!-- Standard iPad Touch Icon-->
    <link rel="apple-touch-icon" sizes="72x72" href="<?php echo $config[0]['FaviconWebsite']; ?>">
    <!-- Standard iPhone Touch Icon-->
    <link rel="apple-touch-icon" sizes="57x57" href="<?php echo $config[0]['FaviconWebsite']; ?>">
    <!-- Styles -->
    <link href="<?php echo base_url('public/admin/'); ?>css/lib/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo base_url('public/admin/'); ?>css/lib/themify-icons.css" rel="stylesheet">
    <link href="<?php echo base_url('public/admin/'); ?>css/lib/menubar/sidebar.css" rel="stylesheet">
    <link href="<?php echo base_url('public/admin/'); ?>css/lib/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url('public/admin/'); ?>css/lib/unix.css" rel="stylesheet">
    <link href="<?php echo base_url('public/admin/'); ?>css/style.css" rel="stylesheet">
    <script src="<?php echo base_url('public/admin/'); ?>js/lib/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
</head>

<body>

    <div class="sidebar sidebar-hide-to-small sidebar-shrink sidebar-gestures">
        <div class="nano">
            <div class="nano-content">
                <ul>
                    <li class="label">Hệ Thống</li>
                    <li class="active"><a href="<?php echo base_url(); ?>"><i class="ti-home"></i>Trang Chủ </a>
                    </li>

                    <li class="label">Nguyên Liệu</li>

                    <li>
                        <?php if(count($category) >= 1){ ?>
                            <a class="sidebar-sub-toggle"><i class="ti-layout-column3"></i>Thể Loại <span class="sidebar-collapse-icon ti-angle-down"></span></a>
                            <ul>
                                <?php foreach ($category as $key => $value): ?>
                                    <li><a href="<?php echo base_url('chuyen-muc/'.$value['MaChuyenMuc'].'/'); ?>"><?php echo $value['TenChuyenMuc']; ?></a></li>
                                <?php endforeach ?>
                            </ul>
                        <?php }else{ ?>
                            <a class="sidebar-sub-toggle"><i class="ti-layout-column3"></i>Chuyên Mục</a>
                        <?php } ?>
                    </li>

                    <li><a class="sidebar-sub-toggle"><i class="ti-view-list"></i>Sản Phẩm <span class="sidebar-collapse-icon ti-angle-down"></span></a>
                        <?php if(count($product) >= 1){ ?>
                            <ul>
                                <?php foreach ($product as $key => $value): ?>
                                    <li><a href="<?php echo base_url('san-pham/'.$value['MaSanPham'].'/'); ?>"><?php echo $value['TenSanPham']; ?></a></li>
                                <?php endforeach ?>
                            </ul>
                        <?php }else{ ?>
                            <a class="sidebar-sub-toggle"><i class="ti-view-list"></i>Sản Phẩm</a>
                        <?php } ?>
                    </li>

                    <?php if(isset($_SESSION['user'])){ ?>
                        <li class="label">Nạp Tiền</li>
                        <li><a href="<?php echo base_url('nap-tien-the/'); ?>" title="Nạp Từ Thẻ"><i class="ti-layers-alt"></i> Nạp Từ Thẻ</a></li>
                        <li><a href="<?php echo base_url('nap-tien-bank/'); ?>" title="Nạp Từ Ngân Hàng"><i class="ti-credit-card"></i> Nạp Từ Ngân Hàng</a></li>
                        <li><a class="sidebar-sub-toggle" href="<?php echo base_url('lich-su-nap/'); ?>"><i class="ti-receipt" title="Lịch Sử Giao Dịch"></i>Lịch Sử Nạp</a></li>
                    <?php } ?>

                    <li class="label">Thông Tin</li>
                    <li><a href="<?php echo base_url('top-nap-tien/'); ?>" title="Top Nạp Tiền"><i class="ti-bar-chart"></i> Top Nạp Tiền</a></li>
                    <li><a href="<?php echo base_url('chinh-sach/'); ?>" title="Chính Sách"><i class="ti-bookmark-alt"></i> Chính Sách</a></li>
                    <li><a href="<?php echo base_url('lien-he/'); ?>" title="Liên Hệ"><i class="ti-headphone"></i> Liên Hệ</a></li>

                    <li class="label">Cá Nhân</li>
                    <?php if(isset($_SESSION['user'])){ ?>
                        <li><a href="<?php echo base_url('don-mua/'); ?>"><i class="ti-folder" title="Danh Sách Đã Mua"></i> Danh Sách Đã Mua</a></li>
                        <li><a href="<?php echo base_url('ca-nhan/'); ?>" title="Đổi Thông Tin"><i class="ti-lock"></i> Đổi Thông Tin</a></li>
                        <li><a href="<?php echo base_url('dang-xuat/'); ?>" title="Đăng Xuất"><i class="ti-power-off"></i> Đăng Xuất</a></li>
                    <?php }else{ ?>
                        <li><a href="<?php echo base_url('dang-nhap/'); ?>"><i class="ti-user" title="Đăng Nhập"></i> Đăng Nhập</a></li>
                        <li><a href="<?php echo base_url('dang-ky/'); ?>"><i class="ti-user"  title="Đăng Ký"></i> Đăng Ký</a></li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </div>
    <!-- /# sidebar -->

    <div class="header">
        <div class="pull-left">
            <div class="logo"><a href="<?php echo base_url(); ?>"><span><?php echo $config[0]['TenWebsite']; ?></span></a></div>
            <div class="hamburger sidebar-toggle">
                <span class="line"></span>
                <span class="line"></span>
                <span class="line"></span>
            </div>
        </div>

        <div class="pull-right p-r-15">
            <ul>
                <?php if(isset($_SESSION['user'])){ ?>
                    <li class="header-icon dib"><img class="avatar-img" src="<?php echo base_url('public/admin/'); ?>images/user.png" alt="" /> <span class="user-avatar"> 
                        <?php 
                            $fullname = explode(' ', $_SESSION['fullname']);
                            echo end($fullname); 
                        ?> 
                        <i class="ti-angle-down f-s-10"></i></span>
                        <div class="drop-down dropdown-profile">
                            <div class="dropdown-content-heading">
                                <span class="text-left">Số dư khả dụng</span>
                                <p class="trial-day"><?php echo number_format($_SESSION['excess']); ?> VND</p>
                            </div>
                            <div class="dropdown-content-body">
                                <ul>
                                    <li><a href="<?php echo base_url('ca-nhan/'); ?>"><i class="ti-user"></i> <span>Cá Nhân</span></a></li>
                                    <li><a href="<?php echo base_url('dang-xuat/'); ?>"><i class="ti-power-off"></i> <span>Đăng Xuất</span></a></li>
                                </ul>
                            </div>
                        </div>
                    </li>
                <?php }else{ ?>
                    <li class="header-icon dib"><img class="avatar-img" src="<?php echo base_url('public/admin/'); ?>images/user.png" alt="" /> <span class="user-avatar"> 
                        Khách
                        <i class="ti-angle-down f-s-10"></i></span>
                        <div class="drop-down dropdown-profile">
                            <div class="dropdown-content-body">
                                <ul>
                                    <li><a href="<?php echo base_url('dang-nhap/'); ?>"><i class="ti-user"></i> <span>Đăng Nhập</span></a></li>
                                    <li><a href="<?php echo base_url('dang-ky/'); ?>"><i class="ti-user"></i> <span>Đăng Ký</span></a></li>
                                </ul>
                            </div>
                        </div>
                    </li>
                <?php } ?>
            </ul>
        </div>
    </div>

    <div class="content-wrap">
        <div class="main">
            <div class="container-fluid">
                <!-- /# row -->
                <div id="main-content">
                    
<div id="slider" class="carousel slide mb-60" data-bs-ride="carousel">
            <!-- Indicators/dots -->
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#slider" data-bs-slide-to="0" class="active"></button>
                <button type="button" data-bs-target="#slider" data-bs-slide-to="1"></button>
                <button type="button" data-bs-target="#slider" data-bs-slide-to="2"></button>
            </div>

            <!-- The slideshow/carousel -->
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="../view/layout/assets/images/bn1.png" alt="Anh 1" class="d-block"
                        style="width:100%">
                </div>
                <div class="carousel-item">
                    <img src="../view/layout/assets/images/bn2.png" alt="Chicago"
                        class="d-block" style="width:100%">
                </div>
                <div class="carousel-item">
                    <img src="../view/layout/assets/images/bn3.png" alt="New York"
                        class="d-block" style="width:100%">
                </div>
            </div>

            <!-- Left and right controls/icons -->
            <button class="carousel-control-prev" type="button" data-bs-target="#slider" data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#slider" data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
            </button>
        </div>

        <div class="container mt-30 mb-50">
            <div class="catalog-item bg-white bdr-10">
                <p class="title-cata_sm">Thể loại</p>
                <h1 class="title-cata">Các thể loại của chúng tôi</h1>
                <div class="product-section section">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="products">
                                        <div class="row tf-element-carousel" data-slick-options='{  
                                    "slidesToShow": 4,      
                                    "slidesToScroll": 1,
                                    "infinite": true,
                                    "rows": 1,
                                    "arrows": true,
                                    "prevArrow": {"buttonClass": "slick-btn slick-prev", "iconClass": "fa fa-angle-left" },
                                    "nextArrow": {"buttonClass": "slick-btn slick-next", "iconClass": "fa fa-angle-right" }
                                    }' data-slick-responsive='[
                                    {"breakpoint":1199, "settings": {
                                    "slidesToShow": 4
                                    }},
                                    {"breakpoint":992, "settings": {
                                    "slidesToShow": 2
                                    }},
                                    {"breakpoint":768, "settings": {
                                    "slidesToShow": 2,
                                    "arrows": false,
                                    "autoplay": true
                                    }},
                                    {"breakpoint":576, "settings": {
                                    "slidesToShow": 1,
                                    "arrows": false,
                                    "autoplay": true
                                    }}
                                    ]'>
                                    <?php
                                        foreach ($alldanhmucsach as $item) {
                                            extract($item);
                                            echo'<div class="col-12 px-3 py-4">
                                                    <div class="single-product mb-30">
                                                        <div class="product-img">
                                                            <a href="index.php?pg=sanpham&idloaisach='.$id.'">
                                                                <img class="img-catalog"
                                                                    src="../view/layout/assets/images/product/' . $img . '" alt="">
                                                            </a>
                                                        </div>
                                                        <div class="product-content">
                                                            <h3>
                                                                <a href="index.php?pg=sanpham&idloaisach='.$id.'">' . $name . '</a>
                                                            </h3>
                                                            
                                                        </div>
                                                    </div>
                                                </div>';
                                        }
                                    ?>
                                        </div>
                                        
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>

        <div class="container product-big">
            <div class="product-section section pt-4 bg-white bdr-10 mb-5">
                <div class="container">
                    <p class="title-sp_sm">Sản phẩm</p>
                    <div class="row">
                        <div class="col pl-24">
                            <div class="product-tab-menu mb-xs-20">
                                <ul class="nav">
                                    <!-- <li><a class="active" data-toggle="tab" href="#products"> Sản phẩm mới</a></li> -->
                                    <li><a data-toggle="tab" href="#product"> Sản phẩm</a></li>
                                    <li><a data-toggle="tab" href="#onsale"> Đang giảm giá !</a></li>
                                    <li><a data-toggle="tab" href="#featureproducts"> Mới !</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="product">
                                    <div class="row tf-element-carousel" data-slick-options='{  
                                "slidesToShow": 4,
                                "slidesToScroll": 1,
                                "infinite": true,
                                "rows": 2,
                                "arrows": true,
                                "prevArrow": {"buttonClass": "slick-btn-main slick-prev", "iconClass": "fa fa-angle-left" },
                                "nextArrow": {"buttonClass": "slick-btn-main slick-next", "iconClass": "fa fa-angle-right" }
                                }' data-slick-responsive='[
                                {"breakpoint":1199, "settings": {
                                "slidesToShow": 4
                                }},
                                {"breakpoint":992, "settings": {
                                "slidesToShow": 2
                                }},
                                {"breakpoint":768, "settings": {
                                "slidesToShow": 2,
                                "arrows": false,
                                "autoplay": true
                                }},
                                {"breakpoint":576, "settings": {
                                "slidesToShow": 2,
                                "arrows": false,
                                "autoplay": true
                                }}
                                ]'>
                                <?php
                                    foreach ($allsach as $item) {
                                        extract($item);
                                        if($moi==1){
                                            $label='<span class="sticker">
                                                        <img src="../view/layout/assets/images/new.png" alt="">
                                                    </span>';
                                        }else{
                                            if($giamgia > 0){
                                                $label='<span class="descount-sticker">'.$giamgia.'%</span>';
                                                    
                                                }else{
                                                    $label = '';
                                                }
                                        }
                                        if($giamgia > 0){
                                            $price1_sale = $price1 - (($giamgia / 100) * $price1);
                                            $price = $price1_sale;
                                            $show_price = '<h4 class="price"><span class="new">' . number_format($price1_sale) . '<sup>đ</sup></span><span
                                            class="old"><del>' . number_format($price1) . '</del><sup>đ</sup></span></h4>';
                                        }else{
                                            $price = $price1;
                                            $show_price = '<h4 class="price"><span class="new">' . number_format($price1) . '<sup>đ</sup></span></h4>' ;
                                        }
                                        echo var_dump($item);
                                        echo '<div class="col-12 px-3 py-3">
                                                <div class="single-product mb-30">
                                                    <div class="product-img">
                                                        <a href="index.php?pg=single-product&idproduct='.$id.'">
                                                            <img src="../view/layout/assets/images/product/' . $img . '" alt="">
                                                        </a>
                                                        '.$label.'  
                                                    </div>
                                                    <div class="product-content">
                                                        <h3>
                                                            <a href="index.php?pg=single-product&idproduct='.$id.'">' . $name . '</a>
                                                        </h3>
                                                        
                                                   '. $show_price .'


                                                            <form action="index.php?pg=addcart" method="post">
                                                                <input type="hidden" class="btn" name="idpro" value="'.$id.'">
                                                                <input type="hidden" class="btn" name="name" value="'.$name.'">
                                                                <input type="hidden" class="btn" name="img" value="'.$img.'">
                                                                <input type="hidden" class="btn" name="price1" value="'.$price.'">
                                                                <input type="hidden" class="btn" name="soluong" value="1">
                                                                <input type="hidden" class="btn" name="page" value="1">
                                                                <input type="submit" class="btn-main" name="addcart" value="Thêm vào giỏ">
                                                            </form>
                                                    </div>
                                                </div>
                                            </div>';
                                    }
                                ?>
                                    </div>
                                </div>

                                <div class="tab-pane fade show " id="onsale">
                                    <div class="row tf-element-carousel" data-slick-options='{
                                "slidesToShow": 4,
                                "slidesToScroll": 1,
                                "infinite": true,
                                "rows": 2,
                                "arrows": true,
                                "prevArrow": {"buttonClass": "slick-btn-main slick-prev", "iconClass": "fa fa-angle-left" },
                                "nextArrow": {"buttonClass": "slick-btn-main slick-next", "iconClass": "fa fa-angle-right" }
                                }' data-slick-responsive='[
                                {"breakpoint":1199, "settings": {
                                "slidesToShow": 3
                                }},
                                {"breakpoint":992, "settings": {
                                "slidesToShow": 2
                                }},
                                {"breakpoint":768, "settings": {
                                "slidesToShow": 2,
                                "arrows": false,
                                "autoplay": true
                                }},
                                {"breakpoint":576, "settings": {
                                "slidesToShow": 2,
                                "arrows": false,
                                "autoplay": true
                                }}
                                ]'>
                                <?php
                                    foreach ($sachgiamgia as $item) {
                                        extract($item);
                                        if($moi==1){
                                            $label='<span class="sticker">
                                            <img src="../view/layout/assets/images/new.png" alt=""></span>';
                                        }else{
                                            if($giamgia){
                                                $label=' <span class="descount-sticker">'.$giamgia.'%</span>';
                                                    
                                                }else{
                                                    $label = '';
                                                }
                                        }

                                        if($giamgia > 0){
                                            $price1_sale = $price1 - (($giamgia / 100) * $price1);
                                            $price = $price1_sale;
                                            $show_price = '<h4 class="price"><span class="new">' . number_format($price1_sale) . '<sup>đ</sup></span><span
                                            class="old"><del>' . number_format($price1) . '</del><sup>đ</sup></span></h4>';
                                        }else{
                                            $price = $price1;
                                            $show_price = '<h4 class="price"><span class="new">' . number_format($price1) . '<sup>đ</sup></span>' ;
                                        }
                                        echo '<div class="col-12 px-3 py-3">
                                            <!-- Single Product Start -->
                                            <div class="single-product mb-30">
                                                <div class="product-img">
                                                    <a href="index.php?pg=single-product&idproduct='.$id.'">
                                                        <img src="../view/layout/assets/images/product/' . $img . '" alt="">
                                                    </a>
                                                    '.$label.'   
                                                </div>
                                                <div class="product-content">
                                                    <h3><a href="single-product.html">Giày bata giá rẻ</a></h3>
                                                    
                                                   '.$show_price .'
                                                    <form action="index.php?pg=addcart" method="post">
                                                    <input type="hidden" class="btn" name="idpro" value="'.$id.'">
                                                    <input type="hidden" class="btn" name="name" value="'.$name.'">
                                                    <input type="hidden" class="btn" name="img" value="'.$img.'">
                                                    <input type="hidden" class="btn" name="price1" value="'.$price.'">
                                                    <input type="hidden" class="btn" name="soluong" value="1">
                                                    <input type="hidden" class="btn" name="page" value="1">
                                                    <input type="submit" class="btn-main" name="addcart" value="Thêm vào giỏ">
                                                </form>
                                                </div>
                                            </div>
                                            <!-- Single Product End -->
                                        </div>';
                                    }
                                ?>
                                        
                                </div>
                                </div>
                                <div class="tab-pane fade show" id="featureproducts">
                                    <div class="row tf-element-carousel" data-slick-options='{
                                "slidesToShow": 4,
                                "slidesToScroll": 1,
                                "infinite": true,
                                "rows": 2,
                                "arrows": true,
                                "prevArrow": {"buttonClass": "slick-btn-main slick-prev", "iconClass": "fa fa-angle-left" },
                                "nextArrow": {"buttonClass": "slick-btn-main slick-next", "iconClass": "fa fa-angle-right" }
                                }' data-slick-responsive='[
                                {"breakpoint":1199, "settings": {
                                "slidesToShow": 3
                                }},
                                {"breakpoint":992, "settings": {
                                "slidesToShow": 2
                                }},
                                {"breakpoint":768, "settings": {
                                "slidesToShow": 2,
                                "arrows": false,
                                "autoplay": true
                                }},
                                {"breakpoint":576, "settings": {
                                "slidesToShow": 2,
                                "arrows": false,
                                "autoplay": true
                                }}
                                ]'>
                                        
                                <?php
                                    foreach ($sachmoi as $item) {
                                        extract($item);
                                            if($moi==1){
                                                $label='<span class="sticker">
                                                <img src="../view/layout/assets/images/new.png" alt=""></span>';
                                            }else{
                                                if($giamgia){
                                                $label=' <span class="descount-sticker">'.$giamgia.'%</span>';
                                                    
                                                }else{
                                                    $label = '';
                                                }
                                            }
                                            if($giamgia > 0){
                                                $price1_sale = $price1 - (($giamgia / 100) * $price1);
                                                $price = $price1_sale;
                                                $show_price = '<h4 class="price"><span class="new">' . number_format($price1_sale) . '<sup>đ</sup></span><span
                                                class="old"><del>' . number_format($price1) . '</del><sup>đ</sup></span></h4>';
                                            }else{
                                                $price = $price1;
                                                $show_price = '<h4 class="price"><span class="new">' . number_format($price1) . '<sup>đ</sup></span>' ;
                                            }
                                            echo '<div class="col-12 py-3 px-3">
                                                <div class="single-product mb-30">
                                                    <div class="product-img">
                                                        <a href="single-product.html">
                                                            <img src="../view/layout/assets/images/product/' . $img . '" alt="">
                                                        </a>
                                                        '.$label.'
                                                        
                                                        
                                                    </div>
                                                    <div class="product-content">
                                                        <h3>
                                                            <a href="single-product.html">' . $name . '</a>
                                                        </h3>
                                                       '. $show_price.'
                                                                <form action="index.php?pg=addcart" method="post">
                                                                    <input type="hidden" class="btn" name="idpro" value="'.$id.'">
                                                                    <input type="hidden" class="btn" name="name" value="'.$name.'">
                                                                    <input type="hidden" class="btn" name="img" value="'.$img.'">
                                                                    <input type="hidden" class="btn" name="price1" value="'.$price1.'">
                                                                    <input type="hidden" class="btn" name="soluong" value="1">
                                                                    <input type="hidden" class="btn" name="page" value="1">
                                                                    <input type="submit" class="btn-main" name="addcart" value="Thêm vào giỏ">
                                                                </form>
                                                    </div>
                                                </div>
                                            </div>';
                                    }
                                ?>  
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="guaranteed container">
            <div class="grid wide">
                <div class="row">
                    <div class="col-lg-4 col-sm-12">
                        <div class="guaranteed-item">
                            <div class="guaranteed-icon">
                                <i class="fa-solid fa-truck-fast"></i>
                            </div>
                            <h1>GIAO HÀNG TOÀN QUỐC</h1>
                            <p>Gửi hàng đi trong ngày</p>
                        </div>

                    </div>
                    <div class="col-lg-4 col-sm-12">
                        <div class="guaranteed-item">
                            <div class="guaranteed-icon">
                                <i class="fa-solid fa-rotate-right"></i>
                            </div>
                            <h1>HOÀN TIỀN NHANH TRONG NGÀY</h1>
                            <p>Không để khách hàng đợi lâu</p>
                        </div>

                    </div>
                    <div class="col-lg-4 col-sm-12">
                        <div class="guaranteed-item">
                            <div class="guaranteed-icon">
                                <i class="fa-solid fa-thumbs-up"></i>
                            </div>
                            <h1>SẢN PHẨM UY TÍN, AN TOÀN</h1>
                            <p>Đảm bảo nhu cầu dịch vụ của khách hàng</p>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid product-h1">
            <div class="container product-h1_sm">
               
<?php
    foreach($sachtop1 as $item);
        extract($item);
        echo ' <div class="product-representative">
                    <div class="row product-representative_item">
                        <div class="col-6 d-flex justify-content-end align-items-center product-representative_imgAll">
                            <img src="../view/layout/assets/images/product/'.$img.'" alt="" class="product-representative_img">
                        </div>
                        <div class="col-6 d-flex align-items-center">
                            <div class="product-representative_items">
                                <h1 class="product-representative_tittle">
                                    Sách nổi bật
                                </h1>
                                <p class="product-representative_name">
                                    '.$name.'
                                </p>
                                <p class="product-representative_author">
                                    
                                </p>
                                <p class="product-representative_subtitle">
                                    '.$mota.'
                                </p>
                                <p class="product-representative_price">
                                    '.number_format($price1).'<sup>đ</sup>
                                </p>
                                <div class="product-representative_btn-main">
                                    <a href="index.php?pg=single-product&idproduct='.$id.'">
                                        <Button class="btn-main">
                                            <p>
                                                Xem ngay
                                            </p>
                                            <i class="fa-solid fa-arrow-right"></i>
                                        </Button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>';
?>
            </div>
        </div>

        <div class="container-fluid">
            <div class=" banner2">
                <div class="container h-100">
                    <div class="banner2-content">
                        <p>THE BOOK OF <br> MY LIFE</p>
                        <!-- <div class="">
                            <button class="btn-main" href="">TÌM HIỂU THÊM</button>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>

        <div class="container brand">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <img src="../view/layout/assets/images/brand1.png" alt="" class="brand-img">
                    </div>
                    <div class="col">
                        <img src="../view/layout/assets/images/brand2.png" alt="" class="brand-img">
                    </div>
                    <div class="col">
                        <img src="../view/layout/assets/images/brand3.png" alt="" class="brand-img">
                    </div>
                    <div class="col">
                        <img src="../view/layout/assets/images/brand4.png" alt="" class="brand-img">
                    </div>
                    <div class="col">
                        <img src="../view/layout/assets/images/brand5.png" alt="" class="brand-img">
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="container">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Sản phẩm</li>
                        <!-- <li class="breadcrumb-item active" aria-current="page"><?php 
                                                                                    foreach ($alldanhmucsach as $item) {
                                                                                        extract($item);
                                                                                        echo $name;
                                                                                    
                                                                                    };
                                                                                 ?>
                        </li> -->
                    </ol>
                </nav>
            </div>
        </div>

        <div class="shop-section sectionx1 pb-70 pb-lg-50 pb-md-40 pb-sm-60 pb-xs-50">
            <div class="container bg-white p-5 bdr-10">
                <div class="row">
                    <div class="col-lg-3">
                        <!-- Single Sidebar Start  -->
                        <div class="common-sidebar-widget">
                            <h3 class="sidebar-title">Thể loại</h3>
                            <ul class="sidebar-list">
                                <li>
                                    <a href="index.php?pg=sanpham"><i class="fa fa-angle-right"></i>Tất cả<span
                                    class="count">(<?php echo dem_sach_all()[0]['soluong'] ?>)</span></a>
                                </li>
                            <?php
                                $count = 0;
                                foreach ($alldanhmucsach as $item) {
                                    extract($item);
                                    $count++;
                                    $hiddenClass = $count > 4 ? 'hidden' : ''; 
                                    echo '<li class="li-danhmuc ' . $hiddenClass . '"> <a href="index.php?pg=sanpham&idloaisach=' . $id . '"><i class="fa fa-angle-right"></i>' . $name . ' <span
                                    class="count">('.dem_sach('idloaisach', $id)[0]['soluong'].')</span></a></li>';
                                    if ($count === 100) {
                                        break;
                                    }
                                }
                                ?>                             
                            </ul>
                            <button id="showMoreButton" class="shop-showmore_product__cata">Xem thêm <i class="fa-solid fa-chevron-down"></i></button>


                        </div>
                        <div class="common-sidebar-widget">
                            <h3 class="sidebar-title">Tác giả</h3>
                            <ul class="sidebar-list">
                            <?php
                                $count = 0;
                                foreach ($alltacgia as $item) {
                                    extract($item);
                                    $count++;
                                    $hiddenClass = $count > 4 ? 'hidden' : ''; 
                                    echo '<li class="li-danhmuc ' . $hiddenClass . '"> <a href="index.php?pg=sanpham&idtacgia=' . $id . '"><i class="fa fa-angle-right"></i>' . $name . '<span
                                    class="count">('.dem_sach('idtacgia', $id)[0]['soluong'].')</span></a></li>';
                                    if ($count === 100) {
                                        break;
                                    }
                                }
                                ?>   
                            </ul>
                            <button id="showMoreButton" class="shop-showmore_product__cata">Xem thêm <i class="fa-solid fa-chevron-down"></i></button>

                        </div>
                        <div class="common-sidebar-widget">
                            <div class="single-banner">
                                <a href="#">
                                    <img src="../view/layout/assets/images/sp-banner.png" height="500px" alt="">
                                </a>
                            </div>
                        </div>
                        <!-- Single Sidebar End  -->
                    </div>
                    <div class="col-lg-9 order-lg-2 order-1">
                        <!-- <div class="row">
                            <div class="col-12">
                                <div class="shop-banner mb-35 mb-xs-20">
                                    <img src="./assets/images/banner/category-image.jpg" alt="">
                                </div>
                                <div class="shop-banner-title">
                                    <h2>Shop</h2>
                                </div>
                            </div>
                        </div> -->
                        <div class="row">
                            <div class="col-12">
                                <div class="shop-product">
                                    <div id="myTabContent-2" class="tab-content">
                                        <div id="grid" class="tab-pane fade active show">
                                            <div class="product-grid-view">
                                                <div class="row">

                                                    <?php
                                                    foreach ($sachsp as $item) {
                                                        extract($item);
                                                        if ($moi == 1) {
                                                            $label = '<span class="sticker">
                                                            <img src="../view/layout/assets/images/new.png" alt=""></span>';
                                                        } else {
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
                                                            $show_price = '<h4 class="price"><span class="new">' . number_format($price1) . '<sup>đ</sup></span>' ;
                                                        }
                                                        echo '<div class="col-lg-4 col-md-6 col-sm-6 col-6">
                                                        <div class="single-product mb-30">
                                                            <div class="product-img">
                                                                <a href="index.php?pg=single-product&idproduct=' . $id . '">
                                                                    <img src="../view/layout/assets/images/product/' . $img . '"
                                                                        alt="">
                                                                </a>
                                                                ' . $label . '
                                                                <div
                                                                    class="product-action d-flex justify-content-between">
                                                                    <form action="index.php?pg=addcart" method="post">
                                                                        <input type="hidden" class="btn" name="idpro" value="' . $id . '">
                                                                        <input type="hidden" class="btn" name="name" value="' . $name . '">
                                                                        <input type="hidden" class="btn" name="img" value="' . $img . '">
                                                                        <input type="hidden" class="btn" name="price1" value="' . $price . '">
                                                                        <input type="hidden" class="btn" name="soluong" value="1">
                                                                        <input type="hidden" class="btn" name="page" value="1">
                                                                        <input type="submit" class="product-btn" name="addcart" value="Thêm vào giỏ hàng">
                                                                    </form>
                                                                </div>
                                                            </div>
                                                            <div class="product-content">
                                                            <h3>
                                                                <a href="index.php?pg=single-product&idproduct=' . $id . '">' . $name . '</a>
                                                            </h3>
                                                               '.$show_price.'
                                                            </div>
                                                        </div>
                                                    </div>';
                                                    }
                                                    ?>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- <div id="list" class="tab-pane fade">
                                            <div class="product-list-view">
                                                
                                                <div class="product-list-item mb-40">
                                                    <div class="row align-items-center">
                                                        <div class="col-md-4 col-sm-6">
                                                            <div class="single-product">
                                                                <div class="product-img mb-0 mb-xs-25">
                                                                    <a href="single-product.html">
                                                                        <img src="./assets/images/product/product-18.jpg"
                                                                            alt="">
                                                                    </a>
                                                                    <span class="descount-sticker">-10%</span>
                                                                    <span class="sticker">New</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-8 col-sm-6">
                                                            <div class="product-content-shop-list">
                                                                <div class="product-content">
                                                                    <h3><a href="single-product.html">White Shave
                                                                            Brux</a></h3>
                                                                    <h4 class="price"><span class="new">€90.00</span>
                                                                    </h4>
                                                                    <div class="ratting">
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                    </div>
                                                                    <p>Pellentesque habitant morbi tristique senectus et
                                                                        netus et malesuada fames ac turpis egestas.
                                                                        Vestibulum tortor quam, feugiat vitae, ultricies
                                                                        eget, tempor sit amet, ante. Donec eu libero sit
                                                                        amet quam egestas semper. Aenean ultricies mi
                                                                        vitae est. Mauris placerat eleifend leo.</p>
                                                                    <div
                                                                        class="product-action d-flex justify-content-between">
                                                                        <a class="product-btn" href="#">Add to Cart</a>
                                                                        <ul class="d-flex">
                                                                            <li><a href="#quick-view-modal-container"
                                                                                    data-toggle="modal"
                                                                                    title="Quick View"><i
                                                                                        class="fa fa-eye"></i></a></li>
                                                                            <li><a href="#"><i
                                                                                        class="fa fa-heart-o"></i></a>
                                                                            </li>
                                                                            <li><a href="#"><i
                                                                                        class="fa fa-exchange"></i></a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            
                                                <div class="product-list-item mb-40">
                                                    <div class="row align-items-center">
                                                        <div class="col-md-4 col-sm-6">
                                                            <div class="single-product">
                                                                <div class="product-img mb-0 mb-xs-25">
                                                                    <a href="single-product.html">
                                                                        <img src="./assets/images/product/product-17.jpg"
                                                                            alt="">
                                                                    </a>
                                                                    <span class="descount-sticker">-10%</span>
                                                                    <span class="sticker">New</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-8 col-sm-6">
                                                            <div class="product-content-shop-list">
                                                                <div class="product-content">
                                                                    <h3><a href="single-product.html">Aftershave
                                                                            Lotion</a></h3>
                                                                    <h4 class="price"><span
                                                                            class="new">€90.00</span><span
                                                                            class="old">€150.00</span></h4>
                                                                    <div class="ratting">
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                    </div>
                                                                    <p>Pellentesque habitant morbi tristique senectus et
                                                                        netus et malesuada fames ac turpis egestas.
                                                                        Vestibulum tortor quam, feugiat vitae, ultricies
                                                                        eget, tempor sit amet, ante. Donec eu libero sit
                                                                        amet quam egestas semper. Aenean ultricies mi
                                                                        vitae est. Mauris placerat eleifend leo.</p>
                                                                    <div
                                                                        class="product-action d-flex justify-content-between">
                                                                        <a class="product-btn" href="#">Add to Cart</a>
                                                                        <ul class="d-flex">
                                                                            <li><a href="#quick-view-modal-container"
                                                                                    data-toggle="modal"
                                                                                    title="Quick View"><i
                                                                                        class="fa fa-eye"></i></a></li>
                                                                            <li><a href="#"><i
                                                                                        class="fa fa-heart-o"></i></a>
                                                                            </li>
                                                                            <li><a href="#"><i
                                                                                        class="fa fa-exchange"></i></a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            
                                                <div class="product-list-item mb-40">
                                                    <div class="row align-items-center">
                                                        <div class="col-md-4 col-sm-6">
                                                            <div class="single-product">
                                                                <div class="product-img mb-0 mb-xs-25">
                                                                    <a href="single-product.html">
                                                                        <img src="./assets/images/product/product-15.jpg"
                                                                            alt="">
                                                                    </a>
                                                                    <span class="descount-sticker">-10%</span>
                                                                    <span class="sticker">New</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-8 col-sm-6">
                                                            <div class="product-content-shop-list">
                                                                <div class="product-content">
                                                                    <h3><a href="single-product.html">White Shave
                                                                            Brush</a></h3>
                                                                    <h4 class="price"><span
                                                                            class="new">€110.00</span><span
                                                                            class="old">€130.00</span></h4>
                                                                    <div class="ratting">
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                    </div>
                                                                    <p>Pellentesque habitant morbi tristique senectus et
                                                                        netus et malesuada fames ac turpis egestas.
                                                                        Vestibulum tortor quam, feugiat vitae, ultricies
                                                                        eget, tempor sit amet, ante. Donec eu libero sit
                                                                        amet quam egestas semper. Aenean ultricies mi
                                                                        vitae est. Mauris placerat eleifend leo.</p>
                                                                    <div
                                                                        class="product-action d-flex justify-content-between">
                                                                        <a class="product-btn" href="#">Add to Cart</a>
                                                                        <ul class="d-flex">
                                                                            <li><a href="#quick-view-modal-container"
                                                                                    data-toggle="modal"
                                                                                    title="Quick View"><i
                                                                                        class="fa fa-eye"></i></a></li>
                                                                            <li><a href="#"><i
                                                                                        class="fa fa-heart-o"></i></a>
                                                                            </li>
                                                                            <li><a href="#"><i
                                                                                        class="fa fa-exchange"></i></a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            
                                                <div class="product-list-item mb-40">
                                                    <div class="row align-items-center">
                                                        <div class="col-md-4 col-sm-6">
                                                            <div class="single-product">
                                                                <div class="product-img mb-0 mb-xs-25">
                                                                    <a href="single-product.html">
                                                                        <img src="./assets/images/product/product-12.jpg"
                                                                            alt="">
                                                                    </a>
                                                                    <span class="descount-sticker">-10%</span>
                                                                    <span class="sticker">New</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-8 col-sm-6">
                                                            <div class="product-content-shop-list">
                                                                <div class="product-content">
                                                                    <h3><a href="single-product.html">White Shave
                                                                            Bruj</a></h3>
                                                                    <h4 class="price"><span class="new">€80.00</span>
                                                                    </h4>
                                                                    <div class="ratting">
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                    </div>
                                                                    <p>Pellentesque habitant morbi tristique senectus et
                                                                        netus et malesuada fames ac turpis egestas.
                                                                        Vestibulum tortor quam, feugiat vitae, ultricies
                                                                        eget, tempor sit amet, ante. Donec eu libero sit
                                                                        amet quam egestas semper. Aenean ultricies mi
                                                                        vitae est. Mauris placerat eleifend leo.</p>
                                                                    <div
                                                                        class="product-action d-flex justify-content-between">
                                                                        <a class="product-btn" href="#">Add to Cart</a>
                                                                        <ul class="d-flex">
                                                                            <li><a href="#quick-view-modal-container"
                                                                                    data-toggle="modal"
                                                                                    title="Quick View"><i
                                                                                        class="fa fa-eye"></i></a></li>
                                                                            <li><a href="#"><i
                                                                                        class="fa fa-heart-o"></i></a>
                                                                            </li>
                                                                            <li><a href="#"><i
                                                                                        class="fa fa-exchange"></i></a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            
                                                <div class="product-list-item mb-40">
                                                    <div class="row align-items-center">
                                                        <div class="col-md-4 col-sm-6">
                                                            <div class="single-product">
                                                                <div class="product-img mb-0 mb-xs-25">
                                                                    <a href="single-product.html">
                                                                        <img src="./assets/images/product/product-13.jpg"
                                                                            alt="">
                                                                    </a>
                                                                    <span class="descount-sticker">-10%</span>
                                                                    <span class="sticker">New</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-8 col-sm-6">
                                                            <div class="product-content-shop-list">
                                                                <div class="product-content">
                                                                    <h3><a href="single-product.html">White Shave
                                                                            Bruk</a></h3>
                                                                    <h4 class="price"><span class="new">€60.00</span>
                                                                    </h4>
                                                                    <div class="ratting">
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                    </div>
                                                                    <p>Pellentesque habitant morbi tristique senectus et
                                                                        netus et malesuada fames ac turpis egestas.
                                                                        Vestibulum tortor quam, feugiat vitae, ultricies
                                                                        eget, tempor sit amet, ante. Donec eu libero sit
                                                                        amet quam egestas semper. Aenean ultricies mi
                                                                        vitae est. Mauris placerat eleifend leo.</p>
                                                                    <div
                                                                        class="product-action d-flex justify-content-between">
                                                                        <a class="product-btn" href="#">Add to Cart</a>
                                                                        <ul class="d-flex">
                                                                            <li><a href="#quick-view-modal-container"
                                                                                    data-toggle="modal"
                                                                                    title="Quick View"><i
                                                                                        class="fa fa-eye"></i></a></li>
                                                                            <li><a href="#"><i
                                                                                        class="fa fa-heart-o"></i></a>
                                                                            </li>
                                                                            <li><a href="#"><i
                                                                                        class="fa fa-exchange"></i></a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                        </div> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-30 mb-sm-40 mb-xs-30">
                            <div class="col">
                                <ul class="page-pagination">
                                    <ul class="page-pagination">
                                        <?php if ($result_per_page == 1) { ?>
                                            <li><a href="?pg=sanpham&idloaisach=<?php echo $idloai ?>&trang=<?php echo $number_of_page ?>&idtacgia=<?php echo $idtg ?>&tukhoa=<?php echo $tukhoa ?>"><i class="fa fa-angle-left"></i></a></li>
                                        <?php } else { ?>
                                            <li><a href="?pg=sanpham&idloaisach=<?php echo $idloai ?>&trang=<?php echo ($result_per_page - 1) ?>&idtacgia=<?php echo $idtg ?>&tukhoa=<?php echo $tukhoa ?>"><i class="fa fa-angle-left"></i></a></li>
                                        <?php } ?>

                                        <?php for ($i = 1; $i <= $number_of_page; $i++) { ?>
                                            <li>
                                                <a <?php if ($i == $result_per_page) { ?> style=" background-color: #2b648b; color: white;" <?php } ?> href="?pg=sanpham&idloaisach=<?php echo $idloai ?>&trang=<?php echo $i ?>&idtacgia=<?php echo $idtg ?>&tukhoa=<?php echo $tukhoa ?>"><?php echo sprintf("%02d", $i) ?></a>
                                            </li>
                                        <?php } ?>

                                        <?php if ($result_per_page == $number_of_page) { ?>
                                            <li><a href="?pg=sanpham&idloaisach=<?php echo $idloai ?>&trang=<?php echo 1 ?>&idtacgia=<?php echo $idtg ?>&tukhoa=<?php echo $tukhoa ?>"><i class="fa fa-angle-right"></i></a></li>
                                        <?php } else { ?>
                                            <li><a href="?pg=sanpham&idloaisach=<?php echo $idloai ?>&trang=<?php echo ($result_per_page + 1) ?>&idtacgia=<?php echo $idtg ?>&tukhoa=<?php echo $tukhoa ?>"><i class="fa fa-angle-right"></i></a></li>
                                        <?php } ?>
                                    </ul>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="brand">
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
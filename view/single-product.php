 <?php
 extract($sachchitiet);
 ?>
 <!-- Single Product Section Start -->
        <div class="single-product-section section pt-30 pt-lg-80 pt-md-70 pt-sm-60 pt-xs-50 pb-100 pb-lg-80 pb-md-70 pb-sm-30 pb-xs-20">
            <div class="container">
                <div class="row">
                    <div class="col-md-5">
                        <div class="img-single_product">
                            <img src="../view/layout/assets/images/product/<?=$img?>" alt="">
                        </div>
                    </div>
                    <div class="col-md-7">
                        <!--Product Details Content Start-->
                        <div class="product-details-content">
                            
                            <h2><?=$name?></h2>
                            <br>
                            <div class="single-product-price">

                            <?php 
                              if($giamgia > 0){
                                $price1_sale = $price1 - (($giamgia / 100) * $price1);
                                $price = $price1_sale;
                                $show_price = '<h4 class="price"> <span style="color:red;font-size:30px;" >' . number_format($price1_sale) . ' <sup>đ</sup></span> - <span style="font-size:25px;" ><del>'.number_format($price1).'</del> đ</span></h4>';
                            }else{
                                $price = $price1;
                                $show_price = '<h4 class="price"> <span style="color:red;font-size:30px;" >' . number_format($price1) . ' <sup>đ</sup></span></h4>' ;
                            }
                            ?>


                           <?php echo $show_price ?>
                            </div>
                            <div class="product-description">
                                <p>Sách là một phương tiện truyền tải tri thức, giải trí, và kinh nghiệm từ tác giả đến độc giả. Chúng bao gồm các trang giấy hoặc điện tử chứa văn bản, hình ảnh hoặc thông tin khác, thường được in hoặc xuất bản để đọc và nghiên cứu. Sách có thể thuộc nhiều thể loại, như tiểu thuyết, sách học, hướng dẫn, khoa học, và nhiều loại khác, phục vụ nhu cầu và sở thích đa dạng của người đọc. Chúng có khả năng mở cửa vào thế giới của trí tưởng tượng, học hỏi kiến thức mới, và làm nảy mầm suy tư và cảm xúc. Sách là một công cụ quan trọng để bảo tồn và chia sẻ kiến thức và văn hóa qua các thế hệ.</p>
                            </div>
                            <div class="single-product-quantity">
                                <form class="add-quantity" action="#">
                                    <div class="product-quantity">
                                        <!-- <input value="1" type="number"> -->
                                    </div>
                                </form>
                                <div class="add-to-link">
                                    <form action="index.php?pg=addcart" method="post" class="pl-3">
                                            <input type="hidden" class="btn" name="idpro" value="<?=$id?>">
                                            <input type="hidden" class="btn" name="name" value="<?=$name?>">
                                            <input type="hidden" class="btn" name="img" value="<?=$img?>">
                                            <input type="hidden" class="btn" name="price1" value="<?=$price?>">  
                                            <input type="number" class="product-quantity" name="soluong" value="1" min="1" max="10">
                                            <input type="submit" class="product-add-btn" name="addcart" value="Thêm vào giỏ">
                                    </form>
                                    </div>
                            </div>
                            <div class="product-meta">
                                <span class="posted-in">
                                    Thể loại:
                                    <a href="#"> <?=$theloai?> </a>
                                </span>
                            </div>
                        </div>
                        <!--Product Details Content End-->
                    </div>
                </div>
            </div>
        </div>
        <!-- Single Product Section End -->

        <!--Product Description Review Section Start-->
        <div class="product-description-review-section section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="product-review-tab">
                            <!--Review And Description Tab Menu Start-->
                            <ul class="nav dec-and-review-menu">
                                <li>
                                    <a class="active" data-toggle="tab" href="#description">Mô tả</a>
                                </li>
                                <li>
                                    <a data-toggle="tab" href="#reviews">Đánh giá</a>
                                </li>
                            </ul>
                            <!--Review And Description Tab Menu End-->
                            <!--Review And Description Tab Content Start-->
                            <div class="tab-content product-review-content-tab" id="myTabContent-4">
                                <div class="tab-pane fade active show" id="description">
                                    <!-- Mô tả -->
                                    <div class="single-product-description row">
                                       <div class="col-sm-0 col-lg-3 d-flex justify-content-end">
                                        <img src="../view/layout/assets/images/product/<?=$img?>" alt="" class="mt-img">
                                       </div>
                                       <div class="col-sm-12 col-lg-9">
                                        <p class="mt-content">
                                            - Nội dung: <?=$mota?> <br>
                                            - Thể loại: <?=$theloai?> <br>
                                            - Tác giả : <?=$tacgia?>
                                        </p>
                                       </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="reviews">
                                    <div class="review-page-comment">
                                        <h2>Đánh giá cho sách: <?=$name?></h2>
                                        <!-- <ul>
                                            <li>
                                                <div class="product-comment mb-20">
                                                    <img src="../view/layout/assets/images/user1.png" alt="">
                                                    <div class="product-comment-content">
                                                        <p class="meta">
                                                            <strong>Ngọc Huy</strong> - <span>November 22, 2018</span>
                                                        <div class="description">
                                                            <p>Sản phẩm tốt !</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul> -->
                                        <hr>
                                        <iframe src="../view/binhluan.php?idsanpham=<?=$_GET['idproduct']?>" width="100%" height="300px" frameborder="0"></iframe>
                                        <hr>
                                    </div>
                                </div>
                            </div>
                            <!--Review And Description Tab Content End-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Product Description Review Section Start-->

        <!--Product section start-->
        <div class="product-section section pt-100 pt-lg-80 pt-md-70 pt-sm-60 pt-xs-50 pb-65 pb-lg-45 pb-md-35 pb-sm-25 pb-xs-15">
            <div class="container">

                <div class="row">
                    <!-- Section Title Start -->
                    <div class="col">
                        <div class="section-title mb-40 mb-xs-20">
                            <h2>Những sản phẩm tương tự</h2>
                        </div>
                    </div>
                    <!-- Section Title End -->
                </div>
                <div class="row tf-element-carousel" data-slick-options='{
                "slidesToShow": 4,
                "slidesToScroll": 1,
                "infinite": true,
                "arrows": true,
                "prevArrow": {"buttonClass": "slick-btn slick-prev", "iconClass": "fa fa-angle-left" },
                "nextArrow": {"buttonClass": "slick-btn slick-next", "iconClass": "fa fa-angle-right" }
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
                foreach ($sachlienquan as $item) {
                    extract($item);
                    if($moi==1){
                        $label='<span class="sticker">
                        <img src="../view/layout/assets/images/new.png" alt=""></span>';
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
                        $show_price = '<h4 class="price"><span class="new">' . number_format($price1) . '<sup>đ</sup></span>' ;
                    }
                    echo '<div class="col-lg-3">
                        <!-- Single Product Start -->
                        <div class="single-product mb-30 mx-3">
                            <div class="product-img">
                                <a href="index.php?pg=single-product&idproduct='.$id.'">
                                    <img src="../view/layout/assets/images/product/'.$img.'" alt="">
                                </a>
                                '.$label.'

                            </div>
                            <div class="product-content">
                                <h3><a href="index.php?pg=single-product&idproduct='.$id.'">'.$name.'</a></h3>
                                '. $show_price .'
                            </div>
                        </div>
                        <!-- Single Product End -->
                    </div>';
                }
                ?>
                    
                    
                </div>
            </div>
        </div>
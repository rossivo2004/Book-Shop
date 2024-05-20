<div class="container mt-5 mb-5">
            <div class="row">
                <div class="col-lg-6 col-sm-12">
                    <div class="container blog-chitiet_left p-4">
                        <div class="row">
                            <div class="col-12 blog-chitiet_title">
                                <h1><?php echo $infor_blog[0]['tenblog'] ?></h1>
                            </div>
                            <div class="col-12 blog-chitiet_infor">
                                <img src="../view/layout/assets/images/<?php echo $infor_blog[0]['avatar'] ?>" alt="" class="blog-chitiet_infor__img">
                                <p class="blog-chitiet_infor__name"><?php echo $infor_blog[0]['username'] ?></p>
                            </div>
                            <div class="col-12 blog-chitiet_time">
                                <i class="fa-regular fa-clock"></i>
                                <?php echo $infor_blog[0]['ngayvietblog'] ?>
                            </div>

                            <div class="col-12 blog-chitiet__content">
                                <p><?php echo $infor_blog[0]['mota'] ?></p>
                                <img src="../view/layout/assets/images/<?php echo $infor_blog[0]['img'] ?>" alt="">
                                <p><?php echo $infor_blog[0]['noidung'] ?></p>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-lg-6 col-sm-12">
                    <div class="container blog-chitiet_right p-4">
                        <h1 class="blog-chitiet_more">
                            Các bài viết khác
                        </h1>
                        <div class="row">
                            <div class="col-12">
                                <div class="tab-content">
                                    <div class="tab-pane fade show active">
                                        <div class="row tf-element-carousel" data-slick-options='{  
                            "slidesToShow": 1,
                            "slidesToScroll": 1,
                            "infinite": true,
                            "rows": 2,
                            "arrows": true,
                            "prevArrow": {"buttonClass": "slick-btn-main slick-prev blog-prev", "iconClass": "fa fa-angle-left" },
                            "nextArrow": {"buttonClass": "slick-btn-main slick-next blog-next", "iconClass": "fa fa-angle-right" }
                            }' data-slick-responsive='[
                            {"breakpoint":1199, "settings": {
                            "slidesToShow": 1
                            }},
                            {"breakpoint":992, "settings": {
                            "slidesToShow": 1
                            }},
                            {"breakpoint":768, "settings": {
                            "slidesToShow": 1,
                            "arrows": false,
                            "autoplay": true
                            }},
                            {"breakpoint":576, "settings": {
                            "slidesToShow": 1,
                            "arrows": false,
                            "autoplay": true
                            }}
                            ]'>
                            <?php foreach($all_blog  as $item){ ?> 
                            <?php  extract($item)?>
                            <div class="col-12 p-2">
                                                <div
                                                    class="row g-0 border rounded overflow-hidden flex-md-row m-2 shadow-sm h-md-250 position-relative">
                                                    <div class="col-6 p-4 d-flex flex-column position-static">
                                                        <strong class="d-inline-block mb-2 text-primary-emphasis"><?php echo $username ?></strong>
                                                        <h3 class="mb-0 text-cl_main fw-600"><?php echo $tenblog ?></h3>
                                                        <div class="mb-1 text-body-secondary">Nov 12</div>
                                                        <p class="card-text mb-auto d-sm-none"><?php echo $mota ?></p>
                                                        <a href="index.php?pg=blog_detail&id=<?php echo $id ?>"
                                                            class="btn-blog_view icon-link gap-1 icon-link-hover stretched-link">
                                                            Đọc ngay
                                                        </a>
                                                    </div>
                                                    <div class="col-6 d-none d-lg-block pl-0 pr-0">
                                                        <img class="img-blog_box"
                                                            src="../view/layout/assets/images/<?php echo $img ?>" alt="">
                                                    </div>
                                                </div>
                                            </div>

                            <?php }?>
                                            
                                           
                                            

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
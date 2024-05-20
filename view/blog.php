
        <div class="container-fluid blog-banner p-0 mb-lg-60">
            <a href="#write-blog"><img src="../view/layout/assets/images/blog-banner.gif" alt=""
                    class="blog-banner_img"></a>
        </div>
        <main class="container">
            
            <div class="container mt-5">
                <div class="row">
                    <div class="col-12">
                        <div class="tab-content">
                            <div class="tab-pane fade show active">
                                <div class="row tf-element-carousel" data-slick-options='{  
                        "slidesToShow": 2,
                        "slidesToScroll": 1,
                        "infinite": true,
                        "rows": 2,
                        "arrows": true,
                        "prevArrow": {"buttonClass": "slick-btn-main slick-prev", "iconClass": "fa fa-angle-left" },
                        "nextArrow": {"buttonClass": "slick-btn-main slick-next", "iconClass": "fa fa-angle-right" }
                        }' data-slick-responsive='[
                        {"breakpoint":1199, "settings": {
                        "slidesToShow": 2
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
                                            class="row bg-white g-0 border rounded overflow-hidden flex-md-row m-2 shadow-sm h-md-250 position-relative">
                                            <div class="col-6 p-4 d-flex flex-column position-static">
                                                <strong class="d-inline-block mb-2 text-primary-emphasis"><?php echo $username ?></strong>
                                                <h3 class="mb-0"><?php echo $tenblog ?></h3>
                                                <div class="mb-1 text-body-secondary"><?php echo $ngayvietblog ?></div>
                                                <p class="card-text mb-auto d-sm-none"><?php echo $mota ?></p>
                                                <a href="index.php?pg=blog_detail&id=<?php echo $id ?>"
                                                    class="btn-blog_view icon-link gap-1 icon-link-hover stretched-link">
                                                    Đọc ngay
                                                </a>
                                            </div>
                                            <div class="col-6 d-none d-lg-block pl-0 pr-0">
                                                <img class="img-blog_box" src="../view/layout/assets/images/<?php echo $img ?>"
                                                    alt="">
                                            </div>
                                        </div>
                                    </div>
                        <?php } ?>
                                   
                                    
                                    <!-- <div class="col-12 p-2">
                                        <div
                                            class="row bg-white g-0 border rounded overflow-hidden flex-md-row m-2 shadow-sm h-md-250 position-relative">
                                            <div class="col-6 p-4 d-flex flex-column position-static">
                                                <strong class="d-inline-block mb-2 text-primary-emphasis">Tác
                                                    giả</strong>
                                                <h3 class="mb-0">Tên sản phẩm</h3>
                                                <div class="mb-1 text-body-secondary">Nov 12</div>
                                                <p class="card-text mb-auto">Mô tả ngắn</p>
                                                <a href="#"
                                                    class="btn-blog_view icon-link gap-1 icon-link-hover stretched-link">
                                                    Đọc ngay
                                                </a>
                                            </div>
                                            <div class="col-6 d-none d-lg-block pl-0 pr-0">
                                                <img class="img-blog_box" src="/view/layout/assets/images/sp1.jpg"
                                                    alt="">
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="col-12 p-2">
                                        <div
                                            class="row bg-white g-0 border rounded overflow-hidden flex-md-row m-2 shadow-sm h-md-250 position-relative">
                                            <div class="col-6 p-4 d-flex flex-column position-static">
                                                <strong class="d-inline-block mb-2 text-primary-emphasis">Tác
                                                    giả</strong>
                                                <h3 class="mb-0">Tên sản phẩm</h3>
                                                <div class="mb-1 text-body-secondary">Nov 12</div>
                                                <p class="card-text mb-auto">Mô tả ngắn</p>
                                                <a href="#"
                                                    class="btn-blog_view icon-link gap-1 icon-link-hover stretched-link">
                                                    Đọc ngay
                                                </a>
                                            </div>
                                            <div class="col-6 d-none d-lg-block pl-0 pr-0">
                                                <img class="img-blog_box" src="/view/layout/assets/images/sp1.jpg"
                                                    alt="">
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="col-12 p-2">
                                        <div
                                            class="row bg-white g-0 border rounded overflow-hidden flex-md-row m-2 shadow-sm h-md-250 position-relative">
                                            <div class="col-6 p-4 d-flex flex-column position-static">
                                                <strong class="d-inline-block mb-2 text-primary-emphasis">Tác
                                                    giả</strong>
                                                <h3 class="mb-0">Tên sản phẩm</h3>
                                                <div class="mb-1 text-body-secondary">Nov 12</div>
                                                <p class="card-text mb-auto">Mô tả ngắn</p>
                                                <a href="#"
                                                    class="btn-blog_view icon-link gap-1 icon-link-hover stretched-link">
                                                    Đọc ngay
                                                </a>
                                            </div>
                                            <div class="col-6 d-none d-lg-block pl-0 pr-0">
                                                <img class="img-blog_box" src="/view/layout/assets/images/sp1.jpg"
                                                    alt="">
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="col-12 p-2">
                                        <div
                                            class="row bg-white g-0 border rounded overflow-hidden flex-md-row m-2 shadow-sm h-md-250 position-relative">
                                            <div class="col-6 p-4 d-flex flex-column position-static">
                                                <strong class="d-inline-block mb-2 text-primary-emphasis">Tác
                                                    giả</strong>
                                                <h3 class="mb-0">Tên sản phẩm</h3>
                                                <div class="mb-1 text-body-secondary">Nov 12</div>
                                                <p class="card-text mb-auto">Mô tả ngắn</p>
                                                <a href="#"
                                                    class="btn-blog_view icon-link gap-1 icon-link-hover stretched-link">
                                                    Đọc ngay
                                                </a>
                                            </div>
                                            <div class="col-6 d-none d-lg-block pl-0 pr-0">
                                                <img class="img-blog_box" src="/view/layout/assets/images/sp1.jpg"
                                                    alt="">
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="col-12 p-2">
                                        <div
                                            class="row bg-white g-0 border rounded overflow-hidden flex-md-row m-2 shadow-sm h-md-250 position-relative">
                                            <div class="col-6 p-4 d-flex flex-column position-static">
                                                <strong class="d-inline-block mb-2 text-primary-emphasis">Tác
                                                    giả</strong>
                                                <h3 class="mb-0">Tên sản phẩm</h3>
                                                <div class="mb-1 text-body-secondary">Nov 12</div>
                                                <p class="card-text mb-auto">Mô tả ngắn</p>
                                                <a href="#"
                                                    class="btn-blog_view icon-link gap-1 icon-link-hover stretched-link">
                                                    Đọc ngay
                                                </a>
                                            </div>
                                            <div class="col-6 d-none d-lg-block pl-0 pr-0">
                                                <img class="img-blog_box" src="/view/layout/assets/images/sp1.jpg"
                                                    alt="">
                                            </div>
                                        </div>
                                    </div> -->
                                    

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </main>
        <div class="container mt-5 mb-2 mt-5 mb-3">
            <h2 id="blog-write">Viết bài ngay</h2>
        </div>
        <?php if(!empty($_SESSION['user'])){ ?>
            <div class="container container-sm" id="write-blog">
            <div>
                <form class="form-write_blog" action="index.php?pg=blog" method="post" enctype="multipart/form-data">
                    <label class="pt-2" for="fileInput">Chọn ảnh đại diện blog :</label>
                    <input class="mb-2" type="file" id="fileInput" name="fileInput">
                    <br>
                    <label for="blogTitle">Tiêu đề blog :</label>
                    <input class="mb-2" type="text" id="blogTitle" name="blogTitle" >

                    <label for="blogDescription">Mô tả :</label>
                    <input class="mb-2" type="text" id="blogDescription" name="blogDescription" >

                    <label for="blogContent">Nội dung :</label> <br>
                    <textarea  id="blogContent" name="blogContent"
                        style="border: 1px solid #ccc; padding: 10px; width : 100%" ></textarea>

                    <br>
                    <input class="send-blog" type="submit" value="Đăng bài blog">
                </form>
                <!-- <form class="form-write_blog" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>?pg=add_blog" method="post" enctype="multipart/form-data">
                <label class="pt-2" for="fileInput">Chọn ảnh đại diện blog :</label>
                <input type="file" name="file">   

                <input  class="send-blog" type="submit">
                </form>
                -->

            </div>
        </div>
            <?php }else{ ?>
                <div style="width:100%; text-align: center; padding-bottom:50px;">
                    <span>Bạn cần <a href="index.php?pg=login">đăng nhập</a> để sử dụng chức năng này !</span> 
                </div>
                <?php } ?>
        
        <script src="assets/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="../view/layout/assets/js/login.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/scrollreveal"></script>

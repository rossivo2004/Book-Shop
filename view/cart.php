    <div class="container-fluid">
      <div class="container p-0">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
            <li class="breadcrumb-item active" aria-current="page">Sản phẩm</li>
          </ol>
        </nav>
      </div>
    </div>

    <div class="container mt120 mb-50 ">
      <div class="row">
        <div class="col-xl-8">
          <div class="card shadow-none">
            <div class="card-body cart mb-2 cart-title">
              <div class="row">
                <div class="col-7 d-flex justify-content-center">Sản phẩm</div>
                <div class="col-2 d-flex justify-content-center">Số lượng</div>
                <div class="col-2 d-flex justify-content-center">Thành tiền</div>
                <div class="col-1 d-flex justify-content-center"></div>
              </div>
            </div>
            <?php if(empty($_SESSION['user'])){ ?>
                <!-- star if() kiểm tra xe có sản phẩm trong giỏ hàng không  -->
                <?php if(!empty($_SESSION['giohangsach'])){ ?> 
                    <?php $position=0 ?>
                    <?php foreach($_SESSION['giohangsach'] as $item){ ?> 
                        <?php  

                        extract($item);
                            $tongcong=$price1*$soluong;
                                $tongall=$tongall+$tongcong;
                                $delcart="index.php?pg=delcart&idsp=".$idpro;
                        ?>
            <div class="card-body cart mb-2">
              <div class="row">
                <div class="col-4 col-lg-2 col-sm-4">
                  <img src="../view/layout/assets/images/product/<?php echo($img) ?>" alt="" class="cart-img_product">
                </div>
                <div class="col-8 col-lg-10 col-sm-8">
                  <div class="cart-product_infor">
                    <div class="row h-100 align-items-center">
                      <div class="col-lg-6 col-sm-12">
                        <div class="row">
                          <div class="col-sm-12 mb-4">
                            <p><?php echo($name) ?></p>
                          </div>
                          <div class="col-sm-12">
                            <p class="cart-price price-cart_product"><?php echo(number_format($price1)) ?></p>
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-12 col-lg-6">
                        <div class="row align-items-center">
                          <div class="col-9 col-sm-9">
                            <div class="row align-items-center cart-control">
                              <div class="col-lg-8 col-sm-12">
                                <form action="index.php?pg=update_quality" method="post">
                                <input type="submit" class="prev-cart_quantity input-cart_quantity" name='minus' value="-">
                                <input type="hidden" name="position" value="<?php echo $position ?>">
                                <input type="number"  class="number-cart_quantity" min="1" name="quality"  value="<?php echo($soluong) ?>">
                                <input type="submit" class="plus-cart_quantity input-cart_quantity" name="plus" value="+">
                                </form>
                                
                              </div>
                              <div class=" col-lg-4 col-sm-12 pricesum-cart_product"><?php echo(number_format($tongcong)) ?></div>
                            </div>
                          </div>
                          <div class="col-3 col-sm-3">
                            <a href="index.php?pg=delcart&position=<?php echo $position ?> " class="cart-text px-1 cart-icon_trash">
                              <i class="fa-solid fa-trash"></i>
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <?php $position++ ?>
                        <?php } ?> 
                        
                        <?php $xoaAll = '<a class="cart-delete_all" href="index.php?pg=delallcart">Xóa tất cả</a>' ?>

                    <?php }else{ ?>  
                            
                        <?php } ?> 
                    <!-- end if -->

        <?php }else{ ?>
            <?php $product_cart = cart_select_all($_SESSION['user']['id']); ?>
            <?php if(!empty(cart_select_all($_SESSION['user']['id']))){ ?> 

                <?php foreach($product_cart as $item){ ?> 
                        <?php  

                        extract($item);
                            $tongcong=$price1*$soluong;
                                $tongall=$tongall+$tongcong;
                                $delcart="index.php?pg=delcart&idsp=".$id;
                        ?>
                         <div class="card-body cart mb-2">
              <div class="row">
                <div class="col-4 col-lg-2 col-sm-4">
                  <img src="../view/layout/assets/images/product/<?php echo($img) ?>" alt="" class="cart-img_product">
                </div>
                <div class="col-8 col-lg-10 col-sm-8">
                  <div class="cart-product_infor">
                    <div class="row h-100 align-items-center">
                      <div class="col-lg-6 col-sm-12">
                        <div class="row">
                          <div class="col-sm-12 mb-4">
                            <p><?php echo($name) ?></p>
                          </div>
                          <div class="col-sm-12">
                            <p class="cart-price price-cart_product"><?php echo(number_format($price1)) ?></p>
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-12 col-lg-6">
                        <div class="row align-items-center">
                          <div class="col-9 col-sm-9">
                            <div class="row align-items-center cart-control">
                              <div class="col-lg-8 col-sm-12">
                              <form action="index.php?pg=update_quality" method="post">
                              <input type="submit" class="prev-cart_quantity input-cart_quantity" name='minus' value="-">
                                <input type="hidden" name="idpro" value="<?php echo $idpro ?>">
                                <input type="number"  class="number-cart_quantity" min="1" name="quality"  value="<?php echo($soluong) ?>">
                                <input type="submit" class="plus-cart_quantity input-cart_quantity" name="plus" value="+">
                                </form>
                              </div>
                              <div class=" col-lg-4 col-sm-12 pricesum-cart_product"><?php echo(number_format($tongcong)) ?></div>
                            </div>
                          </div>
                          <div class="col-3 col-sm-3">
                            <a href="index.php?pg=delcart&idpro=<?php echo $id ?> " class="cart-text px-1 cart-icon_trash">
                              <i class="fa-solid fa-trash"></i>
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
                        
                        <?php } ?> 
                        
                        <?php $xoaAll = '<a class="cart-delete_all" href="index.php?pg=delallcart">Xóa tất cả</a>' ?>
                
                <?php }else{ ?>
                    

                    <?php } ?>
            <?php }?>       
            <div class="card-body cart mb-2 cart-add_more">
              <a href="index.php?pg=sanpham">
                <div class="row d-flex justify-content-center align-items-center">
                  <div class="col-12 d-flex justify-content-center align-items-center"><i class="fa-solid fa-plus"></i>
                  </div>
                  <div class="col-12 d-flex justify-content-center align-items-center">
                    <p>Thêm sản phẩm</p>
                  </div>
                </div>
              </a>
            </div>
            <?php
              if (isset($xoaAll)) {
                  echo $xoaAll;
              } else {
                  echo '';
              }
              ?>

            <div>
            </div>
          </div>
          <!-- <div class="cart-hollow">
                    <div class="text-center">Không có sản phẩm trong giỏ hàng.</div>
                    <div class="box-btn__buy text-center">
                        <a href="index.php?pg=sanpham"><button><i class="me-1 fa fa-shopping-basket"></i>Tiếp tục mua
                                hàng</button></a>
                    </div>
                </div> -->
          <!-- end card -->
        </div>

        <div class="col-xl-4">
          <div class="mt-lg-0">
            <div class="card shadow-none bg-white">
              <div class="card-header bg-transparent price-sum_border py-3 px-4">
                <h5 class="font-size-16 mb-0 card-ck">Điểm tích lũy
                </h5>
              </div>
              <div class="card shadow-none bg-white">
                <?php if(!empty($_SESSION['user'])){ ?> 
                  <div class=" bg-transparent  py-3 px-4">
                  <div class="table-responsive">
                    <table class="mb-0 w-100">
                      <tbody>
                        <tr>
                          <td class="price-cart">
                            <p class="fw-600">
                              Số điểm bạn đang có :
                            </p>
                            <p class="fw-600">
                              <span style="color: #ed553b;"><?php echo $_SESSION['user']['diem_tich_luy'] ?></span> điểm
                            </p>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                  <a href="index.php?pg=change_voucher_view" class="btn-use_point__cart">Đổi mã giảm giá</a>
                </div>
                  
                  <?php }else{?>
                    <span style="padding-left: 24px; padding-top:10px;">Bạn phải đăng nhập để đổi điểm! <a href="index.php?pg=login">Đăng nhập</a></span>
                    <?php } ?>
              </div>
            </div>
          </div>
          <div class="mt-lg-0">
            <div class="card shadow-none bg-white">
              <div class="card-header bg-transparent price-sum_border py-3 px-4">
                <h5 class="font-size-16 mb-0 card-ck">Đơn hàng
                </h5>

              </div>

              <div class="card-body p-4 pt-2">

                <div class="table-responsive">
                  <table class="mb-0 w-100">
                    <tbody>
                      <!-- <tr>
                        <td>
                          <form action="" class="d-flex align-items-end w-100">
                            <div class="voucher-input">
                              <label for="" style="font-weight: 600;">Nhập mã giảm giá</label>
                              <input type="text">
                            </div>
                            <div class="btn-use_voucher">
                              <input type="submit" value="Sử dụng">
                            </div>
                          </form>

                        </td>
                      </tr> -->
                      <tr>
                        <td>
                          <p class="mb-0" style="font-weight: 600; margin-bottom: 30px;">Mã giảm giá</p>
                          <div class="box-voucher_cart">
                            <form action="">
                              <input type="hidden" name="pg" value="cart">
                              <select name="voucher_choose" id="">
                                <option  <?php if(!isset($_GET['voucher_choose']) || $_GET['voucher_choose'] == 0){?> selected <?php }?>value="0">Chọn mã giảm giá</option>
                                <?php foreach($user_voucher as $item){ ?>
                                  
                                  <?php extract($item) ?>
                                  <option 
                                  <?php if(isset($_GET['voucher_choose'])){?>
                                    <?php if($_GET['voucher_choose'] ==  $id_voucher){ ?> 
                                      selected
                                      <?php }?>
                                    <?php } ?> value="<?php echo $id_voucher ?>">Giảm : <?php echo $sotien_giam ?>%</option>
                                  <?php } ?>
                                
                              </select>
                              <input type="submit" value="Chọn" style="height:30px; background-color: #2b648b; color: #fff; border: transparent; padding: 0 10px;border-radius:8px;">
                              
                            </form>
                          </div>
                        </td>
                      </tr>
                     
                      <tr>
                        <td class="price-cart">
                          <p style="font-weight: 600;">
                            Tông tiền :
                          </p>
                          <p>
                            <?php echo number_format($tongall )?><sup>VNĐ</sup>
                          </p>
                        </td>
                      </tr>
                      <tr>
                        <td class="price-cart">
                          <p style="font-weight: 600;">
                            Tiền ship:
                          </p>
                          <p>
                            <?php 
                          echo  number_format($ship );
                           ?><sup>VNĐ</sup>
                          </p>
                        </td>

                      </tr>
                      
                      <tr>
                        <td class="price-cart">
                          <p style="font-weight: 600;">
                          Tiền khuyến mãi :
                          </p>
                          <p>
                            -<?php
                            if(isset($_GET['voucher_choose'])){
                              if($_GET['voucher_choose'] != 0){
                               
                                $so_tien_giam = $tongall * ($user_voucher[0]['sotien_giam'] / 100);
                                // $tongall =  $tongall - $so_tien_giam;
                                 echo number_format($so_tien_giam ); 
                                 
                              }else{
                              echo 0;
                              }
                            }else{
                              echo 0;
                            }
                            
                             ?>
                             
                             <sup>VNĐ</sup>
                          </p>
                        </td>

                      </tr>

                      

                      <tr class="price-sum_border">
                        <td class="price-cart price-cart_sum">
                          <p style="font-weight: 600;">
                           Tổng thanh toán:
                          </p>
                          <p class="cl-price">
                          <?php 
                          $tongthanh_toan = $tongall + $ship ;
                          $tongthanh_toan = $tongthanh_toan - $so_tien_giam;
                             echo number_format($tongthanh_toan);
                             ?>  <sup>VNĐ</sup>
                          </p>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                  <div class="row my-4 align-items-center">
                    <!-- <div class=" col-6 col-lg-6 col-sm-6">
                      <a href="index.php?pg=sanpham" class="btn-nextbuy">
                        <p>Tiếp tục mua sắm</p>
                      </a>
                    </div> end col -->


                    <form action="index.php?pg=checkout" method="post">
                      <?php if(isset($_GET['voucher_choose']) && $_GET['voucher_choose'] != 0 ){ ?> 
                        <input type="hidden" name="id_voucher" value="<?php echo   $_GET['voucher_choose'] ?>">
                      
                        <?php } ?>
                    
                    <input type="hidden" name="tongtien" value="<?php echo   $tongall ?>">
                      <input type="hidden" name="ship"  value="<?php echo   $ship ?>">
                      <input type="hidden" name="sotien_giam" value="<?php echo   $so_tien_giam ?>">
                      <input type="hidden" name="tongthanhtoan" value="<?php echo $tongthanh_toan ?>">
                    <div class="col-12 col-lg-12 col-sm-12 ">
                      <div class="box-btn__buy">
                      <?php
                          if(!empty($_SESSION['user'])){
                              if(!empty(cart_select_all($_SESSION['user']['id']))){
                                  echo'  <input type="submit" class="btn-checkout" value="Thanh toán">';
                              }else{
                                  echo '
                                  <input disabled type="submit" class="btn-checkout" value="Không thể thanh toán">';
                              }
                          }else{
                              if(isset($_SESSION['giohangsach'])&&is_array($_SESSION['giohangsach'])&&(count(($_SESSION['giohangsach']))>0)){
                                  echo'  <input type="submit" class="btn-checkout" value="Thanh toán">';
                              }else{
                                  echo '
                                  <input disabled type="submit" class="btn-checkout" value="Không thể thanh toán">';
                              }
                          }
                          ?>
                        
                      </div>
                    </div> <!-- end col -->
                    </form>
                    
                  </div> <!-- end row-->
                </div>
                <!-- end table-responsive -->
              </div>
            </div>
          </div>
        </div>



      </div>
      <!-- end row -->
    </div>
                    
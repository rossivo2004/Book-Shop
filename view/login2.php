<div class="container-login">
            <!---------------------------------- Form login-------------------------- -->
            <div class="form-login container-sm">
                <div class="fl-left">
                    <h1 class="name-lg">Đăng nhập</h1>
                    
                    <form action="index.php?pg=dangnhap" method="post">
                        <div class="lg-user_name">
                            <div class="lg-user_name__input">
                                <div class="input-group">
                                    <input required="" type="text" name="username" autocomplete="off" class="input input-login-register input-user_name">
                                    <label class="user-label">Tên đăng nhập</label > 
                                    <i class="fa-solid fa-user"></i>
                                  </div>
                            </div>
                            <!-- <div class="err-user_name">
                                <small class="hide">Vui lòng nhập tên đăng nhập</small>
                            </div> -->
                        </div>
                        <div class="lg-password">
                            <div class="lg-password__input">
                                <div class="input-group">
                                    <input required="" type="password" name="password" autocomplete="off" class="input input-login-register input-password">
                                    <label class="user-label">Mật khẩu</label>
                                    <i class="fa-solid fa-eye showPassword"></i>
                                    <!-- <i class="fa-regular fa-eye"></i> -->
                                  </div>
                        </div>
                        <!-- <div class="err-password">
                            <small class="hide">Tên tài khoản hoặc Mật khẩu sai</small>
                        </div> -->
                        </div>
                        <?php
                            if (isset($_SESSION['tb']) && ($_SESSION['tb'] != ""))
                                echo $_SESSION['tb'];
                                unset($_SESSION['tb']);
                        ?>
                        <div class="fg-pass">
                            <a href="">Quên mật khẩu ?</a>
                        </div>
                        <div class="btn-login">
                            <input type="submit" name="dangnhap"  value="Đăng nhập">
                        </div>
                        <div class="d-xxl-none d-flex justify-content-center align-items-center mt-2">
                            Bạn chưa có tài khoản
                            <div class="register-now ml-2 ">Đăng ký ngay !</div>
                        </div>
                        
                    </form>
                    
                </div>
                <div class="fl-right">
                    <!-- <img src="/asset/img/sl1.jpg" alt=""> -->
                    <h1>Bạn chưa có tài khoản ?</h1>
                    
                        <div class="register-now">Đăng ký ngay !</div>
                    
                </div>
            </div>
            <!-- -----------------------------End Form login------------------------- -->
            <div class="form-register container-sm hide">
                <div class="fl-left">
                    <h1 class="name-lg">Đăng kí</h1>
                    <form action="index.php?pg=dangky" method="post" id="registrationForm">
                        <div class="rg-user_name">
                            <div class="rg-user_name__input">
                                <div class="input-group">
                                    <input required="" type="text" name="username"  class="input input-login-register input-user_name">
                                    <label class="user-label">Tên đăng nhập</label>
                                    <i class="fa-solid fa-user"></i>
                                  </div>
                            </div>
                            <div class="err-input">
                                <div id="usernameError" class="error-message hide">Tên đăng nhập không đủ 8 kí tự</div>
                            </div>
                        </div>
                        <div class="rg-email">
                            <div class="rg-email__input">
                                <div class="input-group">
                                    <input required="" type="text" name="email" class="input input-login-register input-email">
                                    <label class="user-label">Email</label>
                                    <i class="fa-solid fa-envelope"></i>
                                  </div>
                            </div>
                            <div class="err-input">
                                <div id="emailError" class="error-message hide">Vui lòng nhập email hợp lệ</div>
                            </div>
                        </div>
                        <div class="rg-password">
                            <div class="rg-password__input">
                                <div class="input-group">
                                    <input required="" type="password" name="password" class="input input-login-register input-password rg-password_input">
                                    <label class="user-label">Mật khẩu</label>
                                    <i class="fa-solid fa-eye showPassword" ></i>
                                  </div>
                            </div>
                            <div class="err-input">
                                <div id="passwordError" class="error-message hide">Mật khẩu phải có ít nhất 8 ký tự</div>
                            </div>
                        </div>
                        <div class="rg-password_confirm">
                            <div class="rg-passwordConfirm__input">
                                <div class="input-group">
                                    <input required="" type="password" name="repassword" class="input input-login-register input-password rg-password_confirm__input">
                                    <label class="user-label">Nhập lại mật khẩu</label>
                                    <i class="fa-solid fa-eye showPassword" ></i>
                                    <!-- <i class="fa-regular fa-eye"></i> -->
                                  </div>
                        </div>
                        <div class="err-input">
                                <div id="confirmPasswordError" class="error-message hide">Mật khẩu xác nhận không khớp</div>
                        </div>
                        </div>
                        <div class="btn-register">
                        <input type="submit" class="btn-main" name="dangky " value="Đăng ký">

                        </div>
                        <div class="d-xxl-none d-flex justify-content-center align-items-center mt-2">
                            Bạn đã có tài khoản
                            <div class="login login-now ml-2 ">Đăng nhập ngay !</div>
                        </div>
                        
                    </form>
                </div>
                <div class="fl-right">
                    <!-- <img src="/asset/img/sl1.jpg" alt=""> -->
                    <h1>Bạn đã có tài khoản ?</h1>
                    
                        <div class="login-now">Đăng nhập ngay !!!</div>
                    
                </div>
            </div>
        </div>
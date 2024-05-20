<?php if(isset($_GET['succeed'])){ ?>
            <span><?php echo $_GET['succeed']  ?></span>
      <?php   }  ?><br>
    <form action="index.php?pg=change_pass_form" method="post" style="    background-color: #fff;
    width: 400px;
    border-radius: 8px;
    display: flex;
    flex-direction: column;
    align-items: center;
    margin: 150px auto;
    padding: 10px;">
      <div style="margin-bottom: 10px;">
        <label for="">Mật khẩu mới</label> <br>
        <input type="password" name="new_password" placeholder="Nhập mật khẩu mới" style="border: 2px solid #2b648b;
    border-radius: 8px;
    padding: 5px 10px;
    width: 300px;"><br>
      </div>
      <div style="margin-bottom: 10px;">
        <label for="">Xác nhận mật khẩu</label> <?php if(isset($_GET['failure'])){ ?>
            <span><?php echo $_GET['failure']  ?></span>
      <?php   }  ?><br>
        <input type="password" name="confirm_new_password" placeholder="Xác nhận mật khẩu" style="border: 2px solid #2b648b;
    border-radius: 8px;
    padding: 5px 10px;
    width: 300px;"><br>
      </div>
        <input type="submit" name="enter_change_password" value="Xác nhận" class="btn-main" style="">
    </form>
    <?php if(isset($_GET['succeed'])){ ?>
           <a href="index.php?pg=login">Đăng nhập</a>
      <?php   }  ?><br>
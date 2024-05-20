<?php
foreach ($blog_detail as $item) {
    extract($item);
    echo'<div class="container" style="max-width: 800px;
    margin: 0 auto;
    padding: 20px;">
        <div class="post" style="padding: 20px;
        margin-bottom: 20px;">
            <h2 style="font-size: 24px;
            margin-bottom: 10px;">'.$tenblog.'</h2>
            <br>
            <br>
            <span>'.$mota.'</span>
            <br>
            <br>
            <img src="../view/layout/assets/images/'.$img.'" width="800px" height="500px" alt="">
            <p style="font-size: 16px;
            line-height: 1.5;
            margin-bottom: 10px;">'.$noidung.'.</p>
            <div style="font-size: 14px;
            color: #888;"> Ngày tạo bài viết:   '.$ngayvietblog.'</div> 
            <br>
            <br>
            <div style="font-size: 14px;
            color: #888;"> Người tạo bài viết: '.$username.'</div> 
        </div>
        
    </div>';
}
?>


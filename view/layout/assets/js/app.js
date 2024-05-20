$(document).ready(function() {
    var toggleButtons = $(".shop-showmore_product__cata");

    function isScrolledToBottom() {
        return $(window).scrollTop() + $(window).height() >= $(document).height();
    }

    function toggleHiddenItems(button) {
        // Tìm hiddenItems trong cùng một container cha của button
        var container = button.closest('.common-sidebar-widget');
        var hiddenItems = container.find(".li-danhmuc.hidden");
        hiddenItems.toggle();
    }

    function updateButtonText(button, isHidden) {
        button.html(isHidden ? 'Ẩn đi <i class="fa-solid fa-chevron-up"></i>' : 'Hiện thị thêm <i class="fa-solid fa-chevron-down"></i>');
    }

    function handleToggle(button) {
        toggleHiddenItems(button);
        updateButtonText(button, button.closest('.common-sidebar-widget').find(".li-danhmuc.hidden").is(":visible"));
    }

    // Event listener for the scroll event
    $(window).scroll(function() {
        if (isScrolledToBottom()) {
            toggleButtons.each(function() {
                handleToggle($(this));
            });
        }
    });

    // Event listener for the button click
    toggleButtons.click(function() {
        handleToggle($(this));
    });
});






function showmore_voucher() {
    var box_voucher_cart = document.querySelector('.box-voucher_cart');
    var btn_show__vouchercart = document.querySelector('#show-voucher_btn__cart');
    var isHidden = true; // Biến để theo dõi trạng thái của box_voucher_cart

    btn_show__vouchercart.addEventListener('click', function(){
        box_voucher_cart.classList.toggle('hidden');
        
        // Thay đổi nội dung của button dựa vào trạng thái của box_voucher_cart
        if (isHidden) {
            btn_show__vouchercart.innerHTML = 'Mã giảm giá <i class="fa-solid fa-chevron-up"></i>';
        } else {
            btn_show__vouchercart.innerHTML = 'Mã giảm giá <i class="fa-solid fa-chevron-down"></i>';
        }

        // Đảo ngược trạng thái
        isHidden = !isHidden;
    });
}

showmore_voucher();

$(document).ready(function () {
    $(".order-priceTitle").delegate(".quantity-plus", 'click', function (e) {
        e.preventDefault();
        let q = $(this).siblings(".quantity").val();
        let p = $(this).siblings(".quantity").attr("Unit-price");
        let newQ = Number(q) + 1;
        let newCost = newQ * p;
        let newTotal = newCost.toLocaleString();
        $(this).siblings(".quantity").val(newQ);
        $('.order_quantity').val(newQ);
        $(this).parent().parent().siblings('.total-blk').find('.total-price').html(newTotal);
    })

    $(".order-priceTitle").delegate(".quantity-minus", 'click', function (e) {
        e.preventDefault();
        let q = $(this).siblings(".quantity").val();
        let p = $(this).siblings(".quantity").attr("Unit-price");
        if (q > 1) {
            let newQ = Number(q) - 1;
            let newCost = newQ * p;
            let newTotal = newCost.toLocaleString();
            $(this).siblings(".quantity").val(newQ);
            $('.order_quantity').val(newQ);
            $(this).parent().parent().siblings('.total-blk').find('.total-price').html(newTotal);
        }
    })
    $(".order-priceTitle").delegate(".quantity", 'keyup change', function (e) {
        e.preventDefault();
        let q = $(this).val();
        let p = $(this).attr("Unit-price");
        if (q > 0) {
            let newQ = Number(q);
            let newCost = newQ * p;
            $('.order_quantity').val(newQ);
            $(this).parent().parent().siblings(".total-blk").find(".total-price").html(newCost.toLocaleString());
        } else {
            //$(this).val(null);
            $('.order_quantity').val(0);
            $(this).parent().parent().siblings(".total-blk").find(".total-price").html(' ');
        }
    });
    $(".checkOut").on("click", function (e) {
        e.preventDefault();
        $oq = $(".order_quantity").val();
        if ($oq == 0) {
            $('.success-box').hide();
            $('.alert-box').hide();
            $('.quantity-box').show();
            setTimeout(function () {
                $('.quantity-box').fadeOut();
            }, 3000);
        } else {
            $("#modalContainer").show()
        };
    });
    $(".close").on("click", function () {
        $("#modalContainer").hide();
    });

});

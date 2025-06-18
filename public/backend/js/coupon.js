$(document).ready(function() {
    $(".useCoupon").click(function() {
        if (confirm("쿠폰을 사용하시겠습니까?")) {
            $.ajax({
                url : "coupon.asp",
                data : {
                    "mode" : "usecoupon",
                    "seq" : $(this).attr("seq")
                },
                dataType:"JSON",
                success :function(result) {
                    alert(result.message);
                    location.reload();
                },
                error : function(xhr) {

                }
            });
        }
    });
});
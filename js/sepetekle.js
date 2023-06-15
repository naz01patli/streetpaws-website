$(document).ready(function(){
    $(".addToCartBtn").click(function(){
       var url="http://localhost/projeödevi/hizmetlerimiz.php";
       var data={
        p:"addToCart",
        product_id: $(this).attr("product-id")
       }

       $.post(url, data, function(response){
        $(".toplam").text(response);
       })
    })


    $(".removeFromCartBtn").click(function(){
        var url="http://localhost/projeödevi/hizmetlerimiz.php";
        var data={
         p:"removeFromCart",
         product_id: $(this).attr("product-id")
        }
 
        $.post(url, data, function(response){
         window.location.reload();
        })
     })


});

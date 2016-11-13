function add_to_cart(product_id)
{
    var postData={
        product_id	:product_id,
        quantity		:1,
        ajax		    :1,
        add_to_cart	:1,
    }
    $.ajax({
        type: 'POST',
        data: postData,
        url: 'common_functions.php',
        success: function(result){
            var res = result.split("_");
            console.log(res);
            $('#item_count').html(res[0]);
            $('#item_total').html(res[1]);
        }
    });
}
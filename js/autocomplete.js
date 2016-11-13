var MIN_LENGTH = 1;
$( document ).ready(function() {
    $("#keyword").keyup(function() {
        var keyword = $("#keyword").val();
        if (keyword.length >= MIN_LENGTH) {
            $.get( "autocomplete.php", { keyword: keyword } )
                .done(function( data ) {
                    var obj = data.split(',');
                    $('.search_suggestions').html('');
                    for(var i in obj)
                    {
                        console.log("My id is " + obj[i] + ".");
                        $('.search_suggestions').append('<li onclick="fillseach(&#39;'+obj[i]+'&#39;)">'+obj[i]+'</li>');
                    }

                });
        }
    });

});
function fillseach(searchvalue) {
    $('#keyword').val(searchvalue);
    $('.search_suggestions').html('')
}
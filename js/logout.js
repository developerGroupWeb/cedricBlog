$(function(){

    $(document).on('click', '.sing-out', function(e){
        e.preventDefault();

        var url = $(this).attr('href');
        window.location.href = url;
        //alert('logout')
    });
});
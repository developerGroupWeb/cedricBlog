$(function(){

    $(document).on('submit', '#formSingin', function (e) {
        e.preventDefault();

        $.ajax({
            url: 'Utils/checkSingIn.php',
            type: 'POST',
            dataType: 'json',
            cache: false,
            data:$(this).serialize(),
            async :true,
            beforeSend: function () {
                //$('.process').html('En cours de traitement ....').show();
            },
            success: function (data) {

                if(data.email){

                    $('.error-email').html(data.email).show();
                    $('.process, .error-pass').hide();

                }else if(data.pass){

                    $('.error-pass').html(data.pass).show();
                    $('.process, .error-email').hide();

                }else if(data.success){

                    window.location = 'mon-espace.php';
                }

            }

        });

    });
});
$(function(){

    var error_first_name = false, error_email = false, error_last_name = false, error_password = false;

    function alertMessage(id, errorClass, text) {

        return $(id).next(errorClass).html(text).show();
    }

    $(document).on('keyup', '#first_name', function () {

        var first_name = $(this).val();
        var filter = /^[a-zA-Zéèêëíìîïñóòôöõúùûüýÿæ -]+$/i;

        if(first_name === ''){

            alertMessage(this, '.error-first_name', 'Taper votre  prénom');
            error_first_name = false;

        }else if(!first_name.match(filter)){

            alertMessage(this, '.error-first_name', 'Caractères non autorisé');
            error_first_name = false;

        }else if(first_name.length < 6){

            alertMessage(this, '.error-first_name', 'Taper 6 caractères au moins');
            error_first_name = false;

        }else{

            $('.error-first_name').hide();
            error_first_name = true;
        }
    });

    $(document).on('keyup', '#last_name', function () {

        var last_name = $(this).val();
        var filter = /^[a-zA-Zéèêëíìîïñóòôöõúùûüýÿæ -]+$/i;

        if(last_name === ''){

            alertMessage(this, '.error-last_name', 'Taper votre  nom');
            error_last_name = false;

        }else if(!last_name.match(filter)){

            alertMessage(this, '.error-last_name', 'Caractères non autorisé');
            error_last_name = false;

        }else if(last_name.length < 6){

            alertMessage(this, '.error-last_name', 'Taper 6 caractères au moins');
            error_last_name = false;

        }else{

            $('.error-last_name').hide();
            error_last_name = true;
        }
    });



    $(document).on('keyup', '#email', function () {

        var email = $(this).val();
        var filter = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;

        if(email === ''){

            alertMessage(this, '.error-email', 'Entrer votre e-mail');
            error_email = false;
        }else if(!email.match(filter)){

            alertMessage(this, '.error-email', 'Votre e-mail est incorrect');
            error_email = false;
        }else{

            $('.error-email').hide();
            error_email = true;
        }
    });

    $(document).on('keyup', '#password', function () {

        var password = $(this).val();
        if(password === ''){

            alertMessage(this, '.error-password', 'Taper votre mot de passe');
            error_password = false;

        }else if( password.length < 8){

            alertMessage(this, '.error-password', 'Taper 8 caractères au moins');
            error_password = false;
        }else{

            $('.error-password').hide();
            error_password = true;
        }
    });


    $(document).on('submit', '#formSubmit', function () {
        var form = $(this);
        var name =  form.find('#first_name').val();
        var email = form.find('#email').val();
        var phone = form.find('#last_name').val();
        var message = form.find('#password').val();


        if (error_first_name === false || error_email === false || error_last_name === false || error_password === false) {

            if (name === '') {

                $('.error-first_name').html('Ce champs est obligatoire').show();
            }

            if (email === '') {
                $('.error-email').html('Ce champs est obligatoire').show();
            }
            if (phone === '') {
                $('.error-last_name').html('Ce champs est obligatoire').show();
            }
            if (message === '') {
                $('.error-password').html('Ce champs est obligatoire').show();
            }

            return false;
        }else{

            $.ajax({
                url: 'Utils/insertUser.php',
                type: 'POST',
                dataType: 'json',
                data:$(this).serialize(),
                async :true,
                beforeSend: function () {
                    //$('.process').html('En cours de traitement ....').show();
                },
                success: function (data) {

                   if(data.errors){

                       $('.alert-danger').html(data.errors).show();
                       $('.alert-info').hide();

                    }else if(data.success){

                       $('.alert-info').html(data.success).show();
                       $('.alert-danger').hide();
                       $('#first_name').add(' #email, #password, #last_name').val('');
                   }

                }

            });
            return false;
        }
    });
    //alert('test');
});
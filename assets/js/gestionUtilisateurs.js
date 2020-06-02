$(function() {


    $(document).on('click', '#gestion_users-btn_ajout', function() {
        $.ajax({
            method: 'post',
            url: '../controller/formUser.php',
            success: function(html) {
                $('#gestion_users-window_cover').html(html);
                $('#gestion_users-window_cover').css({"display":"flex"});
            }
        })
    })

    $(document).on('click', '.vignette_user-btn_modif', function() {
        $.ajax({
            method: 'post',
            url: '../controller/formUser.php',
            data: 'id_user='+$(this).prev().val(),
            success: function(html) {
                $('#gestion_users-window_cover').html(html);
                $('#gestion_users-window_cover').css({"display":"flex"});
            }
        })
    })

    $(document).on('click', '#form_modif_user-btn_valid', function() {
        var idUser = $('#form_modif_user').attr('id_user');
        var nameUser = $('#form_modif_user-name input').val();
        var surnameUser = $('#form_modif_user-surname input').val();
        var usernameUser = $('#form_modif_user-username input').val();
        var passwordUser = $('#form_modif_user-password input').val();
        var mailUser = $('#form_modif_user-mail input').val();
        var adminUser = $('#form_modif_user-admin input').prop('checked');
        var pictureUser = $('#form_modif_user-picture input')[0].files[0];
        var picturePath = pictureUser.name;
        $.ajax({
            method: 'post',
            url: '../controller/ajoutUser.php',
            data: 'id='+idUser+'&name='+nameUser+'&surname='+surnameUser+'&username='+usernameUser+'&password='+passwordUser+'&mail='+mailUser+'&admin='+adminUser+'&path='+picturePath,
            success: function(html) {
                
            }
        })
        var fd = new FormData();
        fd.append('picture',pictureUser);

        $.ajax({
            url: '../controller/uploadPicture.php',
            type: 'post',
            data: fd,
            contentType: false,
            processData: false,
            success: function(html) {
                window.location.href = 'gestionUtilisateurs.php';
            }
        });
    })

    $(document).on('click', '#form_modif_user-btn_annul', function() {
        $('#gestion_users-window_cover').css({'display':'none'});
        $('#gestion_users-window_cover').html('');
    })

    
    $(document).on('click', '.vignette_user-btn_suppr', function() {
        $.ajax({
            method: 'post',
            url: '../view/confirmSuppressionView.php',
            data: 'id_user='+$(this).prev().prev().val(),
            success: function(html) {
                $('#gestion_users-window_cover').html(html);
                $('#gestion_users-window_cover').css({"display":"flex"});
            }
        })
    })

    $(document).on('click', '#container_confirm_suppr-valider', function() {
        var idUser = $(this).attr('id_user')
        $.ajax({
            method: 'post',
            url: 'deleteUser.php',
            data: 'id_user='+idUser,
            success: function() {
                $('#gestion_users-window_cover').css({"display":"none"});
                $('#gestion_users-window_cover').html('');
                window.location.href = 'gestionUtilisateurs.php';
            }
        })
    })

    $(document).on('click', '#container_confirm_suppr-annuler', function() {
        $('#gestion_users-window_cover').css({"display":"none"});
        $('#gestion_users-window_cover').html('');
    })

    $(document).mouseup(function (e) {
        var popupSuppression = $('#container_confirm_suppr');
        var popupModif = $('#form_modif_user');
        if ((!popupSuppression.is(e.target) && popupSuppression.has(e.target).length === 0) && (!popupModif.is(e.target) && popupModif.has(e.target).length === 0)) {
            $('#gestion_users-window_cover').css({'display':'none'});
            $('#gestion_users-window_cover').html('');
        }
    });
})
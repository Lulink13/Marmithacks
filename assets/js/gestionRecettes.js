$(function() {
/*
    $(document).on('click', '#vignette_user-btn_modif', function() {
        window.location.href = "../controller/formRecette.php?id_recette=1";
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
*/

    $(document).on('click', '#vignette_user-btn_suppr', function() {
        $.ajax({
            method: 'post',
            url: '../view/confirmRecetteSuppressionView.php',
            data: 'id='+$(this).parent().attr('id_recette'),
            success: function(html) {
                $('#gestion_recettes-window_cover').html(html);
                $('#gestion_recettes-window_cover').css({"display":"flex"});
            }
        })
    })

    $(document).on('click', '#container_confirm_suppr-valider', function() {
        var idRecette = $(this).attr('id_recette')
        $.ajax({
            method: 'post',
            url: 'deleteRecette.php',
            data: 'id_recette='+idRecette,
            success: function() {
                $('#gestion_recettes-window_cover').css({"display":"none"});
                $('#gestion_recettes-window_cover').html('');
                window.location.href = 'gestionRecettes.php';
            }
        })
    })

    $(document).on('click', '#vignette_user-btn_valid', function() {
        $.ajax({
            method: 'post',
            url: '../view/confirmValidationRecetteView.php',
            data: 'id='+$(this).parent().attr('id_recette'),
            success: function(html) {
                $('#gestion_recettes-window_cover').html(html);
                $('#gestion_recettes-window_cover').css({"display":"flex"});
            }
        })
    })

    $(document).on('click', '#container_confirm_valid-valider', function() {
        var idRecette = $(this).attr('id_recette')
        $.ajax({
            method: 'post',
            url: 'validRecette.php',
            data: 'id_recette='+idRecette,
            success: function(html) {
                $('#gestion_recettes-window_cover').css({"display":"none"});
                $('#gestion_recettes-window_cover').html('');
                window.location.href = 'gestionRecettes.php';
            }
        })
    })

    $(document).on('click', '#container_confirm_suppr-annuler, #container_confirm_valid-annuler', function() {
        $('#gestion_recettes-window_cover').css({"display":"none"});
        $('#gestion_recettes-window_cover').html('');
    })

    $(document).mouseup(function (e) {
        var popupSuppression = $('#container_confirm_suppr');
        var popupValidation = $('#container_confirm_valid');
        if ((!popupSuppression.is(e.target) && popupSuppression.has(e.target).length === 0) && (!popupValidation.is(e.target) && popupValidation.has(e.target).length === 0)) {
            $('#gestion_recettes-window_cover').css({'display':'none'});
            $('#gestion_recettes-window_cover').html('');
        }
    });
})
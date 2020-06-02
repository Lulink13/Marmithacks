$(function() {
    $(document).on('click', '#vignette_user-btn_suppr', function() {
        console.log('allo')
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
                window.location.href = 'gestionMesRecettes.php';
            }
        })
    })

    $(document).on('click', '#container_confirm_suppr-annuler', function() {
        $('#gestion_recettes-window_cover').css({"display":"none"});
        $('#gestion_recettes-window_cover').html('');
    })

    $(document).mouseup(function (e) {
        var popupSuppression = $('#container_confirm_suppr');
        if (!popupSuppression.is(e.target) && popupSuppression.has(e.target).length === 0) {
            $('#gestion_recettes-window_cover').css({'display':'none'});
            $('#gestion_recettes-window_cover').html('');
        }
    });
})
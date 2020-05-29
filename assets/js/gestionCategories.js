$(function() {


    $(document).on('click', '#gestion_categories-btn_ajout', function() {
        $.ajax({
            method: 'post',
            url: '../controller/formCategory.php',
            success: function(html) {
                $('#gestion_categories-window_cover').html(html);
                $('#gestion_categories-window_cover').css({"display":"flex"});
            }
        })
    })

    $(document).on('click', '#vignette_category-btn_modif', function() {
        $.ajax({
            method: 'post',
            url: '../controller/formCategory.php',
            data: 'id_category='+$(this).parent().attr('id_category'),
            success: function(html) {
                $('#gestion_categories-window_cover').html(html);
                $('#gestion_categories-window_cover').css({"display":"flex"});
            }
        })
    })

    $(document).on('click', '#form_modif_category-btn_valid', function() {
        var idCategory = $('#form_modif_category').attr('id_category');
        var nameCategory = $('#form_modif_category-name input').val();
        $.ajax({
            method: 'post',
            url: '../controller/ajoutCategory.php',
            data: 'id='+idCategory+'&name='+nameCategory,
            success: function(html) {
                
            }
        })
        var fd = new FormData();
        //fd.append('file',pictureUser);

        
        window.location.href = 'gestionCategories.php';
    })

    $(document).on('click', '#form_modif_category-btn_annul', function() {
        $('#gestion_categories-window_cover').css({'display':'none'});
        $('#gestion_categories-window_cover').html('');
    })

    
    $(document).on('click', '#vignette_category-btn_suppr', function() {
        $.ajax({
            method: 'post',
            url: '../view/confirmCategorySuppressionView.php',
            data: 'id_category='+$(this).parent().attr('id_category'),
            success: function(html) {
                $('#gestion_categories-window_cover').html(html);
                $('#gestion_categories-window_cover').css({"display":"flex"});
            }
        })
    })

    $(document).on('click', '#container_confirm_suppr_category-valider', function() {
        var idCategory = $(this).attr('id_category')
        $.ajax({
            method: 'post',
            url: 'deleteCategory.php',
            data: 'id_category='+idCategory,
            success: function() {
                $('#gestion_categories-window_cover').css({"display":"none"});
                $('#gestion_categories-window_cover').html('');
                window.location.href = 'gestionCategories.php';
            }
        })
    })

    $(document).on('click', '#container_confirm_suppr_category-annuler', function() {
        $('#gestion_categories-window_cover').css({"display":"none"});
        $('#gestion_categories-window_cover').html('');
    })

    $(document).mouseup(function (e) {
        var popupSuppression = $('#container_confirm_category_suppr');
        var popupModif = $('#form_modif_category');
        if ((!popupSuppression.is(e.target) && popupSuppression.has(e.target).length === 0) && (!popupModif.is(e.target) && popupModif.has(e.target).length === 0)) {
            $('#gestion_categories-window_cover').css({'display':'none'});
            $('#gestion_categories-window_cover').html('');
        }
    });
})
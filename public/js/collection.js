// add-collection-widget.js
jQuery(document).ready(function () {

    var removeButton = $('<button type="button" data-action="delete" class="btn btn-dark ms-2 removeItem"><i class="fa-solid fa-trash"></i></button></div>');
    console.log($('input[id*="pictureFile_file"]'));
    $('input[id*="pictureFile_file"]').wrap('<div class="d-flex">');
    $('input[id*="pictureFile_file"]').parent().append(removeButton);
    $('button[data-action="delete"]').click(function() {
        $(this).parent().parent().parent().parent().parent().remove();
    });

    $('.vich-image a:last-child').addClass('btn btn-primary btn-sm text-white');
    $('.vich-image a:last-child').text('Télécharger');
    $('label[for*="pictureFile_delete"]').text('Supprimer ?');
    $('.form-check').addClass('mt-3');

    jQuery('.add-another-collection-widget').click(function (e) {
        var removeButton = $('<button type="button" data-action="delete" class="btn btn-dark ms-2 mb-3 removeItem"><i class="fa-solid fa-trash"></i></button>');
        var list = jQuery(jQuery(this).attr('data-list-selector'));
        // Try to find the counter of the list or use the length of the list
        var counter = list.data('widget-counter') || list.children().length;

        // grab the prototype template
        var newWidget = list.attr('data-prototype');
        // replace the "__name__" used in the id and name of the prototype
        // with a number that's unique to your emails
        // end name attribute looks like name="contact[emails][2]"
        newWidget = newWidget.replace(/__name__/g, counter);
        // Increase the counter
        counter++;
        // And store it, the length cannot be used if deleting widgets is allowed
        list.data('widget-counter', counter);
        
        // create a new list element and add it to the list
        var newElem = jQuery($(this).siblings().attr('data-widget-tags')).html(newWidget);
        newElem.append(removeButton);
        $(this).siblings().append(newElem);
        newElem.appendTo(list);

        $('button[data-action="delete"]').click(function() {
            $(this).parent().remove();
            //alert('test');
        });
    });
});
    $(".fancybox").fancybox({padding: 0});

    if ($('li.project').length > 1) {
        $('li.project:gt(0)').hide();
        $('.fa-ellipsis-v').show();
    };

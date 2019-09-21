function footer() {
    var footer = '.mdl-mini-footer';
    if ($('.portfolio-max-width').height() < $(window).height()-300 ) {
        $(footer).addClass('portfolio-footer');
    } else {
        $(footer).removeClass('portfolio-footer');
    }
}

$(document).ready(footer);
$(window).on('resize', footer );




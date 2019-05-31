$(document).ready(function () {
    $.ajax({
        url: '/../application/models/nav_additional_services.php',
        method: 'post',
        success: 
            function(incoming){
                $addittionalServicesTitle = JSON.parse(incoming).forEach(element => {
                    $Title = element.Title;
                    $id = element.id;
                    $('.nav__menu_additionalServices + ul').append('<li><span class="nav__menu_additional" id="' + $id + '">' + $Title + '</span></li>');
                });
            }
    });
});
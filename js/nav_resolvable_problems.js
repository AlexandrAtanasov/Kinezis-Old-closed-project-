$(document).ready(function () {
    $.ajax({
        url: '/../application/models/nav_resolvable_problems.php',
        success: 
            function(incoming){
                $problemTitle = JSON.parse(incoming).forEach(element => {
                    $Title = element.Title;
                    $id = element.id;
                    $('.nav__menu_activities + ul').append('<li><span class="nav__menu_problems" id="' + $id + '">' + $Title + '</span></li>');
                });
            }
    });
});
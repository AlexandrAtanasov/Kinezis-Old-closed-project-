$(document).ready(function() {
    $(".overlay__content_form_elem").submit(
        function() {
            var userName = $(".form__input_field_name").val();
            var userNumber = $(".form__input_field_number").val();
            if ( (userName == '') || (userNumber == ''))
            {
                alert("Пожалуйста, заполните все поля, чтобы мы могли Вам перезвонить");
                return false;
            } else {
                var thisForm = this;
                var fdata = $(this).serialize();
                $.ajax({  
                    method: "POST",
                    url: "/sendform", 
                    data: fdata,
                }).done(function(data) {  
                        alert(data );
                        thisForm.reset();
                }).fail(function() {
                    alert('Ошибка заполнения данных');
                }); 
                // });
                    // }).done(function() {
                    //     thisForm.reset();
                // success: function() {  
                // error: function() {
                return false;
            };
        }
    );
})
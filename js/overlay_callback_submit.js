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
                    type: "POST",
                    url: "../php/callback/mailCall.php", 
                    data: fdata, 
                    success: function() {  
                        alert("Мы скоро Вам перезвоним!");
                    },
                    error: function() {
                        alert('Ошибка заполнения данных');
                    } 
                }).done(function() {
                    thisForm.reset();
                });
                return false;
            }
        }
    )
})
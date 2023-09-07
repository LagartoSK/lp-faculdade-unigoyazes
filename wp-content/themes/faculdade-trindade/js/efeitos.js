$(function(){
    $(".at-registration_efeito").each( function(){
        let btnFlipped = $(this).find(".btn-main_options");
        let btnVoltar = $(this).find(".btn-voltar");
        let box = $(this).find(".at-registration_box");

        btnFlipped.click(function(){
            box.addClass("flipped");
        });
        btnVoltar.click(function(){
            box.removeClass("flipped");
        });


    })


});
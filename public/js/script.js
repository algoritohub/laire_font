// LOADER
window.onload = function(){
    document.getElementById('loads').style.display = "block";
    setTimeout(function() {
    document.getElementById('carregando').style.display = "none";
    }, 2000);
}

// MASCOTE
window.onload = function(){
    document.getElementById('pagina').style.display = "block";
    setTimeout(function() {
    document.getElementById('mascote').style.display = "show";
    }, 200000);
}

$(document).ready(function(){
    $("#exit_alert, #model_alert").click(function(event){
        event.preventDefault();
        $("#model_alert").fadeOut();
    });
});

// MASCOTE
$(document).ready(function(){
    $("#avatar_anime").click(function(event){
        event.preventDefault();
        $("#anime").fadeIn();
        $("#avatar_anime").hide();
    });
});

// MODALDOÊNCIA 1
$(document).ready(function(){
    $("#modal1").click(function(event){
        event.preventDefault();
        $(".modal_doenca").fadeIn();
    });
});

$(document).ready(function(){
    $("#modal_laire").click(function(event){
        event.preventDefault();
        $(".modal_laire").fadeOut();
    });
});

// MODAL ADD CONTEÚDO
$(document).ready(function(){
    $("#btn_novo").click(function(event){
        event.preventDefault();
        $(".modal_add_conteudo").fadeIn();
    });
});

$(document).ready(function(){
    $("#fechar_modal_add").click(function(event){
        event.preventDefault();
        $(".modal_add_conteudo").fadeOut();
    });
});

// ADD NOVO PESQUISADOR
$(document).ready(function(){
    $("#btn_pesquisador").click(function(event){
        event.preventDefault();
        $(".modal_add_pesquisador").fadeIn();
    });
});

$(document).ready(function(){
    $("#fechar_modal_pesq").click(function(event){
        event.preventDefault();
        $(".modal_add_pesquisador").fadeOut();
    });
});


// ADD NOVA DOENÇA
$(document).ready(function(){
    $("#btn_doenca").click(function(event){
        event.preventDefault();
        $(".modal_add_doenca").fadeIn();
    });
});

$(document).ready(function(){
    $("#fechar_modal_doenca").click(function(event){
        event.preventDefault();
        $(".modal_add_doenca").fadeOut();
    });
});


// MODAL CONFIG 1
$(document).ready(function(){
    $("#bt_conf1").click(function(event){
        event.preventDefault();
        $(".modal_config1").fadeIn();
    });
});

$(document).ready(function(){
    $("#fechar_modal_config1").click(function(event){
        event.preventDefault();
        $(".modal_config1").fadeOut();
    });
});

// DPOC
$(document).ready(function(){
    $("#DPOC").mouseover(function(event){
        event.preventDefault();
        $("#blue").fadeIn();
    });
});

// DPOC
$(document).ready(function(){
    $("#blue").mouseout(function(event){
        event.preventDefault();
        $("#blue").fadeOut();
    });
});




$(document).ready(function(){
    $("#asma").mouseover(function(event){
        event.preventDefault();
        $("#yellow").fadeIn();
    });
});

$(document).ready(function(){
    $("#yellow").mouseout(function(event){
        event.preventDefault();
        $("#yellow").fadeOut();
    });
});




$(document).ready(function(){
    $("#asma").mouseover(function(event){
        event.preventDefault();
        $("#purple").fadeIn();
    });
});

$(document).ready(function(){
    $("#purple").mouseout(function(event){
        event.preventDefault();
        $("#purple").fadeOut();
    });
});





$(document).ready(function(){
    $("#fibrose").mouseover(function(event){
        event.preventDefault();
        $("#purple").fadeIn();
    });
});

$(document).ready(function(){
    $("#purple").mouseout(function(event){
        event.preventDefault();
        $("#purple").fadeOut();
    });
});


// EDITAR IMAGEM

$(document).ready(function(){
    $("#edit_imagens").click(function(event){
        event.preventDefault();
        $("#mini_model_edit_img").fadeIn();
    });
});

$(document).ready(function(){
    $("#fechar_mini_modal_img").click(function(event){
        event.preventDefault();
        $("#mini_model_edit_img").fadeOut();
    });
});

// EDITAR IMAGEM

$(document).ready(function(){
    $("#edit_imagem_content").click(function(event){
        event.preventDefault();
        $("#mini_model_edit_content_img").fadeIn();
    });
});

$(document).ready(function(){
    $("#fechar_mini_model_edit_content_img").click(function(event){
        event.preventDefault();
        $("#mini_model_edit_content_img").fadeOut();
    });
});

// POSTAGEM BLOG
$(document).ready(function(){
    $("#btn_novo_post").click(function(event){
        event.preventDefault();
        $(".modal_add_conteudo_blog").fadeIn();
    });
});

$(document).ready(function(){
    $("#fechar_modal_add_blog").click(function(event){
        event.preventDefault();
        $(".modal_add_conteudo_blog").fadeOut();
    });
});

// NOVOS PARÁGRAFOS
$(document).ready(function(){
    $("#but_add_par1").click(function(event){
        event.preventDefault();
        $("#paragrafo2").fadeIn();
        $("#but_add_par1").fadeOut();
    });
});

$(document).ready(function(){
    $("#but_add_par2").click(function(event){
        event.preventDefault();
        $("#paragrafo3").fadeIn();
        $("#but_add_par2").fadeOut();
    });
});

$(document).ready(function(){
    $("#but_add_par3").click(function(event){
        event.preventDefault();
        $("#paragrafo4").fadeIn();
        $("#but_add_par3").fadeOut();
    });
});

$(document).ready(function(){
    $("#but_add_par4").click(function(event){
        event.preventDefault();
        $("#paragrafo5").fadeIn();
        $("#but_add_par4").fadeOut();
    });
});


// CONTEUDO INGLÊS
$(document).ready(function(){
    $("#bt_eng").click(function(event){
        event.preventDefault();
        $("#campos_eng").fadeIn();
        $("#campos_pt").hide();
    });
});

$(document).ready(function(){
    $("#bt_pt").click(function(event){
        event.preventDefault();
        $("#campos_pt").fadeIn();
        $("#campos_eng").hide();
    });
});

// CONTEUDO INGLÊS EDIT
$(document).ready(function(){
    $("#bt_eng_edt").click(function(event){
        event.preventDefault();
        $("#campos_edit_eng").fadeIn();
        $("#campos_edit_pt").hide();
    });
});

$(document).ready(function(){
    $("#bt_pt_edt").click(function(event){
        event.preventDefault();
        $("#campos_edit_pt").fadeIn();
        $("#campos_edit_eng").hide();
    });
});


// NOVOS PARAGRAFOS EM INGLÊS
$(document).ready(function(){
    $("#but_add_par_eng_1").click(function(event){
        event.preventDefault();
        $("#paragrafo_eng_2").fadeIn();
        $("#but_add_par_eng_1").fadeOut();
    });
});

$(document).ready(function(){
    $("#but_add_par_eng_2").click(function(event){
        event.preventDefault();
        $("#paragrafo_eng_3").fadeIn();
        $("#but_add_par_eng_2").fadeOut();
    });
});

$(document).ready(function(){
    $("#but_add_par_eng_3").click(function(event){
        event.preventDefault();
        $("#paragrafo_eng_4").fadeIn();
        $("#but_add_par_eng_3").fadeOut();
    });
});

$(document).ready(function(){
    $("#but_add_par_eng_4").click(function(event){
        event.preventDefault();
        $("#paragrafo_eng_5").fadeIn();
        $("#but_add_par_eng_4").fadeOut();
    });
});


// MENU / PESQUISA RESPIRA
$(document).ready(function(){
    $("#busca_search").click(function(event){
        event.preventDefault();
        $("#mosc").toggle('500');
        $("#menu_prime").toggle('500');
    });
});

// MENU / PESQUISA RESPIRA
$(document).ready(function(){
    $("#busca_blog_out").click(function(event){
        event.preventDefault();
        $("#box_blog_menu").toggle();
        $("#box_blog_busca").toggle();
    });
});

// MENU / PESQUISA LAIRE
$(document).ready(function(){
    $("#busca_search_lai_in").click(function(event){
        event.preventDefault();
        $("#busca_search_lai_out").show();
        $("#busca_lai").fadeIn();
        $("#busca_search_lai_in").hide();
        $("#menu_lai").hide();
    });
});

$(document).ready(function(){
    $("#busca_search_lai_out").click(function(event){
        event.preventDefault();
        $("#busca_search_lai_in").show();
        $("#menu_lai").fadeIn();
        $("#busca_search_lai_out").hide();
        $("#busca_lai").hide();
    });
});


// DOENÇAS

// ASMA
$(document).ready(function(){
    $("#audios").click(function(event){
        event.preventDefault();
        $("#box_audio").fadeIn();
        $("#box_libra").hide();
    });
});

$(document).ready(function(){
    $("#libras").click(function(event){
        event.preventDefault();
        $("#box_libra").fadeIn();
        $("#box_audio").hide();
    });
});

// FIBROSE CÍSTICA
$(document).ready(function(){
    $("#audios1").click(function(event){
        event.preventDefault();
        $("#box_audio1").fadeIn();
        $("#box_libra1").hide();
    });
});

$(document).ready(function(){
    $("#libras1").click(function(event){
        event.preventDefault();
        $("#box_libra1").fadeIn();
        $("#box_audio1").hide();
    });
});

// DPOC
$(document).ready(function(){
    $("#audios2").click(function(event){
        event.preventDefault();
        $("#box_audio2").fadeIn();
        $("#box_libra2").hide();
    });
});

$(document).ready(function(){
    $("#libras2").click(function(event){
        event.preventDefault();
        $("#box_libra2").fadeIn();
        $("#box_audio2").hide();
    });
});

// BRONQUIECTASIA
$(document).ready(function(){
    $("#audios3").click(function(event){
        event.preventDefault();
        $("#box_audio3").fadeIn();
        $("#box_libra3").hide();
    });
});

$(document).ready(function(){
    $("#libras3").click(function(event){
        event.preventDefault();
        $("#box_libra3").fadeIn();
        $("#box_audio3").hide();
    });
});

// fibrose pulmonar
$(document).ready(function(){
    $("#audios4").click(function(event){
        event.preventDefault();
        $("#box_audio4").fadeIn();
        $("#box_libra4").hide();
    });
});

$(document).ready(function(){
    $("#libras4").click(function(event){
        event.preventDefault();
        $("#box_libra4").fadeIn();
        $("#box_audio4").hide();
    });
});
//SINUSITE
$(document).ready(function(){
    $("#audios5").click(function(event){
        event.preventDefault();
        $("#box_audio5").fadeIn();
        $("#box_libra5").hide();
    });
});

$(document).ready(function(){
    $("#libras5").click(function(event){
        event.preventDefault();
        $("#box_libra5").fadeIn();
        $("#box_audio5").hide();
    });
});
//HIPERTENSÃO PULMONAR
$(document).ready(function(){
    $("#audios6").click(function(event){
        event.preventDefault();
        $("#box_audio6").fadeIn();
        $("#box_libra6").hide();
    });
});

$(document).ready(function(){
    $("#libras6").click(function(event){
        event.preventDefault();
        $("#box_libra6").fadeIn();
        $("#box_audio6").hide();
    });

});
//SINDROME PÓS-COVID 19
$(document).ready(function(){
    $("#audios7").click(function(event){
        event.preventDefault();
        $("#box_audio7").fadeIn();
        $("#box_libra7").hide();
    });
});

$(document).ready(function(){
    $("#libras7").click(function(event){
        event.preventDefault();
        $("#box_libra7").fadeIn();
        $("#box_audio7").hide();
    });

});

// MOBILE MENU
$(document).ready(function(){
    $("#cronicas_doencas").click(function(event){
        event.preventDefault();
        $("#menu_cronicas_doencas").fadeIn();
        $("#menu_agudas_doencas").hide();
        $("#menu_principal").hide();
    });
});

$(document).ready(function(){
    $("#cronicas_agudas").click(function(event){
        event.preventDefault();
        $("#menu_agudas_doencas").fadeIn();
        $("#menu_cronicas_doencas").hide();
        $("#menu_principal").hide();
    });
});

$(document).ready(function(){
    $("#voltar_menu").click(function(event){
        event.preventDefault();
        $("#menu_principal").fadeIn();
        $("#menu_cronicas_doencas").hide();
        $("#menu_agudas_doencas").hide();
    });
});

$(document).ready(function(){
    $("#voltar_menu1").click(function(event){
        event.preventDefault();
        $("#menu_principal").fadeIn();
        $("#menu_cronicas_doencas").hide();
        $("#menu_agudas_doencas").hide();
    });
});

$(document).ready(function(){
    $("#busca_mobile").click(function(event){
        event.preventDefault();
        $("#busca_mobile_menu").toggle('500');
        $("#menu_principal").toggle('500');
    });
});

$(document).ready(function(){
    $("#busca_mobile1").click(function(event){
        event.preventDefault();
        $("#busca_mobile_menu").toggle();
        $("#menu_principal").toggle();
    });
});
$(function () {
    $('nav.mobile').click(function () {
        var listaMenu = $('nav.mobile ul');
        /*
        if(listaMenu.is(':hidden') == true){
            listaMenu.fadeIn();
        }else{
            listaMenu.fadeOut();
        }
        */

        /*
         if(listaMenu.is(':hidden') == true){
             listaMenu.css('display', 'block');
         }else{
             listaMenu.css('display', 'none');
         }
         */
        if (listaMenu.is(':hidden') == true) {
            var icone = $('.botao-menu-mobile').find('i');
            icone.removeClass('fa-bars');
            icone.addClass('fa-times');
            listaMenu.slideToggle();
        } else {
            var icone = $('.botao-menu-mobile').find('i');
            icone.removeClass('fa-times');
            icone.addClass('fa-bars');
            listaMenu.slideToggle();
        }


    });

    if ($('target').length > 0) {
        var elemento = '#' + $('target').attr('target');
        var divScroll = $(elemento).offset().top;
        $('html,body').animate({ 'scrollTop': divScroll }, 2000);

    }
    dynamicLoad();
    function dynamicLoad() {
        $('[realtime]').click(function(){
			var pagina = $(this).attr('realtime');
			$('.container-principal').hide();
			$('.container-principal').load(include_path+'pages/'+pagina+'.php');
			
			setTimeout(function(){
				initialize();
				addMarker(-27.609959,-48.576585,'',"Minha casa",undefined,false);

			},1000);

			$('.container-principal').fadeIn(1000);
			window.history.pushState('', '',contato);

			return false;
        })
    }
})
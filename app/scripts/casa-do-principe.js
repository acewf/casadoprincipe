////Author:Pedro Martins
////Contact:ace.wf.home@gmail.com
////Date: 05/05/2015
////Company:euro-m.pt
//////////////  AREAS DE JOGO  /////////////////////////
define(['casadoprincipe'], function(appmenu) {
	'use strict';
    //Uses extras in here.
    function APPmodule(){
        this.init = function(){
            $('.sub-menu .suite').html('');
            $('.room-choose').html('');
            $('.logo').addClass('small');
            $('ul.suite').addClass('menupos');
            $('#logo-big').removeClass('show');
            $('#logo-small').addClass('show');
            $('.fotorama').fotorama();


            var mcontent;
            function completeloadContent(ev){
                $('.sub-menu .suite').html(mcontent.data);
                $('.sub-menu .suite li a').click(function(){
                    var href = $(this).attr('href');
                    var datarooms = $(this).attr('data-rooms');
                    event.preventDefault();
                    var n = href.indexOf(event.target.origin);
                    var res = href.substring(n+event.target.origin.length+1, href.length);
                    console.log(res);
                    window.history.pushState("object or string", "Title", "/"+res);
                    var mcontent 
                    function completeloadContent(ev){
                        var totalChild = $('.sub-menu .suite li');
                        console.log('HTML LOADED:');
                        var elem =  $('.page-content');
                        var msnode = elem[0].parentNode;
                        var pageC = $('.page-content');
                        if (pageC)
                        pageC.remove();
                        try{
                            $(msnode).append(mcontent.data);
                        }catch(err) {
                            console.log(err.message);
                        }
                        
                    } 
                    function loadContent(endereco){
                        mcontent = new loader('../includes/'+endereco+'.php?');
                        mcontent.addEventListener('complete',completeloadContent);
                    }
                    var m = new loader('../includes/address-filter-output.php?url='+res);
                    function completeload(ev){
                        loadContent(m.data);
                        m.removeEventListener('complete',completeload);
                        m = null;
                    }        
                    m.addEventListener('complete',completeload);
                });
            }
            mcontent = new loader('includes/menu/menu-facilities-services.php');
            mcontent.addEventListener('complete',completeloadContent);            
        }
    }
    var appmodule= new APPmodule();
    return appmodule;
});
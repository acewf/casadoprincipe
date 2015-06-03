////Author:Pedro Martins
////Contact:ace.wf.home@gmail.com
////Date: 05/05/2015
////Company:euro-m.pt
//////////////  AREAS DE JOGO  /////////////////////////
define(['apphome'], function(apphome) {
    'use strict';
    //Uses extras in here.
    console.log('APP HOME DEFINED**');

    function APPhome(){
    	this.init = function(){
            $('.sub-menu .suite').html('');
    		$('#logo-big').addClass('show');
    		$('#logo-small').removeClass('show');
            $('ul.room-choose').addClass('show-childs');
            $('ul.suite').removeClass('menupos');
            /*
            function loadContent(){
                var href = $(this).attr('href');
                event.preventDefault();
                var n = href.indexOf(window.location.origin);
                var res = href.substring(n+window.location.origin.length+1, href.length);
                window.history.pushState("object or string", "Title", "/"+res);
                
                var mcontent 
                function completeloadContent(ev){
                    $('.sub-menu .suite').html('');
                    $('.page-content').html(mcontent.data);
                } 
                function loadContent(endereco){
                    console.log('URL>>',endereco);
                    mcontent = new loader('includes/'+endereco+'.php?');
                    mcontent.addEventListener('complete',completeloadContent);
                }

                var m = new loader('includes/address-filter-output.php?url='+res);
                function completeload(ev){
                    console.log('event completed',ev);

                    loadContent(m.data);
                    m.removeEventListener('complete',completeload);
                    m = null;
                }        
                m.addEventListener('complete',completeload);
            }
            */


            //$('.logo a').click(loadContent);    
    	}
    }

    var apphome = new APPhome();
    return apphome;
});
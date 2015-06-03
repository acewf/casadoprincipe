////Author:Pedro Martins
////Contact:ace.wf.home@gmail.com
////Date: 05/05/2015
////Company:euro-m.pt
//////////////  AREAS DE JOGO  /////////////////////////
define(['appmenu'], function(appmenu) {
    'use strict';
    //Uses extras in here.

    console.log('app-menu-top CAN start run');

    function loadContent(){
        var href = $(this).attr('href');
        event.preventDefault();
        var n = href.indexOf(window.location.origin);
        var res = href.substring(n+window.location.origin.length+1, href.length);
        window.history.pushState("object or string", "Title", "/"+res);

        console.log('Evento>>>>',event);
        app.toggleMenu(event);
        
        var mcontent 
        function completeloadContent(ev){
             var elem =  $('.page-content');
            var msnode = elem[0].parentNode;
            if (elem)
            elem.remove();
            try{
                $(msnode).append(mcontent.data);
            }catch(err) {
                console.log(err.message);
            }
        } 
        function loadContent(endereco){
            console.log('URL>>',endereco);
            mcontent = new loader('includes/'+endereco+'.php?');
            mcontent.addEventListener('complete',completeloadContent);
        }

        var m = new loader('includes/address-filter-output.php?url='+res);
        function completeload(ev){
            console.log('event completed',ev);
            var data = JSON.parse(m.data);
            loadContent(data.path);
            m.removeEventListener('complete',completeload);
            m = null;
        }        
        m.addEventListener('complete',completeload);
    }
    function loadhomeContent(){
        $('.logo').removeClass('small');
        $('#logo-big').addClass('show');
        $('#logo-small').removeClass('show');
        $('ul.room-choose').removeClass('show-childs');

        var el = $('#menu-options');

        var href = $(this).attr('href');
        event.preventDefault();
        var n = href.indexOf(window.location.origin);
        var res = href.substring(n+window.location.origin.length+1, href.length);
        window.history.pushState("object or string", "Title", "/"+res);

        $('.sub-menu .suite').html('');
        $('.sub-menu .room-choose').html('');
        
        var mcontent 
        function completeloadContent(ev){
            $('.sub-menu .suite').html('');
            $('.page-content').html(mcontent.data);
        } 
        function loadContent(endereco){
            mcontent = new loader('includes/'+endereco+'.php?');
            mcontent.addEventListener('complete',completeloadContent);
        }

        var m = new loader('includes/address-filter-output.php?url='+res);
        function completeload(ev){
            var data = JSON.parse(m.data);
            console.log('event completed',data.path);
            loadContent(data.path);
            m.removeEventListener('complete',completeload);
            m = null;
        }        
        m.addEventListener('complete',completeload);
    }    
    $('.choose-menu a').click(loadContent);
    $('.logo a').click(loadhomeContent);


    var app;
    var AppEngine = function(){
        //var instance = this;
        this.init = function(){
            console.log('AQUI ARRRANCA APP ENGINE MENU');
        }
        this.btmenu =  document.getElementById('open-menu');
        this.btlang =  document.getElementById('open-lang');
        this.addEvents();
    };
    AppEngine.prototype.addEventListener = function(a,b){
      this[a] = b;
    };
    AppEngine.prototype.removeEventListener = function(a){
      this[a] = null;
    };
    AppEngine.prototype.dispatchEvent = function(event){
     var callFunctionOn = this[event.type];
      if(callFunctionOn!==undefined){
        if (!event.preventDefault) {
          event.preventDefault = function() {
          event.returnValue = false;
          };
        }
        try{
          callFunctionOn(event);
        }
        catch(err){
          console.log('Error:',err);
        }
      } else {
        console.log('the '+event.type+' listener doesn´t exist');
      }     
    };
    AppEngine.prototype.addEvents = function(){
        var d = document.getElementsByClassName('close');
        for (var i = 0; i < d.length; i++) {
            d[i].addEventListener('click', this.closeMenu, false);
        }
        this.btmenu.addEventListener('click', this.toggleMenu, false);
        this.btlang.addEventListener('click',this.toggleLanguage, false);

        var previous = document.getElementsByClassName('previous')[0];
        var next = document.getElementsByClassName('next')[0];
        if (previous!==undefined) {
            previous.addEventListener('click', this.photogPrev, false);
        }
        if (next!==undefined) {
            next.addEventListener('click', this.photogoNext, false);
        }
    };
    AppEngine.prototype.photogoNext = function(){
        var d = document.getElementsByClassName('fotorama__arr--next')[0];
        if (d!==undefined) {
            var eventD = new Event('mousedown');
            d.dispatchEvent(eventD);
        }
    };
    AppEngine.prototype.photogPrev = function(){
        var d = document.getElementsByClassName('fotorama__arr--prev')[0];
        var eventD = new Event('mousedown');
        d.dispatchEvent(eventD);
    };
    AppEngine.prototype.toggleMenu = function(event){
        var target = event.target;
        event.preventDefault();
        var el = $('#menu-options');
        var isOpen = parseFloat(el[0].getAttribute('data-open'));
        console.log('toggle Menu',this,isOpen);
        if (isOpen) {
            el[0].setAttribute('data-open',0);
            el.fadeOut();
        } else {
            el[0].setAttribute('data-open',1);
            el.fadeIn();
        }
    };
    AppEngine.prototype.toggleLanguage = function(event){
        var target = event.target;
        if(event.preventDefault) {
            event.preventDefault();
        } else {
            event.returnValue = false;
        }
        var isOpen = parseFloat(target.getAttribute('data-open'));
        var el = $('#language-options');
        if (isOpen) {
            el[0].setAttribute('data-open',0);
            el.fadeOut();
        } else {
            el[0].setAttribute('data-open',1);
            el.fadeIn();
        }
    };
    AppEngine.prototype.closeMenu = function(event){
        var target = event.target;
        var parent =  target.parentNode;
        if(parent.id==='menu-options'){
            //app.btmenu.setAttribute("attrib-open",1);
            //app.btmenu.dispatchEvent(eventD);
            document.getElementById('open-menu').setAttribute('data-open',0);
            $(parent).fadeOut();            
        } else {
            //app.btlang.setAttribute("attrib-open",1);
            //triggerEvent(app.btmenu,'click');
            //app.btlang.dispatchEvent(eventD);
            document.getElementById('open-lang').setAttribute('data-open',0);
            $(parent.parentNode).fadeOut();            
        }
    };
    AppEngine.prototype.closeLang = function(){

    };
    app = new AppEngine();

    return app;
});

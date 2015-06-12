////Author:Pedro Martins
////Contact:ace.wf.home@gmail.com
////Date: 05/05/2015
////Company:euro-m.pt
//////////////  AREAS DE JOGO  /////////////////////////
var htmlEvents = {// list of real events
    //<body> and <frameset> Events
    onload:1,
    onunload:1,
    //Form Events
    onblur:1,
    onchange:1,
    onfocus:1,
    onreset:1,
    onselect:1,
    onsubmit:1,
    //Image Events
    onabort:1,
    //Keyboard Events
    onkeydown:1,
    onkeypress:1,
    onkeyup:1,
    //Mouse Events
    onclick:1,
    ondblclick:1,
    onmousedown:1,
    onmousemove:1,
    onmouseout:1,
    onmouseover:1,
    onmouseup:1
}
define(['appmenu'], function(appmenu) {
    'use strict';
    //Uses extras in here.
    var app;

    $(".share-logo").click(function(){
        if ($('.share-elements').hasClass('hide')) {
            $('.share-elements').removeClass('hide');
        } else {
            $('.share-elements').addClass('hide');
        }
    });

    $('footer').click(function(){
        var m = $(".share-logo");
        var l = $(event.target);
        if ( (m[0]!==l[0]) && (!$('.share-elements').hasClass('hide'))) {
            if(l[0].className!='share-elements'){
                $('.share-elements').addClass('hide');
            }
        }
    });

    function loadhomeContent(){
        $('.logo').removeClass('small');
        $('#logo-big').addClass('show');
        $('#logo-small').removeClass('show');
        $('ul.room-choose').removeClass('show-childs');
        $('.sub-menu .suite').html('');
        $('.sub-menu .room-choose').html('');

        var loadhome = new ContentLoader();
        loadhome.click(this);
    }
    var handler = new ContentLoader();
    $('.choose-menu ul a').click(function(){
        app.toggleMenu(event);
        handler.click(this);
    });
    $('.logo a').click(loadhomeContent);
    $('#menu-options').click(function(){
        app.forcecloseMenuRooms();
    });
    window.addEventListener('popstate', function(event) {
        //window.location.href;   
        var submenu;
        var menucontent;
        var pagecontent;
        function completeloadSubMenu(ev){
            $('ul.room-choose').html(submenu.data);
            var handler = new ContentLoader();
            $('ul.room-choose li a').click(function(){
                handler.click(this);
            });
        }
        function completeloadContent(ev){
            $('.sub-menu .suite').html(menucontent.data);
        }
        var href = window.location.href;
        var n = href.indexOf(window.location.origin);
        var res = href.substring(n+window.location.origin.length+1, href.length);
        var filestourl = new Loader(window.location.origin+'/includes/address-filter-output.php?url='+res);
        function Subcompleteload(ev){
            var data = JSON.parse(filestourl.data);
            if (data.level!=null) {
                submenu = new Loader(window.location.origin+'/includes/submenu/'+data.level+'.php?');
                submenu.addEventListener('complete',completeloadSubMenu);
                filestourl.removeEventListener('complete',Subcompleteload);
                filestourl = null;
            }
            console.log(data);
            menucontent = new Loader(window.location.origin+'/includes/submenu/sub-menu-rooms.php');
            menucontent.addEventListener('complete',completeloadContent);
                        
            pagecontent = new ContentLoader();
            pagecontent.addEventListener('complete',completeloadContent);
            pagecontent.loadAllContent(data.path);
            pagecontent.loadAHeader(data.headfile);
            
           
        }        
        filestourl.addEventListener('complete',Subcompleteload);
    })
    
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
        var d = $('#menu-options .close');//document.getElementsByClassName('close');
        for (var i = 0; i < d.length; i++) {
            d[i].addEventListener('click', this.closeMenu, false);
        }
         var d = $('#language-options .close');//document.getElementsByClassName('close');
        for (var i = 0; i < d.length; i++) {
            d[i].addEventListener('click', this.closeMenu, false);
        }
        this.btmenu.addEventListener('click', this.toggleMenu, false);
        this.btlang.addEventListener('click',this.toggleLanguage, false);
    };
    AppEngine.prototype.addFotoramEvents = function(){
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
        console.log('@photogoNext-photogoNext');
        if (d!==undefined) {
            var eventD = new Event('mousedown');
            d.dispatchEvent(eventD);
            return;
            /*
             var evt;
             console.log('@photogoNext-#-#');
            var eventName = 'mousedown';
            var ms = $(d);
            console.log(ms)
            ms.trigger(eventName);
            ms.trigger('mouseup');            
            //var eventD = new Event('mousedown');
            //d.dispatchEvent(evt);
            //$('.fotorama').show('>');
            */
        }
    };
    AppEngine.prototype.photogPrev = function(){
        console.log('@photogPrev-photogPrev');
        var d = document.getElementsByClassName('fotorama__arr--prev')[0];
        if (d!==undefined) {
            var eventD = new Event('mousedown');
            d.dispatchEvent(eventD);
            return;
        }
        /*
        var evt; 
        var eventName = 'mousedown';

        if(document.createEvent){
            evt = document.createEvent('HTMLEvents');
            evt.initEvent(eventName,true,true);
        }else if(document.createEventObject){// IE < 9
            event = document.createEventObject();
            event.eventType = eventName;
        }
        event.eventName = eventName;
        //var eventD = new Event('mousedown');
        //d.dispatchEvent(evt);
        */
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
    AppEngine.prototype.forcecloseMenuRooms = function(event){
        document.getElementById('menu-options').setAttribute('data-open',0);
            $("#menu-options").fadeOut(); 
    }
    AppEngine.prototype.closeMenu = function(event){
        var target = event.target;
        var parent =  target.parentNode;
        if(parent.id==='menu-options'){
            //app.btmenu.setAttribute("attrib-open",1);
            //app.btmenu.dispatchEvent(eventD);
            document.getElementById('menu-options').setAttribute('data-open',0);
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

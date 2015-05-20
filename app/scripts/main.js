////Author:Pedro Martins
////Contact:ace.wf.home@gmail.com
////Date: 05/05/2015
////Company:euro-m.pt
//////////////  AREAS DE JOGO  /////////////////////////
var app;
var AppEngine = function(){
    var instance = this;
    console.log('ENGINE START')
    this.btmenu =  document.getElementById("open-menu");
    this.btlang =  document.getElementById("open-lang");
    this.addEvents();
    this.photogoNext();
}
AppEngine.prototype.addEvents = function(){
    var d = document.getElementsByClassName('close');
    for (var i = 0; i < d.length; i++) {
        d[i].addEventListener("click", this.closeMenu, false);
    };
    this.btmenu.addEventListener("click", this.toggleMenu, false);
    this.btlang.addEventListener("click",this.toggleLanguage, false);

    var previous = document.getElementsByClassName('previous')[0];
    var next = document.getElementsByClassName('next')[0];
    previous.addEventListener("click", this.photogPrev, false);
    next.addEventListener("click", this.photogoNext, false);
}
AppEngine.prototype.photogoNext = function(event){
    var d = document.getElementsByClassName('fotorama__arr--next')[0];
    var eventD = new Event('mousedown');
    console.log('GO NEXT',d);
    d.dispatchEvent(eventD);
}
AppEngine.prototype.photogPrev = function(event){
    var d = document.getElementsByClassName('fotorama__arr--prev')[0];
    var eventD = new Event('mousedown');
    console.log('GO NEXT',d);
    d.dispatchEvent(eventD);
}
AppEngine.prototype.toggleMenu = function(event){
    var target = event.target;
    event.preventDefault();
    var isOpen = parseFloat(target.getAttribute("attrib-open"));
    var el = $('#menu-options');
    if (isOpen) {
        target.setAttribute("attrib-open",0);
        el.fadeOut();
    } else {
        target.setAttribute("attrib-open",1);
        el.fadeIn();
    }
}
AppEngine.prototype.toggleLanguage = function(event){
    var target = event.target;
    if(event.preventDefault) {
        event.preventDefault();
    } else {
        event.returnValue = false;
    }
    
     var isOpen = parseFloat(target.getAttribute("attrib-open"));
    var el = $('#language-options');
    if (isOpen) {
        target.setAttribute("attrib-open",0);
        el.fadeOut();
    } else {
        target.setAttribute("attrib-open",1);
        el.fadeIn();
    }
    console.log(target)
}
AppEngine.prototype.closeMenu = function(event){
    var target = event.target;
    var parent =  target.parentNode;
    var el = $(parent);
    var mousedownEvent;
    if (event.initMouseEvent) {     // all browsers except IE before version 9
        mousedownEvent = document.createEvent ("MouseEvent");
        mousedownEvent.initMouseEvent ("click", true, true, window, 0, 
                                    event.screenX, event.screenY, event.clientX, event.clientY, 
                                    event.ctrlKey, event.altKey, event.shiftKey, event.metaKey, 
                                    0, null);
        //event.target.dispatchEvent (mousedownEvent);
    } else {
        if (document.createEventObject) {   // IE before version 9
            mousedownEvent = document.createEventObject (window.event);
            mousedownEvent.button = 1;  // left button is down
            //event.srcElement.fireEvent ("onmousedown", mousedownEvent);
        }
    }
    var eventD = mousedownEvent;
    /// var eventD = new MouseEvent('click', {'view': window,'bubbles': true,'cancelable': true});
    //var eventD = new Event('click');
    //var eventD = document.createEvent('click');


    if (!event.initMouseEvent){
            console.log(this);
            console.log(eventD)
            console.log(event,app);
        } else {
            console.log('initMouseEvent');
        }

    if(parent.id=='menu-options'){
        
        //triggerEvent(app.btmenu,'click');
        //app.btmenu.setAttribute("attrib-open",1);
        //app.btmenu.dispatchEvent(eventD);
    } else {
        app.btlang.setAttribute("attrib-open",1);
        triggerEvent(app.btmenu,'click');
        //app.btlang.dispatchEvent(eventD);
    }
}
AppEngine.prototype.closeLang = function(event){

}


$(function() {
    'use strict';
    app = new AppEngine();
    /*
    var container = $('[data-resource-container');
    // Get all resources
    $.ajax('/api/resource.php', { dataType: 'json' })
    .done(function(data) {
        data.resources.forEach(function(resource) {

            var div = $('<div>').appendTo(container)
                .append('<h4>' + resource.name + '</h4>');

            // Get resource descriptions
            $.ajax(resource.href, { dataType: 'json' })
            .done(function(resourceData) {
                div.append('<p>' + resourceData.description + '</p>');
            })
            .fail(function(jqXHR) {
                var data;
                try {
                    data = $.parseJSON(jqXHR.responseText);
                }
                catch (e) {
                    data = {
                        description: 'Server is unreachable'
                    };
                }
                container.append('<div class="alert alert-danger">' + data.description + '</div>');
            });
        });
    })
    .fail(function(jqXHR) {
        var data;
        try {
            data = $.parseJSON(jqXHR.responseText);
        }
        catch (e) {
            data = {
                description: 'Server is unreachable'
            };
        }
        container.append('<div class="alert alert-danger">' + data.description + '</div>');
    });
    */

});

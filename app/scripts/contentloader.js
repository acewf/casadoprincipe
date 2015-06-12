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
};
function ContentLoader(res){
    'use strict';
    //Uses extras in here.
    var instance = this;
    this.data = null;
    Object.defineProperties(this, {
        defaultType: {
            value: "realtime",
            writable: true
        },
        load: {
            value: function(type) {
              console.log(type);
            },
            enumerable: true
        }
    });
    $.LoadingOverlaySetup({
         color           : "rgba(255, 255, 255, 0.8)",
         image           : window.location.origin+"/images/loading.gif",
         maxSize         : "100px",
         minSize         : "20px",
         resizeInterval  : 0,
         size            : "50%"
    });
    this.loaded = function(data){  
        var evt = new Event('complete');
        this.dispatchEvent(evt);
    }
    this.loadAllContent = function(endereco){
        var maddress = window.location.origin+'/includes/'+endereco+'.php?';
        $(".main").LoadingOverlay("show");
        $.ajax({
            cache: false,
            url: maddress,
            success: function(data) {
                var newDiv = $("<div>");
                $(newDiv).html(data).imagesLoaded().then(function(){
                    var pageC = $('.page-content');
                    var msnode = pageC[0].parentNode;                        
                    if (pageC)
                    pageC.remove();
                    try{
                        $(msnode).append(newDiv[0].innerHTML);
                        $(".main").LoadingOverlay("hide", true);
                        instance.loaded(null);
                    }catch(err) {
                        console.log(err.message);
                    }            
                    $('.fotorama').fotorama();
                });
            }
        });
    }
    this.loadAHeader= function(endereco){
        var maddress = window.location.origin+'/includes/head/'+endereco+'.php?';
        $.ajax({
            cache: false,
            url: maddress,
            success: function(data) {
                $('head title').remove();
                $('head meta').remove();
                $('head').append(data);
            }
        });
    }
    this.complete = function(){
        console.log('complete load');
    }
    this.click = function(scope){
        var href = $(scope).attr('href');
        var datarooms = $(this).attr('data-rooms');
        event.preventDefault();
        var n = href.indexOf(window.location.origin);
        var res = href.substring(n+window.location.origin.length+1, href.length);
        window.history.pushState("object or string", "Page Title", "/"+res);
        var mcontent;
        var m = new Loader(window.location.origin+'/includes/address-filter-output.php?url='+res);
        function completeload(ev){
            var data = JSON.parse(m.data);
            //loadContent(data.path);
            instance.loadAllContent(data.path);
            //instance.addEventListener('complete',instance.complete);
            instance.loadAHeader(data.headfile);
            m.removeEventListener('complete',completeload);
            m = null;
        }        
        m.addEventListener('complete',completeload);
    }
};

ContentLoader.prototype.addEventListener =function(a,b){
  'use strict';
    if(this.addEventListener){
        this[a] = b;
        //this.addEventListener(a,b,false);
    }else if(this.attachEvent && htmlEvents['on'+a]){// IE < 9
        this.attachEvent('on'+a,b);
    }else{
        this['on'+a]=b;
    }
    //this[a] = b;
};
ContentLoader.prototype.removeEventListener = function(a,b){
    'use strict';
  this[a] = null;
  b = null;
};
ContentLoader.prototype.dispatchEvent = function(eventName){
    'use strict';
    var event;
    if(document.createEvent){
        event = document.createEvent('HTMLEvents');
        event.initEvent(eventName,true,true);
    }else if(document.createEventObject){// IE < 9
        event = document.createEventObject();
        event.eventType = eventName;
    } else {
    }
    event.eventName = eventName;
    if(this.dispatchEvent){
        var callFunctionOn = this[event.eventName];
        if (!(typeof description === 'function')) {
            return;
        };
        try{
          callFunctionOn(event);
        }
        catch(err){
          console.log('Error:',err);
        }
        //this.dispatchEvent(event);
    }else if(this.fireEvent && htmlEvents['on'+eventName]){// IE < 9
        this.fireEvent('on'+event.eventType,event);// can trigger only real event (e.g. 'click')
    }else if(this[eventName]){
        this[eventName]();
    }else if(el['on'+eventName]){
        this['on'+eventName]();
    }    
};
function contentloader(res){
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
    this.loaded = function(data){  
        
    }
    this.click = function(scope){
        var href = $(scope).attr('href');
        console.log(this,'HREF:',href);
        var datarooms = $(this).attr('data-rooms');
        event.preventDefault();
        var n = href.indexOf(window.location.origin);
        var res = href.substring(n+window.location.origin.length+1, href.length);
        console.log(res);
        window.history.pushState("object or string", "Title", "/"+res);
        var mcontent 
        function completeloadContent(ev){
            //var totalChild = $('.sub-menu .suite li');
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
            mcontent = new loader(window.location.origin+'/includes/'+endereco+'.php?');
            mcontent.addEventListener('complete',completeloadContent);
        }
        var m = new loader(window.location.origin+'/includes/address-filter-output.php?url='+res);
        function completeload(ev){
            var data = JSON.parse(m.data);
            loadContent(data.path);
            m.removeEventListener('complete',completeload);
            m = null;
        }        
        m.addEventListener('complete',completeload);
    }
};

contentloader.prototype.addEventListener = function(a,b){
  'use strict';
  this[a] = b;
};
contentloader.prototype.removeEventListener = function(a,b){
    'use strict';
  this[a] = null;
  b = null;
};
contentloader.prototype.dispatchEvent = function(event){
    'use strict';
    var callFunctionOn = this[event.type];
    if(callFunctionOn!=undefined){
        if (!event.preventDefault) {
            event.preventDefault = function() {
            event.returnValue = false;
        };
    }
    try{
      callFunctionOn(event);
    }
    catch(err){
      console.log("Error:",err);
    }
  } else {
    console.log("the "+event.type+" listener doesn´t exist");
  }       
};
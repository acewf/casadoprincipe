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

function Loader(res){
    'use strict';
    //Uses extras in here.
    Object.defineProperties(this, {
        defaultType: {
            value: 'realtime',
            writable: true
        },
        load: {
            value: function(type) {
              console.log(type);
            },
            enumerable: true
        },
        data: {
            value:null,
            writable: true,
            enumerable: true
        },
        instance:{
            value:this,
            writable:false
        }
    });
    this.data =null;
    var instance = this.instance;
    this.loaded = function(data){
        //console.log('LOADED:>:',instance,this);
        if (instance) {
            instance.handler(data);
        }
    };
    this.client = new XMLHttpRequest();
    this.client.onload = this.loaded;
    this.client.open('GET',res);
    this.client.send();
}
Loader.prototype.processData = function(data){
    'use strict';
    var evt = new Event('complete');
    /*
    var eventName = 'complete';
    if(document.createEvent){
        evt = document.createEvent(htmlEvents);
        evt.initEvent(eventName,true,true);
    }else if(document.createEventObject){// IE < 9
        event = document.createEventObject();
        event.eventType = eventName;
    }
    event.eventName = eventName;
    */
    this.data = data.target.responseText;
    this.dispatchEvent(evt);
};
Loader.prototype.handler = function(data){
    'use strict';
    this.processData(data);
};

Loader.prototype.addEventListener = function(a,b){
  'use strict';
  this[a] = b;
};
Loader.prototype.removeEventListener = function(a,b){
    'use strict';
  this[a] = null;
  b = null;
};
Loader.prototype.dispatchEvent = function(event){
    'use strict';
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
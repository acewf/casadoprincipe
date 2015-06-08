function loader(res){
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
        },
        instance:{
            value:this,
            writable:false
        }
    });

    this.loaded = function(data){
        //console.log('LOADED:>:',instance,this);
        if (instance) {
            instance.handler(data);
        };
        
    }

    this.client = new XMLHttpRequest();
    this.client.onload = this.loaded;
    this.client.open("GET",res);
    this.client.send();
};
loader.prototype.processData = function(data){
    'use strict';
    var evt = new Event('complete');
    this.data = data.target.responseText;
    this.dispatchEvent(evt);
};
loader.prototype.handler = function(data){
    'use strict';
    this.processData(data);
};

loader.prototype.addEventListener = function(a,b){
  'use strict';
  this[a] = b;
};
loader.prototype.removeEventListener = function(a,b){
    'use strict';
  this[a] = null;
  b = null;
};
loader.prototype.dispatchEvent = function(event){
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
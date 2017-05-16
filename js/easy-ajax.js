var ajax = {
  MODE_READ:0,
  MODE_WRITE:1,
  MODE_REWRITE:2,
  curMode:0,
  output:null, 
  setOutput:function(ajaxOutput,mode){
    try {
      if (ajaxOutput.innerHTML != undefined){
        this.output = ajaxOutput;
        this.curMode = mode;
        return true;
      }
    } catch(e){
      throw "Output has to be DOM element."
      return false;
    }
  },
  xmlHttp:window.ActiveXObject?new ActiveXObject("Microsoft.XMLHTTP"):new XMLHttpRequest(),
  getData:function(ajaxUrl){
    if (xmlHttp){
      if (this.xmlHttp.readyState == 0 || this.xmlHttp.readyState == 4){ 
        this.xmlHttp.open("GET", ajaxUrl, true);
				this.xmlHttp.onreadystatechange = ajaxLoader;
				this.xmlHttp.send(null);
				return this.xmlHttp;
      } else {
        this.getData(ajaxUrl);
      }
    } else {
      throw "Your browser doesn't support Ajax.";
      return false;
    }
  },
  postData:function(ajaxUrl,ajaxParam){
    if (this.xmlHttp){
      if (this.xmlHttp.readyState == 0 || this.xmlHttp.readyState == 4){
        this.xmlHttp.open("POST", ajaxUrl, true);
				this.xmlHttp.onreadystatechange = this.ajaxLoader;
				this.xmlHttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
				this.xmlHttp.setRequestHeader("Content-length", ajaxParam.length);
				this.xmlHttp.setRequestHeader("Connection", "close"); 
				this.xmlHttp.send(ajaxParam);
				return this.xmlHttp;
      } else {
        this.postData(ajaxUrl,ajaxParam);
      }
    } else {
      throw "Your browser doesn't support Ajax.";
    }
  }
  ,
  ajaxLoader:function(){
    if(this.readyState == 4){
			if (this.status == 200 || this.status == 0){
			  if (ajax.output != null && ajax.output != undefined){
          if (ajax.curMode==ajax.MODE_WRITE){
            ajax.output.innerHTML += this.responseText;
          } else if (this.curMode==this.MODE_REWRITE){
            ajax.output.innerHTML = this.responseText;
          } 
        }
			} else {
				throw "Wrong status: "+this.status;
			}
		} 
  }
}
function Unloader(){
    var o = this;
    this.unload = function(evt){
        var message = "Вы действительно хотите уйти со страницы?";
        if (typeof evt == "undefined") {
            evt = window.event;
        }
        if (evt) {
            evt.returnValue = message;
        }
        return message;
    }
 
}
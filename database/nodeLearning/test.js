const EventEmitter = require("events");
const emitter = new EventEmitter();
function call(arg){
    console.log("called");
    console.log(arg.url)
}

const obj = {

    id :1,
    url: "google"
}
emitter.on("messageLogged",call(obj) );
emitter.emit("messageLogged",obj);
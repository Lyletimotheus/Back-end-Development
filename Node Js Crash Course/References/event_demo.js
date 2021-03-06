const EventEmitter = require('events');

// Class
class MyEmitter extends EventEmitter {

}

// Initialize object
const myEmitter = new MyEmitter();

// Event Listener
myEmitter.on('event', () => {console.log('Event Fired!')});

// Init event
myEmitter.emit('event');
const os = require('os');

// Info about current user
const user = os.userInfo();
console.log(user);

// Uptime of the system - in seconds
console.log(`The system uptime is ${os.uptime} seconds.`);

// Data about the system
const currentOS = {
    name: os.type(),
    release: os.release(),
    totalMem: os.totalmem(),
    freeMem: os.freemem()
}
console.log(currentOS);


// const address = os.networkInterfaces();
// console.log(address);
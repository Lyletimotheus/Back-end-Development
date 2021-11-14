const Logger = require('./logger');
const path = require('path');
const os = require('os');
const fs = require('fs');
const EventEmitter = require('events');
const http = require('http');

const server = http.createServer((req, res) => {
    if(req.url === '/') {
        res.write('Hello World');
        res.end();
    }

    if(req.url === '/api/courses') {
        res.write(JSON.stringify([1,2,3]));
        res.end();
    }
});

// server.on('connection', (socker) => {
//     console.log('New connection');
// })
server.listen(3000);

console.log('Listening on port 3000')


const logger = new Logger();

// Register a listener
logger.on('messageLogged', (e) => {
    console.log('Listener called', e);
})

logger.log('message');

// let files = fs.readdirSync('./');
// console.log(files);

// let filesAsync = fs.readdir('./', (err, files) => {
//     if(err) console.log('Error', err);
//     else console.log('Result', files);
// });
// console.log(filesAsync);

// let totalMemory = os.totalmem();
// let freeMemory = os.freemem();

// console.log(`Total memory: ${totalMemory}`);
// console.log(`Free memory: ${freeMemory}`);

// let pathObj = path.parse(__filename); // Gives us the path object with the root, dir, base, ext, name
// console.log(pathObj);

// console.log(logger);
// log('message');
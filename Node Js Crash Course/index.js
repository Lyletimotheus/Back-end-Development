// Requiring the Person Object
// const Person = require('./person');
// const Logger = require('./logger');

// const person1 = new Person('Lyle', 53);
// person1.greeting();

// const logger = new Logger();
// logger.on('message', (data) => console.log('Called Listener:',data));
// logger.log('Hello World');

const http = require('http');
const path = require('path');
const fs = require('fs');
const { ENOENT } = require('constants');

const server = http.createServer((req, res) =>{
    // ***************** This is an efficient method when writing code for the server or creating API's *********

    // if(req.url === '/') {
    //     fs.readFile(path.join(__dirname, 'public', 'index.html'), (err, content) => {
    //         if(err) throw err;
    //         res.writeHead(200, {'Content-Type' : 'text/html'});
    //         // Embed HTML into the response
    //         res.end(content);
    //     });
    // }
    // if(req.url === '/api/users') {
    //     // This will act as our db/json file 
    //     const users = [
    //         { name: 'Bob Smith', age:40},
    //         { name: 'Jack Jones', age:10}
    //     ];
    //     res.writeHead(200, {'Content-Type' : 'application/json'});
    //     res.end(JSON.stringify(users));
    // }

    // ******************** The more efficient method *******************************
    
    // Build file path
    let filePath = path.join(__dirname, 'public', req.url === '/' ? 'index.html' : req.url);
    // Extension of file
    let extname = path.extname(filePath);
    // // Set Initial content type
    let contentType = 'text/html';

    // // Check ext type and set content type
    switch(extname) {
        case '.js':
            contentType = 'text/javascript';
            break;
        case '.css':
            contentType = 'text/css';
            break;
        case '.json':
            contentType = 'application/json';
            break;
        case '.png':
            contentType = 'image/png';
            break;
        case '.jpg':
            contentType = 'image/jpg';
            break;
    }

    // // Read file
    fs.readFile(filePath, (err, content) => {
        if(err) {
            if(err.code == 'ENOENT'){
                // Page not found
                fs.readFile(path.join(__dirname, 'public','404.html'), (err, content) =>{
                    res.writeHead(200, {'Content-Type' : 'text/html'});
                    res.end(content, 'utf8');
                })
            } else {
                // Some server error
                res.writeHead(500);
                res.end(`Server Error: ${err.code}`);
            }
        }else {
            // Successful response
            res.writeHead(200, {'Content-Type' : contentType});
            console.log(filePath);
            res.end(content, 'utf8');
        }
    });
});

// Port Number
const PORT = process.env.PORT || 5000;
server.listen(PORT, () => console.log(`Server running on port ${PORT}`));
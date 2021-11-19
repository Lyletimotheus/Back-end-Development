# Node JS & Express Tutorial
Timestamp: 01:11:15

## Node vs Browser
### Browser
1. DOM
2. Window
3. Insteractive Apps
4. No Filesystem
5. Fragmentation
6. ES6 Modules

### Node.js
1. No DOM - Don't have access to web browser API's
2. No window
3. Server side apps
4. Filesystem
5. Versions
6. CommonJS 

## Modules 
- File with the module we want to import from : module.exports = nameOfModule
- File with the module we are exporting to : const nameOfModule = require('pathOfModule');
- *NB* If you are just importing a file and not explicitly using that module within the app.js file, it will run the code of the imported file.
    - ### Built-in Modules
    - OS
    - PATH
    - FS
    - HTTP
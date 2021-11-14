const fs = require('fs');
const path = require('path');

// ##########################
// ###### Create folder #####
// ##########################
// fs.mkdir(path.join(__dirname, '/test'), {}, err => {
//     if(err) throw err;
//     console.log('Folder created...');
// });

// #####################################
// ###### Create and write to file #####
// #####################################
// If you run two of this at the same time, the second function will override the first one
// fs.writeFile(path.join(__dirname, '/test', 'hello.txt'), 'Hello World', err => {
//     if(err) throw err;
//     console.log('File created and written to...');

//     fs.appendFile(path.join(__dirname, '/test', 'hello.txt'), ' This is a secondary comment from another file.', err => {
//         if(err) throw err;
//         console.log('File created and written to...');
//     });
// });
// Appending the content to a file that already has been created, but it will make sense to put this into the callback function of the writeFile function
// fs.appendFile(path.join(__dirname, '/test', 'hello.txt'), ' This is a secondary comment from another file.', err => {
//     if(err) throw err;
//     console.log('File created and written to...');
// });

// ##################################
// ###### Read data from a file #####
// ##################################
// fs.readFile(path.join(__dirname, '/test', 'hello.txt'), 'utf-8', (err, data) => {
//     if(err) throw err;
//     console.log(data);
// }); 

// ##################################
// ###### Rename a file #############
// ##################################
fs.rename(path.join(__dirname, '/test', 'hello.txt'), path.join(__dirname, '/test', 'world.txt'), (err) => {
    if(err) throw err;
    console.log('File renamed!');
}); 
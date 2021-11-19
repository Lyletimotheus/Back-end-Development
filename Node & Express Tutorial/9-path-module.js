const path = require('path');


// Finding out if the system uses / or \ 
const platformSpecificSeparator = path.sep;
console.log(platformSpecificSeparator);

// Joining a sequence of paths
const filePath = path.join('/content/subfolder', 'test.txt');
console.log(filePath);

// Basename of a file 
const baseName = path.basename(filePath);
console.log(baseName);

// Absolute path
const absPath = path.resolve(__dirname, 'content', 'subfolder', 'test.txt');
console.log(absPath);
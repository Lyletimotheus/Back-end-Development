// Local - we don't want to share this with the rest of the application
const secret = 'SUPER SECRET';
// Share this with the rest of the application
const john = 'john';
const peter = 'peter';

console.log(module.exports)
// Exporting the variable
module.exports = {john, peter};

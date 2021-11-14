const url = require('url');

const myUrl = new URL('http://mywebsite.com/hello.html?id=100&status=active');

// Serialized URL - Get the actual URL
console.log(myUrl.href);
console.log(myUrl.toString());

// Host (root domain)
console.log(myUrl.host);

// Host Name (does not show the port number)
console.log(myUrl.hostname);

// Pathname
console.log(myUrl.pathname);

// Serialized query - Gets the query parameters in the URL
console.log(myUrl.search);

// Return query object - Gets the query parameters in the URL
console.log(myUrl.searchParams);

// Add parameters
myUrl.searchParams.append('abc', '123');
console.log(myUrl.searchParams);

// Loop through the parameters
myUrl.searchParams.forEach((value, name) => console.log(`${name} : ${value}`));
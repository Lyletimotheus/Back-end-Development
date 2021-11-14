# Node JS Crash Course
Timestamp: 00:38:16

## What is Node.JS
- JavaScript Runtime (not a language or framework)
- Built on V8 JavaScript engine (same as Google Chrome)
- Written in C++
- Essentially allows us to run JavaScript code on the server

## Node Modules
- Node Core Modules (path, fs,http,etc)
- 3rd party modules/packages installed via NPM
- Custom modules (files)
- Examples:
const path = require('path')
const myFile = require('./myFile)

## Node Commands
- node fileName : will run the file in the terminal

## Node Terminology
- Module Wrapper Function
    (function (exports, require, module, __filename, __dirname){

    })
This wrapper  wraps around our javascript code
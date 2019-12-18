//如何載入自訂模組
// var content = require('./data');
// var a = 1;
// console.log(a);
// console.log(content.title);
// console.log(content.name);

//抓取路徑 //抓取檔名 //分析路徑
// var path = require('path');
// console.log(path.dirname('Backstage/app.js')); //回傳路徑 Backstage
// console.log(path.basename('Backstage/app.js')); //回傳檔名 app.js
// console.log(path.extname('Backstage/app.js')); //回傳副檔名 .js
// console.log(path.parse('Backstage/app.js')); //回傳{ root: '', dir: 'Backstage', base: 'app.js', ext: '.js', name: 'app' }

//如何開啟WEB SERVER
var http = require('http');
http.createServer(function(request, response) {
    // console.log(request);
    console.log(request.url);
    response.writeHead(200, { "Content-Type": "text/plain" });
    response.write('hello');
    response.end();
}).listen(8888);

//載入express模組與其應用
var express = require('express');
console.log(express);
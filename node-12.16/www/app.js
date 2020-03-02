var http = require('http');
http.createServer(function (req, res) {
    res.writeHead(200, {'Content-Type': 'text/html'});
    res.end('<p>Hello This image is served from nginx and text is from node server <br/><br/> <img src="/images/img.png" height="200" /></p>\n');
}).listen(8080, '127.0.0.1');
console.log('Server running at http://127.0.0.1:8080/');
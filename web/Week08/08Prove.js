var http = require('http');

function onRequest(req, res) {
    if (req.url == '/home') {
        res.writeHead(200, {"Content-Type": "text/html"});
        res.write("<h1>Welcome to the Home Page</h1>");
        res.end();
    } else if (req.url == '/getData') {
        res.writeHead(200, {"Content-Type": "application/json"});
        res.end(JSON.stringify({ name: "Robert", class: "CS313" }));
    } else {
        res.writeHead(404, {"Content-Type": "text/html"});
        res.write("Page Not Found");
        res.end();
    }
    console.log("Received a request for: " + req.url);
}

var server = http.createServer(onRequest);
server.listen(8888);

console.log("The server is now listening on port 8888...");
var http = require( "http" );
 
 
var server = http.createServer(
    function( request, response ){
        var origin = (request.headers.origin || "*");
        if (request.method.toUpperCase() === "OPTIONS"){
            response.writeHead(
                "204",
                "No Content",
                {
                    "access-control-allow-origin": origin,
                    "access-control-allow-methods": "GET, POST, PUT, DELETE, OPTIONS",
                    "access-control-allow-headers": "content-type, accept",
                    "access-control-max-age": 10, // Seconds.
                    "content-length": 0
                }
            ); 
           return( response.end() ); 
        }
        var requestBodyBuffer = [];
        request.on(
            "data",
            function( chunk ){
 
                // Build up our buffer. This chunk of data has
                // already been decoded and turned into a string.
                requestBodyBuffer.push( chunk );
 
            }
        );
        request.on(
            "end",
            function(){
                var requestBody = requestBodyBuffer.join( "" );
                var responseBody = (
                    "Thank You For The Cross-Domain AJAX Request:\n\n" +
                    "Method: " + request.method + "\n\n" +
                    requestBody
                );
                response.writeHead(
                    "200",
                    "OK",
                    {
                        "access-control-allow-origin": origin,
                        "content-type": "text/plain",
                        "content-length": responseBody.length
                    }
                );
 
                // Close out the response.
                return( response.end( responseBody ) );
 
            }
        );
 
 
    }
);
 
 
// Bind the server to port 8080.
server.listen( 8080 );
 
 
// Debugging:
console.log( "Node.js listening on port 8080" );
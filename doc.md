##Taskman System

Every request made in and out of the system are redirected to the index.php folder through a .htaccess redirect.

The server class is called in the index.php to handle the incoming request. The server class returns any response after the request has been processed - this response is rendered on the index.php page

The main request handler is the "Request Class" which is called by the Server Class;

The request class retrieves the type of request through the "method" proterty in the Client Class, this determines how the request is handled and the type of value returned

Once the type of request is retrived, the Routes Class is called to check if there are any routes like the one requested for existing on the registered routes retrived through the route class.

The request class loops through the routes available under a particular method and where the url requested matches an existing route, it calls the function attached to the route.

If the route does not exist, the route class returns an error that the requested route does not exist 

...to be completed





# phredux

PHP Routing implementation of Redux's Reducer.

## Run
Please run mongodb on your localhost:27017
```sh
php -S localhost:8080
```

## Architecture

I am trying to generate another more declarative REST API communication type via POST method, the way Redux's Reducer did.
By sending an action-type so instead of finding the right route, it finds the matching action ```type```.
It makes us as a developer easier to communicate to each other, especially between a frontend and a backend developer.
A backend developer must provide a list of action ```type``` that is accepted by his server code to a frontend developer, of course include the required ```data``` to the http call.
Note that a ```type``` must be an uppercase string, separated with ```_``` and it's data has to be a json.

This is the example of the requests

### ADD_TODO ok
![](https://raw.githubusercontent.com/rromadhoni/phredux/master/docs/imgs/ADD_TODO ok.png)
### ADD_TODO fail
![](https://raw.githubusercontent.com/rromadhoni/phredux/master/docs/imgs/ADD_TODO fail.png)
### DELETE_TODO ok
![](https://raw.githubusercontent.com/rromadhoni/phredux/master/docs/imgs/DELETE_TODO ok.png)
### DELETE_TODO fail
![](https://raw.githubusercontent.com/rromadhoni/phredux/master/docs/imgs/DELETE_TODO fail.png)
### LIST_TODO ok
![](https://raw.githubusercontent.com/rromadhoni/phredux/master/docs/imgs/LIST_TODO ok.png)


# Laravel API Docs Generator

This Laravel package provides an API Documentation generator based upon your Routes and Controller Method DocBlock comments.
Packagist: https://packagist.org/packages/codev/apidocs

## Installation

#### Laravel 5.0 -> 8.0

Begin by installing this package through Composer. Edit your project's `composer.json` file to require `codev-vn/apidocs`.

    composer require --dev codev/apidocs

Next, update Composer from the Terminal:

    composer update

Once the packaage has installed, the final step is to add the service provider. Open `config/app.php`, and add a new item to the providers array.

    'Codev\Apidocs\ApidocsServiceProvider',

Run the `artisan` command from the Terminal to see the new `apidocs` command.

    php artisan apidocs:generate

Create a copy of the API Docs Config by running this `artisan` command:

    php artisan vendor:publish


Notes
-------

##### Route Prefix

Create a prefix for your routes with an API Version.  i.e. 'api/v1

    Route::group(['prefix' => 'api/v1'], function(){
         // ...
    });
    
########
Laravel 5.4 defaults to api prefix (`Route::prefix('api')`).
If your routes/api.php looks like this...

    Route::group(['prefix' => 'v1'], function(){
         // ...
    });
... then the route for the generate command would be `api/v1`
Otherwise it will be just `api`

##### DocBlock Example
Below is a docBlock example.

    /**
    * Display the specified resource.
    * GET /user/{id}
    *
    * @param  int  $id  The id of a User
    * @return Response
    */
    public function show($id)
    {
        // Display User
    }

License
-------

This package we are developing from https://packagist.org/packages/f2m2/apidocs.
We ask for permission from F2M2 to use the source code to further develop the project and serve the community.
Thanks F2M2.

Codev Service Co.,Ltd at https://codev.vn

See [LICENSE](LICENSE.md) file.


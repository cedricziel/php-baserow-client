# php-baserow-client

An API client for baserow.io

```shell
composer require cedricziel/baserow
```

## Docs

```php
use CedricZiel\Baserow\Generated\Client;

$baserow = Client::create(null, [
    // optional, default is baserow.io
    new AddHostPlugin(new Uri('https://my-baserow.example.com')),

    // use ONE of DatabaseTokenAuthentication
    new DatabaseTokenAuthentication('YOUR_TOKEN'),
    //  OR JWTAuthentication
    new JWTAuthentication('JWT Token'),
]);

// list all rows in table id 42
$client->listDatabaseTableRows(42);
```

### docs ###

## License

Apache 2.0

# php-baserow-client

An API client for baserow.io

```shell
composer require cedricziel/baserow
```

## Docs

```php
use CedricZiel\Baserow\Generated\Client;

$token = 'my-token';
$authRegistry = new AuthenticationRegistry([
    new DatabaseTokenAuthentication($token),
]);

$client = Client::create(null, [
    new AddHostPlugin(new Uri('https://baserow.example.com')),
    $authRegistry,
]);

// list all rows in table id 42
$client->listDatabaseTableRows(42);
```

### docs ###

## License

Apache 2.0

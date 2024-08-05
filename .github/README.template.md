# php-baserow-client

An API client for baserow.io

```shell
composer require cedricziel/baserow
```

## Docs

```php
use CedricZiel\Baserow\Client;

$token = 'my-token';
$client = Client::createForUrl('https://baserow.example.com', accessToken: $token);

// list all rows in table id 42
$client->listDatabaseTableRows(42);
```

### docs ###

## License

Apache 2.0

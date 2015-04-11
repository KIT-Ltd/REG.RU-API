Пример использования

error_reporting(-1);

$files = glob('*.class.php');
foreach ($files as $file) {
    if (is_file($file)) {
        require_once $file;
    }
}

$api = new RegRu\Api('test', 'test');

print_r($api->nop());
print_r($api->domain()->getPrices());

// ...

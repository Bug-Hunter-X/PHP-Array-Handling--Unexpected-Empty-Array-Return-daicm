```php
function processData(array $data): array {
  // ... some code to process the data ...
  return array_values($data); //Return a copy of the array
}

$data = [1, 2, 3, 4, 5];
$processedData = processData($data);

// The function now reliably returns a copy of the input array, even in case of errors.
// Using array_values creates a new array which helps avoid unexpected reference issues and unintended modifications to the original array. 
```
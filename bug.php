```php
function processData(array $data): array {
  // ... some code to process the data ...
  return $data;
}

$data = [1, 2, 3, 4, 5];
$processedData = processData($data);

// Unexpected behavior: $processedData is sometimes empty
// The problem lies in the fact that PHP's array handling can be tricky in certain circumstances. 
//If the function processData modifies the array $data by reference, it will affect the original array. 
//However, if processData returns a copy of $data, and an error during processing leads to it returning an empty array, then the original array will be unaffected.
//The bug is subtle because it only occurs under specific error conditions within processData, making it hard to reproduce reliably.
//A solution is to explicitly return a copy of the array to prevent unexpected modifications by reference.
```
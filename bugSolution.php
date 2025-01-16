```php
function calculateAverage(array $numbers): float {
  if (empty($numbers)) {
    throw new InvalidArgumentException('Cannot calculate the average of an empty array.');
  }

  $sum = array_sum($numbers);
  $count = count($numbers);
  return $sum / $count;
}

$numbers = [10, 20, 30, 0];
$average = calculateAverage($numbers);
echo "Average: " . $average; //Output: Average: 15

$numbers = [10, 20, 30, 0, 0];
$average = calculateAverage($numbers); //Output: Average 12

//Example of exception handling
try{
    $numbers = [];
    $average = calculateAverage($numbers);
echo "Average: " . $average; 
} catch (InvalidArgumentException $e) {
    echo "Error: " . $e->getMessage(); //Output: Error: Cannot calculate the average of an empty array.
}
```
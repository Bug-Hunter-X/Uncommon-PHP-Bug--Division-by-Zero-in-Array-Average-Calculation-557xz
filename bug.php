```php
function calculateAverage(array $numbers): float {
  if (empty($numbers)) {
    return 0.0; // Handle empty array
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

$numbers = [];
$average = calculateAverage($numbers); //Output: Average: 0
```
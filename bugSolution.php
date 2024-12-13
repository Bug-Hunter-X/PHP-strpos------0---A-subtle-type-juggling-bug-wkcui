```php
<?php
$haystack = 'This is a test string.';
$needle = 'test';

if (strpos($haystack, $needle) === 0) {
  echo 'Needle found at the beginning!';
} else {
  echo 'Needle not found at the beginning.';
}

$haystack = 'This is a test string.';
$needle = 'notfound';

if (strpos($haystack, $needle) === 0) {
  echo 'Needle found at the beginning!';
} else {
  echo 'Needle not found at the beginning.';
}
?>
```
By using the strict comparison operator (`===`), we ensure that we're only checking for the exact numeric value of `0`, eliminating the false positive that occurs when the needle isn't found.
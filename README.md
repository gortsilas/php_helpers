# php_helpers
Helpful functions in PHP

## array_interlace
Mix multiple arrays in an interlaced order

```
$array1 = ['red', 'green', 'blue', 'yellow', 'orange', 'purple'];
$array2 = ['chicken', 'pig', 'cow', 'sheep', 'goat', 'horse', 'lion'];
$array3 = ['car', 'bus', 'train', 'plane', 'boat', 'ship', 'submarine'];


$mixed = array_interlace($array1, $array2, $array3);
```

Result:

```
array:20 [▼
  0 => "red"
  1 => "chicken"
  2 => "car"
  3 => "green"
  4 => "pig"
  5 => "bus"
  6 => "blue"
  7 => "cow"
  8 => "train"
  9 => "yellow"
  10 => "sheep"
  11 => "plane"
  12 => "orange"
  13 => "goat"
  14 => "boat"
  15 => "purple"
  16 => "horse"
  17 => "ship"
  18 => "lion"
  19 => "submarine"
]
```

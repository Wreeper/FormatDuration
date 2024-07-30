# FormatDuration PHP
This script will enable you to convert seconds to durations (for example, convert 31104000 to "one year" or 60 to "a minute").

This script is trying to be accurate by default, such as for example "5049176" is converted to "1 hour, 24 minutes, 9 seconds" instead of "1 hour". This behaviour can be easily changed, by only returning the first part.
# How to use this script?
If you don't know how to use it, no problem! Fortunately, it's very easy:
1. Download [the script](https://github.com/Wreeper/FormatDuration/blob/main/formatduration.php).
2. Upload it just as any normal .php file and include it.
```
<?php
include 'formatduration.php';
?>
```
3. Call the function! In this example, `$fdseconds` is the value in seconds that needs to be converted and `$fdconverted` is the variable that contains the converted value.
```
<?php
// If you already included the formatduration.php script, there's no need to include it again!
include 'formatduration.php';
$fdseconds = "60";
$fdconverted = formatDuration($fdseconds);
echo $fdconverted;
?>
```
The above example will return: `1 minute`

Hopefully you find this useful! You can modify this to your own liking; however, please keep the credits if you happen to use this.
Good luck with your PHP projects!

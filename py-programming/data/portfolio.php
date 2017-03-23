<?php
$dir = "images/portfolio";
if (is_dir($dir))
{
  if ($dh = opendir($dir))
  {
    while (($file = readdir($dh)) !== false)
    {
      if (strpos($file, '.png'))
      {
        echo $file.'<br>';
      }
    }
    closedir($dh);
  }
}
$array = array(
  '' => ''
);
?>

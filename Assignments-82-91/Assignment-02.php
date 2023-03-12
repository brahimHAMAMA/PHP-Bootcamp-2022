<?php


// / 1024 / 1024 / 1024 / 1024
echo "Size In Megabyte Is " . round(filesize('video.mp4') * 0.000001, 0) . " MB<br>";
echo "Size In Kilobyte Is " . round((filesize('video.mp4')  / 1024), 0) . " KB<br>";

echo "Size In Megabyte Is " . round(filesize('E:/photos 2023/video.mp4') * 0.000001, 0) . " MB<br>";
echo "Size In Kilobyte Is " . round((filesize('E:/photos 2023/video.mp4')  / 1024), 0) . " KB<br>";


// Output
// "Size In Megabyte Is 32"
// "Size In Kilobyte Is 33261"
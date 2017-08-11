<?
	//เรียกข้อมูลจาก JSON

	//Ditratory
	function listFolderFiles($dir)
		{
    	echo '<ol>';
    	foreach (new DirectoryIterator($dir) as $fileInfo) {
        if (!$fileInfo->isDot()) {
            echo '<li>' . $fileInfo->getFilename();


            	if ($fileInfo->isDir()) {
                	listFolderFiles($fileInfo->getPathname());

				}
        else {

          $string = file_get_contents($dir.'/'.$fileInfo->getFilename());
          $json_a = json_decode($string, true);

          echo $json_a['ไอดี']."<br>";
          echo $json_a['ยี่ห้อ']."<br>";
          echo $json_a['ขนาด']."<br>";
          echo $json_a['รายละเอียด']."<br>";
          echo $json_a['ตำหนิ']."<br>";
          echo $json_a['อื่นๆ']."<br>";
          echo $json_a['ราคาเริ่มต้น']."<br>";
          echo $json_a['วันที่เริ่มประมูล']."<br>";
        }
            	echo '</li>';
        		}
    		}
    	echo '</ol>';
		}
	listFolderFiles('data');
?>

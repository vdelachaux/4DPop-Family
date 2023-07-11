<?php
	
	class Zipper extends ZipArchive 
	{ 
		public function addDir($path,$base) 
		{ 
			$dir = dirname($base);
			$n = mb_substr($path,mb_strlen($dir),mb_strlen($dir));

			$this->addEmptyDir($n); 
			$nodes = glob($path . '/*'); 
			
			foreach ($nodes as $node) 
			{ 
				if (is_dir($node)) 
				{
					$this->addDir($node,$base); 
	
				} else if (is_file($node))  
				{ 
					$n = mb_substr($node,mb_strlen($dir),mb_strlen($node));					
					$this->addFile($node,$n); 
				} 
			} 
		}
	}
	
	$destination = $_SERVER["ZIP_DESTINATION"];
	$source = $_SERVER["ZIP_SOURCE"];	
	
	$zip = new Zipper;
	$res = $zip->open($destination,ZIPARCHIVE::CREATE|ZIPARCHIVE::OVERWRITE);
	
	if ($res === TRUE) 
	{			
		if (is_dir($source))
			$zip->addDir($source,$source);
		else
			$zip->addFile($source,basename($source));
		$zip->close();
		echo TRUE;
	}
?>
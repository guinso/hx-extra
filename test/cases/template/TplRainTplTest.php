<?php 
class TplRainTplTest extends PHPUnit_Framework_TestCase {
	
	public function testTransform()
	{
		$adaptor = new \HxExtra\Template\Engine\RainTpl(
			__DIR__ . DIRECTORY_SEPARATOR . 'cache', true);
		
		$output = $adaptor->transform(
			array('data' => array(
				'name' => 'john', 
				'items' => array('asd', 'qwe', 123)
			)), 
			file_get_contents(__DIR__ . DIRECTORY_SEPARATOR . 'template.tpl'));
		
		$expectedOutput = file_get_contents(__DIR__ . DIRECTORY_SEPARATOR . 'output.txt');
		
		$this->assertEquals($expectedOutput, $output);
	}
}
?>
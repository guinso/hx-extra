<?php 
namespace HxExtra\Template\Engine;

/**
 * Implement Rain\Tpl template engine library (adaptor)
 * @author chingchetsiang
 *
 */
class RainTpl implements \Hx\Template\EngineInterface {
	
	private $rainTpl;
	
	public function __construct($cachePath, $debug) 
	{
		$this->rainTpl = new \Rain\Tpl();
		
		if (!file_exists($cachePath))
			Throw new \Hx\Template\TemplateException("Cache directory not found $cachePath");
		
		if (!is_readable($cachePath))
			Throw new \Hx\Template\TemplateException("Cache directory is not readable $cachePath");
		
		if (!is_writable($cachePath))
			Throw new \Hx\Template\TemplateException("Cache directory is not writeable $cachePath");
		
		$this->rainTpl->configure(array(
			"cache_dir"	=> $cachePath,
			'debug' => $debug
		));
	}
/*	
	public function transform(Array $data, $template) 
	{
		//create the Tpl object
		$this->rainTpl->configure(array(
			'tpl_ext' => pathinfo($template, PATHINFO_EXTENSION),
			'tpl_dir' => dirname($template) . DIRECTORY_SEPARATOR
		));
		
		$this->rainTpl->assign($data);
		
		return $this->rainTpl->draw(
			basename(
				$template, 
				pathinfo($template, PATHINFO_EXTENSION)), 
			true);
	}
*/	
	public function transform(Array $data, $template)
	{
		$this->rainTpl->assign($data);
		
		return $this->rainTpl->drawString($template, true);
	}
	
	public function __destruct()
	{
		$this->rainTpl = null;
	}
}
?>
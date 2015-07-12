<?php 
class EmailPhpMailerTest extends PHPUnit_Framework_TestCase {
	
	public function testSend()
	{
		$domainName = 'abc.com';
		
		$host = 'mail.' . $domainName;
		
		$emailAddress = 'it@' . $domainName;
		
		$displayName = 'HxExtra UnitTest';
		
		$username = 'it@' . $domainName;
		
		$password = '123456789';
		
		$method = '';
		
		$port = '587';
		
		$adaptor = new \HxExtra\Email\Adaptor\SmtpPhpMailer(
			$host, $emailAddress, $displayName, 
			$username, $password, $method, $port);
		
		$time = date('Y-m-d H:i:s');
		
		$mail = new \Hx\Email\Mail(
			array('chetsiang' => 'chet_siang@yahoo.com'),
			array(),
			array(),
			"HxExtra Unit Test: PhpMailer adaptor Send Email",
			"Sent on $time",
			array('sample-file' => __DIR__ . DIRECTORY_SEPARATOR . 'sample.txt')		
		);	
		
		$adaptor->sent($mail);
	}
}
?>
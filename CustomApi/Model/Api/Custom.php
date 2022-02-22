<?php

namespace Dotsquares\CustomApi\Model\Api;

use Psr\Log\LoggerInterface;

class Custom
{
 	protected $logger;

 	public function __construct(
 	LoggerInterface $logger
 	)
 	{
 		$this->logger = $logger;
 	}

 /**
* @inheritdoc
*/

	public function getPost($storeid,$name)
	{
		$response = ['success' => false];

		try 
		{
			 $response = [
                    'storeid' => $storeid,
                    'name' =>$name
            ];
		} catch (\Exception $e) {
 			$response = ['success' => false, 'message' => $e->getMessage()];
			$this->logger->info($e->getMessage());
		}
		$returnArray = json_encode($response);
	return $returnArray;
	}
}
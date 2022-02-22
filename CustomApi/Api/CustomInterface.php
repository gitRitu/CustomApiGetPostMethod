<?php

namespace Dotsquares\CustomApi\Api;

interface CustomInterface
{
 /**
* GET for Post api
* @param string $storeid
* @param string $name
* @return string
*/

	 public function getPost($storeid,$name);
}
<?php 
class Random { 
private $token; 
private $id; 

public function getToken() 
{ 
$this->token = md5(uniqid(rand(), TRUE)); 
return $this->token; 
}

 public function random_code($limit)
{
    return substr(base_convert(sha1(uniqid(mt_rand())), 16, 36), 0, $limit);
}

}

?>

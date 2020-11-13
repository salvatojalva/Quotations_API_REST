<?php 
namespace Bam\Services;

use Bam\Interfaces\DataHandlerInterface;

use \GuzzleHttp\Client;
use \Meng\AsyncSoap\Guzzle\Factory;

class DataHandler implements DataHandlerInterface
{

    private $search_str;

    public function get($search_str)
    {
        $this->search_str = $search_str;

        return $this->search_str;

    }

    

}
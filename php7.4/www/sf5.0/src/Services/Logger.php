<?php


namespace App\Services;


use Psr\Log\LoggerInterface;

class Logger
{
    /**
     * @var LoggerInterface
     */
    private $logger;
    private $message=null;

        public  function __construct(LoggerInterface $logger,$message=null)
        {
            $this->logger = $logger;
        }

        public function set($msg){
            $msg.=$this->message;
            $this->logger->info($msg);
        }
}
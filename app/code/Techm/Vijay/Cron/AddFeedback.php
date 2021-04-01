<?php
namespace Techm\Vijay\Cron;

class AddFeedback
{

    protected $feedback;
    public function __construct(\Techm\Vijay\Model\Feedback $feedback)
    {
        $this->feedback=$feedback;

    }

    public function execute(){

        $resultPage = $this->feedback;
        $col= $resultPage->getCollection();
        foreach ($col as $val){

            $email=$val->getEmail();
            $name=$val->getName();
        }

        $writer = new \Zend\Log\Writer\Stream(BP . '/var/log/cron.log');
        $logger = new \Zend\Log\Logger();
        $logger->addWriter($writer);
        $a="Vijay";
        $logger->info($name." VJ cron executed Email: ".$email );

        return $this;
    }
}
<?php
class RaspberryPiBis{
    private Connector $connector;
    public function setConnector(Connector $c){
        $this->connector=$c;
        $c->set($this); 
    }
    
    public function info(){
        return "ARM 132425";
    }

}

class Connector{

    private $rasperry;

    public function set(RaspberryPiBis $raspberry){
        // 
        
        $this->rasperry = $raspberry;
    }
}

$rasperry = new RaspberryPiBis();
$connector = new Connector();
$raspberry->setConnector($connector);
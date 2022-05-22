<?php

class vehicles
{
    private $transport = [
            [
                'type' => 'sport-car',
                'speed' => 150,
                'color' => 'red',
            ],
            [
                'type' => 'truck',
                'speed' => 60,
                'color' => 'black',
            ],
            [
                'type' => 'bike',
                'speed' => 100,
                'color' => 'blue',
            ],
            [
                'type' => 'boat',
                'speed' => 50,
                'color' => 'white',
            ],
        ];
    
    /**
     * destination distance in km
    */
    private $distance = 350; 
    
    private $message = "Duration of each vehicle to reach destination";
    
    /**
     * @param mixed[] $transport
     * 
     * @return string
     */ 
    private function checker(array $transport): string
    {
        if ($transport['type'] != 'boat') {
            return $transport['type'] . ": ". $this->distance/$transport['speed'];
        } 
        
        if ($transport['type'] == 'boat') {
            // The boat needs extra 15 min to get ready, so we add + 0.25H
            return $transport['type'] . ": ". ($this->distance/$transport['speed'] + 0.25);
        }
    }
    
    public function show(): void
    {
        print($this->message . " " . $this->distance . "km: \n\n");

        for ($i = 0; $i < count($this->transport); $i++) {
            print $this->checker($this->transport[$i]) . " hours \n";
        }
    }
}

$class = new vehicles();
$class->show();

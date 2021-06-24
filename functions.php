<?php 
            function getCidr($ip){
                $ipArray = explode('/',$ip);
                $cidr = $ipArray[0];

                return $cidr;
            }

            function getMask($ip){
                $ipArray = explode('/',$ip);
                $cidr = $ipArray[1];
        
                $masks = array ("24" => array("255.255.255.0", "0.0.0.255"),
                 "25" => array("255.255.255.128", "0.0.0.127"),
                 "26" => array("255.255.255.192","0.0.0.63"),
                );
    
                return $masks[$cidr];
            }
?>            
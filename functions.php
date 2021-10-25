<?php 
    //returns the ip address (without the mask)
    function getCidr($ip){
        $ipArray = explode('/',$ip);//splits
        $cidr = $ipArray[0];
        return $cidr;
    }

    //returns the array of network & wildcard mask 
    function getMask($ip){
        $ipArray = explode('/',$ip);
        $cidr = $ipArray[1]; //mask number

        //array of mask number with correspondant network mask and 
        //wildcard mask
        $masks = array (
            "16" => array("255.255.0.0","0.0.255.255"),
            "17" => array("255.255.128.0","0.0.127.255"),
            "18" => array("255.255.192.0","0.0.63.255"),
            "19" => array("255.255.224.0","0.0.31.255"),
            "20" => array("255.255.240.0","0.0.15.255"),
            "21" => array("255.255.248.0","0.0.7.255"),
            "22" => array("255.255.252.0","0.0.3.255"),
            "23" => array("255.255.254.0","0.0.1.255"),
            "24" => array("255.255.255.0", "0.0.0.255"),
            "25" => array("255.255.255.128", "0.0.0.127"),
            "26" => array("255.255.255.192","0.0.0.63"),
            "27" => array("255.255.255.224","0.0.0.31"),
            "28" => array("255.255.255.240","0.0.0.15"),
            "29" => array("255.255.255.248","0.0.0.7"),
            "30" => array("255.255.255.252","0.0.0.3"),
            "31" => array("255.255.255.254","0.0.0.1"),
            "32" => array("255.255.255.255","0.0.0.0"),
        );

        return $masks[$cidr];
    }

    //
    function getAcls($portNumber, $traffic, $cidr1, $maskGen1, $cidr2, $maskGen2, $prot){
        if( empty($portNumber) ){

            if( $traffic == "IP"){
                $acl1_2 = "access-list 101 permit ip ".$cidr1." ".$maskGen1." ".$cidr2." ".$maskGen2;
                $acl2_1 = "access-list 101 permit ip ".$cidr2." ".$maskGen2." ".$cidr1." ".$maskGen1;
            }elseif( $traffic == "HTTP" ){
                $acl1_2 = "access-list 101 permit TCP ".$cidr1." ".$maskGen1." ".$cidr2." ".$maskGen2." eq 80";
                $acl2_1 = "access-list 101 permit TCP ".$cidr2." ".$maskGen2." ".$cidr1." ".$maskGen1." eq 80";
            }elseif( $traffic == "SMTP" ){
                $acl1_2 = "access-list 101 permit TCP ".$cidr1." ".$maskGen1." ".$cidr2." ".$maskGen2." eq 25";
                $acl2_1 = "access-list 101 permit TCP ".$cidr2." ".$maskGen2." ".$cidr1." ".$maskGen1." eq 25";
            }elseif( $traffic == "FTP" ){
                $acl1_2 = "access-list 101 permit TCP ".$cidr1." ".$maskGen1." ".$cidr2." ".$maskGen2." eq 21";
                $acl2_1 = "access-list 101 permit TCP ".$cidr2." ".$maskGen2." ".$cidr1." ".$maskGen1." eq 21";
            }

        }else{
            $acl1_2 = "access-list 101 permit ".$prot." ".$cidr1." ".$maskGen1." ".$cidr2." ".$maskGen2." eq ".$portNumber;
            $acl2_1 = "access-list 101 permit ".$prot." ".$cidr2." ".$maskGen2." ".$cidr1." ".$maskGen1." eq ".$portNumber;
        }

        $acls = array($acl1_2,$acl2_1);
        return $acls;
    }
?>            
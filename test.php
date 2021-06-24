<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>FormWizard_v5</title>

	</head>
	<body>
        <?php
            /*
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
            /*
            $ip= "192.168.2.1/24";
            $ipArray = explode('/',$ip);
            $cidr = $ipArray[1];
    
            $masks = array ("24" => array("255.255.255.0", "0.0.0.255"),
             "25" => array("255.255.255.128", "0.0.0.127"),
             "26" => array("255.255.255.192","0.0.0.63"),
            );

            echo $masks[$cidr][0];
            echo '<br>';
            echo $masks[$cidr][1];*/

            //$value= getMask("192.168.2.1/24");
            //echo $value[0];
            //echo $value[1];
            /*
            $private_ip1="192.168.1.0/24";
            $private_ip2="192.168.3.0/26";

            $cidr1= getCidr($private_ip1);
            $cidr2= getCidr($private_ip2);

            $maskGen1 = getMask($private_ip1)[1];
            $maskGen2 = getMask($private_ip2)[1];

            $protocoleType= "HTTP";
            if( $protocoleType == "ip"){
                $acl = "access-list 101 permit ip ".$cidr1." ".$maskGen1." ".$cidr2." ".$maskGen2;
                
            }elseif( $protocoleType == "HTTP" ){
                $acl = "access-list 101 permit TCP ".$cidr1." ".$maskGen1." ".$cidr2." ".$maskGen2." eq 80";
            }

            echo $acl;
            
            


            $file = fopen("configs/test.txt","w");
			echo fwrite($file,"Hello World. Testing!");
			fclose($file);


            /*'25'=>'255.255.255.128',
            '32'=>'255.255.255.255');*/



            $command = escapeshellcmd("python script.py 192.168.1.1 ensam ensam");
			$output = shell_exec($command);
			echo $output;
		?>

</body>
</html>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>FORM</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="author" content="colorlib.com">

		<!-- MATERIAL DESIGN ICONIC FONT -->
		<link rel="stylesheet" href="fonts/material-design-iconic-font/css/material-design-iconic-font.css">

		<!-- STYLE CSS -->
		<link rel="stylesheet" href="css/style.css">
	</head>
	<body>
        <?php
		//to stop (hide) errors from showing
		error_reporting(0);
					
		// Check if the form is submitted 
			if ( isset( $_POST['submit'] ) ) { 
			
			include 'functions.php';
			//1- retrieve the form data by using the element's name attributes value as key 
			
			//GENERAL INFORMATIONS I
			//site1
			$interface1= $_POST['interface_1'];
			$SSHuser1 = $_POST['user_1'];
			$SSHpwd1 = $_POST['pwd_1'];
			$ip1 = $_POST['ip_1'];
			//site2
			$interface2= $_POST['interface_2'];
			$SSHuser2 = $_POST['user_2'];
			$SSHpwd2 = $_POST['pwd_2'];
			$ip2 = $_POST['ip_2'];

			//GENERAL INFORMATIONS II
			//site1
			$hostname1 = $_POST['hostname1'];
			$public_ip1 = $_POST['public_ip1'];
			$private_ip1 = $_POST['private_ip1'];
			//site2
			$public_ip2 = $_POST['public_ip2'];
			$private_ip2 = $_POST['private_ip2'];
			$hostname2 = $_POST['hostname2'];

			//IKE1 INFORMATIONS
			//section2
			$encr_algo1 = $_POST['encr_algo1'];
			$hash_algo1 = $_POST['hash_algo1'];
			$key_length_group = $_POST['key_length_group'];
			$lifeTime = $_POST['lifeTime'];
			$password = $_POST['password'];

			//IKE2 INFORMATIONS
			//section3
			$protocoleIPsec = $_POST['protocoleIPsec'];
			$encr_algo2 = $_POST['encr_algo_2'];
			$hash_algo2 = $_POST['hash_algo_2'];
			$tunnelMode = $_POST['tunnelMode'];

			//TUNNEL POLICY DEVELOPPEMENT
			//section4
			$traffic = $_POST['traffic'];
			$portNumber = $_POST['portNumber'];
			$prot = $_POST['prot'];

			//2- defining our variables (cidrs & generic masks)
            //retreiving private ip @ without masks
			$cidr1= getCidr($private_ip1); 
            $cidr2= getCidr($private_ip2);

			//retreiving network mask 
			$mask1 = getMask($private_ip1)[0]; //1st elt from the array of masks
			$mask2 = getMask($private_ip2)[0];

			//retreiving wildcard mask (ipsec uses wildcard mask)
            $maskGen1 = getMask($private_ip1)[1]; //2nd element from the array of masks
            $maskGen2 = getMask($private_ip2)[1];


			//3- getting the acls
			$acls= getAcls($portNumber, $traffic, $cidr1, $maskGen1, $cidr2, $maskGen2, $prot);
			$acl1_2 = $acls[0];
			$acl2_1 = $acls[1];

			//commun configuration (IKE configruration)
			$commun = "crypto isakmp policy 10
			authentication pre-share
			encryption $encr_algo1
			hash $hash_algo1
			$key_length_group
			lifetime $lifeTime
			!
			";

			//how data will be encrypted and hashed ..
			if( $protocoleIPsec == "ESP"){ //authentication(hash=> integrity) & encryption (data confidentiality)
				$tr = "crypto ipsec transform-set MFI-ENSAM  esp-$encr_algo2 esp-$hash_algo2-hmac
				mode $tunnelMode
				exit 
				!
				";
			}elseif( $protocoleIPsec == "AH"){ //authentication(hash=> integrity)
				$tr = "crypto ipsec transform-set MFI-ENSAM ah-$hash_algo2-hmac 
				mode $tunnelMode
				exit
				!
				";
			}


			$IKE1= "hostname $hostname1
			!			
			crypto isakmp key $password address $public_ip2
			!
			!
			!
			crypto map myvpn 10 ipsec-isakmp
			set peer $public_ip2
			set transform-set MFI-ENSAM
			match address 101
			!
			!
			!
			ip route $cidr2 $mask2  $public_ip2
			!
			interface $interface1
			crypto map myvpn
			exit
			! 
			do wr
			";

			$IKE2 = "hostname $hostname2
			!	
			crypto isakmp key $password address $public_ip1
			!
			!
			!
			crypto map myvpn 10 ipsec-isakmp
			set peer $public_ip1
			set transform-set MFI-ENSAM
			match address 101
			!
			!
			!
			ip route $cidr1 $mask1  $public_ip1
			!
			interface $interface2
			crypto map myvpn
			exit
			! 
			do wr
			";

			//4- RESULT CONFIGURATIONS
			//first site configuration
			$conf1 = $commun.$IKE1.$tr.$acl1_2."
			!end";
			//second site configuration
			$conf2 = $commun.$IKE2.$tr.$acl2_1."
			!end";

			//saving the conf1 in the file "site1.txt"
			$file1 = fopen("site1.txt","w");
			echo fwrite($file1,$conf1);
			fclose($file1);
			//saving the conf2 in the file "site2.txt"
			$file2 = fopen("site2.txt","w");
			echo fwrite($file2,$conf2);
			fclose($file2);

			//calling python script to execute configuration commands line 
			//by line on the two sites (routers)
            $command = escapeshellcmd("python script.py $ip1 $SSHuser1 $SSHpwd1 $ip2 $SSHuser2 $SSHpwd2");
			$output = shell_exec($command);
			echo $output;

			} 
        
		?>

		<script src="js/jquery-3.3.1.min.js"></script>
		
		<!-- JQUERY STEP -->
		<script src="js/jquery.steps.js"></script>

		<script src="js/main.js"></script>
<!-- Template created and distributed by Colorlib -->
</body>
</html>
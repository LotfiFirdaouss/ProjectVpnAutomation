<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>VPN Automatic configuration</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="author" content="colorlib.com">

		<!-- MATERIAL DESIGN ICONIC FONT -->
		<link rel="stylesheet" href="fonts/material-design-iconic-font/css/material-design-iconic-font.css">

		<!-- STYLE CSS -->
		<link rel="stylesheet" href="css/style.css">
	</head>
	<body>
		<div class="wrapper">
			<div class="image-holder">
			</div>
            <form action="form.php" method="POST" name="form" id="form" class="form-horizontal">
            	<div id="wizard">

					<!-- SECTION 1 -->
	                <h4></h4>
	                <section id="GenInfoI">
	                	<span ><u> Site I infos : </u></span><hr>
						<div class="form-row form-group">
	                    	<div class="form-holder">
	                    		<label for="ip_1">
	                    		IP Address 
		                    	</label>
	                    		<input type="text" class="form-control" id="ip_1" name="ip_1" >
								<span id="adress_invalid"></span> <br>
	                    	</div>
	                    	<div class="form-holder">
	                    		<label for="interface_1">
	                    		Public Interface 
		                    	</label>
	                    		<input type="text" class="form-control" id="interface_1" name="interface_1" >
	                    	</div>
	                    </div>
	                    <div class="form-row form-group">
	                    	<div class="form-holder">
	                    		<label for="user_1">
	                    		UserName
		                    	</label>
	                    		<input type="text" class="form-control" id="user_1" name="user_1" >
	                    	</div>
	                    	<div class="form-holder">
	                    		<label for="pwd_1">
	                    		Password
		                    	</label>
	                    		<input type="password" class="form-control" id="pwd_1" name="pwd_1">
	                    	</div>
	                    </div>


						<span ><u> Site II infos : </u></span><hr>
						<div class="form-row form-group">
	                    	<div class="form-holder">
	                    		<label for="ip_2">
	                    		IP Address
		                    	</label>
	                    		<input type="text" class="form-control" id="ip_2" name="ip_2" >
	                    	</div>
	                    	<div class="form-holder">
	                    		<label for="interface_2">
	                    		Public Interface
		                    	</label>
	                    		<input type="text" class="form-control" id="interface_2" name="interface_2" >
	                    	</div>
	                    </div>
	                    <div class="form-row form-group">
	                    	<div class="form-holder">
	                    		<label for="user_2">
	                    		UserName
		                    	</label>
	                    		<input type="text" class="form-control" id="user_2" name="user_2">
	                    	</div>
	                    	<div class="form-holder">
	                    		<label for="pwd_2">
	                    		Password
		                    	</label>
	                    		<input type="password" class="form-control" id="pwd_2" name="pwd_2">
	                    	</div>
	                    </div>

	                    <div class="checkbox">
							<label>
								<input type="checkbox" id="accept_terms" name="accept_terms" > I have read and accepted the terms & conditions
								<span class="checkmark"></span>
							</label>
						</div>

						
	                </section>

            		<!-- SECTION 1 -->
	                <h4></h4>
	                <section>
	                	<span> <u>Site I :</u> </span>
	                    <div class="form-row form-group">
	                    	<div class="form-holder">
	                    		<label for="hostname1">
	                    		Hostname
		                    	</label>
	                    		<input type="text" class="form-control" name="hostname1" id="hostname_1">
	                    	</div>
	                    	<div class="form-holder">
	                    		<label for="public_ip1">
	                    		Public IP
		                    	</label>
	                    		<input type="text" class="form-control" id="public_ip1" name="public_ip1">
	                    	</div>
	                    	<div class="form-holder">
	                    		<label for="private_ip1">
	                    		Private IP
		                    	</label>
	                    		<input type="text" class="form-control" id="private_ip1" name="private_ip1">
	                    	</div>
	                    </div>

	                	<span> <u>Site II : </U></span>
	                    <div class="form-row form-group">
	                    	<div class="form-holder">
	                    		<label for="hostname2">
	                    		Hostname 
		                    	</label>
	                    		<input type="text" class="form-control" name="hostname2" id="hostname_2">
	                    	</div>
	                    	<div class="form-holder">
	                    		<label for="public_ip2">
	                    		Public IP
		                    	</label>
	                    		<input type="text" class="form-control" name="public_ip2" id="public_ip2">
	                    	</div>
	                    	<div class="form-holder">
	                    		<label for="private_ip2">
	                    		Private IP
		                    	</label>
	                    		<input type="text" class="form-control" name="private_ip2" id="private_ip2">
	                    	</div>
	                    </div>



	                </section>
	                

					<!-- SECTION 2 -->
	                <h4></h4>
	                <section>

	                	<div class="form-row">
	                    	<label for="">
	                    		Encryption Algorithm *
	                    	</label>
	                    	<div class="form-holder">
	                    		<select name="encr_algo1" id="encr_algo1"  class="form-control">
									<option value="DES" class="option">DES</option>
									<option value="AES" class="option">AES</option>
									<option value="3DES" class="option">3DES</option>
								</select>
								<i class="zmdi zmdi-caret-down"></i>
	                    	</div>
	                    </div>

	                    <div class="form-row">
	                    	<label for="">
	                    		Hashing Algorithm *
	                    	</label>
	                    	<div class="form-holder">
	                    		<select name="hash_algo1" id="hash_algo1" class="form-control">
									<option value="MD5" class="option">MD5</option>
									<option value="SHA" class="option">SHA</option>
								</select>
								<i class="zmdi zmdi-caret-down"></i>
	                    	</div>
	                    </div>	

	                    <div class="form-row">
	                    	<label for="">
	                    		Key Length *
	                    	</label>
	                    	<div class="form-holder">
	                    		<select name="key_length_group" id="key_length_group"  class="form-control">
									<option value="group 1" class="option">Diffie-Hellman group 1</option>
									<option value="group 2" class="option">Diffie-Hellman group 2</option>
									<option value="group 5" class="option">Diffie-Hellman group 5</option>
									<option value="group 14" class="option">Diffie-Hellman group 14</option>
								</select>
								<i class="zmdi zmdi-caret-down"></i>
	                    	</div>
	                    </div>

	                    <div class="form-row form-group">
	                    	<div class="form-holder">
	                    		<label for="">
	                    		Lifetime (s) *
		                    	</label>
	                    		<input type="text" class="form-control" name="lifeTime" id="lifeTime">
	                    	</div>
	                    	<div class="form-holder">
	                    		<label for="">
	                    		Password *
		                    	</label>
	                    		<input type="password" class="form-control" name="password" id="password">
	                    	</div>
	                    </div>	
	                </section>


					<!-- SECTION 3 -->
	                <h4></h4>
	                <section>

	                	<div class="form-row">
	                    	<label for="">
	                    		Protocole IPsec *
	                    	</label>
	                    	<div class="form-holder">
	                    		<select name="protocoleIPsec" id="protocoleIPsec"  class="form-control">
									<option value="ESP" class="option" checked>ESP</option>
									<option value="AH" class="option">AH</option>
								</select>
								<i class="zmdi zmdi-caret-down"></i>
	                    	</div>
	                    </div>	

	                	<div class="form-row">
	                    	<label for="">
	                    		Encryption Algorithm *
	                    	</label>
	                    	<div class="form-holder">
	                    		<select name="encr_algo_2" id="encr_algo_2" class="form-control">
									<option value="DES" class="option">DES</option>
									<option value="AES" class="option">AES</option>
									<option value="3DES" class="option">3DES</option>
								</select>
								<i class="zmdi zmdi-caret-down"></i>
	                    	</div>
	                    </div>

	                    <div class="form-row">
	                    	<label for="">
	                    		Hashing Algorithm *
	                    	</label>
	                    	<div class="form-holder">
	                    		<select name="hash_algo_2" id="hash_algo_2" class="form-control">
									<option value="MD5" class="option">MD5</option>
									<option value="SHA" class="option">SHA</option>
								</select>
								<i class="zmdi zmdi-caret-down"></i>
	                    	</div>
	                    </div>	

	                    <div class="form-row">
	                    	<label for="">
	                    		Tunnel mode *
	                    	</label>
	                    	<div class="form-holder">
	                    		<select name="tunnelMode" id="tunnelMode" class="form-control">
									<option value="tunnel" class="option">tunnel</option>
									<option value="transport" class="option">transport</option>
								</select>
								<i class="zmdi zmdi-caret-down"></i>
	                    	</div>
	                    </div>

	                </section>


	                <!-- SECTION 4 -->
	                <h4></h4>
	                <section>

	                	<div class="form-row">
	                    	<label for="">
	                    		Traffic type  *
	                    	</label>
	                    	<div class="form-holder">
	                    		<select name="traffic" id="traffic" class="form-control">
								<option value="IP" class="option">IP</option>
									<option value="HTTP" class="option">HTTP</option>
									<option value="FTP" class="option">FTP</option>
									<option value="SMTP" class="option">SMTP</option>
								</select>
								<i class="zmdi zmdi-caret-down"></i>
	                    	</div>
	                    </div>

	                    <div class="form-row form-group">
	                    	<div class="">
	                    		<label for="">
	                    		or specify manually the port number * 
		                    	</label>
	                    		<input type="text" class="form-control" name="portNumber" id="portNumber">
								<div class="radio">
								<label>
									<input type="radio" name="prot" id="prot" value="tcp" checked> TCP
									<input type="radio" name="prot" id="prot" value="udp"> UDP
								</label>
							</div>
	                    	</div>
						

						</div>	

	                </section>

	                <!-- SECTION 5 -->
	                <h4></h4>
	                <section>
						<div class="" id="summary">
							<hr>
							<table class="center">
								<caption>General Informations I </caption>
								<thead>
									<tr>
										<th scope="col">site</th>
										<th scope="col">ip Address</th>
										<th scope="col">public Interface</th>
										<th scope="col">userName</th>
										<th scope="col">password</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td data-label="site"> site I </td>
										<td data-label="ip_address" id="txt_ip_1">ip_1</td>
										<td data-label="interface" id="txt_int_1">interface_1</td>
										<td data-label="user" id="txt_user_1">user_1</td>
										<td data-label="pwd" >
											<span id="txt_pwd_1">pwd_1 </span><br><input type="button" id="showPwd1" value="show">
										</td>
									</tr>
									<tr>
									<td data-label="site"> site II </td>
										<td data-label="ip_address" id="txt_ip_2">ip_2</td>
										<td data-label="interface" id="txt_int_2">interface_2</td>
										<td data-label="user" id="txt_user_2">user_2</td>
										<td data-label="pwd">
											<span id="txt_pwd_2">pwd_2 </span><br><input type="button" id="showPwd2" value="show">
										</td>
									</tr>
								</tbody>
							</table>
							<hr>
							<table class="center">
								<caption>General Informations II </caption>
								<thead>
									<tr>
										<th scope="col">site</th>
										<th scope="col">hostname</th>
										<th scope="col">public ip</th>
										<th scope="col">private ip</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td data-label="site" > site I </td>
										<td data-label="hostname" id="txt_hostname_1">hostname_1</td>
										<td data-label="public ip" id="txt_public_ip1">public_ip1</td>
										<td data-label="private ip" id="txt_private_ip1">private_ip1</td>
									</tr>
									<tr>
										<td data-label="site"> site II </td>
										<td data-label="hostname" id="txt_hostname_2">hostname_2</td>
										<td data-label="public ip" id="txt_public_ip2">public_ip2</td>
										<td data-label="private ip" id="txt_private_ip2">private_ip2</td>
									</tr>
								</tbody>
							</table>
							<hr>
							<table class="center">
								<caption> IKE I </caption>
								<thead>
									<tr>
										<th scope="col">Encryption algorithm</th>
										<th scope="col">Hashing algorithm</th>
										<th scope="col">Key length</th>
										<th scope="col">Life time</th>
										<th scope="col">Password</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td data-label="encr. algorithm" id="txt_encr_algo1"> encr_algo1 </td>
										<td data-label="hash. algorithm" id="txt_hash_algo1">hash_algo1</td>
										<td data-label="key length" id="txt_key_length">key_length</td>
										<td data-label="life time" id="txt_lifeTime">lifeTime</td>
										<td data-label="password" >
											<span id="txt_password">password </span><br><input type="button" id="showPwd" value="show">
										</td>
									</tr>
								</tbody>
							</table>
							<hr>
							<table class="center">
								<caption> IKE II </caption>
								<thead>
									<tr>
										<th scope="col">Protocole IPsec</th>
										<th scope="col">Encryption algorithm</th>
										<th scope="col">Hashing algorithm</th>
										<th scope="col">Tunnel mode</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td data-label="Prot. IPsec" id="txt_protocoleIPsec">protocoleIPsec</td>
										<td data-label="encr. algorithm" id="txt_encr_algo_2"> encr_algo_2 </td>
										<td data-label="hash. algorithm" id="txt_hash_algo_2">hash_algo_2</td>
									    <td data-label="tunnel mode" id="txt_tunnelMode">tunnelMode</td>
									</tr>
								</tbody>
							</table>
							<hr>
							<table class="center">
								<caption> Tunnel Policy Developpement </caption>
								<thead>
									<tr>
										<th scope="col">Traffic type</th>
										<th scope="col">port number</th>
										<th scope="col">protocole</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td data-label="Trafic type" id="txt_traffic">traffic</td>
										<td data-label="port number" id="txt_port"> - </td>
										<td data-label="protocole"id="txt_prot"> - </td>
									</tr>
								</tbody>
							</table>
							<hr>
						
						</div>					
						<!-- <input type="submit" name="submit" class="myClass"> -->
	                </section>

            	</div>
				
            </form>

		</div>

		<script src="js/jquery-3.3.1.min.js"></script>
		
		<!-- JQUERY STEP -->
		<script src="js/jquery.steps.js"></script>
		<script src="node_modules/jquery-validation/dist/jquery.validate.min.js"></script>
		<script src="node_modules/jquery-validation/dist/additional-methods.min.js"></script>

		<script src="js/main.js"></script>
<!-- Template created and distributed by Colorlib -->
</body>
</html>
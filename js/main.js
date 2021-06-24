$(function(){
    /*
    var confirm=document.getElementById("accept_terms").value;
    if(confirm.checked==false){
        alert("plz check the checkbox field");
        document.getElementbyId("accept_terms").focus();
        return false;
    }*/

    function mySummary(){
        
        //GENINFO I
        //site1
        var int1 = document.getElementById("interface_1");
        var ip1 = document.getElementById("ip_1");
        var usr1 = document.getElementById("user_1");
        var pwd1 = document.getElementById("pwd_1");
        //txtZone site1
        var txt_int_1 = document.getElementById("txt_int_1");
        var txt_ip_1 = document.getElementById("txt_ip_1");  
        var txt_user_1 = document.getElementById("txt_user_1");              
        var txt_pwd_1 = document.getElementById("txt_pwd_1");
        //setting the elements
        txt_int_1.innerHTML =int1.value;
        txt_ip_1.innerHTML =ip1.value;
        txt_user_1.innerHTML =usr1.value;
        txt_pwd_1.innerHTML =pwd1.value;

        //site2
        var int2 = document.getElementById("interface_2");
        var ip2 = document.getElementById("ip_2");
        var usr2 = document.getElementById("user_2");
        var pwd2 = document.getElementById("pwd_2");
        //txtZone site2
        var txt_int_2 = document.getElementById("txt_int_2");
        var txt_ip_2 = document.getElementById("txt_ip_2");  
        var txt_user_2 = document.getElementById("txt_user_2");              
        var txt_pwd_2 = document.getElementById("txt_pwd_2")
        //setting the elements
        txt_int_2.innerHTML =int2.value;
        txt_ip_2.innerHTML =ip2.value;
        txt_user_2.innerHTML =usr2.value;
        txt_pwd_2.innerHTML =pwd2.value;
        
        //////////////////////////////////////////////////////////////////
        //GENINFO II
        //site1
        var hostname_1 = document.getElementById("hostname_1");
        var public_ip1 = document.getElementById("public_ip1");
        var private_ip1 = document.getElementById("private_ip1");
        //txt Zone site1
        var txt_hostname_1 = document.getElementById("txt_hostname_1");
        var txt_public_ip1 = document.getElementById("txt_public_ip1");  
        var txt_private_ip1 = document.getElementById("txt_private_ip1"); 
        //setting the elements
        txt_hostname_1.innerHTML=hostname_1.value;
        txt_public_ip1.innerHTML=public_ip1.value;
        txt_private_ip1.innerHTML=private_ip1.value;

        //site2
        var hostname_2 = document.getElementById("hostname_2");
        var public_ip2 = document.getElementById("public_ip2");
        var private_ip2 = document.getElementById("private_ip2");
        //txt Zone site2
        var txt_hostname_2 = document.getElementById("txt_hostname_2");
        var txt_public_ip2 = document.getElementById("txt_public_ip2");  
        var txt_private_ip2 = document.getElementById("txt_private_ip2"); 
        //setting the elements
        txt_hostname_2.innerHTML=hostname_2.value;
        txt_public_ip2.innerHTML=public_ip2.value;
        txt_private_ip2.innerHTML=private_ip2.value;

        //////////////////////////////////////////////////////////////////
        //IKE1
        var encr_algo1 = document.getElementById("encr_algo1");
        var hash_algo1 = document.getElementById("hash_algo1");
        var key_length_group = document.getElementById("key_length_group");
        var lifeTime = document.getElementById("lifeTime");
        var password = document.getElementById("password");
        //txt Zone site2
        var txt_encr_algo1 = document.getElementById("txt_encr_algo1");
        var txt_hash_algo1 = document.getElementById("txt_hash_algo1");  
        var txt_key_length = document.getElementById("txt_key_length"); 
        var txt_lifeTime = document.getElementById("txt_lifeTime"); 
        var txt_password = document.getElementById("txt_password"); 
        //setting the elements
        txt_encr_algo1.innerHTML=encr_algo1.value;
        txt_hash_algo1.innerHTML=hash_algo1.value;
        txt_key_length.innerHTML=key_length_group.value;
        txt_lifeTime.innerHTML=lifeTime.value;
        txt_password.innerHTML=password.value;

        //////////////////////////////////////////////////////////////////
        //IKE2
        var protocoleIPsec = document.getElementById("protocoleIPsec");
        var encr_algo2 = document.getElementById("encr_algo_2");
        var hash_algo2 = document.getElementById("hash_algo_2");
        var tunnelMode = document.getElementById("tunnelMode");
        //txt Zone site2
        var txt_protocoleIPsec = document.getElementById("txt_protocoleIPsec");
        var txt_encr_algo_2 = document.getElementById("txt_encr_algo_2");  
        var txt_hash_algo_2 = document.getElementById("txt_hash_algo_2"); 
        var txt_tunnelMode = document.getElementById("txt_tunnelMode");
        //setting the elements
        txt_protocoleIPsec.innerHTML=protocoleIPsec.value;
        txt_encr_algo_2.innerHTML=encr_algo2.value;
        txt_hash_algo_2.innerHTML=hash_algo2.value;
        txt_tunnelMode.innerHTML=tunnelMode.value;

        //////////////////////////////////////////////////////////////////
        //Tunnel policy dev
        var traffic = document.getElementById("traffic");
        var portNumber = document.getElementById("portNumber");
        var prot = document.getElementById("prot");
        //txt Zone site2
        var txt_traffic = document.getElementById("txt_traffic");
        var txt_port = document.getElementById("txt_port");  
        var txt_prot = document.getElementById("txt_prot"); 
        //setting the elements
        txt_traffic.innerHTML=traffic.value;
        if( portNumber.value !="" ){
            txt_port.innerHTML=portNumber.value;
            txt_prot.innerHTML=prot.value;
        }else{
            txt_port.innerHTML="-";
            txt_prot.innerHTML="-";
        }
        
    }

    var form  = $("#form");
    form.validate({
        rules : {
            ip_1: {
                required : true,
                pattern : /^(25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.(25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.(25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.(25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)$/
            },
            interface_1: {
                required : true,
                maxlength : 10
            },
            user_1 : {
                required : true,
                maxlength : 100
            },
            pwd_1 : {
                required : true,
                maxlength : 25
            },
            ip_2: {
                required : true,
                pattern : /^(25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.(25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.(25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.(25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)$/
            },
            interface_2: {
                required : true,
                maxlength : 10
            },
            user_2 : {
                required : true,
                maxlength : 100
            },
            pwd_2 : {
                required : true,
                maxlength : 25
            },
            accept_terms : {
                required : true,
            },
            hostname1 : {
                required : true,
                maxlength : 25
            },
            public_ip1 : {
                required : true,
                pattern : /^(25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.(25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.(25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.(25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)$/
            },
            private_ip1 : {
                required : true,
                pattern : /^(25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.(25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.(25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.(25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\/([0-9]|[12][0-9]|3[0-2])$/
            },
            hostname2 : {
                required : true,
                maxlength : 25
            },
            public_ip2 : {
                required : true,
                pattern : /^(25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.(25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.(25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.(25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)$/
            },
            private_ip2 : {
                required : true,
                pattern : /^(25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.(25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.(25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.(25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\/([0-9]|[12][0-9]|3[0-2])$/
            }, 
            lifeTime : {
                required : true,
                range : [60,28800]
            },
            password: {
                required : true,
                maxlength : 100
            },
            portNumber: {
                pattern : /^([0-9]{1,4}|[1-5][0-9]{4}|6[0-4][0-9]{3}|65[0-4][0-9]{2}|655[0-2][0-9]|6553[0-5])$/
            }
        },
        messages : {
            ip_1 : {
                pattern : "Enter an appropriate ip address"
            },
            ip_2 : {
                pattern : "Enter an appropriate ip address"
            },
            accept_terms:{
                required : ""
            },
            public_ip1 :{
                pattern : "Enter an appropriate public ip address"
            },
            private_ip1 :{
                pattern : "Enter an appropriate private ip address"
            },
            public_ip2 :{
                pattern : "Enter an appropriate public ip address"
            },
            private_ip2 :{
                pattern : "Enter an appropriate private ip address"
            },
            lifeTime : {
                range : "Enter a valid lifetime (between 60s and 28800s) "
            },
            portNumber : {
                pattern : "Enter an appropriate port number",
            }
        }
    });

	$("#wizard").steps({
        headerTag: "h4",
        bodyTag: "section",
        transitionEffect: "fade",
        enableAllSteps: true,
        transitionEffectSpeed: 500,
        onStepChanging: function (event, currentIndex, newIndex) { 
            form.validate().settings.ignore = ":disabled,:hidden";
            
            if(form.valid()==true){
                if ( newIndex === 1 ) {
                    $('.steps ul').addClass('step-2');
                } else {
                    $('.steps ul').removeClass('step-2');
                }
                if ( newIndex === 2 ) {
                    $('.steps ul').addClass('step-3');
                } else {
                    $('.steps ul').removeClass('step-3');
                }if ( newIndex === 3 ) {
                    $('.steps ul').addClass('step-4');
                } else {
                    $('.steps ul').removeClass('step-4');
                }if ( newIndex === 4 ) {
                    $('.steps ul').addClass('step-5');
                } else {
                    $('.steps ul').removeClass('step-5');
                }

                if ( newIndex === 5 ) {
                    //console.log("fin")
                   
                    $('.steps ul').addClass('step-6');
                    $('.actions ul').addClass('step-last');
                    mySummary(); 
                } else {
                    
                    //mySummary();
                    $('.steps ul').removeClass('step-6');
                    $('.actions ul').removeClass('step-last');
                }
            }
            return form.valid();
            //return true; 
        },
        onFinishing: function (event, currentIndex)
        {
            form.validate().settings.ignore = ":disabled";
            return form.valid();
        },
        onFinished: function (event, currentIndex)
        {
            $('#form').submit();
        },
        labels: {
            finish: "Send",
            next: "Next",
            previous: "Previous"
        }
    });
    // Custom Steps Jquery Steps
    $('.wizard > .steps li a').click(function(){
    	$(this).parent().addClass('checked');
		$(this).parent().prevAll().addClass('checked');
		$(this).parent().nextAll().removeClass('checked');
    });
    // Custom Button Jquery Steps
    $('.forward').click(function(){
    	$("#wizard").steps('next');
    })
    $('.backward').click(function(){
        $("#wizard").steps('previous');
    })
    // Checkbox
    $('.checkbox-circle label').click(function(){
        $('.checkbox-circle label').removeClass('active');
        $(this).addClass('active');
    })
})

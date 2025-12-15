$(".utm_source").val('');
$(".utm_campaign").val('');
$(".utm_medium").val('');
$(".utm_content").val('');
$(".utm_term").val('');
var QueryString = function () {
   var query_string = {};
   var query = window.location.search.substring(1);
   var vars = query.split("&");
   for (var i = 0; i < vars.length; i++) {
      var pair = vars[i].split("=");
      if (typeof query_string[pair[0]] === "undefined") {
         query_string[pair[0]] = decodeURIComponent(pair[1]);
         if (pair[0] == 'utm_source') {
            $(".utm_source").val(query_string[pair[0]]);
            localStorage.setItem("utm_source", query_string[pair[0]]);
         }
         if (pair[0] == "utm_medium") {
            $(".utm_medium").val(query_string[pair[0]]);
            localStorage.setItem("utm_medium", query_string[pair[0]]);
         }
         if (pair[0] == "utm_campaign") {
            $(".utm_campaign").val(query_string[pair[0]]);
            localStorage.setItem("utm_campaign", query_string[pair[0]]);
         }
         if (pair[0] == "utm_term") {
            $(".utm_term").val(query_string[pair[0]]);
            localStorage.setItem("utm_term", query_string[pair[0]]);
         }
         if (pair[0] == "utm_content") {
            $(".utm_content").val(query_string[pair[0]]);
            localStorage.setItem("utm_content", query_string[pair[0]]);
         }
      } else if (typeof query_string[pair[0]] === "string") {
         var arr = [query_string[pair[0]], decodeURIComponent(pair[1])];
         query_string[pair[0]] = arr;

      } else {
         query_string[pair[0]].push(decodeURIComponent(pair[1]));
      }
   }

}();
$(document).ready(function() {
	//courselist();
  getcourse();
	//statelist();
});
var API = 'https://api.42crm.com/sriherapi/';
// var API = 'http://localhost:4000/sriherapi/';
function getotp()
      {
      	var name = $("#name").val();
      	var email = $("#email").val();
      	var phone_number = $("#phone_number").val();
      	name = name.trim();
      if (name == "") {
      $("#name").focus();
      $("#name").css({
        border: "2px solid #FF5F15",
      });
      $(".btn-form").prop("disabled", false);
      return false;
      } else {
      $("#name").css({
        border: "2px solid #ccc",
      });
      }
      email = email.trim();
      if (email == "") {
      $(".errorEmail").show();
      $("#email").focus();
      $("#email").css({
        border: "2px solid #FF5F15",
      });
      $(".btn-form").prop("disabled", false);
      return false;
      } else {
      if (email != "") {
        $("#email").css({
          border: "2px solid #ccc",
        });
        var atpos = email.indexOf("@");
        var dotpos = email.lastIndexOf(".");
        if (atpos < 1 || dotpos < atpos + 2 || dotpos + 2 >= email.length) {
          $(".errorEmail").show();
          $("#email").focus();
          $(".btn-form").prop("disabled", false);
          return false;
        }
		const emailRegex = /^[a-zA-Z0-9._%\-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
		 if(emailRegex.test(email) == true){
			
		 }
		 else{
			alert("Enter valid Email ID");
            $("#email").focus();
            return false;
		 }
      }
      $(".errorEmail").hide();
      }
      	phone_number = phone_number.trim();
                      if (phone_number == "") {
                      $(".errorMobile").show();
                      $("#phone_number").focus();
                      $("#phone_number").css({border: "2px solid #FF5F15",});
                      $(".btn-form").prop("disabled", false);
                      return false;
                      } else {
                      if (isNaN(phone_number)) {
                      $(".errorMobile").show();
                      $("#phone_number").focus();
                      $(".btn-form").prop("disabled", false);
                      return false;
                      } else {
                      if (phone_number.length > 9 && phone_number.length < 11) {
                      $(".errorMobile").hide();
                      $(".otperrorMobile").hide();
      	$("#otpshow").show();
      	setTimeout(function() {$("#resendotpshow").show();}, 6000);
                      } else {
                      $(".errorMobile").show();
                      $("#phone_number").focus();
      	$("#otpshow").hide();
                      $(".btn-form").prop("disabled", false);
                      return false;
                      }
                      $("#phone_number").css({border: "2px solid #ccc",});
                      }
                      }
      	if(phone_number!=""){
			$(".otpget").hide();
			const apiUrl = API + 'application/sendotp';
       const myHeaders = new Headers();
       myHeaders.append('Content-Type', 'application/json');
        var raw = JSON.stringify({
        "token": 'website_token',
		"mobileNumber":phone_number,
        });
		console.log(raw);
        const options = {
            method: 'POST',
            body: raw,
            headers: myHeaders,
            redirect: 'follow'
        };
        fetch(apiUrl, options)
        .then(res => res.json())
        .then((result) => {
            if (result.status === 200) {
            alert('Otp sent to your mobile Number...');
            $("#otp_number").focus();
            }
			else if (result.status === 300) {
				alert(result.message);
            }
        },
            (error) => { }
    )
      	}
      }
      function resendotp()
      {
      	getotp();
      }
      function otpverified()
      {
      	var phone_number = $("#phone_number").val();
      	phone_number = phone_number.trim();
      	var otp_number = $("#otp_number").val();
      	otp_number = otp_number.trim();
      	if(otp_number!=""){
			
			const apiUrl = API + 'application/checkOtp';
       const myHeaders = new Headers();
       myHeaders.append('Content-Type', 'application/json');
        var raw = JSON.stringify({
        "token": 'website_token',
		"mobileNumber":phone_number,
		"otp":otp_number,
        });
		console.log(raw);
        const options = {
            method: 'POST',
            body: raw,
            headers: myHeaders,
            redirect: 'follow'
        };
        fetch(apiUrl, options)
        .then(res => res.json())
        .then((result) => {
            if (result.status === 200) {
				$(".otpverifieddiv").show();
				$(".otpdesktop").hide();
				$("#otpshow").hide();
            alert('OTP Verified');
	  document.getElementById("phone_number").readOnly = true;
	  document.getElementById("otp_number").readOnly = true;
	  $("#otpget").val(1);
	  //$(".getotpbutton").html('');
      $(".verfiedtext").html('Verified');
      $("#resendotpshow").hide();
            }
			else if (result.status === 300) {
				alert('Invalid OTP!');
      return false;	
            }
        },
            (error) => { }
    )	
      }
      }
function streamlist()
{
	const apiUrl = API + 'application/streamlist';
    const myHeaders = new Headers();
    myHeaders.append('Content-Type', 'application/json');
    var raw = JSON.stringify({
        "token": 'website_token',
        "status": 1,
    });
    const options = {
            method: 'POST',
            body: raw,
            headers: myHeaders,
            redirect: 'follow'
    };
    fetch(apiUrl, options)
        .then(res => res.json())
        .then((result) => {
            if (result.status === 200) {
				stream = result.data;
				//$('#stream').append('<option value="">Select</option>');
				//$('#category').html('');
				//$('#category').append('<option value="">Select Category </option><option value="UG">UG</option><option value="PG">PG</option>');
				$('#course_interest').html('');
				$('#course_interest').append('<option value="" class="form-select-option">Select Course</option>');
                for (var i = 0; stream.length > i; i++) {
                    $('#stream').append('<option class="form-select-option" value="' + stream[i].id + '">' + (stream[i].name) + '</option>');
                }
            }
        },
            (error) => { }
    )
}
function getcategory(domainId)
{
	if(domainId!="")
	{
    $("#enggtext").hide();
	//$('#category').html('');
    //$('#category').append('<option value="">Select Category </option><option value="UG">UG</option><option value="PG">PG</option>');
    $('#course_interest').html('');
    $('#course_interest').append('<option class="form-select-option" value="">Select Course</option>');
    $('#mode').html('');
    $('#mode').append('<option class="form-select-option" value="">Select Mode</option>');	
	const apiUrl = API + 'application/categorylist';
    const myHeaders = new Headers();
    myHeaders.append('Content-Type', 'application/json');
    var raw = JSON.stringify({
        "token": 'website_token',
		"domainId":domainId,
        "status": 1,
    });
    const options = {
            method: 'POST',
            body: raw,
            headers: myHeaders,
            redirect: 'follow'
    };
    fetch(apiUrl, options)
        .then(res => res.json())
        .then((result) => {
            if (result.status === 200) {
				category = result.data;
				$('#category').html('');
				$('#category').append('<option class="form-select-option" value="">Select Category</option>');
                for (var i = 0; category.length > i; i++) {
                    $('#category').append('<option class="form-select-option" value="' + category[i].category + '">' + (category[i].category) + '</option>');
                }
            }
        },
            (error) => { }
    )
	}
	else{
		alert('Select any one domain');
		return false;
    $("#enggtext").hide();
	}
}
function courselist()
{
	const apiUrl = API + 'application/courselist';
    const myHeaders = new Headers();
    myHeaders.append('Content-Type', 'application/json');
    var raw = JSON.stringify({
        "token": 'website_token',
		"streamId":'1,2,3',
        "status": 1,
    });
    const options = {
            method: 'POST',
            body: raw,
            headers: myHeaders,
            redirect: 'follow'
    };
    fetch(apiUrl, options)
        .then(res => res.json())
        .then((result) => {
            if (result.status === 200) {
				course = result.data;
				$('#course_interest').append('<option class="form-select-option" value="">Select</option>');
                for (var i = 0; course.length > i; i++) {
                    $('#course_interest').append('<option class="form-select-option" value="' + course[i].id + '">' + (course[i].name) + '</option>');
                }
            }
        },
            (error) => { }
    )
}
function statelist()
{
	const apiUrl = API + 'application/getstate';
    const myHeaders = new Headers();
    myHeaders.append('Content-Type', 'application/json');
    var raw = JSON.stringify({
        "token": 'website_token',
        "status": 1,
    });
    const options = {
            method: 'POST',
            body: raw,
            headers: myHeaders,
            redirect: 'follow'
    };
    fetch(apiUrl, options)
        .then(res => res.json())
        .then((result) => {
            if (result.status === 200) {
				state = result.data;
				$('#state_from').append('<option class="form-select-option" value="">Select state</option>');
                for (var i = 0; state.length > i; i++) {
                    $('#state_from').append('<option class="form-select-option" value="' + state[i].id + '">' + (state[i].name) + '</option>');
                }
            }
        },
            (error) => { }
    )
}
function getcourse()
{
	var stream = '2';
  var categoryId = 'Undergraduate Programs';
  $("#enggtext").hide();
	if(categoryId!="")
	{
	const apiUrl = API + 'application/getcourse';
    const myHeaders = new Headers();
    myHeaders.append('Content-Type', 'application/json');
    var raw = JSON.stringify({
        "token": 'website_token',
		"categoryId":categoryId,
		"stream":stream,
        "status": 1,
    });
    const options = {
            method: 'POST',
            body: raw,
            headers: myHeaders,
            redirect: 'follow'
    };

    fetch(apiUrl, options)
        .then(res => res.json())
        .then((result) => {
            if (result.status === 200) {
				state = result.data;
				$('#course_interest').html('');
				$('#course_interest').append('<option  class="form-select-option"value="">Select Course</option>');
                for (var i = 0; state.length > i; i++) {
                    $('#course_interest').append('<option class="form-select-option" value="' + state[i].id + '">' + (state[i].name) + '</option>');
                }
            }
        },
            (error) => { }
    )
	}
	else
	{
		$('#course_interest').html('<option class="form-select-option" value="">Select Course</option>');
		$('#mode').html('<option class="form-select-option" value="">Select Mode</option>');
		alert('Select Category...');
		$("#category").focus();
	}
}
function getmode(courseId)
{
  if(courseId=="40")
	{
    $("#enggtext").show();
  }else{
    $("#enggtext").hide();
  }
	var stream ='2';
	var category = 'Undergraduate Programs';
	if(courseId!="")
	{
	const apiUrl = API + 'application/getmode';
    const myHeaders = new Headers();
    myHeaders.append('Content-Type', 'application/json');
    var raw = JSON.stringify({
        "token": 'website_token',
		"courseId":courseId,
		"stream":stream,
		"category":category,
        "status": 1,
    });
    const options = {
            method: 'POST',
            body: raw,
            headers: myHeaders,
            redirect: 'follow'
    };
    fetch(apiUrl, options)
        .then(res => res.json())
        .then((result) => {
            if (result.status === 200) {
				state = result.data;
				$('#mode').html('');
				$('#mode').append('<option class="form-select-option" value="">Select Mode</option>');
                for (var i = 0; state.length > i; i++) {
                    $('#mode').append('<option class="form-select-option" value="' + state[i].mode + '">' + (state[i].mode) + '</option>');
                }
            }
        },
            (error) => { }
    )
	}
	else
	{
		$('#mode').html('<option class="form-select-option" value="">Select Mode</option>');
		alert('Select Course...');
	}
}
function getcity(stateId)
{
	if(stateId!="")
	{
	const apiUrl = API + 'application/getcity';
    const myHeaders = new Headers();
    myHeaders.append('Content-Type', 'application/json');
    var raw = JSON.stringify({
        "token": 'website_token',
		"stateId":stateId,
        "status": 1,
    });
    const options = {
            method: 'POST',
            body: raw,
            headers: myHeaders,
            redirect: 'follow'
    };
    fetch(apiUrl, options)
        .then(res => res.json())
        .then((result) => {
            if (result.status === 200) {
				state = result.data;
				$('#city_from').html('');
				$('#city_from').append('<option class="form-select-option" value="">Select city</option>');
                for (var i = 0; state.length > i; i++) {
                    $('#city_from').append('<option class="form-select-option" value="' + state[i].id + '">' + (state[i].name) + '</option>');
                }
            }
        },
            (error) => { }
    )
	}
	else
	{
		$("#city_from").html('');
		alert('Select State...');
	}
}
function submitapplication() {
     var name = $('#name').val();
     var email = $('#email').val();
     var phone_number = $('#phone_number').val();
     var course_interest = $('#course_interest').val();
     // var city_from = $('#city_from').val();
     // var state_from = $('#state_from').val();
     var device = $('#device').val();
     var deviceName = $('#deviceName').val();
     var stream ='2';
     var category = 'Undergraduate Programs';
     var mode = $('#mode').val();
     var utm_source = $('.utm_source').val();
     var utm_medium = $('.utm_medium').val();
     var utm_term = $('.utm_term').val();
     var utm_content = $('.utm_content').val();
     var utm_campaign = $('.utm_campaign').val();
     var otpget = $('#otpget').val();
     name = name.trim();
     if (name == "") {
       $("#name").focus();
       $("#name").css({
         "border": "2px solid #FF5757"
       });
       return false;
     } else {
       $("#name").css({
         "border": "2px solid rgba(184, 226, 254, 1)"
       });
     }
     email = email.trim();
     if (email == "") {
       $("#email").focus();
       $("#email").css({
         "border": "2px solid red"
       });
       return false;
     } else {
       if (email != "") {
         $("#email").css({"border": "2px solid rgba(184, 226, 254, 1)"});
         var atpos = email.indexOf("@");
         var dotpos = email.lastIndexOf(".");
         if (atpos < 1 || dotpos < atpos + 2 || dotpos + 2 >= email.length) {
           alert("Enter valid Email ID");
           $("#email").focus();
           return false;
         }
		 const emailRegex = /^[a-zA-Z0-9._%\-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
		 if(emailRegex.test(email) == true){
			
		 }
		 else{
			alert("Enter valid Email ID");
            $("#email").focus();
            return false;
		 }
       }
     }
     phone_number = phone_number.trim();
     if (phone_number == "") {
       $("#phone_number").focus();
       $("#phone_number").css({
         "border": "2px solid red"
       });
       return false;
     } else {
       if (isNaN(phone_number)) {
         alert("Enter valid Mobile Number");
         $("#phone_number").focus();
         return false;
       } else {
         if (phone_number.length > 9 && phone_number.length < 12) {
   
         } else {
           alert("Enter valid Mobile Number");
           $("#phone_number").focus();
           return false;
         }
         $("#phone_number").css({
           "border": "2px solid rgba(184, 226, 254, 1)"
         });
       }
     }
	 otpget = otpget.trim();
	 if(otpget == 1){
	 }
	 else{
		 alert('Please verify your mobile number');
		 return false;
	 }
	 stream = stream.trim();
     if (stream == "") {
       $("#stream").focus();
       $("#stream").css({
         "border": "2px solid #FF5757"
       });
       return false;
     } else {
       $("#stream").css({
         "border": "2px solid rgba(184, 226, 254, 1)"
       });
     }
	 category = category.trim();
     if (category == "") {
       $("#category").focus();
       $("#category").css({
         "border": "2px solid #FF5757"
       });
       return false;
     } else {
       $("#category").css({
         "border": "2px solid rgba(184, 226, 254, 1)"
       });
     }
     course_interest = course_interest.trim();
     if (course_interest == "") {
       $("#course_interest").focus();
       $("#course_interest").css({
         "border": "2px solid #FF5757"
       });
       return false;
     } else {
       $("#course_interest").css({
         "border": "2px solid rgba(184, 226, 254, 1)"
       });
     }
	 mode = mode.trim();
     if (mode == "") {
       $("#mode").focus();
       $("#mode").css({
         "border": "2px solid #FF5757"
       });
       return false;
     } else {
       $("#mode").css({
         "border": "2px solid rgba(184, 226, 254, 1)"
       });
     }
     /*city_from = city_from.trim();
     if (city_from == "") {
       $("#city_from").focus();
       $("#city_from").css({
         "border": "2px solid #FF5757"
       });
       return false;
     } else {
       $("#city_from").css({
         "border": "2px solid rgba(184, 226, 254, 1)"
       });
     }
     state_from = state_from.trim();
     if (state_from == "") {
       $("#state_from").focus();
       $("#state_from").css({
         "border": "2px solid #FF5757"
       });
       return false;
     } else {
       $("#state_from").css({
         "border": "2px solid rgba(184, 226, 254, 1)"
       });
     }*/
    //  alert('work')
    //  return false;
     if (name != "" && email != "" && phone_number != "" && stream != "" && category != "" && course_interest != "" && mode != "") {
       $("#successmgs").html('Please wait..');
       $(".sub-button").prop("disabled", true);
	   const apiUrl = API + 'application/addlead';
       const myHeaders = new Headers();
       myHeaders.append('Content-Type', 'application/json');
        var raw = JSON.stringify({
        "token": 'website_token',
		"name":name,
		"emailId":email,
		"mobileNumber":phone_number,
		"utm_source":utm_source,
		"utm_term":utm_term,
		"utm_content":utm_content,
		"utm_medium":utm_medium,
		"utm_campaign":utm_campaign,
		"courseId":course_interest,
		"streamId":stream,
		"category":category,
		"mode":mode,
		"device":device,
		"deviceName":deviceName,
		"channel":'SRIHER',
        "status": 1,
        });
		console.log(raw);
        const options = {
            method: 'POST',
            body: raw,
            headers: myHeaders,
            redirect: 'follow'
        };
        fetch(apiUrl, options)
        .then(res => res.json())
        .then((result) => {
            if (result.status === 200) {
            window.location ='thanks.php?name='+name+'&token='+result.studenttoken;
            }
			else if (result.status === 300) {
				alert(result.message);
            }
        },
            (error) => { }
    )
     }
   }
   {/*function submitapplication() {
    var name = $('#name').val();
    var email = $('#email').val();
    var phone_number = $('#phone_number').val();
    var course_interest = $('#course_interest').val();
    var city_from = $('#city_from').val();
    var state_from = $('#state_from').val();
    var utm_source = $('.utm_source').val();
    var utm_medium = $('.utm_medium').val();
	var device = $('#device').val();
    var deviceName = $('#deviceName').val();
    var utm_term = $('.utm_term').val();
    var utm_content = $('.utm_content').val();
    var utm_campaign = $('.utm_campaign').val();
    name = name.trim();
    if (name == "") {
      $("#name").focus();
      $("#name").css({"border": "2px solid #FF5757"});
      return false;
    } else {
      $("#name").css({"border": "2px solid #9e9e9e"});
    }
    email = email.trim();
    if (email == "") {
      $("#email").focus();
      $("#email").css({"border": "2px solid red"});
      return false;
    } else {
      if (email != "") {
        $("#email").css({"border": "2px solid #9e9e9e"});
        var atpos = email.indexOf("@");
        var dotpos = email.lastIndexOf(".");
        if (atpos < 1 || dotpos < atpos + 2 || dotpos + 2 >= email.length) {
          alert("Enter valid Email ID");
		  $("#email").css({"border": "2px solid red"});
          $("#email").focus();
          return false;
        }
      }
    }
	$("#email").css({"border": "2px solid #9e9e9e"});
    phone_number = phone_number.trim();
    if (phone_number == "") {
      $("#phone_number").focus();
      $("#phone_number").css({"border": "2px solid red"});
      return false;
    } else {
      if (isNaN(phone_number)) {
        alert("Enter valid Mobile Number");
        $("#phone_number").focus();
        return false;
      } else {
        if (phone_number.length > 9 && phone_number.length < 12) {
        } else {
          alert("Enter valid Mobile Number");
          $("#phone_number").focus();
          return false;
        }
        $("#phone_number").css({"border": "2px solid rgba(0, 0, 0, 0.1)"});
      }
    }
    course_interest = course_interest.trim();
    if (course_interest == "") {
      $("#course_interest").focus();
      $("#course_interest").css({"border": "2px solid #FF5757"});
      return false;
    } else {
      $("#course_interest").css({"border": "2px solid #9e9e9e"});
    }
	state_from = state_from.trim();
    if (state_from == "") {
      $("#state_from").focus();
      $("#state_from").css({"border": "2px solid #FF5757"});
      return false;
    } else {
      $("#state_from").css({"border": "2px solid #9e9e9e"});
    }
    city_from = city_from.trim();
    if (city_from == "") {
      $("#city_from").focus();
      $("#city_from").css({"border": "2px solid #FF5757"});
      return false;
    } else {
      $("#city_from").css({"border": "2px solid #9e9e9e"});
    }
    
    if (name != "" && email != "" && phone_number != "" && course_interest != "" && city_from != "" && state_from != "") {
      $("#successmgs").show();
      $(".sub-button").addClass("disabled");
      $(".sub-button").prop("disabled", true);
      $.ajax({
        url: "https://www.42crm.in/REC2022/recajax.php",
        type: 'POST',
        data: {
          email: email,
          name: name,
          course_interest: course_interest,
          city_from: city_from,
          state_from: state_from,
          utm_source: utm_source,
          phone_number: phone_number,
          utm_term: utm_term,
          utm_content: utm_content,
          utm_medium: utm_medium,
          utm_campaign: utm_campaign
        },
        success: function(datas) {
          $("#result").html(datas);
        }
      });
    }
  }*/}

    $().ready(function() {
      $('.slick-carousel').slick({
        arrows: true,
        speed: 500,
        centerPadding: "0px",
        dots: true,
        slidesToShow: 1,
        autoplay:true,
        infinite: true,
        autoplaySpeed: 6000,
      });
    });
	var res = "Other";
            var userAgent = navigator.userAgent.toLowerCase();
			//document.write(userAgent);
			//document.write('<br>');
            var Android = userAgent.indexOf("mobile") > -1;
			if(Android) {
                res = "Mobile";
            }
			var Tablet = userAgent.indexOf("ipad") > -1;
			if(Tablet) {
                res = "Tablet";
            }
			var Tablet = userAgent.indexOf("tablet") > -1;
			if(Tablet) {
                res = "Tablet";
            }
			var Desktop = userAgent.indexOf("windows") > -1;
			if(Desktop) {
                res = "Desktop";
            }
            $("#device").val(res);
			const getUA = () => {
            let device = "Unknown";
            const ua = {
             "Generic Linux": /Linux/i,
             "Android": /Android/i,
             "BlackBerry": /BlackBerry/i,
             "Bluebird": /EF500/i,
             "Chrome OS": /CrOS/i,
             "Datalogic": /DL-AXIS/i,
             "Honeywell": /CT50/i,
             "iPad": /iPad/i,
             "iPhone": /iPhone/i,
             "iPod": /iPod/i,
             "macOS": /Macintosh/i,
             "Windows": /IEMobile|Windows/i,
             "Zebra": /TC70|TC55/i,
            }
            Object.keys(ua).map(v => navigator.userAgent.match(ua[v]) && (device = v));
	        $("#deviceName").val(device);
}
getUA();
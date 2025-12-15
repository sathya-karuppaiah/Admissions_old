$(".utm_source").val("");
$(".utm_campaign").val("");
$(".utm_medium").val("");
$(".utm_content").val("");
$(".utm_term").val("");
$(".headingOnecolor").css("background-color", "#BF2228");
$(".headOnecolor").css("color", "#FFFFFF");
function addclasss(id) {
  $(".headingcolor").css("background-color", "transparent");
  $(".headcolor").css("color", "#000000");
  if (id == "1") {
    $(".headingOnecolor").css("background-color", "#BF2228");
    $(".headOnecolor").css("color", "#FFFFFF");
  }
}
function firstselect(first) {
  //alert(first);
  if (first == "1") {
    $("#secondvalue").html(
      '<option value="">Select</option><option value="1">M.PHARMACY</option><option value="2">PHARM.D. POST BACCALAUREATE</option>'
    );
  }
  else if (first == "2") {
    $("#secondvalue").html(
      '<option value="">Select</option><option value="1">M.Phil. Clinical Psychology</option><option value="2">M.Sc. Medical Laboratory Technology</option><option value="3">M.Sc. Neuroscience</option><option value="4">M.Sc. Medical Imaging Technology</option><option value="5">M.Sc. Renal Sciences & Dialysis Technology</option><option value="6">M.Sc. Urology Technology</option><option value="7">M.Sc. Clinical Nutrition</option><option value="8">M.Sc. Trauma Care Management</option><option value="9">M.Sc.  Perfusion Technology</option><option value="10">M.Sc. Applied Child Development</option><option value="11">M.Sc. Biomedical Sciences</option><option value="12">M.Optom. Master of Optometry</option><option value="13">M.Sc. Clinical Embryology</option><option value="14">M.Sc. Medical Psychology</option><option value="15">M.Sc. Clinical Psychology</option><option value="16">M.Sc. Counselling Psychology</option><option value="17">M.Sc. Clinical Immunology</option><option value="18">M.Sc. Respiratory Therapy</option><option value="19">M.Sc. Mind-Body and Life Style Science</option><option value="20">M.Sc. Stem Cell and Regenerative Biology</option><option value="21">M.Sc. Forensic Science</option><option value="22">M.Sc. Cardiovascular Sciences - Echocardiography</option><option value="23">M.Sc. Critical Care Technology</option><option value="24">Post Graduate Diploma In Clinical Embryology</option><option value="25">M.Sc. Physician Associate</option><option value="26">Master of Social Work (MSW)</option>'
    );
  }
  else if (first == "3") {
    $("#secondvalue").html(
      '<option value="">Select</option><option value="1">SPEECH - LANGUAGE PATHOLOGY</option>'
    );
  }
  else if (first == "4") {
    $("#secondvalue").html(
      '<option value="">Select</option><option value="1">M.Sc. Nursing</option><option value="2">M.Sc. Nursing Nurse Practitioner in Critical Care</option>'
    );
  }
  else if (first == "5") {
    $("#secondvalue").html(
      '<option value="">Select</option><option value="1">MBA HOSPITAL AND HEALTH SYSTEMS MANAGEMENT</option>'
    );
  }
  else if (first == "6") {
    $("#secondvalue").html(
      '<option value="">Select</option><option value="1">MASTERS OF PHYSIOTHERAPY</option>'
    );
  }
  else if (first == "7") {
    $("#secondvalue").html(
      '<option value="">Select</option><option value="1">M.Sc. Medical Anatomy</option><option value="2">M.Sc. Medical Physiology</option><option value="3">M.Sc. Medical Biochemistry</option><option value="4">M.Sc. Medical Microbiology and Applied Molecular Biology</option>'
    );
  }
  else if (first == "8") {
    $("#secondvalue").html(
      '<option value="">Select</option><option value="1">M.Sc. Biomedical Sciences</option>'
    );
  }
  else if (first == "9") {
    $("#secondvalue").html(
      '<option value="">Select</option><option value="1">M.P.H. Master of Public Health</option>'
    );
  }
  else if (first == "10") {
    $("#secondvalue").html(
      '<option value="">Select</option><option value="1">M.Sc. Clinical Research</option>'
    );
  }
  else if (first == "11") {
    $("#secondvalue").html(
      '<option value="">Select</option><option value="1">MPT Sports</option><option value="2">M.Sc. Sports and Exercise Psychology</option>'
    );
  }
  else if (first == "12") {
    $("#secondvalue").html(
      '<option value="">Select</option><option value="1">OCCUPATIONAL THERAPY</option>'
    );
  }
  else if (first == "13") {
    $("#secondvalue").html(
      '<option value="">Select</option><option value="1">ENGINEERING</option>'
    );
  }
  else{
    $("#secondvalue").html(
      '<option value="">Select</option>'
    );
  }
}
function secondselect(second) {
  var firstvalue = $("#firstvalue").val();
  if (firstvalue != "" && second != "") {
    $(".showall").hide();
    if (firstvalue == "1" && second == "1") {
      $(".firstoption").show();
    }
    if (firstvalue == "1" && second == "2") {
      $(".secondoption").show();
    }
    if (firstvalue == "1" && second == "3") {
      $(".thridoption").show();
    }
    if (firstvalue == "2" && second == "1") {
      $(".first1option").show();
    }
    if (firstvalue == "2" && second == "2") {
      $(".second1option").show();
    }
    if (firstvalue == "2" && second == "3") {
      $(".thrid1option").show();
    }
    if (firstvalue == "2" && second == "4") {
      $(".option4").show();
    }
    if (firstvalue == "2" && second == "5") {
      $(".option5").show();
    }
    if (firstvalue == "2" && second == "6") {
      $(".option6").show();
    }
    if (firstvalue == "2" && second == "7") {
      $(".option7").show();
    }
    if (firstvalue == "2" && second == "8") {
      $(".option8").show();
    }
    if (firstvalue == "2" && second == "9") {
      $(".option9").show();
    }
    if (firstvalue == "2" && second == "10") {
      $(".option10").show();
    }
    if (firstvalue == "2" && second == "11") {
      $(".option11").show();
    }
    if (firstvalue == "2" && second == "12") {
      $(".option12").show();
    }
    if (firstvalue == "2" && second == "13") {
      $(".option13").show();
    }
    if (firstvalue == "2" && second == "14") {
      $(".option14").show();
    }
    if (firstvalue == "2" && second == "15") {
      $(".option15").show();
    }
    if (firstvalue == "2" && second == "16") {
      $(".option16").show();
    }
    if (firstvalue == "2" && second == "17") {
      $(".option17").show();
    }
    if (firstvalue == "2" && second == "18") {
      $(".option18").show();
    }
    if (firstvalue == "2" && second == "19") {
      $(".option19").show();
    }
    if (firstvalue == "2" && second == "20") {
      $(".option20").show();
    }
    if (firstvalue == "2" && second == "21") {
      $(".option21").show();
    }
    if (firstvalue == "2" && second == "22") {
      $(".option22").show();
    }
    if (firstvalue == "2" && second == "23") {
      $(".option23").show();
    }
    if (firstvalue == "2" && second == "24") {
      $(".option24").show();
    }
    if (firstvalue == "2" && second == "25") {
      $(".option25").show();
    }
    if (firstvalue == "2" && second == "26") {
      $(".option26").show();
    }
    if (firstvalue == "3" && second == "1") {
      $(".option31").show();
    }
    if (firstvalue == "4" && second == "1") {
      $(".option41").show();
    }
    if (firstvalue == "4" && second == "2") {
      $(".option42").show();
    }
    if (firstvalue == "5" && second == "1") {
      $(".option51").show();
    }
    if (firstvalue == "6" && second == "1") {
      $(".option61").show();
    }
    if (firstvalue == "7" && second == "1") {
      $(".option71").show();
    }
    if (firstvalue == "7" && second == "2") {
      $(".option72").show();
    }
    if (firstvalue == "7" && second == "3") {
      $(".option73").show();
    }
    if (firstvalue == "7" && second == "4") {
      $(".option74").show();
    }
    if (firstvalue == "8" && second == "1") {
      $(".option81").show();
    }
    if (firstvalue == "9" && second == "1") {
      $(".option91").show();
    }
    if (firstvalue == "10" && second == "1") {
      $(".option101").show();
    }
    if (firstvalue == "11" && second == "1") {
      $(".option111").show();
    }
    if (firstvalue == "11" && second == "2") {
      $(".option112").show();
    }
    if (firstvalue == "12" && second == "1") {
      $(".option121").show();
    }
    if (firstvalue == "13" && second == "1") {
      $(".option131").show();
    }
  } else {
    alert("select option");
  }
}
var QueryString = (function () {
  var query_string = {};
  var query = window.location.search.substring(1);
  var vars = query.split("&");
  for (var i = 0; i < vars.length; i++) {
    var pair = vars[i].split("=");
    if (typeof query_string[pair[0]] === "undefined") {
      query_string[pair[0]] = decodeURIComponent(pair[1]);
      if (pair[0] == "utm_source") {
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
})();
$(document).ready(function () {
  //courselist();
  streamlist();
  //statelist();
});
var API = "https://api.42crm.com/sriherapi/";
//var API = 'http://localhost:4000/sriherapi/';
function getotp() {
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
      const emailRegex =
        /^[a-zA-Z0-9]+(\.[a-zA-Z0-9]+)*@[a-zA-Z0-9]+(\.[a-zA-Z0-9]+)+$/;
      if (emailRegex.test(email) == true) {
      } else {
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
    $("#phone_number").css({ border: "2px solid #FF5F15" });
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
        setTimeout(function () {
          $("#resendotpshow").show();
        }, 6000);
      } else {
        $(".errorMobile").show();
        $("#phone_number").focus();
        $("#otpshow").hide();
        $(".btn-form").prop("disabled", false);
        return false;
      }
      $("#phone_number").css({ border: "2px solid #ccc" });
    }
  }
  if (phone_number != "") {
    $(".otpget").hide();
    const apiUrl = API + "pgapplication/sendotp";
    const myHeaders = new Headers();
    myHeaders.append("Content-Type", "application/json");
    var raw = JSON.stringify({
      token: "website_token",
      mobileNumber: phone_number,
    });
    console.log(raw);
    const options = {
      method: "POST",
      body: raw,
      headers: myHeaders,
      redirect: "follow",
    };
    fetch(apiUrl, options)
      .then((res) => res.json())
      .then(
        (result) => {
          if (result.status === 200) {
            alert("Otp sent to your mobile Number...");
            $("#otp_number").focus();
          } else if (result.status === 300) {
            alert(result.message);
          }
        },
        (error) => {}
      );
  }
}
function resendotp() {
  getotp();
}
function otpverified() {
  var phone_number = $("#phone_number").val();
  phone_number = phone_number.trim();
  var otp_number = $("#otp_number").val();
  otp_number = otp_number.trim();
  if (otp_number != "") {
    const apiUrl = API + "pgapplication/checkOtp";
    const myHeaders = new Headers();
    myHeaders.append("Content-Type", "application/json");
    var raw = JSON.stringify({
      token: "website_token",
      mobileNumber: phone_number,
      otp: otp_number,
    });
    console.log(raw);
    const options = {
      method: "POST",
      body: raw,
      headers: myHeaders,
      redirect: "follow",
    };
    fetch(apiUrl, options)
      .then((res) => res.json())
      .then(
        (result) => {
          if (result.status === 200) {
            $(".otpverifieddiv").show();
            $(".otpdesktop").hide();
            $("#otpshow").hide();
            alert("OTP Verified");
            document.getElementById("phone_number").readOnly = true;
            document.getElementById("otp_number").readOnly = true;
            $("#otpget").val(1);
            //$(".getotpbutton").html('');
            $(".verfiedtext").html("Verified");
            $("#resendotpshow").hide();
          } else if (result.status === 300) {
            alert("Invalid OTP!");
            return false;
          }
        },
        (error) => {}
      );
  }
}
function streamlist() {
  const apiUrl = API + "pgapplication/streamlist";
  const myHeaders = new Headers();
  myHeaders.append("Content-Type", "application/json");
  var raw = JSON.stringify({
    token: "website_token",
    status: 1,
  });
  const options = {
    method: "POST",
    body: raw,
    headers: myHeaders,
    redirect: "follow",
  };
  fetch(apiUrl, options)
    .then((res) => res.json())
    .then(
      (result) => {
        if (result.status === 200) {
          stream = result.data;
          //$('#stream').append('<option value="">Select</option>');
          //$('#category').html('');
          //$('#category').append('<option value="">Select Category </option><option value="UG">UG</option><option value="PG">PG</option>');
          $("#course_interest").html("");
          $("#course_interest").append(
            '<option value="" class="form-select-option">Select Course</option>'
          );
          for (var i = 0; stream.length > i; i++) {
            $("#stream").append(
              '<option class="form-select-option" value="' +
                stream[i].id +
                '">' +
                stream[i].name +
                "</option>"
            );
          }
        }
      },
      (error) => {}
    );
}
function getcategory(domainId) {
  if (domainId != "") {
    $("#enggtext").hide();
    //$('#category').html('');
    //$('#category').append('<option value="">Select Category </option><option value="UG">UG</option><option value="PG">PG</option>');
    $("#course_interest").html("");
    $("#course_interest").append(
      '<option class="form-select-option" value="">Select Course</option>'
    );
    $("#mode").html("");
    $("#mode").append(
      '<option class="form-select-option" value="">Select Mode</option>'
    );
    const apiUrl = API + "pgapplication/categorylist";
    const myHeaders = new Headers();
    myHeaders.append("Content-Type", "application/json");
    var raw = JSON.stringify({
      token: "website_token",
      domainId: domainId,
      status: 1,
    });
    const options = {
      method: "POST",
      body: raw,
      headers: myHeaders,
      redirect: "follow",
    };
    fetch(apiUrl, options)
      .then((res) => res.json())
      .then(
        (result) => {
          if (result.status === 200) {
            category = result.data;
            $("#category").html("");
            $("#category").append(
              '<option class="form-select-option" value="">Select Category</option>'
            );
            for (var i = 0; category.length > i; i++) {
              $("#category").append(
                '<option class="form-select-option" value="' +
                  category[i].category +
                  '">' +
                  category[i].category +
                  "</option>"
              );
            }
          }
        },
        (error) => {}
      );
  } else {
    $("#course_interest").html("");
    $("#course_interest").append(
      '<option class="form-select-option" value="">Select Course</option>'
    );
    $("#mode").html("");
    $("#mode").append(
      '<option class="form-select-option" value="">Select Mode</option>'
    );
    alert("Select any one domain");
    return false;
  }
}
function getcourse(streamId) {
  var categoryId = "Postgraduate Programs";
  var stream = $("#stream").val();
  $("#enggtext").hide();
  if (streamId != "") {
    const apiUrl = API + "pgapplication/getcourse";
    const myHeaders = new Headers();
    myHeaders.append("Content-Type", "application/json");
    var raw = JSON.stringify({
      token: "website_token",
      categoryId: categoryId,
      stream: streamId,
      status: 1,
    });
    const options = {
      method: "POST",
      body: raw,
      headers: myHeaders,
      redirect: "follow",
    };

    fetch(apiUrl, options)
      .then((res) => res.json())
      .then(
        (result) => {
          if (result.status === 200) {
            state = result.data;
            $("#course_interest").html("");
            $("#course_interest").append(
              '<option  class="form-select-option"value="">Select Course</option>'
            );
            for (var i = 0; state.length > i; i++) {
              $("#course_interest").append(
                '<option class="form-select-option" value="' +
                  state[i].id +
                  '">' +
                  state[i].name +
                  "</option>"
              );
            }
          }
        },
        (error) => {}
      );
  } else {
    $("#course_interest").html(
      '<option class="form-select-option" value="">Select Course</option>'
    );
    $("#mode").html(
      '<option class="form-select-option" value="">Select Mode</option>'
    );
    alert("Select Domain...");
    $("#stream").focus();
  }
}
function getmode(courseId) {
  var stream = $("#stream").val();
  var category = "Postgraduate Programs";
  if (courseId != "") {
    const apiUrl = API + "pgapplication/getmode";
    const myHeaders = new Headers();
    myHeaders.append("Content-Type", "application/json");
    var raw = JSON.stringify({
      token: "website_token",
      courseId: courseId,
      stream: stream,
      category: category,
      status: 1,
    });
    const options = {
      method: "POST",
      body: raw,
      headers: myHeaders,
      redirect: "follow",
    };
    fetch(apiUrl, options)
      .then((res) => res.json())
      .then(
        (result) => {
          if (result.status === 200) {
            state = result.data;
            $("#mode").html("");
            $("#mode").append(
              '<option class="form-select-option" value="">Select Mode</option>'
            );
            for (var i = 0; state.length > i; i++) {
              $("#mode").append(
                '<option class="form-select-option" value="' +
                  state[i].mode +
                  '">' +
                  state[i].mode +
                  "</option>"
              );
            }
          }
        },
        (error) => {}
      );
  } else {
    $("#mode").html(
      '<option class="form-select-option" value="">Select Mode</option>'
    );
    alert("Select Course...");
  }
}

function submitapplication() {
  var name = $("#name").val();
  var email = $("#email").val();
  var phone_number = $("#phone_number").val();
  var course_interest = $("#course_interest").val();
  // var city_from = $('#city_from').val();
  // var state_from = $('#state_from').val();
  var device = $("#device").val();
  var deviceName = $("#deviceName").val();
  var stream = $("#stream").val();
  var category = "Postgraduate Programs";
  var mode = $("#mode").val();
  var utm_source = $(".utm_source").val();
  var utm_medium = $(".utm_medium").val();
  var utm_term = $(".utm_term").val();
  var utm_content = $(".utm_content").val();
  var utm_campaign = $(".utm_campaign").val();
  var otpget = $("#otpget").val();
  name = name.trim();
  if (name == "") {
    $("#name").focus();
    $("#name").css({
      border: "2px solid #FF5757",
    });
    return false;
  } else {
    $("#name").css({
      border: "2px solid rgba(184, 226, 254, 1)",
    });
  }
  email = email.trim();
  if (email == "") {
    $("#email").focus();
    $("#email").css({
      border: "2px solid red",
    });
    return false;
  } else {
    if (email != "") {
      $("#email").css({ border: "2px solid rgba(184, 226, 254, 1)" });
      var atpos = email.indexOf("@");
      var dotpos = email.lastIndexOf(".");
      if (atpos < 1 || dotpos < atpos + 2 || dotpos + 2 >= email.length) {
        alert("Enter valid Email ID");
        $("#email").focus();
        return false;
      }
      const emailRegex =
        /^[a-zA-Z0-9]+(\.[a-zA-Z0-9]+)*@[a-zA-Z0-9]+(\.[a-zA-Z0-9]+)+$/;
      if (emailRegex.test(email) == true) {
      } else {
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
      border: "2px solid red",
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
        border: "2px solid rgba(184, 226, 254, 1)",
      });
    }
  }
  otpget = otpget.trim();
  if (otpget == 1) {
  } else {
    alert("Please verify your mobile number");
    return false;
  }
  stream = stream.trim();
  if (stream == "") {
    $("#stream").focus();
    $("#stream").css({
      border: "2px solid #FF5757",
    });
    return false;
  } else {
    $("#stream").css({
      border: "2px solid rgba(184, 226, 254, 1)",
    });
  }
  course_interest = course_interest.trim();
  if (course_interest == "") {
    $("#course_interest").focus();
    $("#course_interest").css({
      border: "2px solid #FF5757",
    });
    return false;
  } else {
    $("#course_interest").css({
      border: "2px solid rgba(184, 226, 254, 1)",
    });
  }
  mode = mode.trim();
  if (mode == "") {
    $("#mode").focus();
    $("#mode").css({
      border: "2px solid #FF5757",
    });
    return false;
  } else {
    $("#mode").css({
      border: "2px solid rgba(184, 226, 254, 1)",
    });
  }
  if (
    name != "" &&
    email != "" &&
    phone_number != "" &&
    stream != "" &&
    category != "" &&
    course_interest != "" &&
    mode != ""
  ) {
    $("#successmgs").html("Please wait..");
    $(".sub-button").prop("disabled", true);
    const apiUrl = API + "pgapplication/addlead";
    const myHeaders = new Headers();
    myHeaders.append("Content-Type", "application/json");
    var raw = JSON.stringify({
      token: "website_token",
      name: name,
      emailId: email,
      mobileNumber: phone_number,
      utm_source: utm_source,
      utm_term: utm_term,
      utm_content: utm_content,
      utm_medium: utm_medium,
      utm_campaign: utm_campaign,
      courseId: course_interest,
      streamId: stream,
      category: category,
      mode: mode,
      device: device,
      deviceName: deviceName,
      channel: "SRIHER",
      status: 1,
    });
    console.log(raw);
    const options = {
      method: "POST",
      body: raw,
      headers: myHeaders,
      redirect: "follow",
    };
    fetch(apiUrl, options)
      .then((res) => res.json())
      .then(
        (result) => {
          if (result.status === 200) {
            window.location =
              "thanks.php?name=" + name + "&token=" + result.studenttoken;
          } else if (result.status === 300) {
            alert(result.message);
          }
        },
        (error) => {}
      );
  }
}
{
  /*function submitapplication() {
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
  }*/
}

$().ready(function () {
  $(".slick-carousel").slick({
    arrows: true,
    speed: 500,
    centerPadding: "0px",
    dots: true,
    slidesToShow: 1,
    autoplay: true,
    infinite: true,
    autoplaySpeed: 6000,
  });
});
var res = "Other";
var userAgent = navigator.userAgent.toLowerCase();
//document.write(userAgent);
//document.write('<br>');
var Android = userAgent.indexOf("mobile") > -1;
if (Android) {
  res = "Mobile";
}
var Tablet = userAgent.indexOf("ipad") > -1;
if (Tablet) {
  res = "Tablet";
}
var Tablet = userAgent.indexOf("tablet") > -1;
if (Tablet) {
  res = "Tablet";
}
var Desktop = userAgent.indexOf("windows") > -1;
if (Desktop) {
  res = "Desktop";
}
$("#device").val(res);
const getUA = () => {
  let device = "Unknown";
  const ua = {
    "Generic Linux": /Linux/i,
    Android: /Android/i,
    BlackBerry: /BlackBerry/i,
    Bluebird: /EF500/i,
    "Chrome OS": /CrOS/i,
    Datalogic: /DL-AXIS/i,
    Honeywell: /CT50/i,
    iPad: /iPad/i,
    iPhone: /iPhone/i,
    iPod: /iPod/i,
    macOS: /Macintosh/i,
    Windows: /IEMobile|Windows/i,
    Zebra: /TC70|TC55/i,
  };
  Object.keys(ua).map((v) => navigator.userAgent.match(ua[v]) && (device = v));
  $("#deviceName").val(device);
};
getUA();

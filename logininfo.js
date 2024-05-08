function validateForm() 
{
  var phone= document.getElementById("phone").value;
  var phone2= document.getElementById("phone2").value;
  let isPhoneValidated = validatePhoneNumber(phone);
  //let isPhoneValidated2 = validatePhoneNumber(phone2)
  //let isEmailValidated =  validateEmail();
  let isPasswordValidated = validatepassword() 
  let isSubmitForm = SubmitForm()
 // let isCourseValied = validatedCourse ()
 // let isuntyValied = validatedUnit ()
 // let isAjaxcall = ajaxcall ()
  //let isAjaxheader = ajaxheader ()



  if(  isEmailValidated && isPasswordValidated && isSubmitForm && isPhoneValidated  && isPhoneValidated2 && isCourseValied &&  isuntyValied && isAjaxcall && isAjaxheader ){
    return true;
  }else{
    return false;
  }

   
}

function validatePhoneNumber(phone){
  //  var phone= document.getElementById("phone").value;
    console.log("phone value is: ", phone)
    let plus = phone.startsWith("+")
    if (plus){  
      console.log("Phone Length", phone.length)
      let phonelength = phone.length;
      if (phonelength < 10){ 
          alert ("Phone Number is too short")
          return false;
      } else if ( phonelength >15) {
          alert("Phone Number is too Long")
          return false;
      } else {
          return true
      }
      }  
    else{
      alert ("Phone Must Start With +(Counrty Code)")
      return false;
    }  

}


function validateEmail(){
    var stemail = document.getElementById("stemail").value;
    console.log("Email Value is: ", stemail)
    let valid = stemail.includes("@ .")
    if (valid ){
        return true;
    } else {
      alert("Email must contain @ .")
        return false;
    }
}

function validatepassword() {
  var password1 = document.getElementById("pswd1").value;
  var password2 = document.getElementById("psw").value;
  if (password1 == password2){
    console.log("Password Length is :", password1.length)
    let pswdlength = password1.length;
    if (pswdlength<6){
      alert("Password Must be of More than 6 characters")
      return false;
    }
    else {
      return true;
    }

  }
  else{
    alert ("Password Must be The same")
  }

}



function validatedCourse () {
let coursesArray = document.getElementsByClassName("cors");
//console.log("selected Course is :", coursesArray)
for (let i=0; i<coursesArray.length; i++){ 
  let course = coursesArray[i] 
  if (course.checked) { 
  console.log("selected " +course.value +" By Alex")
  return true;
  }

}
alert ("Please Select a Course to Enroll In")
return false;
}

function validatedUnit () {
  let coursesArray = document.getElementsByClassName("unty");
  var count = 0
  for (let i=0; i<coursesArray.length; i++){ 
    let course = coursesArray[i] 
    if (course.checked) { 
    console.log("selected " +course.value +" By Alex")
    count++;

    //return ;
    }
  
  }
  if (count>0) {
    return true
  }
  
  alert ("Please Select Your Preffered Unites")
  return false;
  }


  var show = true;

      function UnitesSelect() {
          var checkboxes = 
              document.getElementById("checkBoxes");

          if (show) {
              checkboxes.style.display = "block";
              show = false;
          } else {
              checkboxes.style.display = "none";
              show = true
          }
      }

      function ShowPassword() {
        var x = document.getElementById("pswd1");
        var x = document.getElementById("pswd2");
        if (x.type === "password") {
          x.type = "text";
        } else {
          x.type = "password";
        }
      }

      function SubmitForm() {

        let Email = document.getElementById ("stemail").value
        let password = document.getElementById ("pswd2").value

        if (Email == "" || password == "") {
              alert("Ensure you input a value in both fields!");
              return false;
            } else {
              alert("This form has been successfully submitted!");
              console.log("The User Email is: " +Email);
              console.log("The Password is:" +password)
              
              
            }
            return true;
          }
          
        /*  function ajaxcall () {
            // (B1) GET FORM DATA
            var data = new FormData(document.getElementById("myform"));
           
            // (B2) AJAX CALL
            var xhr = new XMLHttpRequest();
            xhr.open("POST", "ajax.php");
            xhr.onload = function () {
              document.getElementById("txtHint").innerHTML=this.responseText;
            };
            xhr.send(data);
            return false;
          }



          function  ajaxheader() {
              const xhr = new XMLHttpRequest();
              xhr.open("GET", "ajax.php");
              xhr.setRequestHeader("mkdir", "makedirectory");
              xhr.setRequestHeader("Content-Type", "text/xml");
              xhr.onreadystatechange = ()=>{

                console.log("regform.txt")
              };
              xhr.send("<person><name>Arun</name></person>");

          }
          */

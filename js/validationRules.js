
$(function()
	{ 
		//alert('validating form');
		$('#submit').click(function(){
		 alert('Validating form b4 submitting...');
            var numErrors = 0;
		 $('input[type="text"]').each(function(){
             if($(this).attr('name') == 'employeeId' && $(this).val() == "")
             {
                 $(this).val('auto_generate_Id');
                 alert('Tet set to empty');
             }
			  if($(this).val() == "")
			  {
				$(this).addClass("invalid");
                  var elemName = $(this).attr("name");
				//alert( elemName + ' is a Required field');

                  $(this).closest('tr').after('<tr><td><h5 style="color: red;">Error:</h5></td><td>'+ '<h5 style="color: red;">' +elemName + ' cannot be blank'+
                   '</h5>'+ '</td></tr>');
                  numErrors++
			  }
			else
			 {
				$(this).addClass("valid");
			 }
		 });
		// var _input = $().val();
		 if(numErrors)
            return false;
		 else
            return true;



		});
	}
);

/*$(function()
{
// define an empty JSON object
    var JQUERY4U = {};
//declare an object property called UTIL
    JQUERY4U.UTIL =
    {//create an anonymous function to validate the form
        setupFormValidation: function()
		{
			$("#biodataform").validate(
			{
              rules: {
                  fName: "required",
                  oName: "required",
                  dateOfBirth: "required",
                  placeOfBirth: "required",
                  mobileNo1: "required",
                  email: "required",
                  hireDate: "required",
                  jobId: "required",
                  departmentId: "required",
                  managerId: "required",
                  employee_pic: "required",
                  nextOfkinFName: "required",
                  nextOfkinSName: "required",
                  nextOfKinMobile1: "required",
				  nextOfKinEmail: "required",
				  nextOfKinResidence: "required",
				  nextOfKinEmail: "required",
				  nextOfKinEmail: "required",
				  nextOfKinEmail: "required",
				  nextOfKinEmail: "required",
                  employeeId: {
                      required: true,
                      minlength: 5
                  },
                  
                  email: {
                      required: true,
                      email: true
                  },
              messages: {
				  fName: "Please enter the firstname",
                  oName: "Please enter the othername",
                  dateOfBirth: "Please enter the lastname",
                  placeOfBirth: "Please enter the place of birth",
                  mobileNo1: "Please enter at least 1 mobile number",
                  email: "Please enter the email address",
                  hireDate: "Please enter hiredate ",
                  jobId: "Please select Job Id",
                  departmentId: "Please select department Id",
                  managerId: "Please enter the manager's Id",
                  employee_pic: "Please upload a recent picture",
                  nextOfkinFName: "This field is Mandatory",
                  nextOfkinSName: "This field is Mandatory",
                  nextOfKinMobile1: "This field is Mandatory",
				  nextOfKinEmail: "This field is Mandatory",
				  nextOfKinResidence: "This field is Mandatory",
                  email: "Please enter a valid email address",
                 // agree: "Please accept our policy",
                 // topic: "Please select at least 2 topics"
               }
			 },
			 submitHandler: function(form) {

                    form.submit();
                }
			});
		}
	}
	
	 //when the dom has loaded setup form validation rules
    $(function() {
	//call the form validation function defined earlier
        JQUERY4U.UTIL.setupFormValidation();
    });
}); //(jQuery, window, document)*/

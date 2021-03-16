
$(document).ready(function(){
    $("#submit").click(function(){
       
    var name = $("#name").val();
    var email = $("#email").val();
    var mobile = $("#mobile").val();
    // Returns successful data submission message when the entered information is stored in database.
    var dataString = 'name1='+ name + '&email1='+ email  + '&mobile1='+ mobile;
    if(name==''||email==''||mobile=='')
    {
    alert("Please Fill All Fields");
    }
    else
    {
    // AJAX Code To Submit Form.
    $.ajax({
    type: "POST",
    url: "form1.php",
    data: dataString,
    cache: false,
    success: function(result){
    alert(result);
    window.location.replace("http://localhost:8080/inter/get.php");
    }
    });
    }
    return false;
    alert(name);
    });
    });
    
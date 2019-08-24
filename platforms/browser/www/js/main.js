// var host = "http://localhost:8081";
var host = "http://10.200.78.79:3000";



function sendData() {
    var email = document.getElementById('email').value,
        password = document.getElementById('password').value;

    if (isEmpty(a)) {
        console.log("email empty");
    } else if (isEmail(email)) {
        console.log("email correct");
    } else {
        console.log("email invalid");
    }

    // $.ajax({
    //     url: host + "/CC_APIS/apis/Client_Login.php",
    //     method: "POST",
    //     data: '{"email":"' + email + '","password" : "' + password + '"}',
    //     succuess: function (data) {
    //         console.log(data);
    //     },
    //     error: function (error) {
    //         console.log(error);
    //     }
    // });


}



function isEmpty(a, b) {

    var found = false;
    if (a == null || a == "" || a == '' || a == ' ' || a == undefined || a == " ") {

        found = true;
    }

    if (found) {
        $(b).css({
            "border": "3px solid red",
            "transition": "500ms"
        });
        setTimeout(function () {
            $(b).css({
                "border": "1px solid #ced4da;",
                "transition": "500ms"
            });
        }, 2000);
    } else {
        $(b).css({
            "border": "3px solid green",
            "transition": "500ms"
        });
    }
}

function isNumeric(a) {
    if ((parseInt(a)).toString() == "NaN") {
        return true;
    }
    return false;
}

function isAlphaNumeric(a) {

    return true;

}

function isEmail(a, b) {
    var arr = ("@^.").split("^");
    var count = 0;
    var found = false;


    for (var i = 0; i < a.length; i++) {
        for (var j = 0; j < arr.length; j++) {
            if (a.charAt(i) == arr[j]) {
                count++;
            }
        }
    }


    if (
        count == 2 &&                       //check if both charactors are in the string (@ .)
        !(a.indexOf("@.") > -1) &&          //check if both charactors are in this (@.) order
        !(a.indexOf(".@") > -1) &&          //check if both charactors are in this (.@) order
        !(a.indexOf(".") > 0) &&            //check if fullstop is in the beninging 
        !(a.indexOf("@") > 0 &&             //check if @ sign is in the beninging
        !(a.indexOf(".") == a.length)) &&   //check if fullstop is in the end 
        !(a.indexOf("@") == a.length)       //check if @ sign is in the end
        ) {
            
        found = true;
    }



    if (found) {
        $(b).css({
            "border": "3px solid green",
            "transition": "500ms"
        });

        setTimeout(function () {
            $(b).css({
                "border": "1px solid #ced4da;",
                "transition": "500ms"
            });
        }, 2000);

    } else {
        $(b).css({
            "border": "3px solid red",
            "transition": "500ms"
        });
    }
}


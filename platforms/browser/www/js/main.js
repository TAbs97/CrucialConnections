// var host = "http://localhost:8081";
var host = "http://10.200.78.79:3000";



function sendData() {
    var email = document.getElementById('email').value,
        password = document.getElementById('password').value;
        var regex="[A-Za-z]";

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
            "border": "2px solid red",
            "transition": "500ms"
            
        });
    // console.log(1);
        return found;
    } else {
        $(b).css({
            "border": "2px solid green",
            "transition": "500ms"
        });
// console.log(2);
        setTimeout(function () {
            $(b).css({
                "border": "2px solid #ced4da;",
                "transition": "500ms"
            });
        }, 2000);
        return found;
    }
}

function isNumeric(a) {
    if ((parseInt(a)).toString() == "NaN") {
        return true;
    }
    return false;
}



function isAlphabet(a) {
    
    var found=true;
    var letters = /^[a-z]/gi;
    if(!(a).match(letters)){
        found=true;
        console.log(" not letter");
    }
    else{
        console.log("leter");
    }
    
    if(found){
        $(a).css({
            "border-radius":"5px",
            "border": "2px solid red",
            "transition": "500ms"
            
        });
        return found;
    }
    else{
        $(a).css({
            "border": "2px solid green",
            "transition": "500ms"
        });

    }

    return false;
}


function isAlphaNumeric(a) {

    if(a==regex){
        found;
    }
    return true;
    

}

function isEmail(a, b) {
    // var arr = ("@^.").split("^");
    var arr = ["@","."];
    var countAt = 0;
    var countDot = 0;
    var found = false;

    console.log(arr);

    for (var i = 0; i < a.length; i++) {
        if (a.charAt(i) == arr[0]) { //@
            countAt++;
        }
        else if (a.charAt(i) == arr[1]) { //.
            countDot++;
        }
    }

    if (
        (countAt == 1 )&&                       //check if both charactors are in the string (@ .)
        (countDot == 1 )&&                       //check if both charactors are in the string (@ .)
        !(a.indexOf("@.") > -1) &&          //check if both charactors are in this (@.) order
        !(a.indexOf(".@") > -1) &&          //check if both charactors are in this (.@) order
        !(a.indexOf(".") == 0) &&            //check if fullstop is in the beninging 
        !(a.indexOf("@") == 0) &&             //check if @ sign is in the beninging
        !(a.indexOf(".") == a.length-1) &&   //check if fullstop is in the end 
        !(a.indexOf("@") == a.length-1)       //check if @ sign is in the end
        ) {
        found = true;
    }else{
    }



    if (found) {
        $(b).css({
            "border": "3px solid green",
            "transition": "500ms"
        });
console.log(3);
        setTimeout(function () {
            $(b).css({
                "border": "1px solid #ced4da;",
                "transition": "500ms"
            });
        }, 2000);
return found;
    } else {
        $(b).css({
            "border": "3px solid red",
            "transition": "500ms"
        });
        console.log(4);
        return found;
    }
}


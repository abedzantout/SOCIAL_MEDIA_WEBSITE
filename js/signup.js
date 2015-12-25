window.onload = function () {
    document.getElementById('signin-email').addEventListener('blur', function () {
        checkUser(this);
        
    });

    // DOM manipulation
    $('#content').on('click', '.notify', function () {
        $(this).fadeOut(300, function () {
            $(this).remove(); // after fadeout remove from DOM
        });
    });

};
function checkUser(user) {
    if (user.value == '') {
        document.getElementById('signup-username').innerHTML = '';
        return
    }

    var params = "user=" + user.value;
    var request = new ajaxRequest;
    request.open("POST", "checkuser.php", true);
    request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    request.setRequestHeader("Content-length", params.length);
    request.setRequestHeader("Connection", "close");

    request.onreadystatechange = function (e) {
        if (this.readyState == 4)
            if (this.status == 200)
                if (this.responseText != null)
                    document.getElementById('signup-username').innerHTML = this.responseText
                 
    }
    request.send(params);
}

function ajaxRequest() {
    try {
        var request = new XMLHttpRequest();
    } catch (e1) {
        try {
            request = new ActiveXObject("Msxml2.XMLHTTP");
        } catch (e2) {
            try {
                request = new ActiveXObject("Microsoft.XMLHTTP");
            } catch (e3) {
                request = false;
            }
        }
    }
    return request;
}
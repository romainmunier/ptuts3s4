function checkSamePasswordRegister(password1, password2) {
    if (password1 !== password2) {
        $('#newPassword').attr("class", "form-control is-invalid");
        $('#confirmPassword').attr("class", "form-control is-invalid");
    } else {
        $('#newPassword').attr("class", "form-control is-valid");
        $('#confirmPassword').attr("class", "form-control is-valid");
    }
}

function checkPasswordStrength(password) {
    var SPECIALS = ["&", "~", "#", "'", '"', "{", "(", "[", "|", "-", "`", "_", '\\', '^', "@", ")", "°", "]", "+", "=", "}", "$", "£", "¤", "¨", "%", "*", "µ", "!", "§", "/", ":", ".", ";", "?", ",", "<", ">"];
    var MIN = ["a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n", "o", "p", "q", "r", "s", "t", "u", "v", "w", "x", "y", "z"];
    var MAJ = ["A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z"];
    var DIGITS = ["1", "2", "3", "4", "5", "6", "7", "8", "9", "0"];

    var strength = 0;
    var color = "danger";

    if (password.toString().length > 8) {
        strength += 10;
    }

    var loop = 0;
    for(let i=0; i<SPECIALS.length; i++) {
        if (password.toString().includes(SPECIALS[i]) && loop < 2) {
            strength += 20;
            loop++;
        } else if (loop === 2) {
            loop = 0;
            break;
        }
    }

    for(let i=0; i<MIN.length; i++) {
        if (password.toString().includes(MIN[i]) && loop < 2) {
            strength += 10;
            loop++;
        } else if (loop === 2) {
            loop = 0;
            break;
        }
    }

    for(let i=0; i<MAJ.length; i++) {
        if (password.toString().includes(MAJ[i]) && loop < 2) {
            strength += 10;
            loop++;
        } else if (loop === 2) {
            loop = 0;
            break;
        }
    }

    for(let i=0; i<DIGITS.length; i++) {
        if (password.toString().includes(DIGITS[i]) && loop < 2) {
            strength += 20;
            loop++;
        } else if (loop === 2) {
            loop = 0;
            break;
        }
    }

    if (strength <= 20) {
        color = "dark";
    } else if (strength > 20 && strength <= 40) {
        color = "danger";
    } else if (strength > 40 && strength <= 60) {
        color = "warning";
    } else if (strength > 60 && strength <= 80) {
        color = "primary";
    } else if (strength > 80) {
        color = "success";
    }

    document.getElementById("passwordStrength").style.width = strength + "%";
    document.getElementById("passwordStrength").removeAttribute("class");
    document.getElementById("passwordStrength").setAttribute("class", "progress-bar progress-bar-striped progress-bar-animated progress-bar-" + color);

    // console.log([strength, color]);
    return [strength, color];
}

function updatePassword() {
    const FORM = $('#updatePasswordForm').serializeArray();

    // CHECKING IF OLD PASSWORD ENTER AND OLD PASSWORD IN DATABASE ARE SAME PASSWORD

    let oldPasswordSame = axios({
        method: "post",
        url: "/api/checkoldpassword",
        data: {
            id: FORM[0]['value'],
            Password: FORM[1]['value']
        }
    }).then(function(response) {
        if (response["data"]["same"] === "TRUE") {
            $('#newPassword').attr("class", "form-control is-valid");
            $('#error_BADPASSWORD').hide();
            return true;
        } else {
            $('#newPassword').attr("class", "form-control is-invalid");
            $('#error_BADPASSWORD').show();
            return false;

        }
    });

    if (oldPasswordSame) {
        if (FORM[2]["value"] === FORM[3]["value"]) {
            axios({
                method: "post",
                url: "/api/updatepassword",
                data: {
                    id: FORM[0]["value"],
                    OldPassword: FORM[1]["value"],
                    NewPassword: FORM[2]["value"],
                    ConfirmPassword: FORM[3]["value"]
                }
            }).then(function(response) {
                if (response["data"]["error"] === "NULL") {
                    $('#modal-updatepassword').modal("hide");
                    $('#updatePasswordForm')[0].reset();
                    document.getElementById("SUCCESS_UPDATE_PASSWORD").style.display = "block";
                    setTimeout(function() {
                        document.getElementById("SUCCESS_UPDATE_PASSWORD").style.display = "none";
                    }, 3000);
                }
            })
        }
    }
}

function createPassword() {
    let password1 = document.getElementById("newPassword").value;
    let password2 = document.getElementById("confirmPassword").value;
    if (password1.toString() === password2.toString()) {
        document.getElementById("passwordBtn").style.display = "none";
        document.getElementById("editPasswordDiv").style.display = "flex";
        document.getElementById("passwordInput").value = password1;
        $('#modal-createpassword').modal("hide");
    }
}

function checkAlreadyUsedUsername(username) {
    axios({
        method: "post",
        url: "/api/checkusername",
        data: {
            Username: username.toString()
        }
    }).then(function(response) {
        if (response["data"]["used"] === "FALSE") {
            $('#username').attr("class", "form-control is-valid");
        } else {
            $('#username').attr("class", "form-control is-invalid");
        }
    })
}

let regex = /^[a-zA-Zéèçàùôâîêïäëöüû-]{2,128}$/

function checkRegExp(id) {
    let value = document.getElementById(id).value.toString();

    if (regex.test(value)) {
        $('#' + id).attr("class", "form-control is-valid");
    } else {
        $('#' + id).attr("class", "form-control is-invalid");
    }
}

function checkUsePseudo(state) {
    if (state) {
        $('#pseudo').attr("required", "true");
        $('#pseudo').removeAttr("readonly");
        $('#pseudo').attr("placeholder", "LeCafarDu93");
    } else {
        $('#pseudo').removeAttr("required");
        $('#pseudo').attr("readonly", "true");
        $('#pseudo').attr("placeholder", "");
    }
}
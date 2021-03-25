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

let RegExpName = /^[a-zA-Z0-9éèçàùôâîêïäëöüû °-]{2,128}$/;
let RegExpMail = /^([a-zA-Z0-9-éàûô.]{2,})+[@]([a-zA-Z0-9-éàûô]{2,128})+[.]([a-zA-Z0-9-]){1,5}$/;
let RegExpPhone = /(^([+][0-9]{2,3})+[0-9]{9})$|^([0-9]{10}$)/;

function checkRegExp(id, type) {
    let value = document.getElementById(id).value.toString();

    let regex;

    switch (type) {
        case "NAME":
            regex = RegExpName;
            break;
        case "MAIL":
            regex = RegExpMail;
            break
        case "PHONE":
            regex = RegExpPhone;
            break;
    }

    if (regex.test(value)) {
        $('#' + id).attr("class", "form-control is-valid");
    } else {
        $('#' + id).attr("class", "form-control is-invalid");
    }
}

function checkUse(id, state, sample) {
    if (state) {
        $('#' + id).attr("required", "true");
        $('#' + id).removeAttr("readonly");
        $('#' + id).attr("placeholder", sample);
        $('#' + id + "Div").slideDown("slow");
    } else {
        $('#' + id).removeAttr("required");
        $('#' + id).attr("readonly", "true");
        $('#' + id).attr("placeholder", "");
        $('#' + id + "Div").slideUp("slow");
    }
}

window.addEventListener("load", function(event) {
    if (window.location.href.includes("account") || window.location.href.includes("users/edit")) {
        // Load function and define default values

        if (document.getElementById("pseudo").value === "") {
            $('#pseudoDiv').hide();
        }

        if (document.getElementById("mail").value === "") {
            $('#mailDiv').hide();
        }

        if (document.getElementById("phone").value === "") {
            $('#phoneDiv').hide();
        }
    }
});


var unassignedUser = document.getElementById('unassigned-user');
var assignedUser = document.getElementById('assigned-user');

// Example 2 - Shared lists
new Sortable(unassignedUser, {
    group: 'shared', // set both lists to same group
    animation: 150
});

new Sortable(assignedUser, {
    group: 'shared',
    animation: 150
});

function onSumupSwitcheChange(state) {
    if (state) {
        $("#sumupDiv").slideDown("slow");
        $("#sumup").attr("required", "true");
        document.getElementById("sumup").value = "";
    } else {
        $("#sumupDiv").slideUp("slow");
        $("#sumup").removeAttr("required");
        document.getElementById("sumup").value = "";
    }
}

function checkAddListForm() {
    FORM = $('#addListForm').serializeArray();
    $('#assigned-user').children().each(function(index) {
        let id = $(this).attr('id').toString().split("-")[1];
        $('#usersItem').append(`<input type="hidden" name="Users[]" value="${id}">`)
    });

    FORM.submit();
}

function selectSearchCategory(id) {
    toggleSlideCollapse();
    document.getElementById("newParentCategory").value =  document.getElementById("searchName-" + id).innerText;
    document.getElementById("updateParentId").value = id;
}

function searchCategoryInDatabase(value) {
    axios({
        method: "post",
        url: "/api/getCategoryByValue",
        data: {
            value: value.toString()
        }
    }).then(function(response) {
        const data = response["data"];
        $('#results').empty();

        data.forEach(function(item) {
            const dateTime = item.date.date.slice(0,10);
            const year = dateTime.split("-")[0];
            const month = dateTime.split("-")[1];
            const day = dateTime.split("-")[2];

            const date = day + "/" + month + "/" + year;

            const child = `<div class="card searchItem" id="search-${item.id}" onclick="selectSearchCategory(${item.id})">
                                <div class="card-header" id="searchName-${item.id}">
                                    ${item.name}
                                </div>
                                <div class="card-body">
                                    <blockquote class="blockquote mb-0">
                                        <p>${item.sumup}</p>
                                        <footer class="blockquote-footer">Dernière modification le <cite title="Source Title">${date}</cite></footer>
                                    </blockquote>
                                </div>
                            </div><br>`;

            $('#results').append(child);
        })

    })
}

function addArticle() {
    const title = document.getElementById("articleTitle").value;
    const containment = tinyMCE.get("commentText").getContent();
    const categoryId = document.getElementById("updateParentId").value;
    
    if (title === "") {
        $('#articleTitle').addClass("is-invalid");
    }

    axios({
        method: "POST",
        url: "/api/storeArticle",
        data: {
            title : title,
            article : containment,
            category : categoryId
        }
    }).then((response) => {
        if (response.data === "OK") {
            window.location.href = "/dashboard/articles";
        } else if (response.data === "TITLE MISSING") {
            $('#articleTitle').addClass("is-invalid");
        }
    })
}

function saveArticle() {
    const title = document.getElementById("articleTitle").value;
    const containment = tinyMCE.get("commentText").getContent();
    const articleId = document.getElementById("articleByte").value;
    const categoryId = document.getElementById("updateParentId").value;

    if (title === "") {
        $('#articleTitle').addClass("is-invalid");
    }

    axios({
        method: "POST",
        url: "/api/saveArticle",
        data: {
            title : title,
            id : articleId,
            article : containment,
            category : categoryId
        }
    }).then((response) => {
        if (response.data === "OK") {
            window.location.href = "/dashboard/articles";
        } else if (response.data === "TITLE MISSING") {
            $('#articleTitle').addClass("is-invalid");
        }
    })
}

function switchTypeText() {
    if ($('#articleMailing option:selected').text().includes("PHONE") || $('#articleMailing option:selected').text().includes("HYBRID")) {
        $('#writeArticleContainer').hide();
        $('#phonehybrid-textzone').show();
    } else {
        $('#writeArticleContainer').show();
        $('#phonehybrid-textzone').hide();
    }
}

function submitMessageOption(value) {
    const title = $('#messageTitle').val();
    const mailing = $('#articleMailing').val();
    let containmentMCE = tinyMCE.get("commentText").getContent();
    let error = 0;

    if (title === "") {
        $('#messageTitle').addClass("is-invalid")
        error += 1;
    } else {
        $('#messageTitle').removeClass("is-invalid").addClass("is-valid")
    }

    if (mailing === null) {
        $('#articleMailing').addClass("is-invalid")
        error += 1;
    } else {
        $('#articleMailing').removeClass("is-invalid").addClass("is-valid")
    }

    if ($('#articleMailing option:selected').text().includes("PHONE") || $('#articleMailing option:selected').text().includes("HYBRID")) {
        containmentMCE = $('#phonehybrid-textzone').val();
    }

    if (error === 0) {
        switch (value) {
            case "save":
                axios({
                    method: "POST",
                    url: "/api/saveMail",
                    data: {
                        title: title,
                        mailing: mailing,
                        containment: containmentMCE
                    }
                })
                break;
            default:
                break;
        }
    }
}
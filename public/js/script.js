/* ################################
   #                              #
   #   INDEX PAGE - JS SCRIPT     #
   #                              #
   ################################
 */

function checkRegisterUsername(username) {
    axios({
        method: 'post',
        url: '/api/checkusername',
        data: {
            Username: username,
        }
    }).then(function(response) {
        if (response["data"]["used"] === "FALSE") {
            document.getElementById("USERNAME_ALREADY_USED").style.display = "none";
        } else {
            document.getElementById("USERNAME_ALREADY_USED").style.display = "block";
        }
    });
}

function onRegister() {
    const FORM = $('#registerForm').serializeArray();

    if (FORM[3]['value'] === FORM[4]['value']) {
        /* HIDE SOME USELESS ELEMENTS */
        document.getElementById("PASSWORD_NOT_EQUAL").style.display = "none";

        /* CREATING AND POSTING REQUEST */
        axios({
            method: 'post',
            url: '/api/register',
            data: {
                Firstname: FORM[0]['value'],
                Lastname: FORM[1]['value'],
                Username: FORM[2]['value'],
                Password: FORM[3]['value']
            }
        }).then(function(response) {
            if (response["data"].length === 0) {
                $('#registerForm')[0].reset();
                $('#registerModal').modal("hide");

                document.getElementById("SUCCESSFULL_CREATION_ACCOUNT").style.display = "block";

                setTimeout(function() { document.getElementById("SUCCESSFULL_CREATION_ACCOUNT").style.display = "none"; }, 5000)
            }
        });
    } else {
        document.getElementById("PASSWORD_NOT_EQUAL").style.display = "block";
    }
}
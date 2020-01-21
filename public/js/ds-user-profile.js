$(document).ready(function () {

    var isEmailToBeChanged = false;
    var isPasswordToBeChanged = false;

    $("#show-new-email-inputs").click(function () {
        isEmailToBeChanged = true;
        $(".primary-email").hide();
        $(".new-email-block").slideDown(200);
    });

    $(document).on('click', '#hide-new-email-inputs', function () {
        isEmailToBeChanged = false;
        $(".primary-email").show();
        $(".new-email-block").slideUp(200);
        $("#new-email").val('');
        $("#confirm-new-email").val('');
    });


    $("#show-new-password-inputs").click(function () {
        isPasswordToBeChanged = true;
        $(".primary-password").hide();
        $(".new-password-block").slideDown(200);
    });

    $(document).on('click', '#hide-new-password-inputs', function () {
        isPasswordToBeChanged = false;
        $(".primary-password").show();
        $(".new-password-block").slideUp(200);
        $("#new-password").val('');
        $("#confirm-new-password").val('');
    });


    $("#update-profile-form").submit(function (e) {

        if (isEmailToBeChanged) {
            if ($("#new-email").val() != $("#confirm-new-email").val()) {
                e.preventDefault();
                $("#new-email-error").html('** Email and confirm do not match.');
                $("#confirm-new-email-error").html('** Email and confirm do not match.');
            } else {
                if ($("#new-email").val() == '') {
                    e.preventDefault();
                    $("#new-email-error").html('** This field can not be empty.');
                    $("#confirm-new-email-error").html('** This field can not be empty.');
                }
            }
        }


        if (isPasswordToBeChanged) {
            if ($("#new-password").val() != $("#confirm-new-password").val()) {
                e.preventDefault();
                $("#new-password-error").html('** password and confirm do not match.');
                $("#confirm-new-password-error").html('** password and confirm password do not match.');
            } else {
                if ($("#new-password").val() == '') {
                    e.preventDefault();
                    $("#new-password-error").html('** This field can not be empty.');
                    $("#confirm-new-password-error").html('** This field can not be empty.');
                }
            }
        }

    });


});
const userProfile = {
    newEmailEl : $('.new-email'),
    newPasswordEl : $('.new-password'),
    alertSuccessEl : $('.alert-success'),
    submitBtn : $('.dashboard-save'),
    errorEl : $('.user-form-error'),
    slideSpeed : 200
};

$("#show-new-email-inputs").click(function () {
    $(".new-email-block").slideDown(userProfile.slideSpeed);
    userProfile.newEmailEl.attr('disabled', false);
});

$('#hide-new-email-inputs').on('click', function () {
    hideNewEmailFields();
});

const hideNewEmailFields = () => {
    $(".new-email-block").slideUp(userProfile.slideSpeed);
    $("#new-email").val('');
    $("#confirm-new-email").val('');
    userProfile.newEmailEl.attr('disabled', true);
};

$("#show-new-password-inputs").click(function () {
    $(".new-password-block").slideDown(userProfile.slideSpeed);
    userProfile.newPasswordEl.attr('disabled', false);
});

$('#hide-new-password-inputs').on('click', function () {
    hideNewPasswordFields();
});

const hideNewPasswordFields = () => {
    $(".new-password-block").slideUp(userProfile.slideSpeed);
    $("#new-password").val('');
    $("#confirm-new-password").val('');
    userProfile.newPasswordEl.attr('disabled', true);
};

$("#update-profile-form").on('submit', function(e) {
    e.preventDefault();
    userProfile.submitBtn.attr('disabled', true);
    let formData = new FormData(this);
    $.ajax({
        method: 'POST',
        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
        url: '/dashboard/user-profile',
        data:  formData,
        contentType: false,
        processData: false
    })
    .then((response) => {
        const {image, email } = response;
        userProfile.alertSuccessEl.show();
        setTimeout(function(){ userProfile.alertSuccessEl.slideUp(); }, 3000);
        if(image) {
            $('.user-profile-img').attr('src', $('.form-image').attr('src'));
        }
        if(email) {
            $('.user-email').val(email);
        }
        userProfile.submitBtn.attr('disabled', false);
        userProfile.errorEl.empty();
        hideNewEmailFields();
        hideNewPasswordFields();
    })
    .catch((error) => {
        userProfile.errorEl.empty();
        let allErr = error.responseJSON.errors;
        for(data in allErr) {
            $('.' + data).html(allErr[data]);
        }
        userProfile.submitBtn.attr('disabled', false);
    });
});

//Image upload
$("#image").change((e) => {
    app.imageUpload($('.circle-user img'), e.target.files)
});

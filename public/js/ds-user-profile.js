let isEmailToBeChanged = false;
let isPasswordToBeChanged = false;
const newEmailEl = $('.new-email');
const newPasswordEl = $('.new-password');
const alertSuccessEl = $('.alert-success');
const submitBtn = $('.dashboard-save');
const errorEl = $('.user-form-error');

$("#show-new-email-inputs").click(function () {
    isEmailToBeChanged = true;
    $(".new-email-block").slideDown(200);
    newEmailEl.attr('disabled', false);
});

$(document).on('click', '#hide-new-email-inputs', function () {
    isEmailToBeChanged = false;
    $(".new-email-block").slideUp(200);
    $("#new-email").val('');
    $("#confirm-new-email").val('');
    newEmailEl.attr('disabled', true);
});


$("#show-new-password-inputs").click(function () {
    isPasswordToBeChanged = true;
    $(".new-password-block").slideDown(200);
    newPasswordEl.attr('disabled', false);
});

$(document).on('click', '#hide-new-password-inputs', function () {
    isPasswordToBeChanged = false;
    $(".new-password-block").slideUp(200);
    $("#new-password").val('');
    $("#confirm-new-password").val('');
    newPasswordEl.attr('disabled', true);
});

$("#update-profile-form").on('submit', function(e) {
    e.preventDefault();
    submitBtn.attr('disabled', true);
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
        alertSuccessEl.show();
        setTimeout(function(){ alertSuccessEl.slideUp(); }, 3000);
        if(response.image) {
            $('.user-img').attr('src', $('.form-image').attr('src'));
        }
        submitBtn.attr('disabled', false);
        errorEl.empty();
    })
    .catch((error) => {
        errorEl.empty();
        let allErr = error.responseJSON.errors;
        for(data in allErr) {
            $('.' + data).html(allErr[data]);
        }
        submitBtn.attr('disabled', false);
    });
});

//Image upload
$("#image").change(function () {
    if (this.files && this.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e) {
            $('.circle-user img').attr('src', e.target.result);
        };
        reader.readAsDataURL(this.files[0]);
    }
});

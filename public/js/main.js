const main = {
    templateLogoWrapper: $('.template-logo-wrapper '),
    deleteLogoInput: $('.delete-logo-input')
};

$(document).ready(function() {
    $('.expense-item-block .expense-archive-delete').click(function(e) {
        e.stopPropagation();
        $(this).parent().find('.expense-archive-delete').addClass('opacity-block');
        $(this).removeClass("opacity-block");
    });
    $('.invoices-item-click').click(function() {
        $('.invoices-item-click .invoices-item').addClass("invoices-disable-item");
        $(this).find('.invoices-item').toggleClass("invoices-disable-item");
    });
    $('.freq-asked-quest i').click(function() {
        $(this).parent().find('.faq-toggle-text-hide').toggleClass("faq-toggle-text-show");
        $(this).parent().find('i').toggleClass("rotate");
    });
    $('.dashboard-form-mobile i').click(function() {
        $('aside').toggleClass("show-hide-aside");
        $('.open-close-user-add').css("display", "none");
    });
    $('.from-me').click(function() {
        $('.from-to .from-me').toggleClass("active-from-to");
    });
    $('.open-close-arrow').click(function() {
        $('.open-close-menu .user-dashboard-1').toggle("user-dashboard-1-open-close");
        $('.open-close-arrow img').toggleClass("transform-rotate");
        $('.aside-content').toggleClass("back-color-aside");
        $('.open-close-menu .user-dashboard-2').toggle("user-dashboard-2-open-close");
    });
    $('table tr').hover(function() {
        $(this).find('.last').toggleClass("edit-delete-archive");
    });
    $('#Individual').click(function() {
        $('#company-name').css("display", "none");
        $('#first-last-name').css("display", "flex");
    });
    $('#Company').click(function() {
        $('#company-name').css("display", "flex");
        $('#first-last-name').css("display", "none");
    });
    $('.clickable-input').click(function(e) {
        e.stopPropagation();
        $(this).parent().find('.open-close-user').removeClass("open-clickable");
    });
    $('.new-expense-first-line').click(function(e) {
        $(this).parent().parent().find('.tax-open-close').removeClass("tax-clickable-block");
    });
    $('body').click(function(e) {
        var target = e.target;
        if ($(target).is('.clickable-input')) {
            $('.open-close-user').removeClass("open-clickable");
        } else {
            $(".open-close-user").addClass('open-clickable');
        }

        if ($(target).is('.new-expense-first-line') || $(target).is('.tax-open-close') || $(target).is('.tax-open-close') || $(target).is('.tax-open-close img') || $(target).is('.tax-open-close select') ) {
            $('.tax-open-close').removeClass("tax-clickable-block");
        } else {
            $(".tax-open-close").addClass("tax-clickable-block");
        }
    });

    $('#make-recurring-toggle').click(function(e) {
        e.stopPropagation();
        $('#make-recurring').toggle("make-recurring");
    });
    $('#invoice-send').click(function(e) {
        e.stopPropagation();
        $('.send-invoice').removeClass("open-send-invoice-popup");
    });
    $('#send-invoice-cancel').click(function(e) {
        e.stopPropagation();
        $('.send-invoice').addClass("open-send-invoice-popup");
    });
    $('#send-signature-confirm').click(function(e) {
        $('.send-invoice').addClass("open-send-invoice-popup");
        $('#signUpProposal').modal({
            show: true
        });
    });

    $(".custom-input-select").change(function(){
      if( $(this).val() == "custom") {
          $('.custom-input').css("display", "none");
      } else {
          $('.custom-input').css("display", "block");
      }
    });
    $('.cards .cards-block').click(function(e) {
        e.stopPropagation();
        $(this).parent().find('.cards-block').removeClass('border-green');
        $(this).parent().find('.check-green').css("display", "none");
        $(this).addClass('border-green');
        $(this).find('.check-green').css("display", "block");
    });
 //   time tracking
    $('.table-tracking td').click(function(e) {
        $('.table-tracking td').find('.week-days-block').removeClass('time-active');
        $('.table-tracking td').find('.tracking-block').removeClass('time-open-block');
        $('.table-tracking td').find('.months-day').removeClass('months-day-show');
        e.stopPropagation();
        $(this).find('.week-days-block').addClass('time-active');
        $(this).find('.tracking-block').addClass('time-open-block');
        $(this).find('.months-day').addClass('months-day-show');
    });
    $('.tracking-block').click(function(e) {
        $('.open-new-client').css('display', 'block');
    });
    $('.open-new-client-green').click(function(e) {
        $('.open-new-client').css('display', 'none');
    });
    $('.open-new-client-gray').click(function(e) {
        $('.open-new-client').css('display', 'none');
    });
    $('.for-day-table').click(function() {
        $('.day-block').css('display', 'contents');
        $('.week-block').css('display', 'none');
        $(this).removeClass('active-from-to');
        $('.for-week-table').addClass('active-from-to');
    });
    $('.for-week-table').click(function() {
        $('.day-block').css('display', 'none');
        $('.week-block').css('display', 'contents');
        $(this).removeClass('active-from-to');
        $('.for-day-table').addClass('active-from-to');
    });
//for week table
    $('.sun-text').click(function() {
        $('.week-table').find('.opacity-table').removeClass('opacity-table');
        $('.sun-text').addClass('opacity-table');
        $('.week-table th').find('.months-week-show').removeClass('months-week-show');
        $('.week-table .sun-text').find('.months-week').addClass('months-week-show');
    });
    $('.mon-text').click(function() {
        $('.week-table').find('.opacity-table').removeClass('opacity-table');
        $('.mon-text').addClass('opacity-table');
        $('.week-table th').find('.months-week-show').removeClass('months-week-show');
        $('.week-table .mon-text').find('.months-week').addClass('months-week-show');
    });
    $('.tue-text').click(function() {
        $('.week-table').find('.opacity-table').removeClass('opacity-table');
        $('.tue-text').addClass('opacity-table');
        $('.week-table th').find('.months-week-show').removeClass('months-week-show');
        $('.week-table .tue-text').find('.months-week').addClass('months-week-show');
    });
    $('.wed-text').click(function() {
        $('.week-table').find('.opacity-table').removeClass('opacity-table');
        $('.wed-text').addClass('opacity-table');
        $('.week-table th').find('.months-week-show').removeClass('months-week-show');
        $('.week-table .wed-text').find('.months-week').addClass('months-week-show');
    });
    $('.thu-text').click(function() {
        $('.week-table').find('.opacity-table').removeClass('opacity-table');
        $('.thu-text').addClass('opacity-table');
        $('.week-table th').find('.months-week-show').removeClass('months-week-show');
        $('.week-table .thu-text').find('.months-week').addClass('months-week-show');
    });
    $('.fri-text').click(function() {
        $('.week-table').find('.opacity-table').removeClass('opacity-table');
        $('.fri-text').addClass('opacity-table');
        $('.week-table th').find('.months-week-show').removeClass('months-week-show');
        $('.week-table .fri-text').find('.months-week').addClass('months-week-show');
    });
    $('.sat-text').click(function() {
        $('.week-table').find('.opacity-table').removeClass('opacity-table');
        $('.sat-text').addClass('opacity-table');
        $('.week-table th').find('.months-week-show').removeClass('months-week-show');
        $('.week-table .sat-text').find('.months-week').addClass('months-week-show');
    });
    $('.week-table td, .week-table th').click(function(e) {
        $('.open-new-client').css('display', 'block');
    });
    $('.up-down-img').click(function(e) {
        $('.fixed-show-hide').slideToggle('.fixed-show-hide');
    });
    $('.fixed-tracker-up').click(function(e) {
        $('.fixed-tracker-up').css('display', 'none');
        $('.fixed-tracker-down').css({'display':'block', 'padding-top':'9px'});
        $('.timer-close-icon').css('display','block');

    });
    $('.fixed-tracker-down').click(function(e) {
        $('.fixed-tracker-down').css('display', 'none');
        $('.fixed-tracker-up').css({'display':'block', 'padding-top':'9px'});
        $('.timer-close-icon').css('display','none');
    });
    $('.fixed-tracker-stop-text').click(function(e) {
        $('.fixed-tracker').css('display', 'none');
        $('.fixed-tracker-2').css('display', 'block');
    });
    $('.team-members-left-btn-1').click(function(e) {
        $(this).parent().find('.team-members-left-btn').addClass('team-members-opacity');
        $(this).removeClass('team-members-opacity');
        $('.team-members-right-1').css('display', 'none');
        $('.team-members-right-2').css('display', 'block');
    });
    $('.team-members-left-btn-2').click(function(e) {
        $('.team-members-right-2').css('display', 'none');
        $('.team-members-right-1').css('display', 'block');
        $(this).parent().find('.team-members-left-btn').addClass('team-members-opacity');
        $(this).removeClass('team-members-opacity');
    });
    $('.for-day-table').click(function(e) {
        $('.plans-number-for-year').css('display', 'none');
        $('.plans-number-for-monthly').css('display', 'block');
        $('.plans-submit-for-monthly').css('display', 'block');
        $('.plans-submit-for-year').css('display', 'none');

    });
    $('.for-week-table').click(function(e) {
        $('.plans-number-for-year').css('display', 'block');
        $('.plans-number-for-monthly').css('display', 'none');
        $('.plans-submit-for-monthly').css('display', 'none');
        $('.plans-submit-for-year').css('display', 'block');
    });
    $('#wellDoneClick').click(function(e) {
        $('.second-user').css('display', 'block');
    });
    $('.second-user').click(function(e) {
        $('.open-close-user-add').toggle();
    });

    //registration-2
    $(".industry-block").hover(function(){
        // $(this).parent().find('.show-img-industry').css('display', 'none');
        $(this).find('.show-img-industry').css('display', 'none');
        $(this).find('.hide-img-industry').css('display', 'block');
    }, function(){
        $(this).find('.show-img-industry').css('display', 'block');
        $(this).find('.hide-img-industry').css('display', 'none');
    });

    //registration-3
    $('.streamline-services .streamline-div').click(function(e) {
        $(this).toggleClass("add-background-color");
    });

    //Items & Services
    $('.item-service-create-item').click(function(e) {
        $('.items-service-send').toggleClass("items-service-send-open");
    });
    $('.items-service-block').click(function(e) {
        $('.items-service-send').toggleClass("items-service-send-open");
    });

    $('.service-items-cancel').click(function(e) {
        $('.items-service-send').removeClass("items-service-send-open");
    });
    /////2
    $('.item-service-create-item-2').click(function(e) {
        $('.items-service-send').toggleClass("items-service-send-open-2");
    });
    $('.items-service-block-2').click(function(e) {
        $('.items-service-send').toggleClass("items-service-send-open-2");
    });

    $('.service-items-cancel-2').click(function(e) {
        $('.items-service-send').removeClass("items-service-send-open-2");
    });
 });

//Multiple select
// $('#select-choose').select2();
$("#select-choose").select2({
    tags: true,
    tokenSeparators: [',', ' ']
});

//Shows password
$('.password-icon').on('click', function () {
    $(this).find('i').toggleClass('fa-eye').toggleClass('fa-eye-slash');
    $(this).prev('input').attr('type', (index, attr) => attr === 'password' ? 'text' : 'password');
});

//Invoice slider
let invoiceSlider = $('.invoice-slider');
invoiceSlider.owlCarousel({
    items: invoiceSlider.data('invoice-templates-count'),
    loop: true,
    dots: false,
    center: true,
    startPosition: invoiceSlider.data('chosen-invoice-id') - 1,
    nav: true,
    mouseDrag: true,
    responsiveClass: true,
    responsive: {
        0: {
            items: 1,
        },
        600: {
            items: 1,
        },
        1000: {
            items: 1,
        }
    },
    onTranslated: function(event) {
        $('.invoice-id').val($('.owl-item.active .items').data('invoice-id'));
    }
});

//Change template logo
$("#logotype").on('change', (e) => {
    $('.template-logo-wrapper').css('display', 'block');
    app.imageUpload($('.template-logo'), e.target.files);
    main.deleteLogoInput.attr('disabled', true);
});

//Delete template logo
$('.delete-logo').on('click', (e) => {
    e.preventDefault();
    $('.template-logo-wrapper').css('display', 'none');
    $('.template-logo-view').attr('src','');
    main.deleteLogoInput.attr('disabled', false);
});

//Bootstrap datepicker
(function () {
    let dt = new Date();
    let today = new Date(dt.getFullYear(), dt.getMonth(), dt.getDate());
    $('.datepicker').datepicker({
        todayHighlight: true,
        format: $('.date-format').data('date-format'),
        startDate: today
    }).datepicker('setDate', today);
}());

//Prevent submitting form on pressing enter key
$('.prevent-enter').keydown(function (e) {
    if (e.keyCode == 13) {
        e.preventDefault();
        return false;
    }
});
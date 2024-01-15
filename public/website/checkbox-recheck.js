
var checked_companies = localStorage.getItem('checked_companies') ? JSON.parse(localStorage.getItem('checked_companies')) : [];

function clear_checked() {
  
    localStorage.removeItem('checked_companies');
    checked_companies = [];
    $(".checked_companies").html("Selected Companies: 0");
    $(".checked_company_download").css("display", "none");
    $(".company_checkbox").prop('checked', false);
    
   // $(".checked_company_info").hide();
    $(".company_checkbox").parent().parent().parent().removeClass('card-border');
    $(".company_checkbox_in_modal").prop('checked', false);
    $(".company_checkbox_in_modal").parent().parent().parent().removeClass('card-border');
    $('.badge-count').html('0'); 
}

if (checked_companies.length == 0) {
    //$(".checked_company_info").hide();
}


// if (checked_companies.length > 0) {
//     $(".checked_company_download").addClass('company_download_btn_show');
// }


$(".company_checkbox").click(function (e) {
   
    var id = $(this).data('id');
    if ($(this).is(':checked')) {
        $(".company_id_in_modal_" + id).prop('checked', true);
        checked_companies.push(id);
        $(".checked_companies").html("Selected Companies: " + checked_companies.length);
        //$(".checked_company_info").fadeIn('slow');
        $(".checked_company_download").fadeIn('slow'); //this line added by ajay on jan 1 to show download button on selection of checkbox in modal
    } else {
        $(".company_id_in_modal_" + id).prop('checked', false);
        checked_companies = checked_companies.filter(function (item) {
            return item !== id
        })
        $(".checked_companies").html("Selected Companies: " + checked_companies.length);
        if (checked_companies.length == 0) {
           // $(".checked_company_info").fadeOut('slow');
           $(".checked_company_download").fadeOut('slow');//this line added by ajay on jan 1 to hide download button on de-selection of checkbox in modal
        }
    }

    localStorage.setItem('checked_companies', JSON.stringify(checked_companies));

});


$(".company_checkbox_in_modal").click(function (e) {


    var id = $(this).data('id');
    if ($(this).is(':checked')) {
        $("#company_checkbox_" + id).prop('checked', true);
        $("#company_checkbox_" + id).parent().parent().parent().addClass('card-border');
        checked_companies.push(id);
        $(".checked_companies").html("Selected Companies: " + checked_companies.length);
       // $(".checked_company_info").fadeIn('slow');
       $(".checked_company_download").fadeIn('slow');
    } else {
        $("#company_checkbox_" + id).prop('checked', false);
        $("#company_checkbox_" + id).parent().parent().parent().removeClass('card-border');
        checked_companies = checked_companies.filter(function (item) {
            return item !== id
        })
        $(".checked_companies").html("Selected Companies: " + checked_companies.length);
        if (checked_companies.length == 0) {
            //$(".checked_company_info").fadeOut('slow');
            $(".checked_company_download").fadeOut('slow');
            
        }
    }

    localStorage.setItem('checked_companies', JSON.stringify(checked_companies));
});

let checked_companies_storage = localStorage.getItem('checked_companies');

if (checked_companies_storage) {
    let checked_companies = JSON.parse(checked_companies_storage);
    checked_companies.forEach(function (company_id) {
        $("#company_checkbox_" + company_id).prop('checked', true);
        $(".company_id_in_modal_" + company_id).prop('checked', true);
        $("#company_checkbox_" + company_id).parent().parent().parent().addClass('card-border');
    });
}

$(".total_companies").html("Total Companies: " + $("#total_companies").val());
$(".checked_companies").html("Selected Companies: " + checked_companies.length);

$(".advance-filter").submit(function (e) {
    localStorage.removeItem('checked_companies');
});

$(".btn_reset").click(function (e) {
    clear_checked();
});
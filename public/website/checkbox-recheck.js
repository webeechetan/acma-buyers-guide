
var checked_companies = localStorage.getItem('checked_companies') ? JSON.parse(localStorage.getItem('checked_companies')) : [];
var checked_companies_count = [];



function clear_checked() {
  

    //window.location.assign('http://127.0.0.1:8000/company/dashboard');

    localStorage.removeItem('checked_companies');
    checked_companies = [];;
    $(".checked_companies").html("Selected Companies: 0");
    $(".checked_company_download").css("display", "none");
    $(".company_checkbox").prop('checked', false);
    
   // $(".checked_company_info").hide();
    $(".company_checkbox").parent().parent().parent().removeClass('card-border');
    $(".company_checkbox_in_modal").prop('checked', false);
    $(".company_checkbox_in_modal").parent().parent().parent().removeClass('card-border');
    $('.badge-count').html('0'); 


    //this is to change the text of select all button 
    $(".toggle_allcheckbox").prop('checked', false);
    $(".toggle_allcheckbox").attr("data-check",'true');
    $(".toggle_allcheckbox").html('Select All');

    location.href = location.protocol+'//'+location.host+'/company/dashboard';


}


$(".company_checkbox").click(function (e) {

    checked_companies = localStorage.getItem('checked_companies') ? JSON.parse(localStorage.getItem('checked_companies')) : [];
    
    var id = $(this).data('id');
    if ($(this).is(':checked')) {

        $(".toggle_allcheckbox").prop('checked', true);
        $(".toggle_allcheckbox").attr("data-check",'false');
        $(".toggle_allcheckbox").html('Uncheck All');

        // alert('if block');
       

        $(".company_id_in_modal_" + id).prop('checked', true);
        checked_companies.push(id);
        $(".checked_companies").html("Selected Companies: " + checked_companies.length);
        //$(".checked_company_info").fadeIn('slow');
        $(".checked_company_download").fadeIn('slow'); //this line added by ajay on jan 1 to show download button on selection of checkbox in modal
    } else {


        $(".toggle_allcheckbox").prop('checked', false);
        $(".toggle_allcheckbox").attr("data-check",'true');
        $(".toggle_allcheckbox").html('Select All');


        // alert('else block');
        checked_companies = localStorage.getItem('checked_companies') ? JSON.parse(localStorage.getItem('checked_companies')) : [];

        
        $(".company_id_in_modal_" + id).prop('checked', false);
        checked_companies = checked_companies.filter(function (item) {
            return item !== id
        })
        
        //////////
        var checkedCount = $('.company_checkbox:checked').length;
        $(".checked_companies").html("Selected Companies: " + checkedCount);
        //////////
    }

    localStorage.setItem('checked_companies', JSON.stringify(checked_companies));
    checked_companies_count = localStorage.getItem('checked_companies');
    if(checked_companies_count){
        checked_companies_count = JSON.parse(checked_companies_count);
    }
    if(checked_companies_count.length  == 0){
           $(".checked_company_download").fadeOut('slow');
    }   

    $(".checked_companies").html("Selected Companies: " + checked_companies.length);
    // console.log(JSON.parse(localStorage.getItem('checked_companies')).length)
    setTimeout(()=>{
        $("#companyBadge").html(JSON.parse(localStorage.getItem('checked_companies')).length)
    },2000)

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

       $(".toggle_allcheckbox").prop('checked', true);
       $(".toggle_allcheckbox").attr("data-check",'false');
       $(".toggle_allcheckbox").html('Uncheck All');

    } else {


        $(".toggle_allcheckbox").prop('checked', false);
        $(".toggle_allcheckbox").attr("data-check",'true');
        $(".toggle_allcheckbox").html('Select All');


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

setTimeout(checkIfAnyCompanyCheckedOnCurrentPage, 1000);

$(".advance-filter").submit(function (e) {
    localStorage.removeItem('checked_companies');
});

$(".btn_reset").click(function (e) {
    clear_checked();
});



$(document).ready(function () {

    var checked_companies_storage = localStorage.getItem('checked_companies');

    if(checked_companies_storage){
        checked_companies_storage = JSON.parse(checked_companies_storage);
        if(checked_companies_storage.length > 0){
            $("#companyBadge").html(checked_companies_storage.length);
        }
    }




//The download option for show popup message about the free download
    $("#downloadAllButton").click(function(e) {
        e.preventDefault();

        var confirmation = confirm("You are limited to 1 downloads per financial year till 31st March 2025. Are you sure you want to proceed with the download?");

        if (confirmation) {
            var url = $(this).attr("href");
            window.location.href = url;
        } else {
            return false;
        }
    });
    
//The download option for show popup message about the free download



});

function checkIfAnyCompanyCheckedOnCurrentPage(){
    var checked_c = $('.company_checkbox:checked');
    if(checked_c.length > 0){
        $(".toggle_allcheckbox").prop('checked', true);
        $(".toggle_allcheckbox").attr("data-check",'false');
        $(".toggle_allcheckbox").html('Uncheck All');
    }
}



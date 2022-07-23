let CANNABIST = $('#category0');
let CHRIOPRACTOR = $('#category1');
let DENTAL = $('#category2');
let E_COMMERCE = $('#category3');
let Football_Club  = $('#category4');
let HVAC = $('#category5');
let LAW_FIRM = $('#category6');
let OPTOMETRY = $('#category7');
let PHYSIOTHERAPY = $('#category8');
let PLASTIC_SURGEONS = $('#category9');
let REAL_ESTATE = $('#category10');
let SPORTS_MEDICINE = $('#category11');
let VETERINARIANS = $('#category12');

$('#category').addClass('d-none');

$('#countryName').change(function(){
    let countryName = $('#countryName').val();
    $('#category').val('none');

    if(countryName !== 'none'){
        $('#category').removeClass('d-none');
    }
    if(countryName == 'Canada'){
        canadaCategory();
    }else if(countryName == 'France'){
        franceCategory();
    }else if(countryName == 'Germany'){
        franceCategory();
    }else if(countryName == 'USA'){
        franceCategory();
    }else{
        $('#category').addClass('d-none');
    }
});

$( document ).ready(function() {
    allTable();
});

$('#filterBtn').click(function(){
    let countryName = $('#countryName').val();
    let categoryName = $('#category').val();

    if(countryName == 'Canada' && categoryName == 'Cannabist'){
        allTable();
        $('#table0').removeClass('d-none');
    }else if(countryName == 'Germany' && categoryName == 'Football-Club'){
        allTable();
        $('#table01').removeClass('d-none');
    }else if(countryName == 'France' && categoryName == 'Football-Club'){
        allTable();
        $('#table02').removeClass('d-none');
    }
});

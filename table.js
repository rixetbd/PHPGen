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
    allTable();
    downBTN();
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
    defaultTable();

    let countryName = $('#countryName').val();
    let categoryName = $('#category').val();

    if(countryName == 'Canada' && categoryName == 'Cannabist'){
        allTable();
        $('#tablepress-Canada_Cannabist_wrapper').removeClass('d-none');
    }else if(countryName == 'Canada' && categoryName == 'Chriopractor'){
        allTable();
        $('#tablepress-Canada_Chriopractor_wrapper').removeClass('d-none');
    }else if(countryName == 'Canada' && categoryName == 'Dental'){
        allTable();
        $('#tablepress-Canada_Dental_wrapper').removeClass('d-none');
    }else if(countryName == 'Canada' && categoryName == 'E-commerce'){
        allTable();
        $('#tablepress-Canada_eCommerce_wrapper').removeClass('d-none');
    }else if(countryName == 'Canada' && categoryName == 'Football-Club'){
        allTable();
    }else if(countryName == 'Canada' && categoryName == 'Hvac'){
        allTable();
        $('#tablepress-Canada_HVAC_wrapper').removeClass('d-none');
    }else if(countryName == 'Canada' && categoryName == 'Law-Firm'){
        allTable();
        $('#tablepress-Canada_Law_wrapper').removeClass('d-none');
    }else if(countryName == 'Canada' && categoryName == 'Optometry'){
        allTable();
        $('#table01').removeClass('d-none');
    }else if(countryName == 'Canada' && categoryName == 'Physiotherapy'){
        allTable();
        $('#table01').removeClass('d-none');
    }else if(countryName == 'Canada' && categoryName == 'Plastic-Surgeons'){
        allTable();
        $('#table01').removeClass('d-none');
    }else if(countryName == 'Canada' && categoryName == 'Real-Estate'){
        allTable();
        $('#table01').removeClass('d-none');
    }else if(countryName == 'Canada' && categoryName == 'Sports-Medicine'){
        allTable();
        $('#table01').removeClass('d-none');
    }else if(countryName == 'Canada' && categoryName == 'Veterinarians'){
        allTable();
        $('#table02').removeClass('d-none');
    }
    downBTN();
});





// Function JS

function canadaCategory(){
    $('#category0').removeClass('d-none');
    $('#category1').removeClass('d-none');
    $('#category2').removeClass('d-none');
    $('#category3').removeClass('d-none');
    $('#category4').addClass('d-none');
    $('#category5').removeClass('d-none');
    $('#category6').removeClass('d-none');
    $('#category7').removeClass('d-none');
    $('#category8').removeClass('d-none');
    $('#category9').removeClass('d-none');
    $('#category10').removeClass('d-none');
    $('#category11').removeClass('d-none');
    $('#category12').removeClass('d-none');
}
function franceCategory(){
    $('#category4').removeClass('d-none');
    $('#category0').addClass('d-none');
    $('#category1').addClass('d-none');
    $('#category2').addClass('d-none');
    $('#category3').addClass('d-none');
    $('#category5').addClass('d-none');
    $('#category6').addClass('d-none');
    $('#category7').addClass('d-none');
    $('#category8').addClass('d-none');
    $('#category9').addClass('d-none');
    $('#category10').addClass('d-none');
    $('#category11').addClass('d-none');
    $('#category12').addClass('d-none');
}

function allTable(){
    $('#tablepress-Canada_Cannabist_wrapper').addClass('d-none');
    $('#tablepress-Canada_Chriopractor_wrapper').addClass('d-none');
    $('#tablepress-Canada_Dental_wrapper').addClass('d-none');
    $('#tablepress-Canada_eCommerce_wrapper').addClass('d-none');
    $('#tablepress-Canada_HVAC_wrapper').addClass('d-none');
    $('#tablepress-Canada_Law_wrapper').addClass('d-none');
}

function defaultTable(){
    let countryName = $('#countryName').val();
    let categoryName = $('#category').val();

    if(categoryName == 'none'){
        $('#tablepress-Canada_all_wrapper').removeClass('d-none');
    }else{
        $('#tablepress-Canada_all_wrapper').addClass('d-none');
    }
}

function rowFun(){
    var rows = '';
    let countryName = $('#countryName').val();
    let categoryName = $('#category').val();

    if(countryName == 'Canada' && categoryName == 'Cannabist'){
        return rows = document.querySelectorAll("#tablepress-Canada_Cannabist_wrapper tr");
    }else if(countryName == 'Canada' && categoryName == 'Chriopractor'){
        return rows = document.querySelectorAll("#tablepress-Canada_Chriopractor_wrapper tr");
    }else if(countryName == 'Canada' && categoryName == 'Dental'){
        return rows = document.querySelectorAll("#tablepress-Canada_Dental_wrapper tr");
    }else if(countryName == 'Canada' && categoryName == 'E-commerce'){
        return rows = document.querySelectorAll("#tablepress-Canada_eCommerce_wrapper tr");
    }else if(countryName == 'Canada' && categoryName == 'Hvac'){
        return rows = document.querySelectorAll("#tablepress-Canada_HVAC_wrapper tr");
    }else if(countryName == 'Canada' && categoryName == 'Law-Firm'){
        return rows = document.querySelectorAll("#tablepress-Canada_Law_wrapper tr");
    }else if(countryName == 'Germany' && categoryName == 'Football-Club'){
        return rows = document.querySelectorAll("#table01 tr");
    }else if(countryName == 'France' && categoryName == 'Football-Club'){
        return rows = document.querySelectorAll("#table02 tr");
    }else{
        return rows = '';
    }       
}

function htmlToCSV(html, filename) {
	var data = [];
	// var rows = document.querySelectorAll(`#table0 tr`);
   var rows = rowFun();
	for (var i = 0; i < rows.length; i++) {
		var row = [], cols = rows[i].querySelectorAll("td, th");
				
		for (var j = 0; j < cols.length; j++) {
		        row.push(cols[j].innerText);
        }     
		data.push(row.join(",")); 		
	}
	downloadCSVFile(data.join("\n"), filename);
}

function downloadCSVFile(csv, filename) {
	var csv_file, download_link;
	csv_file = new Blob([csv], {type: "text/csv"});
	download_link = document.createElement("a");
	download_link.download = filename;
	download_link.href = window.URL.createObjectURL(csv_file);
	document.body.appendChild(download_link);
	download_link.click();
}

document.getElementById("downloadButton").addEventListener("click", function () {
    let countryName = $('#countryName').val();
    let categoryName = $('#category').val();
	var html = document.querySelector("table").outerHTML;
	htmlToCSV(html, `${countryName}-${categoryName}.csv`);
});

function downBTN(){
    let categoryName = $('#category').val();

    if(categoryName == 'none'){
        allTable();
        $('#downloadButton').addClass('d-none');
    }else{
        $('#downloadButton').removeClass('d-none');
    }
}

$('#downloadButton').addClass('d-none');



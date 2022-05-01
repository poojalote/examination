
$( document ).ready(function() {
   getUsers();
});
function getUsers() {
	
	
	app.dataTable('UserTable', {
		url: baseURL + "getUserDetails"
	}, [
		{
			data: 1,
		},
		{
			data: 2,
		},{
			data: 3,
		},
		{
			data: 0,
			render: (d, t, r, m) => {
					return `
							<button class="btn btn-primary btn-action mr-1" type="button"  
                                  onclick="getResultData(${r[0]})">
                             <i class="fas fa-eye"></i> 
                            </button>
                           `;
			}
		}
	
	], (nRow, aData, iDisplayIndex, iDisplayIndexFull) => {
		 $('td:eq(3)', nRow).html(`<button class="btn btn-primary btn-action mr-1" type="button"  
                                  onclick="getResultData(${aData[0]})">
                             <i class="fas fa-eye"></i> 
                            </button>`);
		

		

	})
}

function getResultData(id){
	$("#ResultModal").modal('show');
	checkDataAvailable(id);
}
function checkDataAvailable(id){
	var formdata = new FormData();
	formdata. append("id", id);
	app.request("checkDataAvailable",formdata).then(success => {
		if(success.status == 200){
			gethtmlData(success.data);
		}else{
			$("#ResultDIv").html('No Result Found');
		}

	}).catch(error => console.log(error));
}
function gethtmlData(resultData){
	var html='';
	 html +=`<div class='row mb-3' id='finalResult'></div><hr><div class='row'>
			<div class='col-md-6' style='color:#000000'><h6>Question</h6></div>
			<div class='col-md-3' style='color:#000000'><h6>Answer Given By you</h6></div>
			<div class='col-md-3' style='color:#000000'><h6>Correct Answer</h6></div>
			
			</div>`;
			var correctCount=0;
			var wrongCount=0;
			var total=0;
	$.each(resultData, function (key, result) {
		if(result.correct_wrong_status == 0){
			var style='color:red;font-weight:bold';
			wrongCount++;
		}else{
			var style='color:#16e44de6;font-weight:bold';
			correctCount++;
		}
			html += `<div class='row'>
			<div class='col-md-6'>${result.question}</div>
			<div class='col-md-3' style='${style}'>${result.answer_by_user}</div>
			<div class='col-md-3' style='font-weight:bold'>${result.correct_answer}</div>
			</div><hr>`;
			total++;
			});
			$("#ResultDIv").html(html);
			var percentage=(correctCount/total)*100;
			$("#finalResult").html(`
			<div class='col-md-4'><h6 style='color:#16e44de6;'>Correct Answers : ${correctCount}</h6></div>
			<div class='col-md-4'><h6 style='color:red;'>Wrong Answers : ${wrongCount}</h6></div>
			<div class='col-md-4'><h6 style='color:black;'>Percentage : ${percentage}%</h6></div>
			`);
			
}
$( document ).ready(function() {
	checkDataAvailable();
   getQuestion();
   
});
function checkDataAvailable(){
	app.request("checkDataAvailable").then(success => {
		if(success.status == 200){
			$(".questionDIv").hide();
			$(".ResultDIv").show();
			gethtmlData(success.data);
		}else{
			$(".questionDIv").show();
			$(".ResultDIv").hide();
		}

	}).catch(error => console.log(error));
}
var correctAnwerArray=[];
var QuestArray=[];
function getQuestion(){
	app.request("https://opentdb.com/api.php?amount=10").then(success => {
//console.log(success.results);	
	var html='';
		var cnt=1;
    $.each(success.results, function (key, val) {
		var answers=val.incorrect_answers;
		answers.push(val.correct_answer);
		answers=shuffle(answers);
		correctAnwerArray.push(val.correct_answer);
		QuestArray.push(val.question);
		
				var ans='';
				var cntans=1;
			$.each(answers, function (ans_key, ans_val) {
			ans +=`<div class="">
					<input type="radio" value="${ans_val}" id="answer${cntans}" name="answer${cnt}"> ${ans_val}
				</div>`;
				cntans++;
			});
		
		

		//questionDIv
		html +=`<div class="row">
		<div class="col-12"><h6 style="font-size:14px;font-weight:900">${cnt} . ${val.question}</h6></div>
		</div>${ans}<hr>`;
		cnt++;
    });
	
	$("#questionDIv").html(html);

	}).catch(error => console.log(error));
}

function shuffle(array) {
  let currentIndex = array.length,  randomIndex;

  // While there remain elements to shuffle.
  while (currentIndex != 0) {

    // Pick a remaining element.
    randomIndex = Math.floor(Math.random() * currentIndex);
    currentIndex--;

    // And swap it with the current element.
    [array[currentIndex], array[randomIndex]] = [
      array[randomIndex], array[currentIndex]];
  }

  return array;
}

function SaveData(){
	var form_data = document.getElementById('questionAnswerForm');
		var Form_data = new FormData(form_data); //
		Form_data. append("Data", btoa(JSON.stringify(correctAnwerArray)));
		Form_data. append("QuestArray", btoa(JSON.stringify(QuestArray)));
	app.request("SaveQuestionAnswer",Form_data).then(success => {
		if(success.status == 200){
			$(".questionDIv").hide();
			$(".ResultDIv").show();
			checkDataAvailable();
		}else{
			alert(success.body);
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
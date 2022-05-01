
$("#logoutBtn").hide();

function checkLogin() {
	// console.log('hiiii');
	var formData = new FormData(document.querySelector('#loginForm'));
	app.request(baseURL + "login", formData).then(success => {
		if (success.status === 200) {
			let userData = success.data;
			// console.log(baseURL);
			//alert(success.body);
			if(userData['type']==1){
				window.location.href = baseURL + "admindashboard";
			}else{
				window.location.href = baseURL + "guestdashboard";
			}
			
		} else {
			alert(success.body);
		}

	}).catch(error => console.log(error));
}

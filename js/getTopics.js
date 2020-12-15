window.onload = function() {
	getTopics();
};
function getTopics() {
	$.ajax({
		url: '/config/getTopics.php',
		type: 'post',
		success: function(response) {
			console.log(response);
			for(var k in response) {
				respp = response;
				auxString = `<div class="card">` +
					`<div class="card-body"><h5 class="card-title">${(response[k].topic).substring(0,75)}</h5>` +
					`<p class="card-text" style="white-space:inherit!important;">${(response[k].description).substring(0,100)}</p>` +
					`<a href="topic.php?id=${response[k].id}&topic=${response[k].topic}" class="btn btn-dark">Ver tema</a></div></div><br>`;
				$('.topic-holder').append(auxString);
			}	
		},
		error(err){
			console.log(err);
		}
	});
}

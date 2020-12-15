window.onload = function() {
	getTopics();
};

function getTopics() {
	$.ajax({
		url: '/config/getMembers.php',
		type: 'post',
		success: function(response) {
			console.log(response);
			for(var k in response) {
				respp = response;
				auxString = `<div class="card">` +
					`<div class="card-body"><h5 class="card-title">${(response[k].username).substring(0,75)}</h5>` +
					`<a href="member.php?id=${response[k].id}&username=${response[k].username}&rank=${response[k].rank}" class="btn btn-dark">Ver usuario</a></div></div><br>`;
				$('.member-holder').append(auxString);
			}	
		},
		error(err){
			console.log(err);
		}
	});
}

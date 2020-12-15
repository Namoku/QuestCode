window.onload = function() {
	var script_tag = document.getElementById('aux');
	var auxId = script_tag.getAttribute("auxId");
	var script_tag = document.getElementById('aux');
	var auxBoolean = script_tag.getAttribute("auxBoolean");
	if (auxBoolean != "true")
		getPosts(auxId);
	else
		getPost(auxId);
};
function getPosts(topicId) {
	$.ajax({
		url: '/config/getPosts.php',
		data: {id: topicId},
		type: 'post',
		success: function(response) {
			for(var k in response) {
				respp = response;
				$.ajax({
					url: '/config/getUser.php',
					type: 'post',
					data: { userid: response[k].username},
					async: false,
					success: function(resp) {
						console.log(k, respp[k]);
						verPostBoton = `<a href="post.php?id=${respp[k].id}" class="btn btn-dark">Ver post</a>`;
						$('.card-holder').append(`<div class="col-sm-4" style="margin-bottom: 20px; min-height: 290px;"><div class="card-body h-100"><h5 class="card-title">${(response[k].title).substring(0,25)}</h5><h6 class="card-subtitle mb-2 text-muted">${resp.username}</h6><p class="card-text h-50 text-truncate" style="white-space:inherit!important;">${(response[k].post).substring(0,100)}</p>${verPostBoton}</div></div>`);
					},
					error(eror){
						console.log(eror);
					}
				});
			}	
		},
		error(err){
			console.log(err);
		}
	});
}

function getPost(topicId) {
	$.ajax({
		url: '/config/getPost.php',
		data: {id: topicId},
		type: 'post',
		success: function(response) {
			for(var k in response) {
				respp = response;
				$.ajax({
					url: '/config/getUser.php',
					type: 'post',
					data: { userid: response[k].username},
					async: false,
					success: function(resp) {
						console.log(k, respp[k]);
						verPostBoton = `<a href="post.php?id=${respp[k].id}" class="btn btn-dark">Ver post</a>`;
						post = `
							<div class="card bg-dark">
								<h5 class="card-header">@${resp.username} escribió en ${respp[k].date}</h5>
								<div class="card-body">
									<h5 class="card-title">${respp[k].title}</h5>
									<p class="card-text">${respp[k].post}</p>
								</div>
							</div>
						`;
						$('.post-holder').append(post);
					},
					error(eror){
						console.log(eror);
					}
				});
			}	
		},
		error(err){
			console.log(err);
		}
	});
}

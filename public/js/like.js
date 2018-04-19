var postId = 0;

$('.like').on('click', function(event){

event.preventDefault();
postId = event.target.parentNode.parentNode.dataset['postid'];
var isLike = event.target.previousElementSibling ==null;


$.ajax({
	method : 'POST',
	url : ....,
	data : { islike :islike, postID: postid, _token: token}

})
.done(function(){
	event.target.innerText = islike ? event.target.innerText == 'Like' ? 'You like this post' : 'Like' : event.target.innerText == 'DisLike' ? 'You dont like this post' : 'DisLike' ;

	if(islike)
	{
		event.target.nextElementSibling.innerText = 'DisLike'; 
	}
	else
	{
		event.target.nextElementSibling.innerText = 'Like';
	}
})

});
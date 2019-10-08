$(document).ready(function(){
	$('#revealMessage').click(function(){
		$('#hiddenMessage').css("display","block")
		
	})
	var options = {
    valueNames: [ 'title' ]
};
new List('sortable-blog-list', options);
});

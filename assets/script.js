$(document).ready(function(){
	$('#revealMessage').click(function(){
		$('#hiddenMessage').css("display","block")
		
	})
	var options = {
    valueNames: [ 'title' ]
};
new List('sortable-blog-list', options);

 var editor = ace.edit("editor");
    editor.setTheme("ace/theme/eclipse");
    editor.session.setMode("ace/mode/javascript");
});

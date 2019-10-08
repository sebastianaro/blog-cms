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
    editor.session.setMode("ace/mode/html");

    $("#submit").click(function() {
    	var title = $("#title").val();
var author = $("#author").val();
var date = $("#date").val();
var content = editor.getValue();
    // TODO - what happens when it is clicked
});
    $.post( "submit-post.php", { 
        title: title, 
        content: content, 
        author: author, 
        date: date 
}).done(function() {
    window.location = "/index.php";
});

});

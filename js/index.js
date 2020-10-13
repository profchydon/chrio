$("#contactform").submit(function(event){
    // cancels the form submission
    event.preventDefault();
    submitForm();
});

function submitForm(){
    // Initiate Variables With Form Content
    var name = $("#name").val();
    var email = $("#email").val();
    var company = $("#company").val();
    var message = $("#message").val();
    var country = $("#country").val();
 
    $.ajax({
        type: "POST",
        url: "action.php",
        data: "name=" + name + "&email=" + email + "&message=" + message + "&company=" + company + "&country=" + country,
        success : function(text){
            $("#submit").css({"border-color": "#474747", "background": "#474747", "color": "#ffe600"});
            $("#contact-message").empty();
            $("#contact-message").append(text);
        },
        error: function (error) {
            $("#contact-message").empty();
            $("#contact-message").append(error);
        }
    });
}


function formSuccess(){
    $( "#msgSubmit" ).removeClass( "hidden" );
}
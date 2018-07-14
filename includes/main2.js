var popup3 = document.getElementById('popup3');

// Get the button that opens the modal
var btn1 = document.getElementById('check');

// Get the <span> element that closes the modal
var span1 = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal
btn1.onclick = function() {
    popup3.style.display = "block";
};

// When the user clicks on <span> (x), close the modal
span1.onclick = function() {
    popup3.style.display = "none";
};



$(function() {
    $("#course").submit(function () {
        var course = $("#choice").val();
        console.log(choice);
        $.ajax({
            type: "POST",
            url: "servers/db.php",
            data: {
                id: course
            },
            cache: true,
            success: function (data) {
               console.log("Success");
            }
        });
        return false;
    });
});

var save = document.getElementById('button2');
save.onclick = function () {
    popup3.style.display = "none";
    var change=document.getElementById('text')
    change.innerHTML="שם: הברית של יואב<br>\n" +
        "                תאריך:18.8.2018<br>\n" +
        "                סוג מנה:רגילה<br>" +
        "                סטטוס הגעה:בתהליך"
};
var popup2 = document.getElementById('popup2');
// Get the button that opens the modal

        var addG = document.getElementById('addG');
        var spanAdd = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal
        addG.onclick = function () {
            popup2.style.display = "block";
        };

// When the user clicks on <span> (x), close the modal
        spanAdd.onclick = function () {
            popup2.style.display = "none";
        };
        window.onclick = function (event) {
            if (event.target == popup2) {
                popup2.style.display = "none";
            }
        };

/// small table popup2
var countGuest=0;
var addRow1 = document.getElementById('add1');
addRow1.onclick = function () {
    var tableRef = document.getElementById('table3').getElementsByTagName('tbody')[0];
// Insert a row in the table at the last row
    var newRow   = tableRef.insertRow(tableRef.rows.length);
// Insert a cell in the row at index 0
    var fname = document.getElementById('fname').value;
    var cel1 = newRow.insertCell(0);
    cel1.innerHTML = fname;
    countGuest++;
}

var update = document.getElementById('button1');
update.onclick = function () {
    var tableRef = document.getElementById('table').getElementsByTagName('tbody')[0];
    popup2.style.display = "none";

}

$(function() {
    $(document).ready(function () {
        $.ajax({
            type: "POST",
            url: "servers/db.php",
            data: {},
            cache: true,
            success: function (data) {

            }
        });
        return false;
    });
});


$(function() {
    $("#posts").submit(function () {
        var fname = $("#fname").val();
        var foodType = " ";
        var dataString = 'fname=' + fname + '&foodType=' + foodType;
        console.log(dataString);
        $.ajax({
            type: "POST",
            url: "servers/db.php",
            data: dataString,
            cache: true,
            success: function (data) {

            }
        });
        return false;
    });
});
/*
for(var i=0; i<5; i++) {
    var element = document.getElementById("delete");
    element.classList.add =("hello");
}
*/

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

var tbody = document.getElementById("tbody2");
$("document").ready(function () {
    console.log("first");
    $.ajax({
        url: "servers/db.php",
        type: "POST",
        data: {},
        success: function (data) {
            tbody.innerHTML += data;
            $('.delete').click(deleteUser);
        }
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
                tbody.innerHTML = data;
                $('.delete').click(deleteUser);
            }
        });
        return false;
    });
});

function deleteUser() {
    itemID = $(this).attr("id");
    //console.log(itemID);

    $.ajax({
        url: "servers/db.php",
        type: "POST",
        data: {
            id: itemID
        },
        success: function (data) {
            tbody.innerHTML = data;
            $('.delete').click(deleteUser);
        }

    });

}

/*

window.onload = function() {
    var popup4 = document.getElementById('popup4');
// Get the button that opens the modal
    console.log("Second");
    for (var i = 0; i < count; i++) {
        var updateC = document.getElementsByClassName('edit')[0];
        console.log(updateC);
        var spanU = document.getElementsByClassName("close")[1];

// When the user clicks the button, open the modal
        updateC.onclick = function () {
            popup4.style.display = "block";
        };

        spanU.onclick = function () {
            popup4.style.display = "none";
        };
    }
};
*/

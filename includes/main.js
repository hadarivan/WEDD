
var popup1 = document.getElementById('popup1');
// Get the button that opens the modal
var btn = document.getElementById('myBtn');

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal
btn.onclick = function() {
    popup1.style.display = "block";
};

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    popup1.style.display = "none";
};

$(function() {
    $.getJSON("data/groupTable.json", function(data) {
        for(row of data) {
            var table_row = $(
                '<tr>' +
                '<td>' + row.relation + '</td>' +
                '<td>' + '<a href="#" class="userBtn" type="button">' + '<i class="fa fa-user-o" aria-hidden="true">' + '</i>' +
                '</a>' + '</td>' +
                '<td>' + row.number + '</td>' +
                '<td>' + row.priority + '</td>' +
                '<td>' + row.groupName + '</td>' +
                '</tr>'
            )
            $("#tbody1").append(table_row)

        }
    });
});


//small table popup1 ADD
var count=0;
var addRow = document.getElementById('add');
addRow.onclick = function () {
    var tableRef = document.getElementById('table2').getElementsByTagName('tbody')[0];
// Insert a row in the table at the last row
    var newRow   = tableRef.insertRow(tableRef.rows.length);
// Insert a cell in the row at index 0
    var fname = document.getElementById('fullName').value;
    var cel2 = newRow.insertCell(0);
    var cel1 = newRow.insertCell(1);
    var cel3 = newRow.insertCell(2);
    cel1.innerHTML = fname;
    cel2.innerHTML = '<i class="fa fa-plus-circle" aria-hidden="true"></i>';
    cel3.innerHTML = '<button id="delete" value="Delete row" onclick="deleteRow(this)" type="button"><i class="fa fa-window-close" aria-hidden="true"></i></button>';
    count++;
}

function deleteRow(el) {
    while (el.parentNode && el.tagName.toLowerCase() != 'tr') {
        el = el.parentNode;
    }
    if (el.parentNode && el.parentNode.rows.length > 0) {
        el.parentNode.removeChild(el);
    }
    count--;
}



///big table


var addRow2 = document.getElementById('button');
addRow2.onclick = function () {
    if(count >0) {
        var tableRef = document.getElementById('table1').getElementsByTagName('tbody')[0];
// Insert a row in the table at the last row
        var newRow = tableRef.insertRow(tableRef.rows.length);
// Insert a cell in the row at index 0
// Append a text node to the cell
        var gname = document.getElementById('groupName').value;
        var relation = document.getElementById('Relation').value;
        var prio = document.getElementById('Priority').value;

        var cel1 = newRow.insertCell(0);
        var cel2 = newRow.insertCell(1);
        var cel3 = newRow.insertCell(2);
        var cel4 = newRow.insertCell(3);
        var cel5 = newRow.insertCell(4);
        var cel6 = newRow.insertCell(5);
        cel1.innerHTML = '<button class="addG" type="button"><i class="fa fa-plus-circle" aria-hidden="true"></i></button>';
        cel2.innerHTML = relation;
        cel3.innerHTML = '<i class="fa fa-user-o" aria-hidden="true"></i>';
        cel4.innerHTML = count;
        cel5.innerHTML = prio;
        cel6.innerHTML = gname;

    }
    popup1.style.display = "none";

};






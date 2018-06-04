
var popup1 = document.getElementById('popup1');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

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

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == popup1) {
        popup1.style.display = "none";
    }
};


//small table popup1
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

}
/*
var deleteRow = document.getElementById('delete');
deleteRow.onclick = function (){
    $('table2')
        .find('td')
        .append('<input type="button" value="Delete" class="del"/>')
        .parent()//traversing to 'tr' Element
        .append('<td><input type="button" value="Delete row" class="delrow" /></td>');
    console.log(this);
    $('.del').click(function() {
        $(this).parent().remove(); //Deleting TD element
    });

    $('.delrow').click(function(){
        $(this).parent().parent().remove(); //Deleting the Row (tr) Element
    });
};
*/

var popup2 = document.getElementById('popup2');
var tableSize=document.getElementById('table1').getElementsByTagName('tbody')[0];
// Get the button that opens the modal
for (var i=0; i<tableSize.rows.length ; i++)
{
    var addG = document.getElementsByClassName("addG")[i];
    var spanAdd = document.getElementsByClassName("close")[1];

// When the user clicks the button, open the modal
    addG.onclick = function() {
        popup2.style.display = "block";
    };

// When the user clicks on <span> (x), close the modal
    spanAdd.onclick = function() {
        popup2.style.display = "none";
    };
    window.onclick = function(event) {
        if (event.target == popup2) {
            popup2.style.display = "none";
        }
    };
}
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
    var tableRef = document.getElementById('table1').getElementsByTagName('tbody')[0];
    var x=document.getElementById('table1').rows;
    var y=x[1].cells;
    y[3].innerHTML=11+countGuest;
    popup2.style.display = "none";

}

function Process() {
    alert("הסידור נוצר בהצלחה");
}


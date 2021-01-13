console.log('main.js linked');

function exerciseAdded(name, category) {
    console.log(name);
    var newRow = document.getElementById('routine-table').insertRow();
    newRow.innerHTML = "<td>" + name + "</td><td>" + category + "</td>";
}
function submit(){

    var alertString = "You searched for: ";

    if (document.getElementById('Action').checked) {
        alertString += "Action ";
    }
    if (document.getElementById('Animation').checked) {
        alertString += "Animation ";
    }
    if (document.getElementById('Children').checked) {
        alertString += "Children ";
    }
    if (document.getElementById('Classics').checked) {
        alertString += "Classics ";
    }
    if (document.getElementById('Comedy').checked) {
        alertString += "Comedy ";
    }
    if (document.getElementById('Drama').checked) {
        alertString += "Drama ";
    }
    if (document.getElementById('Documetary').checked) {
        alertString += "Documetary ";
    }
    if (document.getElementById('Family').checked) {
        alertString += "Family ";
    }
    if (document.getElementById('Foreign').checked) {
        alertString += "Foreign ";
    }
    if (document.getElementById('Games').checked) {
        alertString += "Games ";
    }
    if (document.getElementById('Horror').checked) {
        alertString += "Horror ";
    }
    if (document.getElementById('Music').checked) {
        alertString += "Music ";
    }
    if (document.getElementById('News').checked) {
        alertString += "News ";
    }
    if (document.getElementById('Sci-Fi').checked) {
        alertString += "Sci-Fi ";
    }
    if (document.getElementById('Sports').checked) {
        alertString += "Sports ";
    }
    if (document.getElementById('Travel').checked) {
        alertString += "Travel ";
    }
    if (document.getElementById('textInput').value != "") {
        alertString += ("and " + document.getElementById('textInput').value);
    }


    alert(alertString);
}

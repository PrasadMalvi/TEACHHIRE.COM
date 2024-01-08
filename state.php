<!DOCTYPE html>
<html>
<head>
<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
<style type="text/css">
body{
    background-color: #EEEEEE;
    font-family: "Open Sans";
    font-size: 16px;
    text-align: center;
}
.center{
    margin: auto;
    width: 425px;
}
.selector{
    font-family: "Open Sans";
    font-size: 18px;
    width: 425px;
    margin-left: auto;
margin-right: auto;
    position: relative;   
    text-align: center;
}
.heading{
    font-family: "Open Sans";
    font-size: 32px;
    text-align: center;
}
a{
    text-decoration: none;
    color: #F00;
}
</style>
<script type="text/javascript">
function stateSelected(){ 
    var s = document.getElementById("stateSelect");
    var californiaCities = new Array("Los Angeles", "San Francisco");
    var texasCities = new Array("Houston", "Dallas");
        var title = document.createElement("p");
        title.innerHTML = "Select a city:"
        title.className = "heading";
        document.body.appendChild(title);
        switch(s.options[s.selectedIndex].value){
            case "stateCalifornia":
                createSelector(californiaCities, s);
                break;
            case "stateTexas":
                createSelector(texasCities, s);
                break;
        }
}
function createSelector(array, s){
    var sState = document.createElement("p");
    sState.innerHTML = "Selected State: " + s.options[s.selectedIndex].text;
    document.body.appendChild(sState);
    var sTitle = document.getElementById("sTitle");
    sTitle.parentNode.removeChild(sTitle);
    s.parentNode.removeChild(s);
    var newSelect = document.createElement("select");
    var holder = document.createElement("div");
    holder.className = "center";
    var selectOption = document.createElement("option");
    selectOption.selected = "selected";
    selectOption.value = "";
    selectOption.text = "Select a city";
    newSelect.appendChild(selectOption);
    for(var i = 0; i < array.length; ++i){
            var newOption = document.createElement("option");
            newOption.value = "city" + array[i].replace(/\s+/g, '');
            newOption.text = array[i];
            newSelect.onchange = townSelected;
            newSelect.id = "citySelect";
            newSelect.appendChild(newOption);
    }
    newSelect.className = "selector";
    holder.appendChild(newSelect);
    document.body.appendChild(holder);
}
function townSelected(){
    var c = document.getElementById("citySelect");
    window.location.href = "cities/" + c.options[c.selectedIndex].text.replace(/\s+/g, '_').toLowerCase() + ".html";
}
</script>
</head>
<body>
Made a mistake? <a href="#" onclick="location.reload()">Start Again</a>
</br>
<p id="sTitle" class="heading">Select a state:</p>
<div class="center">
<select id="stateSelect" onchange="stateSelected();" class="selector">
<option value="" selected="selected">Select a state</option>
<option value="stateCalifornia">California</option>
<option value="stateTexas">Texas</option>
</select>
</div>
</body>
</html>
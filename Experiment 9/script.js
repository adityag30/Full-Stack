var colors = [
    "#e9b6b6",  
    "#84c7d0",  
    "#c6b273",  
    "#4e726b",  
    "#184f76",  
    "#86455a",  
    "#1d6723"   
];
var index = 0;
function changeColor() {
    document.body.style.backgroundColor = colors[index];
    index++;
    if (index >= colors.length) {
        index = 0;
    }
}
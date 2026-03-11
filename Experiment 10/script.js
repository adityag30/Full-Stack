function showCalendar() {
    let month = +document.getElementById("month").value;
    let year = +document.getElementById("year").value;
    let firstDay = new Date(year, month, 1).getDay();
    let totalDays = new Date(year, month + 1, 0).getDate();
    let cal = "<tr>";
    let days = ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"];
    for (let i = 0; i < days.length; i++) {
        cal += "<th>" + days[i] + "</th>";
    }
    cal += "</tr><tr>";
    for (let i = 0; i < firstDay; i++) {
        cal += "<td></td>";
    }
    for (let i = 1; i <= totalDays; i++) {
        cal += "<td>" + i + "</td>";
        if ((firstDay + i) % 7 === 0) {
            cal += "</tr><tr>";
        }
    }
    cal += "</tr>";
    document.getElementById("calendar").innerHTML = cal;
}
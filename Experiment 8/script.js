function register(){
    alert("Welcome to Examination Registration Portal");
    var name = prompt("Enter your name:");
    if(name == "" || name== null){
        alert("Name is required!");
        return;
    }
    var confirmation = confirm("Do you want to proceed with Registrations");
    if(confirmation){
        window.location.href="admitcard.html";
    }
    else{
        alert("Registration Cancelled");
    }
}
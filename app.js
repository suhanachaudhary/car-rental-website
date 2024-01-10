
let city=document.querySelector("#city");
let startime=document.querySelector("#start");
let endtime=document.querySelector("#end");
let email=document.querySelector("#email");
let phone=document.querySelector("#phone");
 let form=document.querySelector(".image .booking-form #detailed-form");
form.addEventListener("submit" ,(e)=>{
    alert("it's work");
    if(city.value===""||city.value==null){
        e.defaultPrevent();
        location_error.innerHTML="name is required";
    }
    alert("form is submitted");
});


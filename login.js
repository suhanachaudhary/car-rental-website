const wrapper=document.querySelector(".wrapper");
const loginpage=document.querySelector(".login-link");
const registerhere=document.querySelector(".register-link");
let loginbtn=document.querySelector(".login-page");
let icon=document.querySelector(".icon-close");

registerhere.addEventListener("click", ()=>{
wrapper.classList.add("active");
});

loginpage.addEventListener("click", ()=>{
    wrapper.classList.remove("active");
    });

loginbtn.addEventListener("click", function(){
    wrapper.classList.add("active-popup");
}) ; 

icon.addEventListener("click", function(){
    wrapper.classList.remove("active-popup");
});
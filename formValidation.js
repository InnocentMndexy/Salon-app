//validation proces
//A function to select all names 

function validationText(data){

    let secondaryData = document.getElementById(data);
    let btnMain = document.getElementById('btnBtn');
    let btnMainB = document.getElementById('btnBtnB');

    //All text validation
    if(secondaryData.value.toString().length >= 2 && (!/[^a-zA-Z]/.test(secondaryData.value))){
    
        secondaryData.style.borderBottom = "5px solid #00e6ac";
        secondaryData.style.color = "balck";
        btnMain.style.display = "";
        btnMainB.style.display = "";
    }else{
        secondaryData.style.borderBottom = "5px solid #ff6666";
        secondaryData.style.color = "black";
        btnMain.style.display = "none";
        btnMainB.style.display = "none";
    }

}
//Adress validation
function validationAddress(data){

    let secondaryData = document.getElementById(data);
    let btnMain = document.getElementById('btnBtn');
    let btnMainB = document.getElementById('btnBtnB');

    //All text validation
    if(secondaryData.value.toString().length >= 2){
    
        secondaryData.style.borderBottom = "5px solid #00e6ac";
        secondaryData.style.color = "balck";
        btnMain.style.display = "";
        btnMainB.style.display = "";
    }else{
        secondaryData.style.borderBottom = "5px solid #ff6666";
        secondaryData.style.color = "black";
        btnMain.style.display = "none";
        btnMainB.style.display = "none";
    }

}
//Adress validation
function validationPostal(data){

    let secondaryData = document.getElementById(data);
    let btnMain = document.getElementById('btnBtn');
    let btnMainB = document.getElementById('btnBtnB');

    //All text validation
    if(secondaryData.value.toString().length >= 2 && secondaryData.value.toString().length <= 4){
    
        secondaryData.style.borderBottom = "5px solid #00e6ac";
        secondaryData.style.color = "balck";
        btnMain.style.display = "";
        btnMainB.style.display = "";
    }else{
        secondaryData.style.borderBottom = "5px solid #ff6666";
        secondaryData.style.color = "black";
        btnMain.style.display = "none";
        btnMainB.style.display = "none";
    }

}
//ID validation
function idValidation(data){


    let secondaryData = document.getElementById(data);
    let btnMain = document.getElementById('btnBtn');
    let btnMainB = document.getElementById('btnBtnB');

    if(secondaryData.value.toString().length == 13){
        secondaryData.style.borderBottom = "5px solid #00e6ac";
        secondaryData.style.color = "balck";
        btnMain.style.display = "";
        btnMainB.style.display = "";
    }else{
        secondaryData.style.borderBottom = "5px solid #ff6666";
        secondaryData.style.color = "black";
        btnMain.style.display = "none";
        btnMainB.style.display = "none";
    }

}
//Cell phone validation
function cellPhoneValidation(data){

    let secondaryData = document.getElementById(data);
    let btnMain = document.getElementById('btnBtn');
    let btnMainB = document.getElementById('btnBtnB');

    if(secondaryData.value.toString().length == 10){
        secondaryData.style.borderBottom = "5px solid #00e6ac";
        secondaryData.style.color = "balck";
        btnMain.style.display = "";
        btnMainB.style.display = "";
    }else{
        secondaryData.style.borderBottom = "5px solid #ff6666";
        secondaryData.style.color = "black";
        btnMain.style.display = "none";
        btnMainB.style.display = "none";
    }

}
//Email validation
function ValidateEmail(data) {

    let emailAdress = document.getElementById(data);
    let regexEmail = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    let btnMain = document.getElementById('btnBtn');
    let btnMainB = document.getElementById('btnBtnB');

    if (emailAdress.value.match(regexEmail)) {

        emailAdress.style.backgroundColor = "#00e6ac";
        emailAdress.style.color = "white";
        btnMain.style.display = "";
        btnMainB.style.display = "";
    } else {

        emailAdress.style.backgroundColor = "#ff6666";
        emailAdress.style.color = "white"; 
        btnMain.style.display = "none";
        btnMainB.style.display = "none";
    }

}
function CheckPassword(data) { 
    let secondaryData = document.getElementById(data);
    let btnMain = document.getElementById('btnBtn');
    let btnMainB = document.getElementById('btnBtnB');


    //Check length
    if (!/[^a-zA-Z]/.test(secondaryData.value)){
        secondaryData.style.borderBottom = "5px solid #ff6666";
        secondaryData.style.color = "black";
        btnMain.style.display = "none";
        btnMainB.style.display = "none";
        

    }else{
        if(secondaryData.value.toString().length  >= 8){
            secondaryData.style.backgroundColor = "#00e6ac";
            secondaryData.style.color = "white";
            btnMain.style.display = "";
            btnMainB.style.display = "";

        }else{
            secondaryData.style.backgroundColor = "#ff6666";
            secondaryData.style.color = "white";
            btnMain.style.display = "none";
            btnMainB.style.display = "none";
        }
    }
}  

function sendMail(){
    var params={
        name : document.getElementById("name").value,
        email: document.getElementById("email").value,
        subject: document.getElementById("subject").value,
        message: document.getElementById("message").value,


    }
const serviceID="service_ja30roe";
const templateID="template_5rao0j2";
emailjs.send(serviceID,templateID,params).then(
    res=>{
        document.getElementById("name").value="";
        document.getElementById("email").value="";
        document.getElementById("subject").value="";
        document.getElementById("message").value="";
        console.log(res);
        alert("your message send successfully");


})
.catch((err)=>console.log(err));}

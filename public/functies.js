/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function uploadNameAsync(){
    var name = document.getElementById("name").value;
    alert("deze naam is ontvangen door getelembyid " + name);
    var url = "http://127.0.0.1:8000/api/nameAndId/" + name;
    //window.location=url;
    fetch(url)
            .then(response => {if (response.ok) return response.js; else alert(mislukt);}).then(alert("ok"));
}

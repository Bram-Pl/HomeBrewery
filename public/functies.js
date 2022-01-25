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

function uploadNameAsyncPost(){
    var name = document.getElementById("name").value;
    var achternaam = document.getElementById("achternaam").value;
    var number = document.getElementById('number').value;
    //alert("deze naam is ontvangen door getelembyid " + name);
    var url = "https://howsmybeer.herokuapp.com/api/nameAndIdPost";
    //window.location=url;
    //let request = new XMLHttpRequest();
    jsonobj = {
        name:name,
        lastname:achternaam,
        number:number
    };
    jsonString = JSON.stringify(jsonobj);
    alert(jsonString);
    fetch(url,{
        method: 'POST',
        headers:{
            "Content-Type" : "application/json"
        },
        body : jsonString
        
    }).then(response => {
        if (response.ok){
            //alert("hi " + response.text());
            return response.json();//.then(data => {
                //alert(data);
         
        } 
        else {alert("Dikke Faal");}
        })
       .then(json => {alert("hi " +json.lastname);showData(json);});
}

function uploadBeerAsyncPost(){
    var name = document.getElementById("name").value;
    var tagline = document.getElementById("tagline").value;
    var firstbrewed = document.getElementById("firstbrewed").value;
    var Description = document.getElementById("Description").value;
    var imageurl = document.getElementById("imageurl").value;
    var abv = document.getElementById("abv").value;
    var ibu = document.getElementById("ibu").value;
    var target_fg = document.getElementById("target_fg").value;
    var target_og = document.getElementById("target_og").value;
    var ebc = document.getElementById("ebc").value;
    var srm = document.getElementById("srm").value;
    var ph = document.getElementById("ph").value;
    var attenuation = document.getElementById("attenuation").value;
    var boilvolume = document.getElementById("boilvolume").value;
    var boilvolumeUnit = document.getElementById("boilvolumeUnit").value;
    var boilTime = document.getElementById("boilTime").value;
    var boilTimeUnit = document.getElementById("boilTimeUnit").value;
    var mashTemp = document.getElementById("mashTemp").value;
    var mashTempUnit = document.getElementById("mashTempUnit").value;
    var mashTime = document.getElementById("mashTime").value;
    var mashTimeUnit = document.getElementById("mashTimeUnit").value;
    var foodpairings = document.getElementById("foodpairings").value;
    var tips = document.getElementById("tips").value;
    var type = document.getElementById("type").value;
    var maltName = document.getElementById("maltName").value;
    var maltAmount = document.getElementById("maltAmount").value;
    var maltUnit = document.getElementById("maltUnit").value;
    var hopsName = document.getElementById("hopsName").value;
    var hopsAmount = document.getElementById("hopsAmount").value;
    var hopsUnit = document.getElementById("hopsUnit").value;
    var yeastName = document.getElementById("yeastName").value;
    var yeastAmount = document.getElementById("yeastAmount").value;
    var yeastUnit = document.getElementById("yeastUnit").value;
    var url = "http://127.0.0.1:8000/api/BeerPost";
    var user_id = document.getElementById("user_id").value;
    var breweryID = document.getElementById("breweryID").value;
    //var url = "https://howsmybeer.herokuapp.com/api/BeerPost";
    jsonobj = {
            name:name,
            tagline:tagline,
            firstbrewed:firstbrewed,
            Description:Description,
            imageurl:imageurl,
            abv:abv,
            ibu:ibu,
            target_fg:target_fg,
            target_og:target_og,
            ebc:ebc,
            srm:srm,
            ph:ph,
            attenuation:attenuation,
            boilvolume:boilvolume,
            boilvolumeUnit:boilvolumeUnit,
            boilTime:boilTime,
            boilTimeUnit:boilTimeUnit,
            mashTemp:mashTemp,
            mashTempUnit:mashTempUnit,
            mashTime:mashTime,
            mashTimeUnit:mashTimeUnit,
            foodpairings:foodpairings,
            tips:tips,
            type:type,
            maltName:maltName,
            maltAmount:maltAmount,
            maltUnit:maltUnit,
            hopsName:hopsName,
            hopsAmount:hopsAmount,
            hopsUnit:hopsUnit,
            yeastName:yeastName,
            yeastAmount:yeastAmount,
            yeastUnit:yeastUnit,
            Contributer:user_id,
            brewery:breweryID
        };   
    jsonString = JSON.stringify(jsonobj);
    alert(jsonString);
    
    fetch(url,{
        method: 'POST',
        headers:{
            "Content-Type" : "application/json"
        },
        body : jsonString
    }).then(response => {
        if (response.ok){
            //alert("hi " + response.text());
            return response.json();//.then(data => {
                //alert(data);
         
        } 
        else {alert("Dikke Faal")}
        })
       .then(json => {alert("beer got ID : " +json.beerID);showData(json);});

}

function showData(json){
    alert(json.name);
}
var id=1;
function show(){
    if(window.XMLHttpRequest){
        xmlhttp=new XMLHttpRequest();
    }
    else {
        xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange=function()
    {
        if (xmlhttp.readyState==4 && xmlhttp.status==200)
        {
            document.getElementById("txt1").innerHTML=xmlhttp.responseText;
        }
    }
    id=1;
    xmlhttp.open("GET","../php/show_message.php?q="+id,true);
    xmlhttp.send();
}

function next(){
    if(window.XMLHttpRequest){
        xmlhttp=new XMLHttpRequest();
    }
    else {
        xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange=function()
    {
        if (xmlhttp.readyState==4 && xmlhttp.status==200)
        {
            document.getElementById("txt1").innerHTML=xmlhttp.responseText;
        }
    }
    id+=1;
    xmlhttp.open("GET","../php/show_message.php?q="+id,true);
    xmlhttp.send();
}

function former(){
    if(window.XMLHttpRequest){
        xmlhttp=new XMLHttpRequest();
    }
    else {
        xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange=function()
    {
        if (xmlhttp.readyState==4 && xmlhttp.status==200)
        {
            document.getElementById("txt1").innerHTML=xmlhttp.responseText;
        }
    }
    id-=1;
    xmlhttp.open("GET","../php/show_message.php?q="+id,true);
    xmlhttp.send();
}


function show_my(){
    if(window.XMLHttpRequest){
        xmlhttp=new XMLHttpRequest();
    }
    else {
        xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange=function()
    {
        if (xmlhttp.readyState==4 && xmlhttp.status==200){
            document.getElementById("my").innerHTML=xmlhttp.respnseText;
        }
    }
    xmlhttp.open("GET","../php/welcome.php");
    xmlhttp.send();
}

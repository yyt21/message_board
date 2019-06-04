"use strict";
function goto(){
    window.location.href = "index.html";
}
function myFunction()
{
    document.getElementById("demo").innerHTML="试一试";
}
function try1(){
    document.write("hello");  //只能在HTML流中使用，在页面加载后再onclick用这个的话，原有的文本会被覆盖
}
function try2(){
    element=document.getElementById('myimage');//用来做id，并且找到元素
    var x=1;//声明变量方式
    alert("这里是弹窗");

}
function try3(x){//判断是不是数字
    if(isNaN(x)||x.replace(/(^\s*)|(\s*$)/g,"")==""){
        alert("不是数字");
    }
}
function try4(){
    document.getElementById("hello").innerHTML=("试试罢了");//innerHTML= 是用来改变元素的
    console.log("");//向浏览器写入
}
function try5(){
    DocumentFragment.write(16 + "Volvo");
}
function message() 
{ 
    try { 
        adddlert("Welcome guest!"); 
    } catch(err) { 
        txt="本页有一个错误。\n\n"; 
        txt+="错误描述：" + err.message + "\n\n"; 
        txt+="点击确定继续。\n\n"; 
        alert(txt); 
    } 
}
//final的使用还有try
function myFunction() {
    var message, x;
    message = document.getElementById("p01");
    message.innerHTML = "";
    x = document.getElementById("demo").value;
    try { 
      if(x == "") throw "值是空的";
      if(isNaN(x)) throw "值不是一个数字";
      x = Number(x);
      if(x > 10) throw "太大";
      if(x < 5) throw "太小";
    }
    catch(err) {
      message.innerHTML = "错误: " + err + ".";
    }
    finally {
      document.getElementById("demo").value = "";
    }
  }

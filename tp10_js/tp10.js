function f2(){
    document.write("f2 functione");
}
function  lien1_onmouseover(){
    var new_ele=document.createElement("div");
    var txt=document.createTextNode("div里面放置的内容");
    new_ele.setAttribute("id","id_value");
    new_ele.appendChild(txt);
    document.body.appendChild(new_ele);
    alert("mouseouver");
}
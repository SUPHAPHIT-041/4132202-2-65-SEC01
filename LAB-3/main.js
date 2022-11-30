var num = 10;
let name = "Suphaphit";
//let Array = [10,15,"Suphaphit"];
const obj = { name: "Suphaphit", age: 19 };
const objMix = {
  data: [
    { name: "NIM", gpa: 4.3 },
    { name: "Suphaphit", gpa: 2.8 },
  ],
};

console.log(num);
console.log(Array);
console.log(objMix);

let String = num + name;
console.log(String);

string = objMix.data[1].name + Array[0];
console.log(string);

string = "<p>" + Array[2] + "</p>";
string = ` <p>${Array}</p>`;

console.log(string);

function Add(a, b) {
  return a + b;
}
console.log(Add(3, 5));

document.getElementById("div1").innerHTML = name;

$(function () {
  //alert("Hello");
  $("#div1").html("Suphaphit ");

  $("#bt1").click(function () {
    $("#div1").html("I love IT");
  });

  $("#bt3").click(() => {
    //arrow fuction
    $(".in1").val("BRU");
  });

  $("#bt4").click(() => {
    $(".in1:odd").addClass("red");
  });

  $("#div_about").load("./pages/about.html");
  $("#div_form").load("./pages/form.html");
}); //jQuery Hedle

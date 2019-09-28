var d = new Date();
var time = d.getHours();

if (time < 12) {
  document.write("<b>Good Morning!</b>");
}
else if (time < 19) {
  document.write("<b>Good Afternoon!</b>");
}
else {
  document.write("<b>Good Evening!</b>");
}

//Script Source: "Javascript and Jquery" by Jon Duckett

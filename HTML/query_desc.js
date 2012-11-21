var req;
(function(){
  window.onload = function() {
    req = new XMLHttpRequest();
    req.onreadystatechange = processReqChange;
    req.open("GET", "queryDescription.txt", true);
    req.send();
  }
})();
function setState(element) {
  if (element.getAttribute("checked") == "1") element.setAttribute("checked", "0");
  else element.setAttribute("checked", "1");
						
  req = new XMLHttpRequest();
  req.onreadystatechange = processReqChange;
  req.open("GET", "queryDescription.txt", true);
  req.send();
}
function processReqChange() {
  if (req.readyState == 4) {
    if (req.status == 200) {
      var flag = ""+document.getElementById('Checkbox1').getAttribute("checked");
      flag += document.getElementById('Checkbox2').getAttribute("checked");
      flag += document.getElementById('Checkbox3').getAttribute("checked");
      flag = flag.replace(/null/g, "0");
      var queryDescription = req.responseText.split("\n");
      divContent = "<br>";
      for (var i=0; i<queryDescription.length; i++) {
        if (queryDescription[i].substring(0, 3) == flag) {
          divContent = divContent+"✸ <a id=\"lt3\" href='find.php?q="+i+"&s="+flag+"'>"+queryDescription[i].substr(4)+"</a><br><br>";
        }
      }
      document.getElementById("divQueryDescription").innerHTML = divContent;
    }
    else {
      alert("There was a problem retrieving the XML data:\n" + req.statusText);
    }
  }
}
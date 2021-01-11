function showHint(str) {
   if (str.length == 0) {
   document.getElementById("txtHint").innerHTML = "";
   return;
   } else {
   var xmlhttp = new XMLHttpRequest();
   xmlhttp.onreadystatechange = function() {
   if (this.readyState == 4 && this.status == 200) {
    var juegos = this.responseText.split(',');
    var links = '';
    juegos.forEach( function(element, index) {
      links += '<p><a href="http://localhost/gamemark/Catalogo/' + element + '/' + element + '.php">' + element + '</a></p>'
    });
   document.getElementById("txtHint").innerHTML = links;
   }
   };
   xmlhttp.open("GET", "busc.php?q=" + str, true);
   xmlhttp.send();
   }
}

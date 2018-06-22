<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Documento Nuevo</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
</head>
<body>

   <button onclick="ejecutarAJAX();">Mostrar Informacion</button><br><br>

   <div id="info">

   </div>

<script>

function ejecutarAJAX(){

  var resultado = document.getElementById('info');
  var arr = [];

  var xmlhttp;

  if(window.XMLHttpRequest){
    xmlhttp = new XMLHttpRequest();
  }else{
    xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
  }

  xmlhttp.onreadystatechange = function(){
    if(xmlhttp.readyState === 4 && xmlhttp.status === 200){
      if(xmlhttp.responseXML !== null){
        arr[0] = xmlhttp.responseXML.getElementsByTagName('nombre').item(0);
        arr[1] = xmlhttp.responseXML.getElementsByTagName('apellido').item(0);
        arr[2] = xmlhttp.responseXML.getElementsByTagName('edad').item(0);

        resultado.innerHTML = arr[0].firstChild.nodeValue + " " +
                              arr[1].firstChild.nodeValue + " tiene " +
                              arr[2].firstChild.nodeValue + " años ";

      }
    }

  }

xmlhttp.open("GET","datos.xml",true)
xmlhttp.send();

}

</script>



</body>
</html>




  var imageAddr = "video/zac.jpg" + "?n=" + Math.random();
  var startTime, endTime;
  var downloadSize = 202484;
  var download = new Image();
  download.onload = function () {
      endTime = (new Date()).getTime();
      //showResults();
  }
  startTime = (new Date()).getTime();
  download.src = imageAddr;

  function showResults() {
      var duration = (endTime - startTime) / 1000;
      var bitsLoaded = downloadSize * 8;
      var speedBps = (bitsLoaded / duration).toFixed(2);
      var speedKbps = (speedBps / 1024).toFixed(2);
      var speedMbps = (speedKbps / 1024).toFixed(2);
      document.getElementById("speedBps").innerHTML = "" +speedBps + " bps";
      document.getElementById("speedKbps").innerHTML = "" +speedKbps + " kbps";
      document.getElementById("speedMbps").innerHTML = "" +speedMbps + " Mbps";

      //E1 2.048mbs >
      //T1 1.54mbs >
      //gibagi t 1gb/s
      //fasthet

      /*alert("Your connection speed is: \n" + 
             speedBps + " bps\n"   + 
             speedKbps + " kbps\n" + 
             speedMbps + " Mbps\n" );*/

   if(speedMbps >= 1000){
        document.getElementById("parametros").innerHTML = "Su conexión es <strong>Gigabit</strong>";
      }else if(speedMbps >= 100){
        document.getElementById("parametros").innerHTML = "Su conexión es <strong>FastEthernet</strong>";
      }else if(speedMbps >= 2.048){
        document.getElementById("parametros").innerHTML = "Su conexión es <strong>E1</strong>";
      }else if(speedMbps >= 1.54){
        document.getElementById("parametros").innerHTML = "Su conexión es <strong>T1</strong>";
      }else{
        document.getElementById("parametros").innerHTML = "Su conexión es menor que un <strong>T1</strong>";
      }
  }





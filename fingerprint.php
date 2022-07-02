<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1" />

	<title>ImprintJs</title>
	<style type="text/css">
		body { text-align: center; font-family: sans-serif; font-size: 14px; line-height: 20px; padding: 40px 0; color: #666; }
	</style>
</head>
<body>
  <p>Browser fingerprint<br /><strong id="browserFingerprint"></strong></p>
  <p>Device fingerprint<br /><strong id="deviceFingerprint"></strong></p>


  <script type="text/javascript" src="./fingerprint_master/dist/imprint.min.js"></script>
  <script type="text/javascript">

    var browserTests = [
        "availableScreenResolution",
        "canvas",
        "colorDepth",
        "cookies",
        "cpuClass",
        "deviceDpi",
        "doNotTrack",
        "indexedDb",
        "localStorage",
        "pixelRatio",
        "platform",
        "plugins",
        "processorCores",
        "screenResolution",
        "sessionStorage",
        "timezoneOffset",
        "touchSupport",
        "userAgent",
        "webGl"
      ];

    console.time('getImprint 1');
    imprint.test(browserTests).then(function(result){
      document.getElementById("browserFingerprint").innerHTML = result;
    });

    var deviceTests = [
        "colorDepth",
        "cpuClass",
        "deviceDpi",
        "platform",
        "installedFonts",
        "processorCores",
        "publicIp",
        "screenResolution",
        "timezoneOffset"
      ];

    console.time('getImprint 2');
    imprint.test(deviceTests).then(function(result){
      document.getElementById("deviceFingerprint").innerHTML = result;
    });

  </script>

</body>
</html>

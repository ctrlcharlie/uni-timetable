<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Libre+Franklin:400,700,900" rel="stylesheet">
    <title>timetable</title>

</head>


<body>


    <div id="desc">
        <p>This page displays my timetable. <br/> No ulterior purpose.</p>
    </div>


</body>

</html>



<?php

        include 'database_conn.php';      // make db connection


        $fetch = "SELECT dayNum, date, L1Time, L1Subject, L1Building, L1Lecturer, L2Time, L2Subject, L2Building, L2Lecturer, L3Time, L3Subject, L3Building, L3Lecturer, L4Time, L4Subject, L4Building, L4Lecturer
                  FROM timetable
                  ORDER BY dayNum";

        $success = $dbConn->query($fetch);




while($rowObj = $success->fetch_object()){

      $eDate = $rowObj->date;

      $eL1Time = $rowObj->L1Time;
      $eL1Subject = $rowObj->L1Subject;
      $eL1Building = $rowObj->L1Building;
      $eL1Lecturer = $rowObj->L1Lecturer;

      $eL2Time = $rowObj->L2Time;
      $eL2Subject = $rowObj->L2Subject;
      $eL2Building = $rowObj->L2Building;
      $eL2Lecturer = $rowObj->L2Lecturer;

      $eL3Time = $rowObj->L3Time;
      $eL3Subject = $rowObj->L3Subject;
      $eL3Building = $rowObj->L3Building;
      $eL3Lecturer = $rowObj->L3Lecturer;

      $eL4Time = $rowObj->L4Time;
      $eL4Subject = $rowObj->L4Subject;
      $eL4Building = $rowObj->L4Building;
      $eL4Lecturer = $rowObj->L4Lecturer;

      echo "

      <div id='content'>


          <div class='dayBlock'>
            <div class='date'>$eDate</div>
            <div class='time'>$eL1Time</div>
            <div class='subject'>$eL1Subject</div>
            <div class='building'>$eL1Building</div>
            <div class='lecturer'>$eL1Lecturer</div>
            <div class='time'>$eL2Time</div>
            <div class='subject'>$eL2Subject</div>
            <div class='building'>$eL2Building</div>
            <div class='lecturer'>$eL2Lecturer</div>
            <div class='time'>$eL3Time</div>
            <div class='subject'>$eL3Subject</div>
            <div class='building'>$eL3Building</div>
            <div class='lecturer'>$eL3Lecturer</div>
            <div class='time'>$eL4Time</div>
            <div class='subject'>$eL4Subject</div>
            <div class='building'>$eL4Building</div>
            <div class='lecturer'>$eL4Lecturer</div>
          </div>





      </div>

      ";
}

$dbConn->close();


?>

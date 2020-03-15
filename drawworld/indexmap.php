<?php

  $worldcode = $_POST['param1'];
  $con = mysqli_connect("localhost", "user", "12345", "drawworld");
  $sql = "select * from map where id='$worldcode'";
  $result = mysqli_query($con, $sql);
  //위에서 NULL값을 준후 널값인 경우 안보여줘도 될것 같다. 생각!
  $row = mysqli_fetch_array($result);

  $id      = $row["id"];
  $korean  = $row["korean"];
  $location1 = $row["location1"];
  $location2 = $row["location2"];
  $location3 = $row["location3"];
  $location4 = $row["location4"];
  $l1name = $row["l1name"];
  $l2name = $row["l2name"];
  $l3name = $row["l3name"];
  $l4name = $row["l4name"];
  ?>

<h3 class="tittle">LOCATION</h3>
   <!--/dealers-ac -->
 <div class="dealers-ac">
 <section class="ac-container">
  <div>
    <input id="ac-1" name="accordion-1" type="radio" checked />
    <label for="ac-1"><?=$l1name?></label>
    <article class="ac-small">

            <iframe src="https://www.google.com/maps/embed?<?=$location1?>" frameborder="0" style="border:0" allowfullscreen></iframe>

    </article>
  </div>
  <div>
    <input id="ac-2" name="accordion-1" type="radio" />
    <label for="ac-2"><?=$l2name?></label>
    <article class="ac-medium">

            <iframe src="https://www.google.com/maps/embed?<?=$location2?>" frameborder="0" style="border:0" allowfullscreen></iframe>
    </article>
  </div>
  <div>
    <input id="ac-3" name="accordion-1" type="radio" />
    <label for="ac-3"><?=$l3name?></label>
    <article class="ac-large">
                  <iframe src="https://www.google.com/maps/embed?<?=$location3?>" frameborder="0" style="border:0" allowfullscreen></iframe>

    </article>
  </div>
  <div>
    <input id="ac-4" name="accordion-1" type="radio" />
    <label for="ac-4"><?=$l4name?></label>
    <article class="ac-large">
    <iframe src="https://www.google.com/maps/embed?<?=$location4?>" frameborder="0" style="border:0" allowfullscreen></iframe>
    </article>
  </div>

</section>
</div>

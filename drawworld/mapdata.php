<?php
// 여행정보 페이지에 데이터베이스 안의 값들을 가져옴
  $worldname = $_POST['param1'];
  $con = mysqli_connect("localhost", "user", "12345", "drawworld");
  $sql = "select * from world where id='$worldname'";
  $result = mysqli_query($con, $sql);
  //위에서 NULL값을 준후 널값인 경우 안보여줘도 될것 같다. 생각!
  $row = mysqli_fetch_array($result);
  $id      = $row["id"];
  $korean  = $row["korean"];
  $english = $row["english"];
  $language = $row["language"];
  $population = $row["population"];
  $capital = $row["capital"];
  $anthem = $row["anthem"];
  $anthemfile = $row["anthemfile"];
  $flag  = $row["flag"];
  $plug  = $row["plug"];
  ?>
  <div class="row notice">
    <div class="col-md-4">
      <table>
        <tr>
          <td>
            <img src="<?=$flag?>" style="width: 300px; padding: 0; margin: 0; height: 170px;"/>
          </td>
        </tr>
        <tr>
          <td><audio controls loop> <source src="<?=$anthemfile?>" type="audio/ogg"></audio></td>
        </tr>
      </table>
    </div>
    <div class="col-md-8">
      <table class="world-notice" style="width:100%">
        <tr>
          <th width="100px">한글명</th>
          <td><?=$korean?></td>
        </tr>
        <tr>
          <th>영문명</th>
          <td><?=$english?></td>
        </tr>
        <tr>
          <th>언어</th>
          <td><?=$language?></td>
        </tr>
        <tr>
          <th>인구수</th>
          <td><?=$population?></td>
        </tr>
        <tr>
          <th>수도</th>
          <td><?=$capital?></td>
        </tr>
        <tr>

        </tr>
        <tr>
          <th>콘센트</th>
          <td><?=$plug?></td>
        </tr>
        </table>
    </div>
  </div>

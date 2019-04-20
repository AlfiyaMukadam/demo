<?php 
  $sql = "select * from mine where username = '$user' ";
  $res = mysql_query($sql);
  while($list = mysql_fetch_assoc($res)){
    $category = $list['category'];
    $username = $list['username'];
    $options = $list['options'];
  }

<select name="course">
   <opton value="0">Please Select Option</option>
   <option value="PHP">PHP</option>
   <option value="ASP">ASP</option>
</select>

<?php 
  }
?>
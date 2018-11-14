
<?php
function search_buyer() {
    $by_fname = $_POST['by_fname'];
    $by_lname = $_POST['by_lname'];
    $by_city = $_POST['by_city'];
    //    $by_Phone_Number = $_POST['by_Phone_Number'];
  //  $by_type = $_POST['by_type'];

    //Do real escaping here

    $query = "SELECT * FROM buyerdb";
    $conditions = array();

    if(! empty($by_fname)) {
      $conditions[] = "firstName='$by_fname'";
    }
    if(! empty($by_lname)) {
      $conditions[] = "lastName='$by_lname'";
    }
    if(! empty($by_city)) {
      $conditions[] = "city='$by_city'";
    }
  //  if(! empty($by_PhoneNumber)) {
    //  $conditions[] = "sMobNo='$by_Phone_Number'";
  //  }
  /*  if(! empty($by_type)) {
      $conditions[] = "e_type='$by_type'";
    }*/

    $sql = $query;
    if (count($conditions) > 0) {
      $sql .= " WHERE " . implode(' AND ', $conditions);
    }
   include 'db_connect.php';
    $result = mysqli_query($connection, $sql);
    return $result;

}
if(isset($_POST['submit'])) {

  $count = mysqli_num_rows(search_buyer($_POST));
//  echo $count;
    if($count>0)
    {

        $res1=mysqli_fetch_all(search_buyer($_POST),MYSQLI_ASSOC);
        //var_dump($res1);
        $fn=array_column($res1,'firstName');
        $fn2=array_column($res1,'lastName');

        //var_dump($fn);
        for($i=0;$i<count($fn);$i++)
        {
          echo ""$fn[$i]." ".$fn2[$i];
          echo "\n";
        }
                  //echo $retrived_result['firstName']." ";
          //echo $retrived_result['lastName']." ";
          //echo $retrived_result['sMobNo'];
         //echo $res1;

    }

}
?>
   <form action="Search2.php" method="post">
    <table width='100%' border='0' style='border:none;'>
      <h1>Search For buyer</h1>
      <tr>
        <td><label>First Name:&nbsp;</label><input type='text' name='by_fname' /></td>
        <td><label>Last Name:&nbsp;</label><input type='text' name='by_lname' /></td>
        <td><label>City:&nbsp;</label><input type='text' name='by_city' /></td>
    <!--    <td><label>Phone_Number:&nbsp;</label><input type='text' name='by_Phone_Number' /></td>
        <td><label>Type:&nbsp;</label><input type='text' name='by_type' /></td>-->
        <td><input type='submit' name='submit' value='Search' /></td>
      </tr>
    </table>
    </form>

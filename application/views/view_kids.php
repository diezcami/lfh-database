<div class="container">
  <?php
  $this->load->helper('url');
  ?>
  <div class="row">
    <div class="panel panel-default">
      <!-- Default panel contents -->
      <div class="panel-heading"><h3>Kids Groups</h3></div>
      <!-- Table -->
      <table class="table">
        <thead>
            <th>Kids Group ID</th>
            <th>Number of Kids</th>
            <th>Age Group</th>
            <th>Community</th>
            <th>Chaperone Name</th>
            <th>Chaperone Contact No.</th>
        </thead>


        <?php
        if( $kid_groups != '300' ){
          //var_dump($kid_groups);
          //var_dump($kid_groupgroup);
          foreach( $kid_groups as $kid_group ){
            echo "<tr>";
            echo "<td>".$kid_group->id."</td>";
            echo "<td>".$kid_group->number_of_kids."</td>";
            echo "<td>".$kid_group->age_group."</td>";
            echo "<td>".$kid_group->community."</td>";
            echo "<td>".$kid_group->chaperone_name."</td>";
            echo "<td>".$kid_group->chaperone_mobile."</td>";

            echo "</tr>";
          } /*
            echo "</td>";
            echo "<td class='details'>
              <a class=\"btn btn-default btn-sm glyphicon glyphicon-minus-sign\" onclick=\"return confirm('Are you sure you want to delete this kid_group?: ".$kid_group->first_name." ".$kid_group->last_name."');\" type='button' href='".site_url("/kid_group/delete_kid_group/".$kid_group->id)."'></a>
              <a class='btn btn-default btn-sm glyphicon glyphicon-list-alt' type='button' href='".site_url("/site/edit_kid_group/".$kid_group->id)."'></a>
            </td>";
            echo"</tr>";*/

        } else{
            echo "<tr>";
            echo "<td> No entries found. </td>";
            echo "</tr>";
        }

        /*
          // ADD FORM
            echo "<form action='".site_url("/kid_group/new_kid_group")."' method=\"post\"><tr>
            <td><b>Add kid_group</b></td>
            <td><input type='text' class='form-control' name='first_name' placeholder='First Name'></td>
            <td><input type='text' class='form-control' name='last_name' placeholder='Last Name'></td>
            <td><input type='text' class='form-control' name='email' placeholder='Email'></td>
            <td><input type='text' class='form-control' name='group' placeholder='kid_group Group'></td>
            <td><input type='password' class='form-control' placeholder='Password' name='password'></td>
            <td><input type='password' class='form-control' placeholder='Verify Password' name='vpassword'></td>
            <td><input value= \"Add kid_group\" type=\"submit\" class=\"btn btn-default\"></td>
            </tr></form>";
        */

        ?>
      </table>
    </div>
  </div>
</div>

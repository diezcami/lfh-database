<div class="container">
  <?php
  $this->load->helper('url');
  ?>
  <div class="row">
    <div class="panel panel-default">
      <!-- Default panel contents -->
      <div class="panel-heading"><h3>Classroom Groups</h3></div>
      <!-- Table -->
      <table class="table">
        <thead>
            <th>Classroom Group ID</th>
            <th>Venue</th>
            <th>Assigned Kids Group</th>
            <th>Faci Kit Number</th>
        </thead>


        <?php
        if( $classroom_groups != '300' ){
          //var_dump($classroom_groups);
          //var_dump($classroom_groupgroup);
          foreach( $classroom_groups as $classroom_group ){
            echo "<tr>";
            echo "<td>".$classroom_group->id."</td>";
            echo "<td>".$classroom_group->venue."</td>";
            echo "<td>".$classroom_group->kid_group_id."</td>";
            echo "<td>".$classroom_group->faci_kit_number."</td>";

            echo "</tr>";
          } /*
            echo "</td>";
            echo "<td class='details'>
              <a class=\"btn btn-default btn-sm glyphicon glyphicon-minus-sign\" onclick=\"return confirm('Are you sure you want to delete this classroom_group?: ".$classroom_group->first_name." ".$classroom_group->last_name."');\" type='button' href='".site_url("/classroom_group/delete_classroom_group/".$classroom_group->id)."'></a>
              <a class='btn btn-default btn-sm glyphicon glyphicon-list-alt' type='button' href='".site_url("/site/edit_classroom_group/".$classroom_group->id)."'></a>
            </td>";
            echo"</tr>";*/

        } else{
            echo "<tr>";
            echo "<td> No entries found. </td>";
            echo "</tr>";
        }

        /*
          // ADD FORM
            echo "<form action='".site_url("/classroom_group/new_classroom_group")."' method=\"post\"><tr>
            <td><b>Add classroom_group</b></td>
            <td><input type='text' class='form-control' name='first_name' placeholder='First Name'></td>
            <td><input type='text' class='form-control' name='last_name' placeholder='Last Name'></td>
            <td><input type='text' class='form-control' name='email' placeholder='Email'></td>
            <td><input type='text' class='form-control' name='group' placeholder='classroom_group Group'></td>
            <td><input type='password' class='form-control' placeholder='Password' name='password'></td>
            <td><input type='password' class='form-control' placeholder='Verify Password' name='vpassword'></td>
            <td><input value= \"Add classroom_group\" type=\"submit\" class=\"btn btn-default\"></td>
            </tr></form>";
        */

        ?>
      </table>
    </div>
  </div>
</div>

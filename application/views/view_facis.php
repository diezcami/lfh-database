<div class="container">
  <?php
  $this->load->helper('url');
  ?>
  <div class="row">
    <div class="panel panel-default">
      <!-- Default panel contents -->
      <div class="panel-heading"><h3>Facilitators</h3></div>
      <!-- Table -->
      <table class="table">
        <thead>
            <th>Last Name</th>
            <th>First Name</th>
            <th>Nickname</th>
            <th>Fluent in Tagalog</th>
            <th>Mobile</th>
            <th>Email</th>
            <th>Classroom Group</th>
        </thead>


        <?php
        if( $facis != '300' ){
          //var_dump($facis);
          //var_dump($facigroup);
          foreach( $facis as $faci ){
            echo "<tr>";
            echo "<td>".$faci->last_name."</td>";
            echo "<td>".$faci->first_name."</td>";
            echo "<td>".$faci->nickname."</td>";
            echo "<td>".$faci->fluent_in_tagalog."</td>";
            echo "<td>".$faci->contact_number."</td>";
            echo "<td>".$faci->email."</td>";
            echo "<td>".$faci->classroom_group_id."</td>";

            echo "</tr>";
          } /*
            echo "</td>";
            echo "<td class='details'>
              <a class=\"btn btn-default btn-sm glyphicon glyphicon-minus-sign\" onclick=\"return confirm('Are you sure you want to delete this faci?: ".$faci->first_name." ".$faci->last_name."');\" type='button' href='".site_url("/faci/delete_faci/".$faci->id)."'></a>
              <a class='btn btn-default btn-sm glyphicon glyphicon-list-alt' type='button' href='".site_url("/site/edit_faci/".$faci->id)."'></a>
            </td>";
            echo"</tr>";*/

        } else{
            echo "<tr>";
            echo "<td> No entries found. </td>";
            echo "</tr>";
        }

        /*
          // ADD FORM
            echo "<form action='".site_url("/faci/new_faci")."' method=\"post\"><tr>
            <td><b>Add faci</b></td>
            <td><input type='text' class='form-control' name='first_name' placeholder='First Name'></td>
            <td><input type='text' class='form-control' name='last_name' placeholder='Last Name'></td>
            <td><input type='text' class='form-control' name='email' placeholder='Email'></td>
            <td><input type='text' class='form-control' name='group' placeholder='faci Group'></td>
            <td><input type='password' class='form-control' placeholder='Password' name='password'></td>
            <td><input type='password' class='form-control' placeholder='Verify Password' name='vpassword'></td>
            <td><input value= \"Add faci\" type=\"submit\" class=\"btn btn-default\"></td>
            </tr></form>";
        */

        ?>
      </table>
    </div>
  </div>
</div>

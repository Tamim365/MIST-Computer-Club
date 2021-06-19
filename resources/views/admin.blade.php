
@php
    $i=1;
    $j='a';
@endphp

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/team table.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="css/form.css">
    <title></title>
</head>
<body>
  <div style="display:flex ; align-content:center;">
    <h1 >Admin Table</h1>

    <div class="w3-container" style="display: inline-block; margin-top:20px">
      <button onclick="document.getElementById('id02').style.display='block'" class="w3-button w3-green w3-round">Add Admin Info</button>

      <div id="id02" class="w3-modal">
        <div class="w3-modal-content w3-animate-zoom">
          <!-- <header class="w3-container w3-teal">
            <span onclick="document.getElementById('id02').style.display='none'"
            class="w3-button w3-display-topright">&times;</span>
            <h2>Modal Header</h2>
          </header> -->
          <span onclick="document.getElementById('id02').style.display='none'"
            class="w3-button w3-display-topright">&times;</span>



          <form id="contact" action="submit_ad" method="post">
            @csrf
            <h3> New Admin </h3><br>
            <fieldset>
              <input placeholder="Admin Name" type="text" name="Admin_Name" tabindex="1" required autofocus>
            </fieldset>
            <fieldset>
              <label for="birthday">Admin Access Time</label>
              <input  type="date" name="Access_Time" tabindex="2" required>
            </fieldset>
            <fieldset>
              <input placeholder="Admin Email" type="text" name="Admin_Email" tabindex="4" required autofocus>
            </fieldset>
            <fieldset>
              <input placeholder="Admin Password" type="text" name="Admin_Password" tabindex="4" required autofocus>
            </fieldset>
            <fieldset>
              <input placeholder="Admin Phone" type="text" name="Admin_Phone" tabindex="4" required autofocus>
            </fieldset>
            <fieldset>
              <button type="submit">Submit</button>
            </fieldset>

          </form>

          <!-- <footer class="w3-container w3-teal">
            <p>Modal Footer</p>
          </footer> -->
        </div>
      </div>
    </div>

  </div>


<table class="responstable">

  <tr>
    <th>Admin Id</th>
    <th>Admin Name</th>
    <th >Admin Email</th>
    <th>Admin Phone</th>
    <th>Admin Password</th>
    <th>Action</th>
    
  </tr>

  <tr>
      @foreach ($send as $row )
    @php
        $admin_id = $row['admin_id'];
    @endphp
    <td>{{ $row['admin_id'] }}</td>
    <td>{{ $row['admin_name'] }}</td>
    {{-- <td>{{ date('d-m-Y', strtotime($row['access_time']))}}</td> --}}
    <td>{{ $row['admin_email'] }}</td>
    <td>{{ $row['admin_phone'] }}</td>
    <td>{{ $row['admin_password'] }}</td>
    <td >
      <div class="w3-container" style="display: inline-block;">
        <button onclick="document.getElementById('{{ $i }}').style.display='block'" class="w3-button w3-green w3-round">View</button>

        <div id="{{ $i }}" class="w3-modal">
          <div class="w3-modal-content w3-animate-zoom">
            <header class="w3-container w3-teal">
              <span onclick="document.getElementById('{{ $i }}').style.display='none'"
              class="w3-button w3-display-topright">&times;</span>
              <h2>Modal Header</h2>
            </header>
            <div class="w3-container">
              {{-- <p>Some text..</p>
              <p>Some text..</p> --}}
              {{-- {{ $row['access_time'] }} --}}
              {{ date('d-m-Y', strtotime($row['access_time']))}}
            </div>
            <footer class="w3-container w3-teal">
              <p>Modal Footer</p>
            </footer>
          </div>
        </div>
      </div>
      {{-- Update Form --}}
      <div class="w3-container" style="display: inline-block; margin-left:1px">
        <button onclick="document.getElementById('{{ $j }}').style.display='block'" class="w3-button w3-green w3-round">Edit</button>

        <div id="{{ $j }}" class="w3-modal">
          <div class="w3-modal-content w3-animate-zoom">
            <!-- <header class="w3-container w3-teal">
              <span onclick="document.getElementById('id02').style.display='none'"
              class="w3-button w3-display-topright">&times;</span>
              <h2>Modal Header</h2>
            </header> -->
            <span onclick="document.getElementById('{{ $j }}').style.display='none'"
              class="w3-button w3-display-topright">&times;</span>
            <form id="contact" action="update_admin/{{ $admin_id }}" method="post">
              @csrf
              <h3> Update Admin Info</h3><br>
              <fieldset>
                <label for="">Admin Name: </label>
                <input placeholder="Admin Name" type="text" name="Admin_Name" tabindex="1" value="{{  $row['admin_name'] }}" >
              </fieldset>
              <br>
              
              <fieldset>
                <label for="">Admin Email:</label>
                <input  type="text" name="Admin_Email" tabindex="2" >
              </fieldset>
              <br>
              <fieldset>
                 <label for="hello">Admin_Phone:</label>
                <input placeholder="Admin_Phone" type="text" name="Admin_Phone" tabindex="1" value="{{  $row['admin_phone'] }}">
              </fieldset>
              <br>
              <fieldset>
                 <label for="hello">Admin_Password:</label>
                <input placeholder="Admin_Password" type="text" name="Admin_Password" tabindex="1" value="{{  $row['admin_password'] }}">
              </fieldset>
              <br>
              <fieldset>
                <label for="">Admin Access Time</label>
                @php
                 $date = date('Y-m-d', strtotime($row['access_time']));
                @endphp
                <input  type="date" name="access-time" tabindex="2" value={{ $date }}>
              </fieldset>
              <br>
              
              <fieldset>
                <button type="submit">Submit</button>
              </fieldset>
              <fieldset>
                <button type="submit" class="w3-red" formaction="delete_admin/{{ $admin_id }}">Delete Record</button>
              </fieldset>

            </form>

            <!-- <footer class="w3-container w3-teal">
              <p>Modal Footer</p>
            </footer> -->
          </div>
        </div>
      </div>
    </td>
  </tr>

 @php
     $i++;
     $j++;
 @endphp
@endforeach
{{--
    <td>Steve</td>
    <td>Foo</td>
    <td>01/01/1978</td>
    <td>Policyholder</td>
    <td>
      <div class="w3-container">
        <button onclick="document.getElementById('{{ $i }}').style.display='block'" class="w3-button w3-green w3-round">View</button>

        <div id="{{ $i }}" class="w3-modal">
          <div class="w3-modal-content w3-animate-zoom">
            <header class="w3-container w3-teal">
              <span onclick="document.getElementById('{{ $i }}').style.display='none'"
              class="w3-button w3-display-topright">&times;</span>
              <h2>Modal Header</h2>
            </header>
            <div class="w3-container">
              <p>Some text..</p>
              <p>Some text..</p>
            </div>
            <footer class="w3-container w3-teal">
              <p>Modal Footer</p>
            </footer>
          </div>
        </div>
      </div>
    </td>
  </tr> --}}

  {{-- <tr>

    <td>Steffie</td>
    <td>Foo</td>
    <td>01/01/1978</td>
    <td>Spouse</td>
    <td>
      <div class="w3-container">
        <button onclick="document.getElementById('{{ $i }}').style.display='block'" class="w3-button w3-green w3-round">View</button>

        <div id="{{ $i }}" class="w3-modal">
          <div class="w3-modal-content w3-animate-zoom">
            <header class="w3-container w3-teal">
              <span onclick="document.getElementById('{{ $i }}').style.display='none'"
              class="w3-button w3-display-topright">&times;</span>
              <h2>Modal Header</h2>
            </header>
            <div class="w3-container">
              <p>Some text..</p>
              <p>Some text..</p>
            </div>
            <footer class="w3-container w3-teal">
              <p>Modal Footer</p>
            </footer>
          </div>
        </div>
      </div>
    </td>
  </tr>

  <tr>

    <td>Stan</td>
    <td>Foo</td>
    <td>01/01/1994</td>
    <td>Son</td>
    <td>
      <div class="w3-container">
        <button onclick="document.getElementById('{{ $i }}').style.display='block'" class="w3-button w3-green w3-round">View</button>

        <div id="{{ $i }}" class="w3-modal">
          <div class="w3-modal-content w3-animate-zoom"></div>
            <header class="w3-container w3-teal">
              <span onclick="document.getElementById('{{ $i }}').style.display='none'"
              class="w3-button w3-display-topright">&times;</span>
              <h2>Modal Header</h2>
            </header>
            <div class="w3-container">
              <p>Some text..</p>
              <p>Some text..</p>
            </div>
            <footer class="w3-container w3-teal">
              <p>Modal Footer</p>
            </footer>
          </div>
        </div>
      </div>
    </td>
  </tr>

  <tr>

    <td>Stella</td>
    <td>Foo</td>
    <td>01/01/1992</td>
    <td>Daughter</td>
    <td>
      <div class="w3-container">
        <button onclick="document.getElementById('{{ $i }}').style.display='block'" class="w3-button w3-green w3-round">View</button>

        <div id="{{ $i }}" class="w3-modal">
          <div class="w3-modal-content w3-animate-zoom"></div>
            <header class="w3-container w3-teal">
              <span onclick="document.getElementById('{{ $i }}').style.display='none'"
              class="w3-button w3-display-topright">&times;</span>
              <h2>Modal Header</h2>
            </header>
            <div class="w3-container">
              <p>Some text..</p>
              <p>Some text..</p>
            </div>
            <footer class="w3-container w3-teal">
              <p>Modal Footer</p>
            </footer>
          </div>
        </div>
      </div>
    </td>
  </tr> --}}

</table>

</body>
</html>

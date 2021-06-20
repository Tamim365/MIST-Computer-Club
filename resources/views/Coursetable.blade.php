@extends('layouts.master')
@section('header')
    <link rel="stylesheet" href="css/team table.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="css/form.css">
    <title>Courses</title>

@endsection

@section('content')
@php
    $i=1;
    $j='a';
@endphp
    <div style="display:flex ; align-content:center;">
    <h1 >Course Table</h1>

    <div class="w3-container" style="display: inline-block; margin-top:20px">
      <button onclick="document.getElementById('id02').style.display='block'" class="w3-button w3-green w3-round">Add Course</button>

      <div id="id02" class="w3-modal">
        <div class="w3-modal-content w3-animate-zoom">
          <!-- <header class="w3-container w3-teal">
            <span onclick="document.getElementById('id02').style.display='none'"
            class="w3-button w3-display-topright">&times;</span>
            <h2>Modal Header</h2>
          </header> -->
          <span onclick="document.getElementById('id02').style.display='none'"
            class="w3-button w3-display-topright">&times;</span>
          <form id="contact" action="submit_course" method="post">
            @csrf
            <h3> New Course Registration </h3><br>
            <fieldset>
              <input placeholder="Course Name" type="text" name="Course_name" tabindex="1" required autofocus>
            </fieldset>
            <fieldset>
              <label for="birthday">Start Date:</label>
              <input  placeholder="Your Email Address" type="date" name="start" tabindex="2" required>
            </fieldset>
            <fieldset>
              <textarea placeholder="Course Description" name="info" tabindex="5" required></textarea>
            </fieldset>
            <fieldset>
                <input placeholder="Budget ID" type="text" name="budget_id" tabindex="4" autofocus>
            </fieldset>
            <fieldset>
              <input placeholder="Mentor Fee" type="text" name="mentor_fee" tabindex="4" required autofocus>
            </fieldset>
            <fieldset>
              <input placeholder="Course Materials Fee" type="text" name="mat_fee" tabindex="4" required autofocus>
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
    <th>Course Id</th>
    <th ><span>Course Name</span></th>
    <th>Start Date</th>
    <th>Status</th>
    <th>Decription</th>
  </tr>

  <tr>
      @foreach ($send as $row )
    @php
        $course_id = $row['course_id'];
    @endphp
    <td>{{ $row['course_id'] }}</td>
    <td>{{ $row['course_name'] }}</td>
    <td>{{ date('d-m-Y', strtotime($row['start_date']))}}</td>
    <td>{{ $row['course_status'] }}</td>
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
              {{ $row['course_info'] }}
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
            <form id="contact" action="update_course/{{ $course_id }}" method="post">
              @csrf
              <h3> Update Course</h3><br>
              <fieldset>
                <label for="">Course Name: </label>
                <input placeholder="Course Name" type="text" name="Course_name" tabindex="1" value="{{  $row['course_name']  }}" >
              </fieldset>
              <br>
              <fieldset>
                <label for="">Start Date:</label>
                @php
                 $date = date('Y-m-d', strtotime($row['start_date']));
                @endphp
                <input  type="date" name="start" tabindex="2" value={{ $date }}>
              </fieldset>
              <br>
              <fieldset>
                <label for="">End Date:</label>
                <input  type="date" name="end" tabindex="2" >
              </fieldset>
              <br>
              <fieldset>
                <label for="hello">Budget Id:</label>
                <input placeholder="Budget ID" type="text" name="budget_id" tabindex="4" autofocus value="{{ $row['budget_id'] }}">
            </fieldset>
            <br>
              <fieldset>
                 <label for="hello">Course Status:</label>
                <input placeholder="Course Status" type="text" name="status" tabindex="1" value="{{  $row['course_status'] }}">
              </fieldset>
              <br>
              <fieldset>
                 <label for="">Materials Fee: </label>
                <input placeholder="Course Materials Fee" type="text" name="mat_fee" tabindex="4" value="{{ $row['course_materialsfee'] }}" >
              </fieldset>
              <br>
              <fieldset>
                <button type="submit">Submit</button>
              </fieldset>
              <fieldset>
                <button type="submit" class="w3-red" formaction="delete_course/{{ $course_id }}">Delete Record</button>
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
@endsection




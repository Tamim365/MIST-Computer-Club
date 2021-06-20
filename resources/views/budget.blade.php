@extends('layouts.master')
@section('header')
    <link rel="stylesheet" href="css/team table.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="css/form.css">
    <title>Club Budgets</title>
    
@endsection

@section('content')
@php
    $i=1;
    $j='a';
@endphp
    <div style="display:flex ; align-content:center;">
    <h1 >Budget Table</h1>

    <div class="w3-container" style="display: inline-block; margin-top:20px">
      <button onclick="document.getElementById('id02').style.display='block'" class="w3-button w3-green w3-round">Add Budget</button>

      <div id="id02" class="w3-modal">
        <div class="w3-modal-content w3-animate-zoom">
          <!-- <header class="w3-container w3-teal">
            <span onclick="document.getElementById('id02').style.display='none'"
            class="w3-button w3-display-topright">&times;</span>
            <h2>Modal Header</h2>
          </header> -->
          <span onclick="document.getElementById('id02').style.display='none'"
            class="w3-button w3-display-topright">&times;</span>



          <form id="contact" action="submit_budget" method="post">
            @csrf
            <h3> New Budget Allocation </h3><br>
            <fieldset>
              <input placeholder="Budget Amount" type="text" name="Budget_Amount" tabindex="1" required autofocus>
            </fieldset>
            <fieldset>
              <label for="birthday">Budget Transaction Date</label>
              <input  type="date" name="Budget_Transaction_Date" tabindex="2" required>
            </fieldset>
            <fieldset>
              <textarea placeholder="Budget Proposal Info" name="Budget_Proposal_Info" tabindex="5" required></textarea>
            </fieldset>
            <fieldset>
              <input placeholder="Budget Remain" type="text" name="Budget_Remain" tabindex="4" required autofocus>
            </fieldset>
            <fieldset>
              <input placeholder="Remarks" type="text" name="remarks" tabindex="4" required autofocus>
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
    <th>Budget Id</th>
    <th >Budget Amount</th>
    <th>Budget Transaction Date</th>
    <th>Budget Remain</th>
    <th>Remarks</th>
    <th>Action</th>
  </tr>

  <tr>
      @foreach ($send as $row )
    @php
        $budget_id = $row['budget_id'];
    @endphp
    <td>{{ $row['budget_id'] }}</td>
    <td>{{ $row['budget_amount'] }}</td>
    <td>{{ date('d-m-Y', strtotime($row['budget_transaction_date']))}}</td>
    <td>{{ $row['budget_remain'] }}</td>
    <td>{{ $row['remarks'] }}</td>
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
              {{ $row['budget_proposal_info'] }}
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
            <form id="contact" action="update_budget/{{ $budget_id }}" method="post">
              @csrf
              <h3> Update Budget</h3><br>
              <fieldset>
                <label for="">Budget Amount: </label>
                <input placeholder="Budget Amount" type="text" name="Budget_Amount" tabindex="1" value="{{  $row['budget_amount'] }}" >
              </fieldset>
              <br>
              <fieldset>
                <label for="">Budget Transaction Date</label>
                @php
                 $date = date('Y-m-d', strtotime($row['budget_transaction_date']));
                @endphp
                <input  type="date" name="Budget_Transaction_Date" tabindex="2" value={{ $date }}>
              </fieldset>
              <br>
              <fieldset>
                <label for="">Budget Remain:</label>
                <input  type="text" name="Budget_Remain" tabindex="2" >
              </fieldset>
              <br>
              <fieldset>
                 <label for="hello">Remarks:</label>
                <input placeholder="Remarks" type="text" name="remarks" tabindex="1" value="{{  $row['remarks'] }}">
              </fieldset>
              <br>
              
              <fieldset>
                <button type="submit">Submit</button>
              </fieldset>
              <fieldset>
                <button type="submit" class="w3-red" formaction="delete_budget/{{ $budget_id }}">Delete Record</button>
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



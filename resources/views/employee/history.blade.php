@extends('layouts.template')
@section('title', 'History')

@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="/css/calendar.css">
@endsection

@section('nav')
@extends('layouts.navigation-bar-user')
@section('content')
    <div class="container-fluid py-5" style="background-color: #bff5f3">
        <h1 class="text-center" style="font-family: 'Montserrat', sans-serif;font-weight: 800">PT. Tangara Mitrakom</h1>
    </div>
    {{-- <div class="container-fluid mt-5 border border-2 border-dark">
        <table id="report" class="table table-info table-striped">
            <thead>
                <tr>
                    <th scope="col">Date</th>
                    <th scope="col">Task Code</th>
                    <th scope="col">Task Name</th>
                    <th scope="col">Waktu Tiba</th>
                    <th scope="col">Check Out Status</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row"></th>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            </tbody>
        </table>
    </div> --}}
    <div class="main-wrapper">

        <div class="sidebar-wrapper z-depth-2 side-nav fixed" id="sidebar">
  
          <div class="sidebar-title">
            <h4>Events</h4>
            <h5 id="eventDayName">Date</h5>
          </div>
          <div class="sidebar-events" id="sidebarEvents">
            <div class="empty-message">Sorry, no events to selected date</div>
          </div>
  
        </div>
  
        <div class="content-wrapper grey lighten-3">
          <div class="container">
  
            <div class="calendar-wrapper z-depth-2">
  
              <div class="header-background">
                <div class="calendar-header">
  
                  <a class="prev-button" id="prev">
                    <i class="material-icons">keyboard_arrow_left</i>
                  </a>
                  <a class="next-button" id="next">
                    <i class="material-icons">keyboard_arrow_right</i>
                  </a>
  
                  <div class="row header-title">
  
                    <div class="header-text">
                      <h3 id="month-name">February</h3>
                      <h5 id="todayDayName">Today is Friday 7 Feb</h5>
                    </div>
  
                  </div>
                </div>
              </div>
  
              <div class="calendar-content">
                <div id="calendar-table" class="calendar-cells">
  
                  <div id="table-header">
                    <div class="row">
                      <div class="col">Mon</div>
                      <div class="col">Tue</div>
                      <div class="col">Wed</div>
                      <div class="col">Thu</div>
                      <div class="col">Fri</div>
                      <div class="col">Sat</div>
                      <div class="col">Sun</div>
                    </div>
                  </div>
  
                  <div id="table-body" class="">
  
                  </div>
  
                </div>
              </div>
  
              <div class="calendar-footer">
                <div class="emptyForm" id="emptyForm">
                  <h4 id="emptyFormTitle">No events now</h4>
                  <a class="addEvent" id="changeFormButton">Add new</a>
                </div>
                <div class="addForm" id="addForm">
                  <h4>Add new event</h4>
  
                  <div class="row">
                    <div class="input-field col s6">
                      <input id="eventTitleInput" type="text" class="validate">
                      <label for="eventTitleInput">Title</label>
                    </div>
                    <div class="input-field col s6">
                      <input id="eventDescInput" type="text" class="validate">
                      <label for="eventDescInput">Description</label>
                    </div>
                  </div>
  
                  <div class="addEventButtons">
                    <a class="waves-effect waves-light btn blue lighten-2" id="addEventButton">Add</a>
                    <a class="waves-effect waves-light btn grey lighten-2" id="cancelAdd">Cancel</a>
                  </div>
  
                </div>
              </div>
  
            </div>
  
          </div>
        </div>
  
      </div>
@endsection

@section('script')
    <script type="text/javascript" src="/js/calendar.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh"
            crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ"
            crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
    <script>
      $(".button-collapse").sideNav();
    </script>
@endsection
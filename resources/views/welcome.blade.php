<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        {{-- Bootstrap 4 --}}
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        {{-- Bootstrap 4 --}}
        <link rel="stylesheet" href="css/style.css">
        <title>SD</title>
    </head>
    <body class="antialiased" style="background-color:#EDEFF4">
        {{-- header --}}
       
            {{-- header --}}
                {{-- navbar --}}
                <div>
                <nav  id="topbar" class="navbar navbar-dark bg-dark navbar-expand-lg justify-content-between">
                    <div class="">
                        <ul class="navbar-nav">
                            <li class="nav-item active">
                              <a class="nav-link text-light" href="#">HELP <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link text-light" href="#">NEWS</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link text-light" href="#">CONTACTS</a>
                            </li>
                          </ul>
                    </div>             
                            <div class="form-inline">
                                @if (Route::has('login'))
                                    <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                                        @auth
                                            <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline">Home</a>
                                        @else
                                            <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Log in</a>
                    
                                            @if (Route::has('register'))
                                                <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                                            @endif
                                        @endauth
                                    </div>
                                @endif
                   
                  
                  </nav>
                </div>
                <div >
                    <nav id="middlebar" class="navbar navbar-light bg-light justify-content-between">
                        <a class="navbar-brand text-light">LOGO IMAGE</a>
                        <form class="form-inline">
                          <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                        </form>
                      </nav>
                </div>
                <div>
                    <nav id="bottombar" class="navbar sticky-top navbar-expand-lg navbar-dark bg-dark">
                      
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                          <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNav">
                          <ul class="navbar-nav">
                            <li class="nav-item active">
                              <a class="nav-link mr-5" href="#">HOME <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link mr-5 href="#">MY LINES</a>
                              </li>
                            <li class="nav-item">
                              <a class="nav-link mr-5 href="#">MY SCORES</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link mr-5" href="#">MY FINALS</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link mr-5" href="#">BILLBOARD STUFF</a>
                            </li>
                          </ul>
                        </div>
                      </nav>
                </div>
                {{-- navbar --}}
            {{-- banner --}}
                <div id="banner">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8"></div>
                            <div class="col-md-4">
                                <h1 style="font-size:80px;" class="text-white">EASY BETS</h1>
                                <p class="text-white font-weight-bold text-uppercase">
                                    WITH THE LOWEST COMMISSIONS
                                </p>
                                <a href="#" class="btn btn-outline-light px-5 py-2 font-weight-bold text-uppercase">join us</a>
                            </div>
                        </div>
                    </div>
                </div>
            {{-- end of banner --}}
         
            {{-- navs and tabs --}}
            <div class="section" >
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            {{-- Nav Tabs --}}
                            <nav>
                                <div class="nav nav-tabs sports-tab justify-content-between" id="nav-tab" role="tablist">
                                    <a href="#allsports" aria-controls="allsports" aria-selected="true" id="allsportstab" role="tab" data-toggle="tab" class="nav-item nav-link active">ALL SPORTS</a>
                                    <a href="#football" aria-controls="football" aria-selected="false" id="footballtab" role="tab" data-toggle="tab" class="nav-item nav-link">FOOTBALL</a>
                                    <a href="#tennis" aria-controls="tennis" aria-selected="false" id="tennistab" role="tab" data-toggle="tab" class="nav-item nav-link">TENNIS</a>
                                    <a href="#basketball" aria-controls="basketball" aria-selected="false" id="basketballtab" role="tab" data-toggle="tab" class="nav-item nav-link">BASKETBALL</a>
                                    <a href="#icehockey" aria-controls="icehockey" aria-selected="false" id="icehockeytab" role="tab" data-toggle="tab" class="nav-item nav-link">ICE HOCKEY</a>
                                    <a href="#volleyball" aria-controls="volleyball" aria-selected="false" id="volleyballtab" role="tab" data-toggle="tab" class="nav-item nav-link">VOLLEY BALL</a>
                                    <a href="#badminton" aria-controls="badminton" aria-selected="false" id="badmintontab" role="tab" data-toggle="tab" class="nav-item nav-link">BADMINTON</a>
                                    <a href="#baseball" aria-controls="baseball" aria-selected="false" id="baseballtab" role="tab" data-toggle="tab" class="nav-item nav-link">BASEBALL</a>
                                    <a href="#tabletennis" aria-controls="tabletennis" aria-selected="false" id="tabletennistab" role="tab" data-toggle="tab" class="nav-item nav-link">TABLE TENNIS</a>
                                    <a href="#cycling" aria-controls="cycling" aria-selected="false" id="cyclingtab" role="tab" data-toggle="tab" class="nav-item nav-link">CYCLING</a>
                                    
                                  </div>
                            </nav>
                            {{-- Nav Tabs Contents --}}
                            <div style="padding-top:50px;" class="tab-content" id="nav-tabContent">

                              {{-- All Sports --}}
                                <div class="tab-pane fade show active" id="allsports" role="tabpanel" aria-labelledby="allsportstab">
                                   <div class="sports-info">
                                     <div class="container">
                                       <div class="row">
                                         <div class="col-md-12">
                                          <p class="sports-text"> All Sports (29)</p>
                                         </div>
                                       </div>
                                     </div>
                                   </div>
                                   <div class="heading-component">
                                    <div class="heading-component-inner">
                                      <div class="container">
                                        <div class="row">
                                          <div class="col-md-8">
                                            <h5 class="heading-component-title">FOOTBALL (3) </h5>
                                          </div>
                                          <div class="col-md-4">
                                            <div class="row">
                                              <div class="col-md-4"><a class="btn btn-sm btn-outline-danger active" href="#">Live</a></div>
                                             <div class="col-md-4">
                                                <a class="btn btn-sm btn-outline-danger" href="#">Upcoming</a>
                                             </div>
                                            <div class="col-md-4">
                                                <a class="btn btn-sm btn-outline-danger" href="#">Today’s events</a>
                                            </div>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="row">
                                          <div class="col-md-12">
                                            <div class="sport-table-header">
                                              <p>National Championship</p>
                                            </div>
                                            <div class="sport-table">
                                              <div class="sport-table-tr">
                                                <div class="sport-row align-items-center">                           
                                                    <div class="container">
                                                      <div class="row">
                                                        <div class="col-md-4">
                                                          <div class="sport-table-title">
                                                            <div class="sport-table-title-item sport-table-title-item-left"><span class="sport-table-title-team">Real Madrid</span><span class="sport-table-title-team">Chelsea</span></div>
                                                            <div class="sport-table-title-item sport-table-title-item-right"><span class="sport-table-title-score"><span>4</span></span>
                                                             <span class="sport-table-title-score"><span>2</span></span>
                                                            </div>
                                                          </div>
                                                        </div>
                                                        <div class="col-md-7">
                                                          <div class="sport-table-wager"><a class="sport-table-wager-button" href="#" data-toggle="modal" data-target="#sportModal" data-team-name="Real Madrid" data-confrontation="Real Madrid vs Chelsea" data-wager-count="1.23" data-score="4:2"><span>Real Madrid</span><span class="sport-table-wager-button-count">1.23</span></a><a class="sport-table-wager-button" href="#" data-toggle="modal" data-target="#sportModal" data-team-name="Draw" data-confrontation="Real Madrid vs. Chelsea" data-wager-count="13.00" data-score="4:2"><span>Draw</span><span class="sport-table-wager-button-count">13.00</span></a><a class="sport-table-wager-button" href="#" data-toggle="modal" data-target="#sportModal" data-team-name="Chelsea" data-confrontation="Real Madrid vs Chelsea" data-wager-count="34.25" data-score="4:2"><span>Chelsea</span><span class="sport-table-wager-button-count">34.25</span></a>
                                                          </div>
                                                        </div>
                                                        <div class="col-md-1">
                                                          <div class="sport-table-bonus">
                                                            <span class="sport-table-bonus-count">+58</span>
                                                            <span class="sport-table-bonus-icon material-icons-chevron_right"></span>
                                                          </div>
                                                        </div>
                                                      </div>
                                                    </div>  
                                                </div>
                                              </div>
                                            </div>
                                            <div class="sport-table">
                                              <div class="sport-table-tr">
                                                <div class="sport-row align-items-center">                           
                                                    <div class="container">
                                                      <div class="row">
                                                        <div class="col-md-4">
                                                          <div class="sport-table-title">
                                                            <div class="sport-table-title-item sport-table-title-item-left"><span class="sport-table-title-team">Real Madrid</span><span class="sport-table-title-team">Chelsea</span></div>
                                                            <div class="sport-table-title-item sport-table-title-item-right"><span class="sport-table-title-score"><span>4</span></span>
                                                             <span class="sport-table-title-score"><span>2</span></span>
                                                            </div>
                                                          </div>
                                                        </div>
                                                        <div class="col-md-7">
                                                          <div class="sport-table-wager"><a class="sport-table-wager-button" href="#" data-toggle="modal" data-target="#sportModal" data-team-name="Real Madrid" data-confrontation="Real Madrid vs Chelsea" data-wager-count="1.23" data-score="4:2"><span>Real Madrid</span><span class="sport-table-wager-button-count">1.23</span></a><a class="sport-table-wager-button" href="#" data-toggle="modal" data-target="#sportModal" data-team-name="Draw" data-confrontation="Real Madrid vs. Chelsea" data-wager-count="13.00" data-score="4:2"><span>Draw</span><span class="sport-table-wager-button-count">13.00</span></a><a class="sport-table-wager-button" href="#" data-toggle="modal" data-target="#sportModal" data-team-name="Chelsea" data-confrontation="Real Madrid vs Chelsea" data-wager-count="34.25" data-score="4:2"><span>Chelsea</span><span class="sport-table-wager-button-count">34.25</span></a>
                                                          </div>
                                                        </div>
                                                        <div class="col-md-1">
                                                          <div class="sport-table-bonus">
                                                            <span class="sport-table-bonus-count">+58</span>
                                                            <span class="sport-table-bonus-icon material-icons-chevron_right"></span>
                                                          </div>
                                                        </div>
                                                      </div>
                                                    </div>  
                                                </div>
                                              </div>
                                            </div>
                                            <div class="sport-table">
                                              <div class="sport-table-tr">
                                                <div class="sport-row align-items-center">                           
                                                    <div class="container">
                                                      <div class="row">
                                                        <div class="col-md-4">
                                                          <div class="sport-table-title">
                                                            <div class="sport-table-title-item sport-table-title-item-left"><span class="sport-table-title-team">Real Madrid</span><span class="sport-table-title-team">Chelsea</span></div>
                                                            <div class="sport-table-title-item sport-table-title-item-right"><span class="sport-table-title-score"><span>4</span></span>
                                                             <span class="sport-table-title-score"><span>2</span></span>
                                                            </div>
                                                          </div>
                                                        </div>
                                                        <div class="col-md-7">
                                                          <div class="sport-table-wager"><a class="sport-table-wager-button" href="#" data-toggle="modal" data-target="#sportModal" data-team-name="Real Madrid" data-confrontation="Real Madrid vs Chelsea" data-wager-count="1.23" data-score="4:2"><span>Real Madrid</span><span class="sport-table-wager-button-count">1.23</span></a><a class="sport-table-wager-button" href="#" data-toggle="modal" data-target="#sportModal" data-team-name="Draw" data-confrontation="Real Madrid vs. Chelsea" data-wager-count="13.00" data-score="4:2"><span>Draw</span><span class="sport-table-wager-button-count">13.00</span></a><a class="sport-table-wager-button" href="#" data-toggle="modal" data-target="#sportModal" data-team-name="Chelsea" data-confrontation="Real Madrid vs Chelsea" data-wager-count="34.25" data-score="4:2"><span>Chelsea</span><span class="sport-table-wager-button-count">34.25</span></a>
                                                          </div>
                                                        </div>
                                                        <div class="col-md-1">
                                                          <div class="sport-table-bonus">
                                                            <span class="sport-table-bonus-count">+58</span>
                                                            <span class="sport-table-bonus-icon material-icons-chevron_right"></span>
                                                          </div>
                                                        </div>
                                                      </div>
                                                    </div>  
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                   </div>
                                   <div class="heading-component">
                                    <div class="heading-component-inner">
                                      <div class="container">
                                        <div class="row">
                                          <div class="col-md-12">
                                            <h5 class="heading-component-title">TENNIS</h5>
                                          </div>
                                        </div>
                                        <div class="row">
                                          <div class="col-md-12">
                                            <div class="sport-table-header">
                                              <p>
                                                us international
                                              </p>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="sport-table">
                                              <div class="sport-table-tr">
                                                <div class="row sport-row align-items-center">
                                                 
                                                  <div class=" col-md-4 ">
                                                    <div class="sport-table-title">
                                                      <div class="sport-table-title-item sport-table-title-item-left"><span class="sport-table-title-team">Harry Stewart</span><span class="sport-table-title-team">Donald Crawford</span></div>
                                                      <div class="sport-table-title-item sport-table-title-item-right"><span class="sport-table-title-score"><span>7</span><span>0</span><span>0</span></span>
                                                        <!--span.sport-table-title-team= obj.team[1][0]--><span class="sport-table-title-score"><span>6</span><span>1</span><span>0</span></span>
                                                      </div>
                                                    </div>
                                                  </div>
                                                  <div class="col-md-7">
                                                    <div class="sport-table-wager sport-table-wager-double"><a class="sport-table-wager-button" href="#" data-toggle="modal" data-target="#sportModal" data-team-name="Harry Stewart" data-confrontation="Harry Stewart vs Donald Crawford" data-wager-count="13.5" data-score="7:6"><span>Harry Stewart</span><span class="sport-table-wager-button-count">13.5</span></a><a class="sport-table-wager-button" href="#" data-toggle="modal" data-target="#sportModal" data-team-name="Donald Crawford" data-confrontation="Harry Stewart vs Donald Crawford" data-wager-count="1.005" data-score="7:6"><span>Donald Crawford</span><span class="sport-table-wager-button-count">1.005</span></a>
                                                    </div>
                                                  </div>
                                                  <div class="col-md-1">
                                                    <div class="sport-table-bonus"><span class="sport-table-bonus-count">+25</span><span class="sport-table-bonus-icon material-icons-chevron_right"></span></div>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="heading-component">
                                    <div class="heading-component-inner">
                                      <div class="container">
                                        <div class="row">
                                          <div class="col-md-12">
                                            <h5 class="heading-component-title">BASKETBALL</h5>
                                          </div>
                                        </div>
                                        <div class="row">
                                          <div class="col-md-12">
                                            <div class="sport-table-header">
                                              <p>nba finals</p>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="sport-table">
                                          <div class="sport-table-tr">
                                            <div class="row sport-row align-items-center row-15">
                                             
                                              <div class="col-md-4">
                                                <div class="sport-table-title">
                                                  <div class="sport-table-title-item sport-table-title-item-left"><span class="sport-table-title-team">New York Knicks</span><span class="sport-table-title-team">Houston Rockets</span></div>
                                                  <div class="sport-table-title-item sport-table-title-item-right"><span class="sport-table-title-score"><span>53</span></span>
                                                   <span class="sport-table-title-score"><span>66</span></span>
                                                  </div>
                                                </div>
                                              </div>
                                              <div class="col-md-7">
                                                <div class="sport-table-wager sport-table-wager-double"><a class="sport-table-wager-button" href="#" data-toggle="modal" data-target="#sportModal" data-team-name="New York Knicks" data-confrontation="New York Knicks vs Houston Rockets" data-wager-count="2.05" data-score="53:66"><span>New York Knicks</span><span class="sport-table-wager-button-count">2.05</span></a><a class="sport-table-wager-button" href="#" data-toggle="modal" data-target="#sportModal" data-team-name="Houston Rockets" data-confrontation="New York Knicks vs Houston Rockets" data-wager-count="1.005" data-score="53:66"><span>Houston Rockets</span><span class="sport-table-wager-button-count">1.005</span></a>
                                                </div>
                                              </div>
                                              <div class="col-md-1">
                                                <div class="sport-table-bonus"><span class="sport-table-bonus-count">+25</span><span class="sport-table-bonus-icon material-icons-chevron_right"></span></div>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="heading-component">
                                    <div class="heading-component-inner">
                                      <div class="container">
                                        <div class="row">
                                          <div class="col-md-12">
                                            <h5 class="heading-component-title">ICE HOCKEY</h5>
                                          </div>
                                        </div>
                                        <div class="row">
                                          <div class="col-md-12">
                                            <div class="sport-table-header">
                                              <p>national hockey league</p>
                                            </div>
                                            <div class="sport-table">
                                              <div class="sport-table-tr">
                                                <div class="row sport-row align-items-center row-15">
                                                  <div class="col-md-4">
                                                    <div class="sport-table-title">
                                                      <div class="sport-table-title-item sport-table-title-item-left"><span class="sport-table-title-team">Anaheim Ducks</span><span class="sport-table-title-team">New York Rangers</span></div>
                                                      <div class="sport-table-title-item sport-table-title-item-right"><span class="sport-table-title-score"><span>4</span></span>
                                                        <span class="sport-table-title-score"><span>2</span></span>
                                                      </div>
                                                    </div>
                                                  </div>
                                                  <div class="col-md-7">
                                                    <div class="sport-table-wager"><a class="sport-table-wager-button" href="#" data-toggle="modal" data-target="#sportModal" data-team-name="Anaheim Ducks" data-confrontation="Anaheim Ducks vs New York Rangers" data-wager-count="1.23" data-score="4:2"><span>Anaheim Ducks</span><span class="sport-table-wager-button-count">1.23</span></a><a class="sport-table-wager-button" href="#" data-toggle="modal" data-target="#sportModal" data-team-name="Draw" data-confrontation="Anaheim Ducks vs. New York Rangers" data-wager-count="13.00" data-score="4:2"><span>Draw</span><span class="sport-table-wager-button-count">13.00</span></a><a class="sport-table-wager-button" href="#" data-toggle="modal" data-target="#sportModal" data-team-name="New York Rangers" data-confrontation="Anaheim Ducks vs New York Rangers" data-wager-count="34.25" data-score="4:2"><span>New York Rangers</span><span class="sport-table-wager-button-count">34.25</span></a>
                                                    </div>
                                                  </div>
                                                  <div class="col-md-1">
                                                    <div class="sport-table-bonus"><span class="sport-table-bonus-count">+58</span><span class="sport-table-bonus-icon material-icons-chevron_right"></span></div>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                            <div class="sport-table">
                                              <div class="sport-table-tr">
                                                <div class="row sport-row align-items-center row-15">
                                                  <div class="col-md-4">
                                                    <div class="sport-table-title">
                                                      <div class="sport-table-title-item sport-table-title-item-left"><span class="sport-table-title-team">Chicago Black Hawks</span><span class="sport-table-title-team">Washington Capitals</span></div>
                                                      <div class="sport-table-title-item sport-table-title-item-right"><span class="sport-table-title-score"><span>1</span></span>
                                                       <span class="sport-table-title-score"><span>0</span></span>
                                                      </div>
                                                    </div>
                                                  </div>
                                                  <div class="col-md-7">
                                                    <div class="sport-table-wager"><a class="sport-table-wager-button" href="#" data-toggle="modal" data-target="#sportModal" data-team-name="Chicago Black Hawks" data-confrontation="Chicago Black Hawks vs Washington Capitals" data-wager-count="1.58" data-score="1:0"><span>Chicago Black Hawks</span><span class="sport-table-wager-button-count">1.58</span></a><a class="sport-table-wager-button" href="#" data-toggle="modal" data-target="#sportModal" data-team-name="Draw" data-confrontation="Chicago Black Hawks vs. Washington Capitals" data-wager-count="13.00" data-score="1:0"><span>Draw</span><span class="sport-table-wager-button-count">13.00</span></a><a class="sport-table-wager-button" href="#" data-toggle="modal" data-target="#sportModal" data-team-name="Washington Capitals" data-confrontation="Chicago Black Hawks vs Washington Capitals" data-wager-count="17.88" data-score="1:0"><span>Washington Capitals</span><span class="sport-table-wager-button-count">17.88</span></a>
                                                    </div>
                                                  </div>
                                                  <div class="col-md-1">
                                                    <div class="sport-table-bonus"><span class="sport-table-bonus-count">+46</span><span class="sport-table-bonus-icon material-icons-chevron_right"></span></div>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                            <div class="sport-table">
                                              <div class="sport-table-tr">
                                                <div class="row sport-row align-items-center row-15">
                                                  <div class="col-md-4">
                                                    <div class="sport-table-title">
                                                      <div class="sport-table-title-item sport-table-title-item-left"><span class="sport-table-title-team">Florida Panthers</span><span class="sport-table-title-team">Detroit Red wings</span></div>
                                                      <div class="sport-table-title-item sport-table-title-item-right"><span class="sport-table-title-score"><span>1</span></span>
                                                        <span class="sport-table-title-score"><span>2</span></span>
                                                      </div>
                                                    </div>
                                                  </div>
                                                  <div class="col-md-7">
                                                    <div class="sport-table-wager"><a class="sport-table-wager-button" href="#" data-toggle="modal" data-target="#sportModal" data-team-name="Florida Panthers" data-confrontation="Florida Panthers vs Detroit Red wings" data-wager-count="2.41" data-score="1:2"><span>Florida Panthers</span><span class="sport-table-wager-button-count">2.41</span></a><a class="sport-table-wager-button" href="#" data-toggle="modal" data-target="#sportModal" data-team-name="Draw" data-confrontation="Florida Panthers vs. Detroit Red wings" data-wager-count="13.00" data-score="1:2"><span>Draw</span><span class="sport-table-wager-button-count">13.00</span></a><a class="sport-table-wager-button" href="#" data-toggle="modal" data-target="#sportModal" data-team-name="Detroit Red wings" data-confrontation="Florida Panthers vs Detroit Red wings" data-wager-count="23.28" data-score="1:2"><span>Detroit Red wings</span><span class="sport-table-wager-button-count">23.28</span></a>
                                                    </div>
                                                  </div>
                                                  <div class="col-md-1">
                                                    <div class="sport-table-bonus"><span class="sport-table-bonus-count">+51</span><span class="sport-table-bonus-icon material-icons-chevron_right"></span></div>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="heading-component">
                                    <div class="heading-component-inner">
                                      <div class="container">
                                        <div class="row">
                                          <div class="col-md-12">
                                            <h5 class="heading-component-title">
                                              VOLLEYBALL
                                            </h5>
                                          </div>
                                        </div>
                                        <div class="row">
                                          <div class="col-md-12">
                                            <div class="sport-table-header">
                                              <p>world championship</p>
                                            </div>
                                            <div class="sport-table">
                                              <div class="sport-table-tr">
                                                <div class="row sport-row align-items-center row-15">
                                                  <div class="col-md-4">
                                                    <div class="sport-table-title">
                                                      <div class="sport-table-title-item sport-table-title-item-left"><span class="sport-table-title-team">Estonia</span><span class="sport-table-title-team">Slovakia</span></div>
                                                      <div class="sport-table-title-item sport-table-title-item-right"><span class="sport-table-title-score"><span>18</span></span>
                                                        <!--span.sport-table-title-team= obj.team[1][0]--><span class="sport-table-title-score"><span>14</span></span>
                                                      </div>
                                                    </div>
                                                  </div>
                                                  <div class="col-md-7">
                                                    <div class="sport-table-wager sport-table-wager-double"><a class="sport-table-wager-button" href="#" data-toggle="modal" data-target="#sportModal" data-team-name="Estonia" data-confrontation="Estonia vs Slovakia" data-wager-count="1.12" data-score="18:14"><span>Estonia</span><span class="sport-table-wager-button-count">1.12</span></a><a class="sport-table-wager-button" href="#" data-toggle="modal" data-target="#sportModal" data-team-name="Slovakia" data-confrontation="Estonia vs Slovakia" data-wager-count="5.45" data-score="18:14"><span>Slovakia</span><span class="sport-table-wager-button-count">5.45</span></a>
                                                    </div>
                                                  </div>
                                                  <div class="col-md-1">
                                                    <div class="sport-table-bonus"><span class="sport-table-bonus-count">+25</span><span class="sport-table-bonus-icon material-icons-chevron_right"></span></div>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                            <div class="sport-table">
                                              <div class="sport-table-tr">
                                                <div class="row sport-row align-items-center row-15">
                                                  <div class="col-md-4">
                                                    <div class="sport-table-title">
                                                      <div class="sport-table-title-item sport-table-title-item-left"><span class="sport-table-title-team">Poland</span><span class="sport-table-title-team">Germany</span></div>
                                                      <div class="sport-table-title-item sport-table-title-item-right"><span class="sport-table-title-score"><span>27</span><span>8</span></span>
                                                        <span class="sport-table-title-score"><span>25</span><span>9</span></span>
                                                      </div>
                                                    </div>
                                                  </div>
                                                  <div class="col-md-7">
                                                    <div class="sport-table-wager sport-table-wager-double"><a class="sport-table-wager-button" href="#" data-toggle="modal" data-target="#sportModal" data-team-name="Poland" data-confrontation="Poland vs Germany" data-wager-count="2.10" data-score="27:25"><span>Poland</span><span class="sport-table-wager-button-count">2.10</span></a><a class="sport-table-wager-button" href="#" data-toggle="modal" data-target="#sportModal" data-team-name="Germany" data-confrontation="Poland vs Germany" data-wager-count="1.68" data-score="27:25"><span>Germany</span><span class="sport-table-wager-button-count">1.68</span></a>
                                                    </div>
                                                  </div>
                                                  <div class="col-md-1">
                                                    <div class="sport-table-bonus"><span class="sport-table-bonus-count">+46</span><span class="sport-table-bonus-icon material-icons-chevron_right"></span></div>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                            <div class="sport-table">
                                              <div class="sport-table-tr">
                                                <div class="row sport-row align-items-center row-15">
                                                  <div class="col-md-4">
                                                    <div class="sport-table-title">
                                                      <div class="sport-table-title-item sport-table-title-item-left"><span class="sport-table-title-team">France</span><span class="sport-table-title-team">Spain</span></div>
                                                      <div class="sport-table-title-item sport-table-title-item-right"><span class="sport-table-title-score"><span>16</span></span>
                                                        <span class="sport-table-title-score"><span>15</span></span>
                                                      </div>
                                                    </div>
                                                  </div>
                                                  <div class="col-md-7">
                                                    <div class="sport-table-wager sport-table-wager-double"><a class="sport-table-wager-button" href="#" data-toggle="modal" data-target="#sportModal" data-team-name="France" data-confrontation="France vs Spain" data-wager-count="1.25" data-score="16:15"><span>France</span><span class="sport-table-wager-button-count">1.25</span></a><a class="sport-table-wager-button" href="#" data-toggle="modal" data-target="#sportModal" data-team-name="Spain" data-confrontation="France vs Spain" data-wager-count="3.75" data-score="16:15"><span>Spain</span><span class="sport-table-wager-button-count">3.75</span></a>
                                                    </div>
                                                  </div>
                                                  <div class="col-md-1">
                                                    <div class="sport-table-bonus"><span class="sport-table-bonus-count">+51</span><span class="sport-table-bonus-icon material-icons-chevron_right"></span></div>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="heading-component">
                                    <div class="heading-component inner">
                                      <div class="container">
                                        <div class="row">
                                          <div class="col-md-12">
                                            <h5 class="heading-component-title">BADMINTON</h5>
                                          </div>
                                        </div>
                                        <div class="row">
                                          <div class="col-md-12">
                                            <div class="sport-table-header">
                                              <p>championship</p>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                
                              {{-- End of All Sports --}}
                              
                              {{-- Football --}}
                                <div class="tab-pane fade" id="football" role="tabpanel" aria-labelledby="footballtab">
                                
                              </div>
                              {{-- End of Football --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
           
            
            {{-- End of navs and tabs --}}
    </body>
</html>

@extends('layouts.app')

@section('content')
    
{{-- My Current Lines Data --}}
<h1 class="mt-5 ml-2">MY LINES</h1>
<?php foreach ($datas["data"]["sports"] as $sportsdata){
        foreach($sportsdata["leagues"] as $leaguesdata){
    ?>
<div class="row">
    <div class="col-md-12">
        <h5 class="heading-component-title text-uppercase mt-5"><?php echo $sportsdata["sport_name"]; ?></h5>
    </div>
</div>
<div class="sport-table-header justify-content-between">
    <div class="row">
        <div class="col-md-5">
            <p><?php echo $leaguesdata["league_name"]; ?></p>
        </div>
        <div class="col-md-7">
           <?php foreach($leaguesdata["groups"] as $groupsdata){
            foreach($groupsdata["events"] as $eventsdata){
            
             ?>
             <?php 
            try {
                if ($eventsdata["event_date"]!="") {
                   
            ?>
              <p class="text-uppercase"> Date: <?php echo $eventsdata["event_date"]; ?></p>
         
              <?php
              }
            } catch (\Throwable $th) {
                //throw $th;
            }
        
        }}   ?>  
           
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
                    
                  <div class="sport-table-title-item sport-table-title-item-left">
                    <?php 
                           
                    foreach($eventsdata["event_participant"] as $eventsparticipant){
            
                 ?>
                      <span class="sport-table-title-team"><?php echo $eventsparticipant["event_value"]["team_name"]; ?></span>
                      <?php } ?>
                    </div>
                  
                  <div class="sport-table-title-item sport-table-title-item-right">
                      <?php  foreach($eventsdata["event_participant"] as $eventsparticipant){ ?>
                      <span class="sport-table-title-score"><span><?php echo $eventsparticipant["event_value"]["rot"]; ?></span></span>
                        <?php } ?>
                 
                  </div>
                </div>
              </div>
              <div class="col-md-7">
                <div class="sport-table-wager">
                    <?php
                        foreach($eventsdata["event_participant"] as $eventsparticipant){
                        ?>
                    <a class="sport-table-wager-button" href="#" data-toggle="modal" data-target="#sportModal" data-team-name="Real Madrid" data-confrontation="Real Madrid vs Chelsea" data-wager-count="1.23" data-score="4:2">
                        <span><?php echo $eventsparticipant["event_value"]["team_name"]; ?></span>
                        <span class="sport-table-wager-button-count"><?php echo $eventsparticipant["event_value"]["side"]; ?></span>
                    </a>
                        <?php } ?>
                </div>
              </div>
              <div class="col-md-1">
                <div class="sport-table-bonus">
                  <span class="sport-table-bonus-count"><?php echo $eventsparticipant["event_value"]["money_line"]; ?></span>
                  <span class="sport-table-bonus-icon material-icons-chevron_right"></span>
                </div>
              </div>
            </div>
          </div>  
      </div>
    </div>
  </div>
<?php } } ?>
<?php 
   //dd($sportsdata);
  ?>
    

{{-- End of Current Lines Data --}}

@endsection
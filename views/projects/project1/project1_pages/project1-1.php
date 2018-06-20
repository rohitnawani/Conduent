<h1 class='text-primary'>Wordcloud</h1>
<br>   
<div class='row'>
  <div class='col-sm-12'>
    <div class='panel panel-default'>
      <div class='panel-heading text-center'>
        <label >PICK A RANGE</label>
      </div>
      <div class="panel-body">
          <style>
            .ui-widget-content { border: 1px solid rgba(195,195,195,1);background: rgba(239,239,239,1); }
            .ui-widget-content .ui-state-default {border: 1px solid rgba(195,195,195,1);background: rgba(239,239,239,1); }
            .ui-widget-header {background: rgba(239,239,239,1);}
            #amount{background-color: background: rgba(239,239,239,1);}
          </style>
          <div id="slider-range"></div>
      </div>
      <div class="panel-footer">
        <div class='text-center'>
          <label  id="start_date"></label> to
          <label  id="end_date"></label>
        </div>
      </div>        
    </div>
  </div>
</div> 
<div class='row'>
  <div class='col-md-2'>
    <div class='form-group'>
      <select id='source-options' class='form-control' onchange="renderWordCloud()">
        <option value="All">All</option>
        <option value="Glassdoor">Glassdoor</option>
        <option value="Indeed">Indeed</option>
        <option value="LinkedIn">LinkedIn</option>        
      </select> 
    </div>      
  </div>
  <div class='col-md-2'>
    <div class='form-group'>
      <select id='label-options' class='form-control' onchange="renderWordCloud()">
        <option value="All">All</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>     
      </select> 
    </div>      
  </div>
  <div class='col-md-4'>
    <div class='container'>
      <label>Spiral:</label>
      <label class='radio-inline' for="archimedean"><input type="radio" name="spiral" id="spiral"  value="archimedean" checked="checked" onchange="renderWordCloud()"> Archimedean</label>
      <label class='radio-inline' for="rectangular"><input type="radio" name="spiral"  id="spiral" value="rectangular" onchange="renderWordCloud()"> Rectangular</label>
    </div>
  </div>
  <div class='col-md-4'>
    <div class='container'>
      <label >Scale:</label>
      <label class='radio-inline' for="scale-log"><input type="radio" name="scale" id="scale" value="log" checked="checked" onchange="renderWordCloud()"> log n</label>
      <label class='radio-inline' for="scale-sqrt"><input type="radio" name="scale" id="scale" value="sqrt" onchange="renderWordCloud()"> √n</label>
      <label class='radio-inline' for="scale-linear"><input type="radio" name="scale" id="scale" value="linear" onchange="renderWordCloud()"> n</label>
    </div>
  </div>
</div>
<div class='row'>
  <div class='col-md-12'>
    <div id='wordcloud'></div>
  </div>
</div>








<br>


<script type='text/javascript' src='d3/p1-1.js'></script> 

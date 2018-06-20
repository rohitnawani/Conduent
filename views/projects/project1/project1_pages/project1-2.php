<h1 class='text-primary'>Wordcloud</h1>



<div id="controllers"></div>



<br>



<div class='row'>

  <div class='col-md-3'>

    <div class='form-group'>

      <select id='source-options' class='form-control' onchange="renderWordCloud('2010-05-03','2018-05-02')">

        <option value="All" selected>All</option>

        <option value="Glassdoor">Glassdoor</option>

        <option value="Indeed">Indeed</option>

        <option value="LinkedIn">LinkedIn</option>

      </select>

    </div>

  </div>

</div>



<br>



<div id="vis">

	<svg width="960" heigth="600"></svg>

</div>



<form id="form">

<hr>









</form>



<script type='text/javascript' src='d3/p1-2.js'></script>


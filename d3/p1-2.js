function renderWordCloud(start_date, end_date){

    var ste = document.getElementById('start_date').innerHTML;
    console.log(ste);
    var source = document.getElementById("source-options").value;
    console.log(source);

    d3.select("#vis").html("");

    d3.csv('tf.csv', function(error, data) {
        data.forEach(function(d){
            d.text = d.text;
            d.size = d.size;
            d.source = d.source;
            d.date = new Date(d.date+" EST");
        });

        var dateFilteredData = [];
        start_date = new Date(start_date+" EST");
        end_date = new Date(end_date+" EST");

        for(var i =0; i<data.length;i++){
            if(data[i].date.getTime() >= start_date.getTime() && data[i].date.getTime() <= end_date.getTime()){
                dateFilteredData.push(data[i]);
            }
        }

        d3.wordcloud()
                .size([600, 400])
                .fill(d3.scale.ordinal().range(["#884400", "#448800", "#888800", "#444400"]))
                .selector('#vis')
                .words(aggregateData((source != 'All')?aggregator(filter(source,dateFilteredData)):aggregator(dateFilteredData)))
                .scale(document.getElementById("scale").value)
                .spiral(document.getElementById("spiral").value)
                .font(document.getElementById("font").value)
                .fontWeight(10)
                .padding(5)
                .rotate(0)
                .onwordclick(function(d, i) {
                      window.location = "https://www.google.co.uk/search?q=" + d.text;
                    })
                .start();
        });
}

function aggregator(entryPoint){
    return d3.nest()
      .key(function(d) { return d.text; })
      .rollup(function(v) { return d3.sum(v, function(d) { return d.size; }); })
      .entries(entryPoint);
}

function filter(source,data){
    var filteredData = [];
    for(var i = 0; i<data.length;i++){
       if(data[i].source == source){
            filteredData.push(data[i]);
       }
    }
    return filteredData;
}

function aggregateData(group){
    var final = [];
    group.forEach(function(d){
        final.push({text:d.key, size:d.values});
    });
    return final;
}

renderWordCloud('2010-05-03','2018-05-02');
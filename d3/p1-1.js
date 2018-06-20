wordCloudData.forEach(function(d){
    d.word = d.word;
    d.size = d.size;
    d.source = d.source;
    d.date = new Date(d.date+" EST");
    d.label = d.label;
});

function renderWordCloud(){

    d3.select("#wordcloud").html("");

    var option = document.getElementById("source-options").value;
    var label = document.getElementById("label-options").value;
    var start_date = document.getElementById('start_date').textContent;
    var end_date = document.getElementById('end_date').textContent;


    var labelFilteredData = [];
    if(label != 'All'){
        for(var i =0; i<wordCloudData.length;i++){
            if(wordCloudData[i].label == label){
                labelFilteredData.push(wordCloudData[i]);
            }
        }
    }else{
        labelFilteredData = wordCloudData;
    }

    var dateFilteredData = [];
    start_date = new Date(start_date+" EST");
    end_date = new Date(end_date+" EST");

    for(var i =0; i<labelFilteredData.length;i++){
        if(labelFilteredData[i].date.getTime() >= start_date.getTime() && labelFilteredData[i].date.getTime() <= end_date.getTime()){
            dateFilteredData.push(labelFilteredData[i]);
        }
    }

    d3.wordcloud()
        .size([800, 500])
        .fill(d3.scale.ordinal().range(["#884400", "#448800", "#888800", "#444400"]))
        .selector('#wordcloud')
        .words(aggregateData((option != 'All')?aggregator(filter(option,dateFilteredData)):aggregator(dateFilteredData)))
        .scale('log')
        .scale(document.getElementById("scale").value)
        .spiral(document.getElementById("spiral").value)
        .font('Impact')
        .onwordclick(function(d, i) {
              window.location = "https://www.google.co.uk/search?q=" + d.text;
            })
        .start();

}

function aggregator(entryPoint){
    return d3.nest()
      .key(function(d) { return d.word; })
      .rollup(function(v) { return d3.sum(v, function(d) { return d.size; }); })
      .entries(entryPoint);
}

function filter(option,data){
    var filteredData = [];
    for(var i = 0; i<data.length;i++){
       if(data[i].source == option){
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

renderWordCloud();

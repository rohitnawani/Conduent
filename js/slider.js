$(function () {
  var minDate = new Date('2016-12-31');
  var maxDate = new Date();
    $("#slider-range").slider({ 
        range: true,
        min: minDate.getTime(),
        max: maxDate.getTime(),
        step: 60 * 60 * 24 * 1000,
        slide: function (event, ui) {
            var startDate = new Date(ui.values[0]);
            var endDate = new Date(ui.values[1]);
            var start_date = startDate.getFullYear()+"-"+getNotation(startDate.getMonth() + 1)+"-"+getNotation(startDate.getDate());
            var end_date = endDate.getFullYear()+"-"+getNotation(endDate.getMonth() + 1)+"-"+getNotation(endDate.getDate());
            renderWordCloud('All',start_date,end_date);
            $("#start_date").text(start_date);
            $('#end_date').text(end_date);
        }
    });

    $("#start_date").text(minDate.getUTCFullYear()+"-"+getNotation(minDate.getMonth() + 1)+"-"+getNotation(minDate.getDate()));
    $("#end_date").text(maxDate.getUTCFullYear()+"-"+getNotation(maxDate.getMonth() + 1)+"-"+getNotation(maxDate.getDate()));

function getNotation(entity){
    return entity>9?entity:"0"+entity;
}

renderWordCloud();


})
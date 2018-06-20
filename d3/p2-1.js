
var makeSolid =  function(selection, color) {
    selection
        .append("appearance")
        .append("material")
        .attr("diffuseColor", color || "black");
    return selection;
};
var width = 500;
var height = 500;

var x3d = d3v4.select("#chartholder")
    .attr("width", width + 'px')
    .attr("height", height +'px')
    .attr("showLog", 'false')
    .attr("showStat", 'false');

d3v4.select('.x3dom-canvas')
    .attr("width",  width)
    .attr("height",  height);

var x = d3v4.scaleLinear().range([0, 40]);
var y = d3v4.scaleLinear().range([0, 40]);
var z = d3v4.scaleLinear().range([0, 40]);
var xAxis = d3_x3dom_axis.x3domAxis('x', 'z', x).tickSize(z.range()[1] - z.range()[0]).tickPadding(y.range()[0]);
var yAxis = d3_x3dom_axis.x3domAxis('y', 'z', y).tickSize(z.range()[1] - z.range()[0]);
var yAxis2 = d3_x3dom_axis.x3domAxis('y', 'x', y).tickSize(x.range()[1] - x.range()[0]).tickFormat(function(d){return ''});
var zAxis = d3_x3dom_axis.x3domAxis('z', 'x', y).tickSize(x.range()[1] - x.range()[0]);

var scene = x3d.append("scene");
var view_pos = [80, 20, 80];
var fov = 0.8;
var view_or = [0, 1, 0, 0.8];

scene.append("viewpoint")
    .attr("id", 'dvp')
    .attr("position", view_pos.join(" "))
    .attr("orientation", view_or.join(" "))
    .attr("fieldOfView", fov)
    .attr("description", "defaultX3DViewpointNode").attr("set_bind", "true");

scene.append('group')
    .attr('class', 'xAxis')
    .call(xAxis)
    .select('.domain').call(makeSolid, 'blue');

scene.append('group')
    .attr('class', 'yAxis')
    .call(yAxis)
    .select('.domain').call(makeSolid, 'red');

scene.append('group')
    .attr('class', 'yAxis')
    .call(yAxis2)
    .select('.domain').call(makeSolid, 'red');

scene.append('group')
    .attr('class', 'zAxis')
    .call(zAxis)
    ;//.select('.domain');

var n = 40;
var points = d3v4.range(n).map(function(d) {
    var p = {};
    p.x = Math.random();
    p.z = Math.random();
    p.y = Math.random();
    return p;
});

scene.selectAll('.point')
    .data(points)
    .enter()
    .append('transform')
    .attr('class', 'point')
    .attr('translation', function(d){ return x(d.x) + ' ' + y(d.y) + ' ' + z(d.z)})
    //AP: try mouseover
    .attr('onmouseover', 'handlemouseover(this, event);')
    .append('shape')
    .call(makeSolid, 'orange')
    .append('sphere')
    .attr('radius', 0.8);

scene.append('transform')
    .attr('class', 'label')
    .attr('scale', '1 1 1')
    .append('billboard')
    .attr('axisOfRotation', '0 0 0')
    .append('shape')
        .call(makeSolid,'0 0 0')
        .append('Text')
            .attr('class','labelText')
            .attr('string', 'default label')
            .append("fontstyle")
                .attr("size", 1)
                .attr("family", "SANS")
                .attr("style", "BOLD")
                .attr("justify", "END")
                .attr("quality", "3");

function handlemouseover(target, event) {
    scene.select(".label")
        .attr('translation', target.translation);
    scene.select(".labelText")
        .attr('string',  "y: "+(target.translation.split(' ')[1]/40.0).toPrecision(8));
}
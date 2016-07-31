var svg = d3.select("svg"),
    margin = {top: 20, right: 20, bottom: 30, left: 150},
    width = +svg.attr("width") - margin.left - margin.right,
    height = +svg.attr("height") - margin.top - margin.bottom,
    g = svg.append("g").attr("transform", "translate(" + margin.left + "," + margin.top + ")");
	
var tooltip = d3.select('body').append('div')
	.style('position','absolute')
	.style('padding', 20 + 'px')
	.style('background','white')
	.style('opacity','0')

var y = d3.scaleBand()
    .rangeRound([0, height])
    .padding(0.1)
    .align(0.1);

var x = d3.scaleLinear()
    .rangeRound([0, width]);

var z = d3.scaleOrdinal()
    .range(["#523B95","#9B3E97","#B71E50","#E41070","#EA7EB2","#97B0DB","#72CBE9","#A6CAC7","#98CB60","#00A668","#19773C"]);

var stack = d3.stack();

d3.csv("data/compiledData.csv", type, function(error, data) {
  if (error) throw error;

  data.sort(function(a, b) { return b.total - a.total; });

  y.domain(data.map(function(d) { return d.LocalGovernment; }));
  x.domain([0, d3.max(data, function(d) { return d.total; })]).nice();
  z.domain(data.columns.slice(1));

  g.selectAll(".serie")
    .data(stack.keys(data.columns.slice(1))(data))
    .enter().append("g")
      .attr("class", "serie")
      .attr("fill", function(d) { return z(d.key); })
    .selectAll("rect")
    .data(function(d) { return d; })
    .enter().append("rect")
	   .attr("y", function(d) { return y(d.data.LocalGovernment); })
      .attr("x", function(d) { return x(d[0]); })
	  .attr("width", function(d) { return x(d[1]) - x(d[0]); })
	   .attr("height", y.bandwidth())
	  
.on('mouseover', function(d) {
	
	tooltip.transition()
		.style('opacity', .9)
	tooltip.html(d)
		.style('left', (d3.event.pageX + 20) + 'px')
		.style('top', (d3.event.pageY + 20) + 'px')
		
	tempColor = this.style.fill;
	d3.select(this)
		.style('opacity', .5)
		.style('fill', 'black')
		.style('cursor', 'hand')
})
.on('mousemove', function(d) {
	tooltip.html(d)
		.style('left', (d3.event.pageX + 20) + 'px')
		.style('top', (d3.event.pageY + 20) + 'px')
})
.on('mouseout', function(d) {
	tooltip.transition()
		.style('opacity', 0)
	d3.select(this)
		.style('opacity', 1)
		.style('fill', tempColor);
});

  g.append("g")
      .attr("class", "axis axis--y")
      .call(d3.axisLeft(y));

  g.append("g")
      .attr("class", "axis axis--x")
      .call(d3.axisTop(x).ticks(10, "s"))
    .append("text")
      .attr("y", 2)
      .attr("x", x(x.ticks(10).pop()))
      .attr("dx", "0.35em")
      .attr("text-anchor", "start")
      .attr("fill", "#ccc")

});

function type(d, i, columns) {
  for (i = 1, t = 0; i < columns.length; ++i) t += d[columns[i]] = +d[columns[i]];
  d.total = t;
  return d;
}

var chart = $("#chart"),
    aspect = chart.width() / chart.height(),
    container = chart.parent();
$(window).on("resize", function() {
    var targetWidth = container.width();
    chart.attr("width", targetWidth);
    chart.attr("height", Math.round(targetWidth / aspect));
}).trigger("resize");

<div class="graficos"><svg id="idade"></svg><svg id="salario"></svg></div>

<script>

    // var dados = [
    //     {key: "One", value: 3},
    //     {key: "Two", value: 2},
    //     {key: "Three", value: 9},
    //     {key: "Four", value: 7},
    //     {key: "Five", value: 4},
    //     {key: "Six", value: 3},
    // ];

    var dadosIdade = <?php echo porIdade(); ?>;

    var width = 300;
    var height = 300;

    nv.addGraph(function() {

        var chart = nv.models.pie()
                .x(function(d) { return d.key; })
                .y(function(d) { return d.value; })
                .width(width)
                .height(height)
        ;

	d3.select("#idade")
	        .datum([dadosIdade])
	        .transition().duration(1200)
	        .attr('width', width)
	        .attr('height', height)
	        .call(chart)
	;

        return chart;
    });

    var dadosSalario = <?php echo getQuantidadePor("salario"); ?>;

    nv.addGraph(function() {

        var chart = nv.models.pie()
                .x(function(d) { return d.key; })
                .y(function(d) { return d.value; })
                .width(width)
                .height(height)
        ;

        d3.select("#salario")
                .datum([dadosSalario])
                .transition().duration(1200)
                .attr('width', width)
                .attr('height', height)
                .call(chart)
        ;

        return chart;
        });

</script>
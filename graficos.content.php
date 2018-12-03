<div class="graficos">
    <h2 class="text-secondary">Gráfico por Idade</h2>
    <svg id="idade"></svg>

    <h2 class="text-secondary">Gráfico por Salário</h2>
    <svg id="salario"></svg>
</div>

<script>
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
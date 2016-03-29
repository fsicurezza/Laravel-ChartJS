<script>
$(function() {
    var ctx = document.getElementById("{{ $prefix }}{!! $element !!}").getContext("{!! $context !!}");

    var chart = new Chart(ctx).{{ $type }}({!! json_encode($datasets) !!}, {!! json_encode($options) !!});

    var legend = document.getElementById("{{ $prefix }}{!! $element !!}-legend");
    legend.innerHTML = chart.generateLegend();

});
</script>

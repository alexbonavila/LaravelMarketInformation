<div id="get_history">
        <div class="col-xs-2">
            <input type="text" class="form-control" name="symbol_query" id="symbol_query" placeholder="Symbol Company">
        </div>
        <button type="submit" name="get_info" id="get_info" class="btn btn-default" onclick="redirect()">Consulta</button>
        <h3><span class="label label-primary big">{{$symbol}}</span></h3>
</div>
<div class="container">
    <graph :labels="{{$dates}}"
           :values="{{$values}}"
           :symbol="{{$symbol}}"
           :color="blue"
    ></graph>
</div>

<script>
    function redirect(){
        var input=document.getElementById("symbol_query").value;
        var str=String(input);
        window.location="http://localhost:8000/history/".concat(str);
    }
</script>
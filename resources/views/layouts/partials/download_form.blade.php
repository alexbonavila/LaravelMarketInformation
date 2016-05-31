<form class="form-inline">

    <div id="form">

        <div class="form-group">
            <label>Company Symbol</label>
            <input v-model="symbol" class="form-control" id="InputSymbol" placeholder="AAPL">

        </div>

        <div class="form-group">
            <label>Extensió</label>
            <input v-model="extension" class="form-control" id="InputExtension" placeholder="json xml yaml csv">
        </div>

        <a type="button"
           class="btn btn-primary btn-bg"
           name="Download"
           id="Download"
           href="http://localhost:8000/historic_info_files/@{{ extension }}/@{{ symbol }}.@{{ extension }}"
           download="@{{ symbol }}.@{{ extension }}">
            Download
        </a>

    </div>



    </BR>
    </BR>
    </BR>

    <blockquote class="blockquote">
        <p class="m-b-0">En aquesta pagina pots descarregarte la informació bursatil de les empreses dins d'arxius,
        en els seguents formats:</p>
        <footer class="blockquote-footer"><cite title="Source Title">JSON</cite></footer>
        <footer class="blockquote-footer"><cite title="Source Title">XML</cite></footer>
        <footer class="blockquote-footer"><cite title="Source Title">YAML</cite></footer>
        <footer class="blockquote-footer"><cite title="Source Title">CSV</cite></footer>
    </blockquote>

</form>

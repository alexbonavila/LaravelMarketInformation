<div id="calc">
    <div class="row">


        <div class="col-xs-4">
            <input type="text" class="form-control" placeholder={{ Auth::user()->email}} readonly>
        </div>
        <div class="col-xs-4">
            <input type="text" class="form-control" placeholder="Titol del calcul">
        </div>

        </BR>
        </BR>


        <h3><span class="label label-primary">Preu de compra</span></h3>
        </BR>
        <div class="col-xs-3">
            <input type="text" class="form-control" placeholder="Quantitat a comprar">
        </div>
        <div class="col-xs-2">
            <input type="text" class="form-control" placeholder="Preu per acció">
        </div>
        <div class="col-xs-2">
            <input type="text" class="form-control" placeholder="Total" readonly>
        </div>

        </BR>
        </BR>

        <h3><span class="label label-success">Preu de venda</span></h3>
        </BR>
        <div class="col-xs-3">
            <input type="text" class="form-control" placeholder="Quantitat a vendre">
        </div>
        <div class="col-xs-2">
            <input type="text" class="form-control" placeholder="Preu per acció">
        </div>
        <div class="col-xs-2">
            <input type="text" class="form-control" placeholder="% d'impostos">
        </div>
        <div class="col-xs-2">
            <input type="text" class="form-control" placeholder="Total" readonly>
        </div>

        </BR>
        </BR>
        </BR>

        <button type="button" class="btn btn-default">Save</button>

    </div>
</div>
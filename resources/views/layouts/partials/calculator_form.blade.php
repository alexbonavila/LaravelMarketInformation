<form name="calculadora" class="form-calc-save" id="form-calc-save" role="form" method="post" action="calc/save">
    <div class="row">

        <div class="col-xs-4">
            <input type="text" class="form-control" placeholder={{ Auth::user()->email}} disabled>
        </div>
        <div class="col-xs-4">
            <input type="text" class="form-control" name="title" id="title" placeholder="Titol del calcul">
        </div>

        </BR>
        </BR>

        <h3><span class="label label-primary">Preu de compra</span></h3>
        </BR>
        <div class="col-xs-3">
            <input type="text" name="to_buy" id="to_buy" class="form-control" placeholder="Quantitat a comprar" onKeyUp="buy()">
        </div>
        <div class="col-xs-2">
            <input type="text" name="quote_buy" id="quote_buy" class="form-control" placeholder="Preu per acció" onKeyUp="buy()">
        </div>

        <div class="col-xs-2">
            <input type="text" name="total_buy" id="total_buy" class="form-control" placeholder="Total Compra" disabled>
        </div>

        </BR>
        </BR>

        <h3><span class="label label-primary">Preu de venda</span></h3>
        </BR>
        <div class="col-xs-3">
            <input type="text" name="to_sell" id="to_sell" class="form-control" placeholder="Quantitat a vendre" onKeyUP="sell()">
        </div>
        <div class="col-xs-2">
            <input type="text" name="quote_sell" id="quote_sell" class="form-control" placeholder="Preu per acció" onKeyUP="sell()">
        </div>
        <div class="col-xs-2">
            <input type="text" name="taxes" id="taxes" class="form-control" placeholder="% d'impostos" onKeyUP="sell()">
        </div>
        <div class="col-xs-2">
            <input type="text" name="total_sell" id="total_sell" class="form-control" placeholder="Total Venda" disabled>
        </div>

        </BR>
        </BR>

        <h3><span class="label label-success">Total</span></h3>
        </BR>
        <div class="col-xs-3">
            <input type="text" name="total" id="total" class="form-control" placeholder="Total Beneficis o perdues" disabled>
        </div>

        </BR>
        </BR>
        </BR>
        <button type="button" name="save_button" id="save_button" class="btn btn-default">Save</button>

    </div>
</form>

<script>
    function buy() {
        var to_buy = document.calculadora.to_buy.value;
        var quote_buy = document.calculadora.quote_buy.value;
        try{
            quantity = (isNaN(parseInt(to_buy)))? 0 : parseFloat(to_buy);
            quote = (isNaN(parseInt(quote_buy)))? 0 : parseFloat(quote_buy);
            document.calculadora.total_buy.value = quantity*quote;
            total();
        }
        catch(e) {

        }
    }

    function sell(){
        var to_sell= document.calculadora.to_sell.value;
        var quote_sell= document.calculadora.quote_sell.value;
        var taxes_sell= document.calculadora.taxes.value;
        try {
            quan_sell = (isNaN(parseInt(to_sell)))? 0 : parseFloat(to_sell);
            quot_sell = (isNaN(parseInt(quote_sell)))? 0 : parseFloat(quote_sell);
            taxes = (isNaN(parseInt(taxes_sell)))? 0 : parseFloat(taxes_sell);
            document.calculadora.total_sell.value = (quan_sell*quot_sell)-((quan_sell*quot_sell)*(taxes/100));
            total();
        }catch (e){

        }
    }

    function total(){
        var tot_by= document.calculadora.total_buy.value;
        var tot_slll=document.calculadora.total_sell.value;
        try {
            v1=(isNaN(parseInt(tot_by)))? 0 : parseFloat(tot_by);
            v2=(isNaN(parseInt(tot_slll)))? 0 : parseFloat(tot_slll);
            document.calculadora.total.value = v2-v1;
        }catch (e){

        }


    }
</script>

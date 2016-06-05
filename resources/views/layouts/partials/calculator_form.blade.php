<form name="calculadora" class="form-calc-save" id="form-calc-save" role="form" method="post" action="api/calc/save">
    <div class="row">
        @if (Auth::user() != null)
        <input type="hidden" id="api_key" name="api_key" content="{{ Auth::user()->apiKey->key }}" disabled>

        <div class="col-xs-4">
            <input type="text" class="form-control" placeholder={{ Auth::user()->email}} disabled>
        </div>
        @endif
        <div class="col-xs-4">
            <input type="text" class="form-control" name="name" id="name" placeholder="Titol del calcul">
        </div>

        </BR>
        </BR>

        <h3><span class="label label-primary">Preu de compra</span></h3>
        </BR>
        <div class="col-xs-3">
            <input type="text" name="quantity_to_buy" id="quantity_to_buy" class="form-control" placeholder="Quantitat a comprar" onKeyUp="buy()">
        </div>
        <div class="col-xs-2">
            <input type="text" name="quote_to_buy" id="quote_to_buy" class="form-control" placeholder="Preu per acció" onKeyUp="buy()">
        </div>

        <div class="col-xs-2">
            <input type="text" name="price_to_buy" id="price_to_buy" class="form-control" placeholder="Total Compra" readonly>
        </div>

        </BR>
        </BR>

        <h3><span class="label label-primary">Preu de venda</span></h3>
        </BR>
        <div class="col-xs-3">
            <input type="text" name="quantity_to_sell" id="quantity_to_sell" class="form-control" placeholder="Quantitat a vendre" onKeyUP="sell()">
        </div>
        <div class="col-xs-2">
            <input type="text" name="quote_to_sell" id="quote_to_sell" class="form-control" placeholder="Preu per acció" onKeyUP="sell()">
        </div>
        <div class="col-xs-2">
            <input type="text" name="tax_percent_to_discount" id="tax_percent_to_discount" class="form-control" placeholder="% d'impostos" onKeyUP="sell()">
        </div>
        <div class="col-xs-2">
            <input type="text" name="price_to_sell" id="price_to_sell" class="form-control" placeholder="Total Venda" readonly>
        </div>

        </BR>
        </BR>

        <h3><span class="label label-success">Total</span></h3>
        </BR>
        <div class="col-xs-3">
            <input type="text" name="gains_or_losses" id="gains_or_losses" class="form-control" placeholder="Total Beneficis o perdues" readonly>
        </div>

        </BR>
        </BR>
        </BR>
        <button type="submit" name="save_button" id="save_button" class="btn btn-default">Guarda</button>

    </div>
</form>



<script>
    function buy() {
        var quantity_to_buy = document.calculadora.quantity_to_buy.value;
        var quote_to_buy = document.calculadora.quote_to_buy.value;
        try{
            quantity = (isNaN(parseInt(quantity_to_buy)))? 0 : parseFloat(quantity_to_buy);
            quote = (isNaN(parseInt(quote_to_buy)))? 0 : parseFloat(quote_to_buy);
            document.calculadora.price_to_buy.value = quantity*quote;
            total();
        }
        catch(e) {

        }
    }

    function sell(){
        var to_sell= document.calculadora.quantity_to_sell.value;
        var quote_sell= document.calculadora.quote_to_sell.value;
        var taxes_sell= document.calculadora.tax_percent_to_discount.value;
        try {
            quan_sell = (isNaN(parseInt(to_sell)))? 0 : parseFloat(to_sell);
            quot_sell = (isNaN(parseInt(quote_sell)))? 0 : parseFloat(quote_sell);
            taxes = (isNaN(parseInt(taxes_sell)))? 0 : parseFloat(taxes_sell);
            document.calculadora.price_to_sell.value = (quan_sell*quot_sell)-((quan_sell*quot_sell)*(taxes/100));
            total();
        }catch (e){

        }
    }

    function total(){
        var tot_by= document.calculadora.price_to_buy.value;
        var tot_slll=document.calculadora.price_to_sell.value;
        try {
            v1=(isNaN(parseInt(tot_by)))? 0 : parseFloat(tot_by);
            v2=(isNaN(parseInt(tot_slll)))? 0 : parseFloat(tot_slll);
            document.calculadora.gains_or_losses.value = v2-v1;
        }catch (e){

        }


    }
</script>

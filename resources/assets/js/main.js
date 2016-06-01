import Vue from 'vue'
import Graph from './components/Graph';


// register the grid component
Vue.component('demo-grid', {
    template: '#grid-template',
    props: {
        data: Array,
        columns: Array,
        filterKey: String
    },
    data: function () {
        var sortOrders = {};
        this.columns.forEach(function (key) {
            sortOrders[key] = 1
        });
        return {
            sortKey: '',
            sortOrders: sortOrders
        }
    },
    methods: {
        sortBy: function (key) {
            this.sortKey = key
            this.sortOrders[key] = this.sortOrders[key] * -1
        }
    }
});

// bootstrap the demo
new Vue({
    el: '#test1',
    data: {
        searchQuery: '',
        gridColumns: ['id', 'symbol', 'name', 'exchange']
    }
});

new Vue({
    el: '#form',
    data: {
        symbol: '',
        extension: ''
    }
});

new Vue({
    el: 'body',

    components: { Graph }
});

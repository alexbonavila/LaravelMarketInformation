import Chart from 'chart.js';

export default {
    template: '<canvas width="600" height="400"></canvas>',

    props: {
        labels: {},
        values: {},
        symbol: {},
        color: {}
    },

    ready() {

        var data1 = {
            labels: this.labels,

            datasets: [
                {
                    fillColor: this.color,
                    data: this.values,
                    label: this.symbol
                }
            ]
        };

        new Chart( this.$el.getContext('2d'), { type: "line", data: data1});

    }
}

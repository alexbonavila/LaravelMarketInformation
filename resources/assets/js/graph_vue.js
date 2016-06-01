var data = {
    labels: ['January', 'February', 'March'],

    datasets: [
        {
            data: [30, 122, 90]
        },
        {
            data: [10, 52, 2]
        }
    ]
};

var context = document.querySelector('#graph').getContext('2d');

new Chart(context).Line(data);
$(function () {

    //start line chart
    var lineChartData = {
        labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
        datasets: [
            {
                fill:true,
                pointBackgroundColor:"rgba(79,193,233,0.5)",
                pointBorderColor:"#fff",
                borderJoinStyle: 'miter',
                pointBorderWidth:"1",
                label:"data1",
                data: [30, 48, 35, 24, 35, 27, 50, 40, 60, 35, 46, 30],               
                backgroundColor:"rgba(79,193,233,0.5)"
            },
            {
                fill:true,
                pointBackgroundColor:"rgba(253,152,131,0.5)",
                pointBorderColor:"#fff",
                borderJoinStyle: 'miter',
                pointBorderWidth:"1",
                pointStrokeColor: "#fff",
                label:"data2",
                data: [130, 63, 103, 51, 93, 55, 80, 140, 100, 92, 108, 110],
                backgroundColor:"rgba(253,152,131,0.5)"
            }
        ]

    };

    function draw() {

        var selector = '#line-chart';

        $(selector).attr('width', $(selector).parent().width());
        var myLine = new Chart($("#line-chart"), {
            type: 'line',
            data: lineChartData,
            options: {
                title: {
                    display: false,
                    text: 'Line Chart'
                }
            }
        });
    }

    $(window).resize(draw);
    draw();
    //endline chart

    //start bar chart
    var barChartData = {
        labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
        datasets: [
            {
                label:"data1",
                backgroundColor: "#48CFAD",
                hoverBackgroundColor: "#48CFAD",
                data: [65, 59, 90, 81, 56, 55, 40, 30, 50, 20, 80, 99]
            },
            {
                label:"data2",
                backgroundColor: "#FFCE54",
                hoverBackgroundColor: "#FFCE54",
                data: [28, 48, 40, 19, 96, 27, 40, 60, 30, 90, 50, 87]
            }
            ,
            {
                label:"data3",
                backgroundColor: "#FD9883",
                hoverBackgroundColor: "#FD9883",
                data: [30, 20, 100, 10, 80, 27, 50, 30, 60, 40, 80, 66, 90]
            }
        ]

    };

    function draw1() {

        var selector = '#bar-chart';

        $(selector).attr('width', $(selector).parent().width());
        var myBar = new Chart($("#bar-chart"), {
            type: 'bar',
            data: barChartData
        });
    }

    $(window).resize(draw1);
    draw1();


    //end bar chart

    //start radar chart
    var radarChartData = {
        labels: ["Eating", "Drinking", "Sleeping", "Designing", "Coding", "Partying", "Running"],
        datasets: [
            {
                backgroundColor: "rgba(160,212,104,0.5)",
                hoverBackgroundColor: "rgba(160,212,104,0.5)",
                pointBackgroundColor: "rgba(160,212,104,0.5)",
                pointHoverBackgroundColor: "#fff",
                data: [65, 59, 90, 81, 56, 55, 40],
                label: 'data1'
            },
            {
                backgroundColor: "rgba(255,206,84,0.5)",
                hoverBackgroundColor: "rgba(255,206,84,0.5)",
                pointBackgroundColor: "rgba(255,206,84,0.5)",
                pointHoverBackgroundColor: "#fff",
                data: [28, 48, 40, 19, 96, 27, 100],
                label: 'data2'
            }
        ]

    };

    function draw2() {

        var selector = '#radar-chart';

        $(selector).attr('width', $(selector).parent().width());
        var myRadar = new Chart($("#radar-chart"),
            {
                type: 'radar',
                data: radarChartData
            });
    }

    $(window).resize(draw2);
    draw2();

    //end  radar chart

    //start polar area chart



    var chartData = {
        datasets: [{
            data: [
                15,
                18,
                10,
                8,
                16
            ],
            backgroundColor: [
                "#48CFAD",
                "#FFCE54",
                "#4FC1E9",
                "#FD9883",
                "#A0D468"
            ],
            label: 'My dataset' // for legend
        }],
        labels: [
            "data1",
            "data2",
            "data3",
            "data4",
            "data5"
        ]
    };
    

    function draw3() {

        var selector = '#polar-area-chart';

        $(selector).attr('width', $(selector).parent().width());
        var myPolarArea = new Chart($("#polar-area-chart"), {
            data: chartData,
            type: 'polarArea'
        });
    }

    $(window).resize(draw3);
    draw3();

    //end polar area chart

    //start pie chart
    var pieData = {
        labels: [
            "Red",
            "Green",
            "Yellow"
        ],
        datasets: [
            {
                data: [300, 50, 100],
                backgroundColor: [
                    "#FD9883",
                    "#48CFAD",
                    "#FFCE56"
                ],
                hoverBackgroundColor: [
                    "#FD9883",
                    "#48CFAD",
                    "#FFCE56"
                ]
            }]
    };

    function draw4() {

        var selector = '#pie-chart';

        $(selector).attr('width', $(selector).parent().width());
        var myPie = new Chart($("#pie-chart"), {
            type: 'pie',
            data: pieData
        });
    }

    $(window).resize(draw4);
    draw4();

    //end pie chart

    //start doughnut chart
    var doughnutData = {

        labels: [
            "Red",
            "Green",
            "Yellow"
        ],
        datasets: [
            {
                data: [300, 50, 100],
                backgroundColor: [
                    "#FD9883",
                    "#48CFAD",
                    "#FFCE56"
                ],
                hoverBackgroundColor: [
                    "#FD9883",
                    "#48CFAD",
                    "#FFCE56"
                ]
            }]

    };

    function draw5() {

        var selector = '#doughnut-chart';

        $(selector).attr('width', $(selector).parent().width());
        var myDoughnut = new Chart($("#doughnut-chart"),
            {
                type: 'doughnut',
                data: doughnutData
            });
    }

    $(window).resize(draw5);
    draw5();


    //end doughnut chart

});

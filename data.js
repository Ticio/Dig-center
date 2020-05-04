$(document).ready( function() {

    $("#search2").change(function(){
        var value = $(this).chosen().val();

        if($('.chosen-container').length > 1){
            $('.chosen-container').eq(1).remove();  
        }

        if(value.length > 1){
            multipleCountry(value);
        }else{
            singleCountry(value[0]);
        }
    });

    function singleCountry(country){
        demographic_info(country);
        financial_info(country);
        digital_info(country);
    }

    function multipleCountry(value){
        demographic_info_multi(value);
        financial_info_multi(value);
        digital_info_multi(value);
    }

    function demographic_info_multi(value){
        var dataCountry = [];

        $.each(value, function(index, val) {
            dataCountry.push($.parseJSON($.ajax({
                url: 'https://api.worldbank.org/v2/countries/'+val+'/indicators/SP.POP.TOTL?format=json&date=2010:2018',
                dataType: "json", 
                async: false
            }).responseText)[1]);
        });

        $("#pop").empty();
        $("#pop").append('<canvas></canvas>');

        drawGraphCompare($("#pop canvas"), dataCountry, "bar", "Population");


        ////////////////////////////////////////////////////////////////////////////////////////////////////////////////
        dataCountry = [];

        $.each(value, function(index, val) {
            dataCountry.push($.parseJSON($.ajax({
                url: 'https://api.worldbank.org/v2/countries/'+val+'/indicators/EN.POP.DNST?format=json&date=2010:2018',
                dataType: "json", 
                async: false
            }).responseText)[1]);
        });

        $("#pop-d").empty();
        $("#pop-d").append('<canvas></canvas>');

        drawGraphCompare($("#pop-d canvas"), dataCountry, "bar", "Population"); 

        ////////////////////////////////////////////////////////////////////////////////////////////////////////////////
        dataCountry = [];

        $.each(value, function(index, val) {
            dataCountry.push($.parseJSON($.ajax({
                url: 'https://api.worldbank.org/v2/countries/'+val+'/indicators/EN.POP.DNST?format=json&date=2010:2018',
                dataType: "json", 
                async: false
            }).responseText)[1]);
        });

        $("#pop-r").empty();
        $("#pop-r").append('<canvas></canvas>');

        drawGraphCompare($("#pop-r canvas"), dataCountry, "bar", "Population"); 
    }

    function financial_info_multi(value){
        var dataCountry = [];

        ////////////////////////////////////////////////////////////////////////////////////////////////////////////////
        dataCountry = [];

        $.each(value, function(index, val) {
            dataCountry.push($.parseJSON($.ajax({
                url: 'https://api.worldbank.org/v2/countries/'+val+'/indicators/NY.GDP.DEFL.KD.ZG?format=json&date=2010:2018',
                dataType: "json", 
                async: false
            }).responseText)[1]);
        });

        $("#gdp").empty();
        $("#gdp").append('<canvas></canvas>');

        drawGraphCompare($("#gdp canvas"), dataCountry, "bar", "Population");   

        ////////////////////////////////////////////////////////////////////////////////////////////////////////////////
        dataCountry = [];

        $.each(value, function(index, val) {
            dataCountry.push($.parseJSON($.ajax({
                url: 'https://api.worldbank.org/v2/countries/'+val+'/indicators/SP.RUR.TOTL?format=json&date=2010:2018',
                dataType: "json", 
                async: false
            }).responseText)[1]);
        });

        $("#gdp-d").empty();
        $("#gdp-d").append('<canvas></canvas>');

        drawGraphCompare($("#gdp-d canvas"), dataCountry, "bar", "Population");

        ////////////////////////////////////////////////////////////////////////////////////////////////////////////////
        dataCountry = [];

        $.each(value, function(index, val) {
            dataCountry.push($.parseJSON($.ajax({
                url: 'https://api.worldbank.org/v2/countries/'+val+'/indicators/NY.GNP.PCAP.CN?format=json&date=2010:2018',
                dataType: "json", 
                async: false
            }).responseText)[1]);
        });

        $("#gni").empty();
        $("#gni").append('<canvas></canvas>');

        drawGraphCompare($("#gni canvas"), dataCountry, "line", "Population");      
    }   

    function digital_info_multi(value){
        var dataCountry = [];
        
        ////////////////////////////////////////////////////////////////////////////////////////////////////////////////
        dataCountry = [];

        $.each(value, function(index, val) {
            dataCountry.push($.parseJSON($.ajax({
                url: 'https://api.worldbank.org/v2/countries/'+val+'/indicators/IT.NET.USER.ZS?format=json&date=2010:2018',
                dataType: "json", 
                async: false
            }).responseText)[1]);
        });

        $("#int-u").empty();
        $("#int-u").append('<canvas></canvas>');

        drawGraphCompare($("#int-u canvas"), dataCountry, "bar", "Population"); 

        ////////////////////////////////////////////////////////////////////////////////////////////////////////////////
        dataCountry = [];

        $.each(value, function(index, val) {
            dataCountry.push($.parseJSON($.ajax({
                url: 'https://api.worldbank.org/v2/countries/'+val+'/indicators/SP.RUR.TOTL?format=json&date=2010:2018',
                dataType: "json", 
                async: false
            }).responseText)[1]);
        });

        $("#sub").empty();
        $("#sub").append('<canvas></canvas>');

        drawGraphCompare($("#sub canvas"), dataCountry, "bar", "Population");

        ////////////////////////////////////////////////////////////////////////////////////////////////////////////////
        dataCountry = [];

        $.each(value, function(index, val) {
            dataCountry.push($.parseJSON($.ajax({
                url: 'https://api.worldbank.org/v2/countries/'+val+'/indicators/NY.GNP.PCAP.CN?format=json&date=2010:2018',
                dataType: "json", 
                async: false
            }).responseText)[1]);
        });

        $("#pc").empty();
        $("#pc").append('<canvas></canvas>');

        drawGraphCompare($("#pc canvas"), dataCountry, "line", "Population");

        ////////////////////////////////////////////////////////////////////////////////////////////////////////////////
        dataCountry = [];

        $.each(value, function(index, val) {
            dataCountry.push($.parseJSON($.ajax({
                url: 'https://api.worldbank.org/v2/countries/'+val+'/indicators/NY.GNP.PCAP.CN?format=json&date=2010:2018',
                dataType: "json", 
                async: false
            }).responseText)[1]);
        });

        $("#serv").empty();
        $("#serv").append('<canvas></canvas>');

        drawGraphCompare($("#serv canvas"), dataCountry, "line", "Population");

        ////////////////////////////////////////////////////////////////////////////////////////////////////////////////
        dataCountry = [];

        $.each(value, function(index, val) {
            dataCountry.push($.parseJSON($.ajax({
                url: 'https://api.worldbank.org/v2/countries/'+val+'/indicators/NY.GNP.PCAP.CN?format=json&date=2010:2018',
                dataType: "json", 
                async: false
            }).responseText)[1]);
        });

        $("#brd").empty();
        $("#brd").append('<canvas></canvas>');

        drawGraphCompare($("#brd canvas"), dataCountry, "line", "Population");

        ////////////////////////////////////////////////////////////////////////////////////////////////////////////////
        dataCountry = [];

        $.each(value, function(index, val) {
            dataCountry.push($.parseJSON($.ajax({
                url: 'https://api.worldbank.org/v2/countries/'+val+'/indicators/NY.GNP.PCAP.CN?format=json&date=2010:2018',
                dataType: "json", 
                async: false
            }).responseText)[1]);
        });

        $("#mob").empty();
        $("#mob").append('<canvas></canvas>');

        drawGraphCompare($("#mob canvas"), dataCountry, "line", "Population");  
    }

    function demographic_info(country){
        $("#pop").empty();
        $("#pop").append('<canvas></canvas>');
        
        $("#pop-d").empty();
        $("#pop-d").append('<canvas></canvas>');

        $("#pop-r").empty();
        $("#pop-r").append('<canvas></canvas>');

        $('#demographics').fadeIn();

        //Fetching population information
        $.get('https://api.worldbank.org/v2/countries/'+country+'/indicators/SP.POP.TOTL?format=json&date=2010:2018', function(data) {
            /*optional stuff to do after success */
        }).done(function(data){
            drawGraph($("#pop canvas"), data, "bar", "Population", "#4D82BD");
        });

        $.get('https://api.worldbank.org/v2/countries/'+country+'/indicators/EN.POP.DNST?format=json&date=2010:2018', function(data) {
            /*optional stuff to do after success */
        }).done(function(data){
            drawGraph($("#pop-d canvas"), data, "bar", "Population density", "#F2C94C");
        });

        $.get('https://api.worldbank.org/v2/countries/'+country+'/indicators/SP.RUR.TOTL?format=json&date=2010:2018', function(data) {
            /*optional stuff to do after success */
        }).done(function(data){
            drawGraph($("#pop-r canvas"), data, "bar", "Rural Population", "#F2994A");
        });
    }

    function financial_info(country){
        $("#gdp").empty();
        $("#gdp").append('<canvas></canvas>');

        $("#gdp-d").empty();
        $("#gdp-d").append('<canvas></canvas>');
        
        $("#gni").empty();
        $("#gni").append('<canvas></canvas>');

        $('#financial').fadeIn();

        //Fetching financial information
        $.get('https://api.worldbank.org/v2/countries/'+country+'/indicators/NY.GDP.MKTP.CD?format=json&date=2010:2018', function(data) {
            /*optional stuff to do after success */
        }).done(function(data){
            drawGraph($("#gdp canvas"), data, "line", "GDP", "rgba(75,192,192, 0.4)");
        });

        $.get('https://api.worldbank.org/v2/countries/'+country+'/indicators/NY.GDP.DEFL.KD.ZG?format=json&date=2010:2018', function(data) {
            /*optional stuff to do after success */
        }).done(function(data){
            drawGraph($("#gdp-d canvas"), data, "line", "GDP Deflactor", "#F2C94C");
        });

        $.get('https://api.worldbank.org/v2/countries/'+country+'/indicators/NY.GNP.PCAP.CN?format=json&date=2010:2018', function(data) {
            /*optional stuff to do after success */
        }).done(function(data){
            drawGraph($("#gni canvas"), data, "line", "GNI per Capita", "#F2994A");
        });
    }

    function digital_info(country){
        $("#int-u").empty();
        $("#int-u").append('<canvas></canvas>');

        $("#sub").empty();
        $("#sub").append('<canvas></canvas>');
        
        $("#pc").empty();
        $("#pc").append('<canvas></canvas>');

        $("#serv").empty();
        $("#serv").append('<canvas></canvas>');

        $("#brd").empty();
        $("#brd").append('<canvas></canvas>');

        $("#mob").empty();
        $("#mob").append('<canvas></canvas>');

        $('#digital').fadeIn();

        //Fetching Digital information
        $.get('https://api.worldbank.org/v2/countries/'+country+'/indicators/IT.NET.USER.ZS?format=json&date=2010:2018', function(data) {
            /*optional stuff to do after success */
        }).done(function(data){
            drawGraph($("#int-u canvas"), data, "bar", "Individuals using the internet", "rgba(75,192,192, 0.4)");
        });

        $.get('https://api.worldbank.org/v2/countries/'+country+'/indicators/IT.CEL.SETS?format=json&date=2010:2018', function(data) {
            /*optional stuff to do after success */
        }).done(function(data){
            drawGraph($("#sub canvas"), data, "line", "Mobile cellular subscriptions", "#F2C94C");
        });

        $.get('https://api.worldbank.org/v2/countries/'+country+'/indicators/NY.GNP.PCAP.CN?format=json&date=2010:2018', function(data) {
            /*optional stuff to do after success */
        }).done(function(data){
            drawGraph($("#pc canvas"), data, "line", "Personal Computers", "#F2994A");
        });

        $.get('https://api.worldbank.org/v2/countries/'+country+'/indicators/IT.NET.SECR?format=json&date=2010:2018', function(data) {
            /*optional stuff to do after success */
        }).done(function(data){
            drawGraph($("#serv canvas"), data, "line", "Secure Internet Servers", "rgba(75,192,192, 0.4)");
        });

        $.get('https://api.worldbank.org/v2/countries/'+country+'/indicators/IT.NET.BBND?format=json&date=2010:2018', function(data) {
            /*optional stuff to do after success */
        }).done(function(data){
            drawGraph($("#brd canvas"), data, "line", "Fixed broadband subscriptions", "#F2C94C");
        });

        $.get('https://api.worldbank.org/v2/countries/'+country+'/indicators/IT.CEL.SETS?format=json&date=2010:2018', function(data) {
            /*optional stuff to do after success */
        }).done(function(data){
            drawGraph($("#mob canvas"), data, "line", "Mobile cellular subscriptions", "#F2994A");
        });
    }

    function drawGraph(element,data, chartType, chartLabel, pointBorderColor){
        var gdp = [], date = [];
        
        for(var i=data[1].length-1; i >= 0 ; --i){
            if(data[1][i].value != null){
                gdp.push(data[1][i].value);
                date.push(data[1][i].date);
            }
        }
          
        let lineChart =  new Chart(element, {
            type: chartType,
            data:{
                labels: date,
                datasets: [
                    {
                        label: chartLabel,
                        fill: false,
                        lineTension: 0.1,
                        backgroundColor: pointBorderColor,
                        borderColor: pointBorderColor,
                        borderCapStyle: 'butt',
                        borderDash: [],
                        borderDashOffset: 0.0,
                        borderJoinStyle: 'miter',
                        pointBorderColor: pointBorderColor,
                        pointBackgroundColor: "#fff",
                        pointBorderWidth: 5,
                        pointHoverRadius: 1,
                        pointRadius: 1,
                        pointHitRadius: 10,
                        data: gdp,
                    }
                ]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks:{
                            fontSize: 10,
                            callback: function(label, index, labels) {
                                return label/1000000+'m';
                            }
                        },
                        scaleLabel: {
                            display: true,
                            labelString: '1m = 1000000',
                            fontSize: 10,
                        }
                    }]
                }
            }
        });

        return lineChart;
    }

    function drawGraphCompare(element,data, chartType, chartLabel){
        var gdp = [[],[],[]], date = [], name = [];

        for(var i=0; i < data.length ; ++i){
            
            if(!gdp[i]){
                gdp[i] = [];
            }

            name.push(data[i][0].country.value);

            for(var j=data[0].length-1; j >= 0 ; --j){
                if(data[i][j].value != null){
                    gdp[i].push(data[i][j].value);

                    if(i == 0){
                        date.push(data[i][j].date);
                    }
                }
            }
        }

        var dataset = [];

        for(var i=0; i < data.length ; ++i){
            var color = '#'+(Math.random()*0xFFFFFF<<0).toString(16);

            dataset.push({
                    label: name[i],
                    fill: false,
                    lineTension: 0.1,
                    backgroundColor: color,
                    borderColor: color,
                    borderCapStyle: 'butt',
                    borderDash: [],
                    borderDashOffset: 0.0,
                    borderJoinStyle: 'miter',
                    pointBorderColor: color,
                    pointBackgroundColor: "#fff",
                    pointBorderWidth: 5,
                    pointHoverRadius: 1,
                    pointRadius: 1,
                    pointHitRadius: 10,
                    data: gdp[i],
                }
            );
        }

        let lineChart =  new Chart(element, {
            type: chartType,
            data:{
                labels: date,
                datasets: dataset
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks:{
                            fontSize: 10,
                            callback: function(label, index, labels) {
                                return label/1000000+'m';
                            }
                        },
                        scaleLabel: {
                            display: true,
                            labelString: '1m = 1000000',
                            fontSize: 10,
                        }
                    }]
                }
            }
        });
    }
});
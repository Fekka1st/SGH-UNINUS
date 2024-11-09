@extends('welcome')


@section('content')
    <section class="hero-area">
        <div class="container">
            <div class="row align-items-center">
                <div class="brand_color">
                    <h2 style="color: white;">
                        <b>Smart Hydroponic</b>
                    </h2>
                </div>
            </div>
        </div>
    </section>

    <script nonce="undefined" src="https://cdn.zingchart.com/zingchart.min.js"></script>
    <section id="overview" class="app-info section" style="padding-top:50px;padding-bottom:50px">

        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-4 col-md-6 mb-4">
                    <div class="card border-left-primary shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                        Water PH
                                    </div>
                                    <div>
                                        10 PH
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-tint"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-md-6 mb-4">
                    <div class="card border-left-primary shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                        Nutrition
                                    </div>
                                    <div>
                                        1000 PPM
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <i class="fab fa-nutritionix"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-md-6 mb-4">
                    <div class="card border-left-primary shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                        Water Temperature
                                    </div>
                                    <div>
                                        30 %
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-thermometer-full"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-md-6 mb-4">
                    <div class="card border-left-primary shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                        Water Level
                                    </div>
                                    <div>
                                        100 cm
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-water"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-md-6 mb-4">
                    <div class="card border-left-primary shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                        Relative Humidity
                                    </div>
                                    <div>
                                        50 %
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-wind"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-md-6 mb-4">
                    <div class="card border-left-primary shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                        Room Panel Temp.
                                    </div>
                                    <div>
                                        30 °C
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-laptop-house"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4">
                    <div class="card shadow mb-4">
                        <!-- Card Header - Dropdown -->
                        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                            <h6 class="m-0 font-weight-bold text-primary">Water PH</h6>
                        </div>
                        <!-- Card Body -->
                        <div class="card-body">
                            <div class="chart-area">
                                <div class="col-12"></div>
                                <div id='waterph'></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4">
                    <div class="card shadow mb-4">
                        <!-- Card Header - Dropdown -->
                        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                            <h6 class="m-0 font-weight-bold text-primary">Nutrition</h6>
                        </div>
                        <!-- Card Body -->
                        <div class="card-body">
                            <div class="chart-area">
                                <div class="col-12"></div>
                                <div id='nutrition'></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4">
                    <div class="card shadow mb-4">
                        <!-- Card Header - Dropdown -->
                        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                            <h6 class="m-0 font-weight-bold text-primary">Water Temperature</h6>
                        </div>
                        <!-- Card Body -->
                        <div class="card-body">
                            <div class="chart-area">
                                <div class="col-12"></div>
                                <div id='watertemperature'></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4">
                    <div class="card shadow mb-4">
                        <!-- Card Header - Dropdown -->
                        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                            <h6 class="m-0 font-weight-bold text-primary">Water Level</h6>
                        </div>
                        <!-- Card Body -->
                        <div class="card-body">
                            <div class="chart-area">
                                <div class="col-12"></div>
                                <div id='waterlevel'></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4">
                    <div class="card shadow mb-4">
                        <!-- Card Header - Dropdown -->
                        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                            <h6 class="m-0 font-weight-bold text-primary">Relative Humidity</h6>
                        </div>
                        <!-- Card Body -->
                        <div class="card-body">
                            <div class="chart-area">
                                <div class="col-12"></div>
                                <div id='relativehumidity'></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4">
                    <div class="card shadow mb-4">
                        <!-- Card Header - Dropdown -->
                        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                            <h6 class="m-0 font-weight-bold text-primary">Room Panel Temp.</h6>
                        </div>
                        <!-- Card Body -->
                        <div class="card-body">
                            <div class="chart-area">
                                <div class="col-12"></div>
                                <div id='roompanel'></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('css')
    <style>
        {
            height: 100%;
            width: 100%;
        }

        #myChart {
            height: 100%;
            width: 100%;
            min-height: 100px;
        }

        .zc-ref {
            display: none;
        }
    </style>
@endsection

@section('script')
    <script>
        ZC.LICENSE = ["569d52cefae586f634c54f86dc99e6a9", "b55b025e438fa8a98e32482b5f768ff5"];
        window.feed = function(callback) {
            var tick = {};
            tick.plot0 = Math.ceil(0 + (Math.random() * 100));
            callback(JSON.stringify(tick));
        };

        var mywaterph = {
            type: "gauge",
            globals: {
                fontSize: 21
            },
            plotarea: {
                marginTop: 120
            },
            plot: {
                size: '100%',
                valueBox: {
                    placement: 'center',
                    text: '%v', //default
                    fontSize: 25,
                }
            },
            tooltip: {
                borderRadius: 3,
            },
            scaleR: {
                aperture: 180,
                minValue: 0,
                maxValue: 100,
                step: 50,
                center: {
                    visible: false
                },
                tick: {
                    visible: false
                },
                item: {
                    offsetR: 9,
                    rules: [{
                        rule: '%i == 9',
                        offsetX: 15
                    }]
                },
                labels: ['0 PH', '5 PH', '10 PH'],
                ring: {
                    size: 45,
                    rules: [{
                        rule: '%v <= 100',
                        backgroundColor: '#FF9D3D'
                    }]
                }
            },
            refresh: {
                type: "feed",
                transport: "js",
                url: "feed()",
                interval: 1500,
                resetTimeout: 1000
            },
            series: [{
                values: [50], // starting value
                backgroundColor: 'black',
                indicator: [10, 10, 10, 10, 0.75],
                animation: {
                    effect: 2,
                    method: 1,
                    sequence: 4,
                    speed: 1000
                },
            }]
        };

        zingchart.render({
            id: 'waterph',
            data: mywaterph,
            height: 450,
            width: '100%'
        });

        ZC.LICENSE = ["569d52cefae586f634c54f86dc99e6a9", "b55b025e438fa8a98e32482b5f768ff5"];
        window.feed = function(callback) {
            var tick = {};
            tick.plot0 = Math.ceil(0 + (Math.random() * 100));
            callback(JSON.stringify(tick));
        };

        var mynutrition = {
            type: "gauge",
            globals: {
                fontSize: 21
            },
            plotarea: {
                marginTop: 120
            },
            plot: {
                size: '100%',
                valueBox: {
                    placement: 'center',
                    text: '%v', //default
                    fontSize: 25,
                }
            },
            tooltip: {
                borderRadius: 3,
            },
            scaleR: {
                aperture: 180,
                minValue: 0,
                maxValue: 100,
                step: 50,
                center: {
                    visible: false
                },
                tick: {
                    visible: false
                },
                item: {
                    offsetR: 9,
                    rules: [{
                        rule: '%i == 9',
                        offsetX: 15
                    }]
                },
                labels: ['0 PPM', '500 PPM', '1000 PPM'],
                ring: {
                    size: 45,
                    rules: [{
                        rule: '%v <= 100',
                        backgroundColor: '#FF9D3D'
                    }]
                }
            },
            refresh: {
                type: "feed",
                transport: "js",
                url: "feed()",
                interval: 1500,
                resetTimeout: 1000
            },
            series: [{
                values: [50], // starting value
                backgroundColor: 'black',
                indicator: [10, 10, 10, 10, 0.75],
                animation: {
                    effect: 2,
                    method: 1,
                    sequence: 4,
                    speed: 1000
                },
            }]
        };

        zingchart.render({
            id: 'nutrition',
            data: mynutrition,
            height: 450,
            width: '100%'
        });

        ZC.LICENSE = ["569d52cefae586f634c54f86dc99e6a9", "b55b025e438fa8a98e32482b5f768ff5"];
        window.feed = function(callback) {
            var tick = {};
            tick.plot0 = Math.ceil(0 + (Math.random() * 100));
            callback(JSON.stringify(tick));
        };

        var mywatertemperature = {
            type: "gauge",
            globals: {
                fontSize: 21
            },
            plotarea: {
                marginTop: 120
            },
            plot: {
                size: '100%',
                valueBox: {
                    placement: 'center',
                    text: '%v', //default
                    fontSize: 25,
                }
            },
            tooltip: {
                borderRadius: 3,
            },
            scaleR: {
                aperture: 180,
                minValue: 0,
                maxValue: 100,
                step: 50,
                center: {
                    visible: false
                },
                tick: {
                    visible: false
                },
                item: {
                    offsetR: 9,
                    rules: [{
                        rule: '%i == 9',
                        offsetX: 15
                    }]
                },
                labels: ['0 %', '15 %', '30 %'],
                ring: {
                    size: 45,
                    rules: [{
                        rule: '%v <= 100',
                        backgroundColor: '#FF9D3D'
                    }]
                }
            },
            refresh: {
                type: "feed",
                transport: "js",
                url: "feed()",
                interval: 1500,
                resetTimeout: 1000
            },
            series: [{
                values: [50], // starting value
                backgroundColor: 'black',
                indicator: [10, 10, 10, 10, 0.75],
                animation: {
                    effect: 2,
                    method: 1,
                    sequence: 4,
                    speed: 1000
                },
            }]
        };

        zingchart.render({
            id: 'watertemperature',
            data: mywatertemperature,
            height: 450,
            width: '100%'
        });

        ZC.LICENSE = ["569d52cefae586f634c54f86dc99e6a9", "b55b025e438fa8a98e32482b5f768ff5"];
        window.feed = function(callback) {
            var tick = {};
            tick.plot0 = Math.ceil(0 + (Math.random() * 100));
            callback(JSON.stringify(tick));
        };

        var mywaterlevel = {
            type: "gauge",
            globals: {
                fontSize: 21
            },
            plotarea: {
                marginTop: 120
            },
            plot: {
                size: '100%',
                valueBox: {
                    placement: 'center',
                    text: '%v', //default
                    fontSize: 25,
                }
            },
            tooltip: {
                borderRadius: 3,
            },
            scaleR: {
                aperture: 180,
                minValue: 0,
                maxValue: 100,
                step: 50,
                center: {
                    visible: false
                },
                tick: {
                    visible: false
                },
                item: {
                    offsetR: 9,
                    rules: [{
                        rule: '%i == 9',
                        offsetX: 15
                    }]
                },
                labels: ['0 Cm', '50 Cm', '100 Cm'],
                ring: {
                    size: 45,
                    rules: [{
                        rule: '%v <= 100',
                        backgroundColor: '#FF9D3D'
                    }]
                }
            },
            refresh: {
                type: "feed",
                transport: "js",
                url: "feed()",
                interval: 1500,
                resetTimeout: 1000
            },
            series: [{
                values: [50], // starting value
                backgroundColor: 'black',
                indicator: [10, 10, 10, 10, 0.75],
                animation: {
                    effect: 2,
                    method: 1,
                    sequence: 4,
                    speed: 1000
                },
            }]
        };

        zingchart.render({
            id: 'waterlevel',
            data: mywaterlevel,
            height: 450,
            width: '100%'
        });

        ZC.LICENSE = ["569d52cefae586f634c54f86dc99e6a9", "b55b025e438fa8a98e32482b5f768ff5"];
        window.feed = function(callback) {
            var tick = {};
            tick.plot0 = Math.ceil(0 + (Math.random() * 100));
            callback(JSON.stringify(tick));
        };

        var myrelativehumidity = {
            type: "gauge",
            globals: {
                fontSize: 21
            },
            plotarea: {
                marginTop: 120
            },
            plot: {
                size: '100%',
                valueBox: {
                    placement: 'center',
                    text: '%v', //default
                    fontSize: 25,
                }
            },
            tooltip: {
                borderRadius: 3,
            },
            scaleR: {
                aperture: 180,
                minValue: 0,
                maxValue: 100,
                step: 50,
                center: {
                    visible: false
                },
                tick: {
                    visible: false
                },
                item: {
                    offsetR: 9,
                    rules: [{
                        rule: '%i == 9',
                        offsetX: 15
                    }]
                },
                labels: ['0°C', '25°C', '50°C'],
                ring: {
                    size: 45,
                    rules: [{
                        rule: '%v <= 100',
                        backgroundColor: '#FF9D3D'
                    }]
                }
            },
            refresh: {
                type: "feed",
                transport: "js",
                url: "feed()",
                interval: 1500,
                resetTimeout: 1000
            },
            series: [{
                values: [50], // starting value
                backgroundColor: 'black',
                indicator: [10, 10, 10, 10, 0.75],
                animation: {
                    effect: 2,
                    method: 1,
                    sequence: 4,
                    speed: 1000
                },
            }]
        };

        zingchart.render({
            id: 'relativehumidity',
            data: myrelativehumidity,
            height: 450,
            width: '100%'   
          });

        ZC.LICENSE = ["569d52cefae586f634c54f86dc99e6a9", "b55b025e438fa8a98e32482b5f768ff5"];
        window.feed = function(callback) {
            var tick = {};
            tick.plot0 = Math.ceil(0 + (Math.random() * 100));
            callback(JSON.stringify(tick));
        };

        var myroompanel = {
            type: "gauge",
            globals: {
                fontSize: 21
            },
            plotarea: {
                marginTop: 120
            },
            plot: {
                size: '100%',
                valueBox: {
                    placement: 'center',
                    text: '%v', //default
                    fontSize: 25,
                }
            },
            tooltip: {
                borderRadius: 3,
            },
            scaleR: {
                aperture: 180,
                minValue: 0,
                maxValue: 100,
                step: 50,
                center: {
                    visible: false
                },
                tick: {
                    visible: false
                },
                item: {
                    offsetR: 9,
                    rules: [{
                        rule: '%i == 9',
                        offsetX: 15
                    }]
                },
                labels: ['0°C', '15°C', '30°C'],
                ring: {
                    size: 45,
                    rules: [{
                        rule: '%v <= 100',
                        backgroundColor: '#FF9D3D'
                    }]
                }
            },
            refresh: {
                type: "feed",
                transport: "js",
                url: "feed()",
                interval: 1500,
                resetTimeout: 1000
            },
            series: [{
                values: [50], // starting value
                backgroundColor: 'black',
                indicator: [10, 10, 10, 10, 0.75],
                animation: {
                    effect: 2,
                    method: 1,
                    sequence: 4,
                    speed: 1000
                },
            }]
        };

        zingchart.render({
            id: 'roompanel',
            data: myroompanel,
            height: 450,
            width: '100%'
        });
    </script>
@endsection

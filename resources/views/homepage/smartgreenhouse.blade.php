@extends('welcome')


@section('content')

<section class="hero-area background-section d-flex align-items-center justify-content-center text-white" style="background-image: url('https://img.freepik.com/free-photo/top-view-green-plants-growing-background_1353-281.jpg?t=st=1731055801~exp=1731059401~hmac=31c1e105e416a03dd1bd1f58006b846706d04af6b41383db4a68b7222dc9d17f&w=826') ">
    <div class="container" style="padding-top:65px;">
        <div class="row align-items-center">
            <div class="brand_color">
                <div>
                    <h2 style="color: white;">
                        <b>Smart Room GreenHouse</b>
                    </h2>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="overview" class="app-info section" style="padding-top:50px;padding-bottom:50px">
<div class="container-fluid">
<div class="row">

<div class="col-xl-4 col-md-6 mb-4">
    <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                        CO2
                    </div>
                        <div>
                            1000 PPM
                        </div>
                </div>
                <div class="col-auto">

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
                        Light Intensity
                    </div>
                        <div>
                            1000 LX
                        </div>
                </div>
                <div class="col-auto">

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
                        Water Volume
                    </div>
                        <div>
                            30M/3
                        </div>
                </div>
                <div class="col-auto">

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
                        Temp Average
                    </div>
                        <div>
                            20°C
                        </div>
                </div>
                <div class="col-auto">
                
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
                        Room Panel Temp
                    </div>
                        <div>
                            20°C
                        </div>
                </div>
                <div class="col-auto">

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
                        Average RH
                    </div>
                        <div>
                            40%
                        </div>
                </div>
                <div class="col-auto">

                </div>
            </div>
        </div>
    </div>
</div>

<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-4">
    <div class="card shadow mb-4">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">CO2</h6>
            </div>
            <div class="card-body">
                <div class="chart-area">
                    <div class="col-12"></div>
                <div id='co2Chart'></div>
            </div>
        </div>
    </div>
</div>
<div class="col-xl-4">
    <div class="card shadow mb-4">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Light Intensity</h6>
            </div>
            <div class="card-body">
                <div class="chart-area">
                    <div class="col-12"></div>
                <div id='cahayaChart'></div>
            </div>
        </div>
    </div>
</div>
<div class="col-xl-4">
    <div class="card shadow mb-4">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Water Volume</h6>
            </div>
            <div class="card-body">
                <div class="chart-area">
                    <div class="col-12"></div>
                <div id='airChart'></div>
            </div>
        </div>
    </div>
</div>
<div class="col-xl-4">
    <div class="card shadow mb-4">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Temp Average</h6>
            </div>
            <div class="card-body">
                <div class="chart-area">
                    <div class="col-12"></div>
                <div id='myChart'></div>
            </div>
        </div>
    </div>
</div>
<div class="col-xl-4">
    <div class="card shadow mb-4">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Room Panel Temp</h6>
            </div>
            <div class="card-body">
                <div class="chart-area">
                    <div class="col-12"></div>
                <div id='panelChart'></div>
            </div>
        </div>
    </div>
</div>
<div class="col-xl-4">
    <div class="card shadow mb-4">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">RH Average</h6>
            </div>
            <div class="card-body">
                <div class="chart-area">
                    <div class="col-12"></div>
                <div id='kelembabanChart'></div>
            </div>
        </div>
    </div>
</div>

    <div class="col-xl-6 col-md-6 mb-6">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2 text-center"> <!-- Tambahkan class text-center -->
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                            Temperature Sensor
                        </div>
                        <div>
                            <div>
                                <h5>Temp 1 : 29°C</h5>
                            </div>
                            <div>
                                <h5>Temp 2 : 28°C</h5>
                            </div>
                            <div>
                                <h5>Temp 3 : 29°C</h5>
                            </div>
                            <div>
                                <h5>Temp 4 : 28°C</h5>
                            </div>
                            <div>
                                <h5>Temp 5 : 28°C</h5>
                            </div>
                            <div>
                                <h5>Temp 6 : 29°C</h5>
                            </div>
                            <div>
                                <h5>Temp 7 : 28°C</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-thermometer-full"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xl-6 col-md-6 mb-6">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2 text-center"> <!-- Tambahkan class text-center -->
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                            Humidity Sensor
                        </div>
                            <div>
                                <h5>Humidity 1 : 50%</h5>
                            </div>    
                            <div>
                                <h5>Humidity 2 : 50%</h5>
                            </div>
                            <div>
                                <h5>Humidity 3 : 50%</h5>
                            </div>
                            <div>
                                <h5>Humidity 4 : 50%</h5>
                            </div>
                            <div>
                                <h5>Humidity 5 : 50%</h5>
                            </div>
                            <div>
                                <h5>Humidity 6 : 50%</h5>
                            </div>
                            <div>
                                <h5>Humidity 7 : 50%</h5>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-tint"></i>
                        </div>
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
    .background-section {
            background-image: url('URL_GAMBAR_ANDA');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            }
</style>
@endsection

@section('script')
<script nonce="undefined" src="https://cdn.zingchart.com/zingchart.min.js"></script>
<script>
    ZC.LICENSE = ["569d52cefae586f634c54f86dc99e6a9", "b55b025e438fa8a98e32482b5f768ff5"];
    window.feed = function(callback) {
      var tick = {};
      tick.plot0 = Math.ceil(0 + (Math.random() * 100));
      callback(JSON.stringify(tick));
    };
    var myConfig = {
      type: "gauge",
      globals: {
        fontSize: 20
      },
      plotarea: {
        marginTop: 130
      },
      plot: {
        size: '100%',
        valueBox: {
          placement: 'center',
          text: '%v °C', //default
          fontSize: 24,
          
          
        }
      },
      tooltip: {
        borderRadius: 5,
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
          offsetR: 0,
          rules: [{
            rule: '%i == 9',
            offsetX: 15
          }]
        },
        labels: ['0', '25', '50'],
        ring: {
          size: 50,
          rules: [{
          rule: '%v <= 100',
          backgroundColor: '#FF6500'
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
        indicator: [10, 10, 10, 10, 0.65],
        animation: {
          effect: 2,
          method: 1,
          sequence: 4,
          speed: 1000
        },
      }]
    };
    var kelembabanConfig = {
      type: "gauge",
      globals: {
        fontSize: 20
      },
      plotarea: {
        marginTop: 130
      },
      plot: {
        size: '100%',
        valueBox: {
          placement: 'center',
          text: '%v %', //default
          fontSize: 24,
          
          
        }
      },
      tooltip: {
        borderRadius: 5,
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
          offsetR: 0,
          rules: [{
            rule: '%i == 9',
            offsetX: 15
          }]
        },
        labels: ['0', '50', '100'],
        ring: {
          size: 50,
          rules: [{
          rule: '%v <= 100',
          backgroundColor: '#FF6500'
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
        indicator: [10, 10, 10, 10, 0.65],
        animation: {
          effect: 2,
          method: 1,
          sequence: 4,
          speed: 1000
        },
      }]
    };
    var co2Config = {
      type: "gauge",
      globals: {
        fontSize: 20
      },
      plotarea: {
        marginTop: 130
      },
      plot: {
        size: '100%',
        valueBox: {
          placement: 'center',
          text: '%v PPM', //default
          fontSize: 24,
          
          
        }
      },
      tooltip: {
        borderRadius: 5,
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
          offsetR: 0,
          rules: [{
            rule: '%i == 9',
            offsetX: 15
          }]
        },
        labels: ['0', '500', '1000'],
        ring: {
          size: 50,
          rules: [{
          rule: '%v <= 100',
          backgroundColor: '#FF6500'
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
        indicator: [10, 10, 10, 10, 0.65],
        animation: {
          effect: 2,
          method: 1,
          sequence: 4,
          speed: 1000
        },
      }]
    };
    var airConfig = {
      type: "gauge",
      globals: {
        fontSize: 20
      },
      plotarea: {
        marginTop: 130
      },
      plot: {
        size: '100%',
        valueBox: {
          placement: 'center',
          text: '%v M/3', //default
          fontSize: 24,
          
          
        }
      },
      tooltip: {
        borderRadius: 5,
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
          offsetR: 0,
          rules: [{
            rule: '%i == 9',
            offsetX: 15
          }]
        },
        labels: ['0', '750', '1500'],
        ring: {
          size: 50,
          rules: [{
          rule: '%v <= 100',
          backgroundColor: '#FF6500'
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
        indicator: [10, 10, 10, 10, 0.65],
        animation: {
          effect: 2,
          method: 1,
          sequence: 4,
          speed: 1000
        },
      }]
    };
    var cahayaConfig = {
      type: "gauge",
      globals: {
        fontSize: 20
      },
      plotarea: {
        marginTop: 130
      },
      plot: {
        size: '100%',
        valueBox: {
          placement: 'center',
          text: '%v LX', //default
          fontSize: 24,
          
          
        }
      },
      tooltip: {
        borderRadius: 5,
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
          offsetR: 0,
          rules: [{
            rule: '%i == 9',
            offsetX: 15
          }]
        },
        labels: ['0', '2000', '4000'],
        ring: {
          size: 50,
          rules: [{
          rule: '%v <= 100',
          backgroundColor: '#FF6500'
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
        indicator: [10, 10, 10, 10, 0.65],
        animation: {
          effect: 2,
          method: 1,
          sequence: 4,
          speed: 1000
        },
      }]
    };
    var panelConfig = {
      type: "gauge",
      globals: {
        fontSize: 20
      },
      plotarea: {
        marginTop: 130
      },
      plot: {
        size: '100%',
        valueBox: {
          placement: 'center',
          text: '%v °C', //default
          fontSize: 24,
          
          
        }
      },
      tooltip: {
        borderRadius: 5,
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
          offsetR: 0,
          rules: [{
            rule: '%i == 9',
            offsetX: 15
          }]
        },
        labels: ['0', '25', '50'],
        ring: {
          size: 50,
          rules: [{
          rule: '%v <= 100',
          backgroundColor: '#FF6500'
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
        indicator: [10, 10, 10, 10, 0.65],
        animation: {
          effect: 2,
          method: 1,
          sequence: 4,
          speed: 1000
        },
      }]
    };
 
    zingchart.render({
      id: 'myChart',
      data: myConfig,
      height: 400,
      width: '100%'
    });
    zingchart.render({
      id: 'kelembabanChart',
      data: kelembabanConfig,
      height: 400,
      width: '100%'
    });
    zingchart.render({
      id: 'airChart',
      data: airConfig,
      height: 400,
      width: '100%'
    });
    zingchart.render({
      id: 'co2Chart',
      data: co2Config,
      height: 400,
      width: '100%'
    });
    zingchart.render({
      id: 'cahayaChart',
      data: cahayaConfig,
      height: 400,
      width: '100%'
    });
    zingchart.render({
      id: 'panelChart',
      data: panelConfig,
      height: 400,
      width: '100%'
    });
</script>
@endsection

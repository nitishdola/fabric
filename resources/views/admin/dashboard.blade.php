@extends('admin.layouts.master')

@section('title', 'Admin Panel')

@section('content')
<!-- Statistics -->
<div class="row">
  <div class="col-lg-12">
    <div class="widget-container stats-container">
      <div class="col-md-3">
        <div class="number">
          <div class="icon globe"></div>
          86<small>%</small>
        </div>
        <div class="text">
          Overall growth
        </div>
      </div>
      <div class="col-md-3">
        <div class="number">
          <div class="icon visitors"></div>
          613
        </div>
        <div class="text">
          Unique visitors
        </div>
      </div>
      <div class="col-md-3">
        <div class="number">
          <div class="icon money"></div>
          <small>$</small>924
        </div>
        <div class="text">
          Sales
        </div>
      </div>
      <div class="col-md-3">
        <div class="number">
          <div class="icon chat-bubbles"></div>
          325
        </div>
        <div class="text">
          New followers
        </div>
      </div>
    </div>
  </div>
</div>
<!-- End Statistics -->
<div class="row">
  <!-- Weather -->
  <div class="col-md-8">
    <div class="widget-container weather">
      <div class="widget-content padded">
        <div class="row text-center">
          <div class="col-sm-6 col-md-6 col-lg-4 today">
            <p>
              TODAY
            </p>
            <canvas class="skycons-element" data-skycons="RAIN" height="100" id="rain" width="100"></canvas>
            <div class="number">
              72<small>&deg;</small>
            </div>
            <p class="location">
              Washington, D.C.
            </p>
          </div>
          <div class="col-sm-2 hidden-xs">
            <p>
              MON
            </p>
            <canvas class="skycons-element" data-skycons="CLEAR_DAY" height="60" id="clear-day" width="60"></canvas>
            <div class="number">
              86<small>&deg;</small>
            </div>
          </div>
          <div class="col-sm-2 hidden-xs">
            <p>
              TUE
            </p>
            <canvas class="skycons-element" data-skycons="RAIN" height="60" id="cloudy" width="60"></canvas>
            <div class="number">
              75<small>&deg;</small>
            </div>
          </div>
          <div class="col-sm-2 hidden-xs">
            <p>
              WED
            </p>
            <canvas class="skycons-element" data-skycons="PARTLY_CLOUDY_DAY" height="60" id="partly-cloudy-day" width="60"></canvas>
            <div class="number">
              82<small>&deg;</small>
            </div>
          </div>
          <div class="col-sm-2 hidden-md hidden-sm hidden-xs">
            <p>
              THU
            </p>
            <canvas class="skycons-element" data-skycons="SLEET" height="60" id="sleet" width="60"></canvas>
            <div class="number">
              64<small>&deg;</small>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- end Weather --><!-- Bar Graph -->
  <div class="col-md-4">
    <div class="widget-container small">
      <div class="heading">
        <i class="icon-signal"></i>New sign ups<i class="icon-list pull-right"></i><i class="icon-refresh pull-right"></i>
      </div>
      <div class="widget-content padded">
        <div class="bar-chart-widget">
          <div class="chart-graph">
            <div id="barcharts">
              Loading...
            </div>
            <ul class="chart-text-axis">
              <li>
                1
              </li>
              <li>
                2
              </li>
              <li>
                3
              </li>
              <li>
                4
              </li>
              <li>
                5
              </li>
              <li>
                6
              </li>
              <li>
                7
              </li>
              <li>
                8
              </li>
              <li>
                9
              </li>
              <li>
                10
              </li>
              <li>
                11
              </li>
              <li>
                12
              </li>
              <li>
                13
              </li>
              <li>
                14
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Bar Graph -->
</div>
<div class="row">
  <!-- Pie Graph 1 -->
  <div class="col-lg-5">
    <div class="widget-container fluid-height">
      <div class="heading">
        <i class="icon-bar-chart"></i>Donut Charts
      </div>
      <div class="widget-content clearfix">
        <div class="col-sm-6">
          <div class="pie-chart1 pie-chart pie-number" data-percent="87">
            87%
          </div>
        </div>
        <div class="col-sm-6">
          <div class="pie-chart2 pie-chart pie-number" data-percent="26">
            26%
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-7">
    <div class="widget-container fluid-height">
      <!-- Table -->
      <table class="table table-filters">
        <tbody>
          <tr>
            <td class="filter-category blue">
              <div class="arrow-left"></div>
              <i class="icon-stethoscope"></i>
            </td>
            <td>
              National Distribution Co.
            </td>
            <td>
              $9204
            </td>
            <td class="hidden-xs">
              <div class="sparkslim">
                50,55,60,40,30,35,30,20,25,30,40,20,15
              </div>
            </td>
            <td>
              <div class="danger">
                -4%
              </div>
            </td>
          </tr>
          <tr>
            <td class="filter-category green">
              <div class="arrow-left"></div>
              <i class="icon-coffee"></i>
            </td>
            <td>
              Star Organization Co.
            </td>
            <td>
              $23,890
            </td>
            <td class="hidden-xs">
              <div class="sparkslim">
                5,10,15,50,80,50,40,30,50,60,70,75,75
              </div>
            </td>
            <td>
              <div class="success">
                +12%
              </div>
            </td>
          </tr>
          <tr>
            <td class="filter-category orange">
              <div class="arrow-left"></div>
              <i class="icon-gamepad"></i>
            </td>
            <td>
              Companysoft, LLC
            </td>
            <td>
              $10,995
            </td>
            <td class="hidden-xs">
              <div class="sparkslim">
                100,100,80,70,40,20,20,40,50,60,70
              </div>
            </td>
            <td>
              <div class="success">
                +5%
              </div>
            </td>
          </tr>
          <tr>
            <td class="filter-category red">
              <div class="arrow-left"></div>
              <i class="icon-gift"></i>
            </td>
            <td>
              Craft Co.
            </td>
            <td>
              $6,790
            </td>
            <td class="hidden-xs">
              <div class="sparkslim">
                5,10,15,20,30,40,80,100,120,120,140
              </div>
            </td>
            <td>
              <div class="success">
                +26%
              </div>
            </td>
          </tr>
          <tr>
            <td class="filter-category blue">
              <div class="arrow-left"></div>
              <i class="icon-stethoscope"></i>
            </td>
            <td>
              National Distribution Co.
            </td>
            <td>
              $9204
            </td>
            <td class="hidden-xs">
              <div class="sparkslim">
                50,55,60,40,30,35,30,20,25,30,40,20,15
              </div>
            </td>
            <td>
              <div class="danger">
                -4%
              </div>
            </td>
          </tr>
          <tr>
            <td class="filter-category magenta">
              <div class="arrow-left"></div>
              <i class="icon-trophy"></i>
            </td>
            <td>
              Fastnation Co.
            </td>
            <td>
              $22,156
            </td>
            <td class="hidden-xs">
              <div class="sparkslim">
                20,40,50,60,70,80,90,95,100,80,70,60
              </div>
            </td>
            <td>
              <div class="danger">
                -4%
              </div>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
  <!-- End Pie Graph 1 -->
</div>
@endsection

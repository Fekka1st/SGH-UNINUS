<div class="container-fluid">
    <h1 class="h3 mb-2 text-gray-800">Report Smart Green House</h1>
    <div class="card shadow mb-4">
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">REPORT DATA</h6>
      </div>
      <div class="card-body" id="body">
        <div class="col-12" style="overflow-x:auto;">
          <table id="myTable" class="display">
            <thead>
              <tr>
                <th width=3%>No</th>
                <th width=15%>Temp</th>
                <th>Humidity</th>
                <th>Co2</th>
                <th>Intensity</th>
                <th>Water level</th>
                <th>Panel Box Temp</th>
                <th>Time</th>
              </tr>
            </thead>
            <tbody> @foreach ($data as $index => $nilai) <tr>
                <td>{{$index + 1}}</td>
                <td>{{ round($nilai->avg_temperature, 2) }}</td>
                <td>{{ round($nilai->avg_humidity, 2) }}</td>
                <td>{{ round($nilai->avg_co2, 2) }}</td>
                <td>{{ round($nilai->avg_light_intensity, 2) }}</td>
                <td>{{ round($nilai->avg_extend_water_level, 2) }}</td>
                <td>{{ round($nilai->avg_panel, 2) }}</td>
                <td>{{$nilai->hour_block}}</td>
              </tr> @endforeach </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>

<div class="container-fluid">
    <h1 class="h3 mb-2 text-gray-800">Report Smart Hydroponik</h1>
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
                <th width=15%>Ph Air</th>
                <th>Nutrisi </th>
                <th>Laju Air</th>
                <th>Volume Air</th>
                <th>Suhu Air</th>
                <th>Panel Temp</th>
                <th>Waktu</th>
              </tr>
            </thead>
            <tbody> @foreach ($data as $index => $nilai) <tr>
                <td>{{ $index + 1 }}</td>
                <td>{{ round($nilai->avg_ph, 2) }}</td>
                <td>{{ round($nilai->avg_tds, 2) }}</td>
                <td>{{ round($nilai->avg_laju, 2) }}</td>
                <td>{{ round($nilai->avg_volume_air, 2) }}</td>
                <td>{{ round($nilai->avg_suhu_air, 2) }}</td>
                <td>{{ round($nilai->avg_panel, 2) }}</td>
                <td>{{ $nilai->hour_block }}</td>
              </tr> @endforeach </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>

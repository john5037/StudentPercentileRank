<!DOCTYPE html>
<html>
  <head>
  <title>Student Percentile Rank</title>
  </head>
  <body>
  <table border="5" align="center" width="70%">
  <tr>
    <th colspan="3">
      <h3><br>Student Percentile Rank</h3>
    </th>
  </tr>
  @if(count($students) > 0)
  <tr>
    <th>Name</th>
	<th>GPA</th>
	<th>Percentile Rank</th>
  </tr>
  
    @foreach ($students as $student)
    <tr>
      <td align="center">{{ $student['student_name'] }}</td>
	  <td align="center">{{ $student['student_gpa'] }}</td>
	  <td align="center">{{ $student['student_percentile_rank'] }}</td>
    </tr>
	@endforeach	
  
  @else
	  <tr> <td align="center"><h2>No Record Found </h2></td></tr>
  @endif
  </table>	 	  
  </body>
</html>

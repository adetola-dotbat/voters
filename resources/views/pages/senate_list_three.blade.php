 <!DOCTYPE html>
 <html>

 <head>
     <title></title>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
     <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
     <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>
     <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />
 </head>

 <body>
     <br /><br />
     <div class="container">
         <h3 align="center">Sokoto Central Poling Units</h3>
         <br /> <a style="margin-below:40px;" href="{{ route('sdata') }}" class="btn btn-info btn-sm" role="button">Return
             Main Result
             Page</a>
         <div class="table-responsive">
             <table id="employee_data" class="table table-striped table-bordered">
                 <thead>
                     <tr>
                         <td>Local Govt</td>
                         <td>Ward</td>
                         <td>Polling Unit</td>
                         <td>Registered Vote</td>
                         <td>Accredited Vote</td>
                         <td>Vote Casted</td>

                         <td>APC</td>
                         <td>PDP</td>
                         <td>OTHER PARTIES</td>
                         <td>STATUS</td>
                     </tr>
                 </thead>
                 <tbody>
                     @foreach ($senateLists as $senateList)
                         <tr>
                             <td>{{ $senateList->lga }}</td>
                             <td>{{ $senateList->ward }}</td>
                             <td>{{ $senateList->pu_name }}</td>
                             <td>{{ $senateList->vt_reg }}</td>
                             <td>{{ $senateList->vt_acc }}</td>
                             <td>
                                 @php
                                     $cast = $senateList->apc + $senateList->pdp + $senateList->nnpp + $senateList->lp + $senateList->others;
                                     echo $cast;
                                 @endphp
                             </td>

                             <td>{{ $senateList->apc }}</td>
                             <td>{{ $senateList->pdp }}</td>
                             <td>
                                 @php
                                     $others = $senateList->nnpp + $senateList->lp + $senateList->others;
                                     echo $others;
                                 @endphp
                             </td>
                             <td>
                                 @php
                                     if ($cast > $senateList->vt_acc) {
                                         echo '<a href="#" class="btn btn-danger btn-sm" role="button">CHECK</a>';
                                     } else {
                                         echo '<a href="#" class="btn btn-info btn-sm" role="button">NORMAL</a>';
                                     }
                                 @endphp

                             </td>
                         </tr>
                     @endforeach

                 </tbody>
             </table>
         </div>
     </div>
 </body>

 </html>
 <script>
     $(document).ready(function() {
         $('#employee_data').DataTable();
     });
 </script>

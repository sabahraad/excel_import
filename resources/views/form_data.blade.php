
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Merchant Care Evaluation</title>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->
    <link href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css" rel="stylesheet" > 
    <link href="https://cdn.datatables.net/buttons/2.3.2/css/buttons.dataTables.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <style>
        .button.dt-button:first-child, div.dt-button:first-child, a.dt-button:first-child, input.dt-button:first-child{
            position: inherit !important;
            margin-top: 37px !important;
            margin-left: -150px !important;
        }
        .dataTables_paginate{
                color: black;
                float: right;
                padding: 8px 16px;
                text-decoration: none;
            }
        .dataTables_wrapper .dataTables_paginate .paginate_button:hover {
            background: none;
            color: black;
            border-radius: 4px;
            border: 1px solid #828282;
            }
        .a.fg-button.ui-button.ui-state-default {
                padding-right: 10px;
            }        
        .dataTables_wrapper .dataTables_paginate .paginate_button:active {
            background: none;
            color: black;
            }
        a {
            color: #910dfd;
            text-decoration: auto !important;
            padding: 8px !important;
        }
    </style>
</head>
<body>
<input type="text" name="daterange" />
        <div class="container mt-5" id="raad">
            <form method="get" action="" class="mb-3">
                  <button type="submit" class=" btn btn-primary btn-sm fcolor">Evaluation Form</button>
            </form>
            
        @if (Session::get('msg'))
                        <p class="alert alert-success">
                        {{ Session::get('msg') }}
                        </p>
                    @endif
        <table id="example" class="table table-bordered table-striped" style="width:100%">
            <thead>
                <tr>
                    <th>serial</th>
                    <th>quality_evaluator</th>
                    <th>agent_name</th>
                    <th>interaction_date</th>
                    <th>evaluation_date</th>

                    <th>skill_group</th>
                    <th>sampling_type</th>
                    <th>case_no</th>
                    <th>order_no</th>

                    <th>category</th>
                    <th>information_sub_category</th>
                    

                    <th>greetings</th>
                    <th>care_and_enthusiasm</th>
                    <th>communication</th>
                    <th>soft_skills</th>

                    <th>interaction_handling_skills</th>
                    <th>probing</th>
                    <th>system_usage_and_action</th>

                    <th>sop_followed</th>
                    <th>correct_info</th>
                    <th>fatal_error</th>
                    <th>Fatal_reason</th>

                    <th>training_required</th>
                    <th>training_agenda</th>
                    <th>behavior_training_topic</th>
                    <th>resolution_training_topic</th>

                    <th>comment</th>
                    
                </tr>
            </thead>

            <tbody>
            
                <tr>
                    <td>iteration</td>
                    <td>quality_evaluator</td>
                    <td>agent_name</td>
                    <td>interaction_date</td>
                    <td>evaluation_date</td>   
                    
                    <td>skill_group</td>
                    <td>sampling_type</td>
                    <td>case_no</td>
                    <td>order_no</td>  
                    
                    <td>category</td>
                    <td>information_sub_category</td>
                

                    <td>greetings</td>
                    <td>care_and_enthusiasm</td>
                    <td>communication</td>
                    <td>soft_skills</td> 
                    <td>interaction_handling_skills</td>
                    <td>probing</td>
                    <td>system_usage_and_action</td>
                    <td>sop_followed</td> 

                    <td>correct_info</td>
                    <td>fatal_error</td>
                    <td>Fatal_reason</td>
                    <td>training_required</td> 

                    <td>training_agenda</td>
                    <td>behavior_training_topic</td>
                    <td>resolution_training_topic</td>
                    <td>comment</td> 
                </tr>
            
            </tbody>
        </table>
    </div>
 
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <!-- <script src="https://cdn.datatables.net/1.13.2/js/jquery.dataTables.min.js"><script> -->
    <!-- <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script> -->
    <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.3.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>

    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script> -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script> -->

    <script src="https://cdn.datatables.net/buttons/2.3.2/js/buttons.html5.min.js"></script>
    <!-- <script src="https://cdn.datatables.net/buttons/2.3.2/js/buttons.print.min.js"></script> -->
    <!-- <script src="https://cdn.datatables.net/1.13.1/js/dataTables.jqueryui.min.js"></script> -->
    <!-- <script src="https://cdn.datatables.net/buttons/2.3.2/js/buttons.jqueryui.min.js"></script> -->
    <!-- <script src="https://cdn.datatables.net/buttons/2.3.2/js/buttons.colVis.min.js"></script>  -->
    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script> -->
<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
    <script>

    $(function() {
    $('input[name="daterange"]').daterangepicker({
        opens: 'left'
    }, function(start, end, label) {
        console.log("A new date selection was made: " + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD'));
        const first= start.format('YYYY-MM-DD');
        const sec= end.format('YYYY-MM-DD');
        $.ajax({
              type: "get",
              url: '/find',
              data: {first:first,sec:sec},
              success: function(result)
              {
                  console.log(result);
                  $('#raad').html(result);
              }
        }); 
    });
    });

        $(document).ready(function() {
                $('#example').DataTable( 
                {
                dom: 'Bfrtpi',
            
                buttons: [
                    'copy', 'excel'
                   
                    
                ]
            } );
        } );
    </script>
</body>
</html>

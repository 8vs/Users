@extends('layouts.base')

@section('content')
    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <th>1</th>
                <th>2</th>
                <th>3</th>
                <th>4</th>
                <th>5</th>
                <th>6</th>
            </tr>
        </thead>
                    <?php 
                    
                        // $result = mysqli_query($connection, "SELECT * FROM `Gen 30`");
                        // while ($row = mysqli_fetch_row($result)){
                        // echo " <tr>
                        //     <td> $row[0] </td>
                        //     <td> $row[1] </td>
                        
                        //     </tr>";
                        // } 
                    ?>
    </table> 
@endsection
<!DOCTYPE html>
<html>
    <head>
    
    </head>
    <body>

        <h1> One to One relationship In Laravel </h1>


        <p> Names from Users Table </p>

        @foreach ($users as $user)
            <li> 
                
                {{ $user->name}}  
            
            </li>
        @endforeach

        <p> Bike Names from Bike Table </p>

        @foreach ($allbikes as $allbike)
            <li> 
                
                {{ $allbike->bike_name}}  
            
            </li>
        @endforeach

        <p> User_1 ({{ $user_1_name->name }}) has {{ $user_1_bike->bike_name }} </p>

        <p> User_3 ({{ $user_2_name->name }}) has {{ $user_3_bike->bike_name }} </p>


    </body>
</html>

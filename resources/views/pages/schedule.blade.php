<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
    <style>
        table {
        font-family: arial, sans-serif;
        border-collapse: collapse;
        width: 100%;
        }

        td, th {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
        }

        tr:nth-child(even) {
        background-color: #dddddd;
        }
    </style>


    </head>
    
    <body>
        <h1> This Is My Schedule </h1>

        <p> Below is an outline of my schedule </p>
       

        <table>
            <tr> 
            <th> Activity</th>
            <th> Time Dedicated </th>
            <th> Completion Status</th>
            </tr>

            <tr>
                <td> Front-end Development </td>
                <td>  2hr 30min </td>
                <td>  Pending </td>
            </tr>


            <tr>
                <td> back-end Development </td>
                <td>  2hr 30min </td>
                <td>  Pending </td>
            </tr>

            <tr>
                <td> Algorithms and Data structures </td>
                <td>  2hr 30min </td>
                <td>  Pending </td>
            </tr>


            <tr>
                <td> database SQL </td>
                <td>  2hr  </td>
                <td>  Completed </td>
            </tr>



            <tr>
                <td> Git tutorial </td>
                <td>  2hr 30min </td>
                <td>  Pending </td>
            </tr>

            <tr>
                <td> Object Oriented Programming </td>
                <td>  2hr 30min </td>
                <td>  Pending </td>
            </tr>

            <tr>
                <td> Table Tennis </td>
                <td>  2hr 30min </td>
                <td>  Pending </td>
            </tr>


            <tr>
                <td> Discrete Mathematics </td>
                <td>  1hr </td>
                <td>  Completed</td>
            </tr>

            <tr>
                <td> Java Programming </td>
                <td>   45min </td>
                <td>  Pending </td>
            </tr>


            <tr>
                <td> Theory of Computation </td>
                <td>  2hr 30min </td>
                <td>  Pending </td>
            </tr>

        </table>

        <a href = "/"> To access the home page </a>

    </body>

</html>

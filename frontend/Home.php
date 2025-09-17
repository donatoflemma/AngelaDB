<?php 
include '../backend/api/db_connection.php'; 
include '../backend/include/header.php';
NamePage("Home");

include '../backend/include/topnav.php';
topnav('HomeAdmin');


echo"<div class='container bg-primary' id='table'>
      <div class='row tetx-start'>
        <form  action='Home.php' method='GET'>
          <input type='text' name='table'>
          <input type='submit' value='surch'>
        </form>
      </div>
      <div class='row tetx-center '>
        <div class = 'col-12 col-lg-6 '>";
         include '../backend/Query_SQL/Select_table.php';
  echo"</div>
      <div class = 'row'>
      
            <AreaChart width={730} height={250} data={data}
        margin={{ top: 10, right: 30, left: 0, bottom: 0 }}>
        <defs>
          <linearGradient id='colorUv' x1='0' y1='0' x2='0' y2='1'>
            <stop offset='5%' stopColor='#8884d8' stopOpacity={0.8}/>
            <stop offset='95%' stopColor='#8884d8' stopOpacity={0}/>
          </linearGradient>
          <linearGradient id='colorPv' x1='0' y1='0' x2='0' y2='1'>
            <stop offset='5%' stopColor='#82ca9d' stopOpacity={0.8}/>
            <stop offset='95%' stopColor='#82ca9d' stopOpacity={0}/>
          </linearGradient>
        </defs>
        <XAxis dataKey='name' />
        <YAxis />
        <CartesianGrid strokeDasharray='3 3' />
        <Tooltip />
        <Area type='monotone' dataKey='uv' stroke='#8884d8' fillOpacity={1} fill='url(#colorUv)' />
        <Area type='monotone' dataKey='pv' stroke='#82ca9d' fillOpacity={1} fill='url(#colorPv)' />
      </AreaChart>
      
      
      
      
      
      </div>

      </div>
    </div><!-- Chiusura del div container--> 
    
    
      <!--recharts script per usare la libreria direttamente dal browser-->
    <script src='https://unpkg.com/react/umd/react.production.min.js'></script>
    <script src='https://unpkg.com/react-dom/umd/react-dom.production.min.js'></script>
    <script src='https://unpkg.com/prop-types/prop-types.min.js'></script>
    <script src='https://unpkg.com/recharts/umd/Recharts.js'></script>";



include './../backend/include/footer.php';
footerType('1');
?>





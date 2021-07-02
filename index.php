<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <title>Web Task by Ali Abbas</title>
  <!-- Favicon -->
  <link rel="icon" href="assets/img/brand/favicon.png" type="image/png">
  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
  <!-- Icons -->
  <link rel="stylesheet" href="assets/vendor/nucleo/css/nucleo.css" type="text/css">
  <link rel="stylesheet" href="assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" type="text/css">
  <!-- Page plugins -->
  <!-- Argon CSS -->
  <link rel="stylesheet" href="assets/css/argon.css?v=1.2.0" type="text/css">
  <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>

</head>

<body>
    <nav class="navbar navbar-top navbar-expand navbar-light bg-faded border-bottom">
        <div class="container-fluid">
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            
            <!-- Navbar links -->
            <ul class="navbar-nav align-items-center  ml-md-auto ">
              <li class="nav-item d-xl-none">
                <!-- Sidenav toggler -->
                <div class="pr-3 sidenav-toggler sidenav-toggler-dark active" data-action="sidenav-pin" data-target="#sidenav-main">
                  <div class="sidenav-toggler-inner">
                    <i class="sidenav-toggler-line"></i>
                    <i class="sidenav-toggler-line"></i>
                    <i class="sidenav-toggler-line"></i>
                  </div>
                </div>
              </li>
              <li class="nav-item ">
                <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <div>
                      <i class="ni ni-cloud-download-95"></i>
                      
                    </div>
                    </a>
              </li>
              <li class="nav-item ">
                <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="ni ni-badge"></i>
                </a>
              </li>
              <li class="nav-item ">
                <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="ni ni-bell-55"></i>
                </a>
                </li>
            </ul>
            <ul class="navbar-nav align-items-center  ml-auto ml-md-0 ">
              <li class="nav-item dropdown">
                <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <div class="media align-items-center">
                    <span class="avatar avatar-sm rounded-circle">
                      <img alt="Image placeholder" src="assets/img/theme/profile-cover.jpg">
                    </span>
                    <div class="media-body  ml-2  d-none d-lg-block">
                      <span class="mb-0 text-sm  font-weight-bold">Temporary</span>
                    </div>
                  </div>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <div class="" style="justify-content:center;  align-items: center; display: flex;">
    <div class="card " style="width: 95%;background-color: #f6f9fc;">
        <div class="card-header border-0 " >
          <div class="row align-items-center">
            <div class="col">
              <h3 class="mb-0">Clients</h3>
            </div>
            <div class="col text-center">
                <input type="text" id="input-text" class="form-control" placeholder="Search by customer,name/email">
                </div>
                <div class="col">
                <button type="button" class="btn btn-primary btn-primary">Search</button>
              </div>
              
            <div class="col">
                <button type="button" class="btn btn-primary btn-primary">Add more customer</button>
            </div>
          </div>
        </div>
        <div class="table-responsive mt-4" style="background-color: rgb(255, 255, 255);">
          <!-- Projects table -->
          <table class="table align-items-center " id="datatable">
            <thead class="">
              <tr>
                <th scope="col"><b>CLIENT ID</b></th>
                <th scope="col"><b>CLOSING AGENT</b></th>
                <th scope="col"><b>COMPANY</b></th>
                <th scope="col"><b>ORDER</b></th>
                <th scope="col"><b>INVOICE PAID</b></th>
                <th scope="col"><b>INVOICE PENDING</b></th>
            </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row" >
                </th>
                <td>
                  
                </td>
                <td>
                  
                </td>
                <td>
                  
                </td>
                
                <td>
                  
                </td>
                  <td>
            
                  </td>
                  
                <td>
                  </td>
              </tr>

            </tbody>
          </table>
        </div>
      </div>
      </div>
      
      <script type="text/javascript">

function loadDoc() {
    var tbval=document.getElementById('datatable');
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      
      data=JSON.parse(this.response+"}")
      console.log(data['clients'])
      for(var i=1;i<=data['clients'].length;i++)
            {
                var x=tbval.insertRow();
                x.insertCell(0);
                tbval.rows[i].cells[0].style="color:rgb(66, 163, 228);font-weight: bolder;"
                tbval.rows[i].cells[0].innerHTML=data['clients'][i-1]['id'];
                x.insertCell(1);
                tbval.rows[i].cells[1].innerHTML=data['clients'][i-1]['name'];
                x.insertCell(2);
                tbval.rows[i].cells[2].innerHTML=data['clients'][i-1]['company'];
                x.insertCell(3);
                tbval.rows[i].cells[3].innerHTML=data['clients'][i-1]['orderId'];
                x.insertCell(4);
                tbval.rows[i].cells[4].innerHTML=data['clients'][i-1]['invoicepaid'];
                x.insertCell(5);
                tbval.rows[i].cells[5].innerHTML=data['clients'][i-1]['invoicePending'];
                x.insertCell(6);
                tbval.rows[i].cells[6].innerHTML=('  <i class="ni ni-badge"></i>')
                

            }
    }
  };
  xhttp.open("GET", "https://run.mocky.io/v3/d53400a3-6126-495e-9d16-0b4414b537b3", true);
  xhttp.send();
}
loadDoc()
        
    </script>
</body></html>
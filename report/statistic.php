<!DOCTYPE html>
<html lang="en">
<head>
  <title>Lead Statistic!</title>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="lib/flags.css">
	<link rel="stylesheet" href="//stackpath.bootstrapcdn.com/bootswatch/3.4.1/cerulean/bootstrap.min.css">
	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.3.1/semantic.min.css">
	<link rel="stylesheet" href="//cdn.datatables.net/1.10.19/css/dataTables.semanticui.min.css">
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
	
<script src="//apis.google.com/js/client.js?onload=OnLoadCallback"></script>
<body style="padding-top:30px;">
<style type="text/css">
.center{width:45%}
@media (min-width:768px) 
and (max-width:1024px){.center{width:100%}	}
@media (min-width:768px) 
and (max-width:1024px) 
and (orientation:landscape){.center{width:100%}	}
@media (min-width:481px) 
and (max-width:767px){.center{width:100%}	}
@media (min-width:320px) 
and (max-width:480px){.center{width:100%}	}

th{white-space:nowrap}
table tbody tr{
	width:100%;
	table-layout:fixed}
td{overflow:hidden;
	white-space:nowrap;
	text-overflow:ellipsis}

.ui.unstackable.table{display:table}
.ui.unstackable.table 

thead{
	display:table-header-group}
.ui.unstackable.table 

tbody{
	display:table-row-group}
.ui.unstackable.table 

tfoot{
	display:table-footer-group}
.ui.unstackable.table 

tr{
	display:table-row}
.ui.unstackable.table

td:first-child{font-weight:400}
.ui.unstackable.table tr>

td{width:auto!important;
	display:table-cell;
	padding:.4em .7em;
	box-shadow:none!important;
	-webkit-box-shadow:none!important}

.ui.unstackable.celled
.table.segment 
td:first-child,
.ui.unstackable.celled
.table.segment 
th:first-child{
	border-left:none!important}

.ui.unstackable.celled
.table.segment 
td:last-child,
.ui.unstackable.celled
.table.segment 
th:last-child{
	border-right:none!important}
	
.ui.unstackable.celled
.table.segment>:first-child>
tr:first-child>

td,
.ui.unstackable.celled
.table.segment>:first-child>
tr:first-child>

th{border-top:none!important}

.ui.unstackable.celled
.table.segment>:last-child>
tr:last-child>
td,

.ui.unstackable.celled
.table.segment>:last-child>
tr:last-child>

th{border-bottom:none!important}

.center{width:45%}
@media (min-width:768px) 
and (max-width:1024px){.center{width:100%}	}
@media (min-width:768px) 
and (max-width:1024px) 
and (orientation:landscape){.center{width:100%}	}
@media (min-width:481px) 
and (max-width:767px){.center{width:100%}	}
@media (min-width:320px) 
and (max-width:480px){.center{width:100%}	}
</style>
</head>

<body>
<div class="container center">
  <div class="row">
      <span class='hed'><strong>Lead Report <font style="color:#ea4335;">Adverten!</font>
	  </strong>
	  </span>
			<ul class="breadcrumb">
			    <li class="active">
				<button class="ui black button">Today</button></li>
				<li><a href="index.php">
				<button class="ui green button">Yesterday</button></a></li>
				<li><a href="total.php">
				<button class="ui red button">Total Lead</button></a></li>
<li><a class="ui image label">
  <img src="images/joe.jpg">AM</a>
<a class="ui image label">
  <img src="images/elliot.jpg">CEO</a>
<a class="ui image label">
  <img src="images/stevie.jpg">DEV</a></li>
<li><div class="ui compact menu">
	<a class="item">
	<i class="icon users"></i>Log Data Spammer
	<div class="floating ui teal label">0</div>
	</a>
</div></li></ul>
<table id="userlead" class="ui celled table responsive nowrap unstackable" style="width:100%">
    <div class="form-group">
  <div class="form-group input-group">
    <span class="input-group-addon input-sm"><span class="glyphicon glyphicon-search"></span></span>
<input class="form-control input-sm" type="text" id="search" placeholder="Search...">
  </div>
		<thead>
			<tr>
				<th class="no">NO</th>
				<th class="id">ID</th>
				<th class="platform">Platform</th>
				<th class="country">Country</th>
				<th class="amount">Amount</th>
			</tr>
		</thead>
		<tbody>
<tr class="Conversions"><td class="no">1</td>
<td class="id"><div class="ui active inline loader">Loading</div></td>
<td class="platform"><div class="ui active inline loader">Loading</div></td>
<td class="country"><div class="ui active inline loader">Loading</div></td>
<td class="amount">$0.00</td></tr>
<script>var lastId = </script>
        </tbody>
        <tfoot>
		<tr><tr></tr><td colspan="5" id="sum"></td></tr>
	</tfoot>
    </table>
  </div>
</div>
<script src="//ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js" type="text/javascript"></script> 
<script src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js" type="text/javascript"></script> 
<script src="//cdn.datatables.net/1.10.19/js/dataTables.semanticui.min.js" type="text/javascript"></script> 
<script src="//cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.3.1/semantic.min.js" type="text/javascript"></script> 
<script type="text/javascript">
$(document).ready(function() {
    var usersTable = $('#userlead').dataTable( {
        "oLanguage": { "sSearch": "" , "sSearchPlaceholder": "Search..."},
		"sPaginationType": "bootstrap",
        "paging": false,
        "ordering": true,
        "info": false,
        "bFilter": true,
        "sDom": "<'top'>l<'searchbox' t>ip",
        "fnRowCallback": function(nRow, aData, iDisplayIndex) {
            var api = this.api(),
                data;
            var intVal = function(i) {
                return typeof i === 'string' ? i.replace(/[\$,]/g, '') * 1 : typeof i === 'number' ? i : 0;
            };
            total = api.column(4).data().reduce(function(a, b) {
                return intVal(a) + intVal(b);
            }, 0);
            pageTotal = api.column(4, {
                page: 'current'
            }).data().reduce(function(a, b) {
                return intVal(a) + intVal(b);
            }, 0);
            $('#sum').html('<strong>Total Earning: $'+pageTotal.toFixed(2)+'</strong>');
        }});
     var oTable = $('#userlead').DataTable();
      $('#search').keyup(function () {
      oTable.search($(this).val()).draw();
  });
document.addEventListener("DOMContentLoaded", function(event) {
window.scrollTo(0,document.body.scrollHeight);
  });
});
</script>
<center></div>
		<thead>
			<tr>
<a class="ui red empty circular label"> </a>
<a class="ui orange empty circular label"> </a>
<a class="ui yellow empty circular label"> </a>
<a class="ui olive empty circular label"> </a>
<a class="ui green empty circular label"> </a>
<a class="ui teal empty circular label"> </a>
<a class="ui blue empty circular label"> </a>
<a class="ui violet empty circular label"> </a>
<a class="ui purple empty circular label"> </a>
<a class="ui pink empty circular label"> </a>
<a class="ui brown empty circular label"> </a>
<a class="ui grey empty circular label"> </a>
<a class="ui black empty circular label"> </a>
			</tr>
		</thead>
</div></center>
</body>
</html>
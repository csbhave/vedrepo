<?php include('header.php') ?>
<head>
<style>
 input[type="text"]{
		border-top: none !important;
		border-right: none !important;
		border-left: none !important;
		border-bottom: 1px dotted #2196f3 !important;
		box-shadow: none !important;
		-webkit-box-shadow: none !important;
		-moz-box-shadow: none !important;
		-moz-transition: none !important;
		-webkit-transition: none !important;
    
    }
	
	.heading{
    color: #2196f3;
}

.control{
padding-top:7px;
margin:5px;
}

.reciept{
    border-top: 5px solid #2196f3;
    -webkit-box-shadow: 0px 5px 21px -2px rgba(0,0,0,0.47);
    -moz-box-shadow: 0px 5px 21px -2px rgba(0,0,0,0.47);
    box-shadow: 0px 5px 21px -2px rgba(0,0,0,0.47);
    margin-top: 10px;   
	margin-bottom: 10px;
    width: 850px;
    position: absolute;
    left: 367px;
    top: 80px;
    background:rgba(0,0,0,0.8);;
    color:white;
}
.container{
    }
</style>
</head>    
<div class="container" id="div-id-name" >
<div class="reciept" >
	<div class="row" style="display:flex;justify-content:center; margin-top:10px;">
		<div class="col-md-6">
			<div class="col-md-4">
            <img class="media-object img-thumbnail user-img" style="height: 80px;" alt="User Picture" src="../img/logo.jpg"></div>
		   <div class="col-md-8 text-right">
			<h4 class="heading">VED EDUCATIONAL ACADEMY</h4>
			<h5 class="heading">Near By Shaniwar Wada</h5>
			<h6 class="heading">+91 1234567890</h6>
			</div>
		</div>
		<div class="col-md-4">
			
			<div class="form-group">
              <label class="col-md-4 control" >Date :</label>
              <div class="col-md-8">
                <input id="" name="name" type="text" placeholder="" class="form-control">
              </div>
            </div>
		                
		    <div class="form-group">
              <label class="col-md-4 control" >Reciept No :</label>
              <div class="col-md-8">
                <input id="" name="name" type="text" placeholder="" class="form-control">
              </div>
            </div>
		                
		</div>
	</div>
	<br/>
	<div class="row" style="display:flex;justify-content:center;">
		<div class="col-md-10">
            <div class="form-group">
              <label class="col-md-3 control" for="">Student Name :</label>
              <div class="col-md-10">
                <input id="" name="name" type="text" placeholder="Your name" class="form-control">
              </div>
            </div>
			<div class="form-group">
              <label class="col-md-3 control" for="">Educational Year :</label>
              <div class="col-md-10">
                <input id="" name="name" type="text" placeholder="Enter here" class="form-control">
              </div>
            </div>
         </div>
     </div>
	 <div class="row" style="display:flex;justify-content:center;">
		<div class="col-md-5">
			<div class="form-group">
              <label class="col-md-6 control" for="">Semester :</label>
              <div class="col-md-6" style="">
                <input id="" name="name" type="text" placeholder="Semester" class="form-control" >
              </div>
            </div>
            </div>
			<div class="col-md-5">
			<div class="form-group">
              <label class="col-md-3 control" for="">Batch :</label>
              <div class="col-md-9">
                <input id="" name="name" type="text" placeholder="Batch" class="form-control">
              </div>
            </div>
            </div>
            </div>
	<div class="row" style="display:flex;justify-content:center;">
		<div class="col-md-10">
			<div class="form-group">
              <label class="col-md-3 control" for="name">Recieve Amount :</label>
              <div class="col-md-10">
                <input id="name" name="name" type="text" placeholder="Amount" class="form-control">
              </div>
            </div>
            </div>
            </div>
			<br/>
			<div class="row" style="display:flex;justify-content:center;">
		<div class="col-md-4">
			<div class="form-group">
              <label class="col-md-5 control" for="name">Cash :</label>
              
              <input type="radio" name="cash" value="cash">
            </div>
			<div class="form-group">
              <label class="col-md-5 control" for="name">Cheque :</label>
              <input type="radio" name="cheque" value="cheque"> 
              </div>
		 </div>
		 <div class="col-md-6">
			<div class="form-group">
              <label class="col-sm-5 control">Bank Name :</label>
              <div class="col-sm-9">
                <input id="" name="name" type="text" placeholder="State Bank of India" class="form-control">
              </div>
            </div>
			<div class="form-group">
              <label class="col-sm-5 control" >Cheque Number :</label>
              <div class="col-sm-9">
                <input id="" name="name" type="text" placeholder="Cheque no" class="form-control">
              </div>
            </div>
			<div class="form-group">
              <label class="col-sm-3 control" >Date :</label>
              <div class="col-sm-9">
                <input id="" name="name" type="text" placeholder="Date" class="form-control">
              </div>
            </div>
		 </div>
            </div>
			<br/>
			<div class="row" style="display:flex;justify-content:center;">
		<div class="col-md-10">
			<div class="form-group">
              <label class="col-md-3 control" for="name">Recieved By :</label>
              <div class="col-md-10">
                <input id="name" name="name" type="text" placeholder="Authorised Person" class="form-control">
              </div>
            </div>
		</div>
		</div>
		<div class="row" style="display:flex;justify-content:center;margin-top:80px;">
		<div class="col-md-6">
    	</div>
		<div class="col-md-3">
			<div class="form-group">
              <label class="control" for="name"><u>Authorised Signatury</u></label> 
            </div>
        </div>
    	</div>
        <div class="row" style="display:flex;justify-content:center;">
        <div class="col-md-3">
			<div class="form-group">
            <!-- <input type="button" id="print" class="col-md-6 btn btn-primary" value="Print" onclick="javascript:Invoice('div-id-name')"> -->
            <button id="print" class="col-md-6 btn btn-primary" value="Print" onclick="Invoice('div-id-name')">Print</button>
            </div>
        </div>

        </div>
		</div>
		</div>
	</div>
</div>
</div>
<script type="text/javascript" src="../assets/jquery-3.4.1.min.js"></script>
<script type="text/javascript">
    function Invoice(paravalue){
       var backup = document.body.innerHTML;
       var divContent = document.getElementById(paravalue).innerHTML;
       document.body.innerHTML = divContent;
       window.print();
    }

</script>
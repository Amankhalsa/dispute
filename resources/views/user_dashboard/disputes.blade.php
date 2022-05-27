@extends('user_dashboard.user_master')
@section('title','Disputes
')
@section('disputes','active')
@section('content')



<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0">@yield('title')</h1>
          </div><!-- /.col -->
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">@yield('title')  </li>
              </ol>
          </div>      
  <div class="col btn" onclick="showPopUp(1)">
   <div class="d-flex flex-row bd-highlight mb-3 card " style="height: 60px">
   <div class="p-2 bd-highlight"><i class="fas fa-copy " style="color: blue; font-size: 2rem;"></i></div>
   <div class="p-2 bd-highlight">NEW DISPUTE</div>
  </div> 
  </div>
  

  <div class="col btn" onclick="showPopUp(2)">
   <div class="d-flex flex-row bd-highlight mb-3 card" style="height: 60px">
   <div class="p-2 bd-highlight"><i class="fas fa-envelope-open-text" style="color: blue; font-size: 2rem;"></i></div>
   <div class="p-2 bd-highlight">RECEIVED REPLY</div>
  </div>  
  </div>
  <div class="col btn" onclick="showPopUp(3)">
    <div class="d-flex flex-row bd-highlight mb-3  card" style="height: 60px">
   <div class="p-2 bd-highlight"><i class="fas fa-file-medical" style="color: blue; font-size: 2rem;"></i></div>
   <div class="p-2 bd-highlight">FOLLOWUP LATTER</div>
  </div> 
  </div>
  <div class="col btn" onclick="showPopUp(4)">
    <div class="d-flex flex-row bd-highlight mb-3  card" style="height: 60px">
   <div class="p-2 bd-highlight"><i class="far fa-copy" style="color: blue; font-size: 2rem;"></i></div>
   <div class="p-2 bd-highlight">OTHER LATTER</div>
  </div> 
  </div>
  <div class="col btn" onclick="showPopUp(5)">
    <div class="d-flex flex-row bd-highlight mb-3 card" style="height: 60px">
   <div class="p-2 bd-highlight"><i class="far fa-copy" style="color: blue; font-size: 2rem;"></i></div>
   <div class="p-2 bd-highlight">DISPUTE OVERVIEW</div>
  </div> 
  </div>
  <div class="col p-2 ms-auto mt-auto">
    <p><a href="">Watch the tutorial video</a></p>
  </div>
  </div> 
  </div>

 <section>
     <div class="container-fluid">
  <div class="card text-center">
  <div class="card-header">
   <ul class="nav  ">
    <li class="nav-item mt-1">
      <p class="nav-link">Active</p>
    </li>
    <li class="nav-item mt-1">
      <a class="nav-link" href="#">Unsent</a>
    </li>
    <li class="nav-item mt-1">
      <a class="nav-link" href="#">Sent</a>
    </li>
     <li class="nav-item mt-1">
      <a class="nav-link " href="#">Recived </a>
    </li>
     <li class="nav-item mt-2">
      <div class="col-auto">
     <div class="input-group">
     <div class="input-group-text"><i class="fas fa-search"></i></div>
    <input type="text" class="form-control" id="autoSizingInputGroup" placeholder="">
  </div>
</div>
    </li>
     <li class="nav-item">
      <a class="nav-link" type="button" href="#"><input type="reset" class="form-control " value="Clear"></a>
    </li>
  </ul>
  <ul class="float-right nav" style="margin-top: -4%;">
      <li class="m-1"><i class="fas fa-print p-1" style="border:1px solid"></i></li>
      <li class="m-1"><i class="fas fa-paper-plane p-1" style="border:1px solid"></i></li>
      <li class="m-1"><i class="fas fa-trash p-1" style="border:1px solid"></i></li>
  </ul>
</div>
<div class="card-body" style="height: 100px">
  
</div>
</div>
</div>
<div style="position: absolute;top: 0;left: 0;width: 100%;height: 100%;z-index: 200;background-color: rgba(0,0,0,0.5);" class="d-none" id="ob"></div>
<!-- popup -->
<div id="popup" style="position: absolute;top: 10%;left: 25%;background-color: #fff;z-index: 1000000;height: 500px;width: 0px;transform: translateX(-10%);transition: 0.5s;border-radius: 10px;box-shadow: 4px #000;overflow:hidden;">
<div style="display: flex;flex-direction: column;justify-content: space-around;">
<div style="height: 50px;border-bottom: 1px solid gray;display: flex;align-items: center;padding-left: 10px">Create New Dispute(s)</div>
<div style="flex-basis: 100%;width: 100%;flex:5;">
  <div class="mt-5" style="display: flex;flex-direction: row;justify-content: space-around;">
    <div style="display: flex;flex-direction: row;align-items: center;justify-content: center;">
      <div style="width: 30px;height: 30px;border-radius: 50%;display: flex;align-items: center;justify-content: center;background-color: blue;color: #fff">1</div>
      <div class="pl-2">Choose Type</div>

    </div>

    <div style="display: flex;flex-direction: row;align-items: center;justify-content: center;">
      <div style="width: 30px;height: 30px;border-radius: 50%;display: flex;align-items: center;justify-content: center;background-color: blue;color: #fff">2</div>
      <div class="pl-2">Choose Items</div>
    </div>
    <div style="display: flex;flex-direction: row;align-items: center;justify-content: center;">
      <div style="width: 30px;height: 30px;border-radius: 50%;display: flex;align-items: center;justify-content: center;background-color: blue;color: #fff">3</div>
      <div class="pl-2">Finish</div>
    </div>
  </div>
  <h5 class="text-center pt-5 pb-5">what do you want to dispute</h5>

  <div style="display: flex;flex-direction: row;align-items: center;justify-content: space-around;">
    <div style="border:1px dashed gray;height: 100px;width: 150px;display: flex;flex-direction: column;align-items: center;justify-content: space-around;cursor: pointer;">
      <div><i class="fas fa-file-alt" style="font-size: 2rem"></i></div>
      <div>Collections</div>
    </div>
    <div style="border:1px dashed gray;height: 100px;width: 150px;display: flex;flex-direction: column;align-items: center;justify-content: space-around;cursor: pointer;">
      <div><i class="fas fa-search" style="font-size: 2rem"></i></div>
      <div>Inquiries</div>
    </div>

    <div style="border:1px dashed gray;height: 100px;width: 150px;display: flex;flex-direction: column;align-items: center;justify-content: space-around;cursor: pointer;">
      <div><i class="fas fa-history" style="font-size: 2rem"></i></div>
      <div>Late Payments</div>
    </div>
    <div style="border:1px dashed gray;height: 100px;width: 150px;display: flex;flex-direction: column;align-items: center;justify-content: space-around;cursor: pointer;">
      <div><i class="fas fa-minus-circle" style="font-size: 2rem"></i></div>
      <div>ChargeOffs</div>
    </div>
    <div style="border:1px dashed gray;height: 100px;width: 150px;display: flex;flex-direction: column;align-items: center;justify-content: space-around;cursor: pointer;">
      <div><i class="fas fa-university" style="font-size: 2rem"></i></div>
      <div>Bankrupties</div>
    </div>
    <div style="border:1px dashed gray;height: 100px;width: 150px;display: flex;flex-direction: column;align-items: center;justify-content: space-around;">
      <div><i class="far fa-question-circle" style="font-size: 2rem"></i></div>
      <div>Others</div>
    </div>
  </div>
 <div class="text-center pt-3"> <a href="" style="text-decoration: underline;">or click here to view all list account</a></div>
</div>
<div class="mt-5" style="display: flex;align-items: center;justify-content: space-around;">
  <button class="btn btn-primary">Next Step</button>
  <button class="btn btn-danger" onclick="removePopUp(1)">Cancel</button>
</div>
</div>
    </div>
<!-- popup end -->
<!-- popup-2 -->
<div id="popup2" style="position: absolute;top: 10%;left: 25%;background-color: #fff;z-index: 1000000;height: 500px;width: 1000px;transform: translateX(-10%);transition: 0.5s;border-radius: 10px;box-shadow: 4px #000" class="d-none">
<h5 class="p-3" style="border-bottom: 1px solid">Recived a Reply</h5>
<div class="container">
  <div class="row">
    <div class="col">
      <div class="card   mb-3" style="height:18rem;">
      <div class="card-header">1. Who did you get a response from?<br>
        Please choose one:</div>
    </div>
    </div>
    <div class="col">
     <div class="card m-3  mb-3" style="height:18rem;">
      <div class="card-header">2. Which letter is this in response to?<br>
        Please choose one:</div>
    </div> 
    </div>
    <div class="col">
      <div class="card   mb-3" style="height:18rem;">
      <div class="card-header">3.Did any items get deleted/repaired?<br>
       Only select items that got deleted/repaired:</div>
    </div>
    </div>
    
  </div>
  
</div>

 <div class="mt-5" style="display: flex;align-items: center;justify-content: space-around;">
  <button class="btn btn-primary">Next Step</button>
  <button class="btn btn-danger" onclick="showPopUp(2)">Cancel</button>
</div>
</div>
<!-- popup2 end -->
<!-- popup-3 -->
<div id="popup3" style="position: absolute;top: 10%;left: 25%;background-color: #fff;z-index: 1000000;height: 500px;width: 1000px;transform: translateX(-10%);transition: 0.5s;border-radius: 10px;box-shadow: 4px #000" class="d-none">
 <div class="container">
  <h5 class="p-3" style="border-bottom: 1px solid">Follow Up Letter</h5>
  <div class="card mt-5" style="height:18rem;">
    <div class="card-header">Which followup letter would you like to create?<br>
      Please choose one:</div>
  </div>
   
 </div>

 <div class="mt-5" style="display: flex;align-items: center;justify-content: space-around;">
  <button class="btn btn-primary">Next Step</button>
  <button class="btn btn-danger" onclick="showPopUp(3)">Cancel</button>
</div>
</div>
<!-- popup3 end -->
<!-- popup-4 -->
<div id="popup4" style="position: absolute;top: 10%;left: 25%;background-color: #fff;z-index: 1000000;height: 500px;width: 1000px;transform: translateX(-10%);transition: 0.5s;border-radius: 10px;box-shadow: 4px #000" class="d-none">
 <div class="container">
  <h5 class="p-3" style="border-bottom: 1px solid">Create a Letter</h5>
  <div class="row">
    <div class="col">
    <div class="card mt-3" style="height:18rem;">
    <div class="card-header">1. Which letter would you like to send?<br>
      Please choose one:</div>
       <div class="input-group">
      <div class="input-group-text" id="btnGroupAddon"><i class="fas fa-search"></i></div>
      <input type="text" class="form-control" placeholder="Search..." aria-label="Input group example" aria-describedby="btnGroupAddon">
     </div>
     
     </div>
    </div>
  
    <div class="col">
    <div class="card mt-3" style="height:18rem;">
    <div class="card-header">2. Where do you want to send this letter?<br>
      Please choose one:
    </div>
    <div class="input-group">
      <div class="input-group-text" id="btnGroupAddon"><i class="fas fa-search"></i></div>
      <input type="text" class="form-control" placeholder="Search..." aria-label="Input group example" aria-describedby="btnGroupAddon">
     </div>
   </div>
    </div>
    <div class="col">
    <div class="card mt-3" style="height:18rem;">
    <div class="card-header">3. Which accounts is this about?<br>
      Please choose one or more:
    </div>
    <div class="input-group">
      <div class="input-group-text" id="btnGroupAddon"><i class="fas fa-search"></i></div>
      <input type="text" class="form-control" placeholder="Search..." aria-label="Input group example" aria-describedby="btnGroupAddon">
     </div>
    </div>
   
    </div>
    
  </div>
   
 </div>

 <div class="mt-5" style="display: flex;align-items: center;justify-content: space-around;">
  <button class="btn btn-primary">Next Step</button>
  <button class="btn btn-danger" onclick="showPopUp(4)">Cancel</button>
</div>
</div>
<!-- popup4 end -->
<!-- popup-5 -->
<div id="popup5" style="position: absolute;top: 10%;left: 25%;background-color: #fff;z-index: 1000000;height: 500px;width: 1000px;transform: translateX(-10%);transition: 0.5s;border-radius: 10px;box-shadow: 4px #000" class="d-none">
 <div class="container">
  

   
   
  

 <div class="mt-5" style="display: flex;align-items: center;justify-content: space-around;">
  <button class="btn btn-primary">Next Step</button>
  <button class="btn btn-danger" onclick="showPopUp(5)">Cancel</button>
</div>
</div>
</div>
<!-- popup5 end -->
<script type="text/javascript">
const showPopUp =(a)=>{
  console.log(a)
    const p = document.getElementById("popup")
    const b = document.getElementById("ob")
    // console.log(p)
    // p.classList.toggle("d-none")
    b.classList.toggle("d-none")
    switch(a){
      case 1:
      document.getElementById("popup").style.width = "1000px"
      break;
      case 2:
      document.getElementById("popup2").classList.toggle("d-none");
      break;
      case 3:
      document.getElementById("popup3").classList.toggle("d-none");
      break;
      case 4:
      document.getElementById("popup4").classList.toggle("d-none");
       break;
       case 5:
      document.getElementById("popup5").classList.toggle("d-none");
     
      default:
      break;
    }
}
  const removePopUp =(a)=>{
  console.log(a)
    const p = document.getElementById("popup")
    const b = document.getElementById("ob")
    // console.log(p)
    // p.classList.toggle("d-none")
    b.classList.toggle("d-none")
    switch(a){
      case 1:
      document.getElementById("popup").style.width = "0px"
      break;
      case 2:
      document.getElementById("popup2").classList.toggle("d-none");
      break;
      case 3:
      document.getElementById("popup3").classList.toggle("d-none");
      break;
      case 4:
      document.getElementById("popup4").classList.toggle("d-none");
      break;
      case 5:
      document.getElementById("popup5").classList.toggle("d-none");
      default:
      break;
    }
}
</script>
      </section></div>
@endsection
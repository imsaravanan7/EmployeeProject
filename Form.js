const apiUrl = "http://127.0.0.1:8000/api";
document.getElementById("empForm").addEventListener("submit",(e)=>{
    e.preventDefault();
    const formData = new FormData(document.getElementById("empForm"));
    var object = {};
    formData.forEach(function(value, key){
      if( key==="Mobile"||key==="Department"||key==="Designation")
        object[key] = Number(value);
      else
      object[key]=value;
    });
    var json = JSON.stringify(object);
    console.log(json);

    fetch(`${apiUrl}/employee`, {
        method: 'POST',
        body: json,
        headers:{'content-type': 'application/json'},
    }).then(response => {console.log("response"+response);});
    });

  let options=[];
  fetch(`${apiUrl}/department`).then(res =>
    res.json()).then(d => {
        options=d;
        let ele;
        for(let opt of options){
            ele = document.createElement("option");
            ele.innerHTML = opt.Name;
            ele.value=opt.id;
            document.getElementById("department").appendChild(ele);
        }
    });
    document.getElementById("department").addEventListener("change",(e)=>{
      document.getElementById("des-con").style.display="block";
      fetch(`${apiUrl}/designation`).then(res =>
    res.json()).then(d => {
        
        options=d;
        let ele;
        options=options.filter((val)=>val.Department==e.target.value)
        console.log(options);
        for(let opt of options){
            ele = document.createElement("option");
            ele.innerHTML = opt.Name;
            ele.value=opt.id; 
            document.getElementById("designation").appendChild(ele);
        }
    });
      console.log(e.target.value)
    })


<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script
  src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
</head>
    <body>
        <div class="container" style="padding:10%">
            
            <form action="" >
                <div class="form-group" >
                        <label for="jml_form">Text</label>
                        <input type="text" value="" class="form-control" id="isiText" onChange="createForm()">
                        <br><br>
                    
                    <div id="newForm">
                    </div>
                </div>
            </form>
            <input type="hidden" class="form-control" id="nomor" value="0" />
            </div>
        </div>
    </body>
<script type="text/javascript">
    createForm=()=>{    
        var text = $("#isiText").val();
        var jml = $("#nomor").val();
        var no = Number(jml)+1;
        $("#newForm").append("<div class='div'><span class='nomer'>"+no+"</span>.<span class='label'>"+text+" <span class='tombol'><input type='button' class='btn btn-primary'  value='Update' onclick='aksi(event,"+jml+")'><input type='button' class='btn btn-outline-danger' value='Delete' onclick='hapus(event,"+jml+")'></span></span></div>");
        $("#nomor").val(no);
        $("#isiText").val("");
    }

    function aksi(event,i){
        console.log(i);
        event.preventDefault();
        document.getElementsByClassName("label")[i].innerHTML = "<input type='text' class='texts form-control'/><input type='button' class='btn btn-success' value='Submit' onclick='editdata(event,"+i+")'/>";
    }
    function editdata(event,i){
        event.preventDefault();
        console.log(i);
        var text =  document.getElementsByClassName("texts")[0].value;
        document.getElementsByClassName("label")[i].innerHTML = text+" <span class='tombol'><input type='button' class='btn btn-primary' value='Update' onclick='aksi(event,"+i+")'><input type='button' value='Delete' class='btn btn-outline-danger' onclick='hapus(event,"+i+")'></span></span>";
    }
    hapus=(event,jml)=>{
       event.preventDefault();
       document.getElementsByClassName("div")[jml].parentNode.removeChild(document.getElementsByClassName("div")[jml]);
       var jml1 = $("#nomor").val();
        var no = Number(jml1)-1;
        $("#nomor").val(no);
       for(var i=jml;i<no;i++){
        document.getElementsByClassName("nomer")[i].innerHTML = i+1;
        document.getElementsByClassName("tombol")[i].innerHTML = "<input type='button' value='Update' class='btn btn-primary' onclick='aksi(event,"+i+")'></span><input type='button' value='Delete' class='btn btn-outline-danger' onclick='hapus(event,"+i+")'>"
       }
             
    }
</script>
</html>
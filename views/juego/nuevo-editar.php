<style>
    #contenedorSidebar{
        min-height:600px;
        max-height:600px;
        margin-top:0px;
        overflow-y: scroll;
    }
    #simpleAlternativa{
        min-height:500px;
        margin-top:0px;
    }
    #imagen{
        height:400px;
        display:flex;
        margin:auto;
    }
</style>
    
<!--Contenedor Principal (cuepo de la pagina)-->
<div class="row ">
    <div id="contenedorSidebar" class="col-md-3 p-2 bg-success">
        <div id="sidebar">    
            
        </div> 
        <a id="add" class="btn btn-primary " data-bs-toggle="modal" data-bs-target="#exampleModal "><i class="fa-solid fa-circle-plus"></i></a>
        <a id="add" class="btn btn-info "><i class="fa-solid fa-floppy-disk"></i></a>
    </div>
    
    <div id="simpleAlternativa"class="col-md-9 mt-2"  style="display:none;">
        <div class="input-group mb-3">
            <input type="text" id="consignaSimple" class="form-control" placeholder="Ingrese consigna" >
        </div>
        <div class="">
            <img id="imagen" src="views\dist\img\sin_imagen.jpg" class="img-fluid" alt="...">
        </div>
        <div class="row mt-4 input-group">
            <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                 <div class="form-check col-6 m-1">
                    <input class="form-check-input" type="radio" name="opSimple1" value="1" id="flexRadioDefault1">
                    <input type="text" class="form-control" placeholder="Ingrese 1ra opcion" aria-label="Text input with checkbox">
                </div>
                <div class="form-check col-6 m-1">
                    <input class="form-check-input" type="radio" name="opSimple1" value="1" id="flexRadioDefault2">
                    <input type="text" class="form-control" placeholder="Ingrese 2da opcion" aria-label="Text input with checkbox">
                </div>
            </div>
            <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                <div class="form-check col-6 m-1">
                    <input class="form-check-input" type="radio" name="opSimple1" value="1" id="flexRadioDefault3">
                    <input type="text" class="form-control" placeholder="Ingrese 3ra opcion" aria-label="Text input with checkbox">
                </div>
                <div class="form-check col-6 m-1">
                    <input class="form-check-input" type="radio" name="opSimple1" value="1" id="flexRadioDefault4">
                    <input type="text" class="form-control" placeholder="Ingrese 4ta opcion">
                </div>
            </div>
        </div>
    </div>
	<div id="verdaderoFalso"class="col-md-9 mt-2" style="display:none;">
        <div class="input-group mb-3">
            <input type="text" id="consignaSimple" class="form-control" placeholder="Ingrese consigna" >
        </div>
        <div class="">
            <img id="imagen" src="views\dist\img\sin_imagen.jpg" class="img-fluid" alt="...">
        </div>
        <div class="row mt-4 input-group">
            <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                 <div class="form-check col-6 m-1">
                    <input class="form-check-input" type="radio" name="opSimple1" value="1" id="flexRadioDefault1">
                    <input type="text" class="form-control" placeholder="Ingrese 1ra opcion" aria-label="Text input with checkbox">
                </div>
                <div class="form-check col-6 m-1">
                    <input class="form-check-input" type="radio" name="opSimple1" value="1" id="flexRadioDefault2">
                    <input type="text" class="form-control" placeholder="Ingrese 2da opcion" aria-label="Text input with checkbox">
                </div>
            </div>
        </div>
    </div>
	<div id="multipleAlternativa"class="col-md-9 mt-2" style="display:none;">
        <div class="input-group mb-3">
            <input type="text" id="consignaSimple" class="form-control" placeholder="Ingrese consigna" >
        </div>
        <div class="">
            <img id="imagen" src="views\dist\img\sin_imagen.jpg" class="img-fluid" alt="...">
        </div>
        <div class="row mt-4 input-group">
            <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                 <div class="form-check col-6 m-1">
                    <input class="form-check-input" type="radio" name="opSimple1" value="1" id="flexRadioDefault1">
                    <input type="text" class="form-control" placeholder="Ingrese 1ra opcion" aria-label="Text input with checkbox">
                </div>
                <div class="form-check col-6 m-1">
                    <input class="form-check-input" type="radio" name="opSimple1" value="1" id="flexRadioDefault2">
                    <input type="text" class="form-control" placeholder="Ingrese 2da opcion" aria-label="Text input with checkbox">
                </div>
            </div>
        </div>
    </div>
	<div id="respuestaCorta"class="col-md-9 mt-2">
        <div class="input-group mb-3">
            <input type="text" id="consignaSimple" class="form-control" placeholder="Ingrese consigna" >
        </div>
        <div class="">
            <img id="imagen" src="views\dist\img\sin_imagen.jpg" class="img-fluid" alt="...">
        </div>
        <div class="row mt-4 input-group">
            <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                <input type="text" class="form-control" placeholder="Respuesta" aria-label="Text input with checkbox">
            </div>
        </div>
    </div>
    <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Seleccione el tipo de consigna</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
		<div class="row">
			<div class="btn-group-vertical" role="group" aria-label="Basic example">
				<button type="button" onclick="addItem('Multiple')" class="btn btn-success" data-bs-dismiss="modal"><i class="fa-solid fa-check-double"></i> Multiple opcion</button>
				<button type="button" onclick="addItem('Simple')" class="btn btn-primary"data-bs-dismiss="modal"><i class="fa-solid fa-check"></i> Opcion simple</button>
				<button type="button" onclick="addItem('Verdadero - Falso')" class="btn btn-warning" data-bs-dismiss="modal">Verdadero o Falso</button>
				<button type="button" onclick="addItem('Respuesta corta')" class="btn btn-warning" data-bs-dismiss="modal"><i class="fa-solid fa-comment-pen"></i> Respuesta Corta</button>
			</div>	
		</div>
      <div class="modal-footer">
       
      </div>
    </div>
  </div>
</div>
</div>
<script>
    let add = document.getElementById('add');
    //let sidebar = document.getElementById('sidebar');
    
    /*add.addEventListener('click',function(){
        num++;
        let item = `<div id="`+num+`"class="card px-2  mb-2">
            <div class="card-header">
               <h5><b>Detalle de Consigna</b></h5>
            </div>
            <div class="card-body">
                <h5 class="card-title"></h5>
                <select class="form-select" aria-label="Default select example">
					<option selected>Seleccione tiempo</option>
					<option value="5">5 Segundos</option>
					<option value="10">10 Segundos</option>
					<option value="15">15 Segundos</option>
					<option value="20">20 Segundos</option>
				</select>
				</br>
				<div class="input-group mb-3">
				<input type="text" class="form-control" placeholder="Puntaje" aria-label="Username" aria-describedby="basic-addon1">
				</div>
                <p class="card-text"></p>
                <a  onclick="deleteItem(`+num+`)" class="btn btn-danger"><i class="fa fa-trash-can"></i></a>
            </div>
        </div>`;
        sidebar.insertAdjacentHTML("beforeend", item);
    });*/
    function deleteItem(element){
        let res = confirm("Seguro desea eliminar la consigna?");
        //let res = document.getElementById('exampleModal');
        //console.log(usuario);
        if(res){
            let items = document.getElementById(element);
            sidebar.removeChild(items);
        }
    }
	var num = 0;
	function addItem(tipo){
		let sidebar = document.getElementById('sidebar');
		num++;
        let item = `<div id="`+num+`"class="card px-2  mb-2">
            <div class="card-header">
               <h5><b>Consigna `+tipo+`</b></h5>
            </div>
            <div class="card-body">
                <h5 class="card-title"></h5>
                <select class="form-select" aria-label="Default select example">
					<option selected>Seleccione tiempo</option>
					<option value="5">5 Segundos</option>
					<option value="10">10 Segundos</option>
					<option value="15">15 Segundos</option>
					<option value="20">20 Segundos</option>
				</select>
				</br>
				<div class="input-group mb-3">
				<input type="text" class="form-control" placeholder="Puntaje" aria-label="Username" aria-describedby="basic-addon1">
				</div>
                <p class="card-text"></p>
                <a  onclick="deleteItem(`+num+`)" class="btn btn-danger"><i class="fa fa-trash-can"></i></a>
            </div>
        </div>`;
        sidebar.insertAdjacentHTML("beforeend", item);
		console.log('ingreso');
	}
</script>
    
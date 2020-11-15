arr = [];
function display() {
    var html="";
    for (var i = 0 ; i < arr.length ; i++ ) {
        html +='<li class="row"><div class="col-6 my-auto"><input class="mx-2" type="checkbox" onchange="doalert(this)" data-check='+i+'>'+arr[i]+'</div><div class="col-6"><input class="my-auto" type="text" id="input'+i+'" ><a href="javascript:void(0)" onclick="myfunction_edit('+i+')" class="edit btn btn-success px-3 mx-2 mt-1">Edit</a><a style="display:none;" href="javascript:void(0)" onclick="myfunction_update('+i+')" class="update btn btn-success px-3 mx-2 mt-1">Edit</a><a href="javascript:void(0)" onclick="myfunction_delete('+i+')" class="delete btn px-3 mt-1 btn-success">Delete</a></div></li>';
    }
    document.getElementById("to-do-list").innerHTML = html;
    document.getElementById("completed-task-list").innerHTML = html;
    console.log(arr);
}
function myfunction() {
    arr.push(document.getElementById("task_name").value);
    document.getElementById("task_name").value = "";
    display();    
}
function myfunction_delete(id) {
    for (var i = 0 ; i < arr.length ; i++ ) {
        if (id == i){
            arr.splice(i,1);
            break;
        }
    }
    display();
}
function myfunction_edit(id) {
    for (var i = 0 ; i < arr.length ; i++ ) {
        if (id == i){
            document.getElementById('input'+id+'').value = arr[i];
            document.getElementsByClassName('edit')[i].style.display = 'none';
            document.getElementsByClassName('update')[i].style.display = 'inline-block';
            break;
        }
    }
}
function myfunction_update(id) {
    for (var i = 0 ; i < arr.length ; i++ ) {
        if (id == i){
            arr[i]  = document.getElementById('input'+id+'').value;
            document.getElementsByClassName('edit')[i].style.display = 'inline-block';
            document.getElementsByClassName('update')[i].style.display = 'none';
            break;
        }
    }
    display();
}
function doalert(checkboxElem) {
  if (checkboxElem.checked) {
    alert ("hi");
  } else {
    alert ("bye");
  }
}
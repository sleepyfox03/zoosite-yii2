
function showZoo() { 

    $.ajax({
        type: "GET",
        url: "/zoo/zoo/view-zoo",
        dataType: "html",
        success: function (response) {
            $("#table-container").html(response);
            let table = new DataTable('#mytable1');
            $("#abc").html("");
        }
    });
}
function deleteZoo(id) { 

    $.ajax({
        type: "GET",
        url: "/zoo/zoo/delete-zoo?id="+id,
        dataType: "html",
        success: function (response1) {
            showZoo();
            alert("Deleted");
        }
    });
}    
function editZoo(id) { 

    $.ajax({
        type: "GET",
        url: "/zoo/zoo/edit-zoo?id="+id,
        dataType: "html",
        success: function (response) {
           
            $("#abc").html(response);
        }
    });
}  
function editzoobtn(id) {
    $("#form-editzoo").submit(function(e) {
 
         e.preventDefault(); // avoid to execute the actual submit of the form.
     
     } );
 
         $.ajax({
             type: "POST",
             url: '/zoo/zoo/edit-zoo?id='+id,
             data: $("#form-editzoo").serialize(), // serializes the form's elements.
             success: function(data)
             { showZoo();
               alert("submitted"); // show response from the php script. 
             }
         })       
 } 
function addZoo() { 

    $.ajax({
        type: "GET",
        url: "/zoo/zoo/add-zoo",
        dataType: "html",
        success: function (response1) {
            $("#abc").html(response1);
          
        }
    })
}
function addzoobtn() {
   $("#form-addzoo").submit(function(e) {

        e.preventDefault(); // avoid to execute the actual submit of the form.
    
    } );
        $.ajax({
            type: "POST",
            url: '/zoo/zoo/add-zoo',
            data: $("#form-addzoo").serialize(), // serializes the form's elements.
            success: function(data)
            { showZoo();
              alert("submitted"); // show response from the php script.
              
            }
        })
    }



function showAnimals() { 

    $.ajax({
        type: "GET",
        url: "/zoo/animalzoo/view-animals",
        dataType: "html",
        success: function (response) {
            $("#table-container").html(response);
            let table = new DataTable('#mytable2');

            $("#abc").html("");
        }
    });
}
function deleteAnimals(id) { 

    $.ajax({
        type: "GET",
        url: "/zoo/animalzoo/delete-animals?id="+id,
        dataType: "html",
        success: function (response1) {
            showAnimals();
            alert("Deleted");
        }
    });
}  
function addAnimals() { 

    $.ajax({
        type: "GET",
        url: "/zoo/animalzoo/add-animals",
        dataType: "html",
        success: function (response1) {
            $("#abc").html(response1);
          
        }
    })
}
function editAnimals(id) { 

    $.ajax({
        type: "GET",
        url: "/zoo/animalzoo/edit-animals?id="+id,
        dataType: "html",
        success: function (response) {
        
            $("#abc").html(response);
        }
    });
}    
function editanimalsbtn(id) {
    $("#form-editanimals").submit(function(e) {
 
         e.preventDefault(); // avoid to execute the actual submit of the form.
     
     } );
 
         $.ajax({
             type: "POST",
             url: '/zoo/animalzoo/edit-animals?id='+id,
             data: $("#form-editanimals").serialize(), // serializes the form's elements.
             success: function(data)
             { showAnimals();
               alert("submitted"); // show response from the php script. 
             }
         })       
 } 
function addanimalsbtn() {
   $("#form-addanimals").submit(function(e) {

        e.preventDefault(); // avoid to execute the actual submit of the form.
    
    } );
        $.ajax({
            type: "POST",
            url: '/zoo/animalzoo/add-animals',
            data: $("#form-addanimals").serialize(), // serializes the form's elements.
            success: function(data)
            { showAnimals();
              alert("submitted"); // show response from the php script.  
            }
        })
}






function showUsers() { 
    // console.log("showUsers");
    // $(document).ready(function () {
    //     // console.log("abc");
    //     $('#table-id').DataTable();
    // });
    $.ajax({
        type: "GET",
        url: "/zoo/user/view-user",
        dataType: "html",
        success: function (response) {
            
            $("#table-container").html(response);
            let table = new DataTable('#mytable');
            $("#abc").html("");
        }
        
    });
 
}
function deleteUsers(id) { 

    $.ajax({
        type: "GET",
        url: "/zoo/user/delete-user?id="+id,
        dataType: "html",
        success: function (response1) {
            showUsers();
            alert("Deleted");
        }
    });
}  
function addUsers() { 

    $.ajax({
        type: "GET",
        url: "/zoo/user/add-user",
        dataType: "html",
        success: function (response1) {
            $("#abc").html(response1);
          
        }
    })
}
function editUsers(id) { 

    $.ajax({
        type: "GET",
        url: "/zoo/user/edit-user?id="+id,
        dataType: "html",
        success: function (response) {
        
            $("#abc").html(response);
        }
    });
}    
function editusersbtn(id) {
    $("#form-editusers").submit(function(e) {
 
         e.preventDefault(); // avoid to execute the actual submit of the form.
     
     } );
 
         $.ajax({
             type: "POST",
             url: '/zoo/user/edit-user?id='+id,
             data: $("#form-editusers").serialize(), // serializes the form's elements.
             success: function(data)
             { showUsers();
               alert("submitted"); // show response from the php script. 
             }
         })       
 } 
function addusersbtn() {
   $("#form-addusers").submit(function(e) {

        e.preventDefault(); // avoid to execute the actual submit of the form.
    
    } );
        $.ajax({
            type: "POST",
            url: '/zoo/user/add-user',
            data: $("#form-addusers").serialize(), // serializes the form's elements.
            success: function(res)
            { alert(res); // show response)
                showUsers();
            //   alert("submitted"); // show response from the php script.  
            }
        })

}

function signUpBtn() { 

            $.ajax({
                type: "GET",
                url: "/zoo/user/signup",
                dataType: "html",
                success: function (response) {
                    alert(response);
                }
            })
            // .done(function (response) {
            //     alert(response);
            //     // window.location.reload();
            // })
 }

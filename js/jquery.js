$(document).ready(function(){
    alert("ketan");

    //inserting Data

    $('#btnadd').click(function (e) {
        e.preventDefault();

        let nm=$('#nameid').val()
        let em=$('#emailid').val()
        let pm=$('#passwordid').val()

        mydata={ name:nm, email:em, pasword:pm}

        console.log(mydata);

        $.ajax({
            url:'insert.php',
            method:'POST',
            data:JSON.stringify(mydata),
            success:function(data){

                msg="<div clas='alert alert-dark mt-3'>"+data+"</div>"
                $('#msg').html(msg);
                $('#myform')[0].reset();


            }

        });



    });

})
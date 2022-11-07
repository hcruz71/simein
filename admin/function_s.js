    function agregarRepre(){ 
        var datos=$('#form_repres').serialize();
        $.ajax({
            type:"POST",
            url:"db/admin/guardar_datos.php",
            data:datos,
            success:function(r){
                if(r==1){
                        
                    location.href='index.php';
                    }else{
                    
                    }
            }
       });
        return false;
    }

    function agregarDoctor(){ 
        var datos=$('#form_doctor').serialize();
        $.ajax({
            type:"POST",
            url:"db/admin/guardar_datos.php",
            data:datos,
            success:function(r){
                if(r==1){
                        
                    location.href='index.php';
                    }else{
                    
                    }
            }
       });
        return false;
    }

    function add_med(){ 
        var datos=$('#form_medicamentos').serialize();
        $.ajax({
            type:"POST",
            url:"db/admin/guardar_datos.php",
            data:datos,
            success:function(r){
                if(r==1){
                        
                    location.href='index.php';
                    }else{
                    
                    }
            }
       });
        return false;
    }

// BUSCADOR MED
    $(res_add_med());

    function res_add_med(nombre_med)
    {
        $.ajax({
            url : 'db/buscar.php',
            type : 'POST',
            dataType : 'html',
            data : { nombre_med: nombre_med },
            })

        .done(function(resultado){
            $("#tabla_res_add_med").html(resultado);
        })
    }

    $(document).on('keyup', '#buscar_med', function()
    {
        var valorBusqueda=$(this).val();
        if (valorBusqueda!="")
        {
            res_add_med(valorBusqueda);
        }
        else
            {
                res_add_med();
            }
    });

        function cargar_add_med(id_med){ 
        var id_med = id_med;
        $.ajax({  
                url:"db/fetch.php",  
                method:"POST",  
                data:{id_med:id_med},  
                dataType:"json",  
                success:function(data){  
                    $('#id_med').val(data.id);
                    $('#nombre_med').val(data.nombre);
                    $('#presentacion_med').val(data.presentacion);
                    $('#tabla_res_add_med').html('');

           }
       });
        return false;
    }
// BUSCADOR MED
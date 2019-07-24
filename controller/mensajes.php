<?php

function mensaje($tipos,$mensajes){
    if($tipos==0){
        $msg='
            <script>
                Push.create("hola mundo",{
                    body:"'.$mensajes.'",
                    icon:"../img/error.png",
                    timeout:4000
                });
            </script>
        ';
     
    }else{
        if($tipos==1){
            $msg='
            <script>
                Push.create("hola mundo",{
                    body:"'.$mensajes.'",
                    icon:"../img/correcto.png",
                    timeout:4000
                });
            <script>
            ';
       
        }
    }

}

?>
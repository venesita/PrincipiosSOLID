<? php

espacio de nombres  GSoares \ SOLID \ SingleResponsability ;

class  NoBalanceAvailableException  extiende \ Exception {}

clase  Producto {
     función  pública getValue () {}
}<? php

espacio de nombres  GSoares \ SOLID \ DependencyInversion ;

interfaz  PowerDevice
{
    función  pública en ();
    función  pública desactivada ();
       
}

clase  Computer  implementa  PowerDevice
{
     función  pública en ()
    {
        echo  '¡ Encendido de la computadora!' ;
    }
    
     función  pública desactivada ()
    {
        echo  'Apagar la computadora ...' ;
    }
}

 botón de clase 
{
    
     var PowerDevice
     
    private  $ powerDevice ;
    
     función  pública setPowerDevice ( PowerDevice  $ powerDevice )
    {
        $ esto -> powerDevice = $ powerDevice ;
    }
    
     función  pública turnOn ()
    {
        if (condición) { // alguna condición
            $ this -> powerDevice -> on ();
        }
    }
    
}

 cuenta de clase 
{
     función  pública getBalance () {}
     función  pública setBalance () {}
    
     función  pública calculateBalance ( $ valor )
    {
        $ esto -> setBalance ( $ esto -> getBalance () - $ valor );
    }
    
     función  pública haveBalanceAvailable ( $ valor )
    {
        devuelve  $ esto -> getBalance ()> = $ valor ;
    }
}

clase  cliente 
{
     función  pública getAccount () {}
}

 venta de clase
{
     función  pública getValue () {}
     función  pública setValue () {}
    
     venta de función  pública ( matriz $ productos , Cliente $ cliente )  
    {
        $ valor = $ esto -> calculateTotalValue ( $ productos );
        
        if (! $ cliente -> getAccount () -> haveBalanceAvailable ( $ valor )) {
            lanzar  nueva  NoBalanceAvailableException ();
        }

        /*..... alguna cosa.....*/
        
        $ esto -> setValue ( $ valor );
        $ cliente -> getAccount () -> calculateBalance ( $ valor );
    }
    
     función  pública calculateTotalValue ( matriz  $ productos )
    {
        $ valor = 0 ;
        
        foreach ( $ productos  como  $ producto ) {
            $ valor + = $ producto -> getValue ();
        }
        
        return  $ valor ;
    }
}
<? php

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
    / **
     * @var PowerDevice
     * /
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
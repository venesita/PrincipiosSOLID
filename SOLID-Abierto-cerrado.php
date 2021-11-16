<? php

espacio de nombres  GSoares \ SOLID \ OpenClosed ;

 Vehículo de clase  abstracta 
{
     función  pública ejecutar () {}
     función pública  abstracta turnOn (); 
}

clase  motocicleta  extiende  vehículo
{
     función  pública turnOn ()
    {
        echo  'Encendido de la motocicleta' ;
    } 
}

clase  coche  extiende  vehículo
{
     función  pública turnOn ()
    {
        echo  'Encendido del coche' ;
    }
}

clase  Camión  extiende  Vehículo
{
     función  pública turnOn ()
    {
        echo  'Encendido del camión' ;
    }
}

 conductor de clase 
{
     unidad de función  pública ( Vehículo $ vehículo ) 
    {
        $ vehículo -> turnOn ();
        $ vehículo -> ejecutar ();
    }
}
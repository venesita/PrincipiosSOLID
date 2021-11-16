<? php

espacio de nombres  GSoares \ SOLID \ InterfaceSegregation ;

interfaz de  vehículo 
{
	 función  pública ejecutar ();
}

interfaz  AutomotiveVehicle  extiende  Vehículo
{
     función  pública turnOn ();
     combustible de función  pública ();
}

clase  Implementos para motocicletas  AutomotrizVehículo 
{
     función  pública turnOn ()
    {
        echo  'Motocicleta Encendiendo ...' ;
    }

     función  pública ejecutar ()
    {
        echo  'Motocicleta en marcha ...' ;
    }

     combustible de función  pública ()
    {
        echo  'Alimenta la motocicleta' ;
    }
}

clase  Implementos para bicicletas  Vehículo  
{
	 función  pública ejecutar ()
	{
		echo  'Bicicleta corriendo ...' ;
	}
}
<? php 

espacio de nombres  GSoares \ SOLID \ LiskovSubstitution ;

 clase  abstracta paralelogramo 
{
     altura protegida $ ;
    protegido  $ ancho ;
    
     función  pública getWidth ()
    {
        devuelve  $ esto -> ancho ;
    }
    
     función  pública getHeight ()
    {
        devuelve  $ esto -> altura ;
    }
    
     función  pública calculateArea ()
    {
        devuelve  $ esto -> altura * $ esto -> ancho ;
    }
    
    cambio de  tamaño de la función abstracta  pública ( $ altura , $ ancho ); 
}

clase  Rectángulo  extiende  Paralelogramo 
{
	cambio de  tamaño de función  pública ( $ altura , $ ancho )
	{
	    $ esto -> altura = $ altura ;
	    $ esto -> ancho = $ ancho ;
	}
}

clase El  cuadrado  extiende el  paralelogramo {
    
	cambio de  tamaño de función  pública ( $ altura , $ ancho )
	{
	    $ esto -> ancho = $ ancho ;
	    $ esto -> altura = $ ancho ;
	}
}

clase  GraphicEditor
{
    cambio de  tamaño de la función  pública ( paralelogramo $ paralelogramo ) 
    {
        $ paralelogramo -> redimensionar (
            $ paralelogramo -> getHeight () * 2 ,
            $ paralelogramo -> getWidth () * 4
        );
    }
}